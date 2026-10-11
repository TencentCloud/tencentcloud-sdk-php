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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Trace概览查询
 *
 * @method integer getStatus() 获取<p>traceID调用状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>traceID调用状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTraceID() 获取<p>TraceId查询</p>
 * @method void setTraceID(string $TraceID) 设置<p>TraceId查询</p>
 * @method string getErrorMsg() 获取<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取<p>服务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>服务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取<p>耗时</p>
 * @method void setDuration(integer $Duration) 设置<p>耗时</p>
 * @method string getOperation() 获取<p>接口名</p>
 * @method void setOperation(string $Operation) 设置<p>接口名</p>
 * @method integer getStartTime() 获取<p>开始时间（微秒）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间（微秒）</p>
 * @method integer getApplicationCount() 获取<p>应用数</p>
 * @method void setApplicationCount(integer $ApplicationCount) 设置<p>应用数</p>
 * @method array getErrorSpans() 获取<p>异常Span列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorSpans(array $ErrorSpans) 设置<p>异常Span列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TraceOverview extends AbstractModel
{
    /**
     * @var integer <p>traceID调用状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>TraceId查询</p>
     */
    public $TraceID;

    /**
     * @var string <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string <p>服务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var integer <p>耗时</p>
     */
    public $Duration;

    /**
     * @var string <p>接口名</p>
     */
    public $Operation;

    /**
     * @var integer <p>开始时间（微秒）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>应用数</p>
     */
    public $ApplicationCount;

    /**
     * @var array <p>异常Span列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorSpans;

    /**
     * @param integer $Status <p>traceID调用状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TraceID <p>TraceId查询</p>
     * @param string $ErrorMsg <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName <p>服务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration <p>耗时</p>
     * @param string $Operation <p>接口名</p>
     * @param integer $StartTime <p>开始时间（微秒）</p>
     * @param integer $ApplicationCount <p>应用数</p>
     * @param array $ErrorSpans <p>异常Span列表</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TraceID",$param) and $param["TraceID"] !== null) {
            $this->TraceID = $param["TraceID"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ApplicationCount",$param) and $param["ApplicationCount"] !== null) {
            $this->ApplicationCount = $param["ApplicationCount"];
        }

        if (array_key_exists("ErrorSpans",$param) and $param["ErrorSpans"] !== null) {
            $this->ErrorSpans = [];
            foreach ($param["ErrorSpans"] as $key => $value){
                $obj = new ErrorSpan();
                $obj->deserialize($value);
                array_push($this->ErrorSpans, $obj);
            }
        }
    }
}
