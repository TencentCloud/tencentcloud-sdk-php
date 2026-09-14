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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档操作者信息
 *
 * @method Operator getModifier() 获取<p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifier(Operator $Modifier) 设置<p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DocPermission getPermission() 获取<p>操作权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermission(DocPermission $Permission) 设置<p>操作权限</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocOperator extends AbstractModel
{
    /**
     * @var Operator <p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Modifier;

    /**
     * @var DocPermission <p>操作权限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permission;

    /**
     * @param Operator $Modifier <p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DocPermission $Permission <p>操作权限</p>
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
        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = new Operator();
            $this->Modifier->deserialize($param["Modifier"]);
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = new DocPermission();
            $this->Permission->deserialize($param["Permission"]);
        }
    }
}
