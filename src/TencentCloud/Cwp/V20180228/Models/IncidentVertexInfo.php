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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件点信息
 *
 * @method string getIncidentId() 获取事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncidentId(string $IncidentId) 设置事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取事件所在表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置事件所在表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVertex() 获取节点信息列表，数组项中包含节点详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVertex(array $Vertex) 设置节点信息列表，数组项中包含节点详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVertexCount() 获取节点总个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVertexCount(integer $VertexCount) 设置节点总个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class IncidentVertexInfo extends AbstractModel
{
    /**
     * @var string 事件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncidentId;

    /**
     * @var string 事件所在表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var array 节点信息列表，数组项中包含节点详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vertex;

    /**
     * @var integer 节点总个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VertexCount;

    /**
     * @param string $IncidentId 事件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 事件所在表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vertex 节点信息列表，数组项中包含节点详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VertexCount 节点总个数
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
        if (array_key_exists("IncidentId",$param) and $param["IncidentId"] !== null) {
            $this->IncidentId = $param["IncidentId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Vertex",$param) and $param["Vertex"] !== null) {
            $this->Vertex = [];
            foreach ($param["Vertex"] as $key => $value){
                $obj = new VertexInfo();
                $obj->deserialize($value);
                array_push($this->Vertex, $obj);
            }
        }

        if (array_key_exists("VertexCount",$param) and $param["VertexCount"] !== null) {
            $this->VertexCount = $param["VertexCount"];
        }
    }
}
