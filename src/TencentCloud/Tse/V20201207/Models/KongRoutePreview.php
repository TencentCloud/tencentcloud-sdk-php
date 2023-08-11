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
 * 云原生网关路由信息
 *
 * @method string getID() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMethods() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethods(array $Methods) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPaths() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaths(array $Paths) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHosts() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHosts(array $Hosts) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProtocols() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocols(array $Protocols) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPreserveHost() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreserveHost(boolean $PreserveHost) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHttpsRedirectStatusCode() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpsRedirectStatusCode(integer $HttpsRedirectStatusCode) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStripPath() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStripPath(boolean $StripPath) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getForceHttps() 获取是否开启了强制HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceHttps(boolean $ForceHttps) 设置是否开启了强制HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置服务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceID() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceID(string $ServiceID) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDestinationPorts() 获取目的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinationPorts(array $DestinationPorts) 设置目的端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取路由的Headers
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置路由的Headers
注意：此字段可能返回 null，表示取不到有效值。
 */
class KongRoutePreview extends AbstractModel
{
    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Methods;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Paths;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Hosts;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocols;

    /**
     * @var boolean 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreserveHost;

    /**
     * @var integer 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpsRedirectStatusCode;

    /**
     * @var boolean 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StripPath;

    /**
     * @var string 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var boolean 是否开启了强制HTTPS
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ForceHttps;

    /**
     * @var string 服务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceID;

    /**
     * @var array 目的端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestinationPorts;

    /**
     * @var array 路由的Headers
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @param string $ID 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Methods 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Paths 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Hosts 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Protocols 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PreserveHost 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HttpsRedirectStatusCode 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StripPath 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ForceHttps 是否开启了强制HTTPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 服务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceID 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DestinationPorts 目的端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers 路由的Headers
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
    }
}
