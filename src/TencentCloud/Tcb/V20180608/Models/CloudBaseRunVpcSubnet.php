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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子网信息
 *
 * @method string getId() 获取子网id
 * @method void setId(string $Id) 设置子网id
 * @method string getCidr() 获取子网的ipv4
 * @method void setCidr(string $Cidr) 设置子网的ipv4
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getTarget() 获取subnet类型
 * @method void setTarget(string $Target) 设置subnet类型
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 */
class CloudBaseRunVpcSubnet extends AbstractModel
{
    /**
     * @var string 子网id
     */
    public $Id;

    /**
     * @var string 子网的ipv4
     */
    public $Cidr;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string subnet类型
     */
    public $Target;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @param string $Id 子网id
     * @param string $Cidr 子网的ipv4
     * @param string $Zone 可用区
     * @param string $Type 类型
     * @param string $Target subnet类型
     * @param string $Region 地域
     * @param string $Name 名字
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
