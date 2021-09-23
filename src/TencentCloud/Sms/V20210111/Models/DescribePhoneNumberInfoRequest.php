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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePhoneNumberInfo请求参数结构体
 *
 * @method array getPhoneNumberSet() 获取查询手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 * @method void setPhoneNumberSet(array $PhoneNumberSet) 设置查询手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
 */
class DescribePhoneNumberInfoRequest extends AbstractModel
{
    /**
     * @var array 查询手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
     */
    public $PhoneNumberSet;

    /**
     * @param array $PhoneNumberSet 查询手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号。
例如：+8613711112222， 其中前面有一个+号 ，86为国家码，13711112222为手机号。
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
        if (array_key_exists("PhoneNumberSet",$param) and $param["PhoneNumberSet"] !== null) {
            $this->PhoneNumberSet = $param["PhoneNumberSet"];
        }
    }
}
