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
 * SubmitGlamPicJob请求参数结构体
 *
 * @method string getTemplateUrl() 获取<p>美照模板图 URL。<br>图片限制：模板图中最多出现5张人脸，单边分辨率大于300px，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setTemplateUrl(string $TemplateUrl) 设置<p>美照模板图 URL。<br>图片限制：模板图中最多出现5张人脸，单边分辨率大于300px，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method array getFaceInfos() 获取<p>用户图 URL 列表，以及模板图中需要替换成用户的人脸框信息。<br>一张美照中可包含1 ~ 5个用户形象。每个用户需上传1 ~ 6张照片，仅支持单人照。<br>模板图中的人脸数量需要大于等于用户个数。如果不传每个用户在模板图中的人脸框位置，默认按照模板图人脸框从大到小的顺序进行替换。如需自定义顺序，需要依次上传每个用户在模板图中的人脸框位置。<br>图片限制：每张图片转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的用户图。<br>示例值：[{&quot;ImageUrls&quot;: [&quot;https://cos.ap-guangzhou.myqcloud.com/image.jpg&quot;]}]</p>
 * @method void setFaceInfos(array $FaceInfos) 设置<p>用户图 URL 列表，以及模板图中需要替换成用户的人脸框信息。<br>一张美照中可包含1 ~ 5个用户形象。每个用户需上传1 ~ 6张照片，仅支持单人照。<br>模板图中的人脸数量需要大于等于用户个数。如果不传每个用户在模板图中的人脸框位置，默认按照模板图人脸框从大到小的顺序进行替换。如需自定义顺序，需要依次上传每个用户在模板图中的人脸框位置。<br>图片限制：每张图片转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的用户图。<br>示例值：[{&quot;ImageUrls&quot;: [&quot;https://cos.ap-guangzhou.myqcloud.com/image.jpg&quot;]}]</p>
 * @method integer getNum() 获取<p>美照生成数量。<br>支持1 ~ 4张，默认生成4张。</p>
 * @method void setNum(integer $Num) 设置<p>美照生成数量。<br>支持1 ~ 4张，默认生成4张。</p>
 * @method array getStyle() 获取<p>美照生成风格。<br>仅对单人美照生效，单人可支持选择不同风格。需按照美照生成数量，在数组中逐一填入每张美照的风格名称。如果不传，默认取不重复的随机风格顺序。<br>多人美照只支持 balanced 一种风格，该参数不生效。<br>可选风格：<ul><li>real：面部相似度更高。</li><li>balanced：平衡面部真实感和美观度。</li><li>textured：脸部皮肤更具真实感。</li><li>beautiful：脸部美观度更高。</li></ul></p>
 * @method void setStyle(array $Style) 设置<p>美照生成风格。<br>仅对单人美照生效，单人可支持选择不同风格。需按照美照生成数量，在数组中逐一填入每张美照的风格名称。如果不传，默认取不重复的随机风格顺序。<br>多人美照只支持 balanced 一种风格，该参数不生效。<br>可选风格：<ul><li>real：面部相似度更高。</li><li>balanced：平衡面部真实感和美观度。</li><li>textured：脸部皮肤更具真实感。</li><li>beautiful：脸部美观度更高。</li></ul></p>
 * @method float getSimilarity() 获取<p>相似度系数，越高越像用户图。<br>取值范围[0, 1]，默认为0.6。</p>
 * @method void setSimilarity(float $Similarity) 设置<p>相似度系数，越高越像用户图。<br>取值范围[0, 1]，默认为0.6。</p>
 * @method string getClarity() 获取<p>超分选项，默认不做超分，可选开启。<br>x2：2倍超分<br>x4：4倍超分</p>
 * @method void setClarity(string $Clarity) 设置<p>超分选项，默认不做超分，可选开启。<br>x2：2倍超分<br>x4：4倍超分</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 */
class SubmitGlamPicJobRequest extends AbstractModel
{
    /**
     * @var string <p>美照模板图 URL。<br>图片限制：模板图中最多出现5张人脸，单边分辨率大于300px，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $TemplateUrl;

    /**
     * @var array <p>用户图 URL 列表，以及模板图中需要替换成用户的人脸框信息。<br>一张美照中可包含1 ~ 5个用户形象。每个用户需上传1 ~ 6张照片，仅支持单人照。<br>模板图中的人脸数量需要大于等于用户个数。如果不传每个用户在模板图中的人脸框位置，默认按照模板图人脸框从大到小的顺序进行替换。如需自定义顺序，需要依次上传每个用户在模板图中的人脸框位置。<br>图片限制：每张图片转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的用户图。<br>示例值：[{&quot;ImageUrls&quot;: [&quot;https://cos.ap-guangzhou.myqcloud.com/image.jpg&quot;]}]</p>
     */
    public $FaceInfos;

    /**
     * @var integer <p>美照生成数量。<br>支持1 ~ 4张，默认生成4张。</p>
     */
    public $Num;

    /**
     * @var array <p>美照生成风格。<br>仅对单人美照生效，单人可支持选择不同风格。需按照美照生成数量，在数组中逐一填入每张美照的风格名称。如果不传，默认取不重复的随机风格顺序。<br>多人美照只支持 balanced 一种风格，该参数不生效。<br>可选风格：<ul><li>real：面部相似度更高。</li><li>balanced：平衡面部真实感和美观度。</li><li>textured：脸部皮肤更具真实感。</li><li>beautiful：脸部美观度更高。</li></ul></p>
     */
    public $Style;

    /**
     * @var float <p>相似度系数，越高越像用户图。<br>取值范围[0, 1]，默认为0.6。</p>
     */
    public $Similarity;

    /**
     * @var string <p>超分选项，默认不做超分，可选开启。<br>x2：2倍超分<br>x4：4倍超分</p>
     */
    public $Clarity;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
     */
    public $LogoParam;

    /**
     * @param string $TemplateUrl <p>美照模板图 URL。<br>图片限制：模板图中最多出现5张人脸，单边分辨率大于300px，转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param array $FaceInfos <p>用户图 URL 列表，以及模板图中需要替换成用户的人脸框信息。<br>一张美照中可包含1 ~ 5个用户形象。每个用户需上传1 ~ 6张照片，仅支持单人照。<br>模板图中的人脸数量需要大于等于用户个数。如果不传每个用户在模板图中的人脸框位置，默认按照模板图人脸框从大到小的顺序进行替换。如需自定义顺序，需要依次上传每个用户在模板图中的人脸框位置。<br>图片限制：每张图片转成 Base64 字符串后小于 10MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的用户图。<br>示例值：[{&quot;ImageUrls&quot;: [&quot;https://cos.ap-guangzhou.myqcloud.com/image.jpg&quot;]}]</p>
     * @param integer $Num <p>美照生成数量。<br>支持1 ~ 4张，默认生成4张。</p>
     * @param array $Style <p>美照生成风格。<br>仅对单人美照生效，单人可支持选择不同风格。需按照美照生成数量，在数组中逐一填入每张美照的风格名称。如果不传，默认取不重复的随机风格顺序。<br>多人美照只支持 balanced 一种风格，该参数不生效。<br>可选风格：<ul><li>real：面部相似度更高。</li><li>balanced：平衡面部真实感和美观度。</li><li>textured：脸部皮肤更具真实感。</li><li>beautiful：脸部美观度更高。</li></ul></p>
     * @param float $Similarity <p>相似度系数，越高越像用户图。<br>取值范围[0, 1]，默认为0.6。</p>
     * @param string $Clarity <p>超分选项，默认不做超分，可选开启。<br>x2：2倍超分<br>x4：4倍超分</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
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
        if (array_key_exists("TemplateUrl",$param) and $param["TemplateUrl"] !== null) {
            $this->TemplateUrl = $param["TemplateUrl"];
        }

        if (array_key_exists("FaceInfos",$param) and $param["FaceInfos"] !== null) {
            $this->FaceInfos = [];
            foreach ($param["FaceInfos"] as $key => $value){
                $obj = new FaceInfo();
                $obj->deserialize($value);
                array_push($this->FaceInfos, $obj);
            }
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("Clarity",$param) and $param["Clarity"] !== null) {
            $this->Clarity = $param["Clarity"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
