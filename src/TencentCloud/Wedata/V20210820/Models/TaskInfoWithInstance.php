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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务信息，携带了实例时间
 *
 * @method string getParentId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceRunDateList() 获取实例时间列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceRunDateList(array $InstanceRunDateList) 设置实例时间列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceCount() 获取实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceCount(integer $InstanceCount) 设置实例个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchedulerDescription() 获取调度描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerDescription(string $SchedulerDescription) 设置调度描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfoWithInstance extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var array 实例时间列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceRunDateList;

    /**
     * @var integer 实例个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceCount;

    /**
     * @var string 调度描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerDescription;

    /**
     * @param string $ParentId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceRunDateList 实例时间列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceCount 实例个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchedulerDescription 调度描述
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
        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("InstanceRunDateList",$param) and $param["InstanceRunDateList"] !== null) {
            $this->InstanceRunDateList = $param["InstanceRunDateList"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("SchedulerDescription",$param) and $param["SchedulerDescription"] !== null) {
            $this->SchedulerDescription = $param["SchedulerDescription"];
        }
    }
}
