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
 * 节点运行的内容
 *
 * @method string getInput() 获取输入变量信息
 * @method void setInput(string $Input) 设置输入变量信息
 * @method string getOutput() 获取输出变量信息
 * @method void setOutput(string $Output) 设置输出变量信息
 * @method string getOriginalOutput() 获取原始输出信息。部分节点才有值，如工具节点、代码节点
 * @method void setOriginalOutput(string $OriginalOutput) 设置原始输出信息。部分节点才有值，如工具节点、代码节点
 * @method string getInputRef() 获取节点输入的完整内容的链接。（当Input内容超过限制的时候此字段才有值）
 * @method void setInputRef(string $InputRef) 设置节点输入的完整内容的链接。（当Input内容超过限制的时候此字段才有值）
 * @method string getOutputRef() 获取节点输出的完整内容的链接。（当Output内容超过限制的时候此字段才有值）
 * @method void setOutputRef(string $OutputRef) 设置节点输出的完整内容的链接。（当Output内容超过限制的时候此字段才有值）
 * @method string getOriginalOutputRef() 获取任务的原始输出的完整内容的链接。（当TaskOutput内容超过限制的时候此字段才有值）
 * @method void setOriginalOutputRef(string $OriginalOutputRef) 设置任务的原始输出的完整内容的链接。（当TaskOutput内容超过限制的时候此字段才有值）
 */
class NodeRunContent extends AbstractModel
{
    /**
     * @var string 输入变量信息
     */
    public $Input;

    /**
     * @var string 输出变量信息
     */
    public $Output;

    /**
     * @var string 原始输出信息。部分节点才有值，如工具节点、代码节点
     */
    public $OriginalOutput;

    /**
     * @var string 节点输入的完整内容的链接。（当Input内容超过限制的时候此字段才有值）
     */
    public $InputRef;

    /**
     * @var string 节点输出的完整内容的链接。（当Output内容超过限制的时候此字段才有值）
     */
    public $OutputRef;

    /**
     * @var string 任务的原始输出的完整内容的链接。（当TaskOutput内容超过限制的时候此字段才有值）
     */
    public $OriginalOutputRef;

    /**
     * @param string $Input 输入变量信息
     * @param string $Output 输出变量信息
     * @param string $OriginalOutput 原始输出信息。部分节点才有值，如工具节点、代码节点
     * @param string $InputRef 节点输入的完整内容的链接。（当Input内容超过限制的时候此字段才有值）
     * @param string $OutputRef 节点输出的完整内容的链接。（当Output内容超过限制的时候此字段才有值）
     * @param string $OriginalOutputRef 任务的原始输出的完整内容的链接。（当TaskOutput内容超过限制的时候此字段才有值）
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("OriginalOutput",$param) and $param["OriginalOutput"] !== null) {
            $this->OriginalOutput = $param["OriginalOutput"];
        }

        if (array_key_exists("InputRef",$param) and $param["InputRef"] !== null) {
            $this->InputRef = $param["InputRef"];
        }

        if (array_key_exists("OutputRef",$param) and $param["OutputRef"] !== null) {
            $this->OutputRef = $param["OutputRef"];
        }

        if (array_key_exists("OriginalOutputRef",$param) and $param["OriginalOutputRef"] !== null) {
            $this->OriginalOutputRef = $param["OriginalOutputRef"];
        }
    }
}
