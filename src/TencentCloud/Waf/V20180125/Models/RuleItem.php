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
 * 大模型检测内容匹配
 *
 * @method string getKey() 获取 信息类型
 * @method void setKey(string $Key) 设置 信息类型
 * @method string getOp() 获取 操作符，默认是包含

 * @method void setOp(string $Op) 设置 操作符，默认是包含

 * @method array getValue() 获取信息类型
 * @method void setValue(array $Value) 设置信息类型
 * @method array getLevels() 获取信息类
 * @method void setLevels(array $Levels) 设置信息类
 * @method string getName() 获取Toolcall工具参数名，支持多层路径(如apiData.operate_op)，仅tool_args信息类型使用
 * @method void setName(string $Name) 设置Toolcall工具参数名，支持多层路径(如apiData.operate_op)，仅tool_args信息类型使用
 */
class RuleItem extends AbstractModel
{
    /**
     * @var string  信息类型
     */
    public $Key;

    /**
     * @var string  操作符，默认是包含

     */
    public $Op;

    /**
     * @var array 信息类型
     */
    public $Value;

    /**
     * @var array 信息类
     */
    public $Levels;

    /**
     * @var string Toolcall工具参数名，支持多层路径(如apiData.operate_op)，仅tool_args信息类型使用
     */
    public $Name;

    /**
     * @param string $Key  信息类型
     * @param string $Op  操作符，默认是包含

     * @param array $Value 信息类型
     * @param array $Levels 信息类
     * @param string $Name Toolcall工具参数名，支持多层路径(如apiData.operate_op)，仅tool_args信息类型使用
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

        if (array_key_exists("Op",$param) and $param["Op"] !== null) {
            $this->Op = $param["Op"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Levels",$param) and $param["Levels"] !== null) {
            $this->Levels = [];
            foreach ($param["Levels"] as $key => $value){
                $obj = new ValueLevel();
                $obj->deserialize($value);
                array_push($this->Levels, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
