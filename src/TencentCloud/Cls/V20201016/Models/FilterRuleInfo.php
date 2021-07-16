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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递日志的过滤规则
 *
 * @method string getKey() 获取过滤规则Key
 * @method void setKey(string $Key) 设置过滤规则Key
 * @method string getRegex() 获取过滤规则
 * @method void setRegex(string $Regex) 设置过滤规则
 * @method string getValue() 获取过滤规则Value
 * @method void setValue(string $Value) 设置过滤规则Value
 */
class FilterRuleInfo extends AbstractModel
{
    /**
     * @var string 过滤规则Key
     */
    public $Key;

    /**
     * @var string 过滤规则
     */
    public $Regex;

    /**
     * @var string 过滤规则Value
     */
    public $Value;

    /**
     * @param string $Key 过滤规则Key
     * @param string $Regex 过滤规则
     * @param string $Value 过滤规则Value
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

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
