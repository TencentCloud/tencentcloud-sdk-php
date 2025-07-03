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
namespace TencentCloud\Tccatalog\V20241024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络配置信息
 *
 * @method string getVpcId() 获取vpc实例id
 * @method void setVpcId(string $VpcId) 设置vpc实例id
 * @method string getVpcCidrBlock() 获取vpc网段
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置vpc网段
 * @method string getSubnetId() 获取子网实例id
 * @method void setSubnetId(string $SubnetId) 设置子网实例id
 * @method string getSubnetCidrBlock() 获取子网网段
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置子网网段
 * @method string getClbIp() 获取服务clbip
 * @method void setClbIp(string $ClbIp) 设置服务clbip
 * @method string getClbPort() 获取服务clbPort
 * @method void setClbPort(string $ClbPort) 设置服务clbPort
 */
class NetWork extends AbstractModel
{
    /**
     * @var string vpc实例id
     */
    public $VpcId;

    /**
     * @var string vpc网段
     */
    public $VpcCidrBlock;

    /**
     * @var string 子网实例id
     */
    public $SubnetId;

    /**
     * @var string 子网网段
     */
    public $SubnetCidrBlock;

    /**
     * @var string 服务clbip
     */
    public $ClbIp;

    /**
     * @var string 服务clbPort
     */
    public $ClbPort;

    /**
     * @param string $VpcId vpc实例id
     * @param string $VpcCidrBlock vpc网段
     * @param string $SubnetId 子网实例id
     * @param string $SubnetCidrBlock 子网网段
     * @param string $ClbIp 服务clbip
     * @param string $ClbPort 服务clbPort
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

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("ClbIp",$param) and $param["ClbIp"] !== null) {
            $this->ClbIp = $param["ClbIp"];
        }

        if (array_key_exists("ClbPort",$param) and $param["ClbPort"] !== null) {
            $this->ClbPort = $param["ClbPort"];
        }
    }
}
