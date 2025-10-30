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
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getUrl() 获取接入点
 * @method void setUrl(string $Url) 设置接入点
 * @method string getVpcId() 获取vpc信息
 * @method void setVpcId(string $VpcId) 设置vpc信息
 * @method string getSubnetId() 获取子网信息
 * @method void setSubnetId(string $SubnetId) 设置子网信息
 * @method string getHost() 获取主机
 * @method void setHost(string $Host) 设置主机
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getIp() 获取接入点ip
 * @method void setIp(string $Ip) 设置接入点ip
 */
class MQTTEndpointItem extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 接入点
     */
    public $Url;

    /**
     * @var string vpc信息
     */
    public $VpcId;

    /**
     * @var string 子网信息
     */
    public $SubnetId;

    /**
     * @var string 主机
     */
    public $Host;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 接入点ip
     */
    public $Ip;

    /**
     * @param string $Type 类型
     * @param string $Url 接入点
     * @param string $VpcId vpc信息
     * @param string $SubnetId 子网信息
     * @param string $Host 主机
     * @param integer $Port 端口
     * @param string $Ip 接入点ip
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
    }
}
