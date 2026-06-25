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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis实例级密码复杂度
 *
 * @method boolean getEnabled() 获取<p>是否启用实例级密码复杂度策略。</p><ul><li>true：开启。所有密码变动（创建/重置）必须通过下方定义的复杂度校验。</li><li>false：关闭。不进行复杂度过滤。</li></ul><p>默认值：false</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用实例级密码复杂度策略。</p><ul><li>true：开启。所有密码变动（创建/重置）必须通过下方定义的复杂度校验。</li><li>false：关闭。不进行复杂度过滤。</li></ul><p>默认值：false</p>
 * @method integer getMinLetterCount() 获取<p>大小写字母最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
 * @method void setMinLetterCount(integer $MinLetterCount) 设置<p>大小写字母最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
 * @method integer getMinDigitCount() 获取<p>数字字符的最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
 * @method void setMinDigitCount(integer $MinDigitCount) 设置<p>数字字符的最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
 * @method integer getMinSpecialCount() 获取<p>特殊字符最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
 * @method void setMinSpecialCount(integer $MinSpecialCount) 设置<p>特殊字符最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
 * @method integer getMinLength() 获取<p>密码的最小总长度（字符数）。</p><ul><li>取值范围：[8, 64]。</li><li>默认值：8。</li><li>约束限制：密码的最小总长度必须大于或等于 MinLetterCount 、MinDigitCount 与 MinSpecialCount 三个参数之和。</li></ul>
 * @method void setMinLength(integer $MinLength) 设置<p>密码的最小总长度（字符数）。</p><ul><li>取值范围：[8, 64]。</li><li>默认值：8。</li><li>约束限制：密码的最小总长度必须大于或等于 MinLetterCount 、MinDigitCount 与 MinSpecialCount 三个参数之和。</li></ul>
 */
class PasswordPolicy extends AbstractModel
{
    /**
     * @var boolean <p>是否启用实例级密码复杂度策略。</p><ul><li>true：开启。所有密码变动（创建/重置）必须通过下方定义的复杂度校验。</li><li>false：关闭。不进行复杂度过滤。</li></ul><p>默认值：false</p>
     */
    public $Enabled;

    /**
     * @var integer <p>大小写字母最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
     */
    public $MinLetterCount;

    /**
     * @var integer <p>数字字符的最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
     */
    public $MinDigitCount;

    /**
     * @var integer <p>特殊字符最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
     */
    public $MinSpecialCount;

    /**
     * @var integer <p>密码的最小总长度（字符数）。</p><ul><li>取值范围：[8, 64]。</li><li>默认值：8。</li><li>约束限制：密码的最小总长度必须大于或等于 MinLetterCount 、MinDigitCount 与 MinSpecialCount 三个参数之和。</li></ul>
     */
    public $MinLength;

    /**
     * @param boolean $Enabled <p>是否启用实例级密码复杂度策略。</p><ul><li>true：开启。所有密码变动（创建/重置）必须通过下方定义的复杂度校验。</li><li>false：关闭。不进行复杂度过滤。</li></ul><p>默认值：false</p>
     * @param integer $MinLetterCount <p>大小写字母最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
     * @param integer $MinDigitCount <p>数字字符的最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
     * @param integer $MinSpecialCount <p>特殊字符最小字符数。</p><ul><li>取值范围：[1,16]。</li><li>默认值：1。</li></ul>
     * @param integer $MinLength <p>密码的最小总长度（字符数）。</p><ul><li>取值范围：[8, 64]。</li><li>默认值：8。</li><li>约束限制：密码的最小总长度必须大于或等于 MinLetterCount 、MinDigitCount 与 MinSpecialCount 三个参数之和。</li></ul>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("MinLetterCount",$param) and $param["MinLetterCount"] !== null) {
            $this->MinLetterCount = $param["MinLetterCount"];
        }

        if (array_key_exists("MinDigitCount",$param) and $param["MinDigitCount"] !== null) {
            $this->MinDigitCount = $param["MinDigitCount"];
        }

        if (array_key_exists("MinSpecialCount",$param) and $param["MinSpecialCount"] !== null) {
            $this->MinSpecialCount = $param["MinSpecialCount"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }
    }
}
