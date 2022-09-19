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
 * @method integer getAppId() 获取App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScenarioName() 获取场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScenarioName(string $ScenarioName) 设置场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTarget() 获取告警对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTarget(string $Target) 设置告警对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobSLAId() 获取告警规则 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobSLAId(string $JobSLAId) 设置告警规则 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobSLADescription() 获取告警规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobSLADescription(string $JobSLADescription) 设置告警规则描述
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
     * @var integer App ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 子账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScenarioName;

    /**
     * @var string 告警对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Target;

    /**
     * @var string 告警规则 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobSLAId;

    /**
     * @var string 告警规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobSLADescription;

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
     * @param integer $AppId App ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 子账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScenarioName 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Target 告警对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobSLAId 告警规则 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobSLADescription 告警规则描述
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("JobSLAId",$param) and $param["JobSLAId"] !== null) {
            $this->JobSLAId = $param["JobSLAId"];
        }

        if (array_key_exists("JobSLADescription",$param) and $param["JobSLADescription"] !== null) {
            $this->JobSLADescription = $param["JobSLADescription"];
        }
    }
}
