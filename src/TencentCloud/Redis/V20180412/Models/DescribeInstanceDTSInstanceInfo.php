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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 详细DTS实例信息
 *
 * @method integer getRegionId() 获取地域 ID。
 * @method void setRegionId(integer $RegionId) 设置地域 ID。
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method integer getSetId() 获取仓库ID。
 * @method void setSetId(integer $SetId) 设置仓库ID。
 * @method integer getZoneId() 获取可用区ID。
 * @method void setZoneId(integer $ZoneId) 设置可用区ID。
 * @method integer getType() 获取实例类型。
 * @method void setType(integer $Type) 设置实例类型。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getVip() 获取实例访问地址。
 * @method void setVip(string $Vip) 设置实例访问地址。
 * @method integer getStatus() 获取状态。
 * @method void setStatus(integer $Status) 设置状态。
 */
class DescribeInstanceDTSInstanceInfo extends AbstractModel
{
    /**
     * @var integer 地域 ID。
     */
    public $RegionId;

    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 仓库ID。
     */
    public $SetId;

    /**
     * @var integer 可用区ID。
     */
    public $ZoneId;

    /**
     * @var integer 实例类型。
     */
    public $Type;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例访问地址。
     */
    public $Vip;

    /**
     * @var integer 状态。
     */
    public $Status;

    /**
     * @param integer $RegionId 地域 ID。
     * @param string $InstanceId 实例 ID。
     * @param integer $SetId 仓库ID。
     * @param integer $ZoneId 可用区ID。
     * @param integer $Type 实例类型。
     * @param string $InstanceName 实例名称。
     * @param string $Vip 实例访问地址。
     * @param integer $Status 状态。
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
