@extends('client.layout.master')
@section('content')
    <main class="main">
        <div class="container">
            <nav class="breadcrumb-area" aria-label="breadcrumb">
                <ol id="breadcrumb" class="breadcrumb-inner">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Điện tử, công nghệ</li>
                </ol>
            </nav>
        </div>

        <div class="form-filter-area">
            <div class="container">
                <div id="postsFilter" class="form-filter">
                    <div class="item-filter dropdown">
                        <button
                            class="btn drilldown dropdown-toggle"
                            type="button"
                            id="dropdownLocations"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Toàn quốc
                        </button>
                        <ul
                            id="locationsFilter"
                            class="dropdown-menu"
                            style="min-width: 100%"
                            aria-labelledby="dropdownLocations"
                        >
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location active"
                                    data-parent="0"
                                    data-locationSlug=""
                                    data-depth="0"
                                >Toàn quốc</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="1"
                                    data-locationSlug="ha-noi"
                                    data-depth="1"
                                >Hà Nội</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="619"
                                    data-locationSlug="tp-ho-chi-minh"
                                    data-depth="1"
                                >TP Hồ Chí Minh</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="970"
                                    data-locationSlug="binh-duong"
                                    data-depth="1"
                                >Bình Dương</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="1072"
                                    data-locationSlug="da-nang"
                                    data-depth="1"
                                >Đà Nẵng</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="1138"
                                    data-locationSlug="hai-phong"
                                    data-depth="1"
                                >Hải Phòng</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="1382"
                                    data-locationSlug="long-an"
                                    data-depth="1"
                                >Long An</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="1592"
                                    data-locationSlug="ba-ria-vung-tau"
                                    data-depth="1"
                                >Bà Rịa Vũng Tàu</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="1686"
                                    data-locationSlug="an-giang"
                                    data-depth="1"
                                >An Giang</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="1854"
                                    data-locationSlug="bac-giang"
                                    data-depth="1"
                                >Bắc Giang</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="2093"
                                    data-locationSlug="bac-kan"
                                    data-depth="1"
                                >Bắc Kạn</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="2224"
                                    data-locationSlug="bac-lieu"
                                    data-depth="1"
                                >Bạc Liêu</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="2297"
                                    data-locationSlug="bac-ninh"
                                    data-depth="1"
                                >Bắc Ninh</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="2434"
                                    data-locationSlug="ben-tre"
                                    data-depth="1"
                                >Bến Tre</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="2610"
                                    data-locationSlug="binh-dinh"
                                    data-depth="1"
                                >Bình Định</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="2780"
                                    data-locationSlug="binh-phuoc"
                                    data-depth="1"
                                >Bình Phước</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="2904"
                                    data-locationSlug="binh-thuan"
                                    data-depth="1"
                                >Bình Thuận
                                </a>
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="3041"
                                    data-locationSlug="ca-mau"
                                    data-depth="1"
                                >Cà Mau</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="3151"
                                    data-locationSlug="can-tho"
                                    data-depth="1"
                                >Cần Thơ</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="3250"
                                    data-locationSlug="cao-bang"
                                    data-depth="1"
                                >Cao Bằng</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="3463"
                                    data-locationSlug="dak-lak"
                                    data-depth="1"
                                >Đắk Lắk</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="3664"
                                    data-locationSlug="dak-nong"
                                    data-depth="1"
                                >Đắk Nông</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="3744"
                                    data-locationSlug="dien-bien"
                                    data-depth="1"
                                >Điện Biên</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="3873"
                                    data-locationSlug="dong-nai"
                                    data-depth="1"
                                >Đồng Nai</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="4060"
                                    data-locationSlug="dong-thap"
                                    data-depth="1"
                                >Đồng Tháp</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="4215"
                                    data-locationSlug="gia-lai"
                                    data-depth="1"
                                >Gia Lai</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="4457"
                                    data-locationSlug="ha-giang"
                                    data-depth="1"
                                >Hà Giang</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="4664"
                                    data-locationSlug="ha-nam"
                                    data-depth="1"
                                >Hà Nam</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="4787"
                                    data-locationSlug="ha-tinh"
                                    data-depth="1"
                                >Hà Tĩnh</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="5063"
                                    data-locationSlug="hai-duong"
                                    data-depth="1"
                                >Hải Dương</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="5342"
                                    data-locationSlug="hau-giang"
                                    data-depth="1"
                                >Hậu Giang</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="5424"
                                    data-locationSlug="hoa-binh"
                                    data-depth="1"
                                >Hòa Bình</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="5646"
                                    data-locationSlug="hung-yen"
                                    data-depth="1"
                                >Hưng Yên</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="5819"
                                    data-locationSlug="khanh-hoa"
                                    data-depth="1"
                                >Khánh Hòa</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="5970"
                                    data-locationSlug="kien-giang"
                                    data-depth="1"
                                >Kiên Giang</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="6130"
                                    data-locationSlug="kon-tum"
                                    data-depth="1"
                                >Kon Tum</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="6236"
                                    data-locationSlug="lai-chau"
                                    data-depth="1"
                                >Lai Châu</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="6354"
                                    data-locationSlug="lam-dong"
                                    data-depth="1"
                                >Lâm Đồng</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="6508"
                                    data-locationSlug="lang-son"
                                    data-depth="1"
                                >Lạng Sơn</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="6743"
                                    data-locationSlug="lao-cai"
                                    data-depth="1"
                                >Lào Cai</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="6917"
                                    data-locationSlug="nam-dinh"
                                    data-depth="1"
                                >Nam Định</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="7157"
                                    data-locationSlug="nghe-an"
                                    data-depth="1"
                                >Nghệ An</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="7657"
                                    data-locationSlug="ninh-binh"
                                    data-depth="1"
                                >Ninh Bình</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="7811"
                                    data-locationSlug="ninh-thuan"
                                    data-depth="1"
                                >Ninh Thuận</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="7884"
                                    data-locationSlug="phu-tho"
                                    data-depth="1"
                                >Phú Thọ</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="8173"
                                    data-locationSlug="phu-yen"
                                    data-depth="1"
                                >Phú Yên</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="8295"
                                    data-locationSlug="quang-binh"
                                    data-depth="1"
                                >Quảng Bình</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="8462"
                                    data-locationSlug="quang-nam"
                                    data-depth="1"
                                >Quảng Nam</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="8727"
                                    data-locationSlug="quang-ngai"
                                    data-depth="1"
                                >Quảng Ngãi</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="8928"
                                    data-locationSlug="quang-ninh"
                                    data-depth="1"
                                >Quảng Ninh</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="9126"
                                    data-locationSlug="quang-tri"
                                    data-depth="1"
                                >Quảng Trị</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="9277"
                                    data-locationSlug="soc-trang"
                                    data-depth="1"
                                >Sóc Trăng</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="9400"
                                    data-locationSlug="son-la"
                                    data-depth="1"
                                >Sơn La</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="9617"
                                    data-locationSlug="tay-ninh"
                                    data-depth="1"
                                >Tây Ninh</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="9722"
                                    data-locationSlug="thai-binh"
                                    data-depth="1"
                                >Thái Bình</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="10017"
                                    data-locationSlug="thai-nguyen"
                                    data-depth="1"
                                >Thái Nguyên</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="10208"
                                    data-locationSlug="thanh-hoa"
                                    data-depth="1"
                                >Thanh Hóa</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="10864"
                                    data-locationSlug="thua-thien-hue"
                                    data-depth="1"
                                >Thừa Thiên Huế</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="11032"
                                    data-locationSlug="tien-giang"
                                    data-depth="1"
                                >Tiền Giang</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="11222"
                                    data-locationSlug="tra-vinh"
                                    data-depth="1"
                                >Trà Vinh</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="11336"
                                    data-locationSlug="tuyen-quang"
                                    data-depth="1"
                                >Tuyên Quang</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="11486"
                                    data-locationSlug="vinh-long"
                                    data-depth="1"
                                >Vĩnh Long</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="11604"
                                    data-locationSlug="vinh-phuc"
                                    data-depth="1"
                                >Vĩnh Phúc</a
                                >
                            </li>
                            <li class="hasChild">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item location"
                                    data-parent="11751"
                                    data-locationSlug="yen-bai"
                                    data-depth="1"
                                >Yên Bái</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="item-filter dropdown">
                        <button
                            class="btn drilldown dropdown-toggle"
                            type="button"
                            id="dropdownCategories"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Điện tử, công nghệ
                        </button>
                        <ul
                            id="categoriesFilter"
                            class="dropdown-menu"
                            style="min-width: 100%"
                            aria-labelledby="dropdownCategories"
                        >
                            <li>
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug bg-light font-weight-bold"
                                    data-parent="-1"
                                    data-slug="dien-tu-cong-nghe"
                                    data-is_parent="1"
                                ><i class="fas fa-arrow-left fa-sm"></i> Điện tử, công nghệ
                                </a>
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="98"
                                    data-slug="dien-thoai"
                                    data-is_parent=""
                                >Điện thoại</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="39"
                                    data-slug="may-tinh-bang"
                                    data-is_parent=""
                                >Máy tính bảng</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="41"
                                    data-slug="laptop"
                                    data-is_parent=""
                                >Laptop</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="42"
                                    data-slug="may-tinh-de-ban"
                                    data-is_parent=""
                                >Máy tính để bàn</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="47"
                                    data-slug="may-anh"
                                    data-is_parent=""
                                >Máy ảnh</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="99"
                                    data-slug="may-quay"
                                    data-is_parent=""
                                >Máy quay</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="46"
                                    data-slug="am-thanh"
                                    data-is_parent=""
                                >Âm thanh</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="100"
                                    data-slug="ti-vi"
                                    data-is_parent=""
                                >Ti vi</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="101"
                                    data-slug="thiet-bi-deo-thong-minh"
                                    data-is_parent=""
                                >Thiết bị đeo thông minh</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="40"
                                    data-slug="phu-kien"
                                    data-is_parent=""
                                >Phụ kiện</a
                                >
                            </li>
                            <li class="">
                                <a
                                    href="javascript:void(0)"
                                    class="dropdown-item slug"
                                    data-parent="48"
                                    data-slug="linh-kien"
                                    data-is_parent=""
                                >Linh kiện</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div id="priceRangeFilter" class="item-filter">
                        <div class="box-filter-price dropdown active">
                <span
                    id="priceRangeLabel"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                  0 VNĐ - 30.000.000+ VNĐ
                </span>
                            <div class="dropdown-price dropdown-menu" id="dropdown-price">
                                <div class="group-input-price">
                                    <p>
                                        Giá từ <span id="startPrice"></span> VNĐ đến
                                        <span id="endPrice"></span
                                        ><span id="endPriceMax" class="d-none">+</span> VNĐ
                                    </p>
                                </div>
                                <div id="priceRange"></div>
                                <button type="button" class="btn-filter-price">
                                    Áp dụng
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="expandSubFilter" class="item-filter"></div>
                    <div id="expandSubValueFilter" class="item-filter"></div>
                </div>
                <div id="expandsFilter"></div>
            </div>
        </div>
        <section class="home_content_area">
            <div class="container">
                <div class="box-title-cate">
                    <h1 id="title-category" class="title" itemprop="name">
                        Mua bán Điện tử, công nghệ cũ, mới giá rẻ
                    </h1>
                </div>

                <div class="area_inner d-flex align-items-center">
                    <div class="area_content">
                        <div class="column-left">
                            <div class="column-left-inner">
                                <div class="wrap-list-item-fluid">
                                    <div class="box-sort">
                                        <select name="sort" class="niceSelect">
                                            <option value="published_at:desc" selected>
                                                Tin mới nhất
                                            </option>
                                            <option value="published_at:asc">Tin cũ nhất</option>
                                            <option value="price:asc">Giá thấp nhất</option>
                                            <option value="price:desc">Giá cao nhất</option>
                                        </select>
                                    </div>
                                    <div id="newPosts">
                                        <div class="list-item-post">
                                            <div
                                                class="item-post"
                                                itemscope
                                                itemtype="http://schema.org/Product"
                                            >
                                                <a
                                                    href="/dong-co-peeimorger-m-5ik60u-cfv-moi-chinh-hang-gia-re-2391516.html"
                                                    data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-1&vn_term=Desktop&vn_thumb=1"
                                                    title="Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng giá rẻ"
                                                    class="item-image click-tracking"
                                                    itemprop="url"
                                                >
                                                    <img
                                                        src="https://i-raovat.vnecdn.net/2021/09/03/01ebf9d7_1630657071.jpg?w=220&h=132&q=100&dpr=1&rt=fill&g=no&s=cvg-fosH9-HoIwfqORAGPg"
                                                        alt="Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng giá rẻ"
                                                        itemprop="image"
                                                        width="220"
                                                        height="132"
                                                    />
                                                </a>
                                                <div class="item-info">
                                                    <h3 class="info-title" itemprop="name">
                                                        <a
                                                            href="/dong-co-peeimorger-m-5ik60u-cfv-moi-chinh-hang-gia-re-2391516.html"
                                                            data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-1&vn_term=Desktop&vn_thumb=1"
                                                            title="Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng giá rẻ"
                                                            class="click-tracking"
                                                            itemprop="url"
                                                        >Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng
                                                            giá rẻ</a
                                                        >
                                                    </h3>
                                                    <div
                                                        class="info-price"
                                                        itemprop="offers"
                                                        itemtype="http://schema.org/Offer"
                                                    >
                                                        <p
                                                            class="price-current"
                                                            itemprop="price"
                                                            content="0"
                                                        >
                                <span class="price-current-value"
                                >Thỏa thuận</span
                                >
                                                        </p>
                                                    </div>
                                                    <p class="info-location">
                                                        Phường An Bình, Huyện Dĩ An, Bình Dương
                                                    </p>
                                                    <!--<p class="info-view mt-1"> lượt xem</p>-->
                                                </div>
                                            </div>
                                            <div
                                                class="item-post"
                                                itemscope
                                                itemtype="http://schema.org/Product"
                                            >
                                                <a
                                                    href="/khoi-dong-tu-togami-clk-26j-p6-moi-chinh-hang-gia-re-2391518.html"
                                                    data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-2&vn_term=Desktop&vn_thumb=1"
                                                    title="Khởi động từ Togami CLK-26J-P6 mới chính hãng giá rẻ"
                                                    class="item-image click-tracking"
                                                    itemprop="url"
                                                >
                                                    <img
                                                        src="https://i-raovat.vnecdn.net/2021/09/03/ebcfa432_1630657155.jpg?w=220&h=132&q=100&dpr=1&rt=fill&g=no&s=UVZ5uT4dKvBv8uIi3sn6hA"
                                                        alt="Khởi động từ Togami CLK-26J-P6 mới chính hãng giá rẻ"
                                                        itemprop="image"
                                                        width="220"
                                                        height="132"
                                                    />
                                                </a>
                                                <div class="item-info">
                                                    <h3 class="info-title" itemprop="name">
                                                        <a
                                                            href="/khoi-dong-tu-togami-clk-26j-p6-moi-chinh-hang-gia-re-2391518.html"
                                                            data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-2&vn_term=Desktop&vn_thumb=1"
                                                            title="Khởi động từ Togami CLK-26J-P6 mới chính hãng giá rẻ"
                                                            class="click-tracking"
                                                            itemprop="url"
                                                        >Khởi động từ Togami CLK-26J-P6 mới chính hãng
                                                            giá rẻ</a
                                                        >
                                                    </h3>
                                                    <div
                                                        class="info-price"
                                                        itemprop="offers"
                                                        itemtype="http://schema.org/Offer"
                                                    >
                                                        <p
                                                            class="price-current"
                                                            itemprop="price"
                                                            content="0"
                                                        >
                                <span class="price-current-value"
                                >Thỏa thuận</span
                                >
                                                        </p>
                                                    </div>
                                                    <p class="info-location">
                                                        Phường An Bình, Huyện Dĩ An, Bình Dương
                                                    </p>
                                                    <!--<p class="info-view mt-1"> lượt xem</p>-->
                                                </div>
                                            </div>
                                            <div
                                                class="item-post"
                                                itemscope
                                                itemtype="http://schema.org/Product"
                                            >
                                                <a
                                                    href="/hop-giam-toc-motor-peeimoger-us-5i90ac-moi-chinh-hang-gia-re-2391517.html"
                                                    data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-3&vn_term=Desktop&vn_thumb=1"
                                                    title="Hộp giảm tốc motor PeeiMoger US 5I90AC mới chính hãng giá rẻ"
                                                    class="item-image click-tracking"
                                                    itemprop="url"
                                                >
                                                    <img
                                                        src="https://i-raovat.vnecdn.net/2021/09/03/a47b6e32_1630657115.jpg?w=220&h=132&q=100&dpr=1&rt=fill&g=no&s=xyGW2vZG_0M7CKcNErht1Q"
                                                        alt="Hộp giảm tốc motor PeeiMoger US 5I90AC mới chính hãng giá rẻ"
                                                        itemprop="image"
                                                        width="220"
                                                        height="132"
                                                    />
                                                </a>
                                                <div class="item-info">
                                                    <h3 class="info-title" itemprop="name">
                                                        <a
                                                            href="/hop-giam-toc-motor-peeimoger-us-5i90ac-moi-chinh-hang-gia-re-2391517.html"
                                                            data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-3&vn_term=Desktop&vn_thumb=1"
                                                            title="Hộp giảm tốc motor PeeiMoger US 5I90AC mới chính hãng giá rẻ"
                                                            class="click-tracking"
                                                            itemprop="url"
                                                        >Hộp giảm tốc motor PeeiMoger US 5I90AC mới
                                                            chính hãng giá rẻ</a
                                                        >
                                                    </h3>
                                                    <div
                                                        class="info-price"
                                                        itemprop="offers"
                                                        itemtype="http://schema.org/Offer"
                                                    >
                                                        <p
                                                            class="price-current"
                                                            itemprop="price"
                                                            content="0"
                                                        >
                                <span class="price-current-value"
                                >Thỏa thuận</span
                                >
                                                        </p>
                                                    </div>
                                                    <p class="info-location">
                                                        Phường An Bình, Huyện Dĩ An, Bình Dương
                                                    </p>
                                                    <!--<p class="info-view mt-1"> lượt xem</p>-->
                                                </div>
                                            </div>
                                            <div
                                                class="item-post"
                                                itemscope
                                                itemtype="http://schema.org/Product"
                                            >
                                                <a
                                                    href="/cylinder-kep-khi-nen-airtac-hfp32-moi-chinh-hang-gia-re-2391520.html"
                                                    data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-4&vn_term=Desktop&vn_thumb=1"
                                                    title="Cylinder kẹp khí nén Airtac HFP32 mới chính hãng giá rẻ"
                                                    class="item-image click-tracking"
                                                    itemprop="url"
                                                >
                                                    <img
                                                        src="https://i-raovat.vnecdn.net/2021/09/03/3895fa8d_1630657251.jpg?w=220&h=132&q=100&dpr=1&rt=fill&g=no&s=EcRsV0HmGrtOK0rQhL8D9g"
                                                        alt="Cylinder kẹp khí nén Airtac HFP32 mới chính hãng giá rẻ"
                                                        itemprop="image"
                                                        width="220"
                                                        height="132"
                                                    />
                                                </a>
                                                <div class="item-info">
                                                    <h3 class="info-title" itemprop="name">
                                                        <a
                                                            href="/cylinder-kep-khi-nen-airtac-hfp32-moi-chinh-hang-gia-re-2391520.html"
                                                            data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-4&vn_term=Desktop&vn_thumb=1"
                                                            title="Cylinder kẹp khí nén Airtac HFP32 mới chính hãng giá rẻ"
                                                            class="click-tracking"
                                                            itemprop="url"
                                                        >Cylinder kẹp khí nén Airtac HFP32 mới chính
                                                            hãng giá rẻ</a
                                                        >
                                                    </h3>
                                                    <div
                                                        class="info-price"
                                                        itemprop="offers"
                                                        itemtype="http://schema.org/Offer"
                                                    >
                                                        <p
                                                            class="price-current"
                                                            itemprop="price"
                                                            content="0"
                                                        >
                                <span class="price-current-value"
                                >Thỏa thuận</span
                                >
                                                        </p>
                                                    </div>
                                                    <p class="info-location">
                                                        Phường An Bình, Huyện Dĩ An, Bình Dương
                                                    </p>
                                                    <!--<p class="info-view mt-1"> lượt xem</p>-->
                                                </div>
                                            </div>
                                            <div
                                                class="item-post"
                                                itemscope
                                                itemtype="http://schema.org/Product"
                                            >
                                                <a
                                                    href="/laptop-msi-modern-14-b5m-014vn-2391377.html"
                                                    data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-5&vn_term=Desktop&vn_thumb=1"
                                                    title="Laptop MSI Modern 14 B5M 014VN"
                                                    class="item-image click-tracking"
                                                    itemprop="url"
                                                >
                                                    <img
                                                        src="https://i-raovat.vnecdn.net/2021/09/01/118be6c1_1630459976.jpg?w=220&h=132&q=100&dpr=1&rt=fill&g=no&s=EXZVsJ-fug44bgEkEMaU_A"
                                                        alt="Laptop MSI Modern 14 B5M 014VN"
                                                        itemprop="image"
                                                        width="220"
                                                        height="132"
                                                    />
                                                </a>
                                                <div class="item-info">
                                                    <h3 class="info-title" itemprop="name">
                                                        <a
                                                            href="/laptop-msi-modern-14-b5m-014vn-2391377.html"
                                                            data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-5&vn_term=Desktop&vn_thumb=1"
                                                            title="Laptop MSI Modern 14 B5M 014VN"
                                                            class="click-tracking"
                                                            itemprop="url"
                                                        >Laptop MSI Modern 14 B5M 014VN</a
                                                        >
                                                    </h3>
                                                    <div
                                                        class="info-price"
                                                        itemprop="offers"
                                                        itemtype="http://schema.org/Offer"
                                                    >
                                                        <p
                                                            class="price-current"
                                                            itemprop="price"
                                                            content="0"
                                                        >
                                <span class="price-current-value"
                                >Thỏa thuận</span
                                >
                                                        </p>
                                                    </div>
                                                    <p class="info-location">
                                                        Phường 8, Thành phố Đà Lạt, Lâm Đồng
                                                    </p>
                                                    <!--<p class="info-view mt-1"> lượt xem</p>-->
                                                </div>
                                            </div>
                                            <div
                                                class="item-post"
                                                itemscope
                                                itemtype="http://schema.org/Product"
                                            >
                                                <a
                                                    href="/may-tra-keo-musashi-ms-1d-chinh-hang-2391351.html"
                                                    data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-6&vn_term=Desktop&vn_thumb=1"
                                                    title="Máy tra keo Musashi MS-1D chính hãng"
                                                    class="item-image click-tracking"
                                                    itemprop="url"
                                                >
                                                    <img
                                                        src="https://i-raovat.vnecdn.net/2021/08/31/b1423f0f_1630402971.jpg?w=220&h=132&q=100&dpr=1&rt=fill&g=no&s=Z1taHYrSD3yopjSLB_2DyQ"
                                                        alt="Máy tra keo Musashi MS-1D chính hãng"
                                                        itemprop="image"
                                                        width="220"
                                                        height="132"
                                                    />
                                                </a>
                                                <div class="item-info">
                                                    <h3 class="info-title" itemprop="name">
                                                        <a
                                                            href="/may-tra-keo-musashi-ms-1d-chinh-hang-2391351.html"
                                                            data-itm-source="#vn_source=Category&vn_campaign=Stream&vn_medium=Item-6&vn_term=Desktop&vn_thumb=1"
                                                            title="Máy tra keo Musashi MS-1D chính hãng"
                                                            class="click-tracking"
                                                            itemprop="url"
                                                        >Máy tra keo Musashi MS-1D chính hãng</a
                                                        >
                                                    </h3>
                                                    <div
                                                        class="info-price"
                                                        itemprop="offers"
                                                        itemtype="http://schema.org/Offer"
                                                    >
                                                        <p
                                                            class="price-current"
                                                            itemprop="price"
                                                            content="0"
                                                        >
                                <span class="price-current-value"
                                >Thỏa thuận</span
                                >
                                                        </p>
                                                    </div>
                                                    <p class="info-location">
                                                        Phường Máy Tơ, Quận Ngô Quyền, Hải Phòng
                                                    </p>
                                                    <!--<p class="info-view mt-1"> lượt xem</p>-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pagination-area">
                                            <div class="form-inner">
                                                <form action="/dien-tu-cong-nghe" method="post">
                                                    <label for="input_search_page">Trang </label>
                                                    <input
                                                        id="input_search_page"
                                                        class="search-page"
                                                        type="text"
                                                        name="page"
                                                        value="1"
                                                    />
                                                    <input type="hidden" name="csrf_token" />
                                                    <span>của 970</span>
                                                </form>
                                                <button
                                                    class="
                              btn-prev-pagination btn-prev-pagination--disable
                            "
                                                    title="Trang trước"
                                                ></button>
                                                <a
                                                    href="/dien-tu-cong-nghe?page=2"
                                                    class="btn-next-pagination"
                                                    title="Trang sau"
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-right">
                            <div id="adsPosts" class="column-right-inner">
                                <div class="wrap-list-item-vertical">
                                    <div class="box-title">
                                        <h2 class="title">Tin rao nổi bật</h2>
                                    </div>

                                    <div class="list-item-post">
                                        <div
                                            class="item-post"
                                            itemscope
                                            itemtype="http://schema.org/Product"
                                        >
                                            <a
                                                href="/laptop-msi-modern-14-b10mw-636vn-san-sang-phuc-vu-moi-nguoi-2391246.html"
                                                data-itm-source="#vn_source=Home&vn_campaign=Box-Tinraonoibat&vn_medium=Item-8&vn_term=Desktop&vn_thumb=1"
                                                title="Laptop Msi Modern 14 B10Mw 636Vn sẵn sàng phục vụ mọi người"
                                                class="item-image click-tracking"
                                                itemprop="url"
                                            >
                                                <img
                                                    src="https://i-raovat.vnecdn.net/2021/08/30/984f81a6_1630299331.jpg?w=300&h=180&q=100&dpr=1&rt=fill&g=no&s=faouHhOROFI9BEQ1h4kYOA"
                                                    alt="Laptop Msi Modern 14 B10Mw 636Vn sẵn sàng phục vụ mọi người"
                                                    itemprop="image"
                                                    width="300"
                                                    height="180"
                                                />
                                            </a>
                                            <div class="item-info">
                                                <h3 class="info-title" itemprop="name">
                                                    <a
                                                        href="/laptop-msi-modern-14-b10mw-636vn-san-sang-phuc-vu-moi-nguoi-2391246.html"
                                                        data-itm-source="#vn_source=Home&vn_campaign=Box-Tinraonoibat&vn_medium=Item-8&vn_term=Desktop&vn_thumb=1"
                                                        title="Laptop Msi Modern 14 B10Mw 636Vn sẵn sàng phục vụ mọi người"
                                                        class="click-tracking"
                                                        itemprop="url"
                                                    >Laptop Msi Modern 14 B10Mw 636Vn sẵn sàng phục vụ
                                                        mọi người</a
                                                    >
                                                </h3>
                                                <div
                                                    class="info-price"
                                                    itemprop="offers"
                                                    itemscope
                                                    itemtype="http://schema.org/Offer"
                                                >
                                                    <p
                                                        class="price-current"
                                                        itemprop="price"
                                                        content="0"
                                                    >
                              <span class="price-current-value"
                              >Thỏa thuận</span
                              >
                                                    </p>
                                                </div>
                                                <p class="info-location">
                                                    Phường 8, Thành phố Đà Lạt, Lâm Đồng
                                                </p>
                                                <!--<p class="info-view mt-1"> lượt xem</p>-->
                                            </div>
                                        </div>
                                        <div
                                            class="item-post"
                                            itemscope
                                            itemtype="http://schema.org/Product"
                                        >
                                            <a
                                                href="/dong-co-peeimorger-m-5ik60u-cfv-moi-chinh-hang-gia-re-2391516.html"
                                                data-itm-source="#vn_source=Home&vn_campaign=Box-Tinraonoibat&vn_medium=Item-9&vn_term=Desktop&vn_thumb=1"
                                                title="Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng giá rẻ"
                                                class="item-image click-tracking"
                                                itemprop="url"
                                            >
                                                <img
                                                    src="https://i-raovat.vnecdn.net/2021/09/03/01ebf9d7_1630657071.jpg?w=300&h=180&q=100&dpr=1&rt=fill&g=no&s=SrYX942MaZjrclNjfCe4lQ"
                                                    alt="Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng giá rẻ"
                                                    itemprop="image"
                                                    width="300"
                                                    height="180"
                                                />
                                            </a>
                                            <div class="item-info">
                                                <h3 class="info-title" itemprop="name">
                                                    <a
                                                        href="/dong-co-peeimorger-m-5ik60u-cfv-moi-chinh-hang-gia-re-2391516.html"
                                                        data-itm-source="#vn_source=Home&vn_campaign=Box-Tinraonoibat&vn_medium=Item-9&vn_term=Desktop&vn_thumb=1"
                                                        title="Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng giá rẻ"
                                                        class="click-tracking"
                                                        itemprop="url"
                                                    >Động Cơ Peeimorger M-5IK60U-CFV mới chính hãng
                                                        giá rẻ</a
                                                    >
                                                </h3>
                                                <div
                                                    class="info-price"
                                                    itemprop="offers"
                                                    itemscope
                                                    itemtype="http://schema.org/Offer"
                                                >
                                                    <p
                                                        class="price-current"
                                                        itemprop="price"
                                                        content="0"
                                                    >
                              <span class="price-current-value"
                              >Thỏa thuận</span
                              >
                                                    </p>
                                                </div>
                                                <p class="info-location">
                                                    Phường An Bình, Huyện Dĩ An, Bình Dương
                                                </p>
                                                <!--<p class="info-view mt-1"> lượt xem</p>-->
                                            </div>
                                        </div>
                                        <div
                                            class="item-post"
                                            itemscope
                                            itemtype="http://schema.org/Product"
                                        >
                                            <a
                                                href="/vga-msi-radeon-rx-6600-xt-mech-2x-8g-oc-2391127.html"
                                                data-itm-source="#vn_source=Home&vn_campaign=Box-Tinraonoibat&vn_medium=Item-10&vn_term=Desktop&vn_thumb=1"
                                                title="Vga Msi Radeon Rx 6600 Xt Mech 2X 8G Oc"
                                                class="item-image click-tracking"
                                                itemprop="url"
                                            >
                                                <img
                                                    src="https://i-raovat.vnecdn.net/2021/08/28/b7d56c90_1630115798.jpg?w=300&h=180&q=100&dpr=1&rt=fill&g=no&s=8U7p59XowldUsgk-1VgSnA"
                                                    alt="Vga Msi Radeon Rx 6600 Xt Mech 2X 8G Oc"
                                                    itemprop="image"
                                                    width="300"
                                                    height="180"
                                                />
                                            </a>
                                            <div class="item-info">
                                                <h3 class="info-title" itemprop="name">
                                                    <a
                                                        href="/vga-msi-radeon-rx-6600-xt-mech-2x-8g-oc-2391127.html"
                                                        data-itm-source="#vn_source=Home&vn_campaign=Box-Tinraonoibat&vn_medium=Item-10&vn_term=Desktop&vn_thumb=1"
                                                        title="Vga Msi Radeon Rx 6600 Xt Mech 2X 8G Oc"
                                                        class="click-tracking"
                                                        itemprop="url"
                                                    >Vga Msi Radeon Rx 6600 Xt Mech 2X 8G Oc</a
                                                    >
                                                </h3>
                                                <div
                                                    class="info-price"
                                                    itemprop="offers"
                                                    itemscope
                                                    itemtype="http://schema.org/Offer"
                                                >
                                                    <p
                                                        class="price-current"
                                                        itemprop="price"
                                                        content="0"
                                                    >
                              <span class="price-current-value"
                              >Thỏa thuận</span
                              >
                                                    </p>
                                                </div>
                                                <p class="info-location">
                                                    Phường 8, Thành phố Đà Lạt, Lâm Đồng
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
