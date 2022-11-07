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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskInstanceReportDetail返回参数结构体
 *
 * @method InstanceReportSummary getSummary() 获取任务实例运行指标概览
 * @method void setSummary(InstanceReportSummary $Summary) 设置任务实例运行指标概览
 * @method InstanceReportReadNode getReadNode() 获取任务实例读取节点运行指标
 * @method void setReadNode(InstanceReportReadNode $ReadNode) 设置任务实例读取节点运行指标
 * @method InstanceReportWriteNode getWriteNode() 获取任务实例写入节点运行指标
 * @method void setWriteNode(InstanceReportWriteNode $WriteNode) 设置任务实例写入节点运行指标
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskInstanceReportDetailResponse extends AbstractModel
{
    /**
     * @var InstanceReportSummary 任务实例运行指标概览
     */
    public $Summary;

    /**
     * @var InstanceReportReadNode 任务实例读取节点运行指标
     */
    public $ReadNode;

    /**
     * @var InstanceReportWriteNode 任务实例写入节点运行指标
     */
    public $WriteNode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param InstanceReportSummary $Summary 任务实例运行指标概览
     * @param InstanceReportReadNode $ReadNode 任务实例读取节点运行指标
     * @param InstanceReportWriteNode $WriteNode 任务实例写入节点运行指标
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new InstanceReportSummary();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("ReadNode",$param) and $param["ReadNode"] !== null) {
            $this->ReadNode = new InstanceReportReadNode();
            $this->ReadNode->deserialize($param["ReadNode"]);
        }

        if (array_key_exists("WriteNode",$param) and $param["WriteNode"] !== null) {
            $this->WriteNode = new InstanceReportWriteNode();
            $this->WriteNode->deserialize($param["WriteNode"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
