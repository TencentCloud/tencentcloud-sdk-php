<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名 https 加速配置，默认为关闭状态
 *
 * @method string getHttp2() 获取http2 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setHttp2(string $Http2) 设置http2 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getOcspStapling() 获取OCSP 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setOcspStapling(string $OcspStapling) 设置OCSP 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method array getTlsVersion() 获取Tls 版本设置，取值有：
<li>TLSv1：TLSv1版本；</li>
<li>TLSV1.1：TLSv1.1版本；</li>
<li>TLSV1.2：TLSv1.2版本；</li>
<li>TLSv1.3：TLSv1.3版本。</li>修改时必须开启连续的版本。
 * @method void setTlsVersion(array $TlsVersion) 设置Tls 版本设置，取值有：
<li>TLSv1：TLSv1版本；</li>
<li>TLSV1.1：TLSv1.1版本；</li>
<li>TLSV1.2：TLSv1.2版本；</li>
<li>TLSv1.3：TLSv1.3版本。</li>修改时必须开启连续的版本。
 * @method Hsts getHsts() 获取HSTS 配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHsts(Hsts $Hsts) 设置HSTS 配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCertInfo() 获取证书配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertInfo(array $CertInfo) 设置证书配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplyType() 获取申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
 * @method void setApplyType(string $ApplyType) 设置申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
 * @method string getCipherSuite() 获取密码套件，取值有：
<li>loose-v2023：提供高兼容性，安全性一般，支持 TLS 1.0-1.3 密码套件；</li>
<li>general-v2023：提供较高兼容性，安全性中等，支持 TLS 1.2-1.3 密码套件；</li>
<li>strict-v2023：提供高安全性能，禁用所有含不安全隐患的加密套件，支持 TLS 1.2-1.3 密码套件。</li>
 * @method void setCipherSuite(string $CipherSuite) 设置密码套件，取值有：
<li>loose-v2023：提供高兼容性，安全性一般，支持 TLS 1.0-1.3 密码套件；</li>
<li>general-v2023：提供较高兼容性，安全性中等，支持 TLS 1.2-1.3 密码套件；</li>
<li>strict-v2023：提供高安全性能，禁用所有含不安全隐患的加密套件，支持 TLS 1.2-1.3 密码套件。</li>
 */
class Https extends AbstractModel
{
    /**
     * @var string http2 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Http2;

    /**
     * @var string OCSP 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $OcspStapling;

    /**
     * @var array Tls 版本设置，取值有：
<li>TLSv1：TLSv1版本；</li>
<li>TLSV1.1：TLSv1.1版本；</li>
<li>TLSV1.2：TLSv1.2版本；</li>
<li>TLSv1.3：TLSv1.3版本。</li>修改时必须开启连续的版本。
     */
    public $TlsVersion;

    /**
     * @var Hsts HSTS 配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hsts;

    /**
     * @var array 证书配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertInfo;

    /**
     * @var string 申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
     */
    public $ApplyType;

    /**
     * @var string 密码套件，取值有：
<li>loose-v2023：提供高兼容性，安全性一般，支持 TLS 1.0-1.3 密码套件；</li>
<li>general-v2023：提供较高兼容性，安全性中等，支持 TLS 1.2-1.3 密码套件；</li>
<li>strict-v2023：提供高安全性能，禁用所有含不安全隐患的加密套件，支持 TLS 1.2-1.3 密码套件。</li>
     */
    public $CipherSuite;

    /**
     * @param string $Http2 http2 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $OcspStapling OCSP 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param array $TlsVersion Tls 版本设置，取值有：
<li>TLSv1：TLSv1版本；</li>
<li>TLSV1.1：TLSv1.1版本；</li>
<li>TLSV1.2：TLSv1.2版本；</li>
<li>TLSv1.3：TLSv1.3版本。</li>修改时必须开启连续的版本。
     * @param Hsts $Hsts HSTS 配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CertInfo 证书配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplyType 申请类型，取值有：
<li>apply：托管EdgeOne；</li>
<li>none：不托管EdgeOne。</li>不填，默认取值为none。
     * @param string $CipherSuite 密码套件，取值有：
<li>loose-v2023：提供高兼容性，安全性一般，支持 TLS 1.0-1.3 密码套件；</li>
<li>general-v2023：提供较高兼容性，安全性中等，支持 TLS 1.2-1.3 密码套件；</li>
<li>strict-v2023：提供高安全性能，禁用所有含不安全隐患的加密套件，支持 TLS 1.2-1.3 密码套件。</li>
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
        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = $param["OcspStapling"];
        }

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new Hsts();
            $this->Hsts->deserialize($param["Hsts"]);
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = [];
            foreach ($param["CertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->CertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("CipherSuite",$param) and $param["CipherSuite"] !== null) {
            $this->CipherSuite = $param["CipherSuite"];
        }
    }
}
