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
 * 报表列表字段数组
 *
 * @method integer getAddTime() 获取生成时间
 * @method void setAddTime(integer $AddTime) 设置生成时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getId() 获取报告 ID
 * @method void setId(integer $Id) 设置报告 ID
 * @method integer getInstanceId() 获取审计 ID
 * @method void setInstanceId(integer $InstanceId) 设置审计 ID
 * @method integer getIsDelete() 获取是否已删除
 * @method void setIsDelete(integer $IsDelete) 设置是否已删除
 * @method string getReceivers() 获取发送目标
 * @method void setReceivers(string $Receivers) 设置发送目标
 * @method string getRemark() 获取报告说明
 * @method void setRemark(string $Remark) 设置报告说明
 * @method string getReportFile() 获取报告文件
 * @method void setReportFile(string $ReportFile) 设置报告文件
 * @method integer getReportStatus() 获取状态
 * @method void setReportStatus(integer $ReportStatus) 设置状态
 * @method integer getReportTmpStatus() 获取状态
 * @method void setReportTmpStatus(integer $ReportTmpStatus) 设置状态
 * @method integer getReportType() 获取报告类型
 * @method void setReportType(integer $ReportType) 设置报告类型
 * @method string getSendResult() 获取发送结果
 * @method void setSendResult(string $SendResult) 设置发送结果
 * @method string getSendType() 获取发送类型
 * @method void setSendType(string $SendType) 设置发送类型
 * @method integer getStartTime() 获取开始时间
 * @method void setStartTime(integer $StartTime) 设置开始时间
 * @method string getTitle() 获取报告名称
 * @method void setTitle(string $Title) 设置报告名称
 * @method integer getTemplateId() 获取报表模板
 * @method void setTemplateId(integer $TemplateId) 设置报表模板
 * @method array getAssetsList() 获取包含资产
 * @method void setAssetsList(array $AssetsList) 设置包含资产
 * @method integer getCntDay() 获取时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
 * @method void setCntDay(integer $CntDay) 设置时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
 */
class Reports extends AbstractModel
{
    /**
     * @var integer 生成时间
     */
    public $AddTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 报告 ID
     */
    public $Id;

    /**
     * @var integer 审计 ID
     */
    public $InstanceId;

    /**
     * @var integer 是否已删除
     */
    public $IsDelete;

    /**
     * @var string 发送目标
     */
    public $Receivers;

    /**
     * @var string 报告说明
     */
    public $Remark;

    /**
     * @var string 报告文件
     */
    public $ReportFile;

    /**
     * @var integer 状态
     */
    public $ReportStatus;

    /**
     * @var integer 状态
     */
    public $ReportTmpStatus;

    /**
     * @var integer 报告类型
     */
    public $ReportType;

    /**
     * @var string 发送结果
     */
    public $SendResult;

    /**
     * @var string 发送类型
     */
    public $SendType;

    /**
     * @var integer 开始时间
     */
    public $StartTime;

    /**
     * @var string 报告名称
     */
    public $Title;

    /**
     * @var integer 报表模板
     */
    public $TemplateId;

    /**
     * @var array 包含资产
     */
    public $AssetsList;

    /**
     * @var integer 时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
     */
    public $CntDay;

    /**
     * @param integer $AddTime 生成时间
     * @param integer $EndTime 结束时间
     * @param integer $Id 报告 ID
     * @param integer $InstanceId 审计 ID
     * @param integer $IsDelete 是否已删除
     * @param string $Receivers 发送目标
     * @param string $Remark 报告说明
     * @param string $ReportFile 报告文件
     * @param integer $ReportStatus 状态
     * @param integer $ReportTmpStatus 状态
     * @param integer $ReportType 报告类型
     * @param string $SendResult 发送结果
     * @param string $SendType 发送类型
     * @param integer $StartTime 开始时间
     * @param string $Title 报告名称
     * @param integer $TemplateId 报表模板
     * @param array $AssetsList 包含资产
     * @param integer $CntDay 时间范围 1:24小时 7:近一周 30:近30天 90:近90天 180:近180天 不变更为0
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
        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IsDelete",$param) and $param["IsDelete"] !== null) {
            $this->IsDelete = $param["IsDelete"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReportFile",$param) and $param["ReportFile"] !== null) {
            $this->ReportFile = $param["ReportFile"];
        }

        if (array_key_exists("ReportStatus",$param) and $param["ReportStatus"] !== null) {
            $this->ReportStatus = $param["ReportStatus"];
        }

        if (array_key_exists("ReportTmpStatus",$param) and $param["ReportTmpStatus"] !== null) {
            $this->ReportTmpStatus = $param["ReportTmpStatus"];
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("SendResult",$param) and $param["SendResult"] !== null) {
            $this->SendResult = $param["SendResult"];
        }

        if (array_key_exists("SendType",$param) and $param["SendType"] !== null) {
            $this->SendType = $param["SendType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
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

        if (array_key_exists("CntDay",$param) and $param["CntDay"] !== null) {
            $this->CntDay = $param["CntDay"];
        }
    }
}
