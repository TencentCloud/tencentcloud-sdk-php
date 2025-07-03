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
 * @method string getModel() 获取说明：选择生成向量的模型
备注：仅一个模型可选
 * @method void setModel(string $Model) 设置说明：选择生成向量的模型
备注：仅一个模型可选
 * @method array getInputs() 获取说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
 * @method void setInputs(array $Inputs) 设置说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
 */
class GetEmbeddingRequest extends AbstractModel
{
    /**
     * @var string 说明：选择生成向量的模型
备注：仅一个模型可选
     */
    public $Model;

    /**
     * @var array 说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
     */
    public $Inputs;

    /**
     * @param string $Model 说明：选择生成向量的模型
备注：仅一个模型可选
     * @param array $Inputs 说明：需要 embedding 的文本
备注：单条query最多2000个字符，总条数最多7条
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
