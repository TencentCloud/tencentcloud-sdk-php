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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transform输出参数
 *
 * @method string getKey() 获取对应输出json中的key
 * @method void setKey(string $Key) 设置对应输出json中的key
 * @method string getValue() 获取可以填json-path也可以支持常量或者内置关键字date类型
 * @method void setValue(string $Value) 设置可以填json-path也可以支持常量或者内置关键字date类型
 * @method string getValueType() 获取value的数据类型, 可选值: STRING, NUMBER,BOOLEAN,NULL,SYS_VARIABLE,JSONPATH
 * @method void setValueType(string $ValueType) 设置value的数据类型, 可选值: STRING, NUMBER,BOOLEAN,NULL,SYS_VARIABLE,JSONPATH
 */
class OutputStructParam extends AbstractModel
{
    /**
     * @var string 对应输出json中的key
     */
    public $Key;

    /**
     * @var string 可以填json-path也可以支持常量或者内置关键字date类型
     */
    public $Value;

    /**
     * @var string value的数据类型, 可选值: STRING, NUMBER,BOOLEAN,NULL,SYS_VARIABLE,JSONPATH
     */
    public $ValueType;

    /**
     * @param string $Key 对应输出json中的key
     * @param string $Value 可以填json-path也可以支持常量或者内置关键字date类型
     * @param string $ValueType value的数据类型, 可选值: STRING, NUMBER,BOOLEAN,NULL,SYS_VARIABLE,JSONPATH
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

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }
    }
}
