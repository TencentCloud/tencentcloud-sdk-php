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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTranscodeTemplates请求参数结构体
 *
 * @method array getDefinitions() 获取转码模板唯一标识过滤条件，数组长度限制：100。
 * @method void setDefinitions(array $Definitions) 设置转码模板唯一标识过滤条件，数组长度限制：100。
 * @method string getType() 获取模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method void setType(string $Type) 设置模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
 * @method string getContainerType() 获取封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
 * @method void setContainerType(string $ContainerType) 设置封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
 * @method string getTEHDType() 获取（建议使用TranscodeType代替）极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
 * @method void setTEHDType(string $TEHDType) 设置（建议使用TranscodeType代替）极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
 * @method integer getOffset() 获取分页偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：10，最大值：100。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：10，最大值：100。
 * @method string getTranscodeType() 获取模板类型（替换旧版本 TEHDType），可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：视频极速高清，老的类型（建议使用 TEHD-100） 。</li>
<li>TEHD-100：视频极速高清</li>
<li>TEHD-200：音频极速高清</li>
<li>Enhance：音视频增强模板。</li>
默认空，不限制类型。

 * @method void setTranscodeType(string $TranscodeType) 设置模板类型（替换旧版本 TEHDType），可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：视频极速高清，老的类型（建议使用 TEHD-100） 。</li>
<li>TEHD-100：视频极速高清</li>
<li>TEHD-200：音频极速高清</li>
<li>Enhance：音视频增强模板。</li>
默认空，不限制类型。

 * @method string getName() 获取转码模板标识过滤条件，长度限制：64 个字符。	
 * @method void setName(string $Name) 设置转码模板标识过滤条件，长度限制：64 个字符。	
 * @method string getSceneType() 获取视频场景化，可选值： 
normal：通用转码场景：通用转码压缩场景。 
pgc：PGC高清影视：压缩时会注重影视剧的观看体验，根据影视剧特性进行ROI编码，同时保留高质量的视频内容和音频。 
materials_video：高清素材：素材资源类场景，对画质要求极高，较多透明画面内容，在压缩的同时接近视觉无损。 
ugc：UGC内容：适用于广泛的UGC/短视频场景，针对短视频的特性优化编码码率， 画质提升，提升业务QOS/QOE指标。 
e-commerce_video：秀场/电商类：压缩时会强调细节清晰度和ROI区域提升，尤其注重保持人脸区域的画质。 
educational_video：教育类：压缩时会强调文字和图像的清晰度和可读性，以便学生更好地理解内容，确保讲解内容清晰传达。 
no_config：未配置。
 * @method void setSceneType(string $SceneType) 设置视频场景化，可选值： 
normal：通用转码场景：通用转码压缩场景。 
pgc：PGC高清影视：压缩时会注重影视剧的观看体验，根据影视剧特性进行ROI编码，同时保留高质量的视频内容和音频。 
materials_video：高清素材：素材资源类场景，对画质要求极高，较多透明画面内容，在压缩的同时接近视觉无损。 
ugc：UGC内容：适用于广泛的UGC/短视频场景，针对短视频的特性优化编码码率， 画质提升，提升业务QOS/QOE指标。 
e-commerce_video：秀场/电商类：压缩时会强调细节清晰度和ROI区域提升，尤其注重保持人脸区域的画质。 
educational_video：教育类：压缩时会强调文字和图像的清晰度和可读性，以便学生更好地理解内容，确保讲解内容清晰传达。 
no_config：未配置。
 * @method string getCompressType() 获取转码策略，可选值： 
ultra_compress：极致压缩：相比标准压缩，该策略能在保证一定画质的基础上最大限度压缩码率，极大节约带宽和存储成本。 
standard_compress：综合最优：平衡压缩率与画质，在保证主观画质没有明显降低的情况下尽可能压缩文件。该策略仅收取音视频极速高清转码费用。 
high_compress：码率优先：优先保证降低文件体积大小，可能有一定画质损失。该策略仅收取音视频极速高清转码费用。 
low_compress：画质优先：优先保证画质，压缩出来的文件体积可能相对较大。该策略仅收取音视频极速高清转码费用。 
no_config：未配置。
 * @method void setCompressType(string $CompressType) 设置转码策略，可选值： 
ultra_compress：极致压缩：相比标准压缩，该策略能在保证一定画质的基础上最大限度压缩码率，极大节约带宽和存储成本。 
standard_compress：综合最优：平衡压缩率与画质，在保证主观画质没有明显降低的情况下尽可能压缩文件。该策略仅收取音视频极速高清转码费用。 
high_compress：码率优先：优先保证降低文件体积大小，可能有一定画质损失。该策略仅收取音视频极速高清转码费用。 
low_compress：画质优先：优先保证画质，压缩出来的文件体积可能相对较大。该策略仅收取音视频极速高清转码费用。 
no_config：未配置。
 * @method string getEnhanceSceneType() 获取增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
 * @method void setEnhanceSceneType(string $EnhanceSceneType) 设置增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
 * @method string getEnhanceTranscodeType() 获取增强转码类型，可选值：
