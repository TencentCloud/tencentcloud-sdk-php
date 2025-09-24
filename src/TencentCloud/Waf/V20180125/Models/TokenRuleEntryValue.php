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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通过复杂类型识别传入的不同类型参数值
 *
 * @method boolean getLogicValue() 获取布尔类型值
 * @method void setLogicValue(boolean $LogicValue) 设置布尔类型值
 * @method array getMultiValue() 获取数组类型值
可以存储字符串/数值
如果只有一个元素，则为长度为1的数组
 * @method void setMultiValue(array $MultiValue) 设置数组类型值
可以存储字符串/数值
如果只有一个元素，则为长度为1的数组
 * @method string getValidKey() 获取指示有效的字段
 * @method void setValidKey(string $ValidKey) 设置指示有效的字段
 */
class TokenRuleEntryValue extends AbstractModel
{
    /**
     * @var boolean 布尔类型值
     */
    public $LogicValue;

    /**
     * @var array 数组类型值
可以存储字符串/数值
如果只有一个元素，则为长度为1的数组
     */
    public $MultiValue;

    /**
     * @var string 指示有效的字段
     */
    public $ValidKey;

    /**
     * @param boolean $LogicValue 布尔类型值
     * @param array $MultiValue 数组类型值
可以存储字符串/数值
如果只有一个元素，则为长度为1的数组
     * @param string $ValidKey 指示有效的字段
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
        if (array_key_exists("LogicValue",$param) and $param["LogicValue"] !== null) {
            $this->LogicValue = $param["LogicValue"];
        }

        if (array_key_exists("MultiValue",$param) and $param["MultiValue"] !== null) {
            $this->MultiValue = $param["MultiValue"];
        }

        if (array_key_exists("ValidKey",$param) and $param["ValidKey"] !== null) {
            $this->ValidKey = $param["ValidKey"];
        }
    }
}
