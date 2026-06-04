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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CodeToolConfig
 *
 * @method string getCode() 获取代码
 * @method void setCode(string $Code) 设置代码
 * @method ToolExample getExample() 获取示例
 * @method void setExample(ToolExample $Example) 设置示例
 * @method array getInputs() 获取输入参数
 * @method void setInputs(array $Inputs) 设置输入参数
 * @method array getOutputs() 获取输出参数
 * @method void setOutputs(array $Outputs) 设置输出参数
 */
class CodeToolConfig extends AbstractModel
{
    /**
     * @var string 代码
     */
    public $Code;

    /**
     * @var ToolExample 示例
     */
    public $Example;

    /**
     * @var array 输入参数
     */
    public $Inputs;

    /**
     * @var array 输出参数
     */
    public $Outputs;

    /**
     * @param string $Code 代码
     * @param ToolExample $Example 示例
     * @param array $Inputs 输入参数
     * @param array $Outputs 输出参数
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Example",$param) and $param["Example"] !== null) {
            $this->Example = new ToolExample();
            $this->Example->deserialize($param["Example"]);
        }

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = [];
            foreach ($param["Inputs"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Inputs, $obj);
            }
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new ResponseParam();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }
    }
}
