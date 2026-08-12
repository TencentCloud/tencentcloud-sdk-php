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
 * ModifyCloudNativeAPIGatewayRoute请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关ID</p>
 * @method string getServiceID() 获取<p>所属服务的ID</p>
 * @method void setServiceID(string $ServiceID) 设置<p>所属服务的ID</p>
 * @method string getRouteID() 获取<p>路由的ID，实例级别唯一</p>
 * @method void setRouteID(string $RouteID) 设置<p>路由的ID，实例级别唯一</p>
 * @method string getRouteName() 获取<p>路由的名字，实例级别唯一，可以不提供</p>
 * @method void setRouteName(string $RouteName) 设置<p>路由的名字，实例级别唯一，可以不提供</p>
 * @method array getMethods() 获取<p>路由的方法，其中方法可选值：</p><ul><li>GET</li><li>POST</li><li>DELETE</li><li>PUT</li><li>OPTIONS</li><li>PATCH</li><li>HEAD</li><li>ANY</li><li>TRACE</li><li>COPY</li><li>MOVE</li><li>PROPFIND</li><li>PROPPATCH</li><li>MKCOL</li><li>LOCK</li><li>UNLOCK</li></ul>
 * @method void setMethods(array $Methods) 设置<p>路由的方法，其中方法可选值：</p><ul><li>GET</li><li>POST</li><li>DELETE</li><li>PUT</li><li>OPTIONS</li><li>PATCH</li><li>HEAD</li><li>ANY</li><li>TRACE</li><li>COPY</li><li>MOVE</li><li>PROPFIND</li><li>PROPPATCH</li><li>MKCOL</li><li>LOCK</li><li>UNLOCK</li></ul>
 * @method array getHosts() 获取<p>路由的域名</p>
 * @method void setHosts(array $Hosts) 设置<p>路由的域名</p>
 * @method array getPaths() 获取<p>路由的路径</p>
 * @method void setPaths(array $Paths) 设置<p>路由的路径</p>
 * @method array getProtocols() 获取<p>路由的协议，可选</p><ul><li>https</li><li>http</li></ul>
 * @method void setProtocols(array $Protocols) 设置<p>路由的协议，可选</p><ul><li>https</li><li>http</li></ul>
 * @method boolean getPreserveHost() 获取<p>转发到后端时是否保留Host</p>
 * @method void setPreserveHost(boolean $PreserveHost) 设置<p>转发到后端时是否保留Host</p>
 * @method integer getHttpsRedirectStatusCode() 获取<p>https重定向状态码</p>
 * @method void setHttpsRedirectStatusCode(integer $HttpsRedirectStatusCode) 设置<p>https重定向状态码</p>
 * @method boolean getStripPath() 获取<p>转发到后端时是否StripPath</p>
 * @method void setStripPath(boolean $StripPath) 设置<p>转发到后端时是否StripPath</p>
 * @method boolean getForceHttps() 获取<p>是否开启强制HTTPS</p>
 * @method void setForceHttps(boolean $ForceHttps) 设置<p>是否开启强制HTTPS</p>
 * @method array getDestinationPorts() 获取<p>四层匹配的目的端口</p>
 * @method void setDestinationPorts(array $DestinationPorts) 设置<p>四层匹配的目的端口</p>
 * @method array getHeaders() 获取<p>路由的Headers</p>
 * @method void setHeaders(array $Headers) 设置<p>路由的Headers</p>
 * @method boolean getRequestBuffering() 获取<p>是否缓存请求body，默认true</p>
 * @method void setRequestBuffering(boolean $RequestBuffering) 设置<p>是否缓存请求body，默认true</p>
 * @method boolean getResponseBuffering() 获取<p>是否缓存响应body，默认true</p>
 * @method void setResponseBuffering(boolean $ResponseBuffering) 设置<p>是否缓存响应body，默认true</p>
 * @method integer getRegexPriority() 获取<p>增加优先级</p>
 * @method void setRegexPriority(integer $RegexPriority) 设置<p>增加优先级</p>
 * @method array getQueryStringParameters() 获取<p>querysring参数</p>
 * @method void setQueryStringParameters(array $QueryStringParameters) 设置<p>querysring参数</p>
 */
class ModifyCloudNativeAPIGatewayRouteRequest extends AbstractModel
{
    /**
     * @var string <p>网关ID</p>
     */
    public $GatewayId;

    /**
     * @var string <p>所属服务的ID</p>
     */
    public $ServiceID;

    /**
     * @var string <p>路由的ID，实例级别唯一</p>
     */
    public $RouteID;

