<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 报表信息
 *
 * @method integer getId() 获取任务id
 * @method void setId(integer $Id) 设置任务id
 * @method string getReportName() 获取报告名称
 * @method void setReportName(string $ReportName) 设置报告名称
 * @method string getReportType() 获取报告类型（AssetSorting:资产梳理）
 * @method void setReportType(string $ReportType) 设置报告类型（AssetSorting:资产梳理）
 * @method integer getReportPeriod() 获取报告周期（0单次 1每天 2每周 3每月）
 * @method void setReportPeriod(integer $ReportPeriod) 设置报告周期（0单次 1每天 2每周 3每月）
 * @method integer getReportPlan() 获取执行计划 （0:单次报告 1:定时报告）
 * @method void setReportPlan(integer $ReportPlan) 设置执行计划 （0:单次报告 1:定时报告）
 * @method string getReportStatus() 获取报告导出状态（Success 成功, Failed 失败, InProgress 进行中）
 * @method void setReportStatus(string $ReportStatus) 设置报告导出状态（Success 成功, Failed 失败, InProgress 进行中）
 * @method string getTimingStartTime() 获取任务下次启动时间
 * @method void setTimingStartTime(string $TimingStartTime) 设置任务下次启动时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getFinishedTime() 获取完成时间
 * @method void setFinishedTime(string $FinishedTime) 设置完成时间
 * @method string getSubUin() 获取子账号uin
 * @method void setSubUin(string $SubUin) 设置子账号uin
 * @method string getFailedMessage() 获取失败信息
 * @method void setFailedMessage(string $FailedMessage) 设置失败信息
 * @method integer getEnable() 获取是否启用（0：否 1：是）
 * @method void setEnable(integer $Enable) 设置是否启用（0：否 1：是）
 * @method string getComplianceName() 获取识别模板名称
 * @method void setComplianceName(string $ComplianceName) 设置识别模板名称
 * @method integer getProgressPercent() 获取进度百分比
 * @method void setProgressPercent(integer $ProgressPercent) 设置进度百分比
 * @method string getReportTemplateName() 获取报告模板名称
 * @method void setReportTemplateName(string $ReportTemplateName) 设置报告模板名称
 */
class ReportInfo extends AbstractModel
{
    /**
     * @var integer 任务id
     */
    public $Id;

    /**
     * @var string 报告名称
     */
    public $ReportName;

    /**
     * @var string 报告类型（AssetSorting:资产梳理）
     */
    public $ReportType;

    /**
     * @var integer 报告周期（0单次 1每天 2每周 3每月）
     */
    public $ReportPeriod;

    /**
     * @var integer 执行计划 （0:单次报告 1:定时报告）
     */
    public $ReportPlan;

    /**
     * @var string 报告导出状态（Success 成功, Failed 失败, InProgress 进行中）
     */
    public $ReportStatus;

    /**
     * @var string 任务下次启动时间
     */
    public $TimingStartTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 完成时间
     */
    public $FinishedTime;

    /**
     * @var string 子账号uin
     */
    public $SubUin;

    /**
     * @var string 失败信息
     */
    public $FailedMessage;

    /**
     * @var integer 是否启用（0：否 1：是）
     */
    public $Enable;

    /**
     * @var string 识别模板名称
     */
    public $ComplianceName;

    /**
     * @var integer 进度百分比
     */
    public $ProgressPercent;

    /**
     * @var string 报告模板名称
     */
    public $ReportTemplateName;

    /**
     * @param integer $Id 任务id
     * @param string $ReportName 报告名称
     * @param string $ReportType 报告类型（AssetSorting:资产梳理）
     * @param integer $ReportPeriod 报告周期（0单次 1每天 2每周 3每月）
     * @param integer $ReportPlan 执行计划 （0:单次报告 1:定时报告）
     * @param string $ReportStatus 报告导出状态（Success 成功, Failed 失败, InProgress 进行中）
     * @param string $TimingStartTime 任务下次启动时间
     * @param string $CreateTime 创建时间
     * @param string $FinishedTime 完成时间
     * @param string $SubUin 子账号uin
     * @param string $FailedMessage 失败信息
     * @param integer $Enable 是否启用（0：否 1：是）
     * @param string $ComplianceName 识别模板名称
     * @param integer $ProgressPercent 进度百分比
     * @param string $ReportTemplateName 报告模板名称
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ReportName",$param) and $param["ReportName"] !== null) {
            $this->ReportName = $param["ReportName"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("ReportPeriod",$param) and $param["ReportPeriod"] !== null) {
            $this->ReportPeriod = $param["ReportPeriod"];
        }

        if (array_key_exists("ReportPlan",$param) and $param["ReportPlan"] !== null) {
            $this->ReportPlan = $param["ReportPlan"];
        }

        if (array_key_exists("ReportStatus",$param) and $param["ReportStatus"] !== null) {
            $this->ReportStatus = $param["ReportStatus"];
        }

        if (array_key_exists("TimingStartTime",$param) and $param["TimingStartTime"] !== null) {
            $this->TimingStartTime = $param["TimingStartTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("FailedMessage",$param) and $param["FailedMessage"] !== null) {
            $this->FailedMessage = $param["FailedMessage"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ComplianceName",$param) and $param["ComplianceName"] !== null) {
            $this->ComplianceName = $param["ComplianceName"];
        }

        if (array_key_exists("ProgressPercent",$param) and $param["ProgressPercent"] !== null) {
            $this->ProgressPercent = $param["ProgressPercent"];
        }

        if (array_key_exists("ReportTemplateName",$param) and $param["ReportTemplateName"] !== null) {
            $this->ReportTemplateName = $param["ReportTemplateName"];
        }
    }
}
