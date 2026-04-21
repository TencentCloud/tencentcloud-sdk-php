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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作的资源权限
 *
 * @method integer getEntityId() 获取资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntityId(integer $EntityId) 设置资源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNodeType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(integer $NodeType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceList() 获取资源权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceList(array $ResourceList) 设置资源权限
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceListDTO extends AbstractModel
{
    /**
     * @var integer 资源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntityId;

    /**
     * @var integer 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var array 资源权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceList;

    /**
     * @param integer $EntityId 资源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NodeType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceList 资源权限
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
        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new ResourceItem();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }
    }
}
