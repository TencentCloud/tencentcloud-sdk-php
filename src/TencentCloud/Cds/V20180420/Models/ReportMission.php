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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务对象
 *
 * @method integer getId() 获取报表任务id
 * @method void setId(integer $Id) 设置报表任务id
 * @method string getTplName() 获取任务名称
 * @method void setTplName(string $TplName) 设置任务名称
 * @method integer getReportType() 获取报表类型 1:单次报表 2:周期报表
 * @method void setReportType(integer $ReportType) 设置报表类型 1:单次报表 2:周期报表
 * @method string getRemark() 获取报告说明
 * @method void setRemark(string $Remark) 设置报告说明
 * @method integer getTemplateId() 获取报表模板 1:综合分析报告 2:等保合规报告
 * @method void setTemplateId(integer $TemplateId) 设置报表模板 1:综合分析报告 2:等保合规报告
 * @method array getAssetsList() 获取包含资产
 * @method void setAssetsList(array $AssetsList) 设置包含资产
 * @method integer getNextStartTime() 获取下次启动时间
 * @method void setNextStartTime(integer $NextStartTime) 设置下次启动时间
 * @method integer getMissionStatus() 获取任务状态 1:生成中 2:待生成3:已生成4:生成失败5:已暂停
 * @method void setMissionStatus(integer $MissionStatus) 设置任务状态 1:生成中 2:待生成3:已生成4:生成失败5:已暂停
 * @method string getMissionStatusMessage() 获取任务状态说明 仅生成中和生成失败有效
 * @method void setMissionStatusMessage(string $MissionStatusMessage) 设置任务状态说明 仅生成中和生成失败有效
 * @method integer getReportCount() 获取已生成报表数
 * @method void setReportCount(integer $ReportCount) 设置已生成报表数
 * @method integer getMissionStart() 获取任务起停 1:关闭 2:开启 仅周期报表有效
 * @method void setMissionStart(integer $MissionStart) 设置任务起停 1:关闭 2:开启 仅周期报表有效
 * @method integer getCntDay() 获取统计周期 1:24小时 7:近一周 30:近30天 90:近90天 180:
 * @method void setCntDay(integer $CntDay) 设置统计周期 1:24小时 7:近一周 30:近30天 90:近90天 180:
 * @method integer getCntCycle() 获取重复周期 1:每天 2:每周 3:每月
 * @method void setCntCycle(integer $CntCycle) 设置重复周期 1:每天 2:每周 3:每月
 * @method integer getCntTime() 获取执行日期 重复周期为天：无意义 周：星期几 1-7  月每月
 * @method void setCntTime(integer $CntTime) 设置执行日期 重复周期为天：无意义 周：星期几 1-7  月每月
 * @method string getCntDate() 获取执行时间 格式15:04 到分钟
 * @method void setCntDate(string $CntDate) 设置执行时间 格式15:04 到分钟
 * @method string getReceivers() 获取创建者 0:内置 其余存放用户(uin)
 * @method void setReceivers(string $Receivers) 设置创建者 0:内置 其余存放用户(uin)
 * @method integer getNotification() 获取Notification  int  1关闭 2开启 不变更为0
 * @method void setNotification(integer $Notification) 设置Notification  int  1关闭 2开启 不变更为0
 */
class ReportMission extends AbstractModel
{
    /**
     * @var integer 报表任务id
     */
    public $Id;

    /**
     * @var string 任务名称
     */
    public $TplName;

    /**
     * @var integer 报表类型 1:单次报表 2:周期报表
     */
    public $ReportType;

    /**
     * @var string 报告说明
     */
    public $Remark;

    /**
     * @var integer 报表模板 1:综合分析报告 2:等保合规报告
     */
    public $TemplateId;

    /**
     * @var array 包含资产
     */
    public $AssetsList;

    /**
     * @var integer 下次启动时间
     */
    public $NextStartTime;

    /**
     * @var integer 任务状态 1:生成中 2:待生成3:已生成4:生成失败5:已暂停
     */
    public $MissionStatus;

