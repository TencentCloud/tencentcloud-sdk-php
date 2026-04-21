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
 * 用户组数节点
 *
 * @method integer getGroupId() 获取用户组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(integer $GroupId) 设置用户组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getQueryChildNodes() 获取是否查询子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryChildNodes(boolean $QueryChildNodes) 设置是否查询子节点
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupTreeNodeDTO extends AbstractModel
{
    /**
     * @var integer 用户组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var boolean 是否查询子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryChildNodes;

    /**
     * @param integer $GroupId 用户组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $QueryChildNodes 是否查询子节点
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("QueryChildNodes",$param) and $param["QueryChildNodes"] !== null) {
            $this->QueryChildNodes = $param["QueryChildNodes"];
        }
    }
}
