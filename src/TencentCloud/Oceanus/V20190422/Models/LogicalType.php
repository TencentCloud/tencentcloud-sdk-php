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
 * SqlGateway返回LogicalType类型
 *
 * @method string getType() 获取<p>类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNullAble() 获取<p>是否允许为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNullAble(boolean $NullAble) 设置<p>是否允许为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLength() 获取<p>长度</p><p>单位：字符数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLength(integer $Length) 设置<p>长度</p><p>单位：字符数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogicalType extends AbstractModel
{
    /**
     * @var string <p>类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean <p>是否允许为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NullAble;

    /**
     * @var integer <p>长度</p><p>单位：字符数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Length;

    /**
     * @param string $Type <p>类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NullAble <p>是否允许为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Length <p>长度</p><p>单位：字符数</p>
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

        if (array_key_exists("NullAble",$param) and $param["NullAble"] !== null) {
            $this->NullAble = $param["NullAble"];
        }

        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = $param["Length"];
        }
    }
}
