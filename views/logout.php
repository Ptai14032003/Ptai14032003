<?php
session_destroy();
echo '<script>alert("Đã đăng xuất"); window.location.href = "index.php?ctr=login"</script>';
