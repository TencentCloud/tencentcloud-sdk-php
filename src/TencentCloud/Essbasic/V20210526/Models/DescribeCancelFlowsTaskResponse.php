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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCancelFlowsTask返回参数结构体
 *
 * @method string getTaskId() 获取<p>批量撤销任务编号，为32位字符串。</p>
 * @method void setTaskId(string $TaskId) 设置<p>批量撤销任务编号，为32位字符串。</p>
 * @method string getTaskStatus() 获取<p>任务状态，需要关注的状态<ul><li><strong>PROCESSING</strong>  - 任务执行中</li><li><strong>END</strong> - 任务处理完成</li><li><strong>TIMEOUT</strong> 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul></p>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>任务状态，需要关注的状态<ul><li><strong>PROCESSING</strong>  - 任务执行中</li><li><strong>END</strong> - 任务处理完成</li><li><strong>TIMEOUT</strong> 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul></p>
 * @method array getSuccessFlowIds() 获取<p>批量撤销成功的签署流程编号</p>
 * @method void setSuccessFlowIds(array $SuccessFlowIds) 设置<p>批量撤销成功的签署流程编号</p>
 * @method array getFailureFlows() 获取<p>批量撤销失败的签署流程信息</p>
 * @method void setFailureFlows(array $FailureFlows) 设置<p>批量撤销失败的签署流程信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCancelFlowsTaskResponse extends AbstractModel
{
    /**
     * @var string <p>批量撤销任务编号，为32位字符串。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态，需要关注的状态<ul><li><strong>PROCESSING</strong>  - 任务执行中</li><li><strong>END</strong> - 任务处理完成</li><li><strong>TIMEOUT</strong> 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul></p>
     */
    public $TaskStatus;

    /**
     * @var array <p>批量撤销成功的签署流程编号</p>
     */
    public $SuccessFlowIds;

    /**
     * @var array <p>批量撤销失败的签署流程信息</p>
     */
    public $FailureFlows;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>批量撤销任务编号，为32位字符串。</p>
     * @param string $TaskStatus <p>任务状态，需要关注的状态<ul><li><strong>PROCESSING</strong>  - 任务执行中</li><li><strong>END</strong> - 任务处理完成</li><li><strong>TIMEOUT</strong> 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul></p>
     * @param array $SuccessFlowIds <p>批量撤销成功的签署流程编号</p>
     * @param array $FailureFlows <p>批量撤销失败的签署流程信息</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("SuccessFlowIds",$param) and $param["SuccessFlowIds"] !== null) {
            $this->SuccessFlowIds = $param["SuccessFlowIds"];
        }

        if (array_key_exists("FailureFlows",$param) and $param["FailureFlows"] !== null) {
            $this->FailureFlows = [];
            foreach ($param["FailureFlows"] as $key => $value){
                $obj = new CancelFailureFlow();
                $obj->deserialize($value);
                array_push($this->FailureFlows, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
