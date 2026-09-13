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
 * DescribeNDRDataLeakOutAlertDetail返回参数结构体
 *
 * @method string getRiskID() 获取风险事件ID
 * @method void setRiskID(string $RiskID) 设置风险事件ID
 * @method string getInstanceId() 获取资产实例ID
 * @method void setInstanceId(string $InstanceId) 设置资产实例ID
 * @method string getInstanceName() 获取资产实例名称
 * @method void setInstanceName(string $InstanceName) 设置资产实例名称
 * @method string getInstanceType() 获取资产实例类型
 * @method void setInstanceType(string $InstanceType) 设置资产实例类型
 * @method string getRegion() 获取资产所在地域
 * @method void setRegion(string $Region) 设置资产所在地域
 * @method string getSrcIP() 获取源IP
 * @method void setSrcIP(string $SrcIP) 设置源IP
 * @method string getDstIPPort() 获取目的IP端口
 * @method void setDstIPPort(string $DstIPPort) 设置目的IP端口
 * @method string getHostname() 获取目的Host
 * @method void setHostname(string $Hostname) 设置目的Host
 * @method string getDstServiceType() 获取目的服务类型
 * @method void setDstServiceType(string $DstServiceType) 设置目的服务类型
 * @method string getDstServiceName() 获取目的服务名称
 * @method void setDstServiceName(string $DstServiceName) 设置目的服务名称
 * @method string getApiPattern() 获取访问API
 * @method void setApiPattern(string $ApiPattern) 设置访问API
 * @method string getDstGeoLocation() 获取目的IP地理信息
 * @method void setDstGeoLocation(string $DstGeoLocation) 设置目的IP地理信息
 * @method string getAppProto() 获取应用层协议
 * @method void setAppProto(string $AppProto) 设置应用层协议
 * @method string getLeakTypeSet() 获取敏感类型集合
 * @method void setLeakTypeSet(string $LeakTypeSet) 设置敏感类型集合
 * @method integer getEventCount() 获取事件数量
 * @method void setEventCount(integer $EventCount) 设置事件数量
 * @method integer getLeakDataCount() 获取敏感数据数量
 * @method void setLeakDataCount(integer $LeakDataCount) 设置敏感数据数量
 * @method integer getLevel() 获取原始风险等级
 * @method void setLevel(integer $Level) 设置原始风险等级
 * @method integer getStatus() 获取处置状态
 * @method void setStatus(integer $Status) 设置处置状态
 * @method string getComment() 获取处置备注
 * @method void setComment(string $Comment) 设置处置备注
 * @method string getFirstIdentificationTime() 获取首次识别时间
 * @method void setFirstIdentificationTime(string $FirstIdentificationTime) 设置首次识别时间
 * @method string getLatestIdentificationTime() 获取最近识别时间
 * @method void setLatestIdentificationTime(string $LatestIdentificationTime) 设置最近识别时间
 * @method integer getAnalysisStatus() 获取AI任务分析状态
 * @method void setAnalysisStatus(integer $AnalysisStatus) 设置AI任务分析状态
 * @method string getAnalysisFailReason() 获取AI任务失败原因
 * @method void setAnalysisFailReason(string $AnalysisFailReason) 设置AI任务失败原因
 * @method string getLastAnalysisTime() 获取最近一次AI分析时间
 * @method void setLastAnalysisTime(string $LastAnalysisTime) 设置最近一次AI分析时间
 * @method string getApiBizType() 获取API业务类型
 * @method void setApiBizType(string $ApiBizType) 设置API业务类型
 * @method string getApiBizDescription() 获取API业务描述
 * @method void setApiBizDescription(string $ApiBizDescription) 设置API业务描述
 * @method string getRiskScenario() 获取风险场景（类型）
 * @method void setRiskScenario(string $RiskScenario) 设置风险场景（类型）
 * @method string getRiskScenarioDetail() 获取风险场景（类型）描述
 * @method void setRiskScenarioDetail(string $RiskScenarioDetail) 设置风险场景（类型）描述
 * @method string getRiskSummary() 获取风险总结（概览）
 * @method void setRiskSummary(string $RiskSummary) 设置风险总结（概览）
 * @method string getRiskBasis() 获取推断依据
 * @method void setRiskBasis(string $RiskBasis) 设置推断依据
 * @method string getImpactScope() 获取风险影响范围
 * @method void setImpactScope(string $ImpactScope) 设置风险影响范围
 * @method integer getAiSuggestedLevel() 获取AI建议风险等级
 * @method void setAiSuggestedLevel(integer $AiSuggestedLevel) 设置AI建议风险等级
 * @method array getDisposalSuggestions() 获取处置建议
 * @method void setDisposalSuggestions(array $DisposalSuggestions) 设置处置建议
 * @method string getHttpRequestHeader() 获取http请求头
 * @method void setHttpRequestHeader(string $HttpRequestHeader) 设置http请求头
 * @method string getHttpRequestBody() 获取http请求体
 * @method void setHttpRequestBody(string $HttpRequestBody) 设置http请求体
 * @method string getHttpResponseHeader() 获取http响应头
 * @method void setHttpResponseHeader(string $HttpResponseHeader) 设置http响应头
 * @method string getHttpResponseBody() 获取http响应体
 * @method void setHttpResponseBody(string $HttpResponseBody) 设置http响应体
 * @method string getLeakDataEntries() 获取敏感数据条目
 * @method void setLeakDataEntries(string $LeakDataEntries) 设置敏感数据条目
 * @method string getMaskStatus() 获取脱敏状态
 * @method void setMaskStatus(string $MaskStatus) 设置脱敏状态
 * @method string getHighestLevel() 获取最高敏感等级
 * @method void setHighestLevel(string $HighestLevel) 设置最高敏感等级
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNDRDataLeakOutAlertDetailResponse extends AbstractModel
{
    /**
     * @var string 风险事件ID
     */
    public $RiskID;

    /**
     * @var string 资产实例ID
     */
    public $InstanceId;

    /**
     * @var string 资产实例名称
     */
    public $InstanceName;

    /**
     * @var string 资产实例类型
     */
    public $InstanceType;

    /**
     * @var string 资产所在地域
     */
    public $Region;

    /**
     * @var string 源IP
     */
    public $SrcIP;

    /**
     * @var string 目的IP端口
     */
    public $DstIPPort;

    /**
     * @var string 目的Host
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
     * @var string 访问API
     */
    public $ApiPattern;

    /**
     * @var string 目的IP地理信息
     */
    public $DstGeoLocation;

    /**
     * @var string 应用层协议
     */
    public $AppProto;

    /**
     * @var string 敏感类型集合
     */
    public $LeakTypeSet;

    /**
     * @var integer 事件数量
     */
    public $EventCount;

    /**
     * @var integer 敏感数据数量
     */
    public $LeakDataCount;

    /**
     * @var integer 原始风险等级
     */
    public $Level;

    /**
     * @var integer 处置状态
     */
    public $Status;

    /**
     * @var string 处置备注
     */
    public $Comment;

    /**
     * @var string 首次识别时间
     */
    public $FirstIdentificationTime;

    /**
     * @var string 最近识别时间
     */
    public $LatestIdentificationTime;

    /**
     * @var integer AI任务分析状态
     */
    public $AnalysisStatus;

    /**
     * @var string AI任务失败原因
     */
    public $AnalysisFailReason;

    /**
     * @var string 最近一次AI分析时间
     */
    public $LastAnalysisTime;

    /**
     * @var string API业务类型
     */
    public $ApiBizType;

    /**
     * @var string API业务描述
     */
    public $ApiBizDescription;

    /**
     * @var string 风险场景（类型）
     */
    public $RiskScenario;

    /**
     * @var string 风险场景（类型）描述
     */
    public $RiskScenarioDetail;

    /**
     * @var string 风险总结（概览）
     */
    public $RiskSummary;

    /**
     * @var string 推断依据
     */
    public $RiskBasis;

    /**
     * @var string 风险影响范围
     */
    public $ImpactScope;

    /**
     * @var integer AI建议风险等级
     */
    public $AiSuggestedLevel;

    /**
     * @var array 处置建议
     */
    public $DisposalSuggestions;

    /**
     * @var string http请求头
     */
    public $HttpRequestHeader;

    /**
     * @var string http请求体
     */
    public $HttpRequestBody;

    /**
     * @var string http响应头
     */
    public $HttpResponseHeader;

    /**
     * @var string http响应体
     */
    public $HttpResponseBody;

    /**
     * @var string 敏感数据条目
     */
    public $LeakDataEntries;

    /**
     * @var string 脱敏状态
     */
    public $MaskStatus;

    /**
     * @var string 最高敏感等级
     */
    public $HighestLevel;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RiskID 风险事件ID
     * @param string $InstanceId 资产实例ID
     * @param string $InstanceName 资产实例名称
     * @param string $InstanceType 资产实例类型
     * @param string $Region 资产所在地域
     * @param string $SrcIP 源IP
     * @param string $DstIPPort 目的IP端口
     * @param string $Hostname 目的Host
     * @param string $DstServiceType 目的服务类型
     * @param string $DstServiceName 目的服务名称
     * @param string $ApiPattern 访问API
     * @param string $DstGeoLocation 目的IP地理信息
     * @param string $AppProto 应用层协议
     * @param string $LeakTypeSet 敏感类型集合
     * @param integer $EventCount 事件数量
     * @param integer $LeakDataCount 敏感数据数量
     * @param integer $Level 原始风险等级
     * @param integer $Status 处置状态
     * @param string $Comment 处置备注
     * @param string $FirstIdentificationTime 首次识别时间
     * @param string $LatestIdentificationTime 最近识别时间
     * @param integer $AnalysisStatus AI任务分析状态
     * @param string $AnalysisFailReason AI任务失败原因
     * @param string $LastAnalysisTime 最近一次AI分析时间
     * @param string $ApiBizType API业务类型
     * @param string $ApiBizDescription API业务描述
     * @param string $RiskScenario 风险场景（类型）
     * @param string $RiskScenarioDetail 风险场景（类型）描述
     * @param string $RiskSummary 风险总结（概览）
     * @param string $RiskBasis 推断依据
     * @param string $ImpactScope 风险影响范围
     * @param integer $AiSuggestedLevel AI建议风险等级
     * @param array $DisposalSuggestions 处置建议
     * @param string $HttpRequestHeader http请求头
     * @param string $HttpRequestBody http请求体
     * @param string $HttpResponseHeader http响应头
     * @param string $HttpResponseBody http响应体
     * @param string $LeakDataEntries 敏感数据条目
     * @param string $MaskStatus 脱敏状态
     * @param string $HighestLevel 最高敏感等级
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ApiPattern",$param) and $param["ApiPattern"] !== null) {
            $this->ApiPattern = $param["ApiPattern"];
        }

        if (array_key_exists("DstGeoLocation",$param) and $param["DstGeoLocation"] !== null) {
            $this->DstGeoLocation = $param["DstGeoLocation"];
        }

        if (array_key_exists("AppProto",$param) and $param["AppProto"] !== null) {
            $this->AppProto = $param["AppProto"];
        }

        if (array_key_exists("LeakTypeSet",$param) and $param["LeakTypeSet"] !== null) {
            $this->LeakTypeSet = $param["LeakTypeSet"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("LeakDataCount",$param) and $param["LeakDataCount"] !== null) {
            $this->LeakDataCount = $param["LeakDataCount"];
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

        if (array_key_exists("FirstIdentificationTime",$param) and $param["FirstIdentificationTime"] !== null) {
            $this->FirstIdentificationTime = $param["FirstIdentificationTime"];
        }

        if (array_key_exists("LatestIdentificationTime",$param) and $param["LatestIdentificationTime"] !== null) {
            $this->LatestIdentificationTime = $param["LatestIdentificationTime"];
        }

        if (array_key_exists("AnalysisStatus",$param) and $param["AnalysisStatus"] !== null) {
            $this->AnalysisStatus = $param["AnalysisStatus"];
        }

        if (array_key_exists("AnalysisFailReason",$param) and $param["AnalysisFailReason"] !== null) {
            $this->AnalysisFailReason = $param["AnalysisFailReason"];
        }

        if (array_key_exists("LastAnalysisTime",$param) and $param["LastAnalysisTime"] !== null) {
            $this->LastAnalysisTime = $param["LastAnalysisTime"];
        }

        if (array_key_exists("ApiBizType",$param) and $param["ApiBizType"] !== null) {
            $this->ApiBizType = $param["ApiBizType"];
        }

        if (array_key_exists("ApiBizDescription",$param) and $param["ApiBizDescription"] !== null) {
            $this->ApiBizDescription = $param["ApiBizDescription"];
        }

        if (array_key_exists("RiskScenario",$param) and $param["RiskScenario"] !== null) {
            $this->RiskScenario = $param["RiskScenario"];
        }

        if (array_key_exists("RiskScenarioDetail",$param) and $param["RiskScenarioDetail"] !== null) {
            $this->RiskScenarioDetail = $param["RiskScenarioDetail"];
        }

        if (array_key_exists("RiskSummary",$param) and $param["RiskSummary"] !== null) {
            $this->RiskSummary = $param["RiskSummary"];
        }

        if (array_key_exists("RiskBasis",$param) and $param["RiskBasis"] !== null) {
            $this->RiskBasis = $param["RiskBasis"];
        }

        if (array_key_exists("ImpactScope",$param) and $param["ImpactScope"] !== null) {
            $this->ImpactScope = $param["ImpactScope"];
        }

        if (array_key_exists("AiSuggestedLevel",$param) and $param["AiSuggestedLevel"] !== null) {
            $this->AiSuggestedLevel = $param["AiSuggestedLevel"];
        }

        if (array_key_exists("DisposalSuggestions",$param) and $param["DisposalSuggestions"] !== null) {
            $this->DisposalSuggestions = [];
            foreach ($param["DisposalSuggestions"] as $key => $value){
                $obj = new DisposalSuggestionItem();
                $obj->deserialize($value);
                array_push($this->DisposalSuggestions, $obj);
            }
        }

        if (array_key_exists("HttpRequestHeader",$param) and $param["HttpRequestHeader"] !== null) {
            $this->HttpRequestHeader = $param["HttpRequestHeader"];
        }

        if (array_key_exists("HttpRequestBody",$param) and $param["HttpRequestBody"] !== null) {
            $this->HttpRequestBody = $param["HttpRequestBody"];
        }

        if (array_key_exists("HttpResponseHeader",$param) and $param["HttpResponseHeader"] !== null) {
            $this->HttpResponseHeader = $param["HttpResponseHeader"];
        }

        if (array_key_exists("HttpResponseBody",$param) and $param["HttpResponseBody"] !== null) {
            $this->HttpResponseBody = $param["HttpResponseBody"];
        }

        if (array_key_exists("LeakDataEntries",$param) and $param["LeakDataEntries"] !== null) {
            $this->LeakDataEntries = $param["LeakDataEntries"];
        }

        if (array_key_exists("MaskStatus",$param) and $param["MaskStatus"] !== null) {
            $this->MaskStatus = $param["MaskStatus"];
        }

        if (array_key_exists("HighestLevel",$param) and $param["HighestLevel"] !== null) {
            $this->HighestLevel = $param["HighestLevel"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
