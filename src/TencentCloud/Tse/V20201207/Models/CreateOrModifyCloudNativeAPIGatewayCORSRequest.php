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
 * CreateOrModifyCloudNativeAPIGatewayCORS请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getSourceType() 获取跨域插件绑定的资源类型：route|service
 * @method void setSourceType(string $SourceType) 设置跨域插件绑定的资源类型：route|service
 * @method string getSourceId() 获取路由或服务的id
 * @method void setSourceId(string $SourceId) 设置路由或服务的id
 * @method boolean getEnabled() 获取是否启用插件
 * @method void setEnabled(boolean $Enabled) 设置是否启用插件
 * @method array getOrigins() 获取跨域 Access-Control-Allow-Origin
 * @method void setOrigins(array $Origins) 设置跨域 Access-Control-Allow-Origin
 * @method array getHeaders() 获取跨域 Access-Control-Allow-Headers header
 * @method void setHeaders(array $Headers) 设置跨域 Access-Control-Allow-Headers header
 * @method array getMethods() 获取跨域 Access-Control-Allow-Methods
 * @method void setMethods(array $Methods) 设置跨域 Access-Control-Allow-Methods
 * @method array getExposedHeaders() 获取跨域 Access-Control-Expose-Headers
 * @method void setExposedHeaders(array $ExposedHeaders) 设置跨域 Access-Control-Expose-Headers
 * @method integer getMaxAge() 获取preflight 请求缓存时间
 * @method void setMaxAge(integer $MaxAge) 设置preflight 请求缓存时间
 * @method boolean getCredentials() 获取跨域 Access-Control-Allow-Credentials
 * @method void setCredentials(boolean $Credentials) 设置跨域 Access-Control-Allow-Credentials
 * @method boolean getPreFlightContinue() 获取是否把OPTIONS请求透传后端
 * @method void setPreFlightContinue(boolean $PreFlightContinue) 设置是否把OPTIONS请求透传后端
 */
class CreateOrModifyCloudNativeAPIGatewayCORSRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string 跨域插件绑定的资源类型：route|service
     */
    public $SourceType;

    /**
     * @var string 路由或服务的id
     */
    public $SourceId;

    /**
     * @var boolean 是否启用插件
     */
    public $Enabled;

    /**
     * @var array 跨域 Access-Control-Allow-Origin
     */
    public $Origins;

    /**
     * @var array 跨域 Access-Control-Allow-Headers header
     */
    public $Headers;

    /**
     * @var array 跨域 Access-Control-Allow-Methods
     */
    public $Methods;

    /**
     * @var array 跨域 Access-Control-Expose-Headers
     */
    public $ExposedHeaders;

    /**
     * @var integer preflight 请求缓存时间
     */
    public $MaxAge;

    /**
     * @var boolean 跨域 Access-Control-Allow-Credentials
     */
    public $Credentials;

    /**
     * @var boolean 是否把OPTIONS请求透传后端
     */
    public $PreFlightContinue;

    /**
     * @param string $GatewayId 网关ID
     * @param string $SourceType 跨域插件绑定的资源类型：route|service
     * @param string $SourceId 路由或服务的id
     * @param boolean $Enabled 是否启用插件
     * @param array $Origins 跨域 Access-Control-Allow-Origin
     * @param array $Headers 跨域 Access-Control-Allow-Headers header
     * @param array $Methods 跨域 Access-Control-Allow-Methods
     * @param array $ExposedHeaders 跨域 Access-Control-Expose-Headers
     * @param integer $MaxAge preflight 请求缓存时间
     * @param boolean $Credentials 跨域 Access-Control-Allow-Credentials
     * @param boolean $PreFlightContinue 是否把OPTIONS请求透传后端
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
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
