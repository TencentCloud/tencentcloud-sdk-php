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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBCustomNodeType请求参数结构体
 *
 * @method string getNodeId() 获取<p>节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p>
 * @method string getNodeType() 获取<p>节点机型</p>
 * @method void setNodeType(string $NodeType) 设置<p>节点机型</p>
 */
class ModifyDBCustomNodeTypeRequest extends AbstractModel
{
    /**
     * @var string <p>节点ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点机型</p>
     */
    public $NodeType;

    /**
     * @param string $NodeId <p>节点ID</p>
     * @param string $NodeType <p>节点机型</p>
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

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
