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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标题信息
 *
 * @method string getId() 获取标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置标签id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置标签名
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getWeight() 获取推荐权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(float $Weight) 设置推荐权重
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagInfo extends AbstractModel
{
    /**
     * @var string 标签id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 标签名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var float 推荐权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @param string $Id 标签id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 标签名
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Weight 推荐权重
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
