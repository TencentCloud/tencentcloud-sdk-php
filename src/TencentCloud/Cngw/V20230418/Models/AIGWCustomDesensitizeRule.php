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
 * AI 网关自定义脱敏规则
 *
 * @method string getName() 获取<p>规则名称，同一配置内唯一，最长 64</p>
 * @method void setName(string $Name) 设置<p>规则名称，同一配置内唯一，最长 64</p>
 * @method string getPattern() 获取<p>RE2 兼容的正则表达式</p>
 * @method void setPattern(string $Pattern) 设置<p>RE2 兼容的正则表达式</p>
 * @method string getMaskFormat() 获取<p>日志场景为掩码格式，转发场景为占位符；最长 64</p>
 * @method void setMaskFormat(string $MaskFormat) 设置<p>日志场景为掩码格式，转发场景为占位符；最长 64</p>
 * @method boolean getEnabled() 获取<p>单条自定义规则是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>单条自定义规则是否启用</p>
 */
class AIGWCustomDesensitizeRule extends AbstractModel
{
    /**
     * @var string <p>规则名称，同一配置内唯一，最长 64</p>
     */
    public $Name;

    /**
     * @var string <p>RE2 兼容的正则表达式</p>
     */
    public $Pattern;

    /**
     * @var string <p>日志场景为掩码格式，转发场景为占位符；最长 64</p>
     */
    public $MaskFormat;

    /**
     * @var boolean <p>单条自定义规则是否启用</p>
     */
    public $Enabled;

    /**
     * @param string $Name <p>规则名称，同一配置内唯一，最长 64</p>
     * @param string $Pattern <p>RE2 兼容的正则表达式</p>
     * @param string $MaskFormat <p>日志场景为掩码格式，转发场景为占位符；最长 64</p>
     * @param boolean $Enabled <p>单条自定义规则是否启用</p>
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
