<?php

	//接收提交文件的用户信息   
	$username=$_POST['username'];
    $filename=$_POST['file']; 
    $pathname=$_POST['path'];

    $user_path="D:/Lenovo/xampp/upload/".$username;  

    var_dump($user_path."/".$filename);

    $privkeypass = '01123256'; //私钥密码  
	$pfxpath = "./test.pfx"; //密钥文件路径  
	$priv_key = file_get_contents($pfxpath); //获取密钥文件内容
	$file=fopen($user_path.'/'.$filename.'sign.txt');
	$signMsg=fread($file, filesize($file));

	$unsignMsg=base64_decode($signMsg);//base64解码加密信息  
	openssl_pkcs12_read($priv_key, $certs, $privkeypass); //读取公钥、私钥  
	$pubkeyid = $certs['cert']; //公钥  
	$res = openssl_verify($cipher, $unsignMsg, $pubkeyid);

    if($res){
        echo "验证通过！继续文件解密";
        $fp = fopen($user_path."/".$filename,"rb"); 
        $key = fread($fp,SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
        $nonce=fread($fp,SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
        $cipher=fread($fp,filesize($fp)-SODIUM_CRYPTO_SECRETBOX_KEYBYTES-SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
        $decrypted = sodium_crypto_secretbox_open($cipher, $nonce, $key);
        fclose($fp);
    
        $fp = fopen($user_path."/".$filename,"w"); 
        fwrite($fp, $decrypted);
        fclose($fp);

        if(copy($user_path."/".$filename,$pathname."/".$filename){
            echo"<br>下载成功！";
        }else{
            echo"<br>下载出错！";
        }
    }
    else{
        echo "验证未通过！文件被改动，请校验";
    }

    

    
?>