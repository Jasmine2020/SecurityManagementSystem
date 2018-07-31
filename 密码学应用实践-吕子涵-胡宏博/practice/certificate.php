<?php  
    $dn = array(  
        "countryName" => 'CN', //所在国家名称  
        "stateOrProvinceName" => 'Beijing', //所在省份名称  
        "localityName" => 'Beijing', //所在城市名称  
        "organizationName" => 'MySelf',   //注册人姓名  
        "organizationalUnitName" => 'School', //组织名称  
        "commonName" => 'Common', //公共名称  
        "emailAddress" => '271329508@qq.com' //邮箱  
    );  
       
    $privkeypass = '01123256'; //私钥密码  
    $numberofdays = 365;     //有效时长  
    $cerpath = "./test.cer"; //生成证书路径  
    $pfxpath = "./test.pfx"; //密钥文件路径  
       
    $opensslConfigPath = "D:/Lenovo/xampp/apache/conf/openssl.cnf"; //apache路径下的openssl.conf文件路径    
    $config = array('private_key_bits' => 2048,);
    $config['config'] = $opensslConfigPath;
    // $res = openssl_pkey_new($config);
    // if(!$res) {
    // $config['config'] = $opensslConfigPath;
    // $res = openssl_pkey_new($config);
    // }   
    //生成证书  
    $privkey = openssl_pkey_new($config);
    //var_dump($privkey);
    $csr = openssl_csr_new($dn, $privkey,$config); 
    //var_dump($csr); 
    $sscert = openssl_csr_sign($csr, null, $privkey, $numberofdays,$config);
    //var_dump($sscert);  
    openssl_x509_export($sscert, $csrkey); //导出证书$csrkey  
    openssl_pkcs12_export($sscert, $privatekey, $privkey, $privkeypass); //导出密钥$privatekey  
    //生成证书文件  
    $fp = fopen($cerpath, "w");  
    fwrite($fp, $csrkey);  
    fclose($fp);  
    //生成密钥文件  
    $fp = fopen($pfxpath, "w");  
    fwrite($fp, $privatekey);  
    fclose($fp);  
?>