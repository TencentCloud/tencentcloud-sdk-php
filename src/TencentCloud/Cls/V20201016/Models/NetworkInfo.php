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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络打通信息
 *
 * @method integer getNetworkType() 获取<p>网络类型。 0：公网，1：内网</p>
 * @method void setNetworkType(integer $NetworkType) 设置<p>网络类型。 0：公网，1：内网</p>
 * @method string getVpcID() 获取<p>私有网络id</p>
 * @method void setVpcID(string $VpcID) 设置<p>私有网络id</p>
 * @method integer getAppID() 获取<p>私有网络所属用户app id</p>
 * @method void setAppID(integer $AppID) 设置<p>私有网络所属用户app id</p>
 * @method integer getVirtualGatewayType() 获取<p>网络服务类型。0：CVM，3：专线网关，11：云联网，1025：CLB</p>
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) 设置<p>网络服务类型。0：CVM，3：专线网关，11：云联网，1025：CLB</p>
 * @method string getVpcGatewayIndex() 获取<p>专线网关id或者云联网id</p>
 * @method void setVpcGatewayIndex(string $VpcGatewayIndex) 设置<p>专线网关id或者云联网id</p>
 * @method array getPrivateDomainNames() 获取<p>私有域名映射地址</p>
 * @method void setPrivateDomainNames(array $PrivateDomainNames) 设置<p>私有域名映射地址</p>
 */
class NetworkInfo extends AbstractModel
{
    /**
     * @var integer <p>网络类型。 0：公网，1：内网</p>
     */
    public $NetworkType;

    /**
     * @var string <p>私有网络id</p>
     */
    public $VpcID;

    /**
     * @var integer <p>私有网络所属用户app id</p>
     */
    public $AppID;

    /**
     * @var integer <p>网络服务类型。0：CVM，3：专线网关，11：云联网，1025：CLB</p>
     */
    public $VirtualGatewayType;

    /**
     * @var string <p>专线网关id或者云联网id</p>
     */
    public $VpcGatewayIndex;

    /**
     * @var array <p>私有域名映射地址</p>
     */
    public $PrivateDomainNames;

    /**
     * @param integer $NetworkType <p>网络类型。 0：公网，1：内网</p>
     * @param string $VpcID <p>私有网络id</p>
     * @param integer $AppID <p>私有网络所属用户app id</p>
     * @param integer $VirtualGatewayType <p>网络服务类型。0：CVM，3：专线网关，11：云联网，1025：CLB</p>
     * @param string $VpcGatewayIndex <p>专线网关id或者云联网id</p>
     * @param array $PrivateDomainNames <p>私有域名映射地址</p>
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
        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("VpcID",$param) and $param["VpcID"] !== null) {
            $this->VpcID = $param["VpcID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }

        if (array_key_exists("VpcGatewayIndex",$param) and $param["VpcGatewayIndex"] !== null) {
            $this->VpcGatewayIndex = $param["VpcGatewayIndex"];
        }

        if (array_key_exists("PrivateDomainNames",$param) and $param["PrivateDomainNames"] !== null) {
            $this->PrivateDomainNames = [];
            foreach ($param["PrivateDomainNames"] as $key => $value){
                $obj = new PrivateDomainNames();
                $obj->deserialize($value);
                array_push($this->PrivateDomainNames, $obj);
            }
        }
    }
}
