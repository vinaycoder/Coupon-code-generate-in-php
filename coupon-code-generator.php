//  calling function for generate coupon codes

echo couponGenerate();

public function couponGenerate()
{
   $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $res = "";
    for ($i = 0; $i < 7; $i++) {
        $res .= $chars[mt_rand(0, strlen($chars)-1)];
    }
return $res;
}
