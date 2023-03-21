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
 * ModifyApmInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getName() 获取实例名
 * @method void setName(string $Name) 设置实例名
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getDescription() 获取实例详情
 * @method void setDescription(string $Description) 设置实例详情
 * @method integer getTraceDuration() 获取Trace数据保存时长
 * @method void setTraceDuration(integer $TraceDuration) 设置Trace数据保存时长
 * @method boolean getOpenBilling() 获取是否开启计费
 * @method void setOpenBilling(boolean $OpenBilling) 设置是否开启计费
 * @method integer getSpanDailyCounters() 获取实例上报额度
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置实例上报额度
 * @method integer getErrRateThreshold() 获取错误率阈值
 * @method void setErrRateThreshold(integer $ErrRateThreshold) 设置错误率阈值
 * @method integer getSampleRate() 获取采样率
 * @method void setSampleRate(integer $SampleRate) 设置采样率
 * @method integer getErrorSample() 获取是否开启错误采样 0 关 1 开
 * @method void setErrorSample(integer $ErrorSample) 设置是否开启错误采样 0 关 1 开
 * @method integer getSlowRequestSavedThreshold() 获取慢请求阈值
 * @method void setSlowRequestSavedThreshold(integer $SlowRequestSavedThreshold) 设置慢请求阈值
 * @method integer getIsRelatedLog() 获取是否开启日志功能 0 关 1 开
 * @method void setIsRelatedLog(integer $IsRelatedLog) 设置是否开启日志功能 0 关 1 开
 * @method string getLogRegion() 获取日志地域
 * @method void setLogRegion(string $LogRegion) 设置日志地域
 * @method string getLogTopicID() 获取CLS日志主题ID | ES 索引名
 * @method void setLogTopicID(string $LogTopicID) 设置CLS日志主题ID | ES 索引名
 * @method string getLogSet() 获取CLS日志集 | ES集群ID
 * @method void setLogSet(string $LogSet) 设置CLS日志集 | ES集群ID
 * @method string getLogSource() 获取CLS | ES
 * @method void setLogSource(string $LogSource) 设置CLS | ES
 */
class ModifyApmInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $Name;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string 实例详情
     */
    public $Description;

    /**
     * @var integer Trace数据保存时长
     */
    public $TraceDuration;

    /**
     * @var boolean 是否开启计费
     */
    public $OpenBilling;

    /**
     * @var integer 实例上报额度
     */
    public $SpanDailyCounters;

    /**
     * @var integer 错误率阈值
     */
    public $ErrRateThreshold;

    /**
     * @var integer 采样率
     */
    public $SampleRate;

    /**
     * @var integer 是否开启错误采样 0 关 1 开
     */
    public $ErrorSample;

    /**
     * @var integer 慢请求阈值
     */
    public $SlowRequestSavedThreshold;

    /**
     * @var integer 是否开启日志功能 0 关 1 开
     */
    public $IsRelatedLog;

    /**
     * @var string 日志地域
     */
    public $LogRegion;

    /**
     * @var string CLS日志主题ID | ES 索引名
     */
    public $LogTopicID;

    /**
     * @var string CLS日志集 | ES集群ID
     */
    public $LogSet;

    /**
     * @var string CLS | ES
     */
    public $LogSource;

    /**
     * @param string $InstanceId 实例ID
     * @param string $Name 实例名
     * @param array $Tags 标签列表
     * @param string $Description 实例详情
     * @param integer $TraceDuration Trace数据保存时长
     * @param boolean $OpenBilling 是否开启计费
     * @param integer $SpanDailyCounters 实例上报额度
     * @param integer $ErrRateThreshold 错误率阈值
     * @param integer $SampleRate 采样率
     * @param integer $ErrorSample 是否开启错误采样 0 关 1 开
     * @param integer $SlowRequestSavedThreshold 慢请求阈值
     * @param integer $IsRelatedLog 是否开启日志功能 0 关 1 开
     * @param string $LogRegion 日志地域
     * @param string $LogTopicID CLS日志主题ID | ES 索引名
     * @param string $LogSet CLS日志集 | ES集群ID
     * @param string $LogSource CLS | ES
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("OpenBilling",$param) and $param["OpenBilling"] !== null) {
            $this->OpenBilling = $param["OpenBilling"];
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
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

        if (array_key_exists("IsRelatedLog",$param) and $param["IsRelatedLog"] !== null) {
            $this->IsRelatedLog = $param["IsRelatedLog"];
        }

        if (array_key_exists("LogRegion",$param) and $param["LogRegion"] !== null) {
            $this->LogRegion = $param["LogRegion"];
        }

        if (array_key_exists("LogTopicID",$param) and $param["LogTopicID"] !== null) {
            $this->LogTopicID = $param["LogTopicID"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = $param["LogSet"];
        }

        if (array_key_exists("LogSource",$param) and $param["LogSource"] !== null) {
            $this->LogSource = $param["LogSource"];
        }
    }
}
