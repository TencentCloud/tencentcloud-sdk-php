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
 * SubmitMemeJob请求参数结构体
 *
 * @method string getPose() 获取<p>表情模板。<br>请在 <a href="https://cloud.tencent.com/document/product/1668/115327">表情动图模板列表</a>  中选择期望的模板，传入 Pose 名称。</p>
 * @method void setPose(string $Pose) 设置<p>表情模板。<br>请在 <a href="https://cloud.tencent.com/document/product/1668/115327">表情动图模板列表</a>  中选择期望的模板，传入 Pose 名称。</p>
 * @method string getInputImage() 获取<p>人像参考图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputImage(string $InputImage) 设置<p>人像参考图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method string getInputUrl() 获取<p>人像参考图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method void setInputUrl(string $InputUrl) 设置<p>人像参考图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
 * @method integer getResolution() 获取<p>生成分辨率，单位为 px。<br>真人类型支持256、512，默认为256，<br>卡通类型仅支持512。</p>
 * @method void setResolution(integer $Resolution) 设置<p>生成分辨率，单位为 px。<br>真人类型支持256、512，默认为256，<br>卡通类型仅支持512。</p>
 * @method string getText() 获取<p>自定义文案。<br>仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。<br>如果不传，默认使用自带的文案。<br>如果 text = &quot;&quot; 空字符串，代表不在表情动图中添加文案。</p>
 * @method void setText(string $Text) 设置<p>自定义文案。<br>仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。<br>如果不传，默认使用自带的文案。<br>如果 text = &quot;&quot; 空字符串，代表不在表情动图中添加文案。</p>
 * @method boolean getHaircut() 获取<p>头发遮罩开关。<br>true：裁剪过长的头发。<br>false：不裁剪过长的头发。<br>仅对卡通类型的 Pose 生效，默认为 false。</p>
 * @method void setHaircut(boolean $Haircut) 设置<p>头发遮罩开关。<br>true：裁剪过长的头发。<br>false：不裁剪过长的头发。<br>仅对卡通类型的 Pose 生效，默认为 false。</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 */
class SubmitMemeJobRequest extends AbstractModel
{
    /**
     * @var string <p>表情模板。<br>请在 <a href="https://cloud.tencent.com/document/product/1668/115327">表情动图模板列表</a>  中选择期望的模板，传入 Pose 名称。</p>
     */
    public $Pose;

    /**
     * @var string <p>人像参考图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputImage;

    /**
     * @var string <p>人像参考图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     */
    public $InputUrl;

    /**
     * @var integer <p>生成分辨率，单位为 px。<br>真人类型支持256、512，默认为256，<br>卡通类型仅支持512。</p>
     */
    public $Resolution;

    /**
     * @var string <p>自定义文案。<br>仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。<br>如果不传，默认使用自带的文案。<br>如果 text = &quot;&quot; 空字符串，代表不在表情动图中添加文案。</p>
     */
    public $Text;

    /**
     * @var boolean <p>头发遮罩开关。<br>true：裁剪过长的头发。<br>false：不裁剪过长的头发。<br>仅对卡通类型的 Pose 生效，默认为 false。</p>
     */
    public $Haircut;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
     */
    public $LogoParam;

    /**
     * @param string $Pose <p>表情模板。<br>请在 <a href="https://cloud.tencent.com/document/product/1668/115327">表情动图模板列表</a>  中选择期望的模板，传入 Pose 名称。</p>
     * @param string $InputImage <p>人像参考图 Base64 数据。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param string $InputUrl <p>人像参考图 Url。<br>Base64 和 Url 必须提供一个，如果都提供以 Url 为准。<br>图片限制：单边分辨率小于5000px，转成 Base64 字符串后小于 6MB，格式支持 jpg、jpeg、png、bmp、tiff、webp。</p>
     * @param integer $Resolution <p>生成分辨率，单位为 px。<br>真人类型支持256、512，默认为256，<br>卡通类型仅支持512。</p>
     * @param string $Text <p>自定义文案。<br>仅对真人类型的 Pose 生效，将在生成的表情动图中显示指定的文字。如果传入的字符串长度大于10，只截取前10个显示。<br>如果不传，默认使用自带的文案。<br>如果 text = &quot;&quot; 空字符串，代表不在表情动图中添加文案。</p>
     * @param boolean $Haircut <p>头发遮罩开关。<br>true：裁剪过长的头发。<br>false：不裁剪过长的头发。<br>仅对卡通类型的 Pose 生效，默认为 false。</p>
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
        if (array_key_exists("Pose",$param) and $param["Pose"] !== null) {
            $this->Pose = $param["Pose"];
        }

        if (array_key_exists("InputImage",$param) and $param["InputImage"] !== null) {
            $this->InputImage = $param["InputImage"];
        }

        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Haircut",$param) and $param["Haircut"] !== null) {
            $this->Haircut = $param["Haircut"];
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
