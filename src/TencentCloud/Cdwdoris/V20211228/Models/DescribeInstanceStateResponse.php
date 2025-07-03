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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceState返回参数结构体
 *
 * @method string getInstanceState() 获取集群状态，例如：Serving
 * @method void setInstanceState(string $InstanceState) 设置集群状态，例如：Serving
 * @method string getFlowCreateTime() 获取集群操作创建时间
 * @method void setFlowCreateTime(string $FlowCreateTime) 设置集群操作创建时间
 * @method string getFlowName() 获取集群操作名称
 * @method void setFlowName(string $FlowName) 设置集群操作名称
 * @method float getFlowProgress() 获取集群操作进度
 * @method void setFlowProgress(float $FlowProgress) 设置集群操作进度
 * @method string getInstanceStateDesc() 获取集群状态描述，例如：运行中
 * @method void setInstanceStateDesc(string $InstanceStateDesc) 设置集群状态描述，例如：运行中
 * @method string getFlowMsg() 获取集群流程错误信息，例如：“创建失败，资源不足”
 * @method void setFlowMsg(string $FlowMsg) 设置集群流程错误信息，例如：“创建失败，资源不足”
 * @method string getProcessId() 获取流程ProcessId
 * @method void setProcessId(string $ProcessId) 设置流程ProcessId
 * @method string getJobName() 获取Job名称
 * @method void setJobName(string $JobName) 设置Job名称
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceStateResponse extends AbstractModel
{
    /**
     * @var string 集群状态，例如：Serving
     */
    public $InstanceState;

    /**
     * @var string 集群操作创建时间
     */
    public $FlowCreateTime;

    /**
     * @var string 集群操作名称
     */
    public $FlowName;

    /**
     * @var float 集群操作进度
     */
    public $FlowProgress;

    /**
     * @var string 集群状态描述，例如：运行中
     */
    public $InstanceStateDesc;

    /**
     * @var string 集群流程错误信息，例如：“创建失败，资源不足”
     */
    public $FlowMsg;

    /**
     * @var string 流程ProcessId
     */
    public $ProcessId;

    /**
     * @var string Job名称
     */
    public $JobName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceState 集群状态，例如：Serving
     * @param string $FlowCreateTime 集群操作创建时间
     * @param string $FlowName 集群操作名称
     * @param float $FlowProgress 集群操作进度
     * @param string $InstanceStateDesc 集群状态描述，例如：运行中
     * @param string $FlowMsg 集群流程错误信息，例如：“创建失败，资源不足”
     * @param string $ProcessId 流程ProcessId
     * @param string $JobName Job名称
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
        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("FlowCreateTime",$param) and $param["FlowCreateTime"] !== null) {
            $this->FlowCreateTime = $param["FlowCreateTime"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowProgress",$param) and $param["FlowProgress"] !== null) {
            $this->FlowProgress = $param["FlowProgress"];
        }

        if (array_key_exists("InstanceStateDesc",$param) and $param["InstanceStateDesc"] !== null) {
            $this->InstanceStateDesc = $param["InstanceStateDesc"];
        }

        if (array_key_exists("FlowMsg",$param) and $param["FlowMsg"] !== null) {
            $this->FlowMsg = $param["FlowMsg"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
