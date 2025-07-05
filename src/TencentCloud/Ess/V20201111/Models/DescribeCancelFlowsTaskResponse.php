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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCancelFlowsTask返回参数结构体
 *
 * @method string getTaskId() 获取批量撤销任务编号，为32位字符串，通过接口[获取批量撤销签署流程腾讯电子签小程序链接](https://qian.tencent.com/developers/companyApis/operateFlows/CreateBatchCancelFlowUrl)获得。
 * @method void setTaskId(string $TaskId) 设置批量撤销任务编号，为32位字符串，通过接口[获取批量撤销签署流程腾讯电子签小程序链接](https://qian.tencent.com/developers/companyApis/operateFlows/CreateBatchCancelFlowUrl)获得。
 * @method string getTaskStatus() 获取任务状态，需要关注的状态
<ul><li>**PROCESSING**  - 任务执行中</li>
<li>**END** - 任务处理完成</li>
<li>**TIMEOUT** 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul>
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态，需要关注的状态
<ul><li>**PROCESSING**  - 任务执行中</li>
<li>**END** - 任务处理完成</li>
<li>**TIMEOUT** 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul>
 * @method array getSuccessFlowIds() 获取批量撤销成功的签署流程编号
 * @method void setSuccessFlowIds(array $SuccessFlowIds) 设置批量撤销成功的签署流程编号
 * @method array getFailureFlows() 获取批量撤销失败的签署流程信息
 * @method void setFailureFlows(array $FailureFlows) 设置批量撤销失败的签署流程信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCancelFlowsTaskResponse extends AbstractModel
{
    /**
     * @var string 批量撤销任务编号，为32位字符串，通过接口[获取批量撤销签署流程腾讯电子签小程序链接](https://qian.tencent.com/developers/companyApis/operateFlows/CreateBatchCancelFlowUrl)获得。
     */
    public $TaskId;

    /**
     * @var string 任务状态，需要关注的状态
<ul><li>**PROCESSING**  - 任务执行中</li>
<li>**END** - 任务处理完成</li>
<li>**TIMEOUT** 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul>
     */
    public $TaskStatus;

    /**
     * @var array 批量撤销成功的签署流程编号
     */
    public $SuccessFlowIds;

    /**
     * @var array 批量撤销失败的签署流程信息
     */
    public $FailureFlows;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 批量撤销任务编号，为32位字符串，通过接口[获取批量撤销签署流程腾讯电子签小程序链接](https://qian.tencent.com/developers/companyApis/operateFlows/CreateBatchCancelFlowUrl)获得。
     * @param string $TaskStatus 任务状态，需要关注的状态
<ul><li>**PROCESSING**  - 任务执行中</li>
<li>**END** - 任务处理完成</li>
<li>**TIMEOUT** 任务超时未处理完成，用户未在批量撤销链接有效期内操作</li></ul>
     * @param array $SuccessFlowIds 批量撤销成功的签署流程编号
     * @param array $FailureFlows 批量撤销失败的签署流程信息
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
