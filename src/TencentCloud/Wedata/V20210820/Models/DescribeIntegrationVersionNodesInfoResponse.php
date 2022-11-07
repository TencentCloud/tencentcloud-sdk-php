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
 * DescribeIntegrationVersionNodesInfo返回参数结构体
 *
 * @method array getNodes() 获取任务节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置任务节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMappings() 获取任务映射信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMappings(array $Mappings) 设置任务映射信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIntegrationVersionNodesInfoResponse extends AbstractModel
{
    /**
     * @var array 任务节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var array 任务映射信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mappings;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Nodes 任务节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Mappings 任务映射信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务id
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
        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new IntegrationNodeInfo();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("Mappings",$param) and $param["Mappings"] !== null) {
            $this->Mappings = [];
            foreach ($param["Mappings"] as $key => $value){
                $obj = new IntegrationNodeMapping();
                $obj->deserialize($value);
                array_push($this->Mappings, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
