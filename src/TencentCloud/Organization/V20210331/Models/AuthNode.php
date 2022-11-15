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
 * 认证主体主要信息
 *
 * @method integer getRelationId() 获取主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationId(integer $RelationId) 设置主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthName() 获取主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthName(string $AuthName) 设置主体名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthNode extends AbstractModel
{
    /**
     * @var integer 主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationId;

    /**
     * @var string 主体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthName;

    /**
     * @param integer $RelationId 主体关系ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthName 主体名称
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
    }
}
