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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取成员列表接口回包TypeList
 *
 * @method string getType() 获取类型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTypeName() 获取类型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeName(string $TypeName) 设置类型名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetIndustryV1HomeMembersRespType extends AbstractModel
{
    /**
     * @var string 类型ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 类型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeName;

    /**
     * @param string $Type 类型ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TypeName 类型名称
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }
    }
}
