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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserVpcConnection请求参数结构体
 *
 * @method string getUserVpcId() 获取用户vpcid
 * @method void setUserVpcId(string $UserVpcId) 设置用户vpcid
 * @method string getUserSubnetId() 获取用户子网
 * @method void setUserSubnetId(string $UserSubnetId) 设置用户子网
 * @method string getUserVpcEndpointName() 获取用户终端节点名称
 * @method void setUserVpcEndpointName(string $UserVpcEndpointName) 设置用户终端节点名称
 * @method string getEngineNetworkId() 获取引擎网络ID
 * @method void setEngineNetworkId(string $EngineNetworkId) 设置引擎网络ID
 * @method string getUserVpcEndpointVip() 获取手动指定vip，不填自动分配子网下的一个ip
 * @method void setUserVpcEndpointVip(string $UserVpcEndpointVip) 设置手动指定vip，不填自动分配子网下的一个ip
 */
class CreateUserVpcConnectionRequest extends AbstractModel
{
    /**
     * @var string 用户vpcid
     */
    public $UserVpcId;

    /**
     * @var string 用户子网
     */
    public $UserSubnetId;

    /**
     * @var string 用户终端节点名称
     */
    public $UserVpcEndpointName;

    /**
     * @var string 引擎网络ID
     */
    public $EngineNetworkId;

    /**
     * @var string 手动指定vip，不填自动分配子网下的一个ip
     */
    public $UserVpcEndpointVip;

    /**
     * @param string $UserVpcId 用户vpcid
     * @param string $UserSubnetId 用户子网
     * @param string $UserVpcEndpointName 用户终端节点名称
     * @param string $EngineNetworkId 引擎网络ID
     * @param string $UserVpcEndpointVip 手动指定vip，不填自动分配子网下的一个ip
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
        if (array_key_exists("UserVpcId",$param) and $param["UserVpcId"] !== null) {
            $this->UserVpcId = $param["UserVpcId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("UserVpcEndpointName",$param) and $param["UserVpcEndpointName"] !== null) {
            $this->UserVpcEndpointName = $param["UserVpcEndpointName"];
        }

        if (array_key_exists("EngineNetworkId",$param) and $param["EngineNetworkId"] !== null) {
            $this->EngineNetworkId = $param["EngineNetworkId"];
        }

        if (array_key_exists("UserVpcEndpointVip",$param) and $param["UserVpcEndpointVip"] !== null) {
            $this->UserVpcEndpointVip = $param["UserVpcEndpointVip"];
        }
    }
}
