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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入点
 *
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method string getSubnetId() 获取subnet id
 * @method void setSubnetId(string $SubnetId) 设置subnet id
 * @method string getVpcEndpoint() 获取接入地址
 * @method void setVpcEndpoint(string $VpcEndpoint) 设置接入地址
 * @method string getVpcDataStreamEndpointStatus() 获取接入地址状态
 * @method void setVpcDataStreamEndpointStatus(string $VpcDataStreamEndpointStatus) 设置接入地址状态
 * @method boolean getPublicNetwork() 获取是否是公网
 * @method void setPublicNetwork(boolean $PublicNetwork) 设置是否是公网
 * @method string getAccessStrategy() 获取访问策略
 * @method void setAccessStrategy(string $AccessStrategy) 设置访问策略
 * @method integer getBandwidth() 获取带宽
 * @method void setBandwidth(integer $Bandwidth) 设置带宽
 */
class RabbitMQServerlessEndpoint extends AbstractModel
{
    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string subnet id
     */
    public $SubnetId;

    /**
     * @var string 接入地址
     */
    public $VpcEndpoint;

    /**
     * @var string 接入地址状态
     */
    public $VpcDataStreamEndpointStatus;

    /**
     * @var boolean 是否是公网
     */
    public $PublicNetwork;

    /**
     * @var string 访问策略
     */
    public $AccessStrategy;

    /**
     * @var integer 带宽
     */
    public $Bandwidth;

    /**
     * @param string $VpcId vpc id
     * @param string $SubnetId subnet id
     * @param string $VpcEndpoint 接入地址
     * @param string $VpcDataStreamEndpointStatus 接入地址状态
     * @param boolean $PublicNetwork 是否是公网
     * @param string $AccessStrategy 访问策略
     * @param integer $Bandwidth 带宽
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcEndpoint",$param) and $param["VpcEndpoint"] !== null) {
            $this->VpcEndpoint = $param["VpcEndpoint"];
        }

        if (array_key_exists("VpcDataStreamEndpointStatus",$param) and $param["VpcDataStreamEndpointStatus"] !== null) {
            $this->VpcDataStreamEndpointStatus = $param["VpcDataStreamEndpointStatus"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("AccessStrategy",$param) and $param["AccessStrategy"] !== null) {
            $this->AccessStrategy = $param["AccessStrategy"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
