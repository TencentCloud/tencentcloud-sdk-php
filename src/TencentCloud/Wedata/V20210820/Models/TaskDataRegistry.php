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
 * 自动解析任务依赖
 *
 * @method TaskDsDTO getTaskInfo() 获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfo(TaskDsDTO $TaskInfo) 设置任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskDataRegistryDTO getTaskDataRegistryInfo() 获取依赖信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskDataRegistryInfo(TaskDataRegistryDTO $TaskDataRegistryInfo) 设置依赖信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskDataRegistry extends AbstractModel
{
    /**
     * @var TaskDsDTO 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfo;

    /**
     * @var TaskDataRegistryDTO 依赖信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskDataRegistryInfo;

    /**
     * @param TaskDsDTO $TaskInfo 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskDataRegistryDTO $TaskDataRegistryInfo 依赖信息
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
        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new TaskDsDTO();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("TaskDataRegistryInfo",$param) and $param["TaskDataRegistryInfo"] !== null) {
            $this->TaskDataRegistryInfo = new TaskDataRegistryDTO();
            $this->TaskDataRegistryInfo->deserialize($param["TaskDataRegistryInfo"]);
        }
    }
}
