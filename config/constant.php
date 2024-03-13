<?php

define('STORE_PRODUCT_DETAIL', 'store.product.detail');
define('STORE', 'store');
define('STORE_DETAIL', 'store.detail');
define('VNP_TMNCODE', '0MXE8R5O');
define('VNP_HASHSECRET', 'MPWTZMJNAFXHKCJUQBHQUSUESFOISYFD');
define('VNP_URL', 'https://sandbox.vnpayment.vn/paymentv2/vpcpay.html');
define('VNP_RETURNURL', '127.0.0.1:8000/store/vnpay/result');

//Store cart
define('STORE_CART', 'store.cart');
define('STORE_ADD_CART', 'store.add.cart');
define('STORE_REMOVE_CART', 'store.remove.cart');
define('STORE_DELETE_CART', 'store.delete.cart');
define('STORE_GET_MEMORY', 'store.get.memory');
define('STORE_CREATE_PAYMENT', 'store.create.payment');
define('STORE_CART_DETAIL', 'store.cart.detail');
define('STORE_LIST_CATEGORY', 'store.list.category');
define('SEND_MAIL', 'send.mail');

//Auth
define('ADMIN_LOGIN', 'admin.login');
define('STORE_LOGIN', 'store.login');
define('STORE_REGISTER', 'store.register');
define('STORE_LOGOUT', 'store.logout');
define('STORE_VERIFY_TOKEN', 'store.verify.token');
define('STORE_FORM_FORGOT_PASSWORD', 'store.form.forgot.password');
define('STORE_FORGOT_PASSWORD', 'store.forgot.password');
define('STORE_FORM_RESET_PASSWORD', 'store.form.reset.password');
define('STORE_RESET_PASSWORD', 'store.reset.password');

//Cutomer
define('STORE_CUSTOMER_INFO', 'store.customer.info');
define('STORE_CUSTOMER_BILL', 'store.customer.bill');
define('STORE_CUSTOMER_SAVE_INFO', 'store.customer.save.info');
define('STORE_GET_DISTRICT', 'store.get.district');

//Payment VNPay
define('CREATE_PAYMENT_VNPAY', 'create.payment.vnpay');
define('RESULT_PAYMENT_VNPAY', 'result.payment.vnpay');

//Payment Momo
define('VIEW_PAYMENT_MOMO', 'view.payment.momo');
define('CREATE_PAYMENT_MOMO', 'create.payment.momo');
define('RESULT_PAYMENT_MOMO', 'result.payment.momo');
define('MOMO_PARTNER_CODE', 'MOMOBKUN20180529');
define('MOMO_ACCESS_KEY', 'klm05TvNBzhg7h7j');
define('MOMO_SECRET_KEY', 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa');
define('MOMO_NOTIFY_URL', 'http://127.0.0.1:8000/store/momo/ipn_momo');
define('MOMO_BANK_CODE', 'SML');

//Alert
define('CHANGE_SUCCESS', 'Thay đổi thành công');
define('ADD_SUCCESS', 'Thêm thành công');
define('DELETE_SUCCESS', 'Xoá thành công');
define('CHANGE_FAIL', 'Thay đổi thất bại');
define('ADD_FAIL', 'Thêm thất bại');
define('DELETE_FAIL', 'Xoá thất bại');

//Admin dashboard + ajax
define('ADMIN_DASHBOARD', 'admin.dashboard');
define('AJAX_GET_PRODUCT_TYPE', 'ajax.get.product.type');

//Admin product CRUD
define('ADMIN_PRODUCT_STORE', 'admin.product.store');
define('ADMIN_PRODUCT_INDEX', 'admin.product.index');
define('ADMIN_PRODUCT_CREATE', 'admin.product.create');
define('ADMIN_PRODUCT_EDIT', 'admin.product.edit');
define('ADMIN_PRODUCT_DELETE', 'admin.product.delete');
define('GET_PRODUCT_SPECIAL', 'get.product.special');
define('GET_PRODUCT_COLOR', 'get.product.color');

//Admmin product type CRUD
define('ADMIN_PRODUCT_TYPE_STORE', 'admin.product.type.store');
define('ADMIN_PRODUCT_TYPE_INDEX', 'admin.product.type.index');
define('ADMIN_PRODUCT_TYPE_CREATE', 'admin.product.type.create');
define('ADMIN_PRODUCT_TYPE_EDIT', 'admin.product.type.edit');
define('ADMIN_PRODUCT_TYPE_DELETE', 'admin.product.type.delete');

//Admmin product color CRUD
define('ADMIN_PRODUCT_COLOR_STORE', 'admin.product.color.store');
define('ADMIN_PRODUCT_COLOR_INDEX', 'admin.product.color.index');
define('ADMIN_PRODUCT_COLOR_CREATE', 'admin.product.color.create');
define('ADMIN_PRODUCT_COLOR_EDIT', 'admin.product.color.edit');
define('ADMIN_PRODUCT_COLOR_DELETE', 'admin.product.color.delete');

//Admmin product special CRUD
define('ADMIN_PRODUCT_SPECIAL_STORE', 'admin.product.special.store');
define('ADMIN_PRODUCT_SPECIAL_INDEX', 'admin.product.special.index');
define('ADMIN_PRODUCT_SPECIAL_CREATE', 'admin.product.special.create');
define('ADMIN_PRODUCT_SPECIAL_EDIT', 'admin.product.special.edit');
define('ADMIN_PRODUCT_SPECIAL_DELETE', 'admin.product.special.delete');

//Admin invoice
define('ADMIN_INVOICE_INDEX', 'admin.invoice.index');
define('ADMIN_INVOICE_DETAIL', 'admin.invoice.detail');
define('ADMIN_INVOICE_UPDATE', 'admin.invoice.update');

//Product Component
define('ADMIN_PRODUCT_COMPONENT_CREATE', 'admin.product.component.create');
define('ADMIN_PRODUCT_COMPONENT_STORE', 'admin.product.component.store');

define('PRODUCT_MEMORY', [
    '32'    => '32GB',
    '64'    => '64GB',
    '128'   => '128GB'
]);

define('PAGINATE_DEFAULT', 5);
