<?php


namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  //address sẽ có dạng 'số , số , số, địa chỉ' , số thứ nhất từ 01 tới 96, số thứ 2 từ 001 tới 676,
        // số thứ 3 từ 00001  tới 01435, chỉ lấy hà nội nên soó thứ nhất để 01 , số thứ 2 từ 001 đến 021
        // số thứ 3 từ 00001 tới 00685
//               ví dụ  'address' => '01, 021 , 00616, Quận Bắc Từ Liêm',
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('trades')->truncate();
        \Illuminate\Support\Facades\DB::table('trades')->insert([
            [
                'id' => 1,
                'account_id' => 4,
                'category_id' => 1,
                'title' => 'Sabbat x12 ultra màu dream stone',
                'description' => 'Muốn đổi sang cái gì đó hay hay tầm giá',
                'content' => 'E có bé sabbat x12 ultra màu dream stone  mới mua hơn 1 tháng, còn nguyên giấy tờ, e muốn gl đồ công nghệ hay hay, e ở hn ạ',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630282615/tvgoemvpovg1itkj7y0k.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630282615/gr0i3w9hfuqqnr7bvrab.jpg',
                'address' => 'Thanh Xuân Hà nội',
                'status_trade' => 1,
                'status' => 1,
                'created_at' => '2021-08-30 00:17:06',
                'updated_at' => '2021-08-30 00:17:23',
            ],
            [
                'id' => 2,
                'account_id' => 2,
                'category_id' => 1,
                'title' => 'Tai nghe sony wi-1000x fullbox',
                'description' => 'Muốn đổi điện thoại, đồng hồ thông minh, máy tính bảng, đồ chơi điện tử',
                'content' => 'Tai nghe sony wi-1000x fullbox, full phụ kiện. Viền trên bong tí lớp mạ (ảnh cuối), không ảnh hưởng đến chất lượng.
                Đổi trên nhóm đợt tháng 3, về cất tủ chứ không dùng.',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630282760/xqkpcdssr4mdp2val5on.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630282760/vhm6rvxsqyabiikbmitg.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630282760/xhbpdo2ngevxehuiauzx.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630282761/gbyklphyzd47mwvovxaw.jpg',
                'address' => 'Hà Nam',
                'status_trade' => 1,
                'status' => 2,
                'created_at' => '2021-08-30 00:19:21',
                'updated_at' => '2021-08-30 00:19:28',
            ],
            [
                'id' => 3,
                'account_id' => 3,
                'category_id' => 1,
                'title' => 'Mac air 13 2014 i5/4/128',
                'description' => 'Giao lưu sùace pro, điện thoại, đồ công nghệ khác',
                'content' => 'Mac air 13 2014 i5/4/128
                Định giá 8tr',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630284316/bifyaot4tenxiokpolou.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284317/jxveiidnf2nysrlcxz8n.jpg',
                'address' => 'Số 8 Tôn Thất Thuyết Hà Nội',
                'status_trade' => 1,
                'status' => 2,
                'created_at' => '2021-08-30 00:45:17',
                'updated_at' => '2021-08-30 00:45:20',
            ],
            [
                'id' => 4,
                'account_id' => 2,
                'category_id' => 1,
                'title' => 'Điện thoại samsung M51',
                'description' => 'Muốn đổi sang Ip hoặc samsung cao hơn, em có thể bù 1-2 đồng',
                'content' => 'Em có máy samsung M51 mua dạng hàng lướt ở Tgdd, còn bảo hành dài và cặp số Không tám hai bốn hai 02468/13579. Máy chỉ lắp sim chính nghe gọi, hoá đơn đầy đủ, em định giá máy khoảng 5,5 triệu, tất cả combo khoảng 14,5 triệu thấp hơn tuỳ người.',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630284457/qroooghzklxlnssw4fbf.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284458/jnoluqs9amo6j8tdeqxs.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284458/ul6sz1kwuuluj7jyledj.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284459/savuz5t6vlyzxqnapchl.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284459/wyzo1b9qznxgyisfejyg.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284459/ag7gvzkrgcnpsqlhhjfx.jpg',
                'address' => '',
                'status_trade' => 1,
                'status' => 1,
                'created_at' => '2021-08-30 00:47:39',
                'updated_at' => '2021-08-30 00:47:44',
            ],
            [
                'id' => 5,
                'account_id' => 4,
                'category_id' => 3,
                'title' => 'Mình có rượu chivat 18',
                'description' => 'Mình cần DDR3 4g 8g laptop , máy chơi điện tử kiểu 4 nút',
                'content' => 'Mình cần DDR3 4g 8g laptop , máy chơi điện tử kiểu 4 nút . Mình có rượu chivat 18',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630284599/me29z2ca09iuto6k2zm3.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284599/hztqwbgmyzvyd8sti4e0.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284599/edfdoxuzourngfbphob6.jpg',
                'address' => 'Nam Từ Liêm Hà Nội',
                'status_trade' => 2,
                'status' => 2,
                'created_at' => '2021-08-30 00:49:59',
                'updated_at' => '2021-08-30 00:53:22',
            ],
            [
                'id' => 6,
                'account_id' => 1,
                'category_id' => 4,
                'title' => 'Xe wave xanh tím than',
                'description' => 'Nhu cầu muốn đổi sang Airblade 125, hoặc vision 125. (BIỂN HÀ NỘI)',
                'content' => 'Em có chiếc xe wave xanh tím than đăng ký tháng 01/2020. Xe vành đúc và lên một số đồ chơi nhẹ nhàng tinh tế. Xe đi ít chưa được 10 nghìn km. Biển số Cầu Giấy Hà Nội.
Xe đi giữ gìn, cẩn thận.
Em để tạm ảnh trên mạng để các bác hình dung được màu xe. (Sáng mai em chụp ảnh xe em rồi up trả sau ạ)
Em đg tầm 18 triệu
Nhu cầu muốn đổi sang Airblade 125, hoặc vision 125. (BIỂN HÀ NỘI)
Thank ad duyệt bài em.',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630284716/mdcz04jpcnku1xecomfa.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284716/pqd6ukj2wjauguwyz0od.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284716/osaktxrw69xutf5rrvxg.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284716/u4kboytxd3ztjp6gpaix.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284716/oinztnkm104txvmlqbrv.jpg',
                'address' => 'Cầu Giấy Hà Nội',
                'status_trade' => 1,
                'status' => 3,
                'created_at' => '2021-08-30 00:53:14',
                'updated_at' => '2021-08-30 00:53:20',
            ],
            [
                'id' => 7,
                'account_id' => 5,
                'category_id' => 1,
                'title' => 'Cần trade máy robot hút bụi lau nhà',
                'description' => 'Đổi Laptop giá trị tương đương',
                'content' => 'Cần trade máy robot hút bụi lau nhà này với Laptop giá trị tương đương, lướt hay mới đều đc nha ✌️(bù trừ hợp lý)
P/s: robot này nhà mình lấy về chưa dùng lần nào mới nguyên hộp như hình, mình ở HN',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630284902/mt7y9jmh5mizby5ezmc4.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630284902/rsre6nf5lllgabh7l0j0.jpg',
                'address' => 'Tây Hồ Hà Nội',
                'status_trade' => 1,
                'status' => 2,
                'created_at' => '2021-08-30 00:55:08',
                'updated_at' => '2021-08-30 01:00:56',
            ],
            [
                'id' => 8,
                'account_id' => 2,
                'category_id' => 5,
                'title' => 'Gshock',
                'description' => 'Em đang cần giao lưu với ipad',
                'content' => 'E có em Gshock này, chưa sử dụng còn BH 5 năm chính hãng AK, bác nào có hứng với e nó k ạ
                Giá hãng 5.1tr
                Em đg 3.8 cần giao lưu với ipad
                Link sp: https://www.anhkhuesaigon.com.vn/products/awr-m100sct-1adr',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630285022/ghmu5xntgcdn4ymgpqzw.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285021/clmtbbbhwztbuavmwu2r.jpg',
                'address' => 'Quận Ba Đình Hà Nội',
                'status_trade' => 3,
                'status' => 2,
                'created_at' => '2021-08-30 00:57:02',
                'updated_at' => '2021-08-30 01:00:55',
            ],
            [
                'id' => 9,
                'account_id' => 3,
                'category_id' => 4,
                'title' => 'Xe đạp cho trẻ',
                'description' => 'Đồ em muốn đổi : Xe đạp size 26 cho người lớn hoặc Ipad, máy giặt',
                'content' => 'Em có 2 xe đạp cho trẻ (bánh 24inch).
                1- Decathlon Sport RR5.1
                2- Nakamura Action 24.
                Cả 2 đều khung thép, vành và các bộ phận chính khác bằng nhôm. Group Shimano. (1 chiếc yên bị rách và hơi xấu).
                Em định giá 1tr5/xe.
                Đồ em muốn đổi : Xe đạp size 26 cho người lớn hoặc Ipad, máy giặt.',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630285232/t6iwncl66vxtos78bvkk.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285232/a0znnkgp5pxvvezrun1v.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285233/cqpi2dq7vzhv1mvlpxxa.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285234/ehkmkaj6pyzugw9hf9jk.jpg',
                'address' => 'Quận 7 HCM',
                'status_trade' => 2,
                'status' => 2,
                'created_at' => '2021-08-30 01:00:53',
                'updated_at' => '2021-08-30 01:00:42',
            ],
            [
                'id' => 10,
                'account_id' => 1,
                'category_id' => 1,
                'title' => 'iPhone XS Max Quốc tế Fullbox',
                'description' => 'Đổi gió điện thoại iPhone XS Max màu trắng/vàng, iPhone 11, 11pro hoặc mấy máy ngang tầm định giá.',
                'content' => 'Em có iPhone XS Max Quốc tế Fullbox hình thức tầm 97% đem lên giao lưu, nhu cầu đổi gió điện thoại iPhone XS Max màu trắng/vàng, iPhone 11, 11pro hoặc mấy máy ngang tầm định giá.
                ĐG: 10tr5
                Admin duyệt giúp em ạ, chúc các Bác giao lưu vui vẻ',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630285457/as7314bqwtbcwlzbictb.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285457/cjpakmno91ipgbdknrrc.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285457/t46tf6vn8bwsyfpbhtsq.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285458/ijh1a7terixhjd0dd7so.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285458/vyvbuzp7vesmsivys799.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285458/kmdnq0sfnoxk7o4a0ruf.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285458/pd0hej3lyuughsijmah8.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285459/n7eiopwyt1kvybx3drev.jpg',
                'address' => 'Quận 7 HCM',
                'status_trade' => 1,
                'status' => 1,
                'created_at' => '2021-08-30 01:04:23',
                'updated_at' => '2021-08-30 01:04:27',
            ],
            [
                'id' => 11,
                'account_id' => 3,
                'category_id' => 1,
                'title' => 'Dell xps 9560 còn bh khoảng 7 tháng',
                'description' => 'Em muốn giao lưu sang máy case  i7 9700f hoặc macbook pro  15inch',
                'content' => 'Dell xps 9560 còn bh khoảng 7 tháng của shop
                CPU: Core i5 7300HQ
                Ram: 16G DDR4
                SSD: 256Gb
                VGA: GTX1050 4G
                LCD: 15.6" FHD ips
                NẶNG: 1.8KG',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630285578/nwsy7ewxq2dz1zb0ae4c.jpg',
                'address' => 'Mỹ Đình Hà Nội',
                'status_trade' => 1,
                'status' => 2,
                'created_at' => '2021-08-30 01:06:18',
                'updated_at' => '2021-08-30 01:06:23',
            ],
            [
                'id' => 12,
                'account_id' => 1,
                'category_id' => 5,
                'title' => 'HUB hàng chế tác cao cấp máy thuỵ sỹ . còn Bh 3 năm',
                'description' => 'Cần Giao Lưu iphone ngang tầm',
                'content' => 'HUB hàng chế tác cao cấp máy thuỵ sỹ . còn Bh 3
                Em mua 15tr5 đeo được 1 lần
                DG : 13tr
                cần gl iphone ngang tầm
                Giá các bác cứ tham khảo nhé ( em đã tham khảo giá và chưa đeo quá 1 buổi tối )',
                'image' => 'https://res.cloudinary.com/iamraw/image/upload/v1630285827/zeh3t3cjiucvvw5rkgk0.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285828/ccn6mrfgwbldsn23rvco.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285829/pnnhqv2juataf4zfnoa3.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285829/dng12zumnrajqbo1ikvl.jpg,https://res.cloudinary.com/iamraw/image/upload/v1630285829/ytzlkgpmkuracdqvqvfx.jpg',
                'address' => 'Hà Nội',
                'status_trade' => 1,
                'status' => 2,
                'created_at' => '2021-08-30 01:10:28',
                'updated_at' => '2021-08-30 01:10:37',
            ],


        ]);
    }
}

