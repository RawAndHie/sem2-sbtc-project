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
                'contactUsPage' => '<p style="text-align:center"><span style="font-size:36px"><strong>Li&ecirc;n hệ</strong></span></p>

<p style="text-align:center"><span style="font-size:18px">Để kh&ocirc;ng ngừng n&acirc;ng cao chất lượng dịch vụ v&agrave; đ&aacute;p ứng tốt hơn nữa c&aacute;c y&ecirc;u cầu của Qu&yacute; kh&aacute;ch, ch&uacute;ng t&ocirc;i mong muốn nhận được c&aacute;c th&ocirc;ng tin phản hồi. Nếu Qu&yacute; kh&aacute;ch c&oacute; bất kỳ thắc mắc hoặc đ&oacute;ng g&oacute;p n&agrave;o, xin vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i theo th&ocirc;ng tin dưới đ&acirc;y. Ch&uacute;ng t&ocirc;i sẽ phản hồi lại Qu&yacute; kh&aacute;ch trong thời gian sớm nhất.</span></p>
',
                'aboutUsPage' => '<h3><span style="font-size:22px">Giới thiệu</span></h3>

<p>&nbsp;</p>

<h2><span style="font-size:22px"><strong>Lịch sử ra đời DoiDoSBTC.vn</strong></span></h2>

<p>&nbsp;</p>

<p><span style="font-size:14px">DoiDo.vn ra đời khi 5 người gặp nhau gồm&nbsp;<strong>Nguyễn Minh T&uacute;,&nbsp;Trần Anh Đức,&nbsp;Nguyễn Quang Huy,&nbsp;Đinh Mạnh Tr&iacute;,&nbsp;Điều Huy Ph&uacute;c</strong> . Cả 5 c&ugrave;ng c&oacute; &yacute; tưởng trước đ&oacute; về một trang web để mọi người c&oacute; thể trao đổi những m&oacute;n đồ kh&ocirc;ng d&ugrave;ng đến với nhau m&agrave; kh&ocirc;ng mất tiền, rất nhanh sau đ&oacute;, trang web DoiDoSBTC.vn được sinh ra đời.</span></p>

<p>&nbsp;</p>

<h2><span style="font-size:22px"><strong>DoiDoSBTC.vn l&agrave; g&igrave;?</strong></span></h2>

<p>&nbsp;</p>

<p><span style="font-size:14px">DoiDoSBTC.vn l&agrave; s&agrave;n trao đổi đồ ngang h&agrave;ng, kh&ocirc;ng d&ugrave;ng tiền mặt, th&agrave;nh vi&ecirc;n c&oacute; thể trao đổi bất kỳ m&oacute;n đồ n&agrave;o m&agrave; m&igrave;nh đang sở hữu. Mỗi th&agrave;nh vi&ecirc;n chỉ việc đăng m&oacute;n đồ của m&igrave;nh l&ecirc;n v&agrave; c&oacute; th&agrave;nh vi&ecirc;n kh&aacute;c th&iacute;ch m&oacute;n đồ của m&igrave;nh, cả hai c&ugrave;ng thực hiện lệnh đổi đồ cho nhau. L&uacute;c n&agrave;y, hệ thống ghi nhận cả 2 đ&atilde; thực hiện việc đổi đồ cho nhau, cả hai tự sắp xếp hẹn nhau ngo&agrave;i đời để trao đổi, khi trao đổi xong sẽ l&ecirc;n website x&aacute;c nhận lại với hệ thống bằng những h&igrave;nh ảnh đ&atilde; chụp v&agrave; nhận điểm (số điểm n&agrave;y c&oacute; thể t&iacute;ch lũy để đổi qu&agrave;).</span></p>

<p>&nbsp;</p>

<h2><span style="font-size:22px"><strong>Tại sao KH&Ocirc;NG tiền mặt?</strong></span></h2>

<p>&nbsp;</p>

