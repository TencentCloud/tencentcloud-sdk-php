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
 * 云图API改版后, 不支持将复杂json类型编码成string,因此通过此复杂类型识别传入的不同类型参数值
 *
 * @method string getBasicValue() 获取string类型值
 * @method void setBasicValue(string $BasicValue) 设置string类型值
 * @method boolean getLogicValue() 获取布尔类型值
 * @method void setLogicValue(boolean $LogicValue) 设置布尔类型值
 * @method array getBelongValue() 获取string数组类型值
 * @method void setBelongValue(array $BelongValue) 设置string数组类型值
 * @method string getValidKey() 获取指示有效的字段
 * @method void setValidKey(string $ValidKey) 设置指示有效的字段
 * @method array getMultiValue() 获取string数组类型值
 * @method void setMultiValue(array $MultiValue) 设置string数组类型值
 */
class UCBEntryValue extends AbstractModel
{
    /**
     * @var string string类型值
     */
    public $BasicValue;

    /**
     * @var boolean 布尔类型值
     */
    public $LogicValue;

    /**
     * @var array string数组类型值
     */
    public $BelongValue;

    /**
     * @var string 指示有效的字段
     */
    public $ValidKey;

    /**
     * @var array string数组类型值
     */
    public $MultiValue;

    /**
     * @param string $BasicValue string类型值
     * @param boolean $LogicValue 布尔类型值
     * @param array $BelongValue string数组类型值
     * @param string $ValidKey 指示有效的字段
     * @param array $MultiValue string数组类型值
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
        if (array_key_exists("BasicValue",$param) and $param["BasicValue"] !== null) {
            $this->BasicValue = $param["BasicValue"];
        }

        if (array_key_exists("LogicValue",$param) and $param["LogicValue"] !== null) {
            $this->LogicValue = $param["LogicValue"];
        }

        if (array_key_exists("BelongValue",$param) and $param["BelongValue"] !== null) {
            $this->BelongValue = $param["BelongValue"];
        }

        if (array_key_exists("ValidKey",$param) and $param["ValidKey"] !== null) {
            $this->ValidKey = $param["ValidKey"];
        }

        if (array_key_exists("MultiValue",$param) and $param["MultiValue"] !== null) {
            $this->MultiValue = $param["MultiValue"];
        }
    }
}
