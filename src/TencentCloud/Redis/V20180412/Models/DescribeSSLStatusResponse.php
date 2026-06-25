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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
