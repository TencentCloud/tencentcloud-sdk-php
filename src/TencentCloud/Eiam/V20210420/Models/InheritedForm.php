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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用信息列表。
 *
 * @method array getUserGroupIds() 获取用户所在的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupIds(array $UserGroupIds) 设置用户所在的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrgNodeIds() 获取用户所在的机构节点ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeIds(array $OrgNodeIds) 设置用户所在的机构节点ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InheritedForm extends AbstractModel
{
    /**
     * @var array 用户所在的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupIds;

    /**
     * @var array 用户所在的机构节点ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeIds;

    /**
     * @param array $UserGroupIds 用户所在的用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OrgNodeIds 用户所在的机构节点ID列表。
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
        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("OrgNodeIds",$param) and $param["OrgNodeIds"] !== null) {
            $this->OrgNodeIds = $param["OrgNodeIds"];
        }
    }
}
