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
namespace TencentCloud\Iot\V20180123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method NumberData getNumber() 获取数字类型
 * @method void setNumber(NumberData $Number) 设置数字类型
 * @method StringData getString() 获取字符串类型
 * @method void setString(StringData $String) 设置字符串类型
 * @method EnumData getEnum() 获取枚举类型
 * @method void setEnum(EnumData $Enum) 设置枚举类型
 * @method BoolData getBool() 获取布尔类型
 * @method void setBool(BoolData $Bool) 设置布尔类型
 */

/**
 *数据模版
 */
class DataTemplate extends AbstractModel
{
    /**
     * @var NumberData 数字类型
     */
    public $Number;

    /**
     * @var StringData 字符串类型
     */
    public $String;

    /**
     * @var EnumData 枚举类型
     */
    public $Enum;

    /**
     * @var BoolData 布尔类型
     */
    public $Bool;
    /**
     * @param NumberData $Number 数字类型
     * @param StringData $String 字符串类型
     * @param EnumData $Enum 枚举类型
     * @param BoolData $Bool 布尔类型
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = new NumberData();
            $this->Number->deserialize($param["Number"]);
        }

        if (array_key_exists("String",$param) and $param["String"] !== null) {
            $this->String = new StringData();
            $this->String->deserialize($param["String"]);
        }

        if (array_key_exists("Enum",$param) and $param["Enum"] !== null) {
            $this->Enum = new EnumData();
            $this->Enum->deserialize($param["Enum"]);
        }

        if (array_key_exists("Bool",$param) and $param["Bool"] !== null) {
            $this->Bool = new BoolData();
            $this->Bool->deserialize($param["Bool"]);
        }
    }
}
