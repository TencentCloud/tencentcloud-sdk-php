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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * apm实例信息
 *
 * @method float getAmountOfUsedStorage() 获取存储使用量(MB)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmountOfUsedStorage(float $AmountOfUsedStorage) 设置存储使用量(MB)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置实例名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取实例所属tag列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置实例所属tag列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getCreateUin() 获取创建人Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(string $CreateUin) 设置创建人Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceCount() 获取该实例已上报的服务端应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCount(integer $ServiceCount) 设置该实例已上报的服务端应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCountOfReportSpanPerDay() 获取日均上报Span数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountOfReportSpanPerDay(integer $CountOfReportSpanPerDay) 设置日均上报Span数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取AppId信息
 * @method void setAppId(integer $AppId) 设置AppId信息
 * @method integer getTraceDuration() 获取Trace数据保存时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceDuration(integer $TraceDuration) 设置Trace数据保存时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取实例描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置实例描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpanDailyCounters() 获取实例上报额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置实例上报额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBillingInstance() 获取实例是否开通计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingInstance(integer $BillingInstance) 设置实例是否开通计费
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrRateThreshold() 获取错误率阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置错误率阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSampleRate() 获取采样率阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleRate(integer $SampleRate) 设置采样率阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorSample() 获取是否开启错误采样 0  关 1 开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorSample(integer $ErrorSample) 设置是否开启错误采样 0  关 1 开
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSlowRequestSavedThreshold() 获取慢调用保存阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) 设置慢调用保存阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogRegion() 获取cls日志所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogRegion(string $LogRegion) 设置cls日志所在地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogSource() 获取日志来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSource(string $LogSource) 设置日志来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRelatedLog() 获取日志功能开关 0 关 | 1 开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置日志功能开关 0 关 | 1 开
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicID() 获取日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicID(string $LogTopicID) 设置日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClientCount() 获取该实例已上报的客户端应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientCount(integer $ClientCount) 设置该实例已上报的客户端应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取该实例已上报的总应用数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置该实例已上报的总应用数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApmInstanceDetail extends AbstractModel
{
    /**
     * @var float 存储使用量(MB)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AmountOfUsedStorage;

    /**
     * @var string 实例名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 实例所属tag列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 创建人Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var integer 该实例已上报的服务端应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCount;

    /**
     * @var integer 日均上报Span数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountOfReportSpanPerDay;

    /**
     * @var integer AppId信息
     */
    public $AppId;

    /**
     * @var integer Trace数据保存时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceDuration;

    /**
     * @var string 实例描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 实例上报额度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpanDailyCounters;

    /**
     * @var integer 实例是否开通计费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingInstance;

    /**
     * @var integer 错误率阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrRateThreshold;

    /**
     * @var integer 采样率阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleRate;

    /**
     * @var integer 是否开启错误采样 0  关 1 开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorSample;

    /**
     * @var integer 慢调用保存阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlowRequestSavedThreshold;

    /**
     * @var string cls日志所在地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogRegion;

    /**
     * @var string 日志来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSource;

    /**
     * @var integer 日志功能开关 0 关 | 1 开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRelatedLog;

    /**
     * @var string 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicID;

    /**
     * @var integer 该实例已上报的客户端应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientCount;

    /**
     * @var integer 该实例已上报的总应用数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param float $AmountOfUsedStorage 存储使用量(MB)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 实例名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 实例所属tag列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID
     * @param string $CreateUin 创建人Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceCount 该实例已上报的服务端应用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CountOfReportSpanPerDay 日均上报Span数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId AppId信息
     * @param integer $TraceDuration Trace数据保存时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 实例描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpanDailyCounters 实例上报额度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BillingInstance 实例是否开通计费
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrRateThreshold 错误率阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SampleRate 采样率阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorSample 是否开启错误采样 0  关 1 开
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SlowRequestSavedThreshold 慢调用保存阈值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogRegion cls日志所在地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogSource 日志来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRelatedLog 日志功能开关 0 关 | 1 开
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicID 日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClientCount 该实例已上报的客户端应用数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 该实例已上报的总应用数量
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
        if (array_key_exists("AmountOfUsedStorage",$param) and $param["AmountOfUsedStorage"] !== null) {
            $this->AmountOfUsedStorage = $param["AmountOfUsedStorage"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("CountOfReportSpanPerDay",$param) and $param["CountOfReportSpanPerDay"] !== null) {
            $this->CountOfReportSpanPerDay = $param["CountOfReportSpanPerDay"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("BillingInstance",$param) and $param["BillingInstance"] !== null) {
            $this->BillingInstance = $param["BillingInstance"];
        }

        if (array_key_exists("ErrRateThreshold",$param) and $param["ErrRateThreshold"] !== null) {
            $this->ErrRateThreshold = $param["ErrRateThreshold"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ErrorSample",$param) and $param["ErrorSample"] !== null) {
            $this->ErrorSample = $param["ErrorSample"];
        }

        if (array_key_exists("SlowRequestSavedThreshold",$param) and $param["SlowRequestSavedThreshold"] !== null) {
            $this->SlowRequestSavedThreshold = $param["SlowRequestSavedThreshold"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("ClientCount",$param) and $param["ClientCount"] !== null) {
            $this->ClientCount = $param["ClientCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
