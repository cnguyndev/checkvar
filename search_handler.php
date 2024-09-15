<?php
include 'config.php'; // Kết nối tới database

$search_result = '';
if (isset($_POST['search'])) {
    // Lấy từ khóa tìm kiếm từ form
    $search_term = $_POST['search_term'];

    // Chuẩn bị câu truy vấn SQL tìm kiếm trên các cột có sẵn
    $sql = "SELECT * FROM CHECKVAR 
            WHERE transaction_code LIKE ? 
               OR amount LIKE ? 
               OR transaction_detail LIKE ?";
    $stmt = $conn->prepare($sql);

    // Tạo chuỗi tìm kiếm để so khớp
    $like_term = "%" . $search_term . "%";
    $stmt->bind_param("sss", $like_term, $like_term, $like_term);

    $stmt->execute();
    $result = $stmt->get_result();

    // Xử lý kết quả
   if ($result->num_rows > 0) {
        $search_result .= "<h2>Kết quả tìm kiếm: " . $search_term . "</h2>
        <table>
        <thead>
            <tr>
            <td>Mã Giao Dịch</td>
            <td>Số Tiền</td>
            <td>Nội Dung</td>
        </tr>
        </thead>
        <tbody>";
        while ($row = $result->fetch_assoc()) {
            $search_result .= "
        <tr>
            <td>" . $row["transaction_code"] . "</td>
            <td>" . $row["amount"] . "</td>
            <td>" . $row["transaction_detail"] . "</td>
        </tr>"
            ;
        }
    } else {
        $search_result = "emty";
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();
}
?>