    /**
     * @var string 任务状态说明 仅生成中和生成失败有效
     */
    public $MissionStatusMessage;

    /**
     * @var integer 已生成报表数
     */
    public $ReportCount;

    /**
     * @var integer 任务起停 1:关闭 2:开启 仅周期报表有效
     */
    public $MissionStart;

    /**
     * @var integer 统计周期 1:24小时 7:近一周 30:近30天 90:近90天 180:
     */
    public $CntDay;

    /**
     * @var integer 重复周期 1:每天 2:每周 3:每月
     */
    public $CntCycle;

    /**
     * @var integer 执行日期 重复周期为天：无意义 周：星期几 1-7  月每月
     */
    public $CntTime;

    /**
     * @var string 执行时间 格式15:04 到分钟
     */
    public $CntDate;

    /**
     * @var string 创建者 0:内置 其余存放用户(uin)
     */
    public $Receivers;

    /**
     * @var integer Notification  int  1关闭 2开启 不变更为0
     */
    public $Notification;

    /**
     * @param integer $Id 报表任务id
     * @param string $TplName 任务名称
     * @param integer $ReportType 报表类型 1:单次报表 2:周期报表
     * @param string $Remark 报告说明
     * @param integer $TemplateId 报表模板 1:综合分析报告 2:等保合规报告
     * @param array $AssetsList 包含资产
     * @param integer $NextStartTime 下次启动时间
     * @param integer $MissionStatus 任务状态 1:生成中 2:待生成3:已生成4:生成失败5:已暂停
     * @param string $MissionStatusMessage 任务状态说明 仅生成中和生成失败有效
     * @param integer $ReportCount 已生成报表数
     * @param integer $MissionStart 任务起停 1:关闭 2:开启 仅周期报表有效
     * @param integer $CntDay 统计周期 1:24小时 7:近一周 30:近30天 90:近90天 180:
     * @param integer $CntCycle 重复周期 1:每天 2:每周 3:每月
     * @param integer $CntTime 执行日期 重复周期为天：无意义 周：星期几 1-7  月每月
     * @param string $CntDate 执行时间 格式15:04 到分钟
     * @param string $Receivers 创建者 0:内置 其余存放用户(uin)
     * @param integer $Notification Notification  int  1关闭 2开启 不变更为0
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

        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("AssetsList",$param) and $param["AssetsList"] !== null) {
            $this->AssetsList = [];
            foreach ($param["AssetsList"] as $key => $value){
                $obj = new AssetsInfo();
                $obj->deserialize($value);
                array_push($this->AssetsList, $obj);
            }
        }

        if (array_key_exists("NextStartTime",$param) and $param["NextStartTime"] !== null) {
            $this->NextStartTime = $param["NextStartTime"];
        }

        if (array_key_exists("MissionStatus",$param) and $param["MissionStatus"] !== null) {
            $this->MissionStatus = $param["MissionStatus"];
        }

        if (array_key_exists("MissionStatusMessage",$param) and $param["MissionStatusMessage"] !== null) {
            $this->MissionStatusMessage = $param["MissionStatusMessage"];
        }

        if (array_key_exists("ReportCount",$param) and $param["ReportCount"] !== null) {
            $this->ReportCount = $param["ReportCount"];
        }

        if (array_key_exists("MissionStart",$param) and $param["MissionStart"] !== null) {
            $this->MissionStart = $param["MissionStart"];
        }

        if (array_key_exists("CntDay",$param) and $param["CntDay"] !== null) {
            $this->CntDay = $param["CntDay"];
        }

        if (array_key_exists("CntCycle",$param) and $param["CntCycle"] !== null) {
            $this->CntCycle = $param["CntCycle"];
        }

        if (array_key_exists("CntTime",$param) and $param["CntTime"] !== null) {
            $this->CntTime = $param["CntTime"];
        }

        if (array_key_exists("CntDate",$param) and $param["CntDate"] !== null) {
            $this->CntDate = $param["CntDate"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("Notification",$param) and $param["Notification"] !== null) {
            $this->Notification = $param["Notification"];
        }
    }
}
