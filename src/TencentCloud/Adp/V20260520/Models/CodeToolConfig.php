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
 * @method string getCode() 获取<p>代码</p>
 * @method void setCode(string $Code) 设置<p>代码</p>
 * @method ToolExample getExample() 获取<p>示例</p>
 * @method void setExample(ToolExample $Example) 设置<p>示例</p>
 * @method array getInputs() 获取<p>输入参数</p>
 * @method void setInputs(array $Inputs) 设置<p>输入参数</p>
 * @method array getOutputs() 获取<p>输出参数</p>
 * @method void setOutputs(array $Outputs) 设置<p>输出参数</p>
 */
class CodeToolConfig extends AbstractModel
{
    /**
     * @var string <p>代码</p>
     */
    public $Code;

    /**
     * @var ToolExample <p>示例</p>
     */
    public $Example;

    /**
     * @var array <p>输入参数</p>
     */
    public $Inputs;

    /**
     * @var array <p>输出参数</p>
     */
    public $Outputs;

    /**
     * @param string $Code <p>代码</p>
     * @param ToolExample $Example <p>示例</p>
     * @param array $Inputs <p>输入参数</p>
     * @param array $Outputs <p>输出参数</p>
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