<p><span style="font-size:14px">Ch&uacute;ng t&ocirc;i nhận thấy rằng, tiền tệ c&oacute; 2 mặt của n&oacute;. Mặt tốt gi&uacute;p mọi người c&oacute; thể chi ti&ecirc;u v&agrave; trao đổi những c&aacute;i m&igrave;nh muốn; mặt kh&aacute;c, tiền l&agrave;m con người bị lệ thuộc v&agrave;o n&oacute;, từ đ&acirc;y mọi người h&agrave;nh động bất chấp để c&oacute; tiền, v&agrave; từ đ&acirc;y bắt đầu sinh ra nhiều hệ lụy. Vậy giải ph&aacute;p n&agrave;o để con người đạt được c&aacute;i họ muốn m&agrave; kh&ocirc;ng cần d&ugrave;ng đến tiền? C&acirc;u trả lời ch&iacute;nh l&agrave;:<strong>&nbsp;barter trade</strong>&nbsp;-<strong>&nbsp;trao đổi ngang h&agrave;ng.</strong></span></p>

<p>&nbsp;</p>

<h2><span style="font-size:22px"><strong>Sứ mệnh của DoiDoSBTC.vn</strong></span></h2>

<p>&nbsp;</p>

<p><span style="font-size:14px">- Ph&aacute;t triển s&agrave;n đổi đồ ngang h&agrave;ng (barter trade) lớn nhất Việt Nam.<br />
- Chung tay bảo vệ m&ocirc;i trường bằng c&aacute;ch t&aacute;i sử dụng những m&oacute;n đồ cũ, hạn chế thải r&aacute;c ra m&ocirc;i trường.<br />
- Nơi mọi người c&oacute; thể thực h&agrave;nh việc &quot;Cho - Nhận&quot; xuất ph&aacute;t từ đ&aacute;y l&ograve;ng, một c&aacute;ch ch&acirc;n thật nhất.<br />
- Nơi giao lưu, kết bạn đ&uacute;ng nghĩa.</span></p>
',
                'policyPage' => '<p style="text-align:center">Chỉnh sửa trang policy</p>
 text-align:justify"><span style="font-size:14px"><span style="background-color:#ffffff"><span style="color:#535258"><span style="font-family:&quot;B Koodak&quot;,&quot;X Koodak&quot;,Koodak,Arial">13.4. Nếu bạn đ&atilde; đăng k&yacute; một t&agrave;i khoản với ch&uacute;ng t&ocirc;i, c&aacute; nh&acirc;n bạn c&oacute; thể truy cập v&agrave;/hoặc sửa dữ liệu c&aacute; nh&acirc;n của bạn m&agrave; ch&uacute;ng t&ocirc;i đang lưu giữ hoặc kiểm so&aacute;t th&ocirc;ng qua trang Thiết Lập T&agrave;i Khoản hoặc nh&atilde;n tr&ecirc;n Nền tảng. Nếu bạn chưa đăng k&yacute; t&agrave;i khoản với ch&uacute;ng t&ocirc;i, c&aacute; nh&acirc;n bạn c&oacute; thể y&ecirc;u cầu truy cập v&agrave;/hoặc sửa dữ liệu c&aacute; nh&acirc;n của bạn m&agrave; ch&uacute;ng t&ocirc;i đang lưu giữ hoặc kiểm so&aacute;t bằng c&aacute;ch gửi y&ecirc;u cầu bằng văn bản cho ch&uacute;ng t&ocirc;i. Ch&uacute;ng t&ocirc;i sẽ cần c&oacute; đủ th&ocirc;ng tin từ bạn để x&aacute;c định danh t&iacute;nh của bạn cũng như bản chất y&ecirc;u cầu của bạn để c&oacute; thể giải quyết y&ecirc;u cầu của bạn. Do đ&oacute;, vui l&ograve;ng gửi y&ecirc;u cầu bằng văn bản của bạn bằng c&aacute;ch gửi email cho nh&acirc;n vi&ecirc;n Quản l&yacute; dữ liệu của ch&uacute;ng t&ocirc;i tại&nbsp;<a href="https://help.shopee.vn/vn/s/contactusform" style="box-sizing:border-box; background:0px 0px transparent; color:#428bca; text-decoration:none"><u>Đ&Acirc;Y</u></a>.</span></span></span></span></p>

