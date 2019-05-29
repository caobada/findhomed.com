<?php

use Illuminate\Database\Seeder;
use App\Home;
class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create( [
            'home_id'=>11,
            'type_id'=>1,
            'user_id'=>1,
            'title'=>'CHO THUÊ PHÒNG KHÉP KÍN XUÂN LA - NGUYỄN HOÀNG TÔN',
            'desc'=>'
            
            Cho thuê 03 phòng khép kín Ngõ 46 Nguyễn Hoàng Tôn:
            - Diện tích: 33-40m2 khép kín, có cửa sổ, ban công, nhiều ánh sáng tự nhiên, ô tô đỗ cửa (có thể để xe qua đêm hoặc để tại bãi xe cách 30m)
            - Tiện ích: Internet, máy giặt, nóng lạnh, giường, tủ
            - Khu ở an toàn, gần chợ, gần trường mần non, gần doanh trại quân đội, cách hồ Tây 350m
            - Để xe tầng 1 rộng rãi
            
            ',
            'price'=>'2.5@0',
            'area'=>'33',
            'street'=>'Đường Nguyễn hoàng Tôn,Phường Xuân La',
            'district'=>3,
            'city'=>1,
            'image'=>'31296032_1688394207918674_6377818201660588032_n-768x1024.jpg;32411170_1709791462445615_7995344808509964288_n-768x1024.jpg;32543037_1709791245778970_1517190634601971712_n-1024x768.jpg;32669611_1709791172445644_1368728364096946176_n-768x1024.jpg',
            'view'=>26,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'0984382611',
            'location_map'=>'21.0709549,105.80765270000006',
            'created_at'=>'2018-06-03 17:00:00',
            'updated_at'=>'2018-06-22 03:32:45',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>12,
            'type_id'=>1,
            'user_id'=>1,
            'title'=>'CHO THUÊ PHÒNG TẦNG 3 TRONG NHÀ 4 TẦNG – NGÕ 313 THANH NHÀN HOẶC NGÕ 295 BẠCH MAI',
            'desc'=>'
            
            CHO THUÊ PHÒNG TẦNG 3 TRONG NHÀ 4 TẦNG – NGÕ 313 THANH NHÀN HOẶC NGÕ 295 BẠCH MAI
            NHÀ NẰM Ở KHU TRUNG TÂM GẦN CÁC TRƯỜNG ĐH BÁCH KHOA, XÂY DỰNG, KINH TẾ QD, CÁCH CHỢ VÀ CÁC SIÊU THỊ 50M, CÁCH CÔNG VIÊN TUỔI TRẺ VÀ CV THỐNG NHẤT CHƯA ĐẾN 1KM.
            -PHÒNG DIỆN TÍCH 17M2 CÓ BAN CÔNG RỘNG RÃI, CỬA SỔ THOÁNG MÁT, CÓ VỆ SINH RIÊNG. ĐẦY ĐỦ VÒI SEN VÀ BỒN RỬA MẶT.
            -NHÀ KHÔNG CHUNG CHỦ NÊN GIỜ GIẤC ĐI LẠI THOẢI MÁI.
            -TIỀN ĐIỆN NƯỚC THEO GIÁ NHÀ NƯỚC.
            -CÓ WIFI, NÓNG LẠNH ĐẦY ĐỦ, ĐIỀU HÒA NẾU MUỐN CÓ THÌ VUI LÒNG ALO TRỰC TIẾP CHO MÌNH.
            -TẦNG 1 ĐỂ XE VÀ NẤU ĂN, TẦNG 4 CÓ BAN CÔNG RẤT RỘNG ĐỂ PHƠI QUẦN ÁO.
            -NHÀ NẰM KHU DÂN TRÍ CAO NÊN AN NINH RẤT TỐT.
            -THỜI GIAN NHẬN PHÒNG: 10/06/2018.
            -GIÁ THUÊ: 2.600.000 Đ/ THÁNG ( ĐÓNG TIỀN 3 THÁNG 1, ĐẶT CỌC 1 THÁNG)
            BẠN NÀO CÓ NHU CẦU THUÊ PHÒNG VUI LÒNG LIÊN HỆ MR. HÙNG 0989.893.675. ƯU TIÊN CÁC BẠN SV
            
            ',
            'price'=>'2.6@0',
            'area'=>'17',
            'street'=>'313 Thanh Nhàn,Phường Bạch Mai',
            'district'=>7,
            'city'=>1,
            'image'=>'32543037_1709791245778970_1517190634601971712_n-1024x768.jpg;32980349_2082515461966897_8592275997716381696_n-768x1024.jpg;33074202_2041751539432431_7710038261409775616_n-768x1024.jpg;33216180_2082515448633565_4736706430445289472_n-768x1024.jpg;33227974_2041751529432432_7307856084998291456_n-572x1024.jpg',
            'view'=>35,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'0986676491',
            'location_map'=>'21.003101776950224,105.85161744371283',
            'created_at'=>'2018-06-03 17:00:00',
            'updated_at'=>'2018-06-22 02:39:38',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>13,
            'type_id'=>4,
            'user_id'=>1,
            'title'=>'TÌM NỮ Ở GHÉP - CHỈ 1TR5/NGƯỜI BAO GỒM TẤT CẢ PHÍ BẠN SẼ Ở TRONG SIÊU BIỆT THỰ ĐẸP LUNG',
            'desc'=>'
            
            KTX cao cấp trong biệt thự siêu sang chuẩn 5 sao chỉ 1r5/người (miễn phí điện nước).
            Bạn mệt mỏi vì phải ở trong các phòng trọ chật chội, nóng bức. Bạn phiền lòng vì không thể gánh chi phí cho một căn phòng đầy đủ tiện nghi.
            Hãy đến với chúng tôi, hệ thống phòng cho thuê chuyên nghiệp Trust Home.
            - phòng mới 100%, gần trường Giao thông vận tải, Hutech, Văn Lang, Ngoại thương,...
            
            + Trang thiết bị:
            - giường tầng cao cấp có vách ngăn.
            - tủ quần áo
            - Máy Lạnh
            - tủ lạnh
            - kệ bếp + bếp từ.
            - nước uống.
            - nước nóng lạnh.
            - máy giặt.
            - internet 160Mb.
            - Phòng sinh hoạt, đọc sách hiện đại.
            - 2 Thang máy.
            - Lễ Tân + camera + bảo vệ (24/24)
            
            *Yêu cầu chung:
            - Nữ tuổi từ 17 - 28 tuổi Sống hòa đồng, giúp đỡ lẫn nhau, ý thức tự giác cao.
            - Có thông tin về bản thân rõ ràng (CMND,thẻ sinh viên, có xác nhận nơi làm việc).
            
            Giá: 1.500.000/ người (không phát sinh).
            Địa chỉ: 643/24/3c Xô Viết Nghệ Tĩnh, Phường 26, quận Bình Thạnh.
            Hãy gọi ngay: 097 337 3779 A. Tuân để được xem và thuê phòng.
            
            ',
            'price'=>'1.5@0',
            'area'=>'35',
            'street'=>'Đường Xô Viết Nghệ Tĩnh,Phường 26',
            'district'=>765,
            'city'=>79,
            'image'=>'20180204_182256-1024x768.jpg;20180204_182633-1024x768.jpg;20180404_191914-1024x768.jpg;20180404_191927-1024x768.jpg;20180404_191943-1024x768.jpg;33227974_2041751529432432_7307856084998291456_n-572x1024.jpg;IMG_2519-1024x768.jpg;IMG_2682-1024x768.jpg;received_1165414603598190-1024x768.jpeg;received_1650321701749798-1024x683.jpeg;received_1991686817568057-1024x683.jpeg;received_1991687074234698-1024x683.jpeg;received_1991687107568028-1024x683.jpeg',
            'view'=>34,
            'hienthi'=>1,
            'doituong'=>'2',
            'phone_home'=>'0973373779',
            'location_map'=>'10.811056962458816,106.71379548220898',
            'created_at'=>'2018-06-03 17:00:00',
            'updated_at'=>'2018-06-25 03:37:02',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>14,
            'type_id'=>4,
            'user_id'=>1,
            'title'=>'TÌM 1 NỮ Ở GHÉP GẦN ĐẦM SEN',
            'desc'=>'
            
            TÌM 1 NỮ Ở GHÉP GẦN ĐẦM SEN
            Nhà tiện nghi ở 161C/101 Lạc Long Quân, F.3, Q.11
            PHÒNG RỘNG 16m2: chưa kể bang công, chỗ để xe free, nhà bếp, nhà vệ sinh riêng
            RẤT AN NINH: báo trộm, giờ giấc tự do, không chung chủ
            VỊ TRÍ THUẬN TIỆN: gần q5, q6, q10 …. gần chợ, phố ăn uống,
            GIÁ BÌNH DÂN: 1,350tr/người/tháng, điện nước rác wifi tính theo giá nhà nước.
            Liên hệ: 0901328154 (SU SU)
            Cám ơn cả nhà đã xem tin!
            
            ',
            'price'=>'1.35@0',
            'area'=>'16',
            'street'=>'161c/101 Đường Lạc Long Quân,Phường 03',
            'district'=>772,
            'city'=>79,
            'image'=>'27336638_1671610702900386_1951473541336169039_n.jpg;20180520_154733-1024x768.jpg',
            'view'=>500,
            'hienthi'=>1,
            'doituong'=>'2',
            'phone_home'=>'0901328154',
            'location_map'=>'10.763024864511278,106.64181134970283',
            'created_at'=>'2018-06-03 17:00:00',
            'updated_at'=>'2019-05-29 05:55:50',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>21,
            'type_id'=>4,
            'user_id'=>1,
            'title'=>'TÌM NĂM Ở GHÉP GẦN ĐẠI HỌC CÔNG NGHIỆP',
            'desc'=>'
            
            Cần tìm 1 nam ở ghép gần đại học công nghiệp
            
             - Giờ giấc tự do
            
             - Có nhà vệ sinh riêng sạch sẽ
            
             - Bạn ở cần cù, sạch sẽ
            
            ',
            'price'=>'1@0',
            'area'=>'25',
            'street'=>'32 Lê Lợi,Phường 01',
            'district'=>764,
            'city'=>79,
            'image'=>'findhomed.png',
            'view'=>18,
            'hienthi'=>1,
            'doituong'=>'1',
            'phone_home'=>'0164215220',
            'location_map'=>'10.821622884410697,106.68824914953223',
            'created_at'=>'2018-06-06 06:58:17',
            'updated_at'=>'2018-06-18 09:15:32',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>22,
            'type_id'=>1,
            'user_id'=>1,
            'title'=>'Cho thuê phòng trọ ngay cổng sau ĐH Tây Nguyên',
            'desc'=>'
            
            Cho thuê phòng mặt tiền mới xây ngay cổng sau ĐH Tây Nguyên.
            Phòng đầy đủ tiện ích, hệ thống nước nóng năng lượng mặt trời, có nước máy và nước ngầm, không lo mất nước.
            Wifi miễn phí, vòi tắm hoa sen, rộng rãi thoáng mát, có gác lửng.
            Diện tích sử dụng: 46m2, thích hợp cho hộ gia đình ở hoặc kinh doanh.
            Giá: 1.800.000/tháng. Nước ngầm 15k/tháng, nước máy và điện theo giá nhà nước.
            Địa chỉ 120/26/12 YWang hoặc 98/10 YWang.
            Mọi chi tiết liên hệ theo số ĐT: 0933431022 hoặc 01664398448 ( A.Sơn )
            
            ',
            'price'=>'1.8@0',
            'area'=>'46',
            'street'=>'98/10 Đường Y Wang,Phường Ea Tam',
            'district'=>643,
            'city'=>66,
            'image'=>'findhomed.png',
            'view'=>65,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'01664398448',
            'location_map'=>'12.6501778885966,108.02969998514004',
            'created_at'=>'2018-06-07 06:32:40',
            'updated_at'=>'2019-05-24 09:16:29',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>23,
            'type_id'=>2,
            'user_id'=>1,
            'title'=>'CHO THUÊ NHÀ CẤP 4 MỚI, GẦN NGÃ TƯ GIẾNG NƯỚC, NỘI THẤT MỚI, LH 0908992308',
            'desc'=>'
            - Nhà cấp 4 đẹp, diện tích 63m2, có gác lửng thông ra ban công phơi đồ phía sau, thoáng mát.
            - Nhà chính chủ đang ở nay chuyển lên Sài Gòn nên cho thuê, để lại nội thất: tủ đứng phòng khách (đựng tivi, sách vở, đồ dùng...), sofa, giường mới 1m6, máy lạnh rất mới inverter tiết kiệm điện (mới xài được vài chục tiếng đồng hồ), bếp ga (2 bếp) và bình ga lớn, máy tập thể thao đa năng, bàn làm việc...
            - Địa chỉ: 77/3 Hoàng Việt, phường Thắng Nhì, tp. Vũng Tàu - Cách mặt tiền đường Hoàng Việt 20m; Gần ngã tư Giếng nước - Trong bán kính vài trăm mét có 3 chợ, siêu thị Coopmart, trường cấp 1,2,3 và trường mầm non.  - Cực kỳ an ninh, bên cạnh là nhà trẻ có người trông coi suốt ngày. - Giá thuê: 3.5 triệu/tháng - LH chính chủ: Mai Lan 0908.992.308
            ',
            'price'=>'3.5@0',
            'area'=>'63',
            'street'=>'Đường Hoàng Việt,Phường 6',
            'district'=>747,
            'city'=>77,
            'image'=>'IMG_5135-e1516676213483-768x1024.jpg;IMG_5140-1024x768.jpg;IMG_5142-e1516676193362-768x1024.jpg;IMG_5145-e1516676178753-768x1024.jpg;IMG_5148-e1516676165243-768x1024.jpg;viber-image124-1024x768.jpg',
            'view'=>54,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'0908992308',
            'location_map'=>'10.371268739881678,107.08115858312658',
            'created_at'=>'2018-06-07 06:41:28',
            'updated_at'=>'2019-05-27 03:00:45',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>24,
            'type_id'=>1,
            'user_id'=>1,
            'title'=>'CHO THUÊ PHÒNG 1/33 SƠN KỲ, NHÀ MỚI XÂY, CÓ MÁY LẠNH, GIỜ GIẤC TỰ DO KHÔNG CHUNG CHỦ',
            'desc'=>'
            
            CHO THUÊ PHÒNG TRỌ NHÀ MỚI XÂY TẠI:
            1/33 Sơn Kỳ, P. Sơn Kỳ, Q. Tân Phú.
            
            Vị Trí:
            + Nằm cách ngã 3 Tân Kỳ Tân Quý và Sơn Kỳ khoản 100m, có thể đi từ đường Lê Trọng Tấn hoặc Tân Kỳ Tân Quý đi vào.
            + Thuận tiện giao thông ra đường Tân Kỳ Tân Quý, Lê Trọng Tấn, Cộng Hoà, Trường Chinh. Cách Trường Đại Học Cộng Nghiệp Thực Phẩm 300m, KCN Tân Bình, EAON MALL Tân Phú 500m, E TOWN 1,2,3 Cộng Hoà khoản 1km, Bic C Pandora khoản 700m, và có rất nhiều tiện ít xung quanh, trung tâm thể dục thể thao, trường học khu vui chơi giải trí.
            + Dễ dàng di chuyển vào các quận trung tâm: Tân Bình, Gò Vấp, Phú Nhuận, Q.1, Q.3 từ hướng Cộng Hòa.
            TIỆN NGHI :
            - Phòng rộng từ 14m2 + gác đúc 10m2 ( Hình thật 100% ). tùy phòng
            
            - Giờ giấc tự do, cửa khoá vân tay ra vào thoải mái không lo quên chìa khóa, hệ thống camera An Ninh 24/7 bảo vệ bạn an toàn.
            - Phòng có WC riêng, máy lạnh inverter mới, quạt treo tường, có kệ bếp bằng đá hoa cương nấu ăn thoải mái.
            - Không chung chủ, tự do tiếp bạn bè, người thân đến chơi.
            - Phòng được ốp gạch men, rất sạch sẽ và thoáng mát.
            - Hệ thống Wifi cáp quang chuẩn 40M đến từng ngóc ngách của tòa nhà.
            - GIÁ THUÊ: từ 2,3tr – 2,9tr/tháng ( tùy diện tích, tùy phòng ), cọc 1 tháng.
            
            - Điện: 3,500đ/kwh
            - Nước máy: 20k/m3
            - Wifi: 50k/phòng/tháng
            - Xe: 100k/xe/tháng
            LIÊN HỆ NGAY CHO CHÚNG TÔI ĐỂ TÌM ĐƯỢC CĂN PHÒNG ĐẸP NHẤT:
            - Mr.Trung : 0938133991 ( Quản lý Tòa Nhà )
            - Mr.Châu: 0908464323 ( Quản Lý Tòa Nhà )
            
            ',
            'price'=>'2.3@0',
            'area'=>'20',
            'street'=>'1/33 Sơn Kỳ, phường Sơn Kỳ',
            'district'=>767,
            'city'=>79,
            'image'=>'1-76-768x1024.jpg;1d64d2bf2825c77b9e34.jpg;2-71-768x1024.jpg;4-61-768x1024.jpg;6-42-768x1024.jpg;7-32-768x1024.jpg;8-22-768x1024.jpg;9-11-768x1024.jpg;10-7-768x1024.jpg;11-6-1024x768.jpg;134f708a8a10654e3c01.jpg;a8b8367ccce623b87af7-768x1024.jpg;b0ed8a3770ad9ff3c6bc.jpg;df4c4f95b50f5a51031e.jpg',
            'view'=>187,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'0938133991',
            'location_map'=>'10.802971873436059,106.62772569999993',
            'created_at'=>'2016-06-08 03:38:02',
            'updated_at'=>'2018-06-28 08:19:29',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>25,
            'type_id'=>1,
            'user_id'=>1,
            'title'=>'KTX CAO CẤP - CHỈ 1T3 / NGƯỜI',
            'desc'=>'
            
            KTX CAO CẤP - CHỈ 1T3 / NGƯỜI .
            SĐT 0165 655 2793 .
            ĐC : 7 VĨNH KHÁNH QUẬN 4. ( sang quận 1 chỉ 30 s ).
            Hãy đến với chúng tôi phòng trọ cao cấp được trang bị đầy đủ tiện nghi .
            Phòng mới 100 % gần trường Nguyễn Tất Thành , Tôn Đức Thắng , Cao Thắng , Văn Lang ....
            +Trang thiết bị :
            -nệm cao su .
            -tủ quần áo
            -máy lạnh
            -tủ lạnh
            -kệ bếp + bếp từ
            -nước nóng lạnh
            -máy giặt
            -internet
            -camera
            -bãi giữ xe
            -phòng bếp
            -phòng sinh hoạt
            *Yêu cầu chung:
            - Nam/Nữ tuổi từ 17 - 28 tuổi Sống hòa đồng, giúp đỡ lẫn nhau, ý thức tự giác cao.
            - Có thông tin về bản thân rõ ràng (CMND,thẻ sinh viên )
            ĐC 7 Vĩnh Khánh , Phường 8 , Quận 4 .
            Hãy gọi ngay 0165 655 2793 A Đức để xem và thuê phòng .
            
            ',
            'price'=>'900000@1',
            'area'=>'25',
            'street'=>'7 Đường Vĩnh Khánh,Phường 08',
            'district'=>773,
            'city'=>79,
            'image'=>'28279669_450916888699188_2919198700425396245_n.jpg;28424703_450917038699173_5498814487362204792_o-1024x673.jpg;28576429_450917098699167_2091838041038255207_n.jpg;can-tim-nam-o-ghep-quan-1-va-quan-4-1510031817-1-4167779-1510031817.jpg;can-tim-nam-o-ghep-quan-1-va-quan-4-1510031817-3-4167779-1510031817.jpg;df4c4f95b50f5a51031e.jpg;item_s196.jpg;mau-thiet-ke-phong-tam-nho-anh-5-1.jpg;phong-tro-share-quan-4-sang-q1-2p-1517412085-3-5617849-1517412085-1.jpeg;thiet-ke-phong-ngu-dep-hien-dai-04.jpg;thiet-ke-phong-ngu-nho-5m2-doc-dao-va-an-tuong-nhat-01.jpg',
            'view'=>86,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'01656552793',
            'location_map'=>'10.761181135310025,106.7029067141209',
            'created_at'=>'2018-06-11 01:31:35',
            'updated_at'=>'2019-05-29 03:43:55',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>27,
            'type_id'=>5,
            'user_id'=>1,
            'title'=>'Cho thuê căn hộ 56m2, lầu 4, hướng Nam mát mẻ, giá 8.5 triệu/tháng',
            'desc'=>'
            
            Căn hộ 56m2, lầu 4, chung cư Hòa Bình đường 3/2, F14, Q10, hướng Nam rất mát.
            Có thang máy, điện nước giá gốc, 2 WC, ốp gạch men toàn bộ khu vực bếp và xung quanh tường các phòng, có ban công để máy giặt và phơi đồ. 3 cửa sổ. Cửa ra vào 2 lớp an toàn (sắt và gỗ cao cấp). Giá 8.5tr/tháng.
            
            ',
            'price'=>'8.5@0',
            'area'=>'56',
            'street'=>'Chung cư Hòa Bình, Ba Tháng Hai',
            'district'=>771,
            'city'=>79,
            'image'=>'thiet-ke-phong-ngu-nho-5m2-doc-dao-va-an-tuong-nhat-01.jpg;z1002072835548_0a238946f765598f60688befa124cac0-576x1024.jpg;z1002072835549_81dcf9c90c8dc87b713dd082dce8f4ea-576x1024.jpg;z1002072838350_618d1f7143764fcb4544d5ef4d38172c-576x1024.jpg;z1002072840987_c92b1d07fda512e9084b65324566e03b-576x1024.jpg;z1002072842726_f437c8b73381bb212535e8a956a8b60d-1024x576.jpg;z1002072842972_552942f6bfb1fe353d0722384031d43a-1024x576.jpg;z1002072845134_daa83d8225f93813b945936f71d85ccf-576x1024.jpg;z1002072846354_f9d2ac1a36c303f8491e5f6be3e32aed-576x1024.jpg;z1002072849113_3d66a004437ee0d640147cdc20c74144-576x1024.jpg;z1002072849795_356bb3370eb3f4f8d9a57a0302ccdeab-576x1024.jpg;z1002072855004_592b9b67cd1f9e1c51ddd67a472f5f9d-1024x576.jpg;z1002072858300_c2750519f1b3a6ac1b9f5d4bef17cddb-1024x576.jpg;z1002072861422_f5a96a53cec9decd0e448fd9c4ca9c34-1024x768.jpg;z1002072864913_07219205a12c3b8aa3b42b54284e16b4-768x1024.jpg',
            'view'=>33,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'0948093349',
            'location_map'=>'10.766625782503986,106.66098902023771',
            'created_at'=>'2018-06-19 07:48:47',
            'updated_at'=>'2018-06-26 10:21:09',
            'deleted_at'=>NULL
            ] );
            
                        
            Home::create( [
            'home_id'=>28,
            'type_id'=>1,
            'user_id'=>1,
            'title'=>'Phòng cho thuê full nội thất ngay công viên làng hoa',
            'desc'=>'
            
            Phòng cao cấp giá rẻ tại Gò Vấp 3tr tháng
            Tiện nghi đầy đủ
             máy lạnh - dường nệm- tivi 32 in
             tủ quần áo, bàn ghế tiếp khách, tủ lạnh
             vệ sinh cao cấp vòi hoa sen, nước nóng lạnh
             đi lại bằng thang máy
             tất cả được trang bị mới 100%
             giờ giấc tự do , có lối thoát hiểm
             gần cv làng hoa,
            15p ra sân bay ... gần chợ
             Có bảo vệ 24/24 camera an ninh tuyệt đối
            chỉ cần mang đồ đến ở nội thất đã được sắm mới
            hình thật bên dưới
             giá : 3tr/ tháng
            111/42 Phạm Văn Chiêu, P.14, Gò Vấp
            Lh: 0933 310 310
            
            ',
            'price'=>'3@0',
            'area'=>'25',
            'street'=>'Đường Phạm Văn Chiêu,Quận Gò Vấp',
            'district'=>764,
            'city'=>79,
            'image'=>'68A29045-3C06-45CE-9248-0C84D2CFBEEF-1024x768.jpeg;15394AF5-E38E-4F07-A636-54F1ED906A6E-1024x768.jpeg;CCF18C6C-873F-4256-B851-3166A02684C6-768x1024.jpeg;z1002072858300_c2750519f1b3a6ac1b9f5d4bef17cddb-1024x576.jpg',
            'view'=>4,
            'hienthi'=>1,
            'doituong'=>'0',
            'phone_home'=>'0933310310',
            'location_map'=>'10.8499584,106.65191600000003',
            'created_at'=>'2018-06-28 02:50:26',
            'updated_at'=>'2019-05-24 07:44:22',
            'deleted_at'=>NULL
            ] );

    }
}
