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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点规格
 *
 * @method string getNodeType() 获取节点类型
 * @method void setNodeType(string $NodeType) 设置节点类型
 * @method string getNodeName() 获取节点类型名称
 * @method void setNodeName(string $NodeName) 设置节点类型名称
 * @method array getTypes() 获取Types数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypes(array $Types) 设置Types数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCmnTypes() 获取云托管节点机型规格列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmnTypes(array $CmnTypes) 设置云托管节点机型规格列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeNodeSpec extends AbstractModel
{
    /**
     * @var string 节点类型
     */
    public $NodeType;

    /**
     * @var string 节点类型名称
     */
    public $NodeName;

    /**
     * @var array Types数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Types;

    /**
     * @var array 云托管节点机型规格列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmnTypes;

    /**
     * @param string $NodeType 节点类型
     * @param string $NodeName 节点类型名称
     * @param array $Types Types数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CmnTypes 云托管节点机型规格列表
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

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = [];
            foreach ($param["Types"] as $key => $value){
                $obj = new NodeSpecType();
                $obj->deserialize($value);
                array_push($this->Types, $obj);
            }
        }

        if (array_key_exists("CmnTypes",$param) and $param["CmnTypes"] !== null) {
            $this->CmnTypes = [];
            foreach ($param["CmnTypes"] as $key => $value){
                $obj = new NodeSpecType();
                $obj->deserialize($value);
                array_push($this->CmnTypes, $obj);
            }
        }
    }
}
