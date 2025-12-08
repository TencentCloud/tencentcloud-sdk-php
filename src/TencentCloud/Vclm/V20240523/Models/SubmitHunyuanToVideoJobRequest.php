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
 * SubmitHunyuanToVideoJob请求参数结构体
 *
 * @method string getPrompt() 获取视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。 示例值：一只猫在草原上奔跑，写实风格
 * @method void setPrompt(string $Prompt) 设置视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。 示例值：一只猫在草原上奔跑，写实风格
 * @method Image getImage() 获取输入图片
上传图url大小不超过 10M，base64不超过8M。
支持jpg，png，jpeg，webp，bmp，tiff 格式
单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
 * @method void setImage(Image $Image) 设置输入图片
上传图url大小不超过 10M，base64不超过8M。
支持jpg，png，jpeg，webp，bmp，tiff 格式
单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
 * @method string getResolution() 获取目前仅支持720p视频分辨率，默认720p。
 * @method void setResolution(string $Resolution) 设置目前仅支持720p视频分辨率，默认720p。
 * @method integer getLogoAdd() 获取为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。
 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。
 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。
 * @method LogoParam getLogoParam() 获取默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。
 * @method void setLogoParam(LogoParam $LogoParam) 设置默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。
 */
class SubmitHunyuanToVideoJobRequest extends AbstractModel
{
    /**
     * @var string 视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。 示例值：一只猫在草原上奔跑，写实风格
     */
    public $Prompt;

    /**
     * @var Image 输入图片
上传图url大小不超过 10M，base64不超过8M。
支持jpg，png，jpeg，webp，bmp，tiff 格式
单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
     */
    public $Image;

    /**
     * @var string 目前仅支持720p视频分辨率，默认720p。
     */
    public $Resolution;

    /**
     * @var integer 为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。
 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。
     */
    public $LogoParam;

    /**
     * @param string $Prompt 视频内容的描述，中文正向提示词。最多支持200个 utf-8 字符（首尾空格不计入字符数）。 示例值：一只猫在草原上奔跑，写实风格
     * @param Image $Image 输入图片
上传图url大小不超过 10M，base64不超过8M。
支持jpg，png，jpeg，webp，bmp，tiff 格式
单边分辨率不超过5000，不小于50，长宽限制1:4 ~ 4:1
     * @param string $Resolution 目前仅支持720p视频分辨率，默认720p。
     * @param integer $LogoAdd 为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。
 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。
     * @param LogoParam $LogoParam 默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。
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

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
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
    }
}
