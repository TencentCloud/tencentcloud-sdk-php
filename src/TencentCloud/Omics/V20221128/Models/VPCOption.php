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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有网络配置。
 *
 * @method string getSubnetZone() 获取子网可用区。
 * @method void setSubnetZone(string $SubnetZone) 设置子网可用区。
 * @method string getVPCCIDRBlock() 获取私有网络CIDR。
 * @method void setVPCCIDRBlock(string $VPCCIDRBlock) 设置私有网络CIDR。
 * @method string getSubnetCIDRBlock() 获取子网CIDR。
 * @method void setSubnetCIDRBlock(string $SubnetCIDRBlock) 设置子网CIDR。
 */
class VPCOption extends AbstractModel
{
    /**
     * @var string 子网可用区。
     */
    public $SubnetZone;

    /**
     * @var string 私有网络CIDR。
     */
    public $VPCCIDRBlock;

    /**
     * @var string 子网CIDR。
     */
    public $SubnetCIDRBlock;

    /**
     * @param string $SubnetZone 子网可用区。
     * @param string $VPCCIDRBlock 私有网络CIDR。
     * @param string $SubnetCIDRBlock 子网CIDR。
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
        if (array_key_exists("SubnetZone",$param) and $param["SubnetZone"] !== null) {
            $this->SubnetZone = $param["SubnetZone"];
        }

        if (array_key_exists("VPCCIDRBlock",$param) and $param["VPCCIDRBlock"] !== null) {
            $this->VPCCIDRBlock = $param["VPCCIDRBlock"];
        }

        if (array_key_exists("SubnetCIDRBlock",$param) and $param["SubnetCIDRBlock"] !== null) {
            $this->SubnetCIDRBlock = $param["SubnetCIDRBlock"];
        }
    }
}
