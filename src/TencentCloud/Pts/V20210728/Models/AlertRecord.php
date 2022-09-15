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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警历史记录项
 *
 * @method string getAlertRecordId() 获取告警历史记录项 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertRecordId(string $AlertRecordId) 设置告警历史记录项 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScenarioId() 获取场景 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScenarioId(string $ScenarioId) 设置场景 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlertRecordStatus getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(AlertRecordStatus $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取任务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置任务 ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertRecord extends AbstractModel
{
    /**
     * @var string 告警历史记录项 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertRecordId;

    /**
     * @var string 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 场景 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScenarioId;

    /**
     * @var AlertRecordStatus 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 任务 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @param string $AlertRecordId 告警历史记录项 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScenarioId 场景 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlertRecordStatus $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId 任务 ID
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
        if (array_key_exists("AlertRecordId",$param) and $param["AlertRecordId"] !== null) {
            $this->AlertRecordId = $param["AlertRecordId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new AlertRecordStatus();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }
    }
}