    /**
     * @var string <p>路由的名字，实例级别唯一，可以不提供</p>
     */
    public $RouteName;

    /**
     * @var array <p>路由的方法，其中方法可选值：</p><ul><li>GET</li><li>POST</li><li>DELETE</li><li>PUT</li><li>OPTIONS</li><li>PATCH</li><li>HEAD</li><li>ANY</li><li>TRACE</li><li>COPY</li><li>MOVE</li><li>PROPFIND</li><li>PROPPATCH</li><li>MKCOL</li><li>LOCK</li><li>UNLOCK</li></ul>
     */
    public $Methods;

    /**
     * @var array <p>路由的域名</p>
     */
    public $Hosts;

    /**
     * @var array <p>路由的路径</p>
     */
    public $Paths;

    /**
     * @var array <p>路由的协议，可选</p><ul><li>https</li><li>http</li></ul>
     */
    public $Protocols;

    /**
     * @var boolean <p>转发到后端时是否保留Host</p>
     */
    public $PreserveHost;

    /**
     * @var integer <p>https重定向状态码</p>
     */
    public $HttpsRedirectStatusCode;

    /**
     * @var boolean <p>转发到后端时是否StripPath</p>
     */
    public $StripPath;

    /**
     * @var boolean <p>是否开启强制HTTPS</p>
     * @deprecated
     */
    public $ForceHttps;

    /**
     * @var array <p>四层匹配的目的端口</p>
     */
    public $DestinationPorts;

    /**
     * @var array <p>路由的Headers</p>
     */
    public $Headers;

    /**
     * @var boolean <p>是否缓存请求body，默认true</p>
     */
    public $RequestBuffering;

    /**
     * @var boolean <p>是否缓存响应body，默认true</p>
     */
    public $ResponseBuffering;

    /**
     * @var integer <p>增加优先级</p>
     */
    public $RegexPriority;

    /**
     * @var array <p>querysring参数</p>
     */
    public $QueryStringParameters;

    /**
     * @param string $GatewayId <p>网关ID</p>
     * @param string $ServiceID <p>所属服务的ID</p>
     * @param string $RouteID <p>路由的ID，实例级别唯一</p>
     * @param string $RouteName <p>路由的名字，实例级别唯一，可以不提供</p>
     * @param array $Methods <p>路由的方法，其中方法可选值：</p><ul><li>GET</li><li>POST</li><li>DELETE</li><li>PUT</li><li>OPTIONS</li><li>PATCH</li><li>HEAD</li><li>ANY</li><li>TRACE</li><li>COPY</li><li>MOVE</li><li>PROPFIND</li><li>PROPPATCH</li><li>MKCOL</li><li>LOCK</li><li>UNLOCK</li></ul>
     * @param array $Hosts <p>路由的域名</p>
     * @param array $Paths <p>路由的路径</p>
     * @param array $Protocols <p>路由的协议，可选</p><ul><li>https</li><li>http</li></ul>
     * @param boolean $PreserveHost <p>转发到后端时是否保留Host</p>
     * @param integer $HttpsRedirectStatusCode <p>https重定向状态码</p>
     * @param boolean $StripPath <p>转发到后端时是否StripPath</p>
     * @param boolean $ForceHttps <p>是否开启强制HTTPS</p>
     * @param array $DestinationPorts <p>四层匹配的目的端口</p>
     * @param array $Headers <p>路由的Headers</p>
     * @param boolean $RequestBuffering <p>是否缓存请求body，默认true</p>
     * @param boolean $ResponseBuffering <p>是否缓存响应body，默认true</p>
     * @param integer $RegexPriority <p>增加优先级</p>
     * @param array $QueryStringParameters <p>querysring参数</p>
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

        if (array_key_exists("RequestBuffering",$param) and $param["RequestBuffering"] !== null) {
            $this->RequestBuffering = $param["RequestBuffering"];
        }

        if (array_key_exists("ResponseBuffering",$param) and $param["ResponseBuffering"] !== null) {
            $this->ResponseBuffering = $param["ResponseBuffering"];
        }

        if (array_key_exists("RegexPriority",$param) and $param["RegexPriority"] !== null) {
            $this->RegexPriority = $param["RegexPriority"];
        }

        if (array_key_exists("QueryStringParameters",$param) and $param["QueryStringParameters"] !== null) {
            $this->QueryStringParameters = [];
            foreach ($param["QueryStringParameters"] as $key => $value){
                $obj = new KVMapping();
                $obj->deserialize($value);
                array_push($this->QueryStringParameters, $obj);
            }
        }
    }
}
