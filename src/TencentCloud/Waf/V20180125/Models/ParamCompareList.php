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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * bot-自定义规则请求参数比对结构体
 *
 * @method string getKey() 获取请求参数比对的匹配参数
 * @method void setKey(string $Key) 设置请求参数比对的匹配参数
 * @method string getValue() 获取请求参数比对的匹配值
 * @method void setValue(string $Value) 设置请求参数比对的匹配值
 */
class ParamCompareList extends AbstractModel
{
    /**
     * @var string 请求参数比对的匹配参数
     */
    public $Key;

    /**
     * @var string 请求参数比对的匹配值
     */
    public $Value;

    /**
     * @param string $Key 请求参数比对的匹配参数
     * @param string $Value 请求参数比对的匹配值
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
