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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自适应码流任务信息。
 *
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getStatus() 获取任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>

 * @method void setStatus(string $Status) 设置任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>

 * @method array getComplexAdaptiveDynamicStreamingTaskResultSet() 获取自适应码流任务的执行状态与结果，每个元素对应一个自适应码流模板。
 * @method void setComplexAdaptiveDynamicStreamingTaskResultSet(array $ComplexAdaptiveDynamicStreamingTaskResultSet) 设置自适应码流任务的执行状态与结果，每个元素对应一个自适应码流模板。
 */
class ComplexAdaptiveDynamicStreamingTask extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>

     */
    public $Status;

    /**
     * @var array 自适应码流任务的执行状态与结果，每个元素对应一个自适应码流模板。
     */
    public $ComplexAdaptiveDynamicStreamingTaskResultSet;

    /**
     * @param string $TaskId 任务 ID。
     * @param string $Status 任务状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>

     * @param array $ComplexAdaptiveDynamicStreamingTaskResultSet 自适应码流任务的执行状态与结果，每个元素对应一个自适应码流模板。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComplexAdaptiveDynamicStreamingTaskResultSet",$param) and $param["ComplexAdaptiveDynamicStreamingTaskResultSet"] !== null) {
            $this->ComplexAdaptiveDynamicStreamingTaskResultSet = [];
            foreach ($param["ComplexAdaptiveDynamicStreamingTaskResultSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskResult();
                $obj->deserialize($value);
                array_push($this->ComplexAdaptiveDynamicStreamingTaskResultSet, $obj);
            }
        }
    }
}
