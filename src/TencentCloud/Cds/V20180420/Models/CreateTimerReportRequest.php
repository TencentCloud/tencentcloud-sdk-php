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
 * CreateTimerReport请求参数结构体
 *
 * @method string getTplName() 获取任务名称 不变更为""
 * @method void setTplName(string $TplName) 设置任务名称 不变更为""
 * @method integer getCntTime() 获取执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31
 * @method void setCntTime(integer $CntTime) 设置执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31
 * @method integer getCntCycle() 获取重复周期
 * @method void setCntCycle(integer $CntCycle) 设置重复周期
 * @method string getReceivers() 获取发送目标
 * @method void setReceivers(string $Receivers) 设置发送目标
 * @method integer getCntDay() 获取时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
 * @method void setCntDay(integer $CntDay) 设置时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
 * @method string getCntDate() 获取执行时间 格式15:04 到分钟
 * @method void setCntDate(string $CntDate) 设置执行时间 格式15:04 到分钟
 * @method string getRemark() 获取报告说明
 * @method void setRemark(string $Remark) 设置报告说明
 * @method integer getTemplateId() 获取模版Id
 * @method void setTemplateId(integer $TemplateId) 设置模版Id
 * @method integer getReportType() 获取报表类型
 * @method void setReportType(integer $ReportType) 设置报表类型
 * @method array getAssetsId() 获取关联的资产数组
 * @method void setAssetsId(array $AssetsId) 设置关联的资产数组
 * @method integer getNotification() 获取报表通知 1关闭 2开启 不变更为0
 * @method void setNotification(integer $Notification) 设置报表通知 1关闭 2开启 不变更为0
 * @method integer getMissionStart() 获取任务起停 1:关闭 2:开启 单次报表默认为2
 * @method void setMissionStart(integer $MissionStart) 设置任务起停 1:关闭 2:开启 单次报表默认为2
 */
class CreateTimerReportRequest extends AbstractModel
{
    /**
     * @var string 任务名称 不变更为""
     */
    public $TplName;

    /**
     * @var integer 执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31
     */
    public $CntTime;

    /**
     * @var integer 重复周期
     */
    public $CntCycle;

    /**
     * @var string 发送目标
     */
    public $Receivers;

    /**
     * @var integer 时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
     */
    public $CntDay;

    /**
     * @var string 执行时间 格式15:04 到分钟
     */
    public $CntDate;

    /**
     * @var string 报告说明
     */
    public $Remark;

    /**
     * @var integer 模版Id
     */
    public $TemplateId;

    /**
     * @var integer 报表类型
     */
    public $ReportType;

    /**
     * @var array 关联的资产数组
     */
    public $AssetsId;

    /**
     * @var integer 报表通知 1关闭 2开启 不变更为0
     */
    public $Notification;

    /**
     * @var integer 任务起停 1:关闭 2:开启 单次报表默认为2
     */
    public $MissionStart;

    /**
     * @param string $TplName 任务名称 不变更为""
     * @param integer $CntTime 执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31
     * @param integer $CntCycle 重复周期
     * @param string $Receivers 发送目标
     * @param integer $CntDay 时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
     * @param string $CntDate 执行时间 格式15:04 到分钟
     * @param string $Remark 报告说明
     * @param integer $TemplateId 模版Id
     * @param integer $ReportType 报表类型
     * @param array $AssetsId 关联的资产数组
     * @param integer $Notification 报表通知 1关闭 2开启 不变更为0
     * @param integer $MissionStart 任务起停 1:关闭 2:开启 单次报表默认为2
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
        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("CntTime",$param) and $param["CntTime"] !== null) {
            $this->CntTime = $param["CntTime"];
        }

        if (array_key_exists("CntCycle",$param) and $param["CntCycle"] !== null) {
            $this->CntCycle = $param["CntCycle"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("CntDay",$param) and $param["CntDay"] !== null) {
            $this->CntDay = $param["CntDay"];
        }

        if (array_key_exists("CntDate",$param) and $param["CntDate"] !== null) {
            $this->CntDate = $param["CntDate"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("AssetsId",$param) and $param["AssetsId"] !== null) {
            $this->AssetsId = $param["AssetsId"];
        }

        if (array_key_exists("Notification",$param) and $param["Notification"] !== null) {
            $this->Notification = $param["Notification"];
        }

        if (array_key_exists("MissionStart",$param) and $param["MissionStart"] !== null) {
            $this->MissionStart = $param["MissionStart"];
        }
    }
}
