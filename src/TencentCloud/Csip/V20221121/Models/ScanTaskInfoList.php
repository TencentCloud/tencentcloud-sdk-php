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
 * 扫描任务列表展示信息
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getStartTime() 获取任务开始时间
 * @method void setStartTime(string $StartTime) 设置任务开始时间
 * @method string getEndTime() 获取任务结束时间
 * @method void setEndTime(string $EndTime) 设置任务结束时间
 * @method string getScanPlanContent() 获取cron格式
 * @method void setScanPlanContent(string $ScanPlanContent) 设置cron格式
 * @method integer getTaskType() 获取0-周期任务,1-立即扫描,2-定时扫描,3-自定义
 * @method void setTaskType(integer $TaskType) 设置0-周期任务,1-立即扫描,2-定时扫描,3-自定义
 * @method string getInsertTime() 获取创建时间
 * @method void setInsertTime(string $InsertTime) 设置创建时间
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method array getSelfDefiningAssets() 获取自定义指定扫描资产信息
 * @method void setSelfDefiningAssets(array $SelfDefiningAssets) 设置自定义指定扫描资产信息
 * @method integer getPredictTime() 获取预估时间
 * @method void setPredictTime(integer $PredictTime) 设置预估时间
 * @method string getPredictEndTime() 获取预估完成时间
 * @method void setPredictEndTime(string $PredictEndTime) 设置预估完成时间
 * @method integer getReportNumber() 获取报告数量
 * @method void setReportNumber(integer $ReportNumber) 设置报告数量
 * @method integer getAssetNumber() 获取资产数量
 * @method void setAssetNumber(integer $AssetNumber) 设置资产数量
 * @method integer getScanStatus() 获取扫描状态, 0-初始值，1-正在扫描，2-扫描完成，3-扫描出错，4-停止扫描
 * @method void setScanStatus(integer $ScanStatus) 设置扫描状态, 0-初始值，1-正在扫描，2-扫描完成，3-扫描出错，4-停止扫描
 * @method float getPercent() 获取任务进度
 * @method void setPercent(float $Percent) 设置任务进度
 * @method string getScanItem() 获取port/poc/weakpass/webcontent/configrisk
 * @method void setScanItem(string $ScanItem) 设置port/poc/weakpass/webcontent/configrisk
 * @method integer getScanAssetType() 获取0-全扫，1-指定资产扫，2-排除资产扫，3-自定义指定资产扫描
 * @method void setScanAssetType(integer $ScanAssetType) 设置0-全扫，1-指定资产扫，2-排除资产扫，3-自定义指定资产扫描
 * @method string getVSSTaskId() 获取vss子任务id
 * @method void setVSSTaskId(string $VSSTaskId) 设置vss子任务id
 * @method string getCSPMTaskId() 获取cspm子任务id
 * @method void setCSPMTaskId(string $CSPMTaskId) 设置cspm子任务id
 * @method string getCWPPOCId() 获取主机漏扫子任务id
 * @method void setCWPPOCId(string $CWPPOCId) 设置主机漏扫子任务id
 * @method string getCWPBlId() 获取主机基线子任务id
 * @method void setCWPBlId(string $CWPBlId) 设置主机基线子任务id
 * @method integer getVSSTaskProcess() 获取vss子任务进度
 * @method void setVSSTaskProcess(integer $VSSTaskProcess) 设置vss子任务进度
 * @method integer getCSPMTaskProcess() 获取cspm子任务进度
 * @method void setCSPMTaskProcess(integer $CSPMTaskProcess) 设置cspm子任务进度
 * @method integer getCWPPOCProcess() 获取主机漏扫子任务进度
 * @method void setCWPPOCProcess(integer $CWPPOCProcess) 设置主机漏扫子任务进度
 * @method integer getCWPBlProcess() 获取主机基线子任务进度
 * @method void setCWPBlProcess(integer $CWPBlProcess) 设置主机基线子任务进度
 * @method integer getErrorCode() 获取异常状态码
 * @method void setErrorCode(integer $ErrorCode) 设置异常状态码
 * @method string getErrorInfo() 获取异常信息
 * @method void setErrorInfo(string $ErrorInfo) 设置异常信息
 * @method integer getStartDay() 获取周期任务开始的天数
 * @method void setStartDay(integer $StartDay) 设置周期任务开始的天数
 * @method integer getFrequency() 获取扫描频率,单位天,1-每天,7-每周,30-月,0-扫描一次
 * @method void setFrequency(integer $Frequency) 设置扫描频率,单位天,1-每天,7-每周,30-月,0-扫描一次
 * @method integer getCompleteNumber() 获取完成次数
 * @method void setCompleteNumber(integer $CompleteNumber) 设置完成次数
 * @method integer getCompleteAssetNumber() 获取已完成资产个数
 * @method void setCompleteAssetNumber(integer $CompleteAssetNumber) 设置已完成资产个数
 * @method integer getRiskCount() 获取风险数
 * @method void setRiskCount(integer $RiskCount) 设置风险数
 * @method array getAssets() 获取资产
 * @method void setAssets(array $Assets) 设置资产
 * @method string getAppId() 获取用户Appid
 * @method void setAppId(string $AppId) 设置用户Appid
 * @method string getUIN() 获取用户主账户ID
 * @method void setUIN(string $UIN) 设置用户主账户ID
 * @method string getUserName() 获取用户名称
 * @method void setUserName(string $UserName) 设置用户名称
 * @method integer getTaskMode() 获取体检模式，0-标准模式，1-快速模式，2-高级模式
 * @method void setTaskMode(integer $TaskMode) 设置体检模式，0-标准模式，1-快速模式，2-高级模式
 * @method string getScanFrom() 获取扫描来源
 * @method void setScanFrom(string $ScanFrom) 设置扫描来源
 * @method integer getIsFree() 获取是否限免体检0不是，1是
 * @method void setIsFree(integer $IsFree) 设置是否限免体检0不是，1是
 * @method integer getIsDelete() 获取是否可以删除，1-可以，0-不可以，对应多账户管理使用
 * @method void setIsDelete(integer $IsDelete) 设置是否可以删除，1-可以，0-不可以，对应多账户管理使用
 * @method integer getSourceType() 获取任务源类型，0-默认，1-小助手，2-体检项
 * @method void setSourceType(integer $SourceType) 设置任务源类型，0-默认，1-小助手，2-体检项
 */
