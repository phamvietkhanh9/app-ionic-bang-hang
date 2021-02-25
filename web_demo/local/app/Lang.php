<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Lang extends Authenticatable {
    public function getAll() {
        $vietnamese = [

            'rating' => 'Đánh giá về thực phẩm của chúng tôi',
            'location_title' => 'Vị trí của bạn',
            'location_change' => 'Thay đổi',
            'store_trending' => 'Xu hướng',
            'store_close' => 'Cửa hàng sẽ đóng cửa ngay bây giờ.',
            'home_title' => 'Trang chủ',
            'search_title' => 'Tìm kiếm',
            'profile_title' => 'Trang cá nhân',
            'setting_title' => 'Cái đặt tài khoản',
            'user_name' => 'Tên đầy đủ',
            'user_email' => 'Email',
            'username_msg' => 'email này sẽ là tên tài khoản của bạn',
            'user_phone' => 'Số điện thoại',
            'user_password' => 'Đổi mật khẩu',
            'user_button' => 'Cập nhật',
            'logout' => 'Thoát',
            'profile_welcome' => 'Chào mừng',
            'order_history' => 'Lịch sử đơn hàng',
            'profile_infomation' => 'Thông tin cá nhân',
            'item_title' => 'Sản phẩm',
            'item_price' => 'Giá',
            'item_qty' => 'Số lượng',
            'item_total' => 'Tổng',
            'item_status' => 'Trạng thái',
            'item_cancel' => 'Huỷ',
            'item_empty' => 'Rất tiếc! Bạn chưa có đơn đặt hàng nào.',
            'account_update' => 'Cập nhật cài đặt tài khoản',
            'success_line' => 'Đơn hàng của bạn đã được đặt thành công. Số đặt hàng là',
            'success_notify' => 'Bạn sẽ được thông báo khi trạng thái đơn hàng thay đổi',
            'success_home' => 'Trở về trang chủ',
            'checkout_welcome' => 'Vui lòng xem lại địa chỉ giao hàng của bạn trước khi đặt hàng',
            'checkout_title' => 'Thanh toán',
            'checkout_del' => 'Địa chỉ giao hàng',
            'checkout_notes' => 'Bất kỳ hướng dẫn đặc biệt nào',
            'place_order' => 'Đặt hàng',
            'signup_account' => 'Bạn cần tạo tài khoản?',
            'signup' => 'Đăng ký',
            'choose_password' => 'Chọn mật khẩu',
            'signup_welcome' => 'Tạo tài khoản để đặt hàng nhanh',
            'signup_title' => 'Đăng ký',
            'fb' => 'Đăng nhập với Facebook',
            'or' => 'Hoặc',
            'login_account' => "Bạn không có tài khoản?",
            'login_signup' => 'Đăng ký ngay',
            'login_password' => 'Mật khẩu',
            'login_username' => 'Tên đăng nhập/Email',
            'login_welcome' => 'Hãy đăng nhập để tiếp tục',
            'login_title' => 'Đăng nhập',
            'offer_title' => 'Nhập mã giảm giá',
            'offer_apply' => 'Áp dụng ngay bây giờ',
            'cart_payable_amount' => 'Số tiền phải trả',
            'cart_apply_code' => 'Áp dụng mã phiếu thưởng',
            'cart_change_code' => 'Thay đổi mã phiếu thưởng',
            'cart_d_charges' => 'Phí giao hàng',
            'cart_discount' => 'Giảm giá',
            'cart_total' => 'Tổng số tiền',
            'cart_title' => 'Xem giỏ hàng',
            'search_title' => 'Tìm kiếm',
            'search_text' => 'Tìm kiếm nhà hàng, món ăn',
            'search_hint' => 'Nhập từ khoá...',
            'search_new' => 'Mới mở cửa',
            'search_trend' => 'Đang thịnh hành',
            'search_discount' => 'Giảm giá',
            'checkout_delivery' => 'Giao hàng tận nơi',
            'checkout_pickup' => 'Tự nhận hàng',
            'chat_title' => 'Chat',
            'chat_text' => 'Có vấn đề gì không? đừng lo lắng, hãy cho chúng tôi biết chúng tôi sẽ giúp bạn.',
            'chat_message' => 'Viết tin nhắn của bạn',
            'chat_success' => 'Cảm ơn! Chúng tôi đã nhận được tin nhắn của bạn.',
            'chat_error' => 'Vui lòng cập nhật email của bạn để gửi tin nhắn cho chúng tôi',
        ];

        $english = [

            'rating' => 'Rate us, how was the food ',
            'location_title' => 'Your Location',
            'location_change' => 'Change',
            'store_trending' => 'Trending',
            'store_close' => 'Store is closed right now.',
            'home_title' => 'Home',
            'search_title' => 'Search',
            'profile_title' => 'Profile',
            'setting_title' => 'Account Setting',
            'user_name' => 'Full Name',
            'user_email' => 'Email',
            'username_msg' => 'this email will be your username',
            'user_phone' => 'Phone',
            'user_password' => 'Change Your Password',
            'user_button' => 'Update',
            'logout' => 'Logout',
            'profile_welcome' => 'Welcome',
            'order_history' => 'Order History',
            'profile_infomation' => 'Profile Information',
            'item_title' => 'Item',
            'item_price' => 'Price',
            'item_qty' => 'Quantity',
            'item_total' => 'Total',
            'item_status' => 'Status',
            'item_cancel' => 'Cancel',
            'item_empty' => 'Rất tiếc! You do not have any order yet.',
            'account_update' => 'Update Account Setting',
            'success_line' => 'Your Order Placed Successfully. Order ID is',
            'success_notify' => 'You will be notify when order status changed',
            'success_home' => 'Back To Home',
            'checkout_welcome' => 'Please Review Your Delivery Address Before Place Order',
            'checkout_title' => 'Checkout',
            'checkout_del' => 'Delivery Address',
            'checkout_notes' => 'Any Special instruction',
            'place_order' => 'Place Order',
            'signup_account' => 'Already have an account?',
            'signup' => 'Signup',
            'choose_password' => 'Choose Password',
            'signup_welcome' => 'Create Your Account For Fast Ordering',
            'signup_title' => 'Signup',
            'fb' => 'Login With Facebook',
            'or' => 'OR',
            'login_account' => "Don't have an account?",
            'login_signup' => 'Signup Now',
            'login_password' => 'Password',
            'login_username' => 'Username/Email',
            'login_welcome' => 'Please Login To Continue',
            'login_title' => 'Login',
            'offer_title' => 'Apply Coupon Code',
            'offer_apply' => 'Apply Now',
            'cart_payable_amount' => 'Payable Amount',
            'cart_apply_code' => 'Apply Coupon Code',
            'cart_change_code' => 'Change Coupon Code',
            'cart_d_charges' => 'Delivery Charges',
            'cart_discount' => 'Discount',
            'cart_total' => 'Total Amount',
            'cart_title' => 'View Cart',
            'search_title' => 'Search',
            'search_text' => 'Search for restaurants, dishes',
            'search_hint' => 'Start typing...',
            'search_new' => 'Newly Opened',
            'search_trend' => 'Trending',
            'search_discount' => 'Discount',
            'checkout_delivery' => 'Home Delivery',
            'checkout_pickup' => 'Pickup',
            'chat_title' => 'Chat',
            'chat_text' => 'Having any problem? do not worry, let us know we will help you.',
            'chat_message' => 'Write Your Message',
            'chat_success' => 'Thank You! we have received your message.',
            'chat_error' => 'Please update your email for send us a message',
        ];

        return ['vietnamese' => $vietnamese, 'english' => $english];
    }
}