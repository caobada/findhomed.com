<?php

use Illuminate\Database\Seeder;
use App\District;
class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create( [
            'districtid'=>1,
            'name'=>'Ba Đình',
            'type'=>'Quận',
            'location'=>'21 02 08N, 105 49 38E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>2,
            'name'=>'Hoàn Kiếm',
            'type'=>'Quận',
            'location'=>'21 01 53N, 105 51 09E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>3,
            'name'=>'Tây Hồ',
            'type'=>'Quận',
            'location'=>'21 04 10N, 105 49 07E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>4,
            'name'=>'Long Biên',
            'type'=>'Quận',
            'location'=>'21 02 21N, 105 53 07E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>5,
            'name'=>'Cầu Giấy',
            'type'=>'Quận',
            'location'=>'21 01 52N, 105 47 20E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>6,
            'name'=>'Đống Đa',
            'type'=>'Quận',
            'location'=>'21 00 56N, 105 49 06E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>7,
            'name'=>'Hai Bà Trưng',
            'type'=>'Quận',
            'location'=>'21 00 27N, 105 51 35E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>8,
            'name'=>'Hoàng Mai',
            'type'=>'Quận',
            'location'=>'20 58 33N, 105 51 22E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>9,
            'name'=>'Thanh Xuân',
            'type'=>'Quận',
            'location'=>'20 59 44N, 105 48 56E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>16,
            'name'=>'Sóc Sơn',
            'type'=>'Huyện',
            'location'=>'21 16 55N, 105 49 46E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>17,
            'name'=>'Đông Anh',
            'type'=>'Huyện',
            'location'=>'21 08 16N, 105 49 38E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>18,
            'name'=>'Gia Lâm',
            'type'=>'Huyện',
            'location'=>'21 01 28N, 105 56 54E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>19,
            'name'=>'Từ Liêm',
            'type'=>'Huyện',
            'location'=>'21 02 39N, 105 45 32E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>20,
            'name'=>'Thanh Trì',
            'type'=>'Huyện',
            'location'=>'20 56 32N, 105 50 55E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>24,
            'name'=>'Hà Giang',
            'type'=>'Thị Xã',
            'location'=>'22 46 23N, 105 02 39E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>26,
            'name'=>'Đồng Văn',
            'type'=>'Huyện',
            'location'=>'23 14 34N, 105 15 48E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>27,
            'name'=>'Mèo Vạc',
            'type'=>'Huyện',
            'location'=>'23 09 10N, 105 26 38E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>28,
            'name'=>'Yên Minh',
            'type'=>'Huyện',
            'location'=>'23 04 20N, 105 10 13E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>29,
            'name'=>'Quản Bạ',
            'type'=>'Huyện',
            'location'=>'23 04 03N, 104 58 05E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>30,
            'name'=>'Vị Xuyên',
            'type'=>'Huyện',
            'location'=>'22 45 50N, 104 56 26E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>31,
            'name'=>'Bắc Mê',
            'type'=>'Huyện',
            'location'=>'22 45 48N, 105 16 26E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>32,
            'name'=>'Hoàng Su Phì',
            'type'=>'Huyện',
            'location'=>'22 41 37N, 104 40 06E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>33,
            'name'=>'Xín Mần',
            'type'=>'Huyện',
            'location'=>'22 38 05N, 104 28 35E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>34,
            'name'=>'Bắc Quang',
            'type'=>'Huyện',
            'location'=>'22 23 42N, 104 55 06E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>35,
            'name'=>'Quang Bình',
            'type'=>'Huyện',
            'location'=>'22 23 07N, 104 37 11E',
            'provinceid'=>2
            ] );
                        
            District::create( [
            'districtid'=>40,
            'name'=>'Cao Bằng',
            'type'=>'Thị Xã',
            'location'=>'22 39 20N, 106 15 20E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>42,
            'name'=>'Bảo Lâm',
            'type'=>'Huyện',
            'location'=>'22 52 37N, 105 27 28E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>43,
            'name'=>'Bảo Lạc',
            'type'=>'Huyện',
            'location'=>'22 52 31N, 105 42 41E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>44,
            'name'=>'Thông Nông',
            'type'=>'Huyện',
            'location'=>'22 49 09N, 105 57 05E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>45,
            'name'=>'Hà Quảng',
            'type'=>'Huyện',
            'location'=>'22 53 42N, 106 06 32E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>46,
            'name'=>'Trà Lĩnh',
            'type'=>'Huyện',
            'location'=>'22 48 14N, 106 19 47E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>47,
            'name'=>'Trùng Khánh',
            'type'=>'Huyện',
            'location'=>'22 49 31N, 106 33 58E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>48,
            'name'=>'Hạ Lang',
            'type'=>'Huyện',
            'location'=>'22 42 37N, 106 41 42E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>49,
            'name'=>'Quảng Uyên',
            'type'=>'Huyện',
            'location'=>'22 40 15N, 106 27 42E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>50,
            'name'=>'Phục Hoà',
            'type'=>'Huyện',
            'location'=>'22 33 52N, 106 30 02E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>51,
            'name'=>'Hoà An',
            'type'=>'Huyện',
            'location'=>'22 41 20N, 106 02 05E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>52,
            'name'=>'Nguyên Bình',
            'type'=>'Huyện',
            'location'=>'22 38 52N, 105 57 02E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>53,
            'name'=>'Thạch An',
            'type'=>'Huyện',
            'location'=>'22 28 51N, 106 19 51E',
            'provinceid'=>4
            ] );
                        
            District::create( [
            'districtid'=>58,
            'name'=>'Bắc Kạn',
            'type'=>'Thị Xã',
            'location'=>'22 08 00N, 105 51 10E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>60,
            'name'=>'Pác Nặm',
            'type'=>'Huyện',
            'location'=>'22 35 46N, 105 40 25E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>61,
            'name'=>'Ba Bể',
            'type'=>'Huyện',
            'location'=>'22 23 54N, 105 43 30E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>62,
            'name'=>'Ngân Sơn',
            'type'=>'Huyện',
            'location'=>'22 25 50N, 106 01 00E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>63,
            'name'=>'Bạch Thông',
            'type'=>'Huyện',
            'location'=>'22 12 04N, 105 51 01E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>64,
            'name'=>'Chợ Đồn',
            'type'=>'Huyện',
            'location'=>'22 11 18N, 105 34 43E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>65,
            'name'=>'Chợ Mới',
            'type'=>'Huyện',
            'location'=>'21 57 56N, 105 51 29E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>66,
            'name'=>'Na Rì',
            'type'=>'Huyện',
            'location'=>'22 09 48N, 106 05 09E',
            'provinceid'=>6
            ] );
                        
            District::create( [
            'districtid'=>70,
            'name'=>'Tuyên Quang',
            'type'=>'Thị Xã',
            'location'=>'21 49 40N, 105 13 12E',
            'provinceid'=>8
            ] );
                        
            District::create( [
            'districtid'=>72,
            'name'=>'Nà Hang',
            'type'=>'Huyện',
            'location'=>'22 28 34N, 105 21 03E',
            'provinceid'=>8
            ] );
                        
            District::create( [
            'districtid'=>73,
            'name'=>'Chiêm Hóa',
            'type'=>'Huyện',
            'location'=>'22 12 49N, 105 14 32E',
            'provinceid'=>8
            ] );
                        
            District::create( [
            'districtid'=>74,
            'name'=>'Hàm Yên',
            'type'=>'Huyện',
            'location'=>'22 05 46N, 105 00 13E',
            'provinceid'=>8
            ] );
                        
            District::create( [
            'districtid'=>75,
            'name'=>'Yên Sơn',
            'type'=>'Huyện',
            'location'=>'21 51 53N, 105 18 14E',
            'provinceid'=>8
            ] );
                        
            District::create( [
            'districtid'=>76,
            'name'=>'Sơn Dương',
            'type'=>'Huyện',
            'location'=>'21 40 22N, 105 22 57E',
            'provinceid'=>8
            ] );
                        
            District::create( [
            'districtid'=>80,
            'name'=>'Lào Cai',
            'type'=>'Thành Phố',
            'location'=>'22 25 07N, 103 58 43E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>82,
            'name'=>'Bát Xát',
            'type'=>'Huyện',
            'location'=>'22 35 50N, 103 44 49E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>83,
            'name'=>'Mường Khương',
            'type'=>'Huyện',
            'location'=>'22 41 05N, 104 08 26E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>84,
            'name'=>'Si Ma Cai',
            'type'=>'Huyện',
            'location'=>'22 39 46N, 104 16 05E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>85,
            'name'=>'Bắc Hà',
            'type'=>'Huyện',
            'location'=>'22 30 08N, 104 18 54E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>86,
            'name'=>'Bảo Thắng',
            'type'=>'Huyện',
            'location'=>'22 22 47N, 104 10 00E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>87,
            'name'=>'Bảo Yên',
            'type'=>'Huyện',
            'location'=>'22 17 38N, 104 25 02E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>88,
            'name'=>'Sa Pa',
            'type'=>'Huyện',
            'location'=>'22 18 54N, 103 54 18E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>89,
            'name'=>'Văn Bàn',
            'type'=>'Huyện',
            'location'=>'22 03 48N, 104 10 59E',
            'provinceid'=>10
            ] );
                        
            District::create( [
            'districtid'=>94,
            'name'=>'Điện Biên Phủ',
            'type'=>'Thành Phố',
            'location'=>'21 24 52N, 103 02 31E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>95,
            'name'=>'Mường Lay',
            'type'=>'Thị Xã',
            'location'=>'22 01 47N, 103 07 10E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>96,
            'name'=>'Mường Nhé',
            'type'=>'Huyện',
            'location'=>'22 06 11N, 102 30 54E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>97,
            'name'=>'Mường Chà',
            'type'=>'Huyện',
            'location'=>'21 50 31N, 103 03 15E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>98,
            'name'=>'Tủa Chùa',
            'type'=>'Huyện',
            'location'=>'21 58 19N, 103 23 01E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>99,
            'name'=>'Tuần Giáo',
            'type'=>'Huyện',
            'location'=>'21 38 03N, 103 21 06E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>100,
            'name'=>'Điện Biên',
            'type'=>'Huyện',
            'location'=>'21 15 19N, 103 03 19E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>101,
            'name'=>'Điện Biên Đông',
            'type'=>'Huyện',
            'location'=>'21 14 07N, 103 15 19E',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>102,
            'name'=>'Mường Ảng',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>11
            ] );
                        
            District::create( [
            'districtid'=>104,
            'name'=>'Lai Châu',
            'type'=>'Thị Xã',
            'location'=>'22 23 15N, 103 24 22E',
            'provinceid'=>12
            ] );
                        
            District::create( [
            'districtid'=>106,
            'name'=>'Tam Đường',
            'type'=>'Huyện',
            'location'=>'22 20 16N, 103 32 53E',
            'provinceid'=>12
            ] );
                        
            District::create( [
            'districtid'=>107,
            'name'=>'Mường Tè',
            'type'=>'Huyện',
            'location'=>'22 24 16N, 102 43 11E',
            'provinceid'=>12
            ] );
                        
            District::create( [
            'districtid'=>108,
            'name'=>'Sìn Hồ',
            'type'=>'Huyện',
            'location'=>'22 17 21N, 103 18 12E',
            'provinceid'=>12
            ] );
                        
            District::create( [
            'districtid'=>109,
            'name'=>'Phong Thổ',
            'type'=>'Huyện',
            'location'=>'22 38 24N, 103 22 38E',
            'provinceid'=>12
            ] );
                        
            District::create( [
            'districtid'=>110,
            'name'=>'Than Uyên',
            'type'=>'Huyện',
            'location'=>'21 59 35N, 103 45 30E',
            'provinceid'=>12
            ] );
                        
            District::create( [
            'districtid'=>111,
            'name'=>'Tân Uyên',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>12
            ] );
                        
            District::create( [
            'districtid'=>116,
            'name'=>'Sơn La',
            'type'=>'Thành Phố',
            'location'=>'21 20 39N, 103 54 52E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>118,
            'name'=>'Quỳnh Nhai',
            'type'=>'Huyện',
            'location'=>'21 46 34N, 103 39 02E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>119,
            'name'=>'Thuận Châu',
            'type'=>'Huyện',
            'location'=>'21 24 54N, 103 39 46E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>120,
            'name'=>'Mường La',
            'type'=>'Huyện',
            'location'=>'21 31 38N, 104 02 48E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>121,
            'name'=>'Bắc Yên',
            'type'=>'Huyện',
            'location'=>'21 13 23N, 104 22 09E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>122,
            'name'=>'Phù Yên',
            'type'=>'Huyện',
            'location'=>'21 13 33N, 104 41 51E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>123,
            'name'=>'Mộc Châu',
            'type'=>'Huyện',
            'location'=>'20 49 21N, 104 43 10E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>124,
            'name'=>'Yên Châu',
            'type'=>'Huyện',
            'location'=>'20 59 33N, 104 19 51E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>125,
            'name'=>'Mai Sơn',
            'type'=>'Huyện',
            'location'=>'21 10 08N, 103 59 36E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>126,
            'name'=>'Sông Mã',
            'type'=>'Huyện',
            'location'=>'21 06 04N, 103 43 56E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>127,
            'name'=>'Sốp Cộp',
            'type'=>'Huyện',
            'location'=>'20 52 46N, 103 30 38E',
            'provinceid'=>14
            ] );
                        
            District::create( [
            'districtid'=>132,
            'name'=>'Yên Bái',
            'type'=>'Thành Phố',
            'location'=>'21 44 28N, 104 53 42E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>133,
            'name'=>'Nghĩa Lộ',
            'type'=>'Thị Xã',
            'location'=>'21 35 58N, 104 29 22E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>135,
            'name'=>'Lục Yên',
            'type'=>'Huyện',
            'location'=>'22 06 44N, 104 43 12E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>136,
            'name'=>'Văn Yên',
            'type'=>'Huyện',
            'location'=>'21 55 55N, 104 33 51E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>137,
            'name'=>'Mù Cang Chải',
            'type'=>'Huyện',
            'location'=>'21 48 22N, 104 09 01E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>138,
            'name'=>'Trấn Yên',
            'type'=>'Huyện',
            'location'=>'21 42 20N, 104 48 56E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>139,
            'name'=>'Trạm Tấu',
            'type'=>'Huyện',
            'location'=>'21 30 40N, 104 28 03E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>140,
            'name'=>'Văn Chấn',
            'type'=>'Huyện',
            'location'=>'21 34 15N, 104 35 19E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>141,
            'name'=>'Yên Bình',
            'type'=>'Huyện',
            'location'=>'21 52 24N, 104 55 16E',
            'provinceid'=>15
            ] );
                        
            District::create( [
            'districtid'=>148,
            'name'=>'Hòa Bình',
            'type'=>'Thành Phố',
            'location'=>'20 50 36N, 105 19 20E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>150,
            'name'=>'Đà Bắc',
            'type'=>'Huyện',
            'location'=>'20 55 58N, 105 04 52E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>151,
            'name'=>'Kỳ Sơn',
            'type'=>'Huyện',
            'location'=>'20 54 06N, 105 23 18E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>152,
            'name'=>'Lương Sơn',
            'type'=>'Huyện',
            'location'=>'20 53 16N, 105 30 55E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>153,
            'name'=>'Kim Bôi',
            'type'=>'Huyện',
            'location'=>'20 40 34N, 105 32 15E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>154,
            'name'=>'Cao Phong',
            'type'=>'Huyện',
            'location'=>'20 41 23N, 105 17 48E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>155,
            'name'=>'Tân Lạc',
            'type'=>'Huyện',
            'location'=>'20 36 44N, 105 15 03E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>156,
            'name'=>'Mai Châu',
            'type'=>'Huyện',
            'location'=>'20 40 56N, 104 59 46E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>157,
            'name'=>'Lạc Sơn',
            'type'=>'Huyện',
            'location'=>'20 29 59N, 105 24 57E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>158,
            'name'=>'Yên Thủy',
            'type'=>'Huyện',
            'location'=>'20 25 42N, 105 37 59E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>159,
            'name'=>'Lạc Thủy',
            'type'=>'Huyện',
            'location'=>'20 29 12N, 105 44 06E',
            'provinceid'=>17
            ] );
                        
            District::create( [
            'districtid'=>164,
            'name'=>'Thái Nguyên',
            'type'=>'Thành Phố',
            'location'=>'21 33 20N, 105 48 26E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>165,
            'name'=>'Sông Công',
            'type'=>'Thị Xã',
            'location'=>'21 29 14N, 105 48 47E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>167,
            'name'=>'Định Hóa',
            'type'=>'Huyện',
            'location'=>'21 53 50N, 105 38 01E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>168,
            'name'=>'Phú Lương',
            'type'=>'Huyện',
            'location'=>'21 45 57N, 105 43 22E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>169,
            'name'=>'Đồng Hỷ',
            'type'=>'Huyện',
            'location'=>'21 41 10N, 105 55 43E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>170,
            'name'=>'Võ Nhai',
            'type'=>'Huyện',
            'location'=>'21 47 14N, 106 02 29E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>171,
            'name'=>'Đại Từ',
            'type'=>'Huyện',
            'location'=>'21 36 17N, 105 37 28E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>172,
            'name'=>'Phổ Yên',
            'type'=>'Huyện',
            'location'=>'21 27 08N, 105 45 19E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>173,
            'name'=>'Phú Bình',
            'type'=>'Huyện',
            'location'=>'21 29 36N, 105 57 42E',
            'provinceid'=>19
            ] );
                        
            District::create( [
            'districtid'=>178,
            'name'=>'Lạng Sơn',
            'type'=>'Thành Phố',
            'location'=>'21 51 19N, 106 44 50E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>180,
            'name'=>'Tràng Định',
            'type'=>'Huyện',
            'location'=>'22 18 09N, 106 26 32E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>181,
            'name'=>'Bình Gia',
            'type'=>'Huyện',
            'location'=>'22 03 56N, 106 19 01E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>182,
            'name'=>'Văn Lãng',
            'type'=>'Huyện',
            'location'=>'22 01 59N, 106 34 17E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>183,
            'name'=>'Cao Lộc',
            'type'=>'Huyện',
            'location'=>'21 53 05N, 106 50 34E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>184,
            'name'=>'Văn Quan',
            'type'=>'Huyện',
            'location'=>'21 51 04N, 106 33 04E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>185,
            'name'=>'Bắc Sơn',
            'type'=>'Huyện',
            'location'=>'21 48 57N, 106 15 28E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>186,
            'name'=>'Hữu Lũng',
            'type'=>'Huyện',
            'location'=>'21 34 33N, 106 20 33E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>187,
            'name'=>'Chi Lăng',
            'type'=>'Huyện',
            'location'=>'21 40 05N, 106 37 24E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>188,
            'name'=>'Lộc Bình',
            'type'=>'Huyện',
            'location'=>'21 40 41N, 106 58 12E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>189,
            'name'=>'Đình Lập',
            'type'=>'Huyện',
            'location'=>'21 32 07N, 107 07 25E',
            'provinceid'=>20
            ] );
                        
            District::create( [
            'districtid'=>193,
            'name'=>'Hạ Long',
            'type'=>'Thành Phố',
            'location'=>'20 52 24N, 107 05 23E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>194,
            'name'=>'Móng Cái',
            'type'=>'Thành Phố',
            'location'=>'21 26 31N, 107 55 09E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>195,
            'name'=>'Cẩm Phả',
            'type'=>'Thị Xã',
            'location'=>'21 03 42N, 107 17 22E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>196,
            'name'=>'Uông Bí',
            'type'=>'Thị Xã',
            'location'=>'21 04 33N, 106 45 07E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>198,
            'name'=>'Bình Liêu',
            'type'=>'Huyện',
            'location'=>'21 33 07N, 107 26 24E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>199,
            'name'=>'Tiên Yên',
            'type'=>'Huyện',
            'location'=>'21 22 24N, 107 22 50E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>200,
            'name'=>'Đầm Hà',
            'type'=>'Huyện',
            'location'=>'21 21 23N, 107 34 32E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>201,
            'name'=>'Hải Hà',
            'type'=>'Huyện',
            'location'=>'21 25 50N, 107 41 26E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>202,
            'name'=>'Ba Chẽ',
            'type'=>'Huyện',
            'location'=>'21 15 40N, 107 09 52E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>203,
            'name'=>'Vân Đồn',
            'type'=>'Huyện',
            'location'=>'20 56 17N, 107 28 02E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>204,
            'name'=>'Hoành Bồ',
            'type'=>'Huyện',
            'location'=>'21 06 30N, 107 02 43E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>205,
            'name'=>'Đông Triều',
            'type'=>'Huyện',
            'location'=>'21 07 10N, 106 34 36E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>206,
            'name'=>'Yên Hưng',
            'type'=>'Huyện',
            'location'=>'20 55 40N, 106 51 05E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>207,
            'name'=>'Cô Tô',
            'type'=>'Huyện',
            'location'=>'21 05 01N, 107 49 10E',
            'provinceid'=>22
            ] );
                        
            District::create( [
            'districtid'=>213,
            'name'=>'Bắc Giang',
            'type'=>'Thành Phố',
            'location'=>'21 17 36N, 106 11 18E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>215,
            'name'=>'Yên Thế',
            'type'=>'Huyện',
            'location'=>'21 31 29N, 106 09 27E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>216,
            'name'=>'Tân Yên',
            'type'=>'Huyện',
            'location'=>'21 23 23N, 106 05 55E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>217,
            'name'=>'Lạng Giang',
            'type'=>'Huyện',
            'location'=>'21 21 58N, 106 15 21E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>218,
            'name'=>'Lục Nam',
            'type'=>'Huyện',
            'location'=>'21 18 16N, 106 29 24E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>219,
            'name'=>'Lục Ngạn',
            'type'=>'Huyện',
            'location'=>'21 26 15N, 106 39 09E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>220,
            'name'=>'Sơn Động',
            'type'=>'Huyện',
            'location'=>'21 19 42N, 106 51 09E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>221,
            'name'=>'Yên Dũng',
            'type'=>'Huyện',
            'location'=>'21 12 22N, 106 14 12E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>222,
            'name'=>'Việt Yên',
            'type'=>'Huyện',
            'location'=>'21 16 16N, 106 04 59E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>223,
            'name'=>'Hiệp Hòa',
            'type'=>'Huyện',
            'location'=>'21 15 51N, 105 57 30E',
            'provinceid'=>24
            ] );
                        
            District::create( [
            'districtid'=>227,
            'name'=>'Việt Trì',
            'type'=>'Thành Phố',
            'location'=>'21 19 01N, 105 23 35E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>228,
            'name'=>'Phú Thọ',
            'type'=>'Thị Xã',
            'location'=>'21 24 54N, 105 13 46E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>230,
            'name'=>'Đoan Hùng',
            'type'=>'Huyện',
            'location'=>'21 36 56N, 105 08 42E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>231,
            'name'=>'Hạ Hoà',
            'type'=>'Huyện',
            'location'=>'21 35 13N, 105 00 22E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>232,
            'name'=>'Thanh Ba',
            'type'=>'Huyện',
            'location'=>'21 27 04N, 105 09 10E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>233,
            'name'=>'Phù Ninh',
            'type'=>'Huyện',
            'location'=>'21 26 59N, 105 18 13E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>234,
            'name'=>'Yên Lập',
            'type'=>'Huyện',
            'location'=>'21 22 21N, 105 01 25E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>235,
            'name'=>'Cẩm Khê',
            'type'=>'Huyện',
            'location'=>'21 23 04N, 105 05 25E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>236,
            'name'=>'Tam Nông',
            'type'=>'Huyện',
            'location'=>'21 18 24N, 105 14 59E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>237,
            'name'=>'Lâm Thao',
            'type'=>'Huyện',
            'location'=>'21 19 37N, 105 18 09E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>238,
            'name'=>'Thanh Sơn',
            'type'=>'Huyện',
            'location'=>'21 08 32N, 105 04 40E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>239,
            'name'=>'Thanh Thuỷ',
            'type'=>'Huyện',
            'location'=>'21 07 26N, 105 17 18E',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>240,
            'name'=>'Tân Sơn',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>25
            ] );
                        
            District::create( [
            'districtid'=>243,
            'name'=>'Vĩnh Yên',
            'type'=>'Thành Phố',
            'location'=>'21 18 26N, 105 35 33E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>244,
            'name'=>'Phúc Yên',
            'type'=>'Thị Xã',
            'location'=>'21 18 55N, 105 43 54E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>246,
            'name'=>'Lập Thạch',
            'type'=>'Huyện',
            'location'=>'21 24 45N, 105 25 39E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>247,
            'name'=>'Tam Dương',
            'type'=>'Huyện',
            'location'=>'21 21 40N, 105 33 36E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>248,
            'name'=>'Tam Đảo',
            'type'=>'Huyện',
            'location'=>'21 27 34N, 105 35 09E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>249,
            'name'=>'Bình Xuyên',
            'type'=>'Huyện',
            'location'=>'21 19 48N, 105 39 43E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>250,
            'name'=>'Mê Linh',
            'type'=>'Huyện',
            'location'=>'21 10 53N, 105 42 05E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>251,
            'name'=>'Yên Lạc',
            'type'=>'Huyện',
            'location'=>'21 13 17N, 105 34 44E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>252,
            'name'=>'Vĩnh Tường',
            'type'=>'Huyện',
            'location'=>'21 14 58N, 105 29 37E',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>253,
            'name'=>'Sông Lô',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>26
            ] );
                        
            District::create( [
            'districtid'=>256,
            'name'=>'Bắc Ninh',
            'type'=>'Thành Phố',
            'location'=>'21 10 48N, 106 03 58E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>258,
            'name'=>'Yên Phong',
            'type'=>'Huyện',
            'location'=>'21 12 40N, 105 59 36E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>259,
            'name'=>'Quế Võ',
            'type'=>'Huyện',
            'location'=>'21 08 44N, 106 11 06E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>260,
            'name'=>'Tiên Du',
            'type'=>'Huyện',
            'location'=>'21 07 37N, 106 02 19E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>261,
            'name'=>'Từ Sơn',
            'type'=>'Thị Xã',
            'location'=>'21 07 12N, 105 57 26E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>262,
            'name'=>'Thuận Thành',
            'type'=>'Huyện',
            'location'=>'21 02 24N, 106 04 10E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>263,
            'name'=>'Gia Bình',
            'type'=>'Huyện',
            'location'=>'21 03 55N, 106 12 53E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>264,
            'name'=>'Lương Tài',
            'type'=>'Huyện',
            'location'=>'21 01 33N, 106 13 28E',
            'provinceid'=>27
            ] );
                        
            District::create( [
            'districtid'=>268,
            'name'=>'Hà Đông',
            'type'=>'Quận',
            'location'=>'20 57 25N, 105 45 21E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>269,
            'name'=>'Sơn Tây',
            'type'=>'Thị Xã',
            'location'=>'21 05 51N, 105 28 27E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>271,
            'name'=>'Ba Vì',
            'type'=>'Huyện',
            'location'=>'21 09 40N, 105 22 43E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>272,
            'name'=>'Phúc Thọ',
            'type'=>'Huyện',
            'location'=>'21 06 32N, 105 34 52E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>273,
            'name'=>'Đan Phượng',
            'type'=>'Huyện',
            'location'=>'21 07 13N, 105 40 49E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>274,
            'name'=>'Hoài Đức',
            'type'=>'Huyện',
            'location'=>'21 01 25N, 105 42 03E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>275,
            'name'=>'Quốc Oai',
            'type'=>'Huyện',
            'location'=>'20 58 45N, 105 36 43E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>276,
            'name'=>'Thạch Thất',
            'type'=>'Huyện',
            'location'=>'21 02 17N, 105 33 05E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>277,
            'name'=>'Chương Mỹ',
            'type'=>'Huyện',
            'location'=>'20 52 46N, 105 39 01E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>278,
            'name'=>'Thanh Oai',
            'type'=>'Huyện',
            'location'=>'20 51 44N, 105 46 18E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>279,
            'name'=>'Thường Tín',
            'type'=>'Huyện',
            'location'=>'20 49 59N, 105 22 19E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>280,
            'name'=>'Phú Xuyên',
            'type'=>'Huyện',
            'location'=>'20 43 37N, 105 53 43E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>281,
            'name'=>'Ứng Hòa',
            'type'=>'Huyện',
            'location'=>'20 42 41N, 105 47 58E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>282,
            'name'=>'Mỹ Đức',
            'type'=>'Huyện',
            'location'=>'20 41 53N, 105 43 31E',
            'provinceid'=>1
            ] );
                        
            District::create( [
            'districtid'=>288,
            'name'=>'Hải Dương',
            'type'=>'Thành Phố',
            'location'=>'20 56 14N, 106 18 21E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>290,
            'name'=>'Chí Linh',
            'type'=>'Huyện',
            'location'=>'21 07 47N, 106 23 46E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>291,
            'name'=>'Nam Sách',
            'type'=>'Huyện',
            'location'=>'21 00 15N, 106 20 26E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>292,
            'name'=>'Kinh Môn',
            'type'=>'Huyện',
            'location'=>'21 00 04N, 106 30 23E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>293,
            'name'=>'Kim Thành',
            'type'=>'Huyện',
            'location'=>'20 55 40N, 106 30 33E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>294,
            'name'=>'Thanh Hà',
            'type'=>'Huyện',
            'location'=>'20 53 19N, 106 25 43E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>295,
            'name'=>'Cẩm Giàng',
            'type'=>'Huyện',
            'location'=>'20 57 05N, 106 12 29E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>296,
            'name'=>'Bình Giang',
            'type'=>'Huyện',
            'location'=>'20 52 36N, 106 11 24E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>297,
            'name'=>'Gia Lộc',
            'type'=>'Huyện',
            'location'=>'20 51 01N, 106 17 34E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>298,
            'name'=>'Tứ Kỳ',
            'type'=>'Huyện',
            'location'=>'20 49 05N, 106 24 05E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>299,
            'name'=>'Ninh Giang',
            'type'=>'Huyện',
            'location'=>'20 45 13N, 106 20 09E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>300,
            'name'=>'Thanh Miện',
            'type'=>'Huyện',
            'location'=>'20 46 02N, 106 12 26E',
            'provinceid'=>30
            ] );
                        
            District::create( [
            'districtid'=>303,
            'name'=>'Hồng Bàng',
            'type'=>'Quận',
            'location'=>'20 52 37N, 106 38 32E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>304,
            'name'=>'Ngô Quyền',
            'type'=>'Quận',
            'location'=>'20 51 13N, 106 41 57E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>305,
            'name'=>'Lê Chân',
            'type'=>'Quận',
            'location'=>'20 50 12N, 106 40 30E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>306,
            'name'=>'Hải An',
            'type'=>'Quận',
            'location'=>'20 49 38N, 106 45 57E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>307,
            'name'=>'Kiến An',
            'type'=>'Quận',
            'location'=>'20 48 26N, 106 38 03E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>308,
            'name'=>'Đồ Sơn',
            'type'=>'Quận',
            'location'=>'20 42 41N, 106 44 54E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>309,
            'name'=>'Kinh Dương',
            'type'=>'Quận',
            'location'=>'',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>311,
            'name'=>'Thuỷ Nguyên',
            'type'=>'Huyện',
            'location'=>'20 56 36N, 106 39 38E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>312,
            'name'=>'An Dương',
            'type'=>'Huyện',
            'location'=>'20 53 06N, 106 35 36E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>313,
            'name'=>'An Lão',
            'type'=>'Huyện',
            'location'=>'20 47 54N, 106 33 19E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>314,
            'name'=>'Kiến Thụy',
            'type'=>'Huyện',
            'location'=>'20 45 13N, 106 41 47E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>315,
            'name'=>'Tiên Lãng',
            'type'=>'Huyện',
            'location'=>'20 42 23N, 106 36 03E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>316,
            'name'=>'Vĩnh Bảo',
            'type'=>'Huyện',
            'location'=>'20 40 56N, 106 29 57E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>317,
            'name'=>'Cát Hải',
            'type'=>'Huyện',
            'location'=>'20 47 09N, 106 58 07E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>318,
            'name'=>'Bạch Long Vĩ',
            'type'=>'Huyện',
            'location'=>'20 08 41N, 107 42 51E',
            'provinceid'=>31
            ] );
                        
            District::create( [
            'districtid'=>323,
            'name'=>'Hưng Yên',
            'type'=>'Thành Phố',
            'location'=>'20 39 38N, 106 03 08E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>325,
            'name'=>'Văn Lâm',
            'type'=>'Huyện',
            'location'=>'20 58 31N, 106 02 51E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>326,
            'name'=>'Văn Giang',
            'type'=>'Huyện',
            'location'=>'20 55 51N, 105 57 14E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>327,
            'name'=>'Yên Mỹ',
            'type'=>'Huyện',
            'location'=>'20 53 45N, 106 01 21E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>328,
            'name'=>'Mỹ Hào',
            'type'=>'Huyện',
            'location'=>'20 55 35N, 106 05 34E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>329,
            'name'=>'Ân Thi',
            'type'=>'Huyện',
            'location'=>'20 48 49N, 106 05 30E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>330,
            'name'=>'Khoái Châu',
            'type'=>'Huyện',
            'location'=>'20 49 53N, 105 58 28E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>331,
            'name'=>'Kim Động',
            'type'=>'Huyện',
            'location'=>'20 44 47N, 106 01 47E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>332,
            'name'=>'Tiên Lữ',
            'type'=>'Huyện',
            'location'=>'20 40 05N, 106 07 59E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>333,
            'name'=>'Phù Cừ',
            'type'=>'Huyện',
            'location'=>'20 42 51N, 106 11 30E',
            'provinceid'=>33
            ] );
                        
            District::create( [
            'districtid'=>336,
            'name'=>'Thái Bình',
            'type'=>'Thành Phố',
            'location'=>'20 26 45N, 106 19 56E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>338,
            'name'=>'Quỳnh Phụ',
            'type'=>'Huyện',
            'location'=>'20 38 57N, 106 21 16E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>339,
            'name'=>'Hưng Hà',
            'type'=>'Huyện',
            'location'=>'20 35 38N, 106 12 42E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>340,
            'name'=>'Đông Hưng',
            'type'=>'Huyện',
            'location'=>'20 32 50N, 106 20 15E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>341,
            'name'=>'Thái Thụy',
            'type'=>'Huyện',
            'location'=>'20 32 33N, 106 32 32E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>342,
            'name'=>'Tiền Hải',
            'type'=>'Huyện',
            'location'=>'20 21 05N, 106 32 45E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>343,
            'name'=>'Kiến Xương',
            'type'=>'Huyện',
            'location'=>'20 23 52N, 106 25 22E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>344,
            'name'=>'Vũ Thư',
            'type'=>'Huyện',
            'location'=>'20 25 29N, 106 16 43E',
            'provinceid'=>34
            ] );
                        
            District::create( [
            'districtid'=>347,
            'name'=>'Phủ Lý',
            'type'=>'Thành Phố',
            'location'=>'20 32 19N, 105 54 55E',
            'provinceid'=>35
            ] );
                        
            District::create( [
            'districtid'=>349,
            'name'=>'Duy Tiên',
            'type'=>'Huyện',
            'location'=>'20 37 33N, 105 58 01E',
            'provinceid'=>35
            ] );
                        
            District::create( [
            'districtid'=>350,
            'name'=>'Kim Bảng',
            'type'=>'Huyện',
            'location'=>'20 34 19N, 105 50 41E',
            'provinceid'=>35
            ] );
                        
            District::create( [
            'districtid'=>351,
            'name'=>'Thanh Liêm',
            'type'=>'Huyện',
            'location'=>'20 27 31N, 105 55 09E',
            'provinceid'=>35
            ] );
                        
            District::create( [
            'districtid'=>352,
            'name'=>'Bình Lục',
            'type'=>'Huyện',
            'location'=>'20 29 23N, 106 02 52E',
            'provinceid'=>35
            ] );
                        
            District::create( [
            'districtid'=>353,
            'name'=>'Lý Nhân',
            'type'=>'Huyện',
            'location'=>'20 32 55N, 106 04 48E',
            'provinceid'=>35
            ] );
                        
            District::create( [
            'districtid'=>356,
            'name'=>'Nam Định',
            'type'=>'Thành Phố',
            'location'=>'20 25 07N, 106 09 54E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>358,
            'name'=>'Mỹ Lộc',
            'type'=>'Huyện',
            'location'=>'20 27 21N, 106 07 56E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>359,
            'name'=>'Vụ Bản',
            'type'=>'Huyện',
            'location'=>'20 22 57N, 106 05 35E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>360,
            'name'=>'Ý Yên',
            'type'=>'Huyện',
            'location'=>'20 19 48N, 106 01 55E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>361,
            'name'=>'Nghĩa Hưng',
            'type'=>'Huyện',
            'location'=>'20 05 37N, 106 08 59E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>362,
            'name'=>'Nam Trực',
            'type'=>'Huyện',
            'location'=>'20 20 08N, 106 12 54E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>363,
            'name'=>'Trực Ninh',
            'type'=>'Huyện',
            'location'=>'20 14 42N, 106 12 45E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>364,
            'name'=>'Xuân Trường',
            'type'=>'Huyện',
            'location'=>'20 17 53N, 106 21 43E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>365,
            'name'=>'Giao Thủy',
            'type'=>'Huyện',
            'location'=>'20 14 45N, 106 28 39E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>366,
            'name'=>'Hải Hậu',
            'type'=>'Huyện',
            'location'=>'20 06 26N, 106 16 29E',
            'provinceid'=>36
            ] );
                        
            District::create( [
            'districtid'=>369,
            'name'=>'Ninh Bình',
            'type'=>'Thành Phố',
            'location'=>'20 14 45N, 105 58 24E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>370,
            'name'=>'Tam Điệp',
            'type'=>'Thị Xã',
            'location'=>'20 09 42N, 103 52 43E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>372,
            'name'=>'Nho Quan',
            'type'=>'Huyện',
            'location'=>'20 18 46N, 105 42 48E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>373,
            'name'=>'Gia Viễn',
            'type'=>'Huyện',
            'location'=>'20 19 50N, 105 52 20E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>374,
            'name'=>'Hoa Lư',
            'type'=>'Huyện',
            'location'=>'20 15 04N, 105 55 52E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>375,
            'name'=>'Yên Khánh',
            'type'=>'Huyện',
            'location'=>'20 11 26N, 106 04 33E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>376,
            'name'=>'Kim Sơn',
            'type'=>'Huyện',
            'location'=>'20 02 07N, 106 05 27E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>377,
            'name'=>'Yên Mô',
            'type'=>'Huyện',
            'location'=>'20 07 45N, 105 59 45E',
            'provinceid'=>37
            ] );
                        
            District::create( [
            'districtid'=>380,
            'name'=>'Thanh Hóa',
            'type'=>'Thành Phố',
            'location'=>'19 48 26N, 105 47 37E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>381,
            'name'=>'Bỉm Sơn',
            'type'=>'Thị Xã',
            'location'=>'20 05 21N, 105 51 48E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>382,
            'name'=>'Sầm Sơn',
            'type'=>'Thị Xã',
            'location'=>'19 45 11N, 105 54 03E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>384,
            'name'=>'Mường Lát',
            'type'=>'Huyện',
            'location'=>'20 30 42N, 104 37 27E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>385,
            'name'=>'Quan Hóa',
            'type'=>'Huyện',
            'location'=>'20 29 15N, 104 56 35E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>386,
            'name'=>'Bá Thước',
            'type'=>'Huyện',
            'location'=>'20 22 48N, 105 14 50E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>387,
            'name'=>'Quan Sơn',
            'type'=>'Huyện',
            'location'=>'20 15 17N, 104 51 58E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>388,
            'name'=>'Lang Chánh',
            'type'=>'Huyện',
            'location'=>'20 08 58N, 105 07 40E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>389,
            'name'=>'Ngọc Lặc',
            'type'=>'Huyện',
            'location'=>'20 04 08N, 105 22 39E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>390,
            'name'=>'Cẩm Thủy',
            'type'=>'Huyện',
            'location'=>'20 12 20N, 105 27 22E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>391,
            'name'=>'Thạch Thành',
            'type'=>'Huyện',
            'location'=>'21 12 41N, 105 36 38E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>392,
            'name'=>'Hà Trung',
            'type'=>'Huyện',
            'location'=>'20 03 20N, 105 51 20E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>393,
            'name'=>'Vĩnh Lộc',
            'type'=>'Huyện',
            'location'=>'20 02 29N, 105 39 28E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>394,
            'name'=>'Yên Định',
            'type'=>'Huyện',
            'location'=>'20 00 31N, 105 37 44E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>395,
            'name'=>'Thọ Xuân',
            'type'=>'Huyện',
            'location'=>'19 55 39N, 105 29 14E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>396,
            'name'=>'Thường Xuân',
            'type'=>'Huyện',
            'location'=>'19 54 55N, 105 10 46E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>397,
            'name'=>'Triệu Sơn',
            'type'=>'Huyện',
            'location'=>'19 48 11N, 105 34 03E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>398,
            'name'=>'Thiệu Hoá',
            'type'=>'Huyện',
            'location'=>'19 53 56N, 105 40 57E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>399,
            'name'=>'Hoằng Hóa',
            'type'=>'Huyện',
            'location'=>'19 51 59N, 105 51 34E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>400,
            'name'=>'Hậu Lộc',
            'type'=>'Huyện',
            'location'=>'19 56 02N, 105 53 19E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>401,
            'name'=>'Nga Sơn',
            'type'=>'Huyện',
            'location'=>'20 00 16N, 105 59 26E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>402,
            'name'=>'Như Xuân',
            'type'=>'Huyện',
            'location'=>'19 5 55N, 105 20 22E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>403,
            'name'=>'Như Thanh',
            'type'=>'Huyện',
            'location'=>'19 35 19N, 105 33 09E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>404,
            'name'=>'Nông Cống',
            'type'=>'Huyện',
            'location'=>'19 36 58N, 105 40 54E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>405,
            'name'=>'Đông Sơn',
            'type'=>'Huyện',
            'location'=>'19 47 44N, 105 42 19E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>406,
            'name'=>'Quảng Xương',
            'type'=>'Huyện',
            'location'=>'19 40 53N, 105 48 01E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>407,
            'name'=>'Tĩnh Gia',
            'type'=>'Huyện',
            'location'=>'19 27 13N, 105 43 38E',
            'provinceid'=>38
            ] );
                        
            District::create( [
            'districtid'=>412,
            'name'=>'Vinh',
            'type'=>'Thành Phố',
            'location'=>'18 41 06N, 105 42 05E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>413,
            'name'=>'Cửa Lò',
            'type'=>'Thị Xã',
            'location'=>'18 47 26N, 105 43 31E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>414,
            'name'=>'Thái Hoà',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>415,
            'name'=>'Quế Phong',
            'type'=>'Huyện',
            'location'=>'19 42 25N, 104 54 21E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>416,
            'name'=>'Quỳ Châu',
            'type'=>'Huyện',
            'location'=>'19 32 16N, 105 03 18E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>417,
            'name'=>'Kỳ Sơn',
            'type'=>'Huyện',
            'location'=>'19 24 36N, 104 09 45E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>418,
            'name'=>'Tương Dương',
            'type'=>'Huyện',
            'location'=>'19 19 15N, 104 35 41E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>419,
            'name'=>'Nghĩa Đàn',
            'type'=>'Huyện',
            'location'=>'19 21 19N, 105 26 33E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>420,
            'name'=>'Quỳ Hợp',
            'type'=>'Huyện',
            'location'=>'19 19 24N, 105 09 12E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>421,
            'name'=>'Quỳnh Lưu',
            'type'=>'Huyện',
            'location'=>'19 14 01N, 105 37 00E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>422,
            'name'=>'Con Cuông',
            'type'=>'Huyện',
            'location'=>'19 03 50N, 107 47 15E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>423,
            'name'=>'Tân Kỳ',
            'type'=>'Huyện',
            'location'=>'19 06 11N, 105 14 14E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>424,
            'name'=>'Anh Sơn',
            'type'=>'Huyện',
            'location'=>'18 58 04N, 105 04 30E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>425,
            'name'=>'Diễn Châu',
            'type'=>'Huyện',
            'location'=>'19 01 20N, 105 34 13E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>426,
            'name'=>'Yên Thành',
            'type'=>'Huyện',
            'location'=>'19 01 25N, 105 26 17E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>427,
            'name'=>'Đô Lương',
            'type'=>'Huyện',
            'location'=>'18 55 00N, 105 21 03E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>428,
            'name'=>'Thanh Chương',
            'type'=>'Huyện',
            'location'=>'18 44 11N, 105 12 59E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>429,
            'name'=>'Nghi Lộc',
            'type'=>'Huyện',
            'location'=>'18 47 41N, 105 31 30E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>430,
            'name'=>'Nam Đàn',
            'type'=>'Huyện',
            'location'=>'18 40 28N, 105 30 32E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>431,
            'name'=>'Hưng Nguyên',
            'type'=>'Huyện',
            'location'=>'18 41 13N, 105 37 41E',
            'provinceid'=>40
            ] );
                        
            District::create( [
            'districtid'=>436,
            'name'=>'Hà Tĩnh',
            'type'=>'Thành Phố',
            'location'=>'18 21 20N, 105 54 00E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>437,
            'name'=>'Hồng Lĩnh',
            'type'=>'Thị Xã',
            'location'=>'18 32 05N, 105 42 40E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>439,
            'name'=>'Hương Sơn',
            'type'=>'Huyện',
            'location'=>'18 26 47N, 105 19 36E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>440,
            'name'=>'Đức Thọ',
            'type'=>'Huyện',
            'location'=>'18 29 23N, 105 36 39E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>441,
            'name'=>'Vũ Quang',
            'type'=>'Huyện',
            'location'=>'18 19 30N, 105 26 38E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>442,
            'name'=>'Nghi Xuân',
            'type'=>'Huyện',
            'location'=>'18 38 46N, 105 46 17E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>443,
            'name'=>'Can Lộc',
            'type'=>'Huyện',
            'location'=>'18 26 39N, 105 46 13E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>444,
            'name'=>'Hương Khê',
            'type'=>'Huyện',
            'location'=>'18 11 36N, 105 41 24E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>445,
            'name'=>'Thạch Hà',
            'type'=>'Huyện',
            'location'=>'18 19 29N, 105 52 43E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>446,
            'name'=>'Cẩm Xuyên',
            'type'=>'Huyện',
            'location'=>'18 11 32N, 106 00 04E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>447,
            'name'=>'Kỳ Anh',
            'type'=>'Huyện',
            'location'=>'18 05 15N, 106 15 49E',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>448,
            'name'=>'Lộc Hà',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>42
            ] );
                        
            District::create( [
            'districtid'=>450,
            'name'=>'Đồng Hới',
            'type'=>'Thành Phố',
            'location'=>'17 26 53N, 106 35 15E',
            'provinceid'=>44
            ] );
                        
            District::create( [
            'districtid'=>452,
            'name'=>'Minh Hóa',
            'type'=>'Huyện',
            'location'=>'17 44 03N, 105 51 45E',
            'provinceid'=>44
            ] );
                        
            District::create( [
            'districtid'=>453,
            'name'=>'Tuyên Hóa',
            'type'=>'Huyện',
            'location'=>'17 54 04N, 105 58 17E',
            'provinceid'=>44
            ] );
                        
            District::create( [
            'districtid'=>454,
            'name'=>'Quảng Trạch',
            'type'=>'Huyện',
            'location'=>'17 50 04N, 106 22 24E',
            'provinceid'=>44
            ] );
                        
            District::create( [
            'districtid'=>455,
            'name'=>'Bố Trạch',
            'type'=>'Huyện',
            'location'=>'17 29 13N, 106 06 54E',
            'provinceid'=>44
            ] );
                        
            District::create( [
            'districtid'=>456,
            'name'=>'Quảng Ninh',
            'type'=>'Huyện',
            'location'=>'17 15 15N, 106 32 31E',
            'provinceid'=>44
            ] );
                        
            District::create( [
            'districtid'=>457,
            'name'=>'Lệ Thủy',
            'type'=>'Huyện',
            'location'=>'17 07 35N, 106 41 47E',
            'provinceid'=>44
            ] );
                        
            District::create( [
            'districtid'=>461,
            'name'=>'Đông Hà',
            'type'=>'Thành Phố',
            'location'=>'16 48 12N, 107 05 12E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>462,
            'name'=>'Quảng Trị',
            'type'=>'Thị Xã',
            'location'=>'16 44 37N, 107 11 20E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>464,
            'name'=>'Vĩnh Linh',
            'type'=>'Huyện',
            'location'=>'17 01 35N, 106 53 49E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>465,
            'name'=>'Hướng Hóa',
            'type'=>'Huyện',
            'location'=>'16 42 19N, 106 40 14E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>466,
            'name'=>'Gio Linh',
            'type'=>'Huyện',
            'location'=>'16 54 49N, 106 56 16E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>467,
            'name'=>'Đa Krông',
            'type'=>'Huyện',
            'location'=>'16 33 58N, 106 55 49E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>468,
            'name'=>'Cam Lộ',
            'type'=>'Huyện',
            'location'=>'16 47 09N, 106 57 52E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>469,
            'name'=>'Triệu Phong',
            'type'=>'Huyện',
            'location'=>'16 46 32N, 107 09 12E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>470,
            'name'=>'Hải Lăng',
            'type'=>'Huyện',
            'location'=>'16 41 07N, 107 13 34E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>471,
            'name'=>'Cồn Cỏ',
            'type'=>'Huyện',
            'location'=>'19 09 39N, 107 19 58E',
            'provinceid'=>45
            ] );
                        
            District::create( [
            'districtid'=>474,
            'name'=>'Huế',
            'type'=>'Thành Phố',
            'location'=>'16 27 16N, 107 34 29E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>476,
            'name'=>'Phong Điền',
            'type'=>'Huyện',
            'location'=>'16 32 42N, 106 16 37E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>477,
            'name'=>'Quảng Điền',
            'type'=>'Huyện',
            'location'=>'16 35 21N, 107 29 31E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>478,
            'name'=>'Phú Vang',
            'type'=>'Huyện',
            'location'=>'16 27 20N, 107 42 28E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>479,
            'name'=>'Hương Thủy',
            'type'=>'Huyện',
            'location'=>'16 19 27N, 107 37 26E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>480,
            'name'=>'Hương Trà',
            'type'=>'Huyện',
            'location'=>'16 25 49N, 107 28 37E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>481,
            'name'=>'A Lưới',
            'type'=>'Huyện',
            'location'=>'16 13 59N, 107 16 12E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>482,
            'name'=>'Phú Lộc',
            'type'=>'Huyện',
            'location'=>'16 17 16N, 107 55 25E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>483,
            'name'=>'Nam Đông',
            'type'=>'Huyện',
            'location'=>'16 07 11N, 107 41 25E',
            'provinceid'=>46
            ] );
                        
            District::create( [
            'districtid'=>490,
            'name'=>'Liên Chiểu',
            'type'=>'Quận',
            'location'=>'16 07 26N, 108 07 04E',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>491,
            'name'=>'Thanh Khê',
            'type'=>'Quận',
            'location'=>'16 03 28N, 108 11 00E',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>492,
            'name'=>'Hải Châu',
            'type'=>'Quận',
            'location'=>'16 03 38N, 108 11 46E',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>493,
            'name'=>'Sơn Trà',
            'type'=>'Quận',
            'location'=>'16 06 13N, 108 16 26E',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>494,
            'name'=>'Ngũ Hành Sơn',
            'type'=>'Quận',
            'location'=>'16 00 30N, 108 15 09E',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>495,
            'name'=>'Cẩm Lệ',
            'type'=>'Quận',
            'location'=>'',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>497,
            'name'=>'Hoà Vang',
            'type'=>'Huyện',
            'location'=>'16 03 59N, 108 01 57E',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>498,
            'name'=>'Hoàng Sa',
            'type'=>'Huyện',
            'location'=>'16 21 36N, 111 57 01E',
            'provinceid'=>48
            ] );
                        
            District::create( [
            'districtid'=>502,
            'name'=>'Tam Kỳ',
            'type'=>'Thành Phố',
            'location'=>'15 34 37N, 108 29 52E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>503,
            'name'=>'Hội An',
            'type'=>'Thành Phố',
            'location'=>'15 53 20N, 108 20 42E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>504,
            'name'=>'Tây Giang',
            'type'=>'Huyện',
            'location'=>'15 53 46N, 107 25 52E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>505,
            'name'=>'Đông Giang',
            'type'=>'Huyện',
            'location'=>'15 54 44N, 107 47 06E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>506,
            'name'=>'Đại Lộc',
            'type'=>'Huyện',
            'location'=>'15 50 10N, 107 58 27E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>507,
            'name'=>'Điện Bàn',
            'type'=>'Huyện',
            'location'=>'15 54 15N, 108 13 38E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>508,
            'name'=>'Duy Xuyên',
            'type'=>'Huyện',
            'location'=>'15 47 58N, 108 13 27E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>509,
            'name'=>'Quế Sơn',
            'type'=>'Huyện',
            'location'=>'15 41 03N, 108 05 34E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>510,
            'name'=>'Nam Giang',
            'type'=>'Huyện',
            'location'=>'15 36 37N, 107 33 52E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>511,
            'name'=>'Phước Sơn',
            'type'=>'Huyện',
            'location'=>'15 23 17N, 107 50 22E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>512,
            'name'=>'Hiệp Đức',
            'type'=>'Huyện',
            'location'=>'15 31 09N, 108 05 56E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>513,
            'name'=>'Thăng Bình',
            'type'=>'Huyện',
            'location'=>'15 42 29N, 108 22 04E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>514,
            'name'=>'Tiên Phước',
            'type'=>'Huyện',
            'location'=>'15 29 30N, 108 15 28E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>515,
            'name'=>'Bắc Trà My',
            'type'=>'Huyện',
            'location'=>'15 08 00N, 108 05 32E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>516,
            'name'=>'Nam Trà My',
            'type'=>'Huyện',
            'location'=>'15 16 40N, 108 12 15E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>517,
            'name'=>'Núi Thành',
            'type'=>'Huyện',
            'location'=>'15 26 53N, 108 34 49E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>518,
            'name'=>'Phú Ninh',
            'type'=>'Huyện',
            'location'=>'15 30 43N, 108 24 43E',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>519,
            'name'=>'Nông Sơn',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>49
            ] );
                        
            District::create( [
            'districtid'=>522,
            'name'=>'Quảng Ngãi',
            'type'=>'Thành Phố',
            'location'=>'15 07 17N, 108 48 24E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>524,
            'name'=>'Bình Sơn',
            'type'=>'Huyện',
            'location'=>'15 18 45N, 108 45 35E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>525,
            'name'=>'Trà Bồng',
            'type'=>'Huyện',
            'location'=>'15 13 30N, 108 29 57E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>526,
            'name'=>'Tây Trà',
            'type'=>'Huyện',
            'location'=>'15 11 13N, 108 22 23E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>527,
            'name'=>'Sơn Tịnh',
            'type'=>'Huyện',
            'location'=>'15 11 49N, 108 45 03E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>528,
            'name'=>'Tư Nghĩa',
            'type'=>'Huyện',
            'location'=>'15 05 25N, 108 45 23E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>529,
            'name'=>'Sơn Hà',
            'type'=>'Huyện',
            'location'=>'14 58 35N, 108 29 09E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>530,
            'name'=>'Sơn Tây',
            'type'=>'Huyện',
            'location'=>'14 58 11N, 108 21 22E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>531,
            'name'=>'Minh Long',
            'type'=>'Huyện',
            'location'=>'14 56 49N, 108 40 19E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>532,
            'name'=>'Nghĩa Hành',
            'type'=>'Huyện',
            'location'=>'14 58 06N, 108 46 05E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>533,
            'name'=>'Mộ Đức',
            'type'=>'Huyện',
            'location'=>'11 59 13N, 108 52 21E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>534,
            'name'=>'Đức Phổ',
            'type'=>'Huyện',
            'location'=>'14 44 59N, 108 56 58E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>535,
            'name'=>'Ba Tơ',
            'type'=>'Huyện',
            'location'=>'14 42 52N, 108 43 44E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>536,
            'name'=>'Lý Sơn',
            'type'=>'Huyện',
            'location'=>'15 22 50N, 109 06 56E',
            'provinceid'=>51
            ] );
                        
            District::create( [
            'districtid'=>540,
            'name'=>'Qui Nhơn',
            'type'=>'Thành Phố',
            'location'=>'13 47 15N, 109 12 48E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>542,
            'name'=>'An Lão',
            'type'=>'Huyện',
            'location'=>'14 32 10N, 108 47 52E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>543,
            'name'=>'Hoài Nhơn',
            'type'=>'Huyện',
            'location'=>'14 30 56N, 109 01 56E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>544,
            'name'=>'Hoài Ân',
            'type'=>'Huyện',
            'location'=>'14 20 51N, 108 54 04E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>545,
            'name'=>'Phù Mỹ',
            'type'=>'Huyện',
            'location'=>'14 14 41N, 109 05 43E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>546,
            'name'=>'Vĩnh Thạnh',
            'type'=>'Huyện',
            'location'=>'14 14 26N, 108 44 08E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>547,
            'name'=>'Tây Sơn',
            'type'=>'Huyện',
            'location'=>'13 56 47N, 108 53 06E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>548,
            'name'=>'Phù Cát',
            'type'=>'Huyện',
            'location'=>'14 03 48N, 109 03 57E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>549,
            'name'=>'An Nhơn',
            'type'=>'Huyện',
            'location'=>'13 51 28N, 109 04 02E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>550,
            'name'=>'Tuy Phước',
            'type'=>'Huyện',
            'location'=>'13 46 30N, 109 05 38E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>551,
            'name'=>'Vân Canh',
            'type'=>'Huyện',
            'location'=>'13 40 35N, 108 57 52E',
            'provinceid'=>52
            ] );
                        
            District::create( [
            'districtid'=>555,
            'name'=>'Tuy Hòa',
            'type'=>'Thành Phố',
            'location'=>'13 05 42N, 109 15 50E',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>557,
            'name'=>'Sông Cầu',
            'type'=>'Thị Xã',
            'location'=>'13 31 40N, 109 12 39E',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>558,
            'name'=>'Đồng Xuân',
            'type'=>'Huyện',
            'location'=>'13 24 59N, 108 56 46E',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>559,
            'name'=>'Tuy An',
            'type'=>'Huyện',
            'location'=>'13 15 19N, 109 12 21E',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>560,
            'name'=>'Sơn Hòa',
            'type'=>'Huyện',
            'location'=>'13 12 16N, 108 57 17E',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>561,
            'name'=>'Sông Hinh',
            'type'=>'Huyện',
            'location'=>'12 54 19N, 108 53 38E',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>562,
            'name'=>'Tây Hoà',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>563,
            'name'=>'Phú Hoà',
            'type'=>'Huyện',
            'location'=>'13 04 07N, 109 11 24E',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>564,
            'name'=>'Đông Hoà',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>54
            ] );
                        
            District::create( [
            'districtid'=>568,
            'name'=>'Nha Trang',
            'type'=>'Thành Phố',
            'location'=>'12 15 40N, 109 10 40E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>569,
            'name'=>'Cam Ranh',
            'type'=>'Thị Xã',
            'location'=>'11 59 05N, 108 08 17E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>570,
            'name'=>'Cam Lâm',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>571,
            'name'=>'Vạn Ninh',
            'type'=>'Huyện',
            'location'=>'12 43 10N, 109 11 18E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>572,
            'name'=>'Ninh Hòa',
            'type'=>'Huyện',
            'location'=>'12 32 54N, 109 06 11E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>573,
            'name'=>'Khánh Vĩnh',
            'type'=>'Huyện',
            'location'=>'12 17 50N, 108 51 56E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>574,
            'name'=>'Diên Khánh',
            'type'=>'Huyện',
            'location'=>'12 13 19N, 109 02 16E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>575,
            'name'=>'Khánh Sơn',
            'type'=>'Huyện',
            'location'=>'12 02 17N, 108 53 47E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>576,
            'name'=>'Trường Sa',
            'type'=>'Huyện',
            'location'=>'9 07 27N, 114 15 00E',
            'provinceid'=>56
            ] );
                        
            District::create( [
            'districtid'=>582,
            'name'=>'Phan Rang-Tháp Chàm',
            'type'=>'Thành Phố',
            'location'=>'11 36 11N, 108 58 34E',
            'provinceid'=>58
            ] );
                        
            District::create( [
            'districtid'=>584,
            'name'=>'Bác Ái',
            'type'=>'Huyện',
            'location'=>'11 54 45N, 108 51 29E',
            'provinceid'=>58
            ] );
                        
            District::create( [
            'districtid'=>585,
            'name'=>'Ninh Sơn',
            'type'=>'Huyện',
            'location'=>'11 42 36N, 108 44 55E',
            'provinceid'=>58
            ] );
                        
            District::create( [
            'districtid'=>586,
            'name'=>'Ninh Hải',
            'type'=>'Huyện',
            'location'=>'11 42 46N, 109 05 41E',
            'provinceid'=>58
            ] );
                        
            District::create( [
            'districtid'=>587,
            'name'=>'Ninh Phước',
            'type'=>'Huyện',
            'location'=>'11 28 56N, 108 50 34E',
            'provinceid'=>58
            ] );
                        
            District::create( [
            'districtid'=>588,
            'name'=>'Thuận Bắc',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>58
            ] );
                        
            District::create( [
            'districtid'=>589,
            'name'=>'Thuận Nam',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>58
            ] );
                        
            District::create( [
            'districtid'=>593,
            'name'=>'Phan Thiết',
            'type'=>'Thành Phố',
            'location'=>'10 54 16N, 108 03 44E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>594,
            'name'=>'La Gi',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>595,
            'name'=>'Tuy Phong',
            'type'=>'Huyện',
            'location'=>'11 20 26N, 108 41 15E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>596,
            'name'=>'Bắc Bình',
            'type'=>'Huyện',
            'location'=>'11 15 52N, 108 21 33E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>597,
            'name'=>'Hàm Thuận Bắc',
            'type'=>'Huyện',
            'location'=>'11 09 18N, 108 03 07E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>598,
            'name'=>'Hàm Thuận Nam',
            'type'=>'Huyện',
            'location'=>'10 56 20N, 107 54 38E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>599,
            'name'=>'Tánh Linh',
            'type'=>'Huyện',
            'location'=>'11 08 26N, 107 41 22E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>600,
            'name'=>'Đức Linh',
            'type'=>'Huyện',
            'location'=>'11 11 43N, 107 31 34E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>601,
            'name'=>'Hàm Tân',
            'type'=>'Huyện',
            'location'=>'10 44 41N, 107 41 33E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>602,
            'name'=>'Phú Quí',
            'type'=>'Huyện',
            'location'=>'10 33 13N, 108 57 46E',
            'provinceid'=>60
            ] );
                        
            District::create( [
            'districtid'=>608,
            'name'=>'Kon Tum',
            'type'=>'Thành Phố',
            'location'=>'14 20 32N, 107 58 04E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>610,
            'name'=>'Đắk Glei',
            'type'=>'Huyện',
            'location'=>'15 08 13N, 107 44 03E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>611,
            'name'=>'Ngọc Hồi',
            'type'=>'Huyện',
            'location'=>'14 44 23N, 107 38 49E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>612,
            'name'=>'Đắk Tô',
            'type'=>'Huyện',
            'location'=>'14 46 49N, 107 55 36E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>613,
            'name'=>'Kon Plông',
            'type'=>'Huyện',
            'location'=>'14 48 13N, 108 20 05E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>614,
            'name'=>'Kon Rẫy',
            'type'=>'Huyện',
            'location'=>'14 32 56N, 108 13 09E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>615,
            'name'=>'Đắk Hà',
            'type'=>'Huyện',
            'location'=>'14 36 50N, 107 59 55E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>616,
            'name'=>'Sa Thầy',
            'type'=>'Huyện',
            'location'=>'14 16 02N, 107 36 30E',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>617,
            'name'=>'Tu Mơ Rông',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>62
            ] );
                        
            District::create( [
            'districtid'=>622,
            'name'=>'Pleiku',
            'type'=>'Thành Phố',
            'location'=>'13 57 42N, 107 58 03E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>623,
            'name'=>'An Khê',
            'type'=>'Thị Xã',
            'location'=>'14 01 24N, 108 41 29E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>624,
            'name'=>'Ayun Pa',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>625,
            'name'=>'Kbang',
            'type'=>'Huyện',
            'location'=>'14 18 08N, 108 29 17E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>626,
            'name'=>'Đăk Đoa',
            'type'=>'Huyện',
            'location'=>'14 07 02N, 108 09 36E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>627,
            'name'=>'Chư Păh',
            'type'=>'Huyện',
            'location'=>'14 13 30N, 107 56 33E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>628,
            'name'=>'Ia Grai',
            'type'=>'Huyện',
            'location'=>'13 59 25N, 107 43 16E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>629,
            'name'=>'Mang Yang',
            'type'=>'Huyện',
            'location'=>'13 57 26N, 108 18 37E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>630,
            'name'=>'Kông Chro',
            'type'=>'Huyện',
            'location'=>'13 45 47N, 108 36 04E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>631,
            'name'=>'Đức Cơ',
            'type'=>'Huyện',
            'location'=>'13 46 16N, 107 38 26E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>632,
            'name'=>'Chư Prông',
            'type'=>'Huyện',
            'location'=>'13 35 39N, 107 47 36E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>633,
            'name'=>'Chư Sê',
            'type'=>'Huyện',
            'location'=>'13 37 04N, 108 06 56E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>634,
            'name'=>'Đăk Pơ',
            'type'=>'Huyện',
            'location'=>'13 55 47N, 108 36 16E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>635,
            'name'=>'Ia Pa',
            'type'=>'Huyện',
            'location'=>'13 31 37N, 108 30 34E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>637,
            'name'=>'Krông Pa',
            'type'=>'Huyện',
            'location'=>'13 14 13N, 108 39 12E',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>638,
            'name'=>'Phú Thiện',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>639,
            'name'=>'Chư Pưh',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>64
            ] );
                        
            District::create( [
            'districtid'=>643,
            'name'=>'Buôn Ma Thuột',
            'type'=>'Thành Phố',
            'location'=>'12 39 43N, 108 10 40E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>644,
            'name'=>'Buôn Hồ',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>645,
            'name'=>'Ea H\'leo',
            'type'=>'Huyện',
            'location'=>'13 13 52N, 108 12 30E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>646,
            'name'=>'Ea Súp',
            'type'=>'Huyện',
            'location'=>'13 10 59N, 107 46 49E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>647,
            'name'=>'Buôn Đôn',
            'type'=>'Huyện',
            'location'=>'12 52 45N, 107 45 20E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>648,
            'name'=>'Cư M\'gar',
            'type'=>'Huyện',
            'location'=>'12 53 47N, 108 04 16E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>649,
            'name'=>'Krông Búk',
            'type'=>'Huyện',
            'location'=>'12 56 27N, 108 13 54E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>650,
            'name'=>'Krông Năng',
            'type'=>'Huyện',
            'location'=>'12 59 41N, 108 23 42E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>651,
            'name'=>'Ea Kar',
            'type'=>'Huyện',
            'location'=>'12 48 17N, 108 32 42E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>652,
            'name'=>'M\'đrắk',
            'type'=>'Huyện',
            'location'=>'12 42 14N, 108 47 09E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>653,
            'name'=>'Krông Bông',
            'type'=>'Huyện',
            'location'=>'12 27 08N, 108 27 01E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>654,
            'name'=>'Krông Pắc',
            'type'=>'Huyện',
            'location'=>'12 41 20N, 108 18 42E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>655,
            'name'=>'Krông A Na',
            'type'=>'Huyện',
            'location'=>'12 31 51N, 108 05 03E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>656,
            'name'=>'Lắk',
            'type'=>'Huyện',
            'location'=>'12 19 20N, 108 12 17E',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>657,
            'name'=>'Cư Kuin',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>66
            ] );
                        
            District::create( [
            'districtid'=>660,
            'name'=>'Gia Nghĩa',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>661,
            'name'=>'Đắk Glong',
            'type'=>'Huyện',
            'location'=>'12 01 53N, 107 50 37E',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>662,
            'name'=>'Cư Jút',
            'type'=>'Huyện',
            'location'=>'12 40 56N, 107 44 44E',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>663,
            'name'=>'Đắk Mil',
            'type'=>'Huyện',
            'location'=>'12 31 08N, 107 42 24E',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>664,
            'name'=>'Krông Nô',
            'type'=>'Huyện',
            'location'=>'12 22 16N, 107 53 49E',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>665,
            'name'=>'Đắk Song',
            'type'=>'Huyện',
            'location'=>'12 14 04N, 107 36 30E',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>666,
            'name'=>'Đắk R\'lấp',
            'type'=>'Huyện',
            'location'=>'12 02 30N, 107 25 59E',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>667,
            'name'=>'Tuy Đức',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>67
            ] );
                        
            District::create( [
            'districtid'=>672,
            'name'=>'Đà Lạt',
            'type'=>'Thành Phố',
            'location'=>'11 54 33N, 108 27 08E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>673,
            'name'=>'Bảo Lộc',
            'type'=>'Thị Xã',
            'location'=>'11 32 48N, 107 47 37E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>674,
            'name'=>'Đam Rông',
            'type'=>'Huyện',
            'location'=>'12 02 35N, 108 10 26E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>675,
            'name'=>'Lạc Dương',
            'type'=>'Huyện',
            'location'=>'12 08 30N, 108 27 48E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>676,
            'name'=>'Lâm Hà',
            'type'=>'Huyện',
            'location'=>'11 55 26N, 108 11 31E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>677,
            'name'=>'Đơn Dương',
            'type'=>'Huyện',
            'location'=>'11 48 26N, 108 32 48E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>678,
            'name'=>'Đức Trọng',
            'type'=>'Huyện',
            'location'=>'11 41 50N, 108 18 58E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>679,
            'name'=>'Di Linh',
            'type'=>'Huyện',
            'location'=>'11 31 10N, 108 05 23E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>680,
            'name'=>'Bảo Lâm',
            'type'=>'Huyện',
            'location'=>'11 38 31N, 107 43 25E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>681,
            'name'=>'Đạ Huoai',
            'type'=>'Huyện',
            'location'=>'11 27 11N, 107 38 08E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>682,
            'name'=>'Đạ Tẻh',
            'type'=>'Huyện',
            'location'=>'11 33 46N, 107 32 00E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>683,
            'name'=>'Cát Tiên',
            'type'=>'Huyện',
            'location'=>'11 39 38N, 107 23 27E',
            'provinceid'=>68
            ] );
                        
            District::create( [
            'districtid'=>688,
            'name'=>'Phước Long',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>689,
            'name'=>'Đồng Xoài',
            'type'=>'Thị Xã',
            'location'=>'11 31 01N, 106 50 21E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>690,
            'name'=>'Bình Long',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>691,
            'name'=>'Bù Gia Mập',
            'type'=>'Huyện',
            'location'=>'11 56 57N, 106 59 21E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>692,
            'name'=>'Lộc Ninh',
            'type'=>'Huyện',
            'location'=>'11 49 28N, 106 35 11E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>693,
            'name'=>'Bù Đốp',
            'type'=>'Huyện',
            'location'=>'11 59 08N, 106 49 54E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>694,
            'name'=>'Hớn Quản',
            'type'=>'Huyện',
            'location'=>'11 37 37N, 106 36 02E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>695,
            'name'=>'Đồng Phù',
            'type'=>'Huyện',
            'location'=>'11 28 45N, 106 57 07E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>696,
            'name'=>'Bù Đăng',
            'type'=>'Huyện',
            'location'=>'11 46 09N, 107 14 14E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>697,
            'name'=>'Chơn Thành',
            'type'=>'Huyện',
            'location'=>'11 28 45N, 106 39 26E',
            'provinceid'=>70
            ] );
                        
            District::create( [
            'districtid'=>703,
            'name'=>'Tây Ninh',
            'type'=>'Thị Xã',
            'location'=>'11 21 59N, 106 07 47E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>705,
            'name'=>'Tân Biên',
            'type'=>'Huyện',
            'location'=>'11 35 14N, 105 57 53E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>706,
            'name'=>'Tân Châu',
            'type'=>'Huyện',
            'location'=>'11 34 49N, 106 17 48E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>707,
            'name'=>'Dương Minh Châu',
            'type'=>'Huyện',
            'location'=>'11 22 04N, 106 16 58E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>708,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'11 19 02N, 106 00 15E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>709,
            'name'=>'Hòa Thành',
            'type'=>'Huyện',
            'location'=>'11 15 31N, 106 08 44E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>710,
            'name'=>'Gò Dầu',
            'type'=>'Huyện',
            'location'=>'11 09 39N, 106 14 42E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>711,
            'name'=>'Bến Cầu',
            'type'=>'Huyện',
            'location'=>'11 07 50N, 106 08 25E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>712,
            'name'=>'Trảng Bàng',
            'type'=>'Huyện',
            'location'=>'11 06 18N, 106 23 12E',
            'provinceid'=>72
            ] );
                        
            District::create( [
            'districtid'=>718,
            'name'=>'Thủ Dầu Một',
            'type'=>'Thị Xã',
            'location'=>'11 00 01N, 106 38 56E',
            'provinceid'=>74
            ] );
                        
            District::create( [
            'districtid'=>720,
            'name'=>'Dầu Tiếng',
            'type'=>'Huyện',
            'location'=>'11 19 07N, 106 26 59E',
            'provinceid'=>74
            ] );
                        
            District::create( [
            'districtid'=>721,
            'name'=>'Bến Cát',
            'type'=>'Huyện',
            'location'=>'11 12 42N, 106 36 28E',
            'provinceid'=>74
            ] );
                        
            District::create( [
            'districtid'=>722,
            'name'=>'Phú Giáo',
            'type'=>'Huyện',
            'location'=>'11 20 21N, 106 47 48E',
            'provinceid'=>74
            ] );
                        
            District::create( [
            'districtid'=>723,
            'name'=>'Tân Uyên',
            'type'=>'Huyện',
            'location'=>'11 06 31N, 106 49 02E',
            'provinceid'=>74
            ] );
                        
            District::create( [
            'districtid'=>724,
            'name'=>'Dĩ An',
            'type'=>'Huyện',
            'location'=>'10 55 03N, 106 47 09E',
            'provinceid'=>74
            ] );
                        
            District::create( [
            'districtid'=>725,
            'name'=>'Thuận An',
            'type'=>'Huyện',
            'location'=>'10 55 58N, 106 41 59E',
            'provinceid'=>74
            ] );
                        
            District::create( [
            'districtid'=>731,
            'name'=>'Biên Hòa',
            'type'=>'Thành Phố',
            'location'=>'10 56 31N, 106 50 50E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>732,
            'name'=>'Long Khánh',
            'type'=>'Thị Xã',
            'location'=>'10 56 24N, 107 14 29E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>734,
            'name'=>'Tân Phú',
            'type'=>'Huyện',
            'location'=>'11 22 51N, 107 21 35E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>735,
            'name'=>'Vĩnh Cửu',
            'type'=>'Huyện',
            'location'=>'11 14 31N, 107 00 06E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>736,
            'name'=>'Định Quán',
            'type'=>'Huyện',
            'location'=>'11 12 41N, 107 17 03E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>737,
            'name'=>'Trảng Bom',
            'type'=>'Huyện',
            'location'=>'10 58 39N, 107 00 52E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>738,
            'name'=>'Thống Nhất',
            'type'=>'Huyện',
            'location'=>'10 58 29N, 107 09 26E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>739,
            'name'=>'Cẩm Mỹ',
            'type'=>'Huyện',
            'location'=>'10 47 05N, 107 14 36E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>740,
            'name'=>'Long Thành',
            'type'=>'Huyện',
            'location'=>'10 47 38N, 106 59 42E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>741,
            'name'=>'Xuân Lộc',
            'type'=>'Huyện',
            'location'=>'10 55 39N, 107 24 21E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>742,
            'name'=>'Nhơn Trạch',
            'type'=>'Huyện',
            'location'=>'10 39 18N, 106 53 18E',
            'provinceid'=>75
            ] );
                        
            District::create( [
            'districtid'=>747,
            'name'=>'Vũng Tầu',
            'type'=>'Thành Phố',
            'location'=>'10 24 08N, 107 07 05E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>748,
            'name'=>'Bà Rịa',
            'type'=>'Thị Xã',
            'location'=>'10 30 33N, 107 10 47E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>750,
            'name'=>'Châu Đức',
            'type'=>'Huyện',
            'location'=>'10 39 23N, 107 15 08E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>751,
            'name'=>'Xuyên Mộc',
            'type'=>'Huyện',
            'location'=>'10 37 46N, 107 29 39E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>752,
            'name'=>'Long Điền',
            'type'=>'Huyện',
            'location'=>'10 26 47N, 107 12 53E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>753,
            'name'=>'Đất Đỏ',
            'type'=>'Huyện',
            'location'=>'10 28 40N, 107 18 27E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>754,
            'name'=>'Tân Thành',
            'type'=>'Huyện',
            'location'=>'10 34 50N, 107 05 06E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>755,
            'name'=>'Côn Đảo',
            'type'=>'Huyện',
            'location'=>'8 42 25N, 106 36 05E',
            'provinceid'=>77
            ] );
                        
            District::create( [
            'districtid'=>760,
            'name'=>'1',
            'type'=>'Quận',
            'location'=>'10 46 34N, 106 41 45E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>761,
            'name'=>'12',
            'type'=>'Quận',
            'location'=>'10 51 43N, 106 39 32E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>762,
            'name'=>'Thủ Đức',
            'type'=>'Quận',
            'location'=>'10 51 20N, 106 45 05E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>763,
            'name'=>'9',
            'type'=>'Quận',
            'location'=>'10 49 49N, 106 49 03E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>764,
            'name'=>'Gò Vấp',
            'type'=>'Quận',
            'location'=>'10 50 12N, 106 39 52E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>765,
            'name'=>'Bình Thạnh',
            'type'=>'Quận',
            'location'=>'10 48 46N, 106 42 57E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>766,
            'name'=>'Tân Bình',
            'type'=>'Quận',
            'location'=>'10 48 13N, 106 39 03E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>767,
            'name'=>'Tân Phú',
            'type'=>'Quận',
            'location'=>'10 47 32N, 106 37 31E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>768,
            'name'=>'Phú Nhuận',
            'type'=>'Quận',
            'location'=>'10 48 06N, 106 40 39E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>769,
            'name'=>'2',
            'type'=>'Quận',
            'location'=>'10 46 51N, 106 45 25E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>770,
            'name'=>'3',
            'type'=>'Quận',
            'location'=>'10 46 48N, 106 40 46E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>771,
            'name'=>'10',
            'type'=>'Quận',
            'location'=>'10 46 25N, 106 40 02E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>772,
            'name'=>'11',
            'type'=>'Quận',
            'location'=>'10 46 01N, 106 38 44E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>773,
            'name'=>'4',
            'type'=>'Quận',
            'location'=>'10 45 42N, 106 42 09E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>774,
            'name'=>'5',
            'type'=>'Quận',
            'location'=>'10 45 24N, 106 40 00E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>775,
            'name'=>'6',
            'type'=>'Quận',
            'location'=>'10 44 46N, 106 38 10E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>776,
            'name'=>'8',
            'type'=>'Quận',
            'location'=>'10 43 24N, 106 37 40E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>777,
            'name'=>'Bình Tân',
            'type'=>'Quận',
            'location'=>'10 46 16N, 106 35 26E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>778,
            'name'=>'7',
            'type'=>'Quận',
            'location'=>'10 44 19N, 106 43 35E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>783,
            'name'=>'Củ Chi',
            'type'=>'Huyện',
            'location'=>'11 02 17N, 106 30 20E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>784,
            'name'=>'Hóc Môn',
            'type'=>'Huyện',
            'location'=>'10 52 42N, 106 35 33E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>785,
            'name'=>'Bình Chánh',
            'type'=>'Huyện',
            'location'=>'10 45 01N, 106 30 45E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>786,
            'name'=>'Nhà Bè',
            'type'=>'Huyện',
            'location'=>'10 39 06N, 106 43 35E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>787,
            'name'=>'Cần Giờ',
            'type'=>'Huyện',
            'location'=>'10 30 43N, 106 52 50E',
            'provinceid'=>79
            ] );
                        
            District::create( [
            'districtid'=>794,
            'name'=>'Tân An',
            'type'=>'Thành Phố',
            'location'=>'10 31 36N, 106 24 06E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>796,
            'name'=>'Tân Hưng',
            'type'=>'Huyện',
            'location'=>'10 49 05N, 105 39 26E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>797,
            'name'=>'Vĩnh Hưng',
            'type'=>'Huyện',
            'location'=>'10 52 54N, 105 45 58E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>798,
            'name'=>'Mộc Hóa',
            'type'=>'Huyện',
            'location'=>'10 47 09N, 105 57 56E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>799,
            'name'=>'Tân Thạnh',
            'type'=>'Huyện',
            'location'=>'10 37 44N, 105 57 07E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>800,
            'name'=>'Thạnh Hóa',
            'type'=>'Huyện',
            'location'=>'10 41 37N, 106 11 08E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>801,
            'name'=>'Đức Huệ',
            'type'=>'Huyện',
            'location'=>'10 51 57N, 106 15 48E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>802,
            'name'=>'Đức Hòa',
            'type'=>'Huyện',
            'location'=>'10 53 04N, 106 23 58E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>803,
            'name'=>'Bến Lức',
            'type'=>'Huyện',
            'location'=>'10 41 40N, 106 26 28E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>804,
            'name'=>'Thủ Thừa',
            'type'=>'Huyện',
            'location'=>'10 39 41N, 106 20 12E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>805,
            'name'=>'Tân Trụ',
            'type'=>'Huyện',
            'location'=>'10 31 47N, 106 30 06E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>806,
            'name'=>'Cần Đước',
            'type'=>'Huyện',
            'location'=>'10 32 21N, 106 36 33E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>807,
            'name'=>'Cần Giuộc',
            'type'=>'Huyện',
            'location'=>'10 34 43N, 106 38 35E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>808,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'10 27 52N, 106 30 00E',
            'provinceid'=>80
            ] );
                        
            District::create( [
            'districtid'=>815,
            'name'=>'Mỹ Tho',
            'type'=>'Thành Phố',
            'location'=>'10 22 14N, 106 21 52E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>816,
            'name'=>'Gò Công',
            'type'=>'Thị Xã',
            'location'=>'10 21 55N, 106 40 24E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>818,
            'name'=>'Tân Phước',
            'type'=>'Huyện',
            'location'=>'10 30 36N, 106 13 02E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>819,
            'name'=>'Cái Bè',
            'type'=>'Huyện',
            'location'=>'10 24 21N, 105 56 01E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>820,
            'name'=>'Cai Lậy',
            'type'=>'Huyện',
            'location'=>'10 24 20N, 106 06 05E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>821,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'20 25 21N, 106 16 57E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>822,
            'name'=>'Chợ Gạo',
            'type'=>'Huyện',
            'location'=>'10 23 45N, 106 26 53E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>823,
            'name'=>'Gò Công Tây',
            'type'=>'Huyện',
            'location'=>'10 19 55N, 106 35 02E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>824,
            'name'=>'Gò Công Đông',
            'type'=>'Huyện',
            'location'=>'10 20 42N, 106 42 54E',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>825,
            'name'=>'Tân Phú Đông',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>82
            ] );
                        
            District::create( [
            'districtid'=>829,
            'name'=>'Bến Tre',
            'type'=>'Thành Phố',
            'location'=>'10 14 17N, 106 22 26E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>831,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'10 17 24N, 106 17 45E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>832,
            'name'=>'Chợ Lách',
            'type'=>'Huyện',
            'location'=>'10 13 26N, 106 09 08E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>833,
            'name'=>'Mỏ Cày Nam',
            'type'=>'Huyện',
            'location'=>'10 06 56N, 106 19 40E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>834,
            'name'=>'Giồng Trôm',
            'type'=>'Huyện',
            'location'=>'10 08 46N, 106 28 12E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>835,
            'name'=>'Bình Đại',
            'type'=>'Huyện',
            'location'=>'10 09 56N, 106 37 46E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>836,
            'name'=>'Ba Tri',
            'type'=>'Huyện',
            'location'=>'10 04 08N, 106 35 10E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>837,
            'name'=>'Thạnh Phú',
            'type'=>'Huyện',
            'location'=>'9 55 53N, 106 32 45E',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>838,
            'name'=>'Mỏ Cày Bắc',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>83
            ] );
                        
            District::create( [
            'districtid'=>842,
            'name'=>'Trà Vinh',
            'type'=>'Thị Xã',
            'location'=>'9 57 09N, 106 20 39E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>844,
            'name'=>'Càng Long',
            'type'=>'Huyện',
            'location'=>'9 58 18N, 106 12 52E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>845,
            'name'=>'Cầu Kè',
            'type'=>'Huyện',
            'location'=>'9 51 23N, 106 03 33E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>846,
            'name'=>'Tiểu Cần',
            'type'=>'Huyện',
            'location'=>'9 48 37N, 106 12 06E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>847,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'9 52 57N, 106 24 12E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>848,
            'name'=>'Cầu Ngang',
            'type'=>'Huyện',
            'location'=>'9 47 14N, 106 29 19E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>849,
            'name'=>'Trà Cú',
            'type'=>'Huyện',
            'location'=>'9 42 06N, 106 16 24E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>850,
            'name'=>'Duyên Hải',
            'type'=>'Huyện',
            'location'=>'9 39 58N, 106 26 23E',
            'provinceid'=>84
            ] );
                        
            District::create( [
            'districtid'=>855,
            'name'=>'Vĩnh Long',
            'type'=>'Thành Phố',
            'location'=>'10 15 09N, 105 56 08E',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>857,
            'name'=>'Long Hồ',
            'type'=>'Huyện',
            'location'=>'10 13 58N, 105 55 47E',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>858,
            'name'=>'Mang Thít',
            'type'=>'Huyện',
            'location'=>'10 10 58N, 106 05 13E',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>859,
            'name'=>'Vũng Liêm',
            'type'=>'Huyện',
            'location'=>'10 03 32N, 106 10 35E',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>860,
            'name'=>'Tam Bình',
            'type'=>'Huyện',
            'location'=>'10 03 58N, 105 58 03E',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>861,
            'name'=>'Bình Minh',
            'type'=>'Huyện',
            'location'=>'10 05 45N, 105 47 21E',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>862,
            'name'=>'Trà Ôn',
            'type'=>'Huyện',
            'location'=>'9 59 20N, 105 57 56E',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>863,
            'name'=>'Bình Tân',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>86
            ] );
                        
            District::create( [
            'districtid'=>866,
            'name'=>'Cao Lãnh',
            'type'=>'Thành Phố',
            'location'=>'10 27 38N, 105 37 21E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>867,
            'name'=>'Sa Đéc',
            'type'=>'Thị Xã',
            'location'=>'10 19 22N, 105 44 31E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>868,
            'name'=>'Hồng Ngự',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>869,
            'name'=>'Tân Hồng',
            'type'=>'Huyện',
            'location'=>'10 52 48N, 105 29 21E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>870,
            'name'=>'Hồng Ngự',
            'type'=>'Huyện',
            'location'=>'10 48 13N, 105 19 00E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>871,
            'name'=>'Tam Nông',
            'type'=>'Huyện',
            'location'=>'10 44 06N, 105 30 58E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>872,
            'name'=>'Tháp Mười',
            'type'=>'Huyện',
            'location'=>'10 33 36N, 105 47 13E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>873,
            'name'=>'Cao Lãnh',
            'type'=>'Huyện',
            'location'=>'10 29 03N, 105 41 40E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>874,
            'name'=>'Thanh Bình',
            'type'=>'Huyện',
            'location'=>'10 36 38N, 105 28 51E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>875,
            'name'=>'Lấp Vò',
            'type'=>'Huyện',
            'location'=>'10 21 27N, 105 36 06E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>876,
            'name'=>'Lai Vung',
            'type'=>'Huyện',
            'location'=>'10 14 43N, 105 38 40E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>877,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'10 13 27N, 105 48 38E',
            'provinceid'=>87
            ] );
                        
            District::create( [
            'districtid'=>883,
            'name'=>'Long Xuyên',
            'type'=>'Thành Phố',
            'location'=>'10 22 22N, 105 25 33E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>884,
            'name'=>'Châu Đốc',
            'type'=>'Thị Xã',
            'location'=>'10 41 20N, 105 05 15E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>886,
            'name'=>'An Phú',
            'type'=>'Huyện',
            'location'=>'10 50 12N, 105 05 33E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>887,
            'name'=>'Tân Châu',
            'type'=>'Thị Xã',
            'location'=>'10 49 11N, 105 11 18E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>888,
            'name'=>'Phú Tân',
            'type'=>'Huyện',
            'location'=>'10 40 26N, 105 14 40E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>889,
            'name'=>'Châu Phú',
            'type'=>'Huyện',
            'location'=>'10 34 12N, 105 12 13E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>890,
            'name'=>'Tịnh Biên',
            'type'=>'Huyện',
            'location'=>'10 33 30N, 105 00 17E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>891,
            'name'=>'Tri Tôn',
            'type'=>'Huyện',
            'location'=>'10 24 41N, 104 56 58E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>892,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'10 25 39N, 105 15 31E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>893,
            'name'=>'Chợ Mới',
            'type'=>'Huyện',
            'location'=>'10 27 23N, 105 26 57E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>894,
            'name'=>'Thoại Sơn',
            'type'=>'Huyện',
            'location'=>'10 16 45N, 105 15 59E',
            'provinceid'=>89
            ] );
                        
            District::create( [
            'districtid'=>899,
            'name'=>'Rạch Giá',
            'type'=>'Thành Phố',
            'location'=>'10 01 35N, 105 06 20E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>900,
            'name'=>'Hà Tiên',
            'type'=>'Thị Xã',
            'location'=>'10 22 54N, 104 30 10E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>902,
            'name'=>'Kiên Lương',
            'type'=>'Huyện',
            'location'=>'10 20 21N, 104 39 46E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>903,
            'name'=>'Hòn Đất',
            'type'=>'Huyện',
            'location'=>'10 14 20N, 104 55 57E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>904,
            'name'=>'Tân Hiệp',
            'type'=>'Huyện',
            'location'=>'10 05 18N, 105 14 04E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>905,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'9 57 37N, 105 10 16E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>906,
            'name'=>'Giồng Giềng',
            'type'=>'Huyện',
            'location'=>'9 56 05N, 105 22 06E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>907,
            'name'=>'Gò Quao',
            'type'=>'Huyện',
            'location'=>'9 43 17N, 105 17 06E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>908,
            'name'=>'An Biên',
            'type'=>'Huyện',
            'location'=>'9 48 37N, 105 03 18E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>909,
            'name'=>'An Minh',
            'type'=>'Huyện',
            'location'=>'9 40 24N, 104 59 05E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>910,
            'name'=>'Vĩnh Thuận',
            'type'=>'Huyện',
            'location'=>'9 33 25N, 105 11 30E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>911,
            'name'=>'Phú Quốc',
            'type'=>'Huyện',
            'location'=>'10 13 44N, 103 57 25E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>912,
            'name'=>'Kiên Hải',
            'type'=>'Huyện',
            'location'=>'9 48 31N, 104 37 48E',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>913,
            'name'=>'U Minh Thượng',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>914,
            'name'=>'Giang Thành',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>91
            ] );
                        
            District::create( [
            'districtid'=>916,
            'name'=>'Ninh Kiều',
            'type'=>'Quận',
            'location'=>'10 01 58N, 105 45 34E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>917,
            'name'=>'Ô Môn',
            'type'=>'Quận',
            'location'=>'10 07 28N, 105 37 51E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>918,
            'name'=>'Bình Thuỷ',
            'type'=>'Quận',
            'location'=>'10 03 42N, 105 43 17E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>919,
            'name'=>'Cái Răng',
            'type'=>'Quận',
            'location'=>'9 59 57N, 105 46 56E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>923,
            'name'=>'Thốt Nốt',
            'type'=>'Quận',
            'location'=>'10 14 23N, 105 32 02E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>924,
            'name'=>'Vĩnh Thạnh',
            'type'=>'Huyện',
            'location'=>'10 11 35N, 105 22 45E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>925,
            'name'=>'Cờ Đỏ',
            'type'=>'Huyện',
            'location'=>'10 02 48N, 105 29 46E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>926,
            'name'=>'Phong Điền',
            'type'=>'Huyện',
            'location'=>'9 59 57N, 105 39 35E',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>927,
            'name'=>'Thới Lai',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>92
            ] );
                        
            District::create( [
            'districtid'=>930,
            'name'=>'Vị Thanh',
            'type'=>'Thị Xã',
            'location'=>'9 45 15N, 105 24 50E',
            'provinceid'=>93
            ] );
                        
            District::create( [
            'districtid'=>931,
            'name'=>'Ngã Bảy',
            'type'=>'Thị Xã',
            'location'=>'',
            'provinceid'=>93
            ] );
                        
            District::create( [
            'districtid'=>932,
            'name'=>'Châu Thành A',
            'type'=>'Huyện',
            'location'=>'9 55 50N, 105 38 31E',
            'provinceid'=>93
            ] );
                        
            District::create( [
            'districtid'=>933,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'9 55 22N, 105 48 37E',
            'provinceid'=>93
            ] );
                        
            District::create( [
            'districtid'=>934,
            'name'=>'Phụng Hiệp',
            'type'=>'Huyện',
            'location'=>'9 47 20N, 105 43 29E',
            'provinceid'=>93
            ] );
                        
            District::create( [
            'districtid'=>935,
            'name'=>'Vị Thuỷ',
            'type'=>'Huyện',
            'location'=>'9 48 05N, 105 32 13E',
            'provinceid'=>93
            ] );
                        
            District::create( [
            'districtid'=>936,
            'name'=>'Long Mỹ',
            'type'=>'Huyện',
            'location'=>'9 40 47N, 105 30 53E',
            'provinceid'=>93
            ] );
                        
            District::create( [
            'districtid'=>941,
            'name'=>'Sóc Trăng',
            'type'=>'Thành Phố',
            'location'=>'9 36 39N, 105 59 00E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>942,
            'name'=>'Châu Thành',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>943,
            'name'=>'Kế Sách',
            'type'=>'Huyện',
            'location'=>'9 49 30N, 105 57 25E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>944,
            'name'=>'Mỹ Tú',
            'type'=>'Huyện',
            'location'=>'9 38 21N, 105 49 52E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>945,
            'name'=>'Cù Lao Dung',
            'type'=>'Huyện',
            'location'=>'9 37 36N, 106 12 13E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>946,
            'name'=>'Long Phú',
            'type'=>'Huyện',
            'location'=>'9 34 38N, 106 06 07E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>947,
            'name'=>'Mỹ Xuyên',
            'type'=>'Huyện',
            'location'=>'9 28 16N, 105 55 51E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>948,
            'name'=>'Ngã Năm',
            'type'=>'Huyện',
            'location'=>'9 31 38N, 105 37 22E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>949,
            'name'=>'Thạnh Trị',
            'type'=>'Huyện',
            'location'=>'9 28 05N, 105 43 02E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>950,
            'name'=>'Vĩnh Châu',
            'type'=>'Huyện',
            'location'=>'9 20 50N, 105 59 58E',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>951,
            'name'=>'Trần Đề',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>94
            ] );
                        
            District::create( [
            'districtid'=>954,
            'name'=>'Bạc Liêu',
            'type'=>'Thị Xã',
            'location'=>'9 16 05N, 105 45 08E',
            'provinceid'=>95
            ] );
                        
            District::create( [
            'districtid'=>956,
            'name'=>'Hồng Dân',
            'type'=>'Huyện',
            'location'=>'9 30 37N, 105 24 25E',
            'provinceid'=>95
            ] );
                        
            District::create( [
            'districtid'=>957,
            'name'=>'Phước Long',
            'type'=>'Huyện',
            'location'=>'9 23 13N, 105 24 41E',
            'provinceid'=>95
            ] );
                        
            District::create( [
            'districtid'=>958,
            'name'=>'Vĩnh Lợi',
            'type'=>'Huyện',
            'location'=>'9 16 51N, 105 40 54E',
            'provinceid'=>95
            ] );
                        
            District::create( [
            'districtid'=>959,
            'name'=>'Giá Rai',
            'type'=>'Huyện',
            'location'=>'9 15 51N, 105 23 18E',
            'provinceid'=>95
            ] );
                        
            District::create( [
            'districtid'=>960,
            'name'=>'Đông Hải',
            'type'=>'Huyện',
            'location'=>'9 08 11N, 105 24 42E',
            'provinceid'=>95
            ] );
                        
            District::create( [
            'districtid'=>961,
            'name'=>'Hoà Bình',
            'type'=>'Huyện',
            'location'=>'',
            'provinceid'=>95
            ] );
                        
            District::create( [
            'districtid'=>964,
            'name'=>'Cà Mau',
            'type'=>'Thành Phố',
            'location'=>'9 10 33N, 105 11 11E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>966,
            'name'=>'U Minh',
            'type'=>'Huyện',
            'location'=>'9 22 30N, 104 57 00E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>967,
            'name'=>'Thới Bình',
            'type'=>'Huyện',
            'location'=>'9 22 50N, 105 07 35E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>968,
            'name'=>'Trần Văn Thời',
            'type'=>'Huyện',
            'location'=>'9 07 36N, 104 57 27E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>969,
            'name'=>'Cái Nước',
            'type'=>'Huyện',
            'location'=>'9 00 31N, 105 03 23E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>970,
            'name'=>'Đầm Dơi',
            'type'=>'Huyện',
            'location'=>'8 57 48N, 105 13 56E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>971,
            'name'=>'Năm Căn',
            'type'=>'Huyện',
            'location'=>'8 46 59N, 104 58 20E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>972,
            'name'=>'Phú Tân',
            'type'=>'Huyện',
            'location'=>'8 52 47N, 104 53 35E',
            'provinceid'=>96
            ] );
                        
            District::create( [
            'districtid'=>973,
            'name'=>'Ngọc Hiển',
            'type'=>'Huyện',
            'location'=>'8 40 47N, 104 57 58E',
            'provinceid'=>96
            ] );
    }
}