class ScanTaskInfoList extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务开始时间
     */
    public $StartTime;

    /**
     * @var string 任务结束时间
     */
    public $EndTime;

    /**
     * @var string cron格式
     */
    public $ScanPlanContent;

    /**
     * @var integer 0-周期任务,1-立即扫描,2-定时扫描,3-自定义
     */
    public $TaskType;

    /**
     * @var string 创建时间
     */
    public $InsertTime;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var array 自定义指定扫描资产信息
     */
    public $SelfDefiningAssets;

    /**
     * @var integer 预估时间
     */
    public $PredictTime;

    /**
     * @var string 预估完成时间
     */
    public $PredictEndTime;

    /**
     * @var integer 报告数量
     */
    public $ReportNumber;

    /**
     * @var integer 资产数量
     */
    public $AssetNumber;

    /**
     * @var integer 扫描状态, 0-初始值，1-正在扫描，2-扫描完成，3-扫描出错，4-停止扫描
     */
    public $ScanStatus;

    /**
     * @var float 任务进度
     */
    public $Percent;

    /**
     * @var string port/poc/weakpass/webcontent/configrisk
     */
    public $ScanItem;

    /**
     * @var integer 0-全扫，1-指定资产扫，2-排除资产扫，3-自定义指定资产扫描
     */
    public $ScanAssetType;

    /**
     * @var string vss子任务id
     */
    public $VSSTaskId;

    /**
     * @var string cspm子任务id
     */
    public $CSPMTaskId;

    /**
     * @var string 主机漏扫子任务id
     */
    public $CWPPOCId;

    /**
     * @var string 主机基线子任务id
     */
    public $CWPBlId;

    /**
     * @var integer vss子任务进度
     */
    public $VSSTaskProcess;

    /**
     * @var integer cspm子任务进度
     */
    public $CSPMTaskProcess;

    /**
     * @var integer 主机漏扫子任务进度
     */
    public $CWPPOCProcess;

    /**
     * @var integer 主机基线子任务进度
     */
    public $CWPBlProcess;

    /**
     * @var integer 异常状态码
     */
    public $ErrorCode;

    /**
     * @var string 异常信息
     */
    public $ErrorInfo;

    /**
     * @var integer 周期任务开始的天数
     */
    public $StartDay;

    /**
     * @var integer 扫描频率,单位天,1-每天,7-每周,30-月,0-扫描一次
     */
    public $Frequency;

    /**
     * @var integer 完成次数
     */
    public $CompleteNumber;

    /**
     * @var integer 已完成资产个数
     */
    public $CompleteAssetNumber;

    /**
     * @var integer 风险数
     */
    public $RiskCount;

    /**
     * @var array 资产
     */
    public $Assets;

    /**
     * @var string 用户Appid
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
     * @var integer 体检模式，0-标准模式，1-快速模式，2-高级模式
     */
    public $TaskMode;

    /**
     * @var string 扫描来源
     */
    public $ScanFrom;

    /**
     * @var integer 是否限免体检0不是，1是
     */
    public $IsFree;

    /**
     * @var integer 是否可以删除，1-可以，0-不可以，对应多账户管理使用
     */
    public $IsDelete;

    /**
     * @var integer 任务源类型，0-默认，1-小助手，2-体检项
     */
    public $SourceType;

    /**
     * @param string $TaskName 任务名称
     * @param string $StartTime 任务开始时间
     * @param string $EndTime 任务结束时间
     * @param string $ScanPlanContent cron格式
     * @param integer $TaskType 0-周期任务,1-立即扫描,2-定时扫描,3-自定义
     * @param string $InsertTime 创建时间
     * @param string $TaskId 任务ID
     * @param array $SelfDefiningAssets 自定义指定扫描资产信息
     * @param integer $PredictTime 预估时间
     * @param string $PredictEndTime 预估完成时间
     * @param integer $ReportNumber 报告数量
     * @param integer $AssetNumber 资产数量
     * @param integer $ScanStatus 扫描状态, 0-初始值，1-正在扫描，2-扫描完成，3-扫描出错，4-停止扫描
     * @param float $Percent 任务进度
     * @param string $ScanItem port/poc/weakpass/webcontent/configrisk
     * @param integer $ScanAssetType 0-全扫，1-指定资产扫，2-排除资产扫，3-自定义指定资产扫描
     * @param string $VSSTaskId vss子任务id
     * @param string $CSPMTaskId cspm子任务id
     * @param string $CWPPOCId 主机漏扫子任务id
     * @param string $CWPBlId 主机基线子任务id
     * @param integer $VSSTaskProcess vss子任务进度
     * @param integer $CSPMTaskProcess cspm子任务进度
     * @param integer $CWPPOCProcess 主机漏扫子任务进度
     * @param integer $CWPBlProcess 主机基线子任务进度
     * @param integer $ErrorCode 异常状态码
     * @param string $ErrorInfo 异常信息
     * @param integer $StartDay 周期任务开始的天数
     * @param integer $Frequency 扫描频率,单位天,1-每天,7-每周,30-月,0-扫描一次
     * @param integer $CompleteNumber 完成次数
     * @param integer $CompleteAssetNumber 已完成资产个数
     * @param integer $RiskCount 风险数
     * @param array $Assets 资产
     * @param string $AppId 用户Appid
     * @param string $UIN 用户主账户ID
     * @param string $UserName 用户名称
     * @param integer $TaskMode 体检模式，0-标准模式，1-快速模式，2-高级模式
     * @param string $ScanFrom 扫描来源
     * @param integer $IsFree 是否限免体检0不是，1是
     * @param integer $IsDelete 是否可以删除，1-可以，0-不可以，对应多账户管理使用
     * @param integer $SourceType 任务源类型，0-默认，1-小助手，2-体检项
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ScanPlanContent",$param) and $param["ScanPlanContent"] !== null) {
            $this->ScanPlanContent = $param["ScanPlanContent"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SelfDefiningAssets",$param) and $param["SelfDefiningAssets"] !== null) {
            $this->SelfDefiningAssets = $param["SelfDefiningAssets"];
        }

        if (array_key_exists("PredictTime",$param) and $param["PredictTime"] !== null) {
            $this->PredictTime = $param["PredictTime"];
        }

        if (array_key_exists("PredictEndTime",$param) and $param["PredictEndTime"] !== null) {
            $this->PredictEndTime = $param["PredictEndTime"];
        }

        if (array_key_exists("ReportNumber",$param) and $param["ReportNumber"] !== null) {
            $this->ReportNumber = $param["ReportNumber"];
        }

        if (array_key_exists("AssetNumber",$param) and $param["AssetNumber"] !== null) {
            $this->AssetNumber = $param["AssetNumber"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("ScanItem",$param) and $param["ScanItem"] !== null) {
            $this->ScanItem = $param["ScanItem"];
        }

        if (array_key_exists("ScanAssetType",$param) and $param["ScanAssetType"] !== null) {
            $this->ScanAssetType = $param["ScanAssetType"];
        }

        if (array_key_exists("VSSTaskId",$param) and $param["VSSTaskId"] !== null) {
            $this->VSSTaskId = $param["VSSTaskId"];
        }

        if (array_key_exists("CSPMTaskId",$param) and $param["CSPMTaskId"] !== null) {
            $this->CSPMTaskId = $param["CSPMTaskId"];
        }

        if (array_key_exists("CWPPOCId",$param) and $param["CWPPOCId"] !== null) {
            $this->CWPPOCId = $param["CWPPOCId"];
        }

        if (array_key_exists("CWPBlId",$param) and $param["CWPBlId"] !== null) {
            $this->CWPBlId = $param["CWPBlId"];
        }

        if (array_key_exists("VSSTaskProcess",$param) and $param["VSSTaskProcess"] !== null) {
            $this->VSSTaskProcess = $param["VSSTaskProcess"];
        }

        if (array_key_exists("CSPMTaskProcess",$param) and $param["CSPMTaskProcess"] !== null) {
            $this->CSPMTaskProcess = $param["CSPMTaskProcess"];
        }

        if (array_key_exists("CWPPOCProcess",$param) and $param["CWPPOCProcess"] !== null) {
            $this->CWPPOCProcess = $param["CWPPOCProcess"];
        }

        if (array_key_exists("CWPBlProcess",$param) and $param["CWPBlProcess"] !== null) {
            $this->CWPBlProcess = $param["CWPBlProcess"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("StartDay",$param) and $param["StartDay"] !== null) {
            $this->StartDay = $param["StartDay"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("CompleteNumber",$param) and $param["CompleteNumber"] !== null) {
            $this->CompleteNumber = $param["CompleteNumber"];
        }

        if (array_key_exists("CompleteAssetNumber",$param) and $param["CompleteAssetNumber"] !== null) {
            $this->CompleteAssetNumber = $param["CompleteAssetNumber"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("Assets",$param) and $param["Assets"] !== null) {
            $this->Assets = [];
            foreach ($param["Assets"] as $key => $value){
                $obj = new TaskAssetObject();
                $obj->deserialize($value);
                array_push($this->Assets, $obj);
            }
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

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("ScanFrom",$param) and $param["ScanFrom"] !== null) {
            $this->ScanFrom = $param["ScanFrom"];
        }

        if (array_key_exists("IsFree",$param) and $param["IsFree"] !== null) {
            $this->IsFree = $param["IsFree"];
        }

        if (array_key_exists("IsDelete",$param) and $param["IsDelete"] !== null) {
            $this->IsDelete = $param["IsDelete"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
