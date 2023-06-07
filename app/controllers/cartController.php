<?php
namespace lalava\controllers;
use lalava\core;
use lalava\core\Controller;
class loginController extends Controller{
    public $carts= [];
    public function __construct()
    {
        $this->carts = $this->Model('cartModel');
    }

    public function cart()
    {
        $list = $this->carts::all();
        $this->viewadmin("login-signup/signup",$list);
    }
   public function viewcart($del)
    {
        if (isset($_SESSION['signup']))
            $giohang = show_sptgh($_SESSION['signup']['id']);
        else
            $giohang = "";
        global $img_path;
        $tong = 0;
        if ($del == 1) {
            $xoasp_th = "<th>Thao tác</th>";
            $xoasp_td_2 = "<td></td>";
        } else {
            $xoasp_th = "";
            $xoasp_td_2 = "";
        }
        echo '
                <tr>
                <th>Hình</th>
                <th>Sản Phẩm</th>
                <th>Đơn Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                ' . $xoasp_th . '';
        if ($giohang != "") {
            foreach ($giohang as $row) {
                $hinh = $img_path . $row['HinhAnh'];
                $ttien = $row['Gia'] * $row['SoLuong'];
                $tong += $ttien;
                if ($del == 1) {
                    $xoasp_td = '<td><a href="index.php?act=deletecart&idcart=' . $row['ID'] . '"><input type="button" class="btn btn-dark" value="Xóa"></a></td>';
                } else {
                    $xoasp_td = "";
                }
                echo '
                <tr>
                  <td><img src="' . $hinh . '" alt="" height="40px"></td>
                  <td>' . $row['TenSP'] . '</td>
                  <td>' . $row['Gia'] . '</td>
                  <td>' . $row['SoLuong'] . '</td>
                  <td>' . $ttien . '</td>
                  ' . $xoasp_td . '
                  
                </tr>';
            }
        }
        echo '
                <tr>
                  <td colspan="4">Tổng đơn hàng</td>
                  <td>' . $tong . '</td>
                  ' . $xoasp_td_2 . '
                </tr>';
    }
}

