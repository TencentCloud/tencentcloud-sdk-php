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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitDrawPortraitJob请求参数结构体
 *
 * @method string getModelId() 获取写真模型 ID。

 * @method void setModelId(string $ModelId) 设置写真模型 ID。

 * @method string getStyleId() 获取风格模板，支持以下风格：
zhengjian_female：证件照（适用女性）
zhengjian_male：证件照（适用男性）
hanfu_female：汉服（适用女性）
hanfu2_female：汉服2（适用女性）
qipao_female：旗袍（适用女性）
green_female：绿色系穿搭（适用女性）
white_sweater_female：白色系毛衣（适用女性）
sports_female：蓝色系运动（适用女性）
wedding_female：婚纱裙（适用女性）
forest_female：户外森林（适用女性）
flower_female：户外花丛（适用女性）
lolita_female：洛丽塔（适用女性
black_dress1_female：小黑裙1（适用女性）
black_dress2_female：小黑裙2（适用女性）
black_dress3_female：小黑裙3（适用女性）
wedding2_female：婚纱裙2（适用女性）
fire_female：火焰背景（适用女性）
wreath_female：头戴花环（适用女性）
bow_female：蝴蝶结发饰（适用女性）
feather_female：羽毛（适用女性）
blue_shirt_female：缤纷衬衣系列-蓝色（适用女性）
green_shirt_female：缤纷衬衣系列-绿色（适用女性）
purple_shirt_female：缤纷衬衣系列-紫色（适用女性）
grey_suit_male: 灰色西装（适用男性）
beige_suit_male: 米色西装（适用男性）
white_sweater_male: 白色系毛衣（适用男性）
christmas1_female: 圣诞1（适用女性）
christmas2_female: 圣诞2（适用女性）
christmas3_female: 圣诞3（适用女性）
newyear1_female：新春1（适用女性）
newyear2_female：新春2（适用女性）
newyear3_female：新春3（适用女性）
newyear5_female：新春5（适用女性）
simple：简洁风格（通用），一般用于写真模型封面示意图，每个ModelId的生成结果固定，多次生成将返回相同图片
 * @method void setStyleId(string $StyleId) 设置风格模板，支持以下风格：
zhengjian_female：证件照（适用女性）
zhengjian_male：证件照（适用男性）
hanfu_female：汉服（适用女性）
hanfu2_female：汉服2（适用女性）
qipao_female：旗袍（适用女性）
green_female：绿色系穿搭（适用女性）
white_sweater_female：白色系毛衣（适用女性）
sports_female：蓝色系运动（适用女性）
wedding_female：婚纱裙（适用女性）
forest_female：户外森林（适用女性）
flower_female：户外花丛（适用女性）
lolita_female：洛丽塔（适用女性
black_dress1_female：小黑裙1（适用女性）
black_dress2_female：小黑裙2（适用女性）
black_dress3_female：小黑裙3（适用女性）
wedding2_female：婚纱裙2（适用女性）
fire_female：火焰背景（适用女性）
wreath_female：头戴花环（适用女性）
bow_female：蝴蝶结发饰（适用女性）
feather_female：羽毛（适用女性）
blue_shirt_female：缤纷衬衣系列-蓝色（适用女性）
green_shirt_female：缤纷衬衣系列-绿色（适用女性）
purple_shirt_female：缤纷衬衣系列-紫色（适用女性）
grey_suit_male: 灰色西装（适用男性）
beige_suit_male: 米色西装（适用男性）
white_sweater_male: 白色系毛衣（适用男性）
christmas1_female: 圣诞1（适用女性）
christmas2_female: 圣诞2（适用女性）
christmas3_female: 圣诞3（适用女性）
newyear1_female：新春1（适用女性）
newyear2_female：新春2（适用女性）
newyear3_female：新春3（适用女性）
newyear5_female：新春5（适用女性）
simple：简洁风格（通用），一般用于写真模型封面示意图，每个ModelId的生成结果固定，多次生成将返回相同图片
 * @method integer getImageNum() 获取本次生成的图片数量，取值范围[1,4]
 * @method void setImageNum(integer $ImageNum) 设置本次生成的图片数量，取值范围[1,4]
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
 * @method string getDefinition() 获取清晰度，支持以下选项：
sd：基础版，分辨率512:640
hd：高清畅享版，分辨率1024:1280
hdpro：高清优享版，分辨率1024:1280（推荐）
uhd：超清版，分辨率2048:2560
不填默认为sd。

 * @method void setDefinition(string $Definition) 设置清晰度，支持以下选项：
sd：基础版，分辨率512:640
hd：高清畅享版，分辨率1024:1280
hdpro：高清优享版，分辨率1024:1280（推荐）
uhd：超清版，分辨率2048:2560
不填默认为sd。
 */
class SubmitDrawPortraitJobRequest extends AbstractModel
{
    /**
     * @var string 写真模型 ID。

     */
    public $ModelId;

