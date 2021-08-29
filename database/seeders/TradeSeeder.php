<?php

namespace Database\Seeders;

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
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('trades')->truncate();
        \Illuminate\Support\Facades\DB::table('trades')->insert([
            [
                'id' => 1,
                'account_id' => 1,
                'category_id' => 1,
                'title' => 'Luật Tâm Thức ',
                'description' => 'cần đổi sang luật nhân quả',
                'content' => 'Cuốn sách này sẽ giúp bạn thấy rằng những kiến thức của người xưa không hề cao siêu huyền bí mà vô cùng đơn giản và liên quan chặt chẽ tới khoa học hiện đại.
                Sách còn mới chưa rách phần nào ',
                'image' => 'https://reviewhayhay.com/wp-content/uploads/2021/06/Review-sach-Luat-tam-thuc-Giai-ma-ma-tran-vu-tru-2.jpg' ,
                //address sẽ có dạng 'số , số , số, địa chỉ' , số thứ nhất từ 01 tới 96, số thứ 2 từ 001 tới 676,
                // số thứ 3 từ 00001  tới 01435, chỉ lấy hà nội nên soó thứ nhất để 01 , số thứ 2 từ 001 đến 021
                // số thứ 3 từ 00001 tới 00685
//               ví dụ  'address' => '01, 021 , 00616, Quận Bắc Từ Liêm',
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'account_id' => 2,
                'category_id' => 2,
                'title' => 'Muôn Kiếp Nhân Sinh 2',
                'description' => 'cần đổi sang Muôn Kiếp Nhân Sinh 1',
                'content' => 'Cuốn sách vén bức màn bí ẩn về hành trình bất tận của những linh hồn qua muôn vàn kiếp sống, sự thức tỉnh từ cõi chết để tìm ra con đường chuyển hóa nghiệp quả bằng cuộc cách mạng chuyển đổi tâm thức -
                 Con đường minh triết có thể cứu lấy thế giới đang đứng trước những biến động và hiếm họa khôn lường. Tất cả được đúc kết, xâu chuỗi một cách logic với góc nhìn tổng thể giữa khoa học và tâm linh, triết học và lịch sử các nền văn minh từ Đông sang Tây, từ cổ đại đến hiện đại.
                 Sách còn mới chưa rách phần nào  ',
                'image' => 'https://i.ytimg.com/vi/gXFNRtrbQhA/hqdefault.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 2,
                'status' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'account_id' => 3,
                'category_id' => 3,
                'title' => 'Sách Giáo Khoa Bộ Lớp 11',
                'description' => 'cần đổi sang Sách Giáo Khoa Bộ Lớp 12',
                'content' => ' Bộ sách giup học tốt
                  Sách còn mới chưa rách phần nào ',
                'image' => 'https://cf.shopee.vn/file/6882e60c53284d009deccc2886a0121d' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 3,
                'status' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'account_id' => 4,
                'category_id' => 1,
                'title' => 'Payback Time - Ngày Đòi Nợ',
                'description' => 'cần đổi sang Ngày Trả Nợ',
                'content' => 'Cuốn sách sẽ hướng dẫn bạn từ cách thức lựa chọn, đánh giá cổ phiếu, cho đến xây dựng cho mình một danh mục các cổ phiếu sẽ mua, mức giá mua–bán nào là hợp lý,
                 cùng với những nguyên tắc mà bạn phải tuân theo… và cứ thực hành như vậy cho tới khi bạn trở nên giàu có.
                  Sách còn mới chưa rách phần nào ',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlT2mFu36wFmWAzxUaAH6oMP5gytSQWzbKFQ&usqp=CAU' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 4,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'account_id' => 5,
                'category_id' => 2,
                'title' => 'How Psychology Works - Hiểu Hết Về Tâm Lý Học',
                'description' => 'cần đổi sang How Psychology Works - Hiểu Hết Về Tâm Lý Học2',
                'content' => 'Cuốn sách có cấu trúc khoa học, trình bày dễ hiểu, súc tích, thiết kế và minh họa đẹp mắt này sẽ mang đến cho bạn những hiểu biết về các học thuyết tâm lý và các phương pháp trị liệu,
                 từ các vấn đề cá nhân đến những ứng dụng thực tế.
                 Sách còn mới chưa rách phần nào',
                'image' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1553286147l/44571056._SX318_.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 1,
                'status' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'account_id' => 3,
                'category_id' => 1,
                'title' => 'Ăn Gì Không Chết',
                'description' => 'cần đổi sang Ăn Gì tốt',
                'content' => ' Rất nhiều cái chết trẻ có thể ngăn ngừa được đơn giản bằng những thay đổi trong chế độ ăn và lối sống. Trong cuốn Ăn gì không chết, bác sĩ Michael Greger, bác sĩ, chuyên gia dinh dưỡng nổi tiếng quốc tế, và là nhà sáng lập NutritionFacts.org, nghiên cứu tỉ mỉ 15 nguyên nhân hàng đầu dẫn đến chết trẻ ở Hoa Kỳ – bệnh tim, ung thư, tiểu đường, Parkinson, cao huyết áp, và nhiều bệnh khác – giải thích tại sao can thiệp dinh dưỡng và lối sống đôi khi có thể thành công hơn thuốc kê toa và các giải pháp phẫu thuật và thuốc men khác, cho chúng ta sống khỏe mạnh hơn.
                 Sách còn mới chưa rách phần nào',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl7QFV2HLc__24DOmgy8X0IVZ_H5wVjfR5hkjN4srZVXyu2mAb24RPHKdKQT9oOSi0M_g&usqp=CAU' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 2,
                'status' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'account_id' => 4,
                'category_id' => 3,
                'title' => 'Kiếp Nào Ta Cũng Tìm Thấy Nhauh',
                'description' => 'cần đổi sang cái j đó mới ',
                'content' => 'Những gì tác giả viết trong sách được ghi lại từ hồ sơ bệnh án, băng thu âm và trí nhớ. Chỉ có tên và một vài chi tiết nhỏ được thay đổi để giữ tính bảo mật. Đây là câu chuyện về vận mệnh và hy vọng. Đây là câu chuyện xảy ra âm thầm mỗi ngày.


                Sách còn mới chưa rách phần nào',
                'image' => 'https://reviewhayhay.com/wp-content/uploads/2021/07/review-sach-kiep-nao-ta-cung-tim-thay-nhau.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 3,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'account_id' => 5,
                'category_id' => 1,
                'title' => 'Tương Lai Sau Đại Dịch Covid',
                'description' => 'cần đổi sang ngày đại dịch',
                'content' => 'Tương lai sau đại dịch Covid được viết ra trong bối cảnh một đại dịch ở tầm mức thảm họa toàn cầu đang bắt đầu làm lung lay các đế chế kinh tế, đe dọa sinh kế người dân,
                 và nhanh chóng làm thay đổi toàn bộ đời sống xã hội ở quy mô chưa từng có.
                 Sách còn mới chưa rách phần nào',
                'image' => 'https://mtg.1cdn.vn/2021/05/20/tuong-lai-sau-dai-dich-covid-2.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 4,
                'status' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'account_id' => 2,
                'category_id' => 2,
                'title' => 'Tâm Lý Học Về Tiền',
                'description' => 'cần đổi sang Tâm Lý Học Về Vàng',
                'content' => 'Mục đích của cuốn sách này là sử dụng những câu chuyện ngắn để thuyết phục bạn rằng những kỹ năng mềm còn quan trọng hơn khía cạnh lý thuyết của đồng tiền. Thông qua một tập hợp những thử nghiệm và sai lầm của nhiều năm chúng ta đã học được cách trở thành những nông dân giỏi giang hơn, những thợ sửa ống nước nhiều kỹ năng hơn, và những nhà hóa học tiên tiến hơn. Nhưng liệu việc thử nghiệm và sai lầm có dạy chúng ta trở nên giỏi hơn trong cách quản lý tài chính cá nhân của chính mình không?
                 Sách còn mới chưa rách phần nào',
                'image' => 'https://storage.googleapis.com/cdn.nhanh.vn/store3/94460/ps/20210614/14062021010614_tam_ly_hoc_ve_tien.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 1,
                'status' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'account_id' => 1,
                'category_id' => 3,
                'title' => ' Bách khoa toàn thư khoa học',
                'description' => 'cần đổi sang  Bách khoa toàn thư Vũ Trụ',
                'content' => 'Nội dung của cuốn sách:
- Hơn 50000 hình ảnh được cung cấp và bảo trợ từ cơ quan, tổ chức uy tín hàng đầu Thế Giới.
- Phân chia kiến thức thành 8 chủ đề với 150 chủ điểm chi tiết.
- Một công cụ hội tụ đầy đủ: nội dung, hình thức, thông tin cho đến những khám phá, phát minh vĩ đại trong Khoa học.
- Nội dung cho thấy mối liên kết chặt chẽ giữa các bộ môn khoa học với nhau và mang đến góc nghiên cứu đa lĩnh vực
- Hình ảnh minh họa chân thật, có tính lịch sử cao, hiếm có từ các nguồn lưu trữ uy tín - giới
-Các khái niệm, kiến thức được diễn giải cụ thể, chi tiết giúp bạn đọc dễ dàng tiếp thu kiến thức khoa học tưởng chừng quá khó hiểu.


                 Sách còn mới chưa rách phần nào',
                'image' => 'https://product.hstatic.net/200000079237/product/19_9d1bc5bce9ff42078581233e16b6b59c.jpg' ,
                'address' => 'Quận Bắc Từ Liêm',
                'status_trade' => 2,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

