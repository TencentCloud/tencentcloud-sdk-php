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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务报告信息
 *
 * @method string getTaskLogName() 获取报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskLogName(string $TaskLogName) 设置报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskLogId() 获取报告ID
 * @method void setTaskLogId(string $TaskLogId) 设置报告ID
 * @method integer getAssetsNumber() 获取关联资产个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetsNumber(integer $AssetsNumber) 设置关联资产个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskNumber() 获取安全风险数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskNumber(integer $RiskNumber) 设置安全风险数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取报告生成时间,任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置报告生成时间,任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务状态码：0 初始值  1正在扫描  2扫描完成  3扫描出错，4停止，5暂停，6该任务已被重启过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务状态码：0 初始值  1正在扫描  2扫描完成  3扫描出错，4停止，5暂停，6该任务已被重启过
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取关联任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置关联任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取扫描开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置扫描开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskCenterTaskId() 获取任务中心扫描任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskCenterTaskId(string $TaskCenterTaskId) 设置任务中心扫描任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUIN() 获取主账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUIN(string $UIN) 设置主账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskLogInfo extends AbstractModel
{
    /**
     * @var string 报告名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskLogName;

    /**
     * @var string 报告ID
     */
    public $TaskLogId;

    /**
     * @var integer 关联资产个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetsNumber;

    /**
     * @var integer 安全风险数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskNumber;

    /**
     * @var string 报告生成时间,任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var integer 任务状态码：0 初始值  1正在扫描  2扫描完成  3扫描出错，4停止，5暂停，6该任务已被重启过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 关联任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 扫描开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务中心扫描任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskCenterTaskId;

    /**
     * @var string 租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 主账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UIN;

    /**
     * @var string 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @param string $TaskLogName 报告名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskLogId 报告ID
     * @param integer $AssetsNumber 关联资产个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskNumber 安全风险数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 报告生成时间,任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务状态码：0 初始值  1正在扫描  2扫描完成  3扫描出错，4停止，5暂停，6该任务已被重启过
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 关联任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 扫描开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskCenterTaskId 任务中心扫描任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UIN 主账户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名称
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
        if (array_key_exists("TaskLogName",$param) and $param["TaskLogName"] !== null) {
            $this->TaskLogName = $param["TaskLogName"];
        }

        if (array_key_exists("TaskLogId",$param) and $param["TaskLogId"] !== null) {
            $this->TaskLogId = $param["TaskLogId"];
        }

        if (array_key_exists("AssetsNumber",$param) and $param["AssetsNumber"] !== null) {
            $this->AssetsNumber = $param["AssetsNumber"];
        }

        if (array_key_exists("RiskNumber",$param) and $param["RiskNumber"] !== null) {
            $this->RiskNumber = $param["RiskNumber"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskCenterTaskId",$param) and $param["TaskCenterTaskId"] !== null) {
            $this->TaskCenterTaskId = $param["TaskCenterTaskId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("UIN",$param) and $param["UIN"] !== null) {
            $this->UIN = $param["UIN"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
