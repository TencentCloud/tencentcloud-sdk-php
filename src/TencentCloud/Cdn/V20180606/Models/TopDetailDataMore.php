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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序类型的数据结构，同时附带上该项的在总值的占比
 *
 * @method string getName() 获取数据类型的名称
 * @method void setName(string $Name) 设置数据类型的名称
 * @method float getValue() 获取数据值
 * @method void setValue(float $Value) 设置数据值
 * @method float getPercent() 获取数据值在总值中的百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(float $Percent) 设置数据值在总值中的百分比
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopDetailDataMore extends AbstractModel
{
    /**
     * @var string 数据类型的名称
     */
    public $Name;

    /**
     * @var float 数据值
     */
    public $Value;

    /**
     * @var float 数据值在总值中的百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @param string $Name 数据类型的名称
     * @param float $Value 数据值
     * @param float $Percent 数据值在总值中的百分比
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }
    }
}
