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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询跨域配置出参
 *
 * @method string getSourceType() 获取资源类型
 * @method void setSourceType(string $SourceType) 设置资源类型
 * @method string getSourceId() 获取资源id
 * @method void setSourceId(string $SourceId) 设置资源id
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method array getOrigins() 获取跨域 Origins
 * @method void setOrigins(array $Origins) 设置跨域 Origins
 * @method array getHeaders() 获取跨域 Headers
 * @method void setHeaders(array $Headers) 设置跨域 Headers
 * @method array getMethods() 获取跨域 Methods
 * @method void setMethods(array $Methods) 设置跨域 Methods
 * @method array getExposedHeaders() 获取跨域 ExposedHeaders
 * @method void setExposedHeaders(array $ExposedHeaders) 设置跨域 ExposedHeaders
 * @method integer getMaxAge() 获取跨域OPTIONS请求缓存时间
 * @method void setMaxAge(integer $MaxAge) 设置跨域OPTIONS请求缓存时间
 * @method boolean getCredentials() 获取跨域请求是否允许携带身份信息
 * @method void setCredentials(boolean $Credentials) 设置跨域请求是否允许携带身份信息
 * @method boolean getPreFlightContinue() 获取跨域请求是否透传后端
 * @method void setPreFlightContinue(boolean $PreFlightContinue) 设置跨域请求是否透传后端
 */
class DescribeKongCORSResult extends AbstractModel
{
    /**
     * @var string 资源类型
     */
    public $SourceType;

    /**
     * @var string 资源id
     */
    public $SourceId;

    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var array 跨域 Origins
     */
    public $Origins;

    /**
     * @var array 跨域 Headers
     */
    public $Headers;

    /**
     * @var array 跨域 Methods
     */
    public $Methods;

    /**
     * @var array 跨域 ExposedHeaders
     */
    public $ExposedHeaders;

    /**
     * @var integer 跨域OPTIONS请求缓存时间
     */
    public $MaxAge;

    /**
     * @var boolean 跨域请求是否允许携带身份信息
     */
    public $Credentials;

    /**
     * @var boolean 跨域请求是否透传后端
     */
    public $PreFlightContinue;

    /**
     * @param string $SourceType 资源类型
     * @param string $SourceId 资源id
     * @param boolean $Enabled 是否启用
     * @param array $Origins 跨域 Origins
     * @param array $Headers 跨域 Headers
     * @param array $Methods 跨域 Methods
     * @param array $ExposedHeaders 跨域 ExposedHeaders
     * @param integer $MaxAge 跨域OPTIONS请求缓存时间
     * @param boolean $Credentials 跨域请求是否允许携带身份信息
     * @param boolean $PreFlightContinue 跨域请求是否透传后端
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Origins",$param) and $param["Origins"] !== null) {
            $this->Origins = $param["Origins"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("ExposedHeaders",$param) and $param["ExposedHeaders"] !== null) {
            $this->ExposedHeaders = $param["ExposedHeaders"];
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = $param["Credentials"];
        }

        if (array_key_exists("PreFlightContinue",$param) and $param["PreFlightContinue"] !== null) {
            $this->PreFlightContinue = $param["PreFlightContinue"];
        }
    }
}
