<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sao Kê VAR - Check VAR sao kê online</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">

    <meta name="description" content="Tra cứu thông tin sao kê, ủng hộ đồng bào online, dữ liệu được cung cấp từ MTTQ, cập nhật liên tục">
    <meta property="og:title" content="Sao Kê VAR - Check VAR sao kê online">
    <meta property="og:description" content="Tra cứu thông tin sao kê, ủng hộ đồng bào online, dữ liệu được cung cấp từ MTTQ, cập nhật liên tục">
    <meta property="og:image" content="https://imgur.com/MqDS59g">
    <meta property="og:url" content="https://nioo.io.vn/checkvar">
    <meta property="og:site_name" content="NIOO">
    <meta property="og:type" content="website">
</head>

<body>
    <div class="container">
        <h1>Sao Kê VAR</h1>
        <p>Dữ liệu cung cấp bởi <a
                href="https://www.facebook.com/thongtinchinhphu/posts/pfbid03YkRTKZ5WjeHwBavPQbP7EShonj9tTExgY26gNhvQdiEsbjdsLWnzWEoQE1bU9SBl"
                target="_blank" rel="noopener noreferrer nofollow">MTTQ</a>, xử lý dữ liệu bởi <a
                href="https://www.facebook.com/t.rekttt" target="_blank" rel="noopener noreferrer nofollow">Việt
                Thảo</a>,
            xây dựng website bởi <a href="https://www.facebook.com/ltcnguyen/" target="_blank" rel="noopener noreferrer nofollow">Lê
                Trần Chính Nguyên</a></p>
        <details>
            <summary>Xem nguồn dữ liệu</summary>
            <ul>
                <li><a class="secondary"
                        href="https://www.facebook.com/mttqvietnam/posts/pfbid0YSaZTjEw2GBMnT5bNBi49djNxnxi326VjKodHzdxvhpkW3rwTs8u5dCeVGvQmU18l"
                        target="_blank" rel="noopener noreferrer nofollow">Số tiền ủng hộ qua số tài khoản Vietcombank
                        0011001932418 từ ngày 1/9/2024 đến ngày 10/9/2024</a></li>
                <li><a class="secondary"
                        href="https://www.facebook.com/mttqvietnam/posts/pfbid0cGpdUA8JFuB5TPLFX5E1GmhBSkYs99v9rRLY5sY2mTD1pJ16Cq1BvtkrSXLfnsESl"
                        target="_blank" rel="noopener noreferrer nofollow">Số tiền ủng hộ qua số tài khoản Vietinbank
                        CT1111
                        từ ngày 10/9/2024 đến ngày 12/9/2024</a></li>
                <li><a class="secondary"
                        href="https://www.facebook.com/mttqvietnam/posts/pfbid0TmdSiuk5jqHaGNDPGBTtvkVzt1fePMyjJ3BZWdchT2gTFHtkMEv6JVYG2oFNBpdVl"
                        target="_blank" rel="noopener noreferrer nofollow">Số tiền ủng hộ qua ngân hàng BIDV số tài
                        khoản
                        1261122666 từ ngày 1/9/2024 đến ngày 12/9/2024</a></li>
            </ul>
        </details>
        <form method="POST" action="index.php">
            <div class="search-box">
                <input type="text" name="search_term" id="search-input" class="search-input"
                    placeholder="Tìm theo Mã giao dịch, Số tiền hoặc Nội dung giao dịch...">
                <i class="fas fa-search search-icon"></i>
            </div>
            <button type="submit" id="submit-button" name="search">Tìm Kiếm</button>
        </form>

        <div>
           <?php
            include 'assets/search_handler.php';
            if ($search_result != "emty") {
                echo $search_result . "</tbody>
        </table>";
            } else
                echo "<h2>Không có dữ liệu! Vui lòng chờ thêm sao kê từ MTTQ!</h2>
                <script>alert('Không có dữ liệu! Vui lòng chờ thêm sao kê từ MTTQ!');</script>"
                    ?>
        </div>
    </div>
    <script>
        const searchInput = document.getElementById('search-input');
        const submitButton = document.getElementById('submit-button');

        submitButton.addEventListener('click', function (event) {
            if (searchInput.value.trim() === '') {
                event.preventDefault();
                alert('Vui lòng nhập từ khóa tìm kiếm');
            }
        });
    </script>
<script>
  // Hàm để xóa query string khỏi URL hiện tại
  function removeQueryString() {
    const url = new URL(window.location.href);
    url.search = '';
    window.history.replaceState({}, '', url.toString());
  }

  // Gọi hàm khi trang load xong
  window.onload = () => {
    removeQueryString();
  };
</script>
</body>

</html>
