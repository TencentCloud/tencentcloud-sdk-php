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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NDR出站数据泄露-告警事件
 *
 * @method string getRiskID() 获取风险ID
 * @method void setRiskID(string $RiskID) 设置风险ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getSrcIP() 获取源IP
 * @method void setSrcIP(string $SrcIP) 设置源IP
 * @method string getDstIPPort() 获取目的IP端口，多个以逗号连接：1.1.1.1:80,1.1.1.1:8080
 * @method void setDstIPPort(string $DstIPPort) 设置目的IP端口，多个以逗号连接：1.1.1.1:80,1.1.1.1:8080
 * @method string getHostname() 获取hostname
 * @method void setHostname(string $Hostname) 设置hostname
 * @method string getDstServiceType() 获取目的服务类型
 * @method void setDstServiceType(string $DstServiceType) 设置目的服务类型
 * @method string getDstServiceName() 获取目的服务名称
 * @method void setDstServiceName(string $DstServiceName) 设置目的服务名称
 * @method string getLeakTypeSet() 获取以逗号连接的敏感类型ID集合: 10001,10002,10003
 * @method void setLeakTypeSet(string $LeakTypeSet) 设置以逗号连接的敏感类型ID集合: 10001,10002,10003
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method string getFirstIdentificationTime() 获取首次识别时间
 * @method void setFirstIdentificationTime(string $FirstIdentificationTime) 设置首次识别时间
 * @method string getLatestIdentificationTime() 获取最近识别时间
 * @method void setLatestIdentificationTime(string $LatestIdentificationTime) 设置最近识别时间
 * @method integer getLevel() 获取风险等级
 * @method void setLevel(integer $Level) 设置风险等级
 * @method integer getStatus() 获取处置状态
 * @method void setStatus(integer $Status) 设置处置状态
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 * @method string getApiPattern() 获取API
 * @method void setApiPattern(string $ApiPattern) 设置API
 * @method integer getAnalysisStatus() 获取AI分析状态
 * @method void setAnalysisStatus(integer $AnalysisStatus) 设置AI分析状态
 * @method string getAnalysisFailReason() 获取AI分析失败原因（失败时）
 * @method void setAnalysisFailReason(string $AnalysisFailReason) 设置AI分析失败原因（失败时）
 * @method string getApiBizType() 获取API业务类型
 * @method void setApiBizType(string $ApiBizType) 设置API业务类型
 * @method string getRiskScenario() 获取风险类型（风险场景）
 * @method void setRiskScenario(string $RiskScenario) 设置风险类型（风险场景）
 * @method integer getAiSuggestedLevel() 获取AI建议风险等级
 * @method void setAiSuggestedLevel(integer $AiSuggestedLevel) 设置AI建议风险等级
 * @method string getDstGeoLocation() 获取目的IP地理信息
 * @method void setDstGeoLocation(string $DstGeoLocation) 设置目的IP地理信息
 * @method string getHighestLevel() 获取最高敏感等级
 * @method void setHighestLevel(string $HighestLevel) 设置最高敏感等级
 */
class DataLeakOutAlertEvent extends AbstractModel
{
    /**
     * @var string 风险ID
     */
    public $RiskID;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 源IP
     */
    public $SrcIP;

    /**
     * @var string 目的IP端口，多个以逗号连接：1.1.1.1:80,1.1.1.1:8080
     */
    public $DstIPPort;

    /**
     * @var string hostname
     */
    public $Hostname;

    /**
     * @var string 目的服务类型
     */
    public $DstServiceType;

    /**
     * @var string 目的服务名称
     */
    public $DstServiceName;

    /**
     * @var string 以逗号连接的敏感类型ID集合: 10001,10002,10003
     */
    public $LeakTypeSet;

    /**
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var string 首次识别时间
     */
    public $FirstIdentificationTime;

    /**
     * @var string 最近识别时间
     */
    public $LatestIdentificationTime;

    /**
     * @var integer 风险等级
     */
    public $Level;

    /**
     * @var integer 处置状态
     */
    public $Status;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @var string API
     */
    public $ApiPattern;

    /**
     * @var integer AI分析状态
     */
    public $AnalysisStatus;

    /**
     * @var string AI分析失败原因（失败时）
     */
    public $AnalysisFailReason;

