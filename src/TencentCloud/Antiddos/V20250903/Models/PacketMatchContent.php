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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 报文匹配内容。
 *
 * @method string getType() 获取<p>匹配值 Value 的格式类型。</p><p>枚举值：</p><ul><li>string： 明文字符串。</li><li>hex： 十六进制字符串。</li></ul>
 * @method void setType(string $Type) 设置<p>匹配值 Value 的格式类型。</p><p>枚举值：</p><ul><li>string： 明文字符串。</li><li>hex： 十六进制字符串。</li></ul>
 * @method string getValue() 获取<p>匹配值。Type=string 时为明文字符串，例如 <code>GET /index</code>；Type=hex 时为十六进制字符串，例如 <code>0x7e2f68656c6c6f</code>。</p>
 * @method void setValue(string $Value) 设置<p>匹配值。Type=string 时为明文字符串，例如 <code>GET /index</code>；Type=hex 时为十六进制字符串，例如 <code>0x7e2f68656c6c6f</code>。</p>
 * @method integer getOffset() 获取<p>匹配起始偏移量，从匹配起始位置（MatchBegin）开始计算。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
 * @method void setOffset(integer $Offset) 设置<p>匹配起始偏移量，从匹配起始位置（MatchBegin）开始计算。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
 * @method integer getDepth() 获取<p>检查深度，即从 Offset 开始的最大检查字节数。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
 * @method void setDepth(integer $Depth) 设置<p>检查深度，即从 Offset 开始的最大检查字节数。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
 */
class PacketMatchContent extends AbstractModel
{
    /**
     * @var string <p>匹配值 Value 的格式类型。</p><p>枚举值：</p><ul><li>string： 明文字符串。</li><li>hex： 十六进制字符串。</li></ul>
     */
    public $Type;

    /**
     * @var string <p>匹配值。Type=string 时为明文字符串，例如 <code>GET /index</code>；Type=hex 时为十六进制字符串，例如 <code>0x7e2f68656c6c6f</code>。</p>
     */
    public $Value;

    /**
     * @var integer <p>匹配起始偏移量，从匹配起始位置（MatchBegin）开始计算。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
     */
    public $Offset;

    /**
     * @var integer <p>检查深度，即从 Offset 开始的最大检查字节数。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
     */
    public $Depth;

    /**
     * @param string $Type <p>匹配值 Value 的格式类型。</p><p>枚举值：</p><ul><li>string： 明文字符串。</li><li>hex： 十六进制字符串。</li></ul>
     * @param string $Value <p>匹配值。Type=string 时为明文字符串，例如 <code>GET /index</code>；Type=hex 时为十六进制字符串，例如 <code>0x7e2f68656c6c6f</code>。</p>
     * @param integer $Offset <p>匹配起始偏移量，从匹配起始位置（MatchBegin）开始计算。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
     * @param integer $Depth <p>检查深度，即从 Offset 开始的最大检查字节数。</p><p>取值范围：[0, 1500]</p><p>单位：字节</p>
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }
    }
}
