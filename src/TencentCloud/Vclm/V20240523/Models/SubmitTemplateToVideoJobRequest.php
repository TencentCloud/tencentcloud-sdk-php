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
 * SubmitTemplateToVideoJob请求参数结构体
 *
 * @method string getTemplate() 获取特效模板名称。
枚举值：
hug ：拥抱
kiss ：亲吻
heart ： 比心
fuzzy ： 毛茸茸
befigure：变手办风
longhair：金色长发
morphlab：膨胀
bloom：万物生花
pinch：捏捏
balloonfly：飞走了
dragme：被拽走了

 * @method void setTemplate(string $Template) 设置特效模板名称。
枚举值：
hug ：拥抱
kiss ：亲吻
heart ： 比心
fuzzy ： 毛茸茸
befigure：变手办风
longhair：金色长发
morphlab：膨胀
bloom：万物生花
pinch：捏捏
balloonfly：飞走了
dragme：被拽走了

 * @method array getImages() 获取参考图像，最多输入2张图。
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300\*300px，不大于4096\*4096，图片宽高比应在1:4 ~ 4:1之间

 * @method void setImages(array $Images) 设置参考图像，最多输入2张图。
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300\*300px，不大于4096\*4096，图片宽高比应在1:4 ~ 4:1之间

 * @method integer getLogoAdd() 获取为生成视频添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成视频添加标识的开关，默认为1。
1：添加标识。
0：不添加标识。
其他数值：默认按1处理。
建议您使用显著标识来提示，该视频是 AI 生成的视频。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 */
class SubmitTemplateToVideoJobRequest extends AbstractModel
{
    /**
     * @var string 特效模板名称。
枚举值：
hug ：拥抱
kiss ：亲吻
heart ： 比心
fuzzy ： 毛茸茸
befigure：变手办风
longhair：金色长发
morphlab：膨胀
bloom：万物生花
pinch：捏捏
balloonfly：飞走了
dragme：被拽走了

     */
    public $Template;

    /**
     * @var array 参考图像，最多输入2张图。
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300\*300px，不大于4096\*4096，图片宽高比应在1:4 ~ 4:1之间

     */
    public $Images;

    /**
     * @var integer 为生成视频添加标识的开关，默认为1。
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
     * @param string $Template 特效模板名称。
枚举值：
hug ：拥抱
kiss ：亲吻
heart ： 比心
fuzzy ： 毛茸茸
befigure：变手办风
longhair：金色长发
morphlab：膨胀
bloom：万物生花
pinch：捏捏
balloonfly：飞走了
dragme：被拽走了

     * @param array $Images 参考图像，最多输入2张图。
- 支持传入图片Base64编码或图片URL（确保可访问）
- 图片格式：支持png、jpg、jpeg、webp、bmp、tiff
- 图片文件：大小不能超过10MB（base64后），图片分辨率不小于300\*300px，不大于4096\*4096，图片宽高比应在1:4 ~ 4:1之间

     * @param integer $LogoAdd 为生成视频添加标识的开关，默认为1。
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = [];
            foreach ($param["Images"] as $key => $value){
                $obj = new Image();
                $obj->deserialize($value);
                array_push($this->Images, $obj);
            }
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
