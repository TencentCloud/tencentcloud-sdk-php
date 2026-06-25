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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关自定义脱敏规则（A 层 / B 层共用结构体，MaskFormat 含义随所属层不同）
 *
 * @method string getName() 获取<p>自定义脱敏规则名称</p>
 * @method void setName(string $Name) 设置<p>自定义脱敏规则名称</p>
 * @method string getPattern() 获取<p>自定义脱敏规则匹配正则</p>
 * @method void setPattern(string $Pattern) 设置<p>自定义脱敏规则匹配正则</p>
 * @method string getMaskFormat() 获取<p>自定义脱敏规则掩码</p>
 * @method void setMaskFormat(string $MaskFormat) 设置<p>自定义脱敏规则掩码</p>
 * @method boolean getEnabled() 获取<p>自定义脱敏规则开关</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>自定义脱敏规则开关</p>
 */
class AIGWCustomDesensitizeRule extends AbstractModel
{
    /**
     * @var string <p>自定义脱敏规则名称</p>
     */
    public $Name;

    /**
     * @var string <p>自定义脱敏规则匹配正则</p>
     */
    public $Pattern;

    /**
     * @var string <p>自定义脱敏规则掩码</p>
     */
    public $MaskFormat;

    /**
     * @var boolean <p>自定义脱敏规则开关</p>
     */
    public $Enabled;

    /**
     * @param string $Name <p>自定义脱敏规则名称</p>
     * @param string $Pattern <p>自定义脱敏规则匹配正则</p>
     * @param string $MaskFormat <p>自定义脱敏规则掩码</p>
     * @param boolean $Enabled <p>自定义脱敏规则开关</p>
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

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("MaskFormat",$param) and $param["MaskFormat"] !== null) {
            $this->MaskFormat = $param["MaskFormat"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
