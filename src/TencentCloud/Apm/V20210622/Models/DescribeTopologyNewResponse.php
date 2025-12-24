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
 * DescribeTopologyNew返回参数结构体
 *
 * @method array getNodes() 获取节点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置节点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEdges() 获取边集合
 * @method void setEdges(array $Edges) 设置边集合
 * @method integer getTopologyModifyFlag() 获取拓扑图是否有修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopologyModifyFlag(integer $TopologyModifyFlag) 设置拓扑图是否有修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method SelectorView getSelectors() 获取节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectors(SelectorView $Selectors) 设置节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTopologyNewResponse extends AbstractModel
{
    /**
     * @var array 节点集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var array 边集合
     */
    public $Edges;

    /**
     * @var integer 拓扑图是否有修改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopologyModifyFlag;

    /**
     * @var SelectorView 节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Selectors;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Nodes 节点集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Edges 边集合
     * @param integer $TopologyModifyFlag 拓扑图是否有修改
注意：此字段可能返回 null，表示取不到有效值。
     * @param SelectorView $Selectors 节点数量
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new TopologyNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("Edges",$param) and $param["Edges"] !== null) {
            $this->Edges = [];
            foreach ($param["Edges"] as $key => $value){
                $obj = new TopologyEdgeNew();
                $obj->deserialize($value);
                array_push($this->Edges, $obj);
            }
        }

        if (array_key_exists("TopologyModifyFlag",$param) and $param["TopologyModifyFlag"] !== null) {
            $this->TopologyModifyFlag = $param["TopologyModifyFlag"];
        }

        if (array_key_exists("Selectors",$param) and $param["Selectors"] !== null) {
            $this->Selectors = new SelectorView();
            $this->Selectors->deserialize($param["Selectors"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
