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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTTEndpoint
 *
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 * @method string getUrl() 获取<p>接入点</p>
 * @method void setUrl(string $Url) 设置<p>接入点</p>
 * @method string getVpcId() 获取<p>vpc信息</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpc信息</p>
 * @method string getSubnetId() 获取<p>子网信息</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网信息</p>
 * @method string getHost() 获取<p>主机</p>
 * @method void setHost(string $Host) 设置<p>主机</p>
 * @method integer getPort() 获取<p>端口</p>
 * @method void setPort(integer $Port) 设置<p>端口</p>
 * @method string getIp() 获取<p>接入点ip</p>
 * @method void setIp(string $Ip) 设置<p>接入点ip</p>
 * @method boolean getPortEnable() 获取<p>端口是否打开</p>
 * @method void setPortEnable(boolean $PortEnable) 设置<p>端口是否打开</p>
 * @method string getVpcEndpointId() 获取<p>vpce唯一id</p>
 * @method void setVpcEndpointId(string $VpcEndpointId) 设置<p>vpce唯一id</p>
 */
class MQTTEndpointItem extends AbstractModel
{
    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @var string <p>接入点</p>
     */
    public $Url;

    /**
     * @var string <p>vpc信息</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网信息</p>
     */
    public $SubnetId;

    /**
     * @var string <p>主机</p>
     */
    public $Host;

    /**
     * @var integer <p>端口</p>
     */
    public $Port;

    /**
     * @var string <p>接入点ip</p>
     */
    public $Ip;

    /**
     * @var boolean <p>端口是否打开</p>
     */
    public $PortEnable;

    /**
     * @var string <p>vpce唯一id</p>
     */
    public $VpcEndpointId;

    /**
     * @param string $Type <p>类型</p>
     * @param string $Url <p>接入点</p>
     * @param string $VpcId <p>vpc信息</p>
     * @param string $SubnetId <p>子网信息</p>
     * @param string $Host <p>主机</p>
     * @param integer $Port <p>端口</p>
     * @param string $Ip <p>接入点ip</p>
     * @param boolean $PortEnable <p>端口是否打开</p>
     * @param string $VpcEndpointId <p>vpce唯一id</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("PortEnable",$param) and $param["PortEnable"] !== null) {
            $this->PortEnable = $param["PortEnable"];
        }

        if (array_key_exists("VpcEndpointId",$param) and $param["VpcEndpointId"] !== null) {
            $this->VpcEndpointId = $param["VpcEndpointId"];
        }
    }
}
