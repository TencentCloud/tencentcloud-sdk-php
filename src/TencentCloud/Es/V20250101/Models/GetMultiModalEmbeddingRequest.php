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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMultiModalEmbedding请求参数结构体
 *
 * @method string getModelName() 获取模型名称，支持WeCLIPv2-Base和WeCLIPv2-Large
 * @method void setModelName(string $ModelName) 设置模型名称，支持WeCLIPv2-Base和WeCLIPv2-Large
 * @method array getTexts() 获取需进行向量化的文本集，一次输入限10条，单条文本长度限72
 * @method void setTexts(array $Texts) 设置需进行向量化的文本集，一次输入限10条，单条文本长度限72
 * @method array getImageData() 获取输入图片，base64编码格式，一次输入限制8个，单张图片限制1M
 * @method void setImageData(array $ImageData) 设置输入图片，base64编码格式，一次输入限制8个，单张图片限制1M
 * @method array getImageUrl() 获取输入图片url，一次输入限8个，推荐cos地址，速度更快
 * @method void setImageUrl(array $ImageUrl) 设置输入图片url，一次输入限8个，推荐cos地址，速度更快
 */
class GetMultiModalEmbeddingRequest extends AbstractModel
{
    /**
     * @var string 模型名称，支持WeCLIPv2-Base和WeCLIPv2-Large
     */
    public $ModelName;

    /**
     * @var array 需进行向量化的文本集，一次输入限10条，单条文本长度限72
     */
    public $Texts;

    /**
     * @var array 输入图片，base64编码格式，一次输入限制8个，单张图片限制1M
     */
    public $ImageData;

    /**
     * @var array 输入图片url，一次输入限8个，推荐cos地址，速度更快
     */
    public $ImageUrl;

    /**
     * @param string $ModelName 模型名称，支持WeCLIPv2-Base和WeCLIPv2-Large
     * @param array $Texts 需进行向量化的文本集，一次输入限10条，单条文本长度限72
     * @param array $ImageData 输入图片，base64编码格式，一次输入限制8个，单张图片限制1M
     * @param array $ImageUrl 输入图片url，一次输入限8个，推荐cos地址，速度更快
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Texts",$param) and $param["Texts"] !== null) {
            $this->Texts = $param["Texts"];
        }

        if (array_key_exists("ImageData",$param) and $param["ImageData"] !== null) {
            $this->ImageData = $param["ImageData"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }
    }
}
