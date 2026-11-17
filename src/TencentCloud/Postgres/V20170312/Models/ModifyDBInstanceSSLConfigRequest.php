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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSSLConfig请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例 ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例 ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method boolean getSSLEnabled() 获取<p>开启或关闭SSL。true - 开启 ；false - 关闭。</p>
 * @method void setSSLEnabled(boolean $SSLEnabled) 设置<p>开启或关闭SSL。true - 开启 ；false - 关闭。</p>
 * @method string getConnectAddress() 获取<p>SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。</p>
 * @method void setConnectAddress(string $ConnectAddress) 设置<p>SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。</p>
 * @method string getCertSource() 获取<p>SSL证书来源。</p><p>枚举值：</p><ul><li>cloud： 平台自签发的云端证书</li><li>custom： 腾讯云SSL证书产品托管的用户自有证书</li></ul>
 * @method void setCertSource(string $CertSource) 设置<p>SSL证书来源。</p><p>枚举值：</p><ul><li>cloud： 平台自签发的云端证书</li><li>custom： 腾讯云SSL证书产品托管的用户自有证书</li></ul>
 * @method string getCertificateId() 获取<p>腾讯云 SSL 证书产品的证书 ID。证书类型为custom时必须填写。</p>
 * @method void setCertificateId(string $CertificateId) 设置<p>腾讯云 SSL 证书产品的证书 ID。证书类型为custom时必须填写。</p>
 */
class ModifyDBInstanceSSLConfigRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var boolean <p>开启或关闭SSL。true - 开启 ；false - 关闭。</p>
     */
    public $SSLEnabled;

    /**
     * @var string <p>SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。</p>
     */
    public $ConnectAddress;

    /**
     * @var string <p>SSL证书来源。</p><p>枚举值：</p><ul><li>cloud： 平台自签发的云端证书</li><li>custom： 腾讯云SSL证书产品托管的用户自有证书</li></ul>
     */
    public $CertSource;

    /**
     * @var string <p>腾讯云 SSL 证书产品的证书 ID。证书类型为custom时必须填写。</p>
     */
    public $CertificateId;

    /**
     * @param string $DBInstanceId <p>实例 ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param boolean $SSLEnabled <p>开启或关闭SSL。true - 开启 ；false - 关闭。</p>
     * @param string $ConnectAddress <p>SSL证书保护的唯一连接地址，若为主实例，可设置为内外网IP地址；若为只读实例，可设置为实例IP或只读组IP。在开启SSL或修改SSL保护的连接地址时，该参数为必传项；在关闭SSL时，该参数将被忽略。</p>
     * @param string $CertSource <p>SSL证书来源。</p><p>枚举值：</p><ul><li>cloud： 平台自签发的云端证书</li><li>custom： 腾讯云SSL证书产品托管的用户自有证书</li></ul>
     * @param string $CertificateId <p>腾讯云 SSL 证书产品的证书 ID。证书类型为custom时必须填写。</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SSLEnabled",$param) and $param["SSLEnabled"] !== null) {
            $this->SSLEnabled = $param["SSLEnabled"];
        }

        if (array_key_exists("ConnectAddress",$param) and $param["ConnectAddress"] !== null) {
            $this->ConnectAddress = $param["ConnectAddress"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }
    }
}
