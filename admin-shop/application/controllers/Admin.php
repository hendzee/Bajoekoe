<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->page_select('dashboard');
    }

    public function page_select($page)
    {
        $data = array();

        switch ($page) {
            case 'dashboard':
                $page = 'dashboard';

                $query = "SELECT *, SUM(price * number_item) AS total_pay FROM order_list INNER JOIN
                    order_item USING(id_order) GROUP BY order_item.id_order ORDER BY order_date DESC LIMIT 0, 7";
                $data['latest_order'] = $this->Database->all_query($query);

                $query = "SELECT * FROM items_table INNER JOIN stock_table using(id_item) INNER JOIN image_item
					using(id_item) GROUP BY image_item.image_one ORDER BY add_date DESC LIMIT 0, 4";
                $data['recent_stock'] = $this->Database->all_query($query);

                $data['num_member'] = count($this->Database->get_data('customer_member'));

                $data['num_product'] = count($this->Database->get_data('items_table'));

                $query = "SELECT SUM(number_item) AS total_selling FROM order_list INNER JOIN order_item
					using(id_order) WHERE order_status = 'SHIPPED'";
                $data['num_selling'] = $this->Database->all_query($query);

                $query = "SELECT * FROM order_list WHERE order_status = 'NEW ORDER'";
                $data['num_neworder'] = count($this->Database->all_query($query));

                break;

            case 'category':
                $page = 'category';

                $data['brand'] = $this->Database->get_data('brand_table');
                $data['categories'] = $this->Database->get_data('categories_table');
                $data['colors'] = $this->Database->get_data('colors_table');
                $data['size'] = $this->Database->get_data('size_table');
                break;

            case 'product':
                $page = 'product';

                $data['data_product'] = $this->Database->get_data('items_table');
                $data['brand'] = $this->Database->get_data('brand_table');
                $data['categories'] = $this->Database->get_data('categories_table');

                break;

            case 'table_order':
                $page = 'table_order';

                $data = $this->Database->get_data('order_list');
                break;

            case 'table_neworder':
                $page = 'table_neworder';

                $query = "SELECT * FROM order_list WHERE order_status = 'NEW ORDER'";
                $data = $this->Database->all_query($query);
                break;

            case 'table_payorder':
                $page = 'table_payorder';

                $query = "SELECT * FROM order_list WHERE order_status = 'PAID OFF'";
                $data = $this->Database->all_query($query);
                break;

            case 'table_successorder':
                $page = 'table_successorder';

                $query = "SELECT * FROM order_list WHERE order_status = 'SHIPPED'";
                $data = $this->Database->all_query($query);
                break;

            case 'table_cancelorder':
                $page = 'table_cancelorder';

                $query = "SELECT * FROM order_list WHERE order_status = 'CANCELED'";
                $data = $this->Database->all_query($query);
                break;

            default:
                echo "NOT FOUND";
                break;
        }

        $this->load->view('header/header_script');
        $this->load->view('header/header_menu');
        $this->load->view('contents/main_sidebar');
        $this->load->view('contents/' . $page, array('data_content' => $data));
        $this->load->view('footer/footer_content');
        $this->load->view('footer/footer_script');
    }

    public function add_categories()
    {
        $type = $this->input->post('type');
        $flashdata = '';

        switch ($type) {
            case 'brand':
                $brand = $this->input->post('brand');
                $query = "SELECT * FROM brand_table WHERE brand = '$brand'";
                $get_data = $this->Database->all_query($query);

                if (count($get_data) > 0) {
                    $flashdata = '
						<div class="callout callout-warning">
        				<h4>Gagal!</h4>
        				Data yang dimasukkan sudah ada dalam database.
      					</div>';
                } else {
                    if ($_FILES['brand-logo']['size'] > 0) {
                        $image_name = '';

                        do {
                            $random_code = rand(0, 1000);
                            $image_name = 'brand_' . $random_code;
                            $query = "SELECT * FROM brand_table WHERE logo = '$image_name'";

                            $data = $this->Database->all_query($query);

                            if (count($data) < 1) {
                                break;
                            }
                        } while (true);

                        $config = array(
                            'file_name' => $image_name,
                            'upload_path' => '../assets/images/common_image/',
                            'max_size' => 100,
                            'allowed_types' => 'jpg|png|jpeg',
                        );

                        $this->load->library('upload', $config);

                        if (!$this->upload->do_upload('brand-logo')) {
                            $flashdata = '
							<div class="callout callout-warning">
							<h4>Gagal!</h4>'
                            . $this->upload->display_errors()
                                . '</div>';
                        } else {
                            $data_image = $this->upload->data();

                            $this->Database->create_data('brand_table', array(
                                'brand' => $brand,
                                'logo' => $data_image['file_name'],
                            ));

                            $flashdata = '
								<div class="callout callout-info">
								<h4>Sukses!</h4>
								Brand baru berhasil ditambahkan pada database.
								</div>';

                        }
                    } else {
                        $this->Database->create_data('brand_table', array(
                            'brand' => $brand,
                        ));

                        $flashdata = '
							<div class="callout callout-info">
							<h4>Sukses!</h4>
							Brand baru berhasil ditambahkan pada database.
							</div>';
                    }
                }
                break;

            case 'color':
                $color = strtoupper($this->input->post('color'));
                $color_code = strtoupper($this->input->post('color-code'));

                $query = "SELECT * FROM colors_table WHERE color = '$color'";
                $get_data = $this->Database->all_query($query);

                if (count($get_data) > 0) {
                    $flashdata = '
						<div class="callout callout-warning">
        				<h4>Gagal!</h4>
        				Data yang dimasukkan sudah ada dalam database.
      					</div>';
                } else {
                    $this->Database->create_data('colors_table', array(
                        'color' => $color,
                        'color_code' => $color_code));
                    $flashdata = '
						<div class="callout callout-info">
        				<h4>Sukses!</h4>
        				Warna baru berhasil ditambahkan pada database.
      					</div>';
                }
                break;

            case 'size':
                $size_val = strtoupper($this->input->post('size'));
                $query = "SELECT * FROM size_table WHERE size_val = '$size_val'";
                $get_data = $this->Database->all_query($query);

                if (count($get_data) > 0) {
                    $flashdata = '
						<div class="callout callout-warning">
        				<h4>Gagal!</h4>
        				Data yang dimasukkan sudah ada dalam database.
      					</div>';
                } else {
                    $this->Database->create_data('size_table', array('size_val' => $size_val));
                    $flashdata = '
						<div class="callout callout-info">
        				<h4>Sukses!</h4>
        				Ukuran baru berhasil ditambahkan pada database.
      					</div>';
                }
                break;

            case 'category':
                $category = strtoupper($this->input->post('category'));
                $query = "SELECT * FROM categories_table WHERE category = '$category'";
                $get_data = $this->Database->all_query($query);

                if (count($get_data) > 0) {
                    $flashdata = '
						<div class="callout callout-warning">
        				<h4>Gagal!</h4>
        				Data yang dimasukkan sudah ada dalam database.
      					</div>';
                } else {
                    $this->Database->create_data('categories_table', array('category' => $category));
                    $flashdata = '
						<div class="callout callout-info">
        				<h4>Sukses!</h4>
        				Kategori baru berhasil ditambahkan pada database.
      					</div>';
                }
                break;

            default:
                # code...
                break;
        }

        $this->session->set_flashdata('msg', $flashdata);
        redirect('Admin/page_select/category');
    }

    public function add_product()
    {
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $discount = $this->input->post('discount');
        $gender = $this->input->post('gender');
        $brand = $this->input->post('brand');
        $category = $this->input->post('category');
        $weight = $this->input->post('weight');
        $dimension = $this->input->post('dimension');
        $note = $this->input->post('note');
        $description = $this->input->post('description');
        $flashdata = '';

        $query = "SELECT * FROM items_table WHERE items_table.name = '$name'";
        $get_data = $this->Database->all_query($query);

        if (count($get_data) > 0) {
            $flashdata = '
                <div class="callout callout-warning">
                <h4>Gagal!</h4>
                Data yang dimasukkan sudah ada dalam database.
                </div>';

        } else {
            $this->Database->create_data('items_table', array(
                'id_item' => $this->Database->create_id('items_table'),
                'name' => $name,
                'price' => $price,
                'discount' => $discount,
                'gender' => $gender,
                'brand' => $brand,
                'category' => $category,
                'weight' => $weight,
                'dimension' => $dimension,
                'note' => $note,
                'description' => $description,
                'publish_date' => date('Y-m-d H:i:s'),

            ));

            $flashdata = '
                <div class="callout callout-info">
                <h4>Sukses!</h4>
                Kategori baru berhasil ditambahkan pada database.
                </div>';

        }

        $this->session->set_flashdata('msg', $flashdata);
        redirect('Admin/page_select/product');

    }

    public function page_invoice($id_order)
    {
        $data = array();

        $query = "SELECT * FROM order_list WHERE id_order = '$id_order'";
        $data['order_list'] = $this->Database->all_query($query);

        $query = "SELECT *, (price * number_item) AS subtotal FROM order_item WHERE id_order = '$id_order'";
        $data['order_item'] = $this->Database->all_query($query);

        $query = "SELECT * FROM payment_report WHERE id_order = '$id_order'";
        $data['payment_report'] = $this->Database->all_query($query);

        $this->load->view('header/header_script');
        $this->load->view('header/header_menu');
        $this->load->view('contents/main_sidebar');
        $this->load->view('contents/invoice', array('data_content' => $data));
        $this->load->view('footer/footer_content');
        $this->load->view('footer/footer_script');

    }

     public function readonly_invoice($id_order)
    {
        $data = array();

        $query = "SELECT * FROM order_list WHERE id_order = '$id_order'";
        $data['order_list'] = $this->Database->all_query($query);

        $query = "SELECT *, (price * number_item) AS subtotal FROM order_item WHERE id_order = '$id_order'";
        $data['order_item'] = $this->Database->all_query($query);

        $query = "SELECT * FROM payment_report WHERE id_order = '$id_order'";
        $data['payment_report'] = $this->Database->all_query($query);

        $this->load->view('header/header_script');
        $this->load->view('header/header_menu');
        $this->load->view('contents/main_sidebar');
        $this->load->view('contents/readonly_invoice', array('data_content' => $data));
        $this->load->view('footer/footer_content');
        $this->load->view('footer/footer_script');

    }

    public function update_order_status()
    {
        $id_order = $this->input->post('id-order');
        $order_status = $this->input->post('order-status');
        $page = '';

        if ($order_status == 'CANCELED') {
            $page = 'table_cancelorder';
            $query = "SELECT * FROM order_item WHERE id_order = '$id_order'";
            $get_data = $this->Database->all_query($query);

            foreach ($get_data as $val) {
                $id_item = $val['id_item'];
                $color = $val['color'];
                $size = $val['size'];
                $number_item = $val['number_item'];

                $check_query = "SELECT * FROM stock_table WHERE id_item = '$id_item' AND
                    color = '$color' AND size = '$size'";
                $get_stock = $this->Database->all_query($check_query);

                if (count($get_stock) > 0) {
                    $current_stock = 0;

                    foreach ($get_stock as $val_stock) {
                        $current_stock = $val_stock['stock'];
                    }

                    $this->Database->update_data('stock_table',
                        array('stock' => ($current_stock + $number_item)),
                        array(
                            'id_item' => $id_item,
                            'color' => $color,
                            'size' => $size,
                        ));
                } else {
                    $this->Database->create_data('stock_table',
                        array(
                            'id_item' => $id_item,
                            'color' => $color,
                            'size' => $size,
                            'stock' => $number_item,
                            'add_date' => date('Y-m-d H:i:s'),
                        ));
                }
            }

        } elseif ($order_status == 'PAID OFF') {
            $page = 'table_payorder';
        } elseif ($order_status == 'SHIPPED') {
            $page = 'table_successorder';
        }

        $this->Database->update_data('order_list', array('order_status' => $order_status),
            array('id_order' => $id_order));

        redirect('Admin/page_select/' . $page);
    }
}
