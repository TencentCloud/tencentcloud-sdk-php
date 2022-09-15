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
 * Map参数
 *
 * @method string getKey() 获取key值
 * @method void setKey(string $Key) 设置key值
 * @method string getType() 获取类型，DEFAULT默认，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射
 * @method void setType(string $Type) 设置类型，DEFAULT默认，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 */
class MapParam extends AbstractModel
{
    /**
     * @var string key值
     */
    public $Key;

    /**
     * @var string 类型，DEFAULT默认，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射
     */
    public $Type;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @param string $Key key值
     * @param string $Type 类型，DEFAULT默认，DATE系统预设-时间戳，CUSTOMIZE自定义，MAPPING映射
     * @param string $Value 值
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
