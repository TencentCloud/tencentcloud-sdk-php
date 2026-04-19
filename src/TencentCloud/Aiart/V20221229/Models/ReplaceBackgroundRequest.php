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
 * @method string getProductUrl() 获取<p>商品原图 Url。<br>图片限制：单边分辨率小于4000px，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setProductUrl(string $ProductUrl) 设置<p>商品原图 Url。<br>图片限制：单边分辨率小于4000px，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getPrompt() 获取<p>对新背景的文本描述。<br>最多支持256个 utf-8 字符，支持中、英文。<br>如果 Prompt = &quot;BackgroundTemplate&quot; 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。</p>
 * @method void setPrompt(string $Prompt) 设置<p>对新背景的文本描述。<br>最多支持256个 utf-8 字符，支持中、英文。<br>如果 Prompt = &quot;BackgroundTemplate&quot; 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。</p>
 * @method string getNegativePrompt() 获取<p>反向提示词。<br>最多支持256个 utf-8 字符，支持中、英文。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>反向提示词。<br>最多支持256个 utf-8 字符，支持中、英文。</p>
 * @method string getProduct() 获取<p>商品图中的商品主体名称。<br>最多支持50个 utf-8 字符，支持中、英文。<br>建议说明商品主体，否则影响生成效果。</p>
 * @method void setProduct(string $Product) 设置<p>商品图中的商品主体名称。<br>最多支持50个 utf-8 字符，支持中、英文。<br>建议说明商品主体，否则影响生成效果。</p>
 * @method string getBackgroundTemplate() 获取<p>背景模板。<br>仅当 Prompt = &quot;BackgroundTemplate&quot; 时生效，可支持的模板详见 <a href="https://cloud.tencent.com/document/product/1668/115391">商品背景模板列表</a> ，请传入字段“背景名称”中的值。</p>
 * @method void setBackgroundTemplate(string $BackgroundTemplate) 设置<p>背景模板。<br>仅当 Prompt = &quot;BackgroundTemplate&quot; 时生效，可支持的模板详见 <a href="https://cloud.tencent.com/document/product/1668/115391">商品背景模板列表</a> ，请传入字段“背景名称”中的值。</p>
 * @method string getMaskUrl() 获取<p>商品 Mask 图 Url，要求背景透明，保留商品主体。<br>如果不传，将自动使用内置的商品分割算法得到 Mask。<br>支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。<br>图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。</p>
 * @method void setMaskUrl(string $MaskUrl) 设置<p>商品 Mask 图 Url，要求背景透明，保留商品主体。<br>如果不传，将自动使用内置的商品分割算法得到 Mask。<br>支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。<br>图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。</p>
 * @method string getResolution() 获取<p>替换背景后生成的商品图分辨率。<br>支持生成单边分辨率大于500px且小于4000px、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。<br>建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。</p>
 * @method void setResolution(string $Resolution) 设置<p>替换背景后生成的商品图分辨率。<br>支持生成单边分辨率大于500px且小于4000px、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。<br>建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 * @method string getRspImgType() 获取<p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。<br>生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。</p>
 * @method void setRspImgType(string $RspImgType) 设置<p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。<br>生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。</p>
 */
class ReplaceBackgroundRequest extends AbstractModel
{
    /**
     * @var string <p>商品原图 Url。<br>图片限制：单边分辨率小于4000px，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $ProductUrl;

    /**
     * @var string <p>对新背景的文本描述。<br>最多支持256个 utf-8 字符，支持中、英文。<br>如果 Prompt = &quot;BackgroundTemplate&quot; 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。</p>
     */
    public $Prompt;

    /**
     * @var string <p>反向提示词。<br>最多支持256个 utf-8 字符，支持中、英文。</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>商品图中的商品主体名称。<br>最多支持50个 utf-8 字符，支持中、英文。<br>建议说明商品主体，否则影响生成效果。</p>
     */
    public $Product;

    /**
     * @var string <p>背景模板。<br>仅当 Prompt = &quot;BackgroundTemplate&quot; 时生效，可支持的模板详见 <a href="https://cloud.tencent.com/document/product/1668/115391">商品背景模板列表</a> ，请传入字段“背景名称”中的值。</p>
     */
    public $BackgroundTemplate;

    /**
     * @var string <p>商品 Mask 图 Url，要求背景透明，保留商品主体。<br>如果不传，将自动使用内置的商品分割算法得到 Mask。<br>支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。<br>图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。</p>
     */
    public $MaskUrl;

    /**
     * @var string <p>替换背景后生成的商品图分辨率。<br>支持生成单边分辨率大于500px且小于4000px、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。<br>建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。</p>
     */
    public $Resolution;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
     */
    public $LogoParam;

    /**
     * @var string <p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。<br>生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。</p>
     */
    public $RspImgType;

    /**
     * @param string $ProductUrl <p>商品原图 Url。<br>图片限制：单边分辨率小于4000px，长宽比在2:5 ~ 5:2之间，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $Prompt <p>对新背景的文本描述。<br>最多支持256个 utf-8 字符，支持中、英文。<br>如果 Prompt = &quot;BackgroundTemplate&quot; 代表启用背景模板，需要在参数 BackgroundTemplate 中指定一个背景名称。</p>
     * @param string $NegativePrompt <p>反向提示词。<br>最多支持256个 utf-8 字符，支持中、英文。</p>
     * @param string $Product <p>商品图中的商品主体名称。<br>最多支持50个 utf-8 字符，支持中、英文。<br>建议说明商品主体，否则影响生成效果。</p>
     * @param string $BackgroundTemplate <p>背景模板。<br>仅当 Prompt = &quot;BackgroundTemplate&quot; 时生效，可支持的模板详见 <a href="https://cloud.tencent.com/document/product/1668/115391">商品背景模板列表</a> ，请传入字段“背景名称”中的值。</p>
     * @param string $MaskUrl <p>商品 Mask 图 Url，要求背景透明，保留商品主体。<br>如果不传，将自动使用内置的商品分割算法得到 Mask。<br>支持自定义上传 Mask，如果该参数不为空，则以实际上传的数据为准。<br>图片限制：Mask 图必须和商品原图分辨率一致，转成 Base64 字符串后小于 6MB，格式仅支持 png。</p>
     * @param string $Resolution <p>替换背景后生成的商品图分辨率。<br>支持生成单边分辨率大于500px且小于4000px、长宽比在2:5 ~ 5:2之间的图片，不传默认生成1280:1280。<br>建议图片比例为1:1、9:16、16:9，生成效果更佳，使用其他比例的生成效果可能不如建议比例。</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
     * @param string $RspImgType <p>返回图像方式（base64 或 url) ，二选一，默认为 base64。url 有效期为1小时。<br>生成图分辨率较大时建议选择 url，使用 base64 可能因图片过大导致返回失败。</p>
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
