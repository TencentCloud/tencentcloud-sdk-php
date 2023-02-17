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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 互信主体主要信息
 *
 * @method integer getRelationId() 获取互信主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationId(integer $RelationId) 设置互信主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthName() 获取互信主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthName(string $AuthName) 设置互信主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method MemberMainInfo getManager() 获取主体管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManager(MemberMainInfo $Manager) 设置主体管理员
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthNode extends AbstractModel
{
    /**
     * @var integer 互信主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationId;

    /**
     * @var string 互信主体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthName;

    /**
     * @var MemberMainInfo 主体管理员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manager;

    /**
     * @param integer $RelationId 互信主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthName 互信主体名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param MemberMainInfo $Manager 主体管理员
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
        if (array_key_exists("RelationId",$param) and $param["RelationId"] !== null) {
            $this->RelationId = $param["RelationId"];
        }

        if (array_key_exists("AuthName",$param) and $param["AuthName"] !== null) {
            $this->AuthName = $param["AuthName"];
        }

        if (array_key_exists("Manager",$param) and $param["Manager"] !== null) {
            $this->Manager = new MemberMainInfo();
            $this->Manager->deserialize($param["Manager"]);
        }
    }
}
