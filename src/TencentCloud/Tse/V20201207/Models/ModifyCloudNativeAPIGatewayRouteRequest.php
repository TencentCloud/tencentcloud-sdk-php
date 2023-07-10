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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCloudNativeAPIGatewayRoute请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getServiceID() 获取所属服务的ID
 * @method void setServiceID(string $ServiceID) 设置所属服务的ID
 * @method string getRouteID() 获取路由的ID，实例级别唯一
 * @method void setRouteID(string $RouteID) 设置路由的ID，实例级别唯一
 * @method string getRouteName() 获取路由的名字，实例级别唯一，可以不提供
 * @method void setRouteName(string $RouteName) 设置路由的名字，实例级别唯一，可以不提供
 * @method array getMethods() 获取路由的方法，其中方法可选值：
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
 * @method void setMethods(array $Methods) 设置路由的方法，其中方法可选值：
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
 * @method array getHosts() 获取路由的域名
 * @method void setHosts(array $Hosts) 设置路由的域名
 * @method array getPaths() 获取路由的路径
 * @method void setPaths(array $Paths) 设置路由的路径
 * @method array getProtocols() 获取路由的协议，可选
- https
- http
 * @method void setProtocols(array $Protocols) 设置路由的协议，可选
- https
- http
 * @method boolean getPreserveHost() 获取转发到后端时是否保留Host
 * @method void setPreserveHost(boolean $PreserveHost) 设置转发到后端时是否保留Host
 * @method integer getHttpsRedirectStatusCode() 获取https重定向状态码
 * @method void setHttpsRedirectStatusCode(integer $HttpsRedirectStatusCode) 设置https重定向状态码
 * @method boolean getStripPath() 获取转发到后端时是否StripPath
 * @method void setStripPath(boolean $StripPath) 设置转发到后端时是否StripPath
 * @method boolean getForceHttps() 获取是否开启强制HTTPS
 * @method void setForceHttps(boolean $ForceHttps) 设置是否开启强制HTTPS
 * @method array getDestinationPorts() 获取四层匹配的目的端口	
 * @method void setDestinationPorts(array $DestinationPorts) 设置四层匹配的目的端口	
 * @method array getHeaders() 获取路由的Headers
 * @method void setHeaders(array $Headers) 设置路由的Headers
 */
class ModifyCloudNativeAPIGatewayRouteRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string 所属服务的ID
     */
    public $ServiceID;

    /**
     * @var string 路由的ID，实例级别唯一
     */
    public $RouteID;

    /**
     * @var string 路由的名字，实例级别唯一，可以不提供
     */
    public $RouteName;

    /**
     * @var array 路由的方法，其中方法可选值：
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
     */
    public $Methods;

    /**
     * @var array 路由的域名
     */
    public $Hosts;

    /**
     * @var array 路由的路径
     */
    public $Paths;

    /**
     * @var array 路由的协议，可选
- https
- http
     */
    public $Protocols;

    /**
     * @var boolean 转发到后端时是否保留Host
     */
    public $PreserveHost;

    /**
     * @var integer https重定向状态码
     */
    public $HttpsRedirectStatusCode;

    /**
     * @var boolean 转发到后端时是否StripPath
     */
    public $StripPath;

    /**
     * @var boolean 是否开启强制HTTPS
     * @deprecated
     */
    public $ForceHttps;

    /**
     * @var array 四层匹配的目的端口	
     */
    public $DestinationPorts;

    /**
     * @var array 路由的Headers
     */
    public $Headers;

    /**
     * @param string $GatewayId 网关ID
     * @param string $ServiceID 所属服务的ID
     * @param string $RouteID 路由的ID，实例级别唯一
     * @param string $RouteName 路由的名字，实例级别唯一，可以不提供
     * @param array $Methods 路由的方法，其中方法可选值：
- GET
- POST
- DELETE
- PUT
- OPTIONS
- PATCH
- HEAD
- ANY
- TRACE
- COPY
- MOVE
- PROPFIND
- PROPPATCH
- MKCOL
- LOCK
- UNLOCK
     * @param array $Hosts 路由的域名
     * @param array $Paths 路由的路径
     * @param array $Protocols 路由的协议，可选
- https
- http
     * @param boolean $PreserveHost 转发到后端时是否保留Host
     * @param integer $HttpsRedirectStatusCode https重定向状态码
     * @param boolean $StripPath 转发到后端时是否StripPath
     * @param boolean $ForceHttps 是否开启强制HTTPS
     * @param array $DestinationPorts 四层匹配的目的端口	
     * @param array $Headers 路由的Headers
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

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("RouteID",$param) and $param["RouteID"] !== null) {
            $this->RouteID = $param["RouteID"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = $param["Protocols"];
        }

        if (array_key_exists("PreserveHost",$param) and $param["PreserveHost"] !== null) {
            $this->PreserveHost = $param["PreserveHost"];
        }

        if (array_key_exists("HttpsRedirectStatusCode",$param) and $param["HttpsRedirectStatusCode"] !== null) {
            $this->HttpsRedirectStatusCode = $param["HttpsRedirectStatusCode"];
        }

        if (array_key_exists("StripPath",$param) and $param["StripPath"] !== null) {
            $this->StripPath = $param["StripPath"];
        }

        if (array_key_exists("ForceHttps",$param) and $param["ForceHttps"] !== null) {
            $this->ForceHttps = $param["ForceHttps"];
        }

        if (array_key_exists("DestinationPorts",$param) and $param["DestinationPorts"] !== null) {
            $this->DestinationPorts = $param["DestinationPorts"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new KVMapping();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
