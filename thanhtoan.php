<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="thanhtoan.css" />
  </head>
  <body>
    <div class="body_thanhtoan">
      <div class="body_trai">
        <div class="body_trai-content">
        <a href="trangchu.php"><div class="iconBG"></div></a>
        <div class="link_way">
          <span ><a href="giohang.php">Giỏ hàng</a></span>
          <span>></span>
          <span>Thông tin giao hàng</span>
        </div>
        <h4>Thông tin gian hàng</h2>
        <div class="_Account">
            <span>Bạn đã có tài khoản?</span>
            <span><a href="dangnhap.php">Đăng nhập</a></span>
        </div>
        <div class="form-1">
            <form action="">
                <div class="fullname">

                    <input class="form-1_default" type="text" placeholder="Nhập họ và tên">
                </div>
                <div class="emai-numberphone">
                    <input class="form-1_default " style="width: 45%;padding-left: 5px;" type="email" placeholder="Nhập email">
                    <input  class="form-1_default" style = "width: 23%;padding-left: 5px; margin-left: 8px;" type="text" style="scroll-behavior:hidden" placeholder="Nhập số điện thoại">
                </div>
                <div class="address">
                    <input class="form-1_default" type="text" placeholder="Địa chỉ">

                </div>
                <div class="address-detail">
                   <div class="tinh-thanh">
                    <span class="address-detail_trans" for="">Tỉnh/thành</span>
                    <select>
                        <option data-code="null"value="null">Chọn tỉnh / thành</option>
                        <option data-code="HC" value="50">Hồ Chí Minh</option>
                        <option data-code="HI" value="1">Hà Nội</option>
                        <option data-code="DA" value="32">Đà Nẵng</option>
                        <option data-code="AG" value="57">An Giang</option>
                        <option data-code="BV" value="49">Bà Rịa - Vũng Tàu</option>
                        <option data-code="BI" value="47">Bình Dương</option>
                        <option data-code="BP" value="45">Bình Phước</option>
                        <option data-code="BU" value="39">Bình Thuận</option>
                        <option data-code="BD" value="35">Bình Định</option>
                        <option data-code="BL" value="62">Bạc Liêu</option>
                        <option data-code="BG" value="15">Bắc Giang</option>
                        <option data-code="BK" value="4">Bắc Kạn</option>
                        <option data-code="BN" value="18">Bắc Ninh</option>
                        <option data-code="BT" value="53">Bến Tre</option>
                        <option data-code="CB" value="3">Cao Bằng</option>
                        <option data-code="CM" value="63">Cà Mau</option>
                        <option data-code="CN" value="59">Cần Thơ</option>
                        <option data-code="GL" value="41">Gia Lai</option>
                        <option data-code="HG" value="2">Hà Giang</option>
                        <option data-code="HT" value="28">Hà Tĩnh</option>
                        <option data-code="HO" value="11">Hòa Bình</option>
                        <option data-code="HY" value="21">Hưng Yên</option>
                        <option data-code="HD" value="19">Hải Dương</option>
                        <option data-code="HP" value="20">Hải Phòng</option>
                        <option data-code="HU" value="60">Hậu Giang</option>
                        <option data-code="KH" value="37">Khánh Hòa</option>
                        <option data-code="KG" value="58">Kiên Giang</option>
                        <option data-code="KT" value="40" >Kon Tum</option>
                        <option data-code="LI" value="8" >Lai Châu</option>
                        <option data-code="LA" value="51" >Long An</option>
                        <option data-code="LO" value="6" >Lào Cai</option>
                        <option data-code="LD" value="44" >Lâm Đồng</option>
                        <option data-code="LS" value="13" >Lạng Sơn</option>
                        <option data-code="ND" value="24" >Nam Định</option>
                        <option data-code="NA" value="27" >Nghệ An</option>
                        <option data-code="NB" value="25" >Ninh Bình</option>
                        <option data-code="NT" value="38" >Ninh Thuận</option>
                        <option data-code="PT" value="16" >Phú Thọ</option>
                        <option data-code="PY" value="36" >Phú Yên</option>
                        <option data-code="QB" value="29" >Quảng Bình</option>
                        <option data-code="QM" value="33" >Quảng Nam</option>
                        <option data-code="QG" value="34" >Quảng Ngãi</option>
                        <option data-code="QN" value="14" >Quảng Ninh</option>
                        <option data-code="QT" value="30" >Quảng Trị</option>
                        <option data-code="ST" value="61" >Sóc Trăng</option>
                        <option data-code="SL" value="9" >Sơn La</option>
                        <option data-code="TH" value="26" >Thanh Hóa</option>
                        <option data-code="TB" value="22" >Thái Bình</option>
                        <option data-code="TY" value="12" >Thái Nguyên</option>
                        <option data-code="TT" value="31" >Thừa Thiên Huế</option>
                        <option data-code="TG" value="52" >Tiền Giang</option>
                        <option data-code="TV" value="54" >Trà Vinh</option>
                        <option data-code="TQ" value="5" >Tuyên Quang</option>
                        <option data-code="TN" value="46" >Tây Ninh</option>
                        <option data-code="VL" value="55" >Vĩnh Long</option>
                        <option data-code="VT" value="17" >Vĩnh Phúc</option>
                        <option data-code="YB" value="10" >Yên Bái</option>
                        <option data-code="DB" value="7" >Điện Biên</option>
                        <option data-code="DC" value="42" >Đắk Lắk</option>
                        <option data-code="DO" value="43" >Đắk Nông</option>
                        <option data-code="DN" value="48" >Đồng Nai</option>
                        <option data-code="DT" value="56" >Đồng Tháp</option>
                    </select>
                    <div class="line"></div>
                   </div>
                   <div class="tinh-thanh">
                    <span class="address-detail_trans" for="">Quận/huyện</span>
                    <select>
                    <option data-code="null" value="null"  >Chọn quận / huyện</option>
                    <option value="1">Ha noi</option>
                        <option value="2">Ha noi 2</option>
                        <option value="3">Ha noi 3</option>
                    </select>
                    <div class="line"></div>
                   </div>
                   <div class="tinh-thanh">
                    <span class="address-detail_trans" for="">Xã/phường</span>
                    <select>
                        <option data-code="null" value="null"  >Chọn xã / phường</option>
                        <option value="1">Ha noi</option>
                        <option value="2">Ha noi 2</option>
                        <option value="3">Ha noi 3</option>
                    </select>
                    <div class="line"></div>
                   </div>
                </div>
                <div class="payload">
                    <h4>Phương thức thanh toán</h4>
                    <div class="border-includes">
                        <input type="radio" name="includes"> 
                        <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=1">
                        <span>Thanh toán khi giao hàng (COD)</span>
                    </div>
                    <div class="border-includes">
                        <input type="radio" name="includes" checked> 
                        <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/vnpay_new.svg?v=1">
                        <span>Thẻ ATM/Visa/Master/JCB/QR Pay qua cổng VNPAY</span>
                    </div>
                </div>
                <div class="submit-pay">
                    <div class="submit-pay_card"><a href="giohang.php">Giỏ hàng</a></div>
                    <div class="submit-pay_total"><a href="">Hoàn tất đơn hàng</a></div>
                </div>
            </form>
        </div>
        </div>
      </div>
      <div class="body_phai">
        <div class="body_phai-content">
            <div class="list-products">
                <div class="product-img">
                    <img src="//product.hstatic.net/200000385489/product/1_fd62335289544436b83e96f801ffaa81_small.jpg" alt="">
                </div>
                <div class="product-info">
                    <div class="product-info_name">
                        <span>Black Rouge Airfit Velvet Tint Ver 1 THE RED</h5>
                    </div>
                    <div class="product-info_describe">
                        <span>A01 - Strawberry Red#EA1B2B</span>
                    </div>
                </div>
                <div class="product-price">387,400₫</div>
            </div>
            <div class="sale-code">
                <div class="sale-code_input">
                    <input type="text" placeholder="Mã giảm giá">
                </div>
                <div class="sale-code_submit">
                    <button>Sử dụng</button>
                </div>
            </div>
            <div class="client">
                <span>Khách hàng thân thiết</span>
                <button type="submit" onclick="location.href='dangnhap.php';">Đăng nhập</button>
            </div>
            <div class="delivery-price">
                <div class="delivery-price_price">
                    <div><span>Tạm tính</span></div>
                    <div><span>387,400₫</span></div>
                </div>
                <div class="delivery-price_deli">
                    <div><span>Phí vận chuyển</span></div>
                    <div><span>Miễn phí</span></div>
                </div>
            </div>
            <div class="total-price">
                <div><span>Tổng cộng</span></div>
                <div class="total-price_inner">
                    <span>VND </span>
                    <span class="isPrice">387,400</span>
                    <span>₫</span>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>