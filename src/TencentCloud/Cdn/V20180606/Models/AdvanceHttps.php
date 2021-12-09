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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回源的自定义Https配置
 *
 * @method string getCustomTlsStatus() 获取自定义Tls数据开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomTlsStatus(string $CustomTlsStatus) 设置自定义Tls数据开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTlsVersion() 获取Tls版本列表，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTlsVersion(array $TlsVersion) 设置Tls版本列表，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCipher() 获取自定义加密套件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCipher(string $Cipher) 设置自定义加密套件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVerifyOriginType() 获取回源双向校验开启状态
off - 关闭校验
oneWay - 校验源站
twoWay - 双向校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyOriginType(string $VerifyOriginType) 设置回源双向校验开启状态
off - 关闭校验
oneWay - 校验源站
twoWay - 双向校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServerCert getCertInfo() 获取回源层证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertInfo(ServerCert $CertInfo) 设置回源层证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientCert getOriginCertInfo() 获取源站证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginCertInfo(ClientCert $OriginCertInfo) 设置源站证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdvanceHttps extends AbstractModel
{
    /**
     * @var string 自定义Tls数据开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomTlsStatus;

    /**
     * @var array Tls版本列表，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TlsVersion;

    /**
     * @var string 自定义加密套件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cipher;

    /**
     * @var string 回源双向校验开启状态
off - 关闭校验
oneWay - 校验源站
twoWay - 双向校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyOriginType;

    /**
     * @var ServerCert 回源层证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertInfo;

    /**
     * @var ClientCert 源站证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginCertInfo;

    /**
     * @param string $CustomTlsStatus 自定义Tls数据开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TlsVersion Tls版本列表，支持设置 TLSv1, TLSV1.1, TLSV1.2, TLSv1.3，修改时必须开启连续的版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cipher 自定义加密套件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VerifyOriginType 回源双向校验开启状态
off - 关闭校验
oneWay - 校验源站
twoWay - 双向校验
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServerCert $CertInfo 回源层证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientCert $OriginCertInfo 源站证书配置信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("CustomTlsStatus",$param) and $param["CustomTlsStatus"] !== null) {
            $this->CustomTlsStatus = $param["CustomTlsStatus"];
        }

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }

        if (array_key_exists("Cipher",$param) and $param["Cipher"] !== null) {
            $this->Cipher = $param["Cipher"];
        }

        if (array_key_exists("VerifyOriginType",$param) and $param["VerifyOriginType"] !== null) {
            $this->VerifyOriginType = $param["VerifyOriginType"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new ServerCert();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }

        if (array_key_exists("OriginCertInfo",$param) and $param["OriginCertInfo"] !== null) {
            $this->OriginCertInfo = new ClientCert();
            $this->OriginCertInfo->deserialize($param["OriginCertInfo"]);
        }
    }
}
