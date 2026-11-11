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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateSSLCert请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
 * @method integer getCertSource() 获取<p>密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 用户自定义KMS</li></ul>
 * @method void setCertSource(integer $CertSource) 设置<p>密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 用户自定义KMS</li></ul>
 * @method integer getSwitchOption() 获取<p>切换时间。（该参数废弃，不再生效）</p><p>枚举值：</p><ul><li>1： 维护时间窗操作：指开启SSL加密在设置的维护时间窗内执行。请通过接口DescribeMaintenanceWindow查询设置的维护时间窗时间段</li><li>2： 立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。</li></ul>
 * @method void setSwitchOption(integer $SwitchOption) 设置<p>切换时间。（该参数废弃，不再生效）</p><p>枚举值：</p><ul><li>1： 维护时间窗操作：指开启SSL加密在设置的维护时间窗内执行。请通过接口DescribeMaintenanceWindow查询设置的维护时间窗时间段</li><li>2： 立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。</li></ul>
 * @method integer getAddressType() 获取<p>SSL地址类型。</p><p>枚举值：</p><ul><li>0： 不限。</li><li>1： 内网IPv4。</li><li>2： 内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul>
 * @method void setAddressType(integer $AddressType) 设置<p>SSL地址类型。</p><p>枚举值：</p><ul><li>0： 不限。</li><li>1： 内网IPv4。</li><li>2： 内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul>
 * @method string getKmsKeyId() 获取<p>KMS的密钥ID。（该参数废弃，不再生效）</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>KMS的密钥ID。（该参数废弃，不再生效）</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
 * @method string getKmsRegion() 获取<p>KMS地域信息。（该参数废弃，不再生效）</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
 * @method void setKmsRegion(string $KmsRegion) 设置<p>KMS地域信息。（该参数废弃，不再生效）</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
 * @method string getCertId() 获取<p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
 * @method void setCertId(string $CertId) 设置<p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
 * @method string getSSLMinVersion() 获取<p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
 * @method void setSSLMinVersion(string $SSLMinVersion) 设置<p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
 * @method string getEncryptionMode() 获取<p>目标加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
 * @method void setEncryptionMode(string $EncryptionMode) 设置<p>目标加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
 */
class UpdateSSLCertRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 用户自定义KMS</li></ul>
     */
    public $CertSource;

    /**
     * @var integer <p>切换时间。（该参数废弃，不再生效）</p><p>枚举值：</p><ul><li>1： 维护时间窗操作：指开启SSL加密在设置的维护时间窗内执行。请通过接口DescribeMaintenanceWindow查询设置的维护时间窗时间段</li><li>2： 立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。</li></ul>
     * @deprecated
     */
    public $SwitchOption;

    /**
     * @var integer <p>SSL地址类型。</p><p>枚举值：</p><ul><li>0： 不限。</li><li>1： 内网IPv4。</li><li>2： 内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul>
     */
    public $AddressType;

    /**
     * @var string <p>KMS的密钥ID。（该参数废弃，不再生效）</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     * @deprecated
     */
    public $KmsKeyId;

    /**
     * @var string <p>KMS地域信息。（该参数废弃，不再生效）</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
     * @deprecated
     */
    public $KmsRegion;

    /**
     * @var string <p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
     */
    public $CertId;

    /**
     * @var string <p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
     */
    public $SSLMinVersion;

    /**
     * @var string <p>目标加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
     */
    public $EncryptionMode;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：crs-xjhsdj****。请登录<a href="https://console.cloud.tencent.com/redis">Redis控制台</a>在实例列表复制实例 ID。</p>
     * @param integer $CertSource <p>密钥类型。</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 用户自定义KMS</li></ul>
     * @param integer $SwitchOption <p>切换时间。（该参数废弃，不再生效）</p><p>枚举值：</p><ul><li>1： 维护时间窗操作：指开启SSL加密在设置的维护时间窗内执行。请通过接口DescribeMaintenanceWindow查询设置的维护时间窗时间段</li><li>2： 立即操作：操作将立即执行，无需等待维护时间窗。系统默认设置为立即操作。</li></ul>
     * @param integer $AddressType <p>SSL地址类型。</p><p>枚举值：</p><ul><li>0： 不限。</li><li>1： 内网IPv4。</li><li>2： 内网IPv6。</li><li>3： 外网。</li><li>-1： 未指定。</li></ul>
     * @param string $KmsKeyId <p>KMS的密钥ID。（该参数废弃，不再生效）</p><p>参数格式：xxxxxxx-xxxx-xxxx-xxxx-xxxxxxx</p>
     * @param string $KmsRegion <p>KMS地域信息。（该参数废弃，不再生效）</p><p>参数格式：ap-xxxx</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/573/34406#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">KMS支持的地域列表</a></p>
     * @param string $CertId <p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
     * @param string $SSLMinVersion <p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
     * @param string $EncryptionMode <p>目标加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("SSLMinVersion",$param) and $param["SSLMinVersion"] !== null) {
            $this->SSLMinVersion = $param["SSLMinVersion"];
        }

        if (array_key_exists("EncryptionMode",$param) and $param["EncryptionMode"] !== null) {
            $this->EncryptionMode = $param["EncryptionMode"];
        }
    }
}
