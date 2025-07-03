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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型生成的工具调用
 *
 * @method string getId() 获取工具调用id
 * @method void setId(string $Id) 设置工具调用id
 * @method string getType() 获取工具调用类型，当前只支持function
 * @method void setType(string $Type) 设置工具调用类型，当前只支持function
 * @method ToolCallFunction getFunction() 获取具体的function调用
 * @method void setFunction(ToolCallFunction $Function) 设置具体的function调用
 * @method integer getIndex() 获取索引值
 * @method void setIndex(integer $Index) 设置索引值
 */
class ToolCall extends AbstractModel
{
    /**
     * @var string 工具调用id
     */
    public $Id;

    /**
     * @var string 工具调用类型，当前只支持function
     */
    public $Type;

    /**
     * @var ToolCallFunction 具体的function调用
     */
    public $Function;

    /**
     * @var integer 索引值
     */
    public $Index;

    /**
     * @param string $Id 工具调用id
     * @param string $Type 工具调用类型，当前只支持function
     * @param ToolCallFunction $Function 具体的function调用
     * @param integer $Index 索引值
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = new ToolCallFunction();
            $this->Function->deserialize($param["Function"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
