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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nacos副本信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getRole() 获取角色
 * @method void setRole(string $Role) 设置角色
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getZone() 获取可用区ID
 * @method void setZone(string $Zone) 设置可用区ID
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method string getVpcId() 获取VPC ID	
 * @method void setVpcId(string $VpcId) 设置VPC ID	
 */
class NacosReplica extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 角色
     */
    public $Role;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 可用区ID
     */
    public $Zone;

    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var string VPC ID	
     */
    public $VpcId;

    /**
     * @param string $Name 名称
     * @param string $Role 角色
     * @param string $Status 状态
     * @param string $SubnetId 子网ID
     * @param string $Zone 可用区ID
     * @param string $ZoneId 可用区ID
     * @param string $VpcId VPC ID	
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
