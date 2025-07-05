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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高级过滤规则
 *
 * @method string getKey() 获取过滤字段
 * @method void setKey(string $Key) 设置过滤字段
 * @method integer getRule() 获取过滤规则，0:等于，1:字段存在，2:字段不存在
 * @method void setRule(integer $Rule) 设置过滤规则，0:等于，1:字段存在，2:字段不存在
 * @method string getValue() 获取过滤值
 * @method void setValue(string $Value) 设置过滤值
 */
class AdvanceFilterRuleInfo extends AbstractModel
{
    /**
     * @var string 过滤字段
     */
    public $Key;

    /**
     * @var integer 过滤规则，0:等于，1:字段存在，2:字段不存在
     */
    public $Rule;

    /**
     * @var string 过滤值
     */
    public $Value;

    /**
     * @param string $Key 过滤字段
     * @param integer $Rule 过滤规则，0:等于，1:字段存在，2:字段不存在
     * @param string $Value 过滤值
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

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