    /**
     * @var string API业务类型
     */
    public $ApiBizType;

    /**
     * @var string 风险类型（风险场景）
     */
    public $RiskScenario;

    /**
     * @var integer AI建议风险等级
     */
    public $AiSuggestedLevel;

    /**
     * @var string 目的IP地理信息
     */
    public $DstGeoLocation;

    /**
     * @var string 最高敏感等级
     */
    public $HighestLevel;

    /**
     * @param string $RiskID 风险ID
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $InstanceType 实例类型
     * @param string $Region 地域
     * @param string $SrcIP 源IP
     * @param string $DstIPPort 目的IP端口，多个以逗号连接：1.1.1.1:80,1.1.1.1:8080
     * @param string $Hostname hostname
     * @param string $DstServiceType 目的服务类型
     * @param string $DstServiceName 目的服务名称
     * @param string $LeakTypeSet 以逗号连接的敏感类型ID集合: 10001,10002,10003
     * @param integer $EventCount 事件数量
     * @param string $FirstIdentificationTime 首次识别时间
     * @param string $LatestIdentificationTime 最近识别时间
     * @param integer $Level 风险等级
     * @param integer $Status 处置状态
     * @param string $Comment 备注
     * @param string $ApiPattern API
     * @param integer $AnalysisStatus AI分析状态
     * @param string $AnalysisFailReason AI分析失败原因（失败时）
     * @param string $ApiBizType API业务类型
     * @param string $RiskScenario 风险类型（风险场景）
     * @param integer $AiSuggestedLevel AI建议风险等级
     * @param string $DstGeoLocation 目的IP地理信息
     * @param string $HighestLevel 最高敏感等级
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
        if (array_key_exists("RiskID",$param) and $param["RiskID"] !== null) {
            $this->RiskID = $param["RiskID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("DstIPPort",$param) and $param["DstIPPort"] !== null) {
            $this->DstIPPort = $param["DstIPPort"];
        }

        if (array_key_exists("Hostname",$param) and $param["Hostname"] !== null) {
            $this->Hostname = $param["Hostname"];
        }

        if (array_key_exists("DstServiceType",$param) and $param["DstServiceType"] !== null) {
            $this->DstServiceType = $param["DstServiceType"];
        }

        if (array_key_exists("DstServiceName",$param) and $param["DstServiceName"] !== null) {
            $this->DstServiceName = $param["DstServiceName"];
        }

        if (array_key_exists("LeakTypeSet",$param) and $param["LeakTypeSet"] !== null) {
            $this->LeakTypeSet = $param["LeakTypeSet"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("FirstIdentificationTime",$param) and $param["FirstIdentificationTime"] !== null) {
            $this->FirstIdentificationTime = $param["FirstIdentificationTime"];
        }

        if (array_key_exists("LatestIdentificationTime",$param) and $param["LatestIdentificationTime"] !== null) {
            $this->LatestIdentificationTime = $param["LatestIdentificationTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ApiPattern",$param) and $param["ApiPattern"] !== null) {
            $this->ApiPattern = $param["ApiPattern"];
        }

        if (array_key_exists("AnalysisStatus",$param) and $param["AnalysisStatus"] !== null) {
            $this->AnalysisStatus = $param["AnalysisStatus"];
        }

        if (array_key_exists("AnalysisFailReason",$param) and $param["AnalysisFailReason"] !== null) {
            $this->AnalysisFailReason = $param["AnalysisFailReason"];
        }

        if (array_key_exists("ApiBizType",$param) and $param["ApiBizType"] !== null) {
            $this->ApiBizType = $param["ApiBizType"];
        }

        if (array_key_exists("RiskScenario",$param) and $param["RiskScenario"] !== null) {
            $this->RiskScenario = $param["RiskScenario"];
        }

        if (array_key_exists("AiSuggestedLevel",$param) and $param["AiSuggestedLevel"] !== null) {
            $this->AiSuggestedLevel = $param["AiSuggestedLevel"];
        }

        if (array_key_exists("DstGeoLocation",$param) and $param["DstGeoLocation"] !== null) {
            $this->DstGeoLocation = $param["DstGeoLocation"];
        }

        if (array_key_exists("HighestLevel",$param) and $param["HighestLevel"] !== null) {
            $this->HighestLevel = $param["HighestLevel"];
        }
    }
}
