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
 * HTTP查询字符串信息
 *
 * @method string getKey() 获取查询字符串的键，长度1 ~ 16个字符。支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。


 * @method void setKey(string $Key) 设置查询字符串的键，长度1 ~ 16个字符。支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。


 * @method string getValue() 获取查询字符串的值，长度1 ~ 128字符，支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。
 * @method void setValue(string $Value) 设置查询字符串的值，长度1 ~ 128字符，支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。
 */
class HTTPQueryStringInfo extends AbstractModel
{
    /**
     * @var string 查询字符串的键，长度1 ~ 16个字符。支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。


     */
    public $Key;

    /**
     * @var string 查询字符串的值，长度1 ~ 128字符，支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。
     */
    public $Value;

    /**
     * @param string $Key 查询字符串的键，长度1 ~ 16个字符。支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。


     * @param string $Value 查询字符串的值，长度1 ~ 128字符，支持可打印字符，不支持空格和#[]{}\|<>&。
支持 * 多字符通配，? 单字符通配。
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
