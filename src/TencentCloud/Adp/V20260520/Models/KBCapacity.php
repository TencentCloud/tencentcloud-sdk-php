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
 * 知识库容量信息
 *
 * @method string getMaxCharSize() 获取<p>最大字符数</p>
 * @method void setMaxCharSize(string $MaxCharSize) 设置<p>最大字符数</p>
 * @method string getOverCharSize() 获取<p>超量字符数</p>
 * @method void setOverCharSize(string $OverCharSize) 设置<p>超量字符数</p>
 * @method string getUsedCharSize() 获取<p>已用字符数</p>
 * @method void setUsedCharSize(string $UsedCharSize) 设置<p>已用字符数</p>
 * @method CharacterSize getCharacterSize() 获取<p>字符数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCharacterSize(CharacterSize $CharacterSize) 设置<p>字符数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ByteCapacity getByteCapacity() 获取<p>容量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setByteCapacity(ByteCapacity $ByteCapacity) 设置<p>容量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCapacityStatus() 获取<p>知识库容量状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>2： 超量但可用（pu 抵扣）</li><li>3： 超量不可用</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapacityStatus(integer $CapacityStatus) 设置<p>知识库容量状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>2： 超量但可用（pu 抵扣）</li><li>3： 超量不可用</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class KBCapacity extends AbstractModel
{
    /**
     * @var string <p>最大字符数</p>
     */
    public $MaxCharSize;

    /**
     * @var string <p>超量字符数</p>
     */
    public $OverCharSize;

    /**
     * @var string <p>已用字符数</p>
     */
    public $UsedCharSize;

    /**
     * @var CharacterSize <p>字符数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CharacterSize;

    /**
     * @var ByteCapacity <p>容量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ByteCapacity;

    /**
     * @var integer <p>知识库容量状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>2： 超量但可用（pu 抵扣）</li><li>3： 超量不可用</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CapacityStatus;

    /**
     * @param string $MaxCharSize <p>最大字符数</p>
     * @param string $OverCharSize <p>超量字符数</p>
     * @param string $UsedCharSize <p>已用字符数</p>
     * @param CharacterSize $CharacterSize <p>字符数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ByteCapacity $ByteCapacity <p>容量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CapacityStatus <p>知识库容量状态</p><p>枚举值：</p><ul><li>1： 正常</li><li>2： 超量但可用（pu 抵扣）</li><li>3： 超量不可用</li></ul>
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
        if (array_key_exists("MaxCharSize",$param) and $param["MaxCharSize"] !== null) {
            $this->MaxCharSize = $param["MaxCharSize"];
        }

        if (array_key_exists("OverCharSize",$param) and $param["OverCharSize"] !== null) {
            $this->OverCharSize = $param["OverCharSize"];
        }

        if (array_key_exists("UsedCharSize",$param) and $param["UsedCharSize"] !== null) {
            $this->UsedCharSize = $param["UsedCharSize"];
        }

        if (array_key_exists("CharacterSize",$param) and $param["CharacterSize"] !== null) {
            $this->CharacterSize = new CharacterSize();
            $this->CharacterSize->deserialize($param["CharacterSize"]);
        }

        if (array_key_exists("ByteCapacity",$param) and $param["ByteCapacity"] !== null) {
            $this->ByteCapacity = new ByteCapacity();
            $this->ByteCapacity->deserialize($param["ByteCapacity"]);
        }

        if (array_key_exists("CapacityStatus",$param) and $param["CapacityStatus"] !== null) {
            $this->CapacityStatus = $param["CapacityStatus"];
        }
    }
}
