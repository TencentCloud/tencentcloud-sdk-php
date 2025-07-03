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
 * Span 对象
 *
 * @method string getTraceID() 获取Trace ID
 * @method void setTraceID(string $TraceID) 设置Trace ID
 * @method array getLogs() 获取日志
 * @method void setLogs(array $Logs) 设置日志
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method SpanProcess getProcess() 获取上报应用服务信息
 * @method void setProcess(SpanProcess $Process) 设置上报应用服务信息
 * @method integer getTimestamp() 获取产生时间戳(毫秒)
 * @method void setTimestamp(integer $Timestamp) 设置产生时间戳(毫秒)
 * @method string getOperationName() 获取Span 名称
 * @method void setOperationName(string $OperationName) 设置Span 名称
 * @method array getReferences() 获取关联关系
 * @method void setReferences(array $References) 设置关联关系
 * @method integer getStartTime() 获取产生时间戳(微秒)
 * @method void setStartTime(integer $StartTime) 设置产生时间戳(微秒)
 * @method integer getDuration() 获取持续耗时(微妙)
 * @method void setDuration(integer $Duration) 设置持续耗时(微妙)
 * @method string getSpanID() 获取Span ID
 * @method void setSpanID(string $SpanID) 设置Span ID
 * @method integer getStartTimeMillis() 获取产生时间戳(毫秒)
 * @method void setStartTimeMillis(integer $StartTimeMillis) 设置产生时间戳(毫秒)
 * @method string getParentSpanID() 获取Parent Span ID
 * @method void setParentSpanID(string $ParentSpanID) 设置Parent Span ID
 */
class Span extends AbstractModel
{
    /**
     * @var string Trace ID
     */
    public $TraceID;

    /**
     * @var array 日志
     */
    public $Logs;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var SpanProcess 上报应用服务信息
     */
    public $Process;

    /**
     * @var integer 产生时间戳(毫秒)
     */
    public $Timestamp;

    /**
     * @var string Span 名称
     */
    public $OperationName;

    /**
     * @var array 关联关系
     */
    public $References;

    /**
     * @var integer 产生时间戳(微秒)
     */
    public $StartTime;

    /**
     * @var integer 持续耗时(微妙)
     */
    public $Duration;

    /**
     * @var string Span ID
     */
    public $SpanID;

    /**
     * @var integer 产生时间戳(毫秒)
     */
    public $StartTimeMillis;

    /**
     * @var string Parent Span ID
     */
    public $ParentSpanID;

    /**
     * @param string $TraceID Trace ID
     * @param array $Logs 日志
     * @param array $Tags 标签
     * @param SpanProcess $Process 上报应用服务信息
     * @param integer $Timestamp 产生时间戳(毫秒)
     * @param string $OperationName Span 名称
     * @param array $References 关联关系
     * @param integer $StartTime 产生时间戳(微秒)
     * @param integer $Duration 持续耗时(微妙)
     * @param string $SpanID Span ID
     * @param integer $StartTimeMillis 产生时间戳(毫秒)
     * @param string $ParentSpanID Parent Span ID
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
        if (array_key_exists("TraceID",$param) and $param["TraceID"] !== null) {
            $this->TraceID = $param["TraceID"];
        }

        if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
            $this->Logs = [];
            foreach ($param["Logs"] as $key => $value){
                $obj = new SpanLog();
                $obj->deserialize($value);
                array_push($this->Logs, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new SpanTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = new SpanProcess();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("OperationName",$param) and $param["OperationName"] !== null) {
            $this->OperationName = $param["OperationName"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new SpanReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("SpanID",$param) and $param["SpanID"] !== null) {
            $this->SpanID = $param["SpanID"];
        }

        if (array_key_exists("StartTimeMillis",$param) and $param["StartTimeMillis"] !== null) {
            $this->StartTimeMillis = $param["StartTimeMillis"];
        }

        if (array_key_exists("ParentSpanID",$param) and $param["ParentSpanID"] !== null) {
            $this->ParentSpanID = $param["ParentSpanID"];
        }
    }
}
