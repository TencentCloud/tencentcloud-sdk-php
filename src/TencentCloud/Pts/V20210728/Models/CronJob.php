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
 * 定时任务
 *
 * @method string getCronJobId() 获取定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronJobId(string $CronJobId) 设置定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取定时任务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置定时任务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScenarioId() 获取场景ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScenarioId(string $ScenarioId) 设置场景ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScenarioName() 获取场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScenarioName(string $ScenarioName) 设置场景名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCronExpression() 获取cron 表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronExpression(string $CronExpression) 设置cron 表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbortReason() 获取中止原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbortReason(integer $AbortReason) 设置中止原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取定时任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置定时任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNoticeId() 获取Notice ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeId(string $NoticeId) 设置Notice ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrequencyType() 获取执行频率类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrequencyType(integer $FrequencyType) 设置执行频率类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNote() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobOwner() 获取tom
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobOwner(string $JobOwner) 设置tom
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
 */
class CronJob extends AbstractModel
{
    /**
     * @var string 定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronJobId;

    /**
     * @var string 定时任务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 场景ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScenarioId;

    /**
     * @var string 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScenarioName;

    /**
     * @var string cron 表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronExpression;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 中止原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AbortReason;

    /**
     * @var integer 定时任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string Notice ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var integer 执行频率类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrequencyType;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @var string tom
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobOwner;

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
     * @param string $CronJobId 定时任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 定时任务名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScenarioId 场景ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScenarioName 场景名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CronExpression cron 表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AbortReason 中止原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 定时任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NoticeId Notice ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrequencyType 执行频率类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Note 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobOwner tom
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId App ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 子账号
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
        if (array_key_exists("CronJobId",$param) and $param["CronJobId"] !== null) {
            $this->CronJobId = $param["CronJobId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("ScenarioName",$param) and $param["ScenarioName"] !== null) {
            $this->ScenarioName = $param["ScenarioName"];
        }

        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AbortReason",$param) and $param["AbortReason"] !== null) {
            $this->AbortReason = $param["AbortReason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("FrequencyType",$param) and $param["FrequencyType"] !== null) {
            $this->FrequencyType = $param["FrequencyType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("JobOwner",$param) and $param["JobOwner"] !== null) {
            $this->JobOwner = $param["JobOwner"];
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
    }
}
