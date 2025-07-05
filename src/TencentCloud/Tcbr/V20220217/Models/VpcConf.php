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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云托管服务 Vpc 配置
 *
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method string getVpcCIDR() 获取vpc 网段
 * @method void setVpcCIDR(string $VpcCIDR) 设置vpc 网段
 * @method string getSubnetId() 获取subnet id
 * @method void setSubnetId(string $SubnetId) 设置subnet id
 * @method string getSubnetCIDR() 获取subnet 网段
 * @method void setSubnetCIDR(string $SubnetCIDR) 设置subnet 网段
 */
class VpcConf extends AbstractModel
{
    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string vpc 网段
     */
    public $VpcCIDR;

    /**
     * @var string subnet id
     */
    public $SubnetId;

    /**
     * @var string subnet 网段
     */
    public $SubnetCIDR;

    /**
     * @param string $VpcId vpc id
     * @param string $VpcCIDR vpc 网段
     * @param string $SubnetId subnet id
     * @param string $SubnetCIDR subnet 网段
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

        if (array_key_exists("VpcCIDR",$param) and $param["VpcCIDR"] !== null) {
            $this->VpcCIDR = $param["VpcCIDR"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetCIDR",$param) and $param["SubnetCIDR"] !== null) {
            $this->SubnetCIDR = $param["SubnetCIDR"];
        }
    }
}
