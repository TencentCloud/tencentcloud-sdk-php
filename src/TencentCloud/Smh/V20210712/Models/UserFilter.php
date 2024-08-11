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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于唯一查找用户的过滤器。
 *
 * @method string getKey() 获取过滤类型，当前支持：UserId、PhoneNumber、Email、AccountName、AccountUserId。
 * @method void setKey(string $Key) 设置过滤类型，当前支持：UserId、PhoneNumber、Email、AccountName、AccountUserId。
 * @method string getValue() 获取过滤值，只支持完全匹配，不支持模糊搜索。针对不同的 Key，Value 的取值如下：
UserId: user12345678abcde
PhoneNumber: +86-13800000000（格式为：{CountryCode}-{PhoneNumber}）
Email: admin@mail.foobar.com
AccountName: account_name
AccountUserId: x53mYVqykfPqTCqekbNwwa4aXk4
 * @method void setValue(string $Value) 设置过滤值，只支持完全匹配，不支持模糊搜索。针对不同的 Key，Value 的取值如下：
UserId: user12345678abcde
PhoneNumber: +86-13800000000（格式为：{CountryCode}-{PhoneNumber}）
Email: admin@mail.foobar.com
AccountName: account_name
AccountUserId: x53mYVqykfPqTCqekbNwwa4aXk4
 */
class UserFilter extends AbstractModel
{
    /**
     * @var string 过滤类型，当前支持：UserId、PhoneNumber、Email、AccountName、AccountUserId。
     */
    public $Key;

    /**
     * @var string 过滤值，只支持完全匹配，不支持模糊搜索。针对不同的 Key，Value 的取值如下：
UserId: user12345678abcde
PhoneNumber: +86-13800000000（格式为：{CountryCode}-{PhoneNumber}）
Email: admin@mail.foobar.com
AccountName: account_name
AccountUserId: x53mYVqykfPqTCqekbNwwa4aXk4
     */
    public $Value;

    /**
     * @param string $Key 过滤类型，当前支持：UserId、PhoneNumber、Email、AccountName、AccountUserId。
     * @param string $Value 过滤值，只支持完全匹配，不支持模糊搜索。针对不同的 Key，Value 的取值如下：
UserId: user12345678abcde
PhoneNumber: +86-13800000000（格式为：{CountryCode}-{PhoneNumber}）
Email: admin@mail.foobar.com
AccountName: account_name
AccountUserId: x53mYVqykfPqTCqekbNwwa4aXk4
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
