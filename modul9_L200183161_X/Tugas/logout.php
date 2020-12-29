<?php
session_start();
session_destroy();
echo "<script>alert('Logout Sukses');window.location='./';</script>";
