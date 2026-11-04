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
 * DescribeSSLStatus返回参数结构体
 *
 * @method string getCertDownloadUrl() 获取<p>SSL 证书下载地址。</p>
 * @method void setCertDownloadUrl(string $CertDownloadUrl) 设置<p>SSL 证书下载地址。</p>
 * @method string getUrlExpiredTime() 获取<p>证书下载链接到期时间。</p>
 * @method void setUrlExpiredTime(string $UrlExpiredTime) 设置<p>证书下载链接到期时间。</p>
 * @method boolean getSSLConfig() 获取<p>标识实例开启 SSL 功能。</p><ul><li>true：开启 。</li><li>false：关闭。</li></ul>
 * @method void setSSLConfig(boolean $SSLConfig) 设置<p>标识实例开启 SSL 功能。</p><ul><li>true：开启 。</li><li>false：关闭。</li></ul>
 * @method boolean getFeatureSupport() 获取<p>标识实例是否支持 SSL特性。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
 * @method void setFeatureSupport(boolean $FeatureSupport) 设置<p>标识实例是否支持 SSL特性。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
 * @method integer getStatus() 获取<p>说明配置 SSL 的状态。</p><ul><li>1: 配置中。</li><li>2：配置成功。</li></ul>
 * @method void setStatus(integer $Status) 设置<p>说明配置 SSL 的状态。</p><ul><li>1: 配置中。</li><li>2：配置成功。</li></ul>
 * @method integer getAddressType() 获取<p>地址类型</p><p>枚举值：</p><ul><li>0： 不限</li><li>1： 内网IPv4</li><li>2： 内网IPv6</li><li>3： 外网</li><li>-1： 未指定</li></ul>
 * @method void setAddressType(integer $AddressType) 设置<p>地址类型</p><p>枚举值：</p><ul><li>0： 不限</li><li>1： 内网IPv4</li><li>2： 内网IPv6</li><li>3： 外网</li><li>-1： 未指定</li></ul>
 * @method string getEncryptAddress() 获取<p>当前加密连接地址</p>
 * @method void setEncryptAddress(string $EncryptAddress) 设置<p>当前加密连接地址</p>
 * @method integer getCertSource() 获取<p>密钥来源</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 自定义证书</li></ul>
 * @method void setCertSource(integer $CertSource) 设置<p>密钥来源</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 自定义证书</li></ul>
 * @method integer getCertStatus() 获取<p>证书有效性</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 即将过期（30天内）</li><li>2： 已过期</li><li>404： 证书已被删除</li><li>500： 查询异常</li></ul>
 * @method void setCertStatus(integer $CertStatus) 设置<p>证书有效性</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 即将过期（30天内）</li><li>2： 已过期</li><li>404： 证书已被删除</li><li>500： 查询异常</li></ul>
 * @method string getCertId() 获取<p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
 * @method void setCertId(string $CertId) 设置<p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
 * @method string getCertAlias() 获取<p>证书别名</p>
 * @method void setCertAlias(string $CertAlias) 设置<p>证书别名</p>
 * @method string getCertExpireTime() 获取<p>证书到期时间</p><p>参数格式：时间格式YYYY-MM-DD hh:mm:ss</p>
 * @method void setCertExpireTime(string $CertExpireTime) 设置<p>证书到期时间</p><p>参数格式：时间格式YYYY-MM-DD hh:mm:ss</p>
 * @method string getDomain() 获取<p>证书关联域名（SAN）</p><p>包括了IP</p>
 * @method void setDomain(string $Domain) 设置<p>证书关联域名（SAN）</p><p>包括了IP</p>
 * @method string getSSLMinVersion() 获取<p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
 * @method void setSSLMinVersion(string $SSLMinVersion) 设置<p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
 * @method string getEncryptionMode() 获取<p>当前加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
 * @method void setEncryptionMode(string $EncryptionMode) 设置<p>当前加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSSLStatusResponse extends AbstractModel
{
    /**
     * @var string <p>SSL 证书下载地址。</p>
     */
    public $CertDownloadUrl;

    /**
     * @var string <p>证书下载链接到期时间。</p>
     */
    public $UrlExpiredTime;

    /**
     * @var boolean <p>标识实例开启 SSL 功能。</p><ul><li>true：开启 。</li><li>false：关闭。</li></ul>
     */
    public $SSLConfig;

    /**
     * @var boolean <p>标识实例是否支持 SSL特性。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
     */
    public $FeatureSupport;

    /**
     * @var integer <p>说明配置 SSL 的状态。</p><ul><li>1: 配置中。</li><li>2：配置成功。</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>地址类型</p><p>枚举值：</p><ul><li>0： 不限</li><li>1： 内网IPv4</li><li>2： 内网IPv6</li><li>3： 外网</li><li>-1： 未指定</li></ul>
     */
    public $AddressType;

    /**
     * @var string <p>当前加密连接地址</p>
     */
    public $EncryptAddress;

    /**
     * @var integer <p>密钥来源</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 自定义证书</li></ul>
     */
    public $CertSource;

    /**
     * @var integer <p>证书有效性</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 即将过期（30天内）</li><li>2： 已过期</li><li>404： 证书已被删除</li><li>500： 查询异常</li></ul>
     */
    public $CertStatus;

    /**
     * @var string <p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
     */
    public $CertId;

    /**
     * @var string <p>证书别名</p>
     */
    public $CertAlias;

    /**
     * @var string <p>证书到期时间</p><p>参数格式：时间格式YYYY-MM-DD hh:mm:ss</p>
     */
    public $CertExpireTime;

    /**
     * @var string <p>证书关联域名（SAN）</p><p>包括了IP</p>
     */
    public $Domain;

    /**
     * @var string <p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
     */
    public $SSLMinVersion;

    /**
     * @var string <p>当前加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
     */
    public $EncryptionMode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CertDownloadUrl <p>SSL 证书下载地址。</p>
     * @param string $UrlExpiredTime <p>证书下载链接到期时间。</p>
     * @param boolean $SSLConfig <p>标识实例开启 SSL 功能。</p><ul><li>true：开启 。</li><li>false：关闭。</li></ul>
     * @param boolean $FeatureSupport <p>标识实例是否支持 SSL特性。</p><ul><li>true：支持。</li><li>false：不支持。</li></ul>
     * @param integer $Status <p>说明配置 SSL 的状态。</p><ul><li>1: 配置中。</li><li>2：配置成功。</li></ul>
     * @param integer $AddressType <p>地址类型</p><p>枚举值：</p><ul><li>0： 不限</li><li>1： 内网IPv4</li><li>2： 内网IPv6</li><li>3： 外网</li><li>-1： 未指定</li></ul>
     * @param string $EncryptAddress <p>当前加密连接地址</p>
     * @param integer $CertSource <p>密钥来源</p><p>枚举值：</p><ul><li>0： 腾讯云提供</li><li>1： 自定义证书</li></ul>
     * @param integer $CertStatus <p>证书有效性</p><p>枚举值：</p><ul><li>0： 有效</li><li>1： 即将过期（30天内）</li><li>2： 已过期</li><li>404： 证书已被删除</li><li>500： 查询异常</li></ul>
     * @param string $CertId <p>SSL 证书服务的证书 ID，CertSource=1 时必填</p>
     * @param string $CertAlias <p>证书别名</p>
     * @param string $CertExpireTime <p>证书到期时间</p><p>参数格式：时间格式YYYY-MM-DD hh:mm:ss</p>
     * @param string $Domain <p>证书关联域名（SAN）</p><p>包括了IP</p>
     * @param string $SSLMinVersion <p>最低 TLS 版本</p><p>枚举值：</p><ul><li>TLSv1.0： TLSv1.0</li><li>TLSv1.1： TLSv1.1</li><li>TLSv1.2： TLSv1.2</li></ul>
     * @param string $EncryptionMode <p>当前加密模式</p><p>枚举值：</p><ul><li>required： 强制加密</li><li>flexible： 兼容模式</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CertDownloadUrl",$param) and $param["CertDownloadUrl"] !== null) {
            $this->CertDownloadUrl = $param["CertDownloadUrl"];
        }

        if (array_key_exists("UrlExpiredTime",$param) and $param["UrlExpiredTime"] !== null) {
            $this->UrlExpiredTime = $param["UrlExpiredTime"];
        }

        if (array_key_exists("SSLConfig",$param) and $param["SSLConfig"] !== null) {
            $this->SSLConfig = $param["SSLConfig"];
        }

        if (array_key_exists("FeatureSupport",$param) and $param["FeatureSupport"] !== null) {
            $this->FeatureSupport = $param["FeatureSupport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("EncryptAddress",$param) and $param["EncryptAddress"] !== null) {
            $this->EncryptAddress = $param["EncryptAddress"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }

        if (array_key_exists("CertStatus",$param) and $param["CertStatus"] !== null) {
            $this->CertStatus = $param["CertStatus"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertAlias",$param) and $param["CertAlias"] !== null) {
            $this->CertAlias = $param["CertAlias"];
        }

        if (array_key_exists("CertExpireTime",$param) and $param["CertExpireTime"] !== null) {
            $this->CertExpireTime = $param["CertExpireTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SSLMinVersion",$param) and $param["SSLMinVersion"] !== null) {
            $this->SSLMinVersion = $param["SSLMinVersion"];
        }

        if (array_key_exists("EncryptionMode",$param) and $param["EncryptionMode"] !== null) {
            $this->EncryptionMode = $param["EncryptionMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
