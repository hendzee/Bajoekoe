<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Common extends CI_Controller
{

    public function index()
    {
        $this->page_select('home');
    }

    // =====================
    // selecting normal page
    // =====================
    public function page_select($page)
    {
        $data = array();
        $nav_brand = array();
        $nav_category = array();
        $social_media = array();
        $active_nav = 'product';

        $nav_brand = $this->Database->get_data('brand_table');
        $nav_category = $this->Database->get_data('categories_table');
        $social_media = $this->Database->get_data('shop_info');

        switch ($page) {
            case 'home':
                $query = "SELECT * FROM items_table INNER JOIN stock_table using (id_item)
                    WHERE stock > 0 GROUP BY id_item, color ORDER BY publish_date DESC LIMIT 0, 8";
                $data['new_item'] = $this->Database->all_query($query);

                $query = "SELECT * FROM shop_promo WHERE id_ref = '001'";
                $data['shop_promo_1'] = $this->Database->all_query($query);

                $query = "SELECT * FROM shop_promo WHERE id_ref = '002'";
                $data['shop_promo_2'] = $this->Database->all_query($query);

                $query = "SELECT * FROM shop_promo WHERE id_ref = '003'";
                $data['shop_promo_3'] = $this->Database->all_query($query);

                $query = "SELECT * FROM shop_slider WHERE id_slider = '001'";
                $data['shop_slider_1'] = $this->Database->all_query($query);

                $query = "SELECT * FROM shop_slider WHERE id_slider = '002'";
                $data['shop_slider_2'] = $this->Database->all_query($query);

                $data['show_brand'] = $this->Database->get_data('brand_table');

                break;

            case 'product_list':
                $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item)";

                $data['data_items'] = $this->Database->all_query($query);
                $data['data_category'] = $this->Database->get_data('categories_table');
                $data['data_colors'] = $this->Database->get_data('colors_table');
                $data['data_size'] = $this->Database->get_data('size_table');
                break;

            case 'shoping_cart':
                if ($this->cart->total_items() < 1) {
                    $page = 'empty_cart';
                }
                break;

            case 'checkout_shiping':
                if ($this->cart->total_items() < 1) {
                    $page = 'empty_cart';
                } else {
                    if ($this->session->userdata('logged_in') == true) {
                        $member_email = $this->session->userdata('member_email');
                        $query = "SELECT * FROM customer_member WHERE email = '$member_email'";
                        $data = $this->Database->all_query($query);
                        $page = 'checkout_logged';
                    } else {
                        $page = 'checkout_shiping';
                    }
                }
                break;

            case 'empty_cart':
                $page = 'empty_cart';
                break;

            case 'login':
                if ($this->session->userdata('logged_in') == true) {
                    $page = 'home';
                } else {
                    $page = 'login';
                }
                break;

            case 'register':
                if ($this->session->userdata('logged_in') == true) {
                    $page = 'home';
                } else {
                    $page = 'register';
                }
                break;

            case 'payment':
                $page = 'payment';
                break;

            case 'order_check':
                $page = 'order_check';
                break;

            case 'account_dashboard':
                if ($this->session->userdata('logged_in') == true) {
                    $member_id = $this->session->userdata('member_id');

                    $query = "SELECT * FROM customer_member WHERE id_customer = '$member_id'";
                    $data['account'] = $this->Database->all_query($query);

                    $query = "SELECT *, SUM(price * number_item) AS total_pay FROM order_list INNER JOIN
                        order_item USING(id_order) WHERE id_customer = '$member_id' GROUP BY order_item.id_order
                        ORDER BY order_date DESC LIMIT 0, 3";
                    $data['order_history'] = $this->Database->all_query($query);

                    $page = 'account_dashboard';
                } else {
                    $page = 'NOT_FOUND';
                }
                break;

            case 'account_profile':
                if ($this->session->userdata('logged_in') == true) {
                    $member_id = $this->session->userdata('member_id');

                    $query = "SELECT * FROM customer_member WHERE id_customer = '$member_id'";
                    $data = $this->Database->all_query($query);

                    $page = 'account_profile';
                } else {
                    $page = 'NOT_FOUND';
                }
                break;

            case 'account_order':
                if ($this->session->userdata('logged_in') == true) {
                    $member_id = $this->session->userdata('member_id');

                    $query = "SELECT *, SUM(price * number_item) AS total_pay FROM order_list INNER JOIN
                        order_item USING(id_order) WHERE id_customer = '$member_id' GROUP BY order_item.id_order
                        ORDER BY order_date DESC";
                    $data = $this->Database->all_query($query);

                    $page = 'account_order';
                } else {
                    $page = 'NOT_FOUND';
                }
                break;

            case 'account_shiping':
                if ($this->session->userdata('logged_in') == true) {
                    $member_id = $this->session->userdata('member_id');

                    $query = "SELECT * FROM customer_member WHERE id_customer = '$member_id'";
                    $data = $this->Database->all_query($query);

                    $page = 'account_shiping';
                } else {
                    $page = 'NOT_FOUND';
                }
                break;

            case 'account_wishlist':
                if ($this->session->userdata('logged_in') == true) {
                    $member_id = $this->session->userdata('member_id');

                    $query = $query = "SELECT wishlist_table.id_item, wishlist_table.color,
                    brand, items_table.name, price, wishlist_table.color FROM items_table
                    INNER JOIN wishlist_table using(id_item) INNER JOIN stock_table
                    using(id_item) WHERE id_customer = '$member_id' AND stock > 0
                    GROUP BY color, items_table.name";
                    $data = $this->Database->all_query($query);

                    $page = 'account_wishlist';
                } else {
                    $page = 'NOT_FOUND';
                }
                break;

            case 'about':
                $page = 'about';
                $data = $this->Database->get_data('shop_info');
                break;

            default:
                $page = 'NOT_FOUND';
                break;
        }
        $this->load->view('header/header_script');
        $this->load->view('header/header', array(
            'nav_brand' => $nav_brand,
            'nav_category' => $nav_category,
            'active_nav' => $active_nav));
        $this->load->view('contents/' . $page, array('data_content' => $data));
        $this->load->view('footer/footer', array('social_media' => $social_media));
        $this->load->view('footer/footer_script');
    }

    // =======================================
    // selecting product lis based on category,
    // brand or gender
    // =======================================
    public function product_list_param($param, $value)
    {
        $data = array();
        $nav_brand = array();
        $nav_category = array();
        $social_media = array();
        $active_nav = 'product';
        $query = "";

        $nav_brand = $this->Database->get_data('brand_table');
        $nav_category = $this->Database->get_data('categories_table');
        $social_media = $this->Database->get_data('shop_info');

        switch ($param) {
            case 'gender':
                $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item) WHERE gender='$value'
                 OR gender = 'B'";
                break;

            case 'brand':
                $active_nav = 'brand';
                $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item) WHERE brand='$value'";
                break;

            case 'category':
                $active_nav = 'category';
                $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item) WHERE category='$value'";
                break;

            case 'sale':
                $active_nav = 'sale';
                $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item) WHERE discount > 0";
                break;

            case 'name':
                $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item) WHERE items_table.name LIKE '%$value%'";
                break;

            default:
                break;
        }

        $data['data_items'] = $this->Database->all_query($query);
        $data['data_category'] = $this->Database->get_data('categories_table');
        $data['data_colors'] = $this->Database->get_data('colors_table');
        $data['data_size'] = $this->Database->get_data('size_table');

        $this->load->view('header/header_script');
        $this->load->view('header/header', array(
            'nav_brand' => $nav_brand,
            'nav_category' => $nav_category,
            'active_nav' => $active_nav));
        $this->load->view('contents/product_list', array('data_content' => $data));
        $this->load->view('footer/footer', array('social_media' => $social_media));
        $this->load->view('footer/footer_script');
    }

    // =========================================
    // searching product list based on category,
    // brand or gender
    // =========================================
    public function search_product_list()
    {
        $data = array();
        $nav_brand = array();
        $nav_category = array();
        $social_media = array();
        $active_nav = 'product';
        $query = "";
        $value = $this->input->post('value');

        $nav_brand = $this->Database->get_data('brand_table');
        $nav_category = $this->Database->get_data('categories_table');
        $social_media = $this->Database->get_data('shop_info');

        $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item) WHERE items_table.name LIKE '%$value%' OR brand LIKE '%$value%'";
        $data['data_items'] = $this->Database->all_query($query);
        $data['data_category'] = $this->Database->get_data('categories_table');
        $data['data_colors'] = $this->Database->get_data('colors_table');
        $data['data_size'] = $this->Database->get_data('size_table');

        $this->load->view('header/header_script');
        $this->load->view('header/header', array(
            'nav_brand' => $nav_brand,
            'nav_category' => $nav_category,
            'active_nav' => $active_nav));
        $this->load->view('contents/product_list', array('data_content' => $data));
        $this->load->view('footer/footer', array('social_media' => $social_media));
        $this->load->view('footer/footer_script');
    }

    // ====================
    // preview product list
    // ====================
    public function page_single_product($id_item, $color)
    {
        $data = array();
        $data_color = array();
        $data_size = array();
        $nav_brand = array();
        $data_comment = array();
        $social_media = array();
        $active_nav = 'product';
        $nav_category = array();
        $first_color = $color;

        $nav_brand = $this->Database->get_data('brand_table');
        $nav_category = $this->Database->get_data('categories_table');
        $social_media = $this->Database->get_data('shop_info');

        $query = "SELECT * FROM items_table INNER JOIN image_item using (id_item) WHERE id_item = '$id_item' AND color='$color'";
        $data = $this->Database->all_query($query);

        $query = "SELECT * FROM stock_table WHERE id_item = '$id_item' AND color != '$color' AND stock > 0 GROUP BY color ";
        $data_color = $this->Database->all_query($query);

        $query = "SELECT * FROM stock_table WHERE id_item = '$id_item' AND color = '$color' AND stock > 0 GROUP BY size";
        $data_size = $this->Database->all_query($query);

        $query = "SELECT * FROM customer_member INNER JOIN ratings_table WHERE id_item = '$id_item' AND color = '$color'";
        $data_comment = $this->Database->all_query($query);

        $this->load->view('header/header_script');
        $this->load->view('header/header', array(
            'nav_brand' => $nav_brand,
            'nav_category' => $nav_category,
            'active_nav' => $active_nav));
        $this->load->view('contents/single_product', array(
            'first_color' => $first_color,
            'data_content' => $data,
            'data_color' => $data_color,
            'data_size' => $data_size,
            'data_comment' => $data_comment));
        $this->load->view('footer/footer', array('social_media' => $social_media));
        $this->load->view('footer/footer_script');
    }

    // ==============
    // review product
    // ==============
    public function add_rating()
    {
        $data = array();
        $id_item = $this->input->post('id-item');
        $color = $this->input->post('color');
        $rating = $this->input->post('rating');
        $review = $this->input->post('review');
        $email = 'hendras@gmail.com';
        $review_date = date('Y-m-d H:i:s');
        $msg = '';

        $query = "SELECT * FROM ratings_table WHERE email = '$email'
            AND id_item = '$id_item' AND color = '$color'";
        $data = $this->Database->all_query($query);

        if ($this->session->has_userdata('member_email')) {
            if (COUNT($data) > 0) {
                $this->Database->update_data('ratings_table',

                    array(
                        'rating' => $rating,
                        'review' => $review,
                        'review_date' => $review_date,
                    ), array(
                        'email' => $email,
                        'id_item' => $id_item,
                        'color' => $color,
                    ));

                $msg = '<div class="col-md-7">'
                    . '<div class="alert alert-info alert-dismissable">'
                    . 'ulasan anda telah diupdate'
                    . '</div>'
                    . '</div>';

            } else {
                $this->Database->create_data('ratings_table',

                    array(
                        'email' => $email,
                        'id_item' => $id_item,
                        'color' => $color,
                        'rating' => $rating,
                        'review' => $review,
                        'review_date' => $review_date,
                    ));

                $msg = '<div class="col-md-7">'
                    . '<div class="alert alert-info alert-dismissable">'
                    . 'ulasan anda telah dicatat'
                    . '</div>'
                    . '</div>';

            }

            $this->session->set_flashdata('msg', $msg);
            redirect('Common/page_single_product/' . $id_item . '/' . $color);

        } else {
            redirect('Common/page_select/home');
        }
    }

    // =====================
    // insert item into cart
    // =====================
    public function insert_cart()
    {
        $id = $this->input->post('id-item');
        $name = $this->input->post('item-name');
        $qty = $this->input->post('quantity');
        $color = $this->input->post('color-chosen');
        $size = $this->input->post('size-chosen');
        $price = $this->input->post('price');
        $image = $this->input->post('image');
        $get_update = false;
        $r_id = '';
        $query = "SELECT * FROM stock_table WHERE id_item = '$id' AND color = '$color' AND size='$size'";
        $get_stock = $this->Database->all_query($query);
        $num_stock = 0;
        $num_stock_oncart = 0;
        $stock_amount = 0;

        foreach ($get_stock as $val) {
            $num_stock = $val['stock'];
        }

        foreach ($this->cart->contents() as $items) {
            if ($items['options']['size'] == $size && $items['options']['color'] &&
                $items['id'] == $id) {
                $num_stock_oncart = $items['qty'];
            }
        }

        $stock_amount = $num_stock - ($num_stock_oncart + $qty);

        if ($stock_amount >= 0) {
            $data = array(
                'id' => $id,
                'qty' => (int) $qty,
                'price' => (int) $price,
                'name' => $name,
                'image' => $image,
                'options' => array('size' => $size, 'color' => $color),
            );

            if ($this->cart->total_items() > 0) {
                foreach ($this->cart->contents() as $items) {
                    $r_id = $items['rowid'];

                    if ($size == $items['options']['size'] && $color == $items['options']['color']) {
                        $get_update = true;
                        break;
                    }
                }
                if ($get_update == true) {
                    $new_quantity = $items['qty'] + (int) $qty;
                    $new_data = array(
                        'rowid' => $r_id,
                        'qty' => (int) $new_quantity,
                    );
                    $this->cart->update($new_data);
                } else {
                    $this->cart->insert($data);
                }
            } else {
                $this->cart->insert($data);
            }

            redirect('Common/page_select/product_list');

        } else {
            $msg = '<div class="col-md-7">'
                . '<div class="alert alert-warning alert-dismissable">'
                . 'maaf stock barang yang tersedia tinggal ' . $num_stock . ' buah'
                . '</div>'
                . '</div>';

            $this->session->set_flashdata('msg', $msg);

            redirect('Common/page_single_product/' . $id . '/' . $color);
        }
    }

    // ===================================
    // remove selected item list from cart
    // ===================================
    public function remove_item_cart($rowid, $from)
    {
        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => 0,
        ));

        if ($from == 'shop') {
            redirect('Common/page_select/product_list');
        } else {
            redirect('Common/page_select/shoping_cart');
        }

    }

    // =================================
    // change size and color combobox on
    // single page (preview item page)
    // =================================
    public function ajax_single_product()
    {
        $id_item = $this->input->post('id_item');
        $color = $this->input->post('color');
        $data = array();

        $query = "SELECT * FROM image_item WHERE id_item = '$id_item' AND color = '$color'";
        $data['image'] = $this->Database->all_query($query);

        $query = "SELECT * FROM stock_table WHERE id_item = '$id_item' AND color = '$color' AND stock > 0 GROUP BY size";
        $data['size'] = $this->Database->all_query($query);

        echo json_encode($data);
    }

    // =================
    // add wishlist item
    // =================
    public function ajax_wishlist()
    {
        $id_customer = $this->session->userdata('member_id');
        $id_item = $this->input->post('id_item');
        $color = $this->input->post('color_item');
        $check_data = array();
        $response = '';

        $query = "SELECT * FROM wishlist_table WHERE id_customer = '$id_customer' AND
            id_item = '$id_item' AND color = '$color'";

        $check_data = $this->Database->all_query($query);

        if (COUNT($check_data) > 0) {
            $response = 'item sudah ada di wishlist anda';
        } else {
            $this->Database->create_data('wishlist_table',
                array(
                    'id_customer' => $id_customer,
                    'id_item' => $id_item,
                    'color' => $color,
                ));
            $response = 'item ditambahkan pada wishlist anda';
        }

        echo json_encode($response);

    }

    // =================
    // delete wishlist item
    // =================
    public function delete_wishlist($id_item, $color)
    {
        $id_customer = $this->session->userdata('member_id');                

        $this->Database->delete_data('wishlist_table', array(
            'id_customer' => $id_customer,
            'id_item' => $id_item,
            'color' => $color,
        ));        

        $this->session->set_flashdata('msg', $msg);

        redirect('Common/page_select/account_wishlist');
    }

    // ============================
    // change quantity item on cart
    // ============================
    public function update_cart()
    {
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        $id_item = $this->input->post('id_item');
        $color = $this->input->post('color');
        $size = $this->input->post('size');
        $get_stock = array();
        $stock = 0;
        $amount = 0;

        $query = "SELECT * FROM stock_table WHERE id_item = '$id_item' AND color = '$color' AND size = '$size'";

        $get_stock = $this->Database->all_query($query);

        foreach ($get_stock as $val) {
            $stock = $val['stock'];
        }

        $amount = $stock - $qty;

        if ($amount >= 0) {
            $this->cart->update(array(
                'rowid' => $rowid,
                'qty' => $qty,
            ));
        } else {
            $msg = '<div class="col-md-7">'
                . '<div class="alert alert-warning alert-dismissable">'
                . 'maaf stock barang yang tersedia tinggal ' . $stock . ' buah'
                . '</div>'
                . '</div>';

            $this->session->set_flashdata('msg', $msg);
        }

        redirect('Common/page_select/shoping_cart');
    }

    // ====================================
    // handle page shiping_payment data and
    // edit_shiping_address data
    // ====================================
    public function page_data_shiping()
    {
        $data_content = array();
        $nav_brand = array();
        $nav_category = array();
        $social_media = array();
        $active_nav = 'product';
        $page = $this->input->post('page');
        $first_name = $this->input->post('first-name');
        $last_name = $this->input->post('last-name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $country = $this->input->post('country');
        $city = $this->input->post('city');
        $province = $this->input->post('province');
        $address = $this->input->post('address');
        $zip_code = $this->input->post('zip-code');
        $ship_info = $country . ', ' . $city . ', ' . $province . ', ' . $address . ', ' . $zip_code;

        $nav_brand = $this->Database->get_data('brand_table');
        $nav_category = $this->Database->get_data('categories_table');
        $social_media = $this->Database->get_data('shop_info');

        $data_content = array(
            'dt_first_name' => $first_name,
            'dt_last_name' => $last_name,
            'dt_email' => $email,
            'dt_phone' => $phone,
            'dt_country' => $country,
            'dt_city' => $city,
            'dt_province' => $province,
            'dt_address' => $address,
            'dt_zip_code' => $zip_code,
            'dt_ship_info' => $ship_info,
        );

        $this->load->view('header/header_script');
        $this->load->view('header/header', array(
            'nav_brand' => $nav_brand,
            'nav_category' => $nav_category,
            'active_nav' => $active_nav));
        $this->load->view('contents/' . $page, $data_content);
        $this->load->view('footer/footer', array('social_media' => $social_media));
        $this->load->view('footer/footer_script');
    }

    // ==============================
    // create order
    // ==============================
    public function create_order()
    {
        $id_order = $this->Database->create_id('order_list');
        $id_customer = '';
        $date = date('Y-m-d H:i:s');
        $first_name = $this->input->post('first-name');
        $last_name = $this->input->post('last-name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $country = $this->input->post('country');
        $city = $this->input->post('city');
        $province = $this->input->post('province');
        $address = $this->input->post('address');
        $zip_code = $this->input->post('zip-code');
        $ship_info = $country . ', ' . $city . ', ' . $province . ', ' . $address . ', ' . $zip_code;
        $valid = true;

        if ($this->session->userdata('logged_in') == true) {
            $member_id = $this->session->userdata('member_id');
            $id_customer = $this->session->userdata('member_id');
        } else {
            $id_customer = 'GUEST';
        }

        $data_order_list = array(
            'id_order' => $id_order,
            'id_customer' => $id_customer,
            'order_date' => $date,
            'email_buyer' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone_buyer' => $phone,
            'ship_info' => $ship_info,
            'order_status' => 'NEW ORDER',
        );

        $this->Database->create_data('order_list', $data_order_list);

        foreach ($this->cart->contents() as $items) {
            $data_list_item = array(
                'id_order' => $id_order,
                'id_item' => $items['id'],
                'name' => $items['name'],
                'color' => $items['options']['color'],
                'size' => $items['options']['size'],
                'price' => $items['price'],
                'number_item' => $items['qty'],
            );
            $id_item_temp = $items['id'];
            $color_temp = $items['options']['color'];
            $size_temp = $items['options']['size'];
            $num_stock = 0;

            $query = "SELECT * FROM stock_table WHERE id_item = '$id_item_temp' AND color = '$color_temp'
                AND size = '$size_temp'";

            $get_stock = $this->Database->all_query($query);

            foreach ($get_stock as $val) {
                $num_stock = $val['stock'];
            }

            //update stock qty
            $this->Database->update_data(
                'stock_table',
                array('stock' => $num_stock - $items['qty']),
                array(
                    'id_item' => $items['id'],
                    'color' => $items['options']['color'],
                    'size' => $items['options']['size'],
                )
            );

            $this->Database->create_data('order_item', $data_list_item);
        }

        redirect('Common/page_order_received/' . $id_order . '/' . date('Y-m-d', strtotime($date)) . '/' . $this->cart->total());
    }

    // =========================================
    // information that order successful created
    // =========================================
    public function page_order_received($id_order, $date_order, $total_payment)
    {
        $data = array();
        $nav_brand = array();
        $nav_category = array();
        $social_media = array();
        $active_nav = 'product';

        $nav_brand = $this->Database->get_data('brand_table');
        $nav_category = $this->Database->get_data('categories_table');
        $social_media = $this->Database->get_data('shop_info');

        if ($this->cart->total_items() < 1) {
            redirect('Common/page_select/empty_cart');
        } else {
            $this->cart->destroy();

            $this->load->view('header/header_script');
            $this->load->view('header/header', array(
                'nav_brand' => $nav_brand,
                'nav_category' => $nav_category,
                'active_nav' => $active_nav));
            $this->load->view('contents/order_received', array(
                'data_id' => $id_order,
                'data_date' => $date_order,
                'data_payment' => $total_payment));
            $this->load->view('footer/footer', array('social_media' => $social_media));
            $this->load->view('footer/footer_script');
        }
    }

    // =============================
    // upload payment check transfer
    // =============================
    public function payment_check()
    {
        $id_order = $this->input->post('id-order');
        $transfer_bank = $this->input->post('transfer-bank');
        $note = $this->input->post('note');
        $data = array();
        $image_name = '';
        $msg = '';

        $query = "SELECT * FROM order_list WHERE id_order = '$id_order' ";

        $data = $this->Database->all_query($query);

        if (count($data) < 1) {
            $msg = '<div class="col-md-7">'
                . '<div class="alert alert-warning alert-dismissable">'
                . 'Order ID tidak terdaftar dalam pesanan kami.'
                . '</div>'
                . '</div>';

        } else {
            do {
                $random_code = rand(0, 1000);
                $image_name = 'tok_' . $random_code;
                $query = "SELECT * FROM payment_report WHERE token_image = '$image_name'";

                $data = $this->Database->all_query($query);

                if (count($data) < 1) {
                    break;
                }
            } while (true);

            $config = array(
                'file_name' => $image_name,
                'upload_path' => './assets/images/token_images/',
                'allowed_types' => 'jpg|png|jpeg',
                'max_size' => 100,
            );

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('token-img')) {
                $msg = '<div class="col-md-7">'
                . '<div class="alert alert-warning alert-dismissable">'
                . $this->upload->display_errors()
                    . '</div>'
                    . '</div>';

            } else {
                $data_image = $this->upload->data();

                $this->Database->create_data('payment_report', array(
                    'id_order' => $id_order,
                    'transfer_bank' => $transfer_bank,
                    'token_image' => $data_image['file_name'],
                    'note' => $note,
                    'report_date' => date('Y-m-d H:i:s'),
                ));

                $msg = '<div class="col-md-7">'
                    . '<div class="alert alert-info alert-dismissable">'
                    . 'Terimakasih, kami akan segera melakukan pengecekkan.'
                    . '</div>'
                    . '</div>';
            }
        }

        $this->session->set_flashdata('msg', $msg);
        redirect('Common/page_select/payment');
    }

    public function order_check()
    {
        $id_order = $this->input->post('id-order');
        $email = $this->input->post('email');
        $data = array();
        $flashdata = '';

        $query = "SELECT * FROM order_list WHERE id_order = '$id_order'
            AND email_buyer = '$email'";

        $data = $this->Database->all_query($query);

        if (count($data) < 1) {
            $msg = '<div class="col-md-7">'
                . '<div class="alert alert-warning alert-dismissable">'
                . 'Order ID tidak terdaftar dalam pesanan kami.'
                . '</div>'
                . '</div>';

        } else {
            $status = '';
            $msg_status = '';

            foreach ($data as $val) {
                $status = $val['order_status'];
            }

            if ($status == 'CANCELED') {
                $msg_status = 'Pesanan anda dibatalkan, silahkan hubungi kami untuk lebih jelasnya.';
            } elseif ($status == 'PAID OFF') {
                $msg_status = 'Pesanan anda dalam proses pemaketan.';
            } elseif ($status == 'SHIPPED') {
                $msg_status = 'Pesanan anda sudah kami kirim, terimakasih.';
            }

            $msg = '<div class="col-md-7">'
                . '<div class="alert alert-info alert-dismissable">'
                . $msg_status
                . '</div>'
                . '</div>';
        }

        $this->session->set_flashdata('msg', $msg);
        redirect('Common/page_select/order_check');

    }

    // =======================================
    // login
    // =======================================
    public function check_auth()
    {
        $member_id = '';
        $member_name = '';
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array();
        $msg = '';

        $query = "SELECT *  FROM customer_member WHERE email = '$email' AND password = '$password' AND member_status = 'ACTIVE'";

        $data = $this->Database->all_query($query);

        if (count($data) > 0) {
            foreach ($data as $val) {
                $member_name = $val['first_name'];
                $member_id = $val['id_customer'];
            }

            $this->session->set_userdata(array(
                'logged_in' => true,
                'member_id' => $member_id,
                'member_email' => $email,
                'member_name' => $member_name,
            ));

            redirect('Common/page_select/home');
        } else {
            redirect('Common/page_select/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('Common/page_select/home');
    }

    // ==============================
    // register customer
    // ==============================
    public function member_register()
    {
        $id_customer = $this->Database->create_id('customer_member');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $first_name = $this->input->post('first-name');
        $last_name = $this->input->post('last-name');
        $get_user = array();

        $query = "SELECT * FROM customer_member WHERE email = '$email'";

        $get_user = $this->Database->all_query($query);

        if (count($get_user) > 0) {
            $msg = '<div class="col-md-7">'
                . '<div class="alert alert-warning alert-dismissable">'
                . 'Email yang anda gunakan sudah terdaftar, silahkan login / gunakan email lain untuk register.'
                . '</div>'
                . '</div>';

            $this->session->set_flashdata('msg', $msg);
            redirect('Common/page_select/register');
        } else {
            $this->Database->create_data('customer_member', array(
                'id_customer' => $id_customer,
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'password' => $password,
                'member_status' => 'ACTIVE',
            ));

            $this->session->set_userdata(array(
                'logged_in' => true,
                'member_email' => $email,
                'member_name' => $first_name,
            ));

            redirect('Common/page_select/home');
        }
    }

    // =========================================
    // udate addreess of customer member shiping
    // =========================================
    public function update_account_shiping()
    {
        $member_id = $this->session->userdata('member_id');
        $phone = $this->input->post('phone');
        $country = $this->input->post('country');
        $city = $this->input->post('city');
        $province = $this->input->post('province');
        $address = $this->input->post('address');
        $zip_code = $this->input->post('zip-code');

        $data = array(
            'phone' => $phone,
            'country' => $country,
            'city' => $city,
            'province' => $province,
            'address' => $address,
            'zip_code' => $zip_code,
        );

        $this->Database->update_data('customer_member', $data, array('id_customer' => $member_id));

        $msg = '<div class="col-xs-12">'
            . '<div class="alert alert-info alert-dismissable">'
            . 'Data alamat pengiriman anda berhasil diperbaruhi.'
            . '</div>'
            . '</div>';

        $this->session->set_flashdata('msg', $msg);
        redirect('Common/page_select/account_shiping');
    }

    // ===========================================
    // update member data profile (name and email)
    // ===========================================
    public function update_account_profile()
    {
        $member_id = $this->session->userdata('member_id');
        $member_email = $this->session->userdata('member_email');
        $first_name = $this->input->post('first-name');
        $last_name = $this->input->post('last-name');
        $email = $this->input->post('email');
        $get_account = array();
        $data = array();
        $msg = '';

        $query = "SELECT * FROM customer_member WHERE email <> '$member_email' AND email = '$email'";
        $get_account = $this->Database->all_query($query);

        if (count($get_account) > 0) {
            $msg = '<div class="col-xs-12">'
                . '<div class="alert alert-warning alert-dismissable">'
                . 'Email baru yang anda gunakan sudah terdaftar.'
                . '</div>'
                . '</div>';
        } else {
            $data = array(
                'email' => $email,
                'first_name' => $first_name,
                'last_name' => $last_name,
            );

            $this->Database->update_data('customer_member', $data, array('id_customer' => $member_id));
            $this->session->set_userdata(array('member_email' => $email));

            $msg = '<div class="col-xs-12">'
                . '<div class="alert alert-info alert-dismissable">'
                . 'Profil anda berhasil diperbaruhi.'
                . '</div>'
                . '</div>';
        }

        $this->session->set_flashdata('msg', $msg);
        redirect('Common/page_select/account_profile');

    }

    // =============================
    // Detail order on user history
    // =============================

    public function page_detail_order($id_order)
    {
        $data = array();
        $nav_brand = array();
        $nav_category = array();
        $active_nav = 'product';

        $nav_brand = $this->Database->get_data('brand_table');
        $nav_category = $this->Database->get_data('categories_table');
        $query = "SELECT *, order_item.price * number_item AS subtotal FROM items_table INNER JOIN
            order_item using(id_item) WHERE id_order = '$id_order'";
        $data = $this->Database->all_query($query);

        $this->load->view('header/header_script');
        $this->load->view('header/header', array(
            'nav_brand' => $nav_brand,
            'nav_category' => $nav_category,
            'active_nav' => $active_nav));
        $this->load->view('contents/account_detailorder', array('data_content' => $data));
        $this->load->view('footer/footer');
        $this->load->view('footer/footer_script');

    }
}
