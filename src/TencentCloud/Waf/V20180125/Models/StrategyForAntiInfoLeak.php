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
 * 防信息泄露的匹配条件结构体
 *
 * @method string getField() 获取匹配条件，returncode（响应码）、keywords（关键字）、information（敏感信息）
 * @method void setField(string $Field) 设置匹配条件，returncode（响应码）、keywords（关键字）、information（敏感信息）
 * @method string getCompareFunc() 获取逻辑符号，固定取值为contains
 * @method void setCompareFunc(string $CompareFunc) 设置逻辑符号，固定取值为contains
 * @method string getContent() 获取匹配内容。
以下三个对应Field为information时可取的匹配内容：
idcard（身份证）、phone（手机号）、bankcard（银行卡）。
以下为对应Field为returncode时可取的匹配内容：
400（状态码400）、403（状态码403）、404（状态码404）、4xx（其它4xx状态码）、500（状态码500）、501（状态码501）、502（状态码502）、504（状态码504）、5xx（其它5xx状态码）。
当对应Field为keywords时由用户自己输入匹配内容。

 * @method void setContent(string $Content) 设置匹配内容。
以下三个对应Field为information时可取的匹配内容：
idcard（身份证）、phone（手机号）、bankcard（银行卡）。
以下为对应Field为returncode时可取的匹配内容：
400（状态码400）、403（状态码403）、404（状态码404）、4xx（其它4xx状态码）、500（状态码500）、501（状态码501）、502（状态码502）、504（状态码504）、5xx（其它5xx状态码）。
当对应Field为keywords时由用户自己输入匹配内容。
 */
class StrategyForAntiInfoLeak extends AbstractModel
{
    /**
     * @var string 匹配条件，returncode（响应码）、keywords（关键字）、information（敏感信息）
     */
    public $Field;

    /**
     * @var string 逻辑符号，固定取值为contains
     */
    public $CompareFunc;

    /**
     * @var string 匹配内容。
以下三个对应Field为information时可取的匹配内容：
idcard（身份证）、phone（手机号）、bankcard（银行卡）。
以下为对应Field为returncode时可取的匹配内容：
400（状态码400）、403（状态码403）、404（状态码404）、4xx（其它4xx状态码）、500（状态码500）、501（状态码501）、502（状态码502）、504（状态码504）、5xx（其它5xx状态码）。
当对应Field为keywords时由用户自己输入匹配内容。

     */
    public $Content;

    /**
     * @param string $Field 匹配条件，returncode（响应码）、keywords（关键字）、information（敏感信息）
     * @param string $CompareFunc 逻辑符号，固定取值为contains
     * @param string $Content 匹配内容。
以下三个对应Field为information时可取的匹配内容：
idcard（身份证）、phone（手机号）、bankcard（银行卡）。
以下为对应Field为returncode时可取的匹配内容：
400（状态码400）、403（状态码403）、404（状态码404）、4xx（其它4xx状态码）、500（状态码500）、501（状态码501）、502（状态码502）、504（状态码504）、5xx（其它5xx状态码）。
当对应Field为keywords时由用户自己输入匹配内容。
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("CompareFunc",$param) and $param["CompareFunc"] !== null) {
            $this->CompareFunc = $param["CompareFunc"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
