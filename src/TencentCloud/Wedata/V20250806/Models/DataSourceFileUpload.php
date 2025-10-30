<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源文件上传
 *
 * @method string getTrustStore() 获取Truststore认证文件，默认文件名truststore.jks
 * @method void setTrustStore(string $TrustStore) 设置Truststore认证文件，默认文件名truststore.jks
 * @method string getKeyStore() 获取Keystore认证文件，默认文件名keystore.jks
 * @method void setKeyStore(string $KeyStore) 设置Keystore认证文件，默认文件名keystore.jks
 * @method string getCoreSite() 获取core-site.xml文件
 * @method void setCoreSite(string $CoreSite) 设置core-site.xml文件
 * @method string getHdfsSite() 获取hdfs-site.xml文件
 * @method void setHdfsSite(string $HdfsSite) 设置hdfs-site.xml文件
 * @method string getHiveSite() 获取hive-site.xml文件
 * @method void setHiveSite(string $HiveSite) 设置hive-site.xml文件
 * @method string getHBASESite() 获取hbase-site文件
 * @method void setHBASESite(string $HBASESite) 设置hbase-site文件
 * @method string getKeyTab() 获取keytab文件，默认文件名[数据源名].keytab
 * @method void setKeyTab(string $KeyTab) 设置keytab文件，默认文件名[数据源名].keytab
 * @method string getKRB5Conf() 获取krb5.conf文件
 * @method void setKRB5Conf(string $KRB5Conf) 设置krb5.conf文件
 * @method string getPrivateKey() 获取私钥,默认文件名private_key.pem
 * @method void setPrivateKey(string $PrivateKey) 设置私钥,默认文件名private_key.pem
 * @method string getPublicKey() 获取公钥,默认文件名public_key.pem
 * @method void setPublicKey(string $PublicKey) 设置公钥,默认文件名public_key.pem
 */
class DataSourceFileUpload extends AbstractModel
{
    /**
     * @var string Truststore认证文件，默认文件名truststore.jks
     */
    public $TrustStore;

    /**
     * @var string Keystore认证文件，默认文件名keystore.jks
     */
    public $KeyStore;

    /**
     * @var string core-site.xml文件
     */
    public $CoreSite;

    /**
     * @var string hdfs-site.xml文件
     */
    public $HdfsSite;

    /**
     * @var string hive-site.xml文件
     */
    public $HiveSite;

    /**
     * @var string hbase-site文件
     */
    public $HBASESite;

    /**
     * @var string keytab文件，默认文件名[数据源名].keytab
     */
    public $KeyTab;

    /**
     * @var string krb5.conf文件
     */
    public $KRB5Conf;

    /**
     * @var string 私钥,默认文件名private_key.pem
     */
    public $PrivateKey;

    /**
     * @var string 公钥,默认文件名public_key.pem
     */
    public $PublicKey;

    /**
     * @param string $TrustStore Truststore认证文件，默认文件名truststore.jks
     * @param string $KeyStore Keystore认证文件，默认文件名keystore.jks
     * @param string $CoreSite core-site.xml文件
     * @param string $HdfsSite hdfs-site.xml文件
     * @param string $HiveSite hive-site.xml文件
     * @param string $HBASESite hbase-site文件
     * @param string $KeyTab keytab文件，默认文件名[数据源名].keytab
     * @param string $KRB5Conf krb5.conf文件
     * @param string $PrivateKey 私钥,默认文件名private_key.pem
     * @param string $PublicKey 公钥,默认文件名public_key.pem
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TrustStore",$param) and $param["TrustStore"] !== null) {
            $this->TrustStore = $param["TrustStore"];
        }

        if (array_key_exists("KeyStore",$param) and $param["KeyStore"] !== null) {
            $this->KeyStore = $param["KeyStore"];
        }

        if (array_key_exists("CoreSite",$param) and $param["CoreSite"] !== null) {
            $this->CoreSite = $param["CoreSite"];
        }

        if (array_key_exists("HdfsSite",$param) and $param["HdfsSite"] !== null) {
            $this->HdfsSite = $param["HdfsSite"];
        }

        if (array_key_exists("HiveSite",$param) and $param["HiveSite"] !== null) {
            $this->HiveSite = $param["HiveSite"];
        }

        if (array_key_exists("HBASESite",$param) and $param["HBASESite"] !== null) {
            $this->HBASESite = $param["HBASESite"];
        }

        if (array_key_exists("KeyTab",$param) and $param["KeyTab"] !== null) {
            $this->KeyTab = $param["KeyTab"];
        }

        if (array_key_exists("KRB5Conf",$param) and $param["KRB5Conf"] !== null) {
            $this->KRB5Conf = $param["KRB5Conf"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }
    }
}
