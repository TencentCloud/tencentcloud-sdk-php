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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSSLStatus返回参数结构体
 *
 * @method string getCertDownloadUrl() 获取SSL 证书下载地址。
 * @method void setCertDownloadUrl(string $CertDownloadUrl) 设置SSL 证书下载地址。
 * @method string getUrlExpiredTime() 获取证书下载链接到期时间。
 * @method void setUrlExpiredTime(string $UrlExpiredTime) 设置证书下载链接到期时间。
 * @method boolean getSSLConfig() 获取标识实例开启 SSL 功能。
- true：开启 。
- false：关闭。
 * @method void setSSLConfig(boolean $SSLConfig) 设置标识实例开启 SSL 功能。
- true：开启 。
- false：关闭。
 * @method boolean getFeatureSupport() 获取标识实例是否支持 SSL特性。
- true：支持。
- false：不支持。
 * @method void setFeatureSupport(boolean $FeatureSupport) 设置标识实例是否支持 SSL特性。
- true：支持。
- false：不支持。
 * @method integer getStatus() 获取说明配置 SSL 的状态。
- 1: 配置中。
- 2：配置成功。
 * @method void setStatus(integer $Status) 设置说明配置 SSL 的状态。
- 1: 配置中。
- 2：配置成功。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSSLStatusResponse extends AbstractModel
{
    /**
     * @var string SSL 证书下载地址。
     */
    public $CertDownloadUrl;

    /**
     * @var string 证书下载链接到期时间。
     */
    public $UrlExpiredTime;

    /**
     * @var boolean 标识实例开启 SSL 功能。
- true：开启 。
- false：关闭。
     */
    public $SSLConfig;

    /**
     * @var boolean 标识实例是否支持 SSL特性。
- true：支持。
- false：不支持。
     */
    public $FeatureSupport;

    /**
     * @var integer 说明配置 SSL 的状态。
- 1: 配置中。
- 2：配置成功。
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CertDownloadUrl SSL 证书下载地址。
     * @param string $UrlExpiredTime 证书下载链接到期时间。
     * @param boolean $SSLConfig 标识实例开启 SSL 功能。
- true：开启 。
- false：关闭。
     * @param boolean $FeatureSupport 标识实例是否支持 SSL特性。
- true：支持。
- false：不支持。
     * @param integer $Status 说明配置 SSL 的状态。
- 1: 配置中。
- 2：配置成功。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
