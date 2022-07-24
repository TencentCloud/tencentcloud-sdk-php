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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理——Value处理参数——正则替换参数
 *
 * @method string getRegex() 获取正则表达式
 * @method void setRegex(string $Regex) 设置正则表达式
 * @method string getNewValue() 获取替换新值
 * @method void setNewValue(string $NewValue) 设置替换新值
 */
class RegexReplaceParam extends AbstractModel
{
    /**
     * @var string 正则表达式
     */
    public $Regex;

    /**
     * @var string 替换新值
     */
    public $NewValue;

    /**
     * @param string $Regex 正则表达式
     * @param string $NewValue 替换新值
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
        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }
    }
}
