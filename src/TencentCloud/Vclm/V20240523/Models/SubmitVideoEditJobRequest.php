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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitVideoEditJob请求参数结构体
 *
 * @method string getVideoUrl() 获取<p>参考视频URL。默认为待编辑视频。</p><ul><li>视频格式：支持MP4</li><li>视频时长：输入视频时长≤10秒</li><li>视频大小：不超过200M</li><li>视频文件：输入的视频帧率及分辨率不做限制（建议输入16：9或9：16的视频；分辨率建议在2160px内，帧率建议在60fps内）；输出视频是帧率会≥16fps，分辨率为720p</li></ul>
 * @method void setVideoUrl(string $VideoUrl) 设置<p>参考视频URL。默认为待编辑视频。</p><ul><li>视频格式：支持MP4</li><li>视频时长：输入视频时长≤10秒</li><li>视频大小：不超过200M</li><li>视频文件：输入的视频帧率及分辨率不做限制（建议输入16：9或9：16的视频；分辨率建议在2160px内，帧率建议在60fps内）；输出视频是帧率会≥16fps，分辨率为720p</li></ul>
 * @method string getPrompt() 获取<p>视频内容的描述，中文正向提示词。支持视频内容增加、删除、修改等能力</p><ul><li>最多支持200个 utf-8 字符（首尾空格不计入字符数）</li><li>不传prompt的时候，Images.N参考图列表必须要传图，且传的图片是经过图片编辑之后的结果图</li></ul>
 * @method void setPrompt(string $Prompt) 设置<p>视频内容的描述，中文正向提示词。支持视频内容增加、删除、修改等能力</p><ul><li>最多支持200个 utf-8 字符（首尾空格不计入字符数）</li><li>不传prompt的时候，Images.N参考图列表必须要传图，且传的图片是经过图片编辑之后的结果图</li></ul>
 * @method array getImages() 获取<p>参考图列表。用于对视频内容做风格迁移、内容替换、内容删减、内容增加做参考。</p><ul><li>支持传入图片Base64编码或图片URL</li><li>图片格式：支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>图片文件：大小不能超过10MB（base64后）。单边分辨率不超过5000px，不小于50px，图片长宽限制1:4 ~ 4:1。<br>示例值：[{ &quot;Url&quot;: &quot;https://console.cloud.tencent.com/cos/image.png&quot;}]</li></ul>
 * @method void setImages(array $Images) 设置<p>参考图列表。用于对视频内容做风格迁移、内容替换、内容删减、内容增加做参考。</p><ul><li>支持传入图片Base64编码或图片URL</li><li>图片格式：支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>图片文件：大小不能超过10MB（base64后）。单边分辨率不超过5000px，不小于50px，图片长宽限制1:4 ~ 4:1。<br>示例值：[{ &quot;Url&quot;: &quot;https://console.cloud.tencent.com/cos/image.png&quot;}]</li></ul>
 * @method Image getImage() 获取<p>图片base64或者图片url</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以Url为准。</li><li>上传图url大小不超过 8M</li><li>支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1</li></ul>
 * @method void setImage(Image $Image) 设置<p>图片base64或者图片url</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以Url为准。</li><li>上传图url大小不超过 8M</li><li>支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1</li></ul>
 * @method VideoEditParam getVideoEditParam() 获取<p>扩展字段。</p>
 * @method void setVideoEditParam(VideoEditParam $VideoEditParam) 设置<p>扩展字段。</p>
 * @method integer getLogoAdd() 获取<p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
 */
class SubmitVideoEditJobRequest extends AbstractModel
{
    /**
     * @var string <p>参考视频URL。默认为待编辑视频。</p><ul><li>视频格式：支持MP4</li><li>视频时长：输入视频时长≤10秒</li><li>视频大小：不超过200M</li><li>视频文件：输入的视频帧率及分辨率不做限制（建议输入16：9或9：16的视频；分辨率建议在2160px内，帧率建议在60fps内）；输出视频是帧率会≥16fps，分辨率为720p</li></ul>
     */
    public $VideoUrl;

    /**
     * @var string <p>视频内容的描述，中文正向提示词。支持视频内容增加、删除、修改等能力</p><ul><li>最多支持200个 utf-8 字符（首尾空格不计入字符数）</li><li>不传prompt的时候，Images.N参考图列表必须要传图，且传的图片是经过图片编辑之后的结果图</li></ul>
     */
    public $Prompt;

    /**
     * @var array <p>参考图列表。用于对视频内容做风格迁移、内容替换、内容删减、内容增加做参考。</p><ul><li>支持传入图片Base64编码或图片URL</li><li>图片格式：支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>图片文件：大小不能超过10MB（base64后）。单边分辨率不超过5000px，不小于50px，图片长宽限制1:4 ~ 4:1。<br>示例值：[{ &quot;Url&quot;: &quot;https://console.cloud.tencent.com/cos/image.png&quot;}]</li></ul>
     */
    public $Images;

    /**
     * @var Image <p>图片base64或者图片url</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以Url为准。</li><li>上传图url大小不超过 8M</li><li>支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1</li></ul>
     * @deprecated
     */
    public $Image;

    /**
     * @var VideoEditParam <p>扩展字段。</p>
     */
    public $VideoEditParam;

    /**
     * @var integer <p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
     */
    public $LogoParam;

    /**
     * @param string $VideoUrl <p>参考视频URL。默认为待编辑视频。</p><ul><li>视频格式：支持MP4</li><li>视频时长：输入视频时长≤10秒</li><li>视频大小：不超过200M</li><li>视频文件：输入的视频帧率及分辨率不做限制（建议输入16：9或9：16的视频；分辨率建议在2160px内，帧率建议在60fps内）；输出视频是帧率会≥16fps，分辨率为720p</li></ul>
     * @param string $Prompt <p>视频内容的描述，中文正向提示词。支持视频内容增加、删除、修改等能力</p><ul><li>最多支持200个 utf-8 字符（首尾空格不计入字符数）</li><li>不传prompt的时候，Images.N参考图列表必须要传图，且传的图片是经过图片编辑之后的结果图</li></ul>
     * @param array $Images <p>参考图列表。用于对视频内容做风格迁移、内容替换、内容删减、内容增加做参考。</p><ul><li>支持传入图片Base64编码或图片URL</li><li>图片格式：支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>图片文件：大小不能超过10MB（base64后）。单边分辨率不超过5000px，不小于50px，图片长宽限制1:4 ~ 4:1。<br>示例值：[{ &quot;Url&quot;: &quot;https://console.cloud.tencent.com/cos/image.png&quot;}]</li></ul>
     * @param Image $Image <p>图片base64或者图片url</p><ul><li>Base64 和 Url 必须提供一个，如果都提供以Url为准。</li><li>上传图url大小不超过 8M</li><li>支持jpg，png，jpeg，webp，bmp，tiff 格式</li><li>单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1</li></ul>
     * @param VideoEditParam $VideoEditParam <p>扩展字段。</p>
     * @param integer $LogoAdd <p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("VideoEditParam",$param) and $param["VideoEditParam"] !== null) {
            $this->VideoEditParam = new VideoEditParam();
            $this->VideoEditParam->deserialize($param["VideoEditParam"]);
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
