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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 生商品图参数配置
 *
 * @method string getPrompt() 获取生成图片背景的提示词。如果此字段缺省则内部会自行生成灵感。
 * @method void setPrompt(string $Prompt) 设置生成图片背景的提示词。如果此字段缺省则内部会自行生成灵感。
 * @method string getNegativePrompt() 获取要阻止模型生成图片的提示词。
 * @method void setNegativePrompt(string $NegativePrompt) 设置要阻止模型生成图片的提示词。
 * @method string getProductDesc() 获取关于产品的描述，详细的描述，有助于生成更符合要求的图片。
 * @method void setProductDesc(string $ProductDesc) 设置关于产品的描述，详细的描述，有助于生成更符合要求的图片。
 * @method string getMoreRequirement() 获取特殊要求。如有特殊要求，可通过该字段传入。
 * @method void setMoreRequirement(string $MoreRequirement) 设置特殊要求。如有特殊要求，可通过该字段传入。
 * @method integer getOutputImageCount() 获取期望生成的图片张数。不传默认值为1，最大合法值为10。
 * @method void setOutputImageCount(integer $OutputImageCount) 设置期望生成的图片张数。不传默认值为1，最大合法值为10。
 */
class ProductImageConfig extends AbstractModel
{
    /**
     * @var string 生成图片背景的提示词。如果此字段缺省则内部会自行生成灵感。
     */
    public $Prompt;

    /**
     * @var string 要阻止模型生成图片的提示词。
     */
    public $NegativePrompt;

    /**
     * @var string 关于产品的描述，详细的描述，有助于生成更符合要求的图片。
     */
    public $ProductDesc;

    /**
     * @var string 特殊要求。如有特殊要求，可通过该字段传入。
     */
    public $MoreRequirement;

    /**
     * @var integer 期望生成的图片张数。不传默认值为1，最大合法值为10。
     */
    public $OutputImageCount;

    /**
     * @param string $Prompt 生成图片背景的提示词。如果此字段缺省则内部会自行生成灵感。
     * @param string $NegativePrompt 要阻止模型生成图片的提示词。
     * @param string $ProductDesc 关于产品的描述，详细的描述，有助于生成更符合要求的图片。
     * @param string $MoreRequirement 特殊要求。如有特殊要求，可通过该字段传入。
     * @param integer $OutputImageCount 期望生成的图片张数。不传默认值为1，最大合法值为10。
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("MoreRequirement",$param) and $param["MoreRequirement"] !== null) {
            $this->MoreRequirement = $param["MoreRequirement"];
        }

        if (array_key_exists("OutputImageCount",$param) and $param["OutputImageCount"] !== null) {
            $this->OutputImageCount = $param["OutputImageCount"];
        }
    }
}
