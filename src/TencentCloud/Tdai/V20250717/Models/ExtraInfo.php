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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体值守任务额外信息
 *
 * @method string getKey() 获取出参额外信息的Key
 * @method void setKey(string $Key) 设置出参额外信息的Key
 * @method string getDescription() 获取额外信息描述
 * @method void setDescription(string $Description) 设置额外信息描述
 * @method string getValue() 获取ExtraInfo的值
 * @method void setValue(string $Value) 设置ExtraInfo的值
 * @method string getValueType() 获取值的数据结构类型
 * @method void setValueType(string $ValueType) 设置值的数据结构类型
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var string 出参额外信息的Key
     */
    public $Key;

    /**
     * @var string 额外信息描述
     */
    public $Description;

    /**
     * @var string ExtraInfo的值
     */
    public $Value;

    /**
     * @var string 值的数据结构类型
     */
    public $ValueType;

    /**
     * @param string $Key 出参额外信息的Key
     * @param string $Description 额外信息描述
     * @param string $Value ExtraInfo的值
     * @param string $ValueType 值的数据结构类型
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
