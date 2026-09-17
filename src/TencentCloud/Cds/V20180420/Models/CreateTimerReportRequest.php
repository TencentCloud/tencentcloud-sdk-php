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
 * @method string getTplName() 获取<p>任务名称 不变更为&quot;&quot;</p>
 * @method void setTplName(string $TplName) 设置<p>任务名称 不变更为&quot;&quot;</p>
 * @method integer getCntTime() 获取<p>执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31</p>
 * @method void setCntTime(integer $CntTime) 设置<p>执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31</p>
 * @method integer getCntCycle() 获取<p>重复周期</p>
 * @method void setCntCycle(integer $CntCycle) 设置<p>重复周期</p>
 * @method string getReceivers() 获取<p>发送目标</p>
 * @method void setReceivers(string $Receivers) 设置<p>发送目标</p>
 * @method integer getCntDay() 获取<p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
 * @method void setCntDay(integer $CntDay) 设置<p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
 * @method string getCntDate() 获取<p>执行时间 格式15:04 到分钟</p>
 * @method void setCntDate(string $CntDate) 设置<p>执行时间 格式15:04 到分钟</p>
 * @method string getRemark() 获取<p>报告说明</p>
 * @method void setRemark(string $Remark) 设置<p>报告说明</p>
 * @method integer getTemplateId() 获取<p>模板Id</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>模板Id</p>
 * @method integer getReportType() 获取<p>报表类型</p>
 * @method void setReportType(integer $ReportType) 设置<p>报表类型</p>
 * @method array getAssetsId() 获取<p>关联的资产数组</p>
 * @method void setAssetsId(array $AssetsId) 设置<p>关联的资产数组</p>
 * @method integer getNotification() 获取<p>报表通知 1关闭 2开启 不变更为0</p>
 * @method void setNotification(integer $Notification) 设置<p>报表通知 1关闭 2开启 不变更为0</p>
 * @method integer getMissionStart() 获取<p>任务起停 1:关闭 2:开启 单次报表默认为2</p>
 * @method void setMissionStart(integer $MissionStart) 设置<p>任务起停 1:关闭 2:开启 单次报表默认为2</p>
 */
class CreateTimerReportRequest extends AbstractModel
{
    /**
     * @var string <p>任务名称 不变更为&quot;&quot;</p>
     */
    public $TplName;

    /**
     * @var integer <p>执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31</p>
     */
    public $CntTime;

    /**
     * @var integer <p>重复周期</p>
     */
    public $CntCycle;

    /**
     * @var string <p>发送目标</p>
     */
    public $Receivers;

    /**
     * @var integer <p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
     */
    public $CntDay;

    /**
     * @var string <p>执行时间 格式15:04 到分钟</p>
     */
    public $CntDate;

    /**
     * @var string <p>报告说明</p>
     */
    public $Remark;

    /**
     * @var integer <p>模板Id</p>
     */
    public $TemplateId;

    /**
     * @var integer <p>报表类型</p>
     */
    public $ReportType;

    /**
     * @var array <p>关联的资产数组</p>
     */
    public $AssetsId;

    /**
     * @var integer <p>报表通知 1关闭 2开启 不变更为0</p>
     */
    public $Notification;

    /**
     * @var integer <p>任务起停 1:关闭 2:开启 单次报表默认为2</p>
     */
    public $MissionStart;

    /**
     * @param string $TplName <p>任务名称 不变更为&quot;&quot;</p>
     * @param integer $CntTime <p>执行日期 重复周期为天：无意义周：星期几1-7月每月几号 1-31</p>
     * @param integer $CntCycle <p>重复周期</p>
     * @param string $Receivers <p>发送目标</p>
     * @param integer $CntDay <p>时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0</p>
     * @param string $CntDate <p>执行时间 格式15:04 到分钟</p>
     * @param string $Remark <p>报告说明</p>
     * @param integer $TemplateId <p>模板Id</p>
     * @param integer $ReportType <p>报表类型</p>
     * @param array $AssetsId <p>关联的资产数组</p>
     * @param integer $Notification <p>报表通知 1关闭 2开启 不变更为0</p>
     * @param integer $MissionStart <p>任务起停 1:关闭 2:开启 单次报表默认为2</p>
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
