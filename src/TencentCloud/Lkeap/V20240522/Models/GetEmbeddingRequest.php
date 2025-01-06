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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEmbedding请求参数结构体
 *
 * @method string getModel() 获取模型名称
 * @method void setModel(string $Model) 设置模型名称
 * @method array getInputs() 获取需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
 * @method void setInputs(array $Inputs) 设置需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
 */
class GetEmbeddingRequest extends AbstractModel
{
    /**
     * @var string 模型名称
     */
    public $Model;

    /**
     * @var array 需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
     */
    public $Inputs;

    /**
     * @param string $Model 模型名称
     * @param array $Inputs 需要 embedding 的文本, 单条文本最大长度500个字符, 总条数最大7条
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

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = $param["Inputs"];
        }
    }
}
