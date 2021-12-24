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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeViews返回参数结构体
 *
 * @method ClusterView getClusterView() 获取集群维度视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterView(ClusterView $ClusterView) 设置集群维度视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodesView() 获取节点维度视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodesView(array $NodesView) 设置节点维度视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKibanasView() 获取Kibana维度视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanasView(array $KibanasView) 设置Kibana维度视图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeViewsResponse extends AbstractModel
{
    /**
     * @var ClusterView 集群维度视图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterView;

    /**
     * @var array 节点维度视图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodesView;

    /**
     * @var array Kibana维度视图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanasView;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ClusterView $ClusterView 集群维度视图
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodesView 节点维度视图
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KibanasView Kibana维度视图
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ClusterView",$param) and $param["ClusterView"] !== null) {
            $this->ClusterView = new ClusterView();
            $this->ClusterView->deserialize($param["ClusterView"]);
        }

        if (array_key_exists("NodesView",$param) and $param["NodesView"] !== null) {
            $this->NodesView = [];
            foreach ($param["NodesView"] as $key => $value){
                $obj = new NodeView();
                $obj->deserialize($value);
                array_push($this->NodesView, $obj);
            }
        }

        if (array_key_exists("KibanasView",$param) and $param["KibanasView"] !== null) {
            $this->KibanasView = [];
            foreach ($param["KibanasView"] as $key => $value){
                $obj = new KibanaView();
                $obj->deserialize($value);
                array_push($this->KibanasView, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
