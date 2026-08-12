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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 开通堡垒机的子网
 *
 * @method string getSubnetId() 获取<p>xa0子网id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>xa0子网id</p>
 * @method string getSubnetName() 获取<p>子网名称</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称</p>
 * @method string getZone() 获取<p>子网可用区</p>
 * @method void setZone(string $Zone) 设置<p>子网可用区</p>
 * @method string getSubnetCidrBlock() 获取<p>子网cidr</p>
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置<p>子网cidr</p>
 */
class ParamInitResourceSubnet extends AbstractModel
{
    /**
     * @var string <p>xa0子网id</p>
     */
    public $SubnetId;

    /**
     * @var string <p>子网名称</p>
     */
    public $SubnetName;

    /**
     * @var string <p>子网可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>子网cidr</p>
     */
    public $SubnetCidrBlock;

    /**
     * @param string $SubnetId <p>xa0子网id</p>
     * @param string $SubnetName <p>子网名称</p>
     * @param string $Zone <p>子网可用区</p>
     * @param string $SubnetCidrBlock <p>子网cidr</p>
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }
    }
}
