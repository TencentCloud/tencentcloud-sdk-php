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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体检报告信息-包含单位
 *
 * @method string getName() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method PhysicalBaseItem getItem() 获取项目原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItem(PhysicalBaseItem $Item) 设置项目原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method PhysicalBaseItem getResult() 获取数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(PhysicalBaseItem $Result) 设置数值
注意：此字段可能返回 null，表示取不到有效值。
 * @method PhysicalBaseItem getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(PhysicalBaseItem $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class ValueUnitItem extends AbstractModel
{
    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var PhysicalBaseItem 项目原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Item;

    /**
     * @var PhysicalBaseItem 数值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var PhysicalBaseItem 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @param string $Name 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param PhysicalBaseItem $Item 项目原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param PhysicalBaseItem $Result 数值
注意：此字段可能返回 null，表示取不到有效值。
     * @param PhysicalBaseItem $Unit 单位
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

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new PhysicalBaseItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new PhysicalBaseItem();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = new PhysicalBaseItem();
            $this->Unit->deserialize($param["Unit"]);
        }
    }
}
