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
 * DB Custom 集群内节点配置信息。
 *
 * @method string getNodeId() 获取<p>节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p>
 * @method array getLabels() 获取<p>节点的标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置<p>节点的标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaints() 获取<p>节点的污点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaints(array $Taints) 设置<p>节点的污点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBCustomClusterNodeConfig extends AbstractModel
{
    /**
     * @var string <p>节点ID</p>
     */
    public $NodeId;

    /**
     * @var array <p>节点的标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array <p>节点的污点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Taints;

    /**
     * @param string $NodeId <p>节点ID</p>
     * @param array $Labels <p>节点的标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Taints <p>节点的污点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }
    }
}
