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
 * GetEmbedding请求参数结构体
 *
 * @method string getInput() 获取输入文本。总长度不超过 1024 个 Token，超过则会截断最后面的内容。
 * @method void setInput(string $Input) 设置输入文本。总长度不超过 1024 个 Token，超过则会截断最后面的内容。
 * @method array getInputList() 获取输入文本数组。输入数组总长度不超过 50 。
 * @method void setInputList(array $InputList) 设置输入文本数组。输入数组总长度不超过 50 。
 */
class GetEmbeddingRequest extends AbstractModel
{
    /**
     * @var string 输入文本。总长度不超过 1024 个 Token，超过则会截断最后面的内容。
     */
    public $Input;

    /**
     * @var array 输入文本数组。输入数组总长度不超过 50 。
     */
    public $InputList;

    /**
     * @param string $Input 输入文本。总长度不超过 1024 个 Token，超过则会截断最后面的内容。
     * @param array $InputList 输入文本数组。输入数组总长度不超过 50 。
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

        if (array_key_exists("InputList",$param) and $param["InputList"] !== null) {
            $this->InputList = $param["InputList"];
        }
    }
}
