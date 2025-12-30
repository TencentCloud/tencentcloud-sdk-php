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
 * @method string getVideoUrl() 获取输入视频

- 视频格式：MP4
- 视频时长：5s以内
- 视频分辨率：无限制（待验证是否可以无损输出）
 * @method void setVideoUrl(string $VideoUrl) 设置输入视频

- 视频格式：MP4
- 视频时长：5s以内
- 视频分辨率：无限制（待验证是否可以无损输出）
 * @method string getPrompt() 获取视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。
支持风格迁移、替换、元素增加、删除控制
 * @method void setPrompt(string $Prompt) 设置视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。
支持风格迁移、替换、元素增加、删除控制
 * @method array getImages() 获取图片数组
 * @method void setImages(array $Images) 设置图片数组
 * @method Image getImage() 获取图片base64或者图片url

- Base64 和 Url 必须提供一个，如果都提供以Url为准。
- 上传图url大小不超过 8M
- 支持jpg，png，jpeg，webp，bmp，tiff 格式
- 单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
 * @method void setImage(Image $Image) 设置图片base64或者图片url

- Base64 和 Url 必须提供一个，如果都提供以Url为准。
- 上传图url大小不超过 8M
- 支持jpg，png，jpeg，webp，bmp，tiff 格式
- 单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
 * @method integer getLogoAdd() 获取为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method LogoParam getLogoParam() 获取标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 */
class SubmitVideoEditJobRequest extends AbstractModel
{
    /**
     * @var string 输入视频

- 视频格式：MP4
- 视频时长：5s以内
- 视频分辨率：无限制（待验证是否可以无损输出）
     */
    public $VideoUrl;

    /**
     * @var string 视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。
支持风格迁移、替换、元素增加、删除控制
     */
    public $Prompt;

    /**
     * @var array 图片数组
     */
    public $Images;

    /**
     * @var Image 图片base64或者图片url

- Base64 和 Url 必须提供一个，如果都提供以Url为准。
- 上传图url大小不超过 8M
- 支持jpg，png，jpeg，webp，bmp，tiff 格式
- 单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
     */
    public $Image;

    /**
     * @var integer 为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     */
    public $LogoParam;

    /**
     * @param string $VideoUrl 输入视频

- 视频格式：MP4
- 视频时长：5s以内
- 视频分辨率：无限制（待验证是否可以无损输出）
     * @param string $Prompt 视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。
支持风格迁移、替换、元素增加、删除控制
     * @param array $Images 图片数组
     * @param Image $Image 图片base64或者图片url

- Base64 和 Url 必须提供一个，如果都提供以Url为准。
- 上传图url大小不超过 8M
- 支持jpg，png，jpeg，webp，bmp，tiff 格式
- 单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
     * @param integer $LogoAdd 为生成视频添加标识的开关，默认为1。 1：添加标识。 0：不添加标识。 其他数值：默认按1处理。 建议您使用显著标识来提示，该视频是 AI 生成的视频。
     * @param LogoParam $LogoParam 标识内容设置。 默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
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

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
