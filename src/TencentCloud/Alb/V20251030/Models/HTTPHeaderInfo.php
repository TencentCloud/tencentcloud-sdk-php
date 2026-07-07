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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP Header信息
 *
 * @method string getKey() 获取HTTP Header的键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Host，Cookie。
 * @method void setKey(string $Key) 设置HTTP Header的键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Host，Cookie。
 * @method array getValues() 获取HTTP Header的值，长度1 ~ 128个字符，支持可打印字符。
不支持"，开头和结尾不能是空格，结尾不能是\。
 * @method void setValues(array $Values) 设置HTTP Header的值，长度1 ~ 128个字符，支持可打印字符。
不支持"，开头和结尾不能是空格，结尾不能是\。
 */
class HTTPHeaderInfo extends AbstractModel
{
    /**
     * @var string HTTP Header的键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Host，Cookie。
     */
    public $Key;

    /**
     * @var array HTTP Header的值，长度1 ~ 128个字符，支持可打印字符。
不支持"，开头和结尾不能是空格，结尾不能是\。
     */
    public $Values;

    /**
     * @param string $Key HTTP Header的键，长度1 ~ 40个字符，支持的字符集为：a-z A-Z 0-9 - _ 。
不支持中文，不支持Host，Cookie。
     * @param array $Values HTTP Header的值，长度1 ~ 128个字符，支持可打印字符。
不支持"，开头和结尾不能是空格，结尾不能是\。
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
