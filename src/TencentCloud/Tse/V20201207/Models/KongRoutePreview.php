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
 * 云原生网关路由信息
 *
 * @method string getID() 获取<p>服务ID</p>
 * @method void setID(string $ID) 设置<p>服务ID</p>
 * @method string getName() 获取<p>服务名字</p>
 * @method void setName(string $Name) 设置<p>服务名字</p>
 * @method array getMethods() 获取<p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethods(array $Methods) 设置<p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPaths() 获取<p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaths(array $Paths) 设置<p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHosts() 获取<p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHosts(array $Hosts) 设置<p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtocols() 获取<p>无</p>
 * @method void setProtocols(array $Protocols) 设置<p>无</p>
 * @method boolean getPreserveHost() 获取<p>无</p>
 * @method void setPreserveHost(boolean $PreserveHost) 设置<p>无</p>
 * @method integer getHttpsRedirectStatusCode() 获取<p>无</p>
 * @method void setHttpsRedirectStatusCode(integer $HttpsRedirectStatusCode) 设置<p>无</p>
 * @method boolean getStripPath() 获取<p>无</p>
 * @method void setStripPath(boolean $StripPath) 设置<p>无</p>
 * @method string getCreatedTime() 获取<p>无</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>无</p>
 * @method boolean getForceHttps() 获取<p>是否开启了强制HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceHttps(boolean $ForceHttps) 设置<p>是否开启了强制HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>服务名</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名</p>
 * @method string getServiceID() 获取<p>服务ID</p>
 * @method void setServiceID(string $ServiceID) 设置<p>服务ID</p>
 * @method array getDestinationPorts() 获取<p>目的端口</p>
 * @method void setDestinationPorts(array $DestinationPorts) 设置<p>目的端口</p>
 * @method array getHeaders() 获取<p>路由的Headers</p>
 * @method void setHeaders(array $Headers) 设置<p>路由的Headers</p>
 * @method boolean getRequestBuffering() 获取<p>是否缓存请求body，默认true</p>
 * @method void setRequestBuffering(boolean $RequestBuffering) 设置<p>是否缓存请求body，默认true</p>
 * @method boolean getResponseBuffering() 获取<p>是否缓存响应body，默认true</p>
 * @method void setResponseBuffering(boolean $ResponseBuffering) 设置<p>是否缓存响应body，默认true</p>
 * @method integer getRegexPriority() 获取<p>正则优先级</p>
 * @method void setRegexPriority(integer $RegexPriority) 设置<p>正则优先级</p>
 * @method array getQueryStringParameters() 获取<p>querystring参数</p>
 * @method void setQueryStringParameters(array $QueryStringParameters) 设置<p>querystring参数</p>
 * @method string getRouteSource() 获取<p>路由来源</p>
 * @method void setRouteSource(string $RouteSource) 设置<p>路由来源</p>
 */
class KongRoutePreview extends AbstractModel
{
    /**
     * @var string <p>服务ID</p>
     */
    public $ID;

    /**
     * @var string <p>服务名字</p>
     */
    public $Name;

    /**
     * @var array <p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Methods;

    /**
     * @var array <p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paths;

    /**
     * @var array <p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hosts;

    /**
     * @var array <p>无</p>
     */
    public $Protocols;

    /**
     * @var boolean <p>无</p>
     */
    public $PreserveHost;

    /**
     * @var integer <p>无</p>
     */
    public $HttpsRedirectStatusCode;

    /**
     * @var boolean <p>无</p>
     */
    public $StripPath;

    /**
     * @var string <p>无</p>
     */
    public $CreatedTime;

    /**
     * @var boolean <p>是否开启了强制HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ForceHttps;

    /**
     * @var string <p>服务名</p>
     */
    public $ServiceName;

    /**
     * @var string <p>服务ID</p>
     */
    public $ServiceID;

    /**
     * @var array <p>目的端口</p>
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
     * @var integer <p>正则优先级</p>
     */
    public $RegexPriority;

    /**
     * @var array <p>querystring参数</p>
     */
    public $QueryStringParameters;

    /**
     * @var string <p>路由来源</p>
     */
    public $RouteSource;

    /**
     * @param string $ID <p>服务ID</p>
     * @param string $Name <p>服务名字</p>
     * @param array $Methods <p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Paths <p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Hosts <p>无</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Protocols <p>无</p>
     * @param boolean $PreserveHost <p>无</p>
     * @param integer $HttpsRedirectStatusCode <p>无</p>
     * @param boolean $StripPath <p>无</p>
     * @param string $CreatedTime <p>无</p>
     * @param boolean $ForceHttps <p>是否开启了强制HTTPS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>服务名</p>
     * @param string $ServiceID <p>服务ID</p>
     * @param array $DestinationPorts <p>目的端口</p>
     * @param array $Headers <p>路由的Headers</p>
     * @param boolean $RequestBuffering <p>是否缓存请求body，默认true</p>
     * @param boolean $ResponseBuffering <p>是否缓存响应body，默认true</p>
     * @param integer $RegexPriority <p>正则优先级</p>
     * @param array $QueryStringParameters <p>querystring参数</p>
     * @param string $RouteSource <p>路由来源</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
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

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ForceHttps",$param) and $param["ForceHttps"] !== null) {
            $this->ForceHttps = $param["ForceHttps"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
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

        if (array_key_exists("RouteSource",$param) and $param["RouteSource"] !== null) {
            $this->RouteSource = $param["RouteSource"];
        }
    }
}
