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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EmbeddingData请求参数结构体
 *
 * @method string getModel() 获取<p>embedding 的模型，现在只支持 text_embedding_v1</p><p>枚举值：</p><ul><li>text_embedding_v1： 文本embedding的模型，可以填写Prompt</li></ul>
 * @method void setModel(string $Model) 设置<p>embedding 的模型，现在只支持 text_embedding_v1</p><p>枚举值：</p><ul><li>text_embedding_v1： 文本embedding的模型，可以填写Prompt</li></ul>
 * @method array getFiles() 获取<p>embedding的输入</p>
 * @method void setFiles(array $Files) 设置<p>embedding的输入</p>
 * @method string getPrompt() 获取<p>embedding 的输入prompt</p>
 * @method void setPrompt(string $Prompt) 设置<p>embedding 的输入prompt</p>
 */
class EmbeddingDataRequest extends AbstractModel
{
    /**
     * @var string <p>embedding 的模型，现在只支持 text_embedding_v1</p><p>枚举值：</p><ul><li>text_embedding_v1： 文本embedding的模型，可以填写Prompt</li></ul>
     */
    public $Model;

    /**
     * @var array <p>embedding的输入</p>
     */
    public $Files;

    /**
     * @var string <p>embedding 的输入prompt</p>
     */
    public $Prompt;

    /**
     * @param string $Model <p>embedding 的模型，现在只支持 text_embedding_v1</p><p>枚举值：</p><ul><li>text_embedding_v1： 文本embedding的模型，可以填写Prompt</li></ul>
     * @param array $Files <p>embedding的输入</p>
     * @param string $Prompt <p>embedding 的输入prompt</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new EmbeddingData();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }
    }
}
