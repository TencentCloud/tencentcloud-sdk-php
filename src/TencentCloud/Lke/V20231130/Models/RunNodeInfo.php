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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点信息
 *
 * @method integer getNodeType() 获取节点类型，0:未指定，1:开始节点，2:API节点，3:询问节点，4:答案节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(integer $NodeType) 设置节点类型，0:未指定，1:开始节点，2:API节点，3:询问节点，4:答案节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method InvokeAPI getInvokeApi() 获取请求的API
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeApi(InvokeAPI $InvokeApi) 设置请求的API
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSlotValues() 获取当前节点的所有槽位的值，key：SlotID。没有值的时候也要返回空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotValues(array $SlotValues) 设置当前节点的所有槽位的值，key：SlotID。没有值的时候也要返回空。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RunNodeInfo extends AbstractModel
{
    /**
     * @var integer 节点类型，0:未指定，1:开始节点，2:API节点，3:询问节点，4:答案节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var string 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var InvokeAPI 请求的API
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeApi;

    /**
     * @var array 当前节点的所有槽位的值，key：SlotID。没有值的时候也要返回空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotValues;

    /**
     * @param integer $NodeType 节点类型，0:未指定，1:开始节点，2:API节点，3:询问节点，4:答案节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param InvokeAPI $InvokeApi 请求的API
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SlotValues 当前节点的所有槽位的值，key：SlotID。没有值的时候也要返回空。
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("InvokeApi",$param) and $param["InvokeApi"] !== null) {
            $this->InvokeApi = new InvokeAPI();
            $this->InvokeApi->deserialize($param["InvokeApi"]);
        }

        if (array_key_exists("SlotValues",$param) and $param["SlotValues"] !== null) {
            $this->SlotValues = [];
            foreach ($param["SlotValues"] as $key => $value){
                $obj = new ValueInfo();
                $obj->deserialize($value);
                array_push($this->SlotValues, $obj);
            }
        }
    }
}
