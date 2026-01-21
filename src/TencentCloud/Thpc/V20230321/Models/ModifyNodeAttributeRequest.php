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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNodeAttribute请求参数结构体
 *
 * @method string getNodeId() 获取<p>节点ID，节点ID通过调用接口 <a href="https://cloud.tencent.com/document/api/1527/89569">DescribeNodes</a>获取。</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID，节点ID通过调用接口 <a href="https://cloud.tencent.com/document/api/1527/89569">DescribeNodes</a>获取。</p>
 * @method string getNodeName() 获取<p>节点别名</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点别名</p>
 * @method string getNodeAllocateState() 获取<p>资源的分配状态:  - IDLE: 资源空闲 - ISOLATE: 资源隔离</p>
 * @method void setNodeAllocateState(string $NodeAllocateState) 设置<p>资源的分配状态:  - IDLE: 资源空闲 - ISOLATE: 资源隔离</p>
 * @method string getQueueName() 获取<p>目标队列名</p>
 * @method void setQueueName(string $QueueName) 设置<p>目标队列名</p>
 */
class ModifyNodeAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>节点ID，节点ID通过调用接口 <a href="https://cloud.tencent.com/document/api/1527/89569">DescribeNodes</a>获取。</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点别名</p>
     */
    public $NodeName;

    /**
     * @var string <p>资源的分配状态:  - IDLE: 资源空闲 - ISOLATE: 资源隔离</p>
     */
    public $NodeAllocateState;

    /**
     * @var string <p>目标队列名</p>
     */
    public $QueueName;

    /**
     * @param string $NodeId <p>节点ID，节点ID通过调用接口 <a href="https://cloud.tencent.com/document/api/1527/89569">DescribeNodes</a>获取。</p>
     * @param string $NodeName <p>节点别名</p>
     * @param string $NodeAllocateState <p>资源的分配状态:  - IDLE: 资源空闲 - ISOLATE: 资源隔离</p>
     * @param string $QueueName <p>目标队列名</p>
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeAllocateState",$param) and $param["NodeAllocateState"] !== null) {
            $this->NodeAllocateState = $param["NodeAllocateState"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
