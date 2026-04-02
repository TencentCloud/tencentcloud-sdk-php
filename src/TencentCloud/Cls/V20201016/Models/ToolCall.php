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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型生成的工具调用
 *
 * @method string getId() 获取<p>工具调用id</p>
 * @method void setId(string $Id) 设置<p>工具调用id</p>
 * @method string getType() 获取<p>工具调用类型，当前只支持function</p>
 * @method void setType(string $Type) 设置<p>工具调用类型，当前只支持function</p>
 * @method ToolCallFunction getFunction() 获取<p>具体的function调用</p>
 * @method void setFunction(ToolCallFunction $Function) 设置<p>具体的function调用</p>
 * @method integer getIndex() 获取<p>索引值</p>
 * @method void setIndex(integer $Index) 设置<p>索引值</p>
 */
class ToolCall extends AbstractModel
{
    /**
     * @var string <p>工具调用id</p>
     */
    public $Id;

    /**
     * @var string <p>工具调用类型，当前只支持function</p>
     */
    public $Type;

    /**
     * @var ToolCallFunction <p>具体的function调用</p>
     */
    public $Function;

    /**
     * @var integer <p>索引值</p>
     */
    public $Index;

    /**
     * @param string $Id <p>工具调用id</p>
     * @param string $Type <p>工具调用类型，当前只支持function</p>
     * @param ToolCallFunction $Function <p>具体的function调用</p>
     * @param integer $Index <p>索引值</p>
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
