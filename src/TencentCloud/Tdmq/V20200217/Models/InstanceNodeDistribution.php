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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例节点分布信息
 *
 * @method string getZoneName() 获取可用区
 * @method void setZoneName(string $ZoneName) 设置可用区
 * @method string getZoneId() 获取可用区id
 * @method void setZoneId(string $ZoneId) 设置可用区id
 * @method integer getNodeCount() 获取节点数
 * @method void setNodeCount(integer $NodeCount) 设置节点数
 * @method boolean getNodePermWipeFlag() 获取有调度任务且没有切回的可用区，此标识为true
 * @method void setNodePermWipeFlag(boolean $NodePermWipeFlag) 设置有调度任务且没有切回的可用区，此标识为true
 * @method string getZoneStatus() 获取可用区状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneStatus(string $ZoneStatus) 设置可用区状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceNodeDistribution extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $ZoneName;

    /**
     * @var string 可用区id
     */
    public $ZoneId;

    /**
     * @var integer 节点数
     */
    public $NodeCount;

    /**
     * @var boolean 有调度任务且没有切回的可用区，此标识为true
     */
    public $NodePermWipeFlag;

    /**
     * @var string 可用区状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneStatus;

    /**
     * @param string $ZoneName 可用区
     * @param string $ZoneId 可用区id
     * @param integer $NodeCount 节点数
     * @param boolean $NodePermWipeFlag 有调度任务且没有切回的可用区，此标识为true
     * @param string $ZoneStatus 可用区状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("NodePermWipeFlag",$param) and $param["NodePermWipeFlag"] !== null) {
            $this->NodePermWipeFlag = $param["NodePermWipeFlag"];
        }

        if (array_key_exists("ZoneStatus",$param) and $param["ZoneStatus"] !== null) {
            $this->ZoneStatus = $param["ZoneStatus"];
        }
    }
}
