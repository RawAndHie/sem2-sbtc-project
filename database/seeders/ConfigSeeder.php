<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('configs')->truncate();
        \Illuminate\Support\Facades\DB::table('configs')->insert([
            [
                'id' => 1,
                'contactUsPage' => '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"font-size:16px\">Li&ecirc;n Hệ</span></p>\r\n\r\n<p>Để kh&ocirc;ng ngừng n&acirc;ng cao chất lượng dịch vụ v&agrave; đ&aacute;p ứng tốt hơn những y&ecirc;u cầu của Qu&yacute; Kh&aacute;ch,</p>\r\n\r\n<p>ch&uacute;ng t&ocirc;i mong muốn nhận được những th&ocirc;ng tin phản hồi. Nếu qu&yacute; kh&aacute;ch c&oacute; bất kỳ thắc mắc hoặc&nbsp;</p>\r\n\r\n<p>d&oacute;ng g&oacute;p n&agrave;o , xin vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i theo th&ocirc;ng tin dưới đ&acirc;y.&nbsp; Ch&uacute;ng t&ocirc;i sẽ phản hồi lại&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Qu&yacute; kh&aacute;ch trong thơi gian mới nhất.</p>',
                'aboutUsPage' => '<h3><span style=\"font-size:22px\">Giới thiệu</span></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:22px\"><strong>Lịch sử ra đời DoiDoSBTC.vn</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">DoiDo.vn ra đời khi 5 người gặp nhau gồm&nbsp;<strong>Nguyễn Minh T&uacute;,&nbsp;Trần Anh Đức,&nbsp;Nguyễn Quang Huy,&nbsp;Đinh Mạnh Tr&iacute;,&nbsp;Điều Huy Ph&uacute;c</strong> . Cả 5 c&ugrave;ng c&oacute; &yacute; tưởng trước đ&oacute; về một trang web để mọi người c&oacute; thể trao đổi những m&oacute;n đồ kh&ocirc;ng d&ugrave;ng đến với nhau m&agrave; kh&ocirc;ng mất tiền, rất nhanh sau đ&oacute;, trang web DoiDoSBTC.vn được sinh ra đời.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:22px\"><strong>DoiDoSBTC.vn l&agrave; g&igrave;?</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">DoiDoSBTC.vn l&agrave; s&agrave;n trao đổi đồ ngang h&agrave;ng, kh&ocirc;ng d&ugrave;ng tiền mặt, th&agrave;nh vi&ecirc;n c&oacute; thể trao đổi bất kỳ m&oacute;n đồ n&agrave;o m&agrave; m&igrave;nh đang sở hữu. Mỗi th&agrave;nh vi&ecirc;n chỉ việc đăng m&oacute;n đồ của m&igrave;nh l&ecirc;n v&agrave; c&oacute; th&agrave;nh vi&ecirc;n kh&aacute;c th&iacute;ch m&oacute;n đồ của m&igrave;nh, cả hai c&ugrave;ng thực hiện lệnh đổi đồ cho nhau. L&uacute;c n&agrave;y, hệ thống ghi nhận cả 2 đ&atilde; thực hiện việc đổi đồ cho nhau, cả hai tự sắp xếp hẹn nhau ngo&agrave;i đời để trao đổi, khi trao đổi xong sẽ l&ecirc;n website x&aacute;c nhận lại với hệ thống bằng những h&igrave;nh ảnh đ&atilde; chụp v&agrave; nhận điểm (số điểm n&agrave;y c&oacute; thể t&iacute;ch lũy để đổi qu&agrave;).</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:22px\"><strong>Tại sao KH&Ocirc;NG tiền mặt?</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">Ch&uacute;ng t&ocirc;i nhận thấy rằng, tiền tệ c&oacute; 2 mặt của n&oacute;. Mặt tốt gi&uacute;p mọi người c&oacute; thể chi ti&ecirc;u v&agrave; trao đổi những c&aacute;i m&igrave;nh muốn; mặt kh&aacute;c, tiền l&agrave;m con người bị lệ thuộc v&agrave;o n&oacute;, từ đ&acirc;y mọi người h&agrave;nh động bất chấp để c&oacute; tiền, v&agrave; từ đ&acirc;y bắt đầu sinh ra nhiều hệ lụy. Vậy giải ph&aacute;p n&agrave;o để con người đạt được c&aacute;i họ muốn m&agrave; kh&ocirc;ng cần d&ugrave;ng đến tiền? C&acirc;u trả lời ch&iacute;nh l&agrave;:<strong>&nbsp;barter trade</strong>&nbsp;-<strong>&nbsp;trao đổi ngang h&agrave;ng.</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-size:22px\"><strong>Sứ mệnh của DoiDoSBTC.vn</strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\">- Ph&aacute;t triển s&agrave;n đổi đồ ngang h&agrave;ng (barter trade) lớn nhất Việt Nam.<br />\r\n- Chung tay bảo vệ m&ocirc;i trường bằng c&aacute;ch t&aacute;i sử dụng những m&oacute;n đồ cũ, hạn chế thải r&aacute;c ra m&ocirc;i trường.<br />\r\n- Nơi mọi người c&oacute; thể thực h&agrave;nh việc &quot;Cho - Nhận&quot; xuất ph&aacute;t từ đ&aacute;y l&ograve;ng, một c&aacute;ch ch&acirc;n thật nhất.<br />\r\n- Nơi giao lưu, kết bạn đ&uacute;ng nghĩa.</span></p>',
                'policyPage' => 'html mau',
                'titlePage' => 'html mau',
                'descriptionPage' => 'html mau',
                'keywordPage' => 'html mau',
                'created_at' => Carbon::create(2021, 8, 21, 21, 40, 16), //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