function show_chitiet_bill($listbill)
{
    global $img_path;
    $tong = 0;
    echo '
            <tr>
            <th>Hình</th>
            <th>Sản Phẩm</th>
            <th>Đơn Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
            </tr>
            ';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['HinhAnh'];
        $tong += $cart['ThanhTien'];
        echo '
            <tr>
              <td><img src="' . $hinh . '" alt="" height="40px"></td>
              <td>' . $cart['TenSP'] . '</td>
              <td>' . $cart['Gia'] . '</td>
              <td>' . $cart['SoLuong'] . '</td>
              <td>' . $cart['ThanhTien'] . '</td>
              
            </tr>';
    }
    echo '
            <tr>
              <td colspan="4">Tổng đơn hàng</td>
              <td>' . $tong . '</td>
            </tr>';
}
function tongdonhang()
{
    if (isset($_SESSION['taikhoan'])) {
        $giohang = show_sptgh($_SESSION['taikhoan']['MaTK']);
    } else {
        $giohang = "";
    }
    $tong = 0;
    if ($giohang != "") {
        foreach ($giohang as $row) {
            $ttien = $row['SoLuong'] * $row['Gia'];
            $tong += $ttien;
        }
    }

    return $tong;
}
function insert_bill($name, $diachi, $email, $sdt, $pttt, $tongdonhang)
{
    $sql = "INSERT INTO hoadon(`MaHD`, `TenHD`, `DiaChi`, `Email`, `SDT`, `PTTT`, `TDH`, `TrangThai`, `NgayDH`) VALUES (null,'$name','$diachi','$email','$sdt','$pttt','$tongdonhang','0',CURDATE())";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($MaKH, $MaHH, $HinhAnh, $TenHH, $Gia, $SoLuong, $ThanhTien, $MaHD)
{
    $sql = "INSERT INTO giohang(MaTK, MaSP, HinhAnh, TenSP, Gia, SoLuong, ThanhTien, MaHD) VALUES ('$MaKH','$MaHH','$HinhAnh','$TenHH','$Gia','$SoLuong','$ThanhTien','$MaHD')";
    return pdo_execute($sql);
}
function delete_cart($ID)
{
    $sql = "delete from giohang where MaHD=" . $ID;
    pdo_query($sql);
}
function insert_sptgh($MaHH, $TenHH, $HinhAnh, $Gia, $SoLuong, $ThanhTien, $MaKH)
{
    $sql = "INSERT INTO sptgh(ID,MaSP, TenSP, HinhAnh, Gia, SoLuong, ThanhTien, MaTK) VALUES (null,'$MaHH','$TenHH','$HinhAnh','$Gia','$SoLuong','$ThanhTien','$MaKH')";
    return pdo_execute($sql);
}
function show_sptgh($MaTK)
{
    $sql = "select * from sptgh where MaTK=" . $MaTK;
    $rescart = pdo_query($sql);
    return $rescart;
}
function update_sptgh($ID)
{
    $sql = "UPDATE `sptgh` SET `SoLuong`=SoLuong+1  WHERE `MaSP`='$ID'";
    pdo_execute($sql);
}
function delete_sptgh($ID)
{
    $sql = "delete from sptgh where ID=" . $ID;
    pdo_query($sql);
}
function deleteall_sptgh()
{
    $sql = "delete from sptgh";
    pdo_query($sql);
}
function show_one_bill($MaHD)
{
    $sql = "select * from hoadon where MaHD=" . $MaHD;
    $bill = pdo_query_once($sql);
    return $bill;
}
function show_cart($MaHD)
{
    $sql = "select * from giohang where MaHD=" . $MaHD;
    $rescart = pdo_query($sql);
    return $rescart;
}
function showall_cart_count($MaHD)
{
    $sql = "select * from giohang where MaHD=" . $MaHD;
    $rescart = pdo_query($sql);
    return sizeof($rescart);
}
function showall_cart($kyw, $MaKH)
{
    $sql = "select * from hoadon where 1";
    if ($MaKH > 0)
        $sql .= " AND MaKH=.$MaKH";
    if ($kyw != "")
        $sql .= "  AND TenHD like '%" . $kyw . "%' or MaHD like '%" . $kyw . "%'";
    $sql .= " order by MaHD desc";
    $rescart = pdo_query($sql);
    return $rescart;
}
function get_ttdh($n)
{
    switch ($n) {
        case "0":
            $tt = "Đơn hàng mới";
            break;
        case "1":
            $tt = "Đang xử lý";
            break;
        case "2":
            $tt = "Đang giao hàng";
            break;
        case "3":
            $tt = "Hoàn tất";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function get_pttt($n)
{
    switch ($n) {
        case "0":
            $tt = "Thanh toán khi nhận hàng";
            break;
        case "1":
            $tt = "Chuyển khoản";
            break;
        case "2":
            $tt = "Quét mã QR";
            break;
        default:
            $tt = "Thanh toán khi nhận hàng";
            break;
    }
    return $tt;
}
function delete_hoadon($MaHD)
{
    $sql = "delete from hoadon where MaHD=" . $MaHD;
    pdo_query($sql);
}
function update_hoadon($MaHD)
{
    $sql = "select * from hoadon where MaHD=" . $MaHD;
    $resdh = pdo_query_once($sql);
    return $resdh;
}
function sua_hoadon($MaHD, $KH, $TDH, $TrangThai, $NgayDH)
{
    $sql = "UPDATE `hoadon` SET `TenHD`='$KH',`TDH`='$TDH',`TrangThai`='$TrangThai',`NgayDH`='$NgayDH' WHERE `MaHD`='$MaHD'";
    pdo_execute($sql);
}