    /**
     * @var string 风格模板，支持以下风格：
zhengjian_female：证件照（适用女性）
zhengjian_male：证件照（适用男性）
hanfu_female：汉服（适用女性）
hanfu2_female：汉服2（适用女性）
qipao_female：旗袍（适用女性）
green_female：绿色系穿搭（适用女性）
white_sweater_female：白色系毛衣（适用女性）
sports_female：蓝色系运动（适用女性）
wedding_female：婚纱裙（适用女性）
forest_female：户外森林（适用女性）
flower_female：户外花丛（适用女性）
lolita_female：洛丽塔（适用女性
black_dress1_female：小黑裙1（适用女性）
black_dress2_female：小黑裙2（适用女性）
black_dress3_female：小黑裙3（适用女性）
wedding2_female：婚纱裙2（适用女性）
fire_female：火焰背景（适用女性）
wreath_female：头戴花环（适用女性）
bow_female：蝴蝶结发饰（适用女性）
feather_female：羽毛（适用女性）
blue_shirt_female：缤纷衬衣系列-蓝色（适用女性）
green_shirt_female：缤纷衬衣系列-绿色（适用女性）
purple_shirt_female：缤纷衬衣系列-紫色（适用女性）
grey_suit_male: 灰色西装（适用男性）
beige_suit_male: 米色西装（适用男性）
white_sweater_male: 白色系毛衣（适用男性）
christmas1_female: 圣诞1（适用女性）
christmas2_female: 圣诞2（适用女性）
christmas3_female: 圣诞3（适用女性）
newyear1_female：新春1（适用女性）
newyear2_female：新春2（适用女性）
newyear3_female：新春3（适用女性）
newyear5_female：新春5（适用女性）
simple：简洁风格（通用），一般用于写真模型封面示意图，每个ModelId的生成结果固定，多次生成将返回相同图片
     */
    public $StyleId;

    /**
     * @var integer 本次生成的图片数量，取值范围[1,4]
     */
    public $ImageNum;

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
     * @var string 清晰度，支持以下选项：
sd：基础版，分辨率512:640
hd：高清畅享版，分辨率1024:1280
hdpro：高清优享版，分辨率1024:1280（推荐）
uhd：超清版，分辨率2048:2560
不填默认为sd。

     */
    public $Definition;

    /**
     * @param string $ModelId 写真模型 ID。

     * @param string $StyleId 风格模板，支持以下风格：
zhengjian_female：证件照（适用女性）
zhengjian_male：证件照（适用男性）
hanfu_female：汉服（适用女性）
hanfu2_female：汉服2（适用女性）
qipao_female：旗袍（适用女性）
green_female：绿色系穿搭（适用女性）
white_sweater_female：白色系毛衣（适用女性）
sports_female：蓝色系运动（适用女性）
wedding_female：婚纱裙（适用女性）
forest_female：户外森林（适用女性）
flower_female：户外花丛（适用女性）
lolita_female：洛丽塔（适用女性
black_dress1_female：小黑裙1（适用女性）
black_dress2_female：小黑裙2（适用女性）
black_dress3_female：小黑裙3（适用女性）
wedding2_female：婚纱裙2（适用女性）
fire_female：火焰背景（适用女性）
wreath_female：头戴花环（适用女性）
bow_female：蝴蝶结发饰（适用女性）
feather_female：羽毛（适用女性）
blue_shirt_female：缤纷衬衣系列-蓝色（适用女性）
green_shirt_female：缤纷衬衣系列-绿色（适用女性）
purple_shirt_female：缤纷衬衣系列-紫色（适用女性）
grey_suit_male: 灰色西装（适用男性）
beige_suit_male: 米色西装（适用男性）
white_sweater_male: 白色系毛衣（适用男性）
christmas1_female: 圣诞1（适用女性）
christmas2_female: 圣诞2（适用女性）
christmas3_female: 圣诞3（适用女性）
newyear1_female：新春1（适用女性）
newyear2_female：新春2（适用女性）
newyear3_female：新春3（适用女性）
newyear5_female：新春5（适用女性）
simple：简洁风格（通用），一般用于写真模型封面示意图，每个ModelId的生成结果固定，多次生成将返回相同图片
     * @param integer $ImageNum 本次生成的图片数量，取值范围[1,4]
     * @param integer $LogoAdd 为生成结果图添加标识的开关，默认为1。 
1：添加标识。
 0：不添加标识。 
其他数值：默认按1处理。 
建议您使用显著标识来提示结果图是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。 
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     * @param string $Definition 清晰度，支持以下选项：
sd：基础版，分辨率512:640
hd：高清畅享版，分辨率1024:1280
hdpro：高清优享版，分辨率1024:1280（推荐）
uhd：超清版，分辨率2048:2560
不填默认为sd。
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("StyleId",$param) and $param["StyleId"] !== null) {
            $this->StyleId = $param["StyleId"];
        }

        if (array_key_exists("ImageNum",$param) and $param["ImageNum"] !== null) {
            $this->ImageNum = $param["ImageNum"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
