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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sql Gateway返回Column类型
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method LogicalType getLogicalType() 获取本地类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicalType(LogicalType $LogicalType) 设置本地类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResultColumn extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var LogicalType 本地类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicalType;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param LogicalType $LogicalType 本地类型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 备注
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LogicalType",$param) and $param["LogicalType"] !== null) {
            $this->LogicalType = new LogicalType();
            $this->LogicalType->deserialize($param["LogicalType"]);
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