<li>Common（普通转码）</li>
<li>TEHD-100（极速高清视频转码）</li>
<li>TEHD-200（极速高清音频转码）</li>
 * @method void setEnhanceTranscodeType(string $EnhanceTranscodeType) 设置增强转码类型，可选值：
<li>Common（普通转码）</li>
<li>TEHD-100（极速高清视频转码）</li>
<li>TEHD-200（极速高清音频转码）</li>
 * @method string getEnhanceType() 获取增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>VideoAudioEnhance（视频音频增强都含）</li>
 * @method void setEnhanceType(string $EnhanceType) 设置增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>VideoAudioEnhance（视频音频增强都含）</li>
 */
class DescribeTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var array 转码模板唯一标识过滤条件，数组长度限制：100。
     */
    public $Definitions;

    /**
     * @var string 模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     */
    public $Type;

    /**
     * @var string 封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
     */
    public $ContainerType;

    /**
     * @var string （建议使用TranscodeType代替）极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
     */
    public $TEHDType;

    /**
     * @var integer 分页偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：10，最大值：100。
     */
    public $Limit;

    /**
     * @var string 模板类型（替换旧版本 TEHDType），可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：视频极速高清，老的类型（建议使用 TEHD-100） 。</li>
<li>TEHD-100：视频极速高清</li>
<li>TEHD-200：音频极速高清</li>
<li>Enhance：音视频增强模板。</li>
默认空，不限制类型。

     */
    public $TranscodeType;

    /**
     * @var string 转码模板标识过滤条件，长度限制：64 个字符。	
     */
    public $Name;

    /**
     * @var string 视频场景化，可选值： 
normal：通用转码场景：通用转码压缩场景。 
pgc：PGC高清影视：压缩时会注重影视剧的观看体验，根据影视剧特性进行ROI编码，同时保留高质量的视频内容和音频。 
materials_video：高清素材：素材资源类场景，对画质要求极高，较多透明画面内容，在压缩的同时接近视觉无损。 
ugc：UGC内容：适用于广泛的UGC/短视频场景，针对短视频的特性优化编码码率， 画质提升，提升业务QOS/QOE指标。 
e-commerce_video：秀场/电商类：压缩时会强调细节清晰度和ROI区域提升，尤其注重保持人脸区域的画质。 
educational_video：教育类：压缩时会强调文字和图像的清晰度和可读性，以便学生更好地理解内容，确保讲解内容清晰传达。 
no_config：未配置。
     */
    public $SceneType;

    /**
     * @var string 转码策略，可选值： 
ultra_compress：极致压缩：相比标准压缩，该策略能在保证一定画质的基础上最大限度压缩码率，极大节约带宽和存储成本。 
standard_compress：综合最优：平衡压缩率与画质，在保证主观画质没有明显降低的情况下尽可能压缩文件。该策略仅收取音视频极速高清转码费用。 
high_compress：码率优先：优先保证降低文件体积大小，可能有一定画质损失。该策略仅收取音视频极速高清转码费用。 
low_compress：画质优先：优先保证画质，压缩出来的文件体积可能相对较大。该策略仅收取音视频极速高清转码费用。 
no_config：未配置。
     */
    public $CompressType;

    /**
     * @var string 增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
     */
    public $EnhanceSceneType;

    /**
     * @var string 增强转码类型，可选值：
<li>Common（普通转码）</li>
<li>TEHD-100（极速高清视频转码）</li>
<li>TEHD-200（极速高清音频转码）</li>
     */
    public $EnhanceTranscodeType;

    /**
     * @var string 增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>VideoAudioEnhance（视频音频增强都含）</li>
     */
    public $EnhanceType;

    /**
     * @param array $Definitions 转码模板唯一标识过滤条件，数组长度限制：100。
     * @param string $Type 模板类型过滤条件，可选值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
     * @param string $ContainerType 封装格式过滤条件，可选值：
<li>Video：视频格式，可以同时包含视频流和音频流的封装格式板；</li>
<li>PureAudio：纯音频格式，只能包含音频流的封装格式。</li>
     * @param string $TEHDType （建议使用TranscodeType代替）极速高清过滤条件，用于过滤普通转码或极速高清转码模板，可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：极速高清模板。</li>
     * @param integer $Offset 分页偏移量，默认值：0。
     * @param integer $Limit 返回记录条数，默认值：10，最大值：100。
     * @param string $TranscodeType 模板类型（替换旧版本 TEHDType），可选值：
<li>Common：普通转码模板；</li>
<li>TEHD：视频极速高清，老的类型（建议使用 TEHD-100） 。</li>
<li>TEHD-100：视频极速高清</li>
<li>TEHD-200：音频极速高清</li>
<li>Enhance：音视频增强模板。</li>
默认空，不限制类型。

     * @param string $Name 转码模板标识过滤条件，长度限制：64 个字符。	
     * @param string $SceneType 视频场景化，可选值： 
normal：通用转码场景：通用转码压缩场景。 
pgc：PGC高清影视：压缩时会注重影视剧的观看体验，根据影视剧特性进行ROI编码，同时保留高质量的视频内容和音频。 
materials_video：高清素材：素材资源类场景，对画质要求极高，较多透明画面内容，在压缩的同时接近视觉无损。 
ugc：UGC内容：适用于广泛的UGC/短视频场景，针对短视频的特性优化编码码率， 画质提升，提升业务QOS/QOE指标。 
e-commerce_video：秀场/电商类：压缩时会强调细节清晰度和ROI区域提升，尤其注重保持人脸区域的画质。 
educational_video：教育类：压缩时会强调文字和图像的清晰度和可读性，以便学生更好地理解内容，确保讲解内容清晰传达。 
no_config：未配置。
     * @param string $CompressType 转码策略，可选值： 
ultra_compress：极致压缩：相比标准压缩，该策略能在保证一定画质的基础上最大限度压缩码率，极大节约带宽和存储成本。 
standard_compress：综合最优：平衡压缩率与画质，在保证主观画质没有明显降低的情况下尽可能压缩文件。该策略仅收取音视频极速高清转码费用。 
high_compress：码率优先：优先保证降低文件体积大小，可能有一定画质损失。该策略仅收取音视频极速高清转码费用。 
low_compress：画质优先：优先保证画质，压缩出来的文件体积可能相对较大。该策略仅收取音视频极速高清转码费用。 
no_config：未配置。
     * @param string $EnhanceSceneType 增强场景配置，可选值：
<li>common（通用），通用增强参数，适用于各种视频类型的基础优化参数，提升整体画质。</li>
<li>AIGC，整体分辨率提升，利用AI技术提升视频整体分辨率，增强画面清晰度。</li>
<li>short_play（短剧），增强面部与字幕细节，突出人物面部表情细节和字幕清晰度，提升观剧体验。</li>
<li>short_video（短视频），优化复杂多样的画质问题，针对短视频的复杂场景，优化画质，解决多种视觉问题。</li>
<li>game（游戏视频），修复运动模糊，提升细节，重点提升游戏细节清晰度，恢复运动模糊区域，使游戏画面内容更清晰，更丰富。</li>
<li>HD_movie_series（超高清影视剧），获得超高清流畅效果，针对广电/OTT超高清视频的诉求，生成4K 60fps HDR的超高清标准视频。支持广电场景格式标准要求。</li>
<li>LQ_material（低清素材/老片修复），整体分辨率提升，针对老旧视频由于拍摄年代较久存在的分辨率不足、模糊失真、划痕损伤和色温等问题进行专门优化。</li>
<li>lecture（秀场/电商/大会/讲座），美化提升面部效果，针对秀场/电商/大会/讲座等存在人物进行讲解的场景，进行人脸区域、噪声消除、毛刺处理的专门优化。</li>
     * @param string $EnhanceTranscodeType 增强转码类型，可选值：
<li>Common（普通转码）</li>
<li>TEHD-100（极速高清视频转码）</li>
<li>TEHD-200（极速高清音频转码）</li>
     * @param string $EnhanceType 增强类型，可选值：
<li>VideoEnhance（仅视频增强）</li>
<li>AudioEnhance（仅音频增强）</li>
<li>VideoAudioEnhance（视频音频增强都含）</li>
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
        if (array_key_exists("Definitions",$param) and $param["Definitions"] !== null) {
            $this->Definitions = $param["Definitions"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ContainerType",$param) and $param["ContainerType"] !== null) {
            $this->ContainerType = $param["ContainerType"];
        }

        if (array_key_exists("TEHDType",$param) and $param["TEHDType"] !== null) {
            $this->TEHDType = $param["TEHDType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TranscodeType",$param) and $param["TranscodeType"] !== null) {
            $this->TranscodeType = $param["TranscodeType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }

        if (array_key_exists("EnhanceSceneType",$param) and $param["EnhanceSceneType"] !== null) {
            $this->EnhanceSceneType = $param["EnhanceSceneType"];
        }

        if (array_key_exists("EnhanceTranscodeType",$param) and $param["EnhanceTranscodeType"] !== null) {
            $this->EnhanceTranscodeType = $param["EnhanceTranscodeType"];
        }

        if (array_key_exists("EnhanceType",$param) and $param["EnhanceType"] !== null) {
            $this->EnhanceType = $param["EnhanceType"];
        }
    }
}
