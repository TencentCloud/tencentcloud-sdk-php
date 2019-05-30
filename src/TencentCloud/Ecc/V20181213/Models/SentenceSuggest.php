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
namespace TencentCloud\Ecc\V20181213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getErrorType() 获取错误类型
 * @method void setErrorType(string $ErrorType) 设置错误类型
 * @method string getOrigin() 获取原始单词
 * @method void setOrigin(string $Origin) 设置原始单词
 * @method string getReplace() 获取替换成 的单词
 * @method void setReplace(string $Replace) 设置替换成 的单词
 * @method string getMessage() 获取提示信息
 * @method void setMessage(string $Message) 设置提示信息
 */

/**
 *句子批阅建议
 */
class SentenceSuggest extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 错误类型
     */
    public $ErrorType;

    /**
     * @var string 原始单词
     */
    public $Origin;

    /**
     * @var string 替换成 的单词
     */
    public $Replace;

    /**
     * @var string 提示信息
     */
    public $Message;
    /**
     * @param string $Type 类型
     * @param string $ErrorType 错误类型
     * @param string $Origin 原始单词
     * @param string $Replace 替换成 的单词
     * @param string $Message 提示信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("Replace",$param) and $param["Replace"] !== null) {
            $this->Replace = $param["Replace"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
