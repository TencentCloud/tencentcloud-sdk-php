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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了实例的抽象位置，包括其所在的可用区，所属的项目，宿主机等（仅CDH产品可用）
 *
 * @method string getZone() 获取实例所属的可用区 ID。该参数也可以通过调用 [DescribeZones]的返回值中的Zone字段来获取。
 * @method void setZone(string $Zone) 设置实例所属的可用区 ID。该参数也可以通过调用 [DescribeZones]的返回值中的Zone字段来获取。
 * @method integer getProjectId() 获取实例所属项目ID。
 * @method void setProjectId(integer $ProjectId) 设置实例所属项目ID。
 * @method string getHostId() 获取实例所属的专用宿主机ID列表。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。仅用于出参，当前暂不支持。
 * @method void setHostId(string $HostId) 设置实例所属的专用宿主机ID列表。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。仅用于出参，当前暂不支持。
 * @method array getHostIds() 获取实例所属的专用宿主机ID列表，仅用于入参。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。
 * @method void setHostIds(array $HostIds) 设置实例所属的专用宿主机ID列表，仅用于入参。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。
 * @method string getProjectName() 获取实例所属项目名。
 * @method void setProjectName(string $ProjectName) 设置实例所属项目名。
 */
class Placement extends AbstractModel
{
    /**
     * @var string 实例所属的可用区 ID。该参数也可以通过调用 [DescribeZones]的返回值中的Zone字段来获取。
     */
    public $Zone;

    /**
     * @var integer 实例所属项目ID。
     */
    public $ProjectId;

    /**
     * @var string 实例所属的专用宿主机ID列表。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。仅用于出参，当前暂不支持。
     */
    public $HostId;

    /**
     * @var array 实例所属的专用宿主机ID列表，仅用于入参。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。
     */
    public $HostIds;

    /**
     * @var string 实例所属项目名。
     */
    public $ProjectName;

    /**
     * @param string $Zone 实例所属的可用区 ID。该参数也可以通过调用 [DescribeZones]的返回值中的Zone字段来获取。
     * @param integer $ProjectId 实例所属项目ID。
     * @param string $HostId 实例所属的专用宿主机ID列表。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。仅用于出参，当前暂不支持。
     * @param array $HostIds 实例所属的专用宿主机ID列表，仅用于入参。如果您有购买专用宿主机并且指定了该参数，则您购买的实例就会随机的部署在这些专用宿主机上。
     * @param string $ProjectName 实例所属项目名。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
