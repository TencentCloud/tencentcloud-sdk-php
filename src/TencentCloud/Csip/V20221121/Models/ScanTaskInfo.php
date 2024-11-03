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
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getStatus() 获取任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
 * @method void setStatus(integer $Status) 设置任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
 * @method integer getProgress() 获取任务进度
 * @method void setProgress(integer $Progress) 设置任务进度
 * @method string getTaskTime() 获取任务完成时间
 * @method void setTaskTime(string $TaskTime) 设置任务完成时间
 * @method string getReportId() 获取报告ID
 * @method void setReportId(string $ReportId) 设置报告ID
 * @method string getReportName() 获取报告名称
 * @method void setReportName(string $ReportName) 设置报告名称
 * @method integer getScanPlan() 获取扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
 * @method void setScanPlan(integer $ScanPlan) 设置扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
 * @method integer getAssetCount() 获取关联的资产数
 * @method void setAssetCount(integer $AssetCount) 设置关联的资产数
 * @method string getAppId() 获取APP ID
 * @method void setAppId(string $AppId) 设置APP ID
 * @method string getUIN() 获取用户主账户ID
 * @method void setUIN(string $UIN) 设置用户主账户ID
 * @method string getUserName() 获取用户名称
 * @method void setUserName(string $UserName) 设置用户名称
 */
class ScanTaskInfo extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
     */
    public $Status;

    /**
     * @var integer 任务进度
     */
    public $Progress;

    /**
     * @var string 任务完成时间
     */
    public $TaskTime;

    /**
     * @var string 报告ID
     */
    public $ReportId;

    /**
     * @var string 报告名称
     */
    public $ReportName;

    /**
     * @var integer 扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
     */
    public $ScanPlan;

    /**
     * @var integer 关联的资产数
     */
    public $AssetCount;

    /**
     * @var string APP ID
     */
    public $AppId;

    /**
     * @var string 用户主账户ID
     */
    public $UIN;

    /**
     * @var string 用户名称
     */
    public $UserName;

    /**
     * @param string $TaskId 任务Id
     * @param string $TaskName 任务名称
     * @param integer $Status 任务状态码：1等待开始  2正在扫描  3扫描出错 4扫描完成
     * @param integer $Progress 任务进度
     * @param string $TaskTime 任务完成时间
     * @param string $ReportId 报告ID
     * @param string $ReportName 报告名称
     * @param integer $ScanPlan 扫描计划，0-周期任务,1-立即扫描,2-定时扫描,3-自定义
     * @param integer $AssetCount 关联的资产数
     * @param string $AppId APP ID
     * @param string $UIN 用户主账户ID
     * @param string $UserName 用户名称
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
