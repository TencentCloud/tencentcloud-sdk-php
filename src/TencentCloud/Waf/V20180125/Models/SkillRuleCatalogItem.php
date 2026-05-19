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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * skills检测命中规则名录
 *
 * @method string getKey() 获取<p>规则分类标识（如 static_analysis、ai_analysis）</p>
 * @method void setKey(string $Key) 设置<p>规则分类标识（如 static_analysis、ai_analysis）</p>
 * @method string getValue() 获取<p>规则分类中文名称</p>
 * @method void setValue(string $Value) 设置<p>规则分类中文名称</p>
 */
class SkillRuleCatalogItem extends AbstractModel
{
    /**
     * @var string <p>规则分类标识（如 static_analysis、ai_analysis）</p>
     */
    public $Key;

    /**
     * @var string <p>规则分类中文名称</p>
     */
    public $Value;

    /**
     * @param string $Key <p>规则分类标识（如 static_analysis、ai_analysis）</p>
     * @param string $Value <p>规则分类中文名称</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
