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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群版的节点拓扑配置。
 *
 * @method ReadWriteNode getReadWriteNode() 获取RW 节点拓扑。
 * @method void setReadWriteNode(ReadWriteNode $ReadWriteNode) 设置RW 节点拓扑。
 * @method array getReadOnlyNodes() 获取RO 节点拓扑。
 * @method void setReadOnlyNodes(array $ReadOnlyNodes) 设置RO 节点拓扑。
 */
class ClusterTopology extends AbstractModel
{
    /**
     * @var ReadWriteNode RW 节点拓扑。
     */
    public $ReadWriteNode;

    /**
     * @var array RO 节点拓扑。
     */
    public $ReadOnlyNodes;

    /**
     * @param ReadWriteNode $ReadWriteNode RW 节点拓扑。
     * @param array $ReadOnlyNodes RO 节点拓扑。
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
        if (array_key_exists("ReadWriteNode",$param) and $param["ReadWriteNode"] !== null) {
            $this->ReadWriteNode = new ReadWriteNode();
            $this->ReadWriteNode->deserialize($param["ReadWriteNode"]);
        }

        if (array_key_exists("ReadOnlyNodes",$param) and $param["ReadOnlyNodes"] !== null) {
            $this->ReadOnlyNodes = [];
            foreach ($param["ReadOnlyNodes"] as $key => $value){
                $obj = new ReadonlyNode();
                $obj->deserialize($value);
                array_push($this->ReadOnlyNodes, $obj);
            }
        }
    }
}
