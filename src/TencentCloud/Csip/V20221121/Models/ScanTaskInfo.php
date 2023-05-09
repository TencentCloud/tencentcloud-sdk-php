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
 * 扫描任务详情
 *
 * @method string getTaskId() 获取任务日志Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务日志Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务日志名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务日志名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取任务进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置任务进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskTime() 获取对应的展示时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskTime(string $TaskTime) 设置对应的展示时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportId() 获取报表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportId(string $ReportId) 设置报表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportName() 获取报表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportName(string $ReportName) 设置报表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanPlan() 获取扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanPlan(integer $ScanPlan) 设置扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetCount() 获取关联的资产数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCount(integer $AssetCount) 设置关联的资产数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取APP ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置APP ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUIN() 获取用户主账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUIN(string $UIN) 设置用户主账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScanTaskInfo extends AbstractModel
{
    /**
     * @var string 任务日志Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务日志名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var integer 任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 任务进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var string 对应的展示时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskTime;

    /**
     * @var string 报表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportId;

    /**
     * @var string 报表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportName;

    /**
     * @var integer 扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanPlan;

    /**
     * @var integer 关联的资产数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCount;

    /**
     * @var string APP ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户主账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UIN;

    /**
     * @var string 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @param string $TaskId 任务日志Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务日志名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 任务进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskTime 对应的展示时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportId 报表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportName 报表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanPlan 扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetCount 关联的资产数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId APP ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UIN 用户主账户ID
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("ScanPlan",$param) and $param["ScanPlan"] !== null) {
            $this->ScanPlan = $param["ScanPlan"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
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
