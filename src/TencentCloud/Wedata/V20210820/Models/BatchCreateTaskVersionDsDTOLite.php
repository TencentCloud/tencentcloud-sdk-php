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
 * BatchCreateTaskVersionDs使用的TaskVersionDsDTO
 *
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionRemark() 获取版本备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionRemark(string $VersionRemark) 设置版本备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskDsDTOLiteV2 getTaskInfo() 获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfo(TaskDsDTOLiteV2 $TaskInfo) 设置任务信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchCreateTaskVersionDsDTOLite extends AbstractModel
{
    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 版本备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionRemark;

    /**
     * @var TaskDsDTOLiteV2 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfo;

    /**
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionRemark 版本备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskDsDTOLiteV2 $TaskInfo 任务信息
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new TaskDsDTOLiteV2();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }
    }
}
