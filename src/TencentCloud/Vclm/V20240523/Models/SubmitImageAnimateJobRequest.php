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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitImageAnimateJob请求参数结构体
 *
 * @method string getImageUrl() 获取图片格式：支持PNG、JPG、JPEG格式；
图片分辨率：长边分辨率不超过2056；
图片大小：不超过10M；
图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
 * @method void setImageUrl(string $ImageUrl) 设置图片格式：支持PNG、JPG、JPEG格式；
图片分辨率：长边分辨率不超过2056；
图片大小：不超过10M；
图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
 * @method string getImageBase64() 获取图片base64数据。图片格式：支持PNG、JPG、JPEG格式；图片分辨率：长边分辨率不超过2056；图片大小：不超过10M；图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
 * @method void setImageBase64(string $ImageBase64) 设置图片base64数据。图片格式：支持PNG、JPG、JPEG格式；图片分辨率：长边分辨率不超过2056；图片大小：不超过10M；图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
 * @method string getTemplateId() 获取动作模板ID。取值说明：ke3 科目三；tuziwu 兔子舞；huajiangwu 划桨舞。

 * @method void setTemplateId(string $TemplateId) 设置动作模板ID。取值说明：ke3 科目三；tuziwu 兔子舞；huajiangwu 划桨舞。

 * @method boolean getEnableAudio() 获取结果视频是否保留模板音频。默认为true
 * @method void setEnableAudio(boolean $EnableAudio) 设置结果视频是否保留模板音频。默认为true
 * @method boolean getEnableBodyJoins() 获取是否检测输入图人体12个身体部位（头部、颈部、右肩、右肘、右腕、左肩、左肘、左腕、右髋、左髋,、左膝、右膝）。默认不检测。
 * @method void setEnableBodyJoins(boolean $EnableBodyJoins) 设置是否检测输入图人体12个身体部位（头部、颈部、右肩、右肘、右腕、左肩、左肘、左腕、右髋、左髋,、左膝、右膝）。默认不检测。
 * @method boolean getEnableSegment() 获取最终视频是否保留原图的背景（该模式对于tuziwu、huajiangwu不生效）

 * @method void setEnableSegment(boolean $EnableSegment) 设置最终视频是否保留原图的背景（该模式对于tuziwu、huajiangwu不生效）

 * @method integer getLogoAdd() 获取为生成视频添加标识的开关，默认为0。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成视频添加标识的开关，默认为0。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 */
class SubmitImageAnimateJobRequest extends AbstractModel
{
    /**
     * @var string 图片格式：支持PNG、JPG、JPEG格式；
图片分辨率：长边分辨率不超过2056；
图片大小：不超过10M；
图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
     */
    public $ImageUrl;

    /**
     * @var string 图片base64数据。图片格式：支持PNG、JPG、JPEG格式；图片分辨率：长边分辨率不超过2056；图片大小：不超过10M；图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
     */
    public $ImageBase64;

    /**
     * @var string 动作模板ID。取值说明：ke3 科目三；tuziwu 兔子舞；huajiangwu 划桨舞。

     */
    public $TemplateId;

    /**
     * @var boolean 结果视频是否保留模板音频。默认为true
     */
    public $EnableAudio;

    /**
     * @var boolean 是否检测输入图人体12个身体部位（头部、颈部、右肩、右肘、右腕、左肩、左肘、左腕、右髋、左髋,、左膝、右膝）。默认不检测。
     */
    public $EnableBodyJoins;

    /**
     * @var boolean 最终视频是否保留原图的背景（该模式对于tuziwu、huajiangwu不生效）

     */
    public $EnableSegment;

    /**
     * @var integer 为生成视频添加标识的开关，默认为0。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。
默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     */
    public $LogoParam;

    /**
     * @param string $ImageUrl 图片格式：支持PNG、JPG、JPEG格式；
图片分辨率：长边分辨率不超过2056；
图片大小：不超过10M；
图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
     * @param string $ImageBase64 图片base64数据。图片格式：支持PNG、JPG、JPEG格式；图片分辨率：长边分辨率不超过2056；图片大小：不超过10M；图片宽高比：【宽：高】数值在 1:2 到 1:1.2 范围内
     * @param string $TemplateId 动作模板ID。取值说明：ke3 科目三；tuziwu 兔子舞；huajiangwu 划桨舞。

     * @param boolean $EnableAudio 结果视频是否保留模板音频。默认为true
     * @param boolean $EnableBodyJoins 是否检测输入图人体12个身体部位（头部、颈部、右肩、右肘、右腕、左肩、左肘、左腕、右髋、左髋,、左膝、右膝）。默认不检测。
     * @param boolean $EnableSegment 最终视频是否保留原图的背景（该模式对于tuziwu、huajiangwu不生效）

     * @param integer $LogoAdd 为生成视频添加标识的开关，默认为0。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("EnableAudio",$param) and $param["EnableAudio"] !== null) {
            $this->EnableAudio = $param["EnableAudio"];
        }

        if (array_key_exists("EnableBodyJoins",$param) and $param["EnableBodyJoins"] !== null) {
            $this->EnableBodyJoins = $param["EnableBodyJoins"];
        }

        if (array_key_exists("EnableSegment",$param) and $param["EnableSegment"] !== null) {
            $this->EnableSegment = $param["EnableSegment"];
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
