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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceBackground请求参数结构体
 *
 * @method string getProductUrl() 获取商品原图 Url。
图片限制：单边分辨率小于4000，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method void setProductUrl(string $ProductUrl) 设置商品原图 Url。
图片限制：单边分辨率小于4000，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
 * @method string getPrompt() 获取对新背景的文本描述。
最多支持256个 utf-8 字符，支持中、英文。
如果 Prompt = "BackgroundTemplate" 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。
 * @method void setPrompt(string $Prompt) 设置对新背景的文本描述。
最多支持256个 utf-8 字符，支持中、英文。
如果 Prompt = "BackgroundTemplate" 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。
 * @method string getNegativePrompt() 获取反向提示词。
最多支持256个 utf-8 字符，支持中、英文。
 * @method void setNegativePrompt(string $NegativePrompt) 设置反向提示词。
最多支持256个 utf-8 字符，支持中、英文。
 * @method string getProduct() 获取商品图中的商品主体名称。
最多支持50个 utf-8 字符，支持中、英文。
建议说明商品主体，否则影响生成效果。
 * @method void setProduct(string $Product) 设置商品图中的商品主体名称。
最多支持50个 utf-8 字符，支持中、英文。
建议说明商品主体，否则影响生成效果。
 * @method string getBackgroundTemplate() 获取背景模板。
仅当 Prompt = "BackgroundTemplate" 时生效，可支持的模板详见 [商品背景模板列表](https://cloud.tencent.com/document/product/1668/115391) ，请传入字段“背景名称”中的值。
 * @method void setBackgroundTemplate(string $BackgroundTemplate) 设置背景模板。
仅当 Prompt = "BackgroundTemplate" 时生效，可支持的模板详见 [商品背景模板列表](https://cloud.tencent.com/document/product/1668/115391) ，请传入字段“背景名称”中的值。
 * @method string getMaskUrl() 获取商品 Mask 图 Url，要求背景透明，保留商品主体。
如果不传，将自动使用内置的商品分割算法得到 Mask。
支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。
图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。
 * @method void setMaskUrl(string $MaskUrl) 设置商品 Mask 图 Url，要求背景透明，保留商品主体。
如果不传，将自动使用内置的商品分割算法得到 Mask。
支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。
图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。
 * @method string getResolution() 获取替换背景后生成的商品图分辨率。
支持生成单边分辨率大于500且小于4000、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。
建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。
 * @method void setResolution(string $Resolution) 设置替换背景后生成的商品图分辨率。
支持生成单边分辨率大于500且小于4000、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。
建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。
 * @method integer getLogoAdd() 获取为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method string getRspImgType() 获取返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。
生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
 * @method void setRspImgType(string $RspImgType) 设置返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。
生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
 */
class ReplaceBackgroundRequest extends AbstractModel
{
    /**
     * @var string 商品原图 Url。
图片限制：单边分辨率小于4000，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     */
    public $ProductUrl;

    /**
     * @var string 对新背景的文本描述。
最多支持256个 utf-8 字符，支持中、英文。
如果 Prompt = "BackgroundTemplate" 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。
     */
    public $Prompt;

    /**
     * @var string 反向提示词。
最多支持256个 utf-8 字符，支持中、英文。
     */
    public $NegativePrompt;

    /**
     * @var string 商品图中的商品主体名称。
最多支持50个 utf-8 字符，支持中、英文。
建议说明商品主体，否则影响生成效果。
     */
    public $Product;

    /**
     * @var string 背景模板。
仅当 Prompt = "BackgroundTemplate" 时生效，可支持的模板详见 [商品背景模板列表](https://cloud.tencent.com/document/product/1668/115391) ，请传入字段“背景名称”中的值。
     */
    public $BackgroundTemplate;

    /**
     * @var string 商品 Mask 图 Url，要求背景透明，保留商品主体。
如果不传，将自动使用内置的商品分割算法得到 Mask。
支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。
图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。
     */
    public $MaskUrl;

    /**
     * @var string 替换背景后生成的商品图分辨率。
支持生成单边分辨率大于500且小于4000、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。
建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。
     */
    public $Resolution;

    /**
     * @var integer 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     */
    public $LogoParam;

    /**
     * @var string 返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。
生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
     */
    public $RspImgType;

    /**
     * @param string $ProductUrl 商品原图 Url。
图片限制：单边分辨率小于4000，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。
     * @param string $Prompt 对新背景的文本描述。
最多支持256个 utf-8 字符，支持中、英文。
如果 Prompt = "BackgroundTemplate" 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。
     * @param string $NegativePrompt 反向提示词。
最多支持256个 utf-8 字符，支持中、英文。
     * @param string $Product 商品图中的商品主体名称。
最多支持50个 utf-8 字符，支持中、英文。
建议说明商品主体，否则影响生成效果。
     * @param string $BackgroundTemplate 背景模板。
仅当 Prompt = "BackgroundTemplate" 时生效，可支持的模板详见 [商品背景模板列表](https://cloud.tencent.com/document/product/1668/115391) ，请传入字段“背景名称”中的值。
     * @param string $MaskUrl 商品 Mask 图 Url，要求背景透明，保留商品主体。
如果不传，将自动使用内置的商品分割算法得到 Mask。
支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。
图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。
     * @param string $Resolution 替换背景后生成的商品图分辨率。
支持生成单边分辨率大于500且小于4000、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。
建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。
     * @param integer $LogoAdd 为生成结果图添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示结果图是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     * @param string $RspImgType 返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。
生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。
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
        if (array_key_exists("ProductUrl",$param) and $param["ProductUrl"] !== null) {
            $this->ProductUrl = $param["ProductUrl"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("BackgroundTemplate",$param) and $param["BackgroundTemplate"] !== null) {
            $this->BackgroundTemplate = $param["BackgroundTemplate"];
        }

        if (array_key_exists("MaskUrl",$param) and $param["MaskUrl"] !== null) {
            $this->MaskUrl = $param["MaskUrl"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("RspImgType",$param) and $param["RspImgType"] !== null) {
            $this->RspImgType = $param["RspImgType"];
        }
    }
}