<p style="margin-left:36px; text-align:justify"><span style="font-size:14px"><span style="background-color:#ffffff"><span style="color:#535258"><span style="font-family:&quot;B Koodak&quot;,&quot;X Koodak&quot;,Koodak,Arial">13.5. Ch&uacute;ng t&ocirc;i c&oacute; thể t&iacute;nh một khoản ph&iacute; hợp l&yacute; cho bạn để giải quyết v&agrave; xử l&yacute; y&ecirc;u cầu truy cập dữ liệu c&aacute; nh&acirc;n của bạn. Nếu ch&uacute;ng t&ocirc;i c&oacute; t&iacute;nh ph&iacute;, ch&uacute;ng t&ocirc;i sẽ cung cấp cho bạn ước t&iacute;nh lệ ph&iacute; bằng văn bản. Vui l&ograve;ng lưu &yacute; rằng ch&uacute;ng t&ocirc;i kh&ocirc;ng buộc phải đ&aacute;p ứng hay giải quyết y&ecirc;u cầu truy cập của bạn trừ phi bạn đ&atilde; đồng &yacute; đ&oacute;ng ph&iacute;.</span></span></span></span></p>

<p style="margin-left:36px; text-align:justify"><span style="font-size:14px"><span style="background-color:#ffffff"><span style="color:#535258"><span style="font-family:&quot;B Koodak&quot;,&quot;X Koodak&quot;,Koodak,Arial">13.6. Ch&uacute;ng t&ocirc;i bảo lưu quyền từ chối sửa dữ liệu c&aacute; nh&acirc;n của bạn theo c&aacute;c quy định của ph&aacute;p luật về bảo vệ b&iacute; mật th&ocirc;ng tin c&aacute; nh&acirc;n, trường hợp c&aacute;c điều luật đ&oacute; y&ecirc;u cầu v&agrave;/hoặc cho ph&eacute;p một tổ chức từ chối sửa dữ liệu c&aacute; nh&acirc;n trong c&aacute;c trường hợp như thế.</span></span></span></span></p>

<p style="margin-left:24px; text-align:justify"><span style="font-size:14px"><span style="background-color:#ffffff"><span style="color:#535258"><span style="font-family:&quot;B Koodak&quot;,&quot;X Koodak&quot;,Koodak,Arial"><strong>14.</strong><strong>&nbsp;</strong><strong>THẮC MẮC, QUAN NGẠI HOẶC KHIẾU NẠI? LI&Ecirc;N HỆ VỚI CH&Uacute;NG T&Ocirc;I</strong></span></span></span></span></p>

<p style="margin-left:36px; text-align:justify"><span style="font-size:14px"><span style="background-color:#ffffff"><span style="color:#535258"><span style="font-family:&quot;B Koodak&quot;,&quot;X Koodak&quot;,Koodak,Arial">Nếu bạn c&oacute; bất kỳ thắc mắc hoặc khiếu nại n&agrave;o về c&aacute;c phương ph&aacute;p bảo vệ quyền ri&ecirc;ng tư của ch&uacute;ng t&ocirc;i vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i tại&nbsp;<a href="https://help.shopee.vn/vn/s/contactusform" style="box-sizing:border-box; background:0px 0px transparent; color:#428bca; text-decoration:none"><u>Đ&Acirc;Y</u></a>.</span></span></span></span></p>

<p style="text-align:justify"><span style="font-size:14px"><span style="background-color:#ffffff"><span style="color:#535258"><span style="font-family:&quot;B Koodak&quot;,&quot;X Koodak&quot;,Koodak,Arial">&nbsp;</span></span></span></span></p>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#535258"><span style="font-family:&quot;B Koodak&quot;,&quot;X Koodak&quot;,Koodak,Arial"><span style="background-color:#ffffff"><strong>Bản C&acirc;̣p Nh&acirc;̣t ngày 21/01/2021.</strong></span></span></span></span></p>

<div id="gtx-trans" style="left:73px; position:absolute; top:3933px">
<div class="gtx-trans-icon">&nbsp;</div>
</div>
<
',
                'titlePage' => 'html mau',
                'descriptionPage' => 'html mau',
                'keywordPage' => 'html mau',
                'created_at' => Carbon::create(2021, 8, 21, 21, 40, 16), //->diffForHumans(Carbon::now()),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
