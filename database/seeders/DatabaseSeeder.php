<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //users table
        DB::table('users')->insert([
            'user_name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('123456'),
            'role'  => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),],
            
            );

        DB::table('users')->insert([['user_name'=> 'tester',
        'email'=> 'test123@gmail.com',
        'password'=> Hash::make('123456'),
        'role' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        ]]);

        DB::table('users')->insert([['user_name'=> 'Nguyễn Long',
        'email'=> 'long@gmail.com',
        'img'=>'https://leplateau.edu.vn/wp-content/uploads/2023/10/hinh-anh-con-gai-1.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('users')->insert([['user_name'=> 'Nhật ÁNH',
        'email'=> 'ANH123@gmail.com',
        'img'=>'https://vsmall.vn/wp-content/uploads/2022/06/hinh-anh-con-gai-cute-de-thuong-cute-anime-hoat-hinh-xinh.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('users')->insert([['user_name'=> 'Học Bá',
        'email'=> 'ba123@gmail.com',
        'img'=>'https://vsmall.vn/wp-content/uploads/2022/06/hinh-anh-con-gai-cute-de-thuong-cute-anime-hoat-hinh-xinh.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('users')->insert([['user_name'=> 'Thùy Linh',
        'email'=> 'linh123@gmail.com',
        'img'=>'https://vsmall.vn/wp-content/uploads/2022/06/hinh-anh-con-gai-cute-de-thuong-cute-anime-hoat-hinh-xinh.jpg',
        'password'=> Hash::make('123456'),
        'role' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('users')->insert([['user_name'=> 'Nhật Nam',
        'email'=> 'nam123@gmail.com',
        'password'=> Hash::make('123456'),
        'role' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('users')->insert([['user_name'=> 'Gia Long',
        'email'=> 'gialong@gmail.com',
        'password'=> Hash::make('123456'),
        'role' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        //posts table
        DB::table('posts')->insert([['title'=> 'PHÒNG TRỌ GẦN CHỢ TÂN ĐỊNH, QUẬN 1',
        'description'=> 'Mình cần cho thuê phòng trong nhà cao tầng. Mỗi lầu 1 phòng, toilet riêng, hành lang, 2 cửa sổ ,máy lạnh, có nước nóng, giup việc dọn vệ sinh hàng tuần , rộng rãi , sạch sẽ, thoang mát.

        Giá : 3.500.000/thang, nước 150.000, điện 4.000/kw, wifi, rác miễn phí, có máy giặc
        
        Giờ giấc tự do!
        
        Có bếp nấu ăn Gần rạp CGV, trường học, khu vực ăn uống, mua sắm, giáp Phan xích long, thuận tiện đi các quận trung tâm 3,10,bình thạnh, phú nhuận, gò vấp,gần trường hutec,hồng bàng,kinh tế,kiến trúc,khoa học xã hội...',
        'categories'=>'Căn hộ mini cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'Quận 1',
        'street'=> 'Đường Trần Khắc Chân',
        'area'=> '18 m2',
        'contact_person'=> 'Loan Anh',
        'phone'=> '0983646292',
        'cost'=>'3,500,000',
        'user_id'=>1,
        'img'=>'http://img.timphongtro.vn/Images/item/623bf6cdc542a.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('posts')->insert([['title'=> 'CHO THUÊ PHÒNG CÓ NỘI THẤT GIÁ RẺ GẦN CHỢ TÂN ĐỊNH QUẬN 1',
        'description'=> 'CHO THUE PHÒNG ĐƯỜNG TRẦN KHẮC CHÂN, TÂN ĐỊNH. QUẬN 1

        Phòng 30m2 ngay trung tâm Quận 1. Phòng trong nhà cao tầng. Mỗi lầu 1 phòng, toilet riêng, phòng có 1 ban công, 2 cửa sổ lớn ,máy lạnh, có nước nóng, tủ đồ đầy đủ, giúp việc dọn vệ sinh hàng tuần , nhà mới xây nên rộng rãi , sạch sẽ, thoang mát....
        
        Giá 4.800.000/thang, nước 150.000, điện 4.400/kw, chỗ để xe, wifi, rác miễn phí ! Có máy giặc...
        
        Giờ giấc tự do!
        
        Có bếp nấu ăn .
        
        Gần rạp CGV, trường học, khu vực ăn uống, mua sắm, giáp Phan xích long, thuận tiện đi các quận trung tâm 3,10,bình thạnh, phú nhuận, gò vấp,gần trường hutec,hồng bàng,kinh tế,kiến trúc,khoa học xã hội...
        
        Gần bờ kè Hoàng Sa, Trường sa thuận tiện cho việc tập thể dục, đi bộ mát mẻ...',
        'categories'=>'Căn hộ mini cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'Quận 1',
        'street'=> 'Đường Trần Khắc Chân, Phường Tân Định',
        'area'=> '30 m2',
        'contact_person'=> 'Loan Anh',
        'phone'=> '0928188198',
        'cost'=>'4,800,000',
        'user_id'=>2,
        'img'=>'http://img.timphongtro.vn/Images/item/623bf3edefc80.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('posts')->insert([['title'=> 'cho thuê phòng mới, đẹp, tiện nghi trung tâm quận 10',
        'description'=> 'Cho thuê phòng trọ mới, đẹp, tiện nghi tại:
        * Địa chỉ: 392/8/16 đường Cao Thắng nối dài, phường 12, quận 10, thuộc trung tâm quận 10.
        - Gần Hồ Kỳ Hòa, nhà hàng Đông Hồ, học viện hành chính QG, gần các bệnh viện 115, siêu thị Sài Gòn, trường học và tất cả trung tâm thương mại...
        - Giao thông vô cùng thuận lợi ra các quận trung tâm thành phố như quận 1,3,5 mất từ 5-10 phút và cũng dễ dàng qua các quận tân bình, bình thạnh, quận 6, quận 8 chừng 15 phút.
        Các tiện ích giống như ngôi nhà riêng thật sự của chính bạn và những người thân:
        - Thời gian tự do, không gian mát mẻ, thoáng mát, tất cả đều có lan can, cửa sổ rộng rãi.
        - Môi trường ở đẳng cấp, lịch sự, khu vực an ninh, yên tĩnh vô cùng.
        - Có chỗ giữ xe, bảo vệ an toàn tuyệt đối.
        - Được nấu ăn.
        * Phòng căn hộ đã được trang bị:
        - Máy điều hòa mới 100% còn bảo hành của nhà sản xuất, đảm bảo tiết kiệm điện.
        - Tất cả các phòng đều có thêm gác lửng, tạo không gian sinh hoạt và nghỉ ngơi hoàn toàn riêng biệt, tự tin tiếp bạn bè, người thân.
        - Ngoài ra phòng còn có ti vi led LCD 32inch, tủ lạnh, kệ bếp nấu ăn, giường, nệm, tủ, tất cả đều mới 100% và nhiều tiện ích khác...
        Giá thuê chỉ từ 4tr5-6tr.
        Mọi chi tiết xin liên hệ chính chủ nhà: 0902.40.80.86 (A. Minh).',
        'categories'=>'Phòng cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'Quận 10',
        'street'=> '392/8/16 cao thắng p12',
        'area'=> '50 m2',
        'contact_person'=> 'thịnh minh',
        'phone'=> '0902408086',
        'cost'=>'4,500,000',
        'user_id'=>3,
        'img'=> 'http://img.timphongtro.vn/Images/item/afdb30c4d5f671ad77bf181d6c7c245920151216082841-009f.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('posts')->insert([['title'=> 'cho thuê phòng cao cấp, giờ tự do đường cao lỗ quận 8',
        'description'=> 'Cho thuê phòng trọ tại địa chỉ : 32-34 cao lỗ, Phường 4, Quận 8
        Toà nhà 65 phòng mới xây, rất thoáng mát,có cửa sổ, ban công,có gác, kệ bếp nấu ăn, có thang máy, an ninh, yên tĩnh,  không chung chủ, giờ giấc tự do, bảo vệ an toàn 24/24, wifi cáp quang cực mạnh.
        - Vị trí: Mặt tiền đường 30m,Khu vực di chuyển thuận tiện qua quận 1,4,5,7, bình chánh chỉ mất gần 10 phút, gần đại học công nghệ SG, Trường Trung cấp Nam SG,Đồng Diều, Bệnh viện Quận 8,Y Dược, BV An Bình, hệ thống các siêu thị và các trung tâm thương mại,...( Hiện tại đang xây dựng TTTM AOE MALL cách nhà 250m). 
        - Trang bị đầy đủ tiện nghi theo yêu cầu: Tủ lạnh, máy lạnh,tivi, giường, nệm, tủ quần áo, bàn ăn, bàn làm việc,máy nóng lạnh,  máy giặt .
        - Phòng rộng 20m2, 25m2, cửa sổ thoáng mát, WC riêng từng phòng.
        - Bãi để xe rộng rãi, hệ thống PCCC.
        - Giá phòng từ 2tr5
        - Liên hệ chính chủ:0902408086( Anh Minh )',
        'categories'=>'Phòng cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'Quận 8',
        'street'=> '32 cao lỗ phường 4',
        'area'=> '20 m2',
        'contact_person'=> 'thịnh minh',
        'phone'=> '0976611499',
        'cost'=>'2,500,000',
        'user_id'=>4,
        'img'=> 'http://img.timphongtro.vn/Images/item/934c5804207e1ab29c461fa2a5553e8dIMAG0344.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('posts')->insert([['title'=> 'PHÒNG CHO NỮ THUÊ, ĐƯỜNG LÊ LƯ, P. PHÚ THỌ HÒA, Q.TÂN PHÚ, TP. HCM',
        'description'=> 'Cho thuê phòng trọ mới, đẹp, tiện nghi tại:
        * Địa chỉ: 392/8/16 đường Cao Thắng nối dài, phường 12, quận 10, thuộc trung tâm quận 10.
        - Gần Hồ Kỳ Hòa, nhà hàng Đông Hồ, học viện hành chính QG, gần các bệnh viện 115, siêu thị Sài Gòn, trường học và tất cả trung tâm thương mại...
        - Giao thông vô cùng thuận lợi ra các quận trung tâm thành phố như quận 1,3,5 mất từ 5-10 phút và cũng dễ dàng qua các quận tân bình, bình thạnh, quận 6, quận 8 chừng 15 phút.
        Các tiện ích giống như ngôi nhà riêng thật sự của chính bạn và những người thân:
        - Thời gian tự do, không gian mát mẻ, thoáng mát, tất cả đều có lan can, cửa sổ rộng rãi.
        - Môi trường ở đẳng cấp, lịch sự, khu vực an ninh, yên tĩnh vô cùng.
        - Có chỗ giữ xe, bảo vệ an toàn tuyệt đối.
        - Được nấu ăn.
        * Phòng căn hộ đã được trang bị:
        - Máy điều hòa mới 100% còn bảo hành của nhà sản xuất, đảm bảo tiết kiệm điện.
        - Tất cả các phòng đều có thêm gác lửng, tạo không gian sinh hoạt và nghỉ ngơi hoàn toàn riêng biệt, tự tin tiếp bạn bè, người thân.
        - Ngoài ra phòng còn có ti vi led LCD 32inch, tủ lạnh, kệ bếp nấu ăn, giường, nệm, tủ, tất cả đều mới 100% và nhiều tiện ích khác...
        Giá thuê chỉ từ 4tr5-6tr.
        Mọi chi tiết xin liên hệ chính chủ nhà: 0902.40.80.86 (A. Minh).',
        'categories'=>'Phòng cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'Q Tân Phú',
        'street'=> '47 Lê Lư ,Phú Thọ Hòa',
        'area'=> '12 m2',
        'contact_person'=> 'NGUYỄN PHƯƠNG',
        'phone'=> '0938171432',
        'cost'=>'1,400,000',
        'user_id'=>5,
        'img'=> 'http://img.timphongtro.vn/Images/item/6200be8e7d5f8.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('posts')->insert([['title'=> 'Cho thuê căn hộ 1PN sát phú mỹ hưng quận 7',
        'description'=> 'Cho thuê căn hộ loại 1 phòng ngủ + 1 phòng khách và phòng cao cấp toàn bộ nội thất gỗ nguyên khối đẹp lung linh tại: 160 đường Nguyễn Văn Qùy, P. Phú Thuận, Quận 7(Ngã 4 Huỳnh Tấn Phát-Nguyễn Thị Thập).

        1. Thông tin về căn hộ, phòng cao cấp.
        Phòng cao cấp diện tích 25m2.
        Căn hộ dịch vụ loại 1 phòng khách và 1 phòng ngủ: Diện tích 45m2.
        2. Tiện nghi của căn hộ, phòng cho thuê (tất cả đều mới 100%).
        * Máy lạnh, tủ lạnh, tivi (căn hộ có 2 cái tivi), máy giặt riêng, nước nóng năng lượng mặt trời.
        * Kệ bếp, tủ bếp, bếp điện, lò vi sóng, nồi cơm điện, bình đun, bình thủy, nồi, chảo, chén, bát, đũa.... Tiêu chuẩn homestay.
        Tủ quần áo, bộ bàn ghế làm việc (hoặc trang điểm).
        Bộ ghế sofa bed (làm giường ngủ được), bàn ăn và 4 ghế.
        Giường gỗ, nệm, bộ chăn drap.
        Thiệt bị vệ sinh cao cấp, phòng tắm đứng.
        Khu phơi quần áo riêng biệt từng phòng, căn hộ.
        Tất cả các phòng, có ít nhất 3 cửa sổ, ban công thoáng mát.
        3. Dịch vụ căn hộ:
        Internet cáp quang cực mạnh, Tivi cáp SCTV.
        Bảo vệ 24/7.
        Camera an ninh 24/7.
        Vệ sinh hành lang.
        Khu dịch vụ ăn uống, cafe ngay sảnh trước tòa nhà.
        4. Giá thuê chỉ từ 4.000.000 đ (tùy phòng hay căn hộ có nội thất hay không).
        Mọi chi tiết xin liên hệ: 0976.611.499 A Minh (Zalo)',
        'categories'=>'Phòng cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'quận 7',
        'street'=> '160/1 nguyễn vặn quỳ, p.phú thuậm',
        'area'=> '25 m2',
        'contact_person'=> 'thịnh minh',
        'phone'=> '0902408086',
        'cost'=>'5,000,000',
        'user_id'=> 6,
        'img'=> 'http://img.timphongtro.vn/Images/item/5bc1ca0b03ea6.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('posts')->insert([['title'=> 'Cho nữ thuê Phòng trọ quận Bình Thạnh, 25m2 mới đẹp, ban công, cửa sổ, hẻm 7m. Giá rẻ nhất khu này.',
        'description'=> 'Cho nữ thuê Phòng trọ quận Bình Thạnh, 25m2 mới đẹp, ban công, cửa sổ, hẻm 7m. Giá rẻ nhất khu này.

        - Vị trí: Hẻm 47 Bùi Đình Túy, phường 24, quận Bình Thạnh. Thông qua hẻm 125 Bùi Đình Túy và hẻm 194 Bạch Đằng (hẻm chợ Long Vân Tự).
        
        - Ngay trung tâm quận Bình Thạnh nên thuận tiện đi các trường Đại học.
        
        - Cách chợ Long Vân Tự 100m, gần các trường Đại học.
        
        - Xung quanh đầy đủ tiện ích như: Ngân hàng, Siêu thị, Chợ Bà Chiểu, Trường học các cấp,….
        
        - Hẻm rộng 7m, xe tải vào tận nơi, không ngập nước.
        
        - Diện tích phòng 25m2, vật tư thiết bị cao cấp.
        
        - Mỗi phòng có ban công, cửa sổ nên rất thoáng mát, không bị ngột ngạt tù túng, rất tốt cho sức khỏe.
        
        - Kệ bếp riêng, WC riêng, thiết bị vệ sinh cao cấp.
        
        - Khu dân cư trí thức, an ninh, yên tĩnh.
        
        - Chỉ có vài phòng. Chỉ cho nữ thuê.
        
        - Giá từ 4 - 4,2 triệu/tháng. Giá rẻ nhất khu này, các bạn đến khu vực này khảo sát để biết giá.
        
        - ĐT:  0938 896 776 – Chị Hằng.
        
         
        
        SO SÁNH CÁC ƯU ĐIỂM:
        
        * Phòng lớn 25m2 giá 4,2 triệu/tháng -  GIÁ RẺ HƠN  - Phòng nhỏ 12m2 giá 2,5 triệu/tháng.
        
        * Vật tư, trang thiết bị cao cấp -  SẠCH ĐẸP HƠN  - Vật tư, trang thiết bị rẻ tiền.
        
        * Phòng có ban-công, cửa sổ nên không khí thoáng mát -  TÔT CHO SỨC KHOẺ HƠN  - Phòng không có ban-công, cửa sổ nên không khí bị ngột ngạt, tù túng.
        
        * Hẻm xe tải rộng 7m. Đặc biệt không bị ngập nước trong mùa mưa bão, triều cường -  GIAO THÔNG, VẬN CHUYỂN TỐT HƠN  - Hẻm xe ba gác rộng 2 - 3m. Có thể bị ngập nước.
        
        * Cách chợ 100m, Bách Hoá Xanh, CoopFood 300m, gần các trường Đại Học -  THUẬN TIỆN HƠN  - Xa chợ, siêu thị, trường học.
        
        * Khu dân cư cao cấp, trí thức -  AN NINH HƠN  - Khu dân cư bình dân hoặc khu có tệ nạn xã hội.
        
        - ĐT:  0938 896 776 – Chị Hằng.',
        'categories'=>'Căn hộ mini cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'Quận Bình Thạnh',
        'street'=> 'Đường Bùi Đình Túy, Phường 24',
        'area'=> '25 m2',
        'contact_person'=> 'nguyennhadat',
        'phone'=> '0938896776',
        'cost'=>'4,000,000',
        'user_id'=> 7,
        'img'=> 'http://img.timphongtro.vn/Images/item/5ffd5b0a72627.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('posts')->insert([['title'=> 'Cho thuê phòng trọ cho sinh viên (Nữ),và người đi làm (Nữ), Quận 6 với giá rẻ',
        'description'=> 'Địa chỉ 94/41/2 Phú Thọ Hòa, quận Tân Phú, TPHCM
        Phòng cho thuê mặt tiền hẻm
        Lối đi riêng, giờ giấc tự do
        Không có gác, toilet riêng trong phòng
        Diện tích 13m vuông
        Giá 1tr7. Liên hệ Cô Sáu sđt: 0708644869',
        'categories'=>'Phòng cho thuê',
        'city'=> 'Hồ Chí Minh',
        'district' => 'Q. 6',
        'street'=> 'tháp mười, P.2',
        'area'=> '11 m2',
        'contact_person'=> 'Cô Bình',
        'phone'=> '0903720852',
        'cost'=>'1,200,000',
        'user_id'=> 8,
        'img'=> 'http://img.timphongtro.vn/Images/item/5ffd5b0a72627.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),]]);

        DB::table('care')->insert([[]]);
    }
}
