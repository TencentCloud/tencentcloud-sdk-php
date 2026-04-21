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
 * SubmitImageToVideoJob请求参数结构体
 *
 * @method string getModel() 获取<p>模型名称。<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1：Kling-V2-1<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>V3.0：kling-v3</p>
 * @method void setModel(string $Model) 设置<p>模型名称。<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1：Kling-V2-1<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>V3.0：kling-v3</p>
 * @method Image getImage() 获取<p>参考图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li></ul>
 * @method void setImage(Image $Image) 设置<p>参考图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li></ul>
 * @method Image getImageTail() 获取<p>参考尾帧图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li><li>ImageTail参数、DynamicMasks/StaticMask参数、CameraControl参数三选一，不能同时使用</li></ul>
 * @method void setImageTail(Image $ImageTail) 设置<p>参考尾帧图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li><li>ImageTail参数、DynamicMasks/StaticMask参数、CameraControl参数三选一，不能同时使用</li></ul>
 * @method string getPrompt() 获取<p>正向文本提示词。不能超过2500个字符</p>
 * @method void setPrompt(string $Prompt) 设置<p>正向文本提示词。不能超过2500个字符</p>
 * @method string getNegativePrompt() 获取<p>负向文本提示词。不能超过2500个字符</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>负向文本提示词。不能超过2500个字符</p>
 * @method string getDuration() 获取<p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15</p><p>不同模型支持时长不同</p><ul><li>模型v1.6、v2.0、v2.5、v2.6：支持5、10</li><li>模型v3.0：支持3～15s</li></ul>
 * @method void setDuration(string $Duration) 设置<p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15</p><p>不同模型支持时长不同</p><ul><li>模型v1.6、v2.0、v2.5、v2.6：支持5、10</li><li>模型v3.0：支持3～15s</li></ul>
 * @method string getMode() 获取<p>生成视频的模式<br>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p><p>不同模型版本、视频模式支持范围不同</p><ul><li>v1.6：首尾帧与仅首帧情况下只支持pro</li><li>v2.0、v3.0 ：无需配置</li><li>v2.1、v2.5、v2.6：首尾帧情况下只支持pro</li></ul>
 * @method void setMode(string $Mode) 设置<p>生成视频的模式<br>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p><p>不同模型版本、视频模式支持范围不同</p><ul><li>v1.6：首尾帧与仅首帧情况下只支持pro</li><li>v2.0、v3.0 ：无需配置</li><li>v2.1、v2.5、v2.6：首尾帧情况下只支持pro</li></ul>
 * @method float getCfgScale() 获取<p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>v2.0、v2.5、v2.6模型的不支持当前参数<br>取值范围：[0, 1]</p>
 * @method void setCfgScale(float $CfgScale) 设置<p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>v2.0、v2.5、v2.6模型的不支持当前参数<br>取值范围：[0, 1]</p>
 * @method string getSound() 获取<p>生成视频时是否同时生成声音<br>枚举值：on，off<br>不同模型版本、视频模式支持范围不同</p><ul><li>v2.6：有首尾帧的pro模式只能生成无声的视频</li></ul>
 * @method void setSound(string $Sound) 设置<p>生成视频时是否同时生成声音<br>枚举值：on，off<br>不同模型版本、视频模式支持范围不同</p><ul><li>v2.6：有首尾帧的pro模式只能生成无声的视频</li></ul>
 * @method integer getLogoAdd() 获取<p>为生成视频添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成视频添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method boolean getMultiShot() 获取<p>是否生成多镜头视频</p><ul><li>当前参数为true时，Prompt参数无效，且不支持设定首尾帧生视频</li><li>当前参数为false时，ShotType参数及MultiPrompt参数无效</li></ul>
 * @method void setMultiShot(boolean $MultiShot) 设置<p>是否生成多镜头视频</p><ul><li>当前参数为true时，Prompt参数无效，且不支持设定首尾帧生视频</li><li>当前参数为false时，ShotType参数及MultiPrompt参数无效</li></ul>
 * @method string getShotType() 获取<p>分镜方式</p><ul><li>枚举值：customize，intelligence</li><li>当MultiShot参数为true时，当前参数必填</li></ul>
 * @method void setShotType(string $ShotType) 设置<p>分镜方式</p><ul><li>枚举值：customize，intelligence</li><li>当MultiShot参数为true时，当前参数必填</li></ul>
 * @method array getMultiPrompt() 获取<p>各分镜信息，如提示词、时长等<br>通过Index、Prompt、Duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li></ul><p>用key:value承载，如下：<br>&quot;MultiPrompt&quot;:[<br>    {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  },<br>  {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  }<br>]</p><ul><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空</li></ul>
 * @method void setMultiPrompt(array $MultiPrompt) 设置<p>各分镜信息，如提示词、时长等<br>通过Index、Prompt、Duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li></ul><p>用key:value承载，如下：<br>&quot;MultiPrompt&quot;:[<br>    {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  },<br>  {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  }<br>]</p><ul><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空</li></ul>
 * @method array getElementList() 获取<p>参考主体列表</p><ul><li><p>基于主体库中主体的ID配置，用key:value承载，如下：</p><pre><code>  &quot;ElementList&quot;:[      {         &quot;ElementId&quot;:long    },    {         &quot;ElementId&quot;:long    }  ]</code></pre></li><li><p>最多支持3个参考主体</p></li><li><p>主体分为视频定制主体（简称：视频角色主体）和图片定制主体（简称：多图主体），适用范围不同，请注意区分</p></li><li><p>更多主体信息详见：可灵「主体库 3.0」使用指南</p></li></ul>
 * @method void setElementList(array $ElementList) 设置<p>参考主体列表</p><ul><li><p>基于主体库中主体的ID配置，用key:value承载，如下：</p><pre><code>  &quot;ElementList&quot;:[      {         &quot;ElementId&quot;:long    },    {         &quot;ElementId&quot;:long    }  ]</code></pre></li><li><p>最多支持3个参考主体</p></li><li><p>主体分为视频定制主体（简称：视频角色主体）和图片定制主体（简称：多图主体），适用范围不同，请注意区分</p></li><li><p>更多主体信息详见：可灵「主体库 3.0」使用指南</p></li></ul>
 * @method string getStaticMask() 获取<p>静态笔刷涂抹区域（用户通过运动笔刷涂抹的 mask 图片）<br>“运动笔刷”能力包含“动态笔刷 DynamicMasks”和“静态笔刷 StaticMask”两种<br>支持传入图片Base64编码或图片URL（确保可访问，格式要求同 Image 字段）<br>图片格式支持.jpg / .jpeg / .png<br>图片长宽比必须与输入图片相同（即Image字段），否则任务失败（failed）<br>StaticMask和 DynamicMasks.Mask这两张图片的分辨率必须一致，否则任务失败（failed）</p>
 * @method void setStaticMask(string $StaticMask) 设置<p>静态笔刷涂抹区域（用户通过运动笔刷涂抹的 mask 图片）<br>“运动笔刷”能力包含“动态笔刷 DynamicMasks”和“静态笔刷 StaticMask”两种<br>支持传入图片Base64编码或图片URL（确保可访问，格式要求同 Image 字段）<br>图片格式支持.jpg / .jpeg / .png<br>图片长宽比必须与输入图片相同（即Image字段），否则任务失败（failed）<br>StaticMask和 DynamicMasks.Mask这两张图片的分辨率必须一致，否则任务失败（failed）</p>
 * @method array getDynamicMasks() 获取<p>动态笔刷配置列表<br>可配置多组（最多6组），每组包含“涂抹区域 Mask”与“运动轨迹 Trajectories”序列</p>
 * @method void setDynamicMasks(array $DynamicMasks) 设置<p>动态笔刷配置列表<br>可配置多组（最多6组），每组包含“涂抹区域 Mask”与“运动轨迹 Trajectories”序列</p>
 * @method CameraControl getCameraControl() 获取<p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
 * @method void setCameraControl(CameraControl $CameraControl) 设置<p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
 * @method string getCallbackUrl() 获取<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method array getVoiceList() 获取<p>生成视频时所引用的音色的列表</p><p>一次视频生成任务至多引用2个音色<br>当VoiceList参数不为空且Prompt参数中引用音色ID时，视频生成任务按“有指定音色”计量计费<br>VoiceId参数值通过音色定制接口返回，也可使用系统预置音色，详见音色定制相关API；非对口型API的VoiceId<br>ElementList参数与VoiceList参数互斥，不能共存<br>v3模型不支持指定音色<br>用key:value承载，如下：<br>&quot;VoiceList&quot;:[<br>  {&quot;VoiceId&quot;:&quot;VoiceId_1&quot;},<br>  {&quot;VoiceId&quot;:&quot;VoiceId_2&quot;}<br>]</p>
 * @method void setVoiceList(array $VoiceList) 设置<p>生成视频时所引用的音色的列表</p><p>一次视频生成任务至多引用2个音色<br>当VoiceList参数不为空且Prompt参数中引用音色ID时，视频生成任务按“有指定音色”计量计费<br>VoiceId参数值通过音色定制接口返回，也可使用系统预置音色，详见音色定制相关API；非对口型API的VoiceId<br>ElementList参数与VoiceList参数互斥，不能共存<br>v3模型不支持指定音色<br>用key:value承载，如下：<br>&quot;VoiceList&quot;:[<br>  {&quot;VoiceId&quot;:&quot;VoiceId_1&quot;},<br>  {&quot;VoiceId&quot;:&quot;VoiceId_2&quot;}<br>]</p>
 * @method string getExternalTaskId() 获取
 * @method void setExternalTaskId(string $ExternalTaskId) 设置
 */
class SubmitImageToVideoJobRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称。<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1：Kling-V2-1<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>V3.0：kling-v3</p>
     */
    public $Model;

    /**
     * @var Image <p>参考图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li></ul>
     */
    public $Image;

    /**
     * @var Image <p>参考尾帧图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li><li>ImageTail参数、DynamicMasks/StaticMask参数、CameraControl参数三选一，不能同时使用</li></ul>
     */
    public $ImageTail;

    /**
     * @var string <p>正向文本提示词。不能超过2500个字符</p>
     */
    public $Prompt;

    /**
     * @var string <p>负向文本提示词。不能超过2500个字符</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15</p><p>不同模型支持时长不同</p><ul><li>模型v1.6、v2.0、v2.5、v2.6：支持5、10</li><li>模型v3.0：支持3～15s</li></ul>
     */
    public $Duration;

    /**
     * @var string <p>生成视频的模式<br>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p><p>不同模型版本、视频模式支持范围不同</p><ul><li>v1.6：首尾帧与仅首帧情况下只支持pro</li><li>v2.0、v3.0 ：无需配置</li><li>v2.1、v2.5、v2.6：首尾帧情况下只支持pro</li></ul>
     */
    public $Mode;

    /**
     * @var float <p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>v2.0、v2.5、v2.6模型的不支持当前参数<br>取值范围：[0, 1]</p>
     */
    public $CfgScale;

    /**
     * @var string <p>生成视频时是否同时生成声音<br>枚举值：on，off<br>不同模型版本、视频模式支持范围不同</p><ul><li>v2.6：有首尾帧的pro模式只能生成无声的视频</li></ul>
     */
    public $Sound;

    /**
     * @var integer <p>为生成视频添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     */
    public $LogoParam;

    /**
     * @var boolean <p>是否生成多镜头视频</p><ul><li>当前参数为true时，Prompt参数无效，且不支持设定首尾帧生视频</li><li>当前参数为false时，ShotType参数及MultiPrompt参数无效</li></ul>
     */
    public $MultiShot;

    /**
     * @var string <p>分镜方式</p><ul><li>枚举值：customize，intelligence</li><li>当MultiShot参数为true时，当前参数必填</li></ul>
     */
    public $ShotType;

    /**
     * @var array <p>各分镜信息，如提示词、时长等<br>通过Index、Prompt、Duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li></ul><p>用key:value承载，如下：<br>&quot;MultiPrompt&quot;:[<br>    {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  },<br>  {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  }<br>]</p><ul><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空</li></ul>
     */
    public $MultiPrompt;

    /**
     * @var array <p>参考主体列表</p><ul><li><p>基于主体库中主体的ID配置，用key:value承载，如下：</p><pre><code>  &quot;ElementList&quot;:[      {         &quot;ElementId&quot;:long    },    {         &quot;ElementId&quot;:long    }  ]</code></pre></li><li><p>最多支持3个参考主体</p></li><li><p>主体分为视频定制主体（简称：视频角色主体）和图片定制主体（简称：多图主体），适用范围不同，请注意区分</p></li><li><p>更多主体信息详见：可灵「主体库 3.0」使用指南</p></li></ul>
     */
    public $ElementList;

    /**
     * @var string <p>静态笔刷涂抹区域（用户通过运动笔刷涂抹的 mask 图片）<br>“运动笔刷”能力包含“动态笔刷 DynamicMasks”和“静态笔刷 StaticMask”两种<br>支持传入图片Base64编码或图片URL（确保可访问，格式要求同 Image 字段）<br>图片格式支持.jpg / .jpeg / .png<br>图片长宽比必须与输入图片相同（即Image字段），否则任务失败（failed）<br>StaticMask和 DynamicMasks.Mask这两张图片的分辨率必须一致，否则任务失败（failed）</p>
     */
    public $StaticMask;

    /**
     * @var array <p>动态笔刷配置列表<br>可配置多组（最多6组），每组包含“涂抹区域 Mask”与“运动轨迹 Trajectories”序列</p>
     */
    public $DynamicMasks;

    /**
     * @var CameraControl <p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
     */
    public $CameraControl;

    /**
     * @var string <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     */
    public $CallbackUrl;

    /**
     * @var array <p>生成视频时所引用的音色的列表</p><p>一次视频生成任务至多引用2个音色<br>当VoiceList参数不为空且Prompt参数中引用音色ID时，视频生成任务按“有指定音色”计量计费<br>VoiceId参数值通过音色定制接口返回，也可使用系统预置音色，详见音色定制相关API；非对口型API的VoiceId<br>ElementList参数与VoiceList参数互斥，不能共存<br>v3模型不支持指定音色<br>用key:value承载，如下：<br>&quot;VoiceList&quot;:[<br>  {&quot;VoiceId&quot;:&quot;VoiceId_1&quot;},<br>  {&quot;VoiceId&quot;:&quot;VoiceId_2&quot;}<br>]</p>
     */
    public $VoiceList;

    /**
     * @var string 
     */
    public $ExternalTaskId;

    /**
     * @param string $Model <p>模型名称。<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1：Kling-V2-1<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>V3.0：kling-v3</p>
     * @param Image $Image <p>参考图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li></ul>
     * @param Image $ImageTail <p>参考尾帧图像。</p><ul><li>支持传入图片Base64编码或图片URL（确保可访问）</li><li>图片文件大小不能超过10MB，图片分辨率不小于300*300px，图片宽高比要在1:2.5 ~ 2.5:1之间</li><li>Image 参数与 ImageTail 参数至少二选一，二者不能同时为空</li><li>图片格式支持.jpg / .jpeg / .png</li><li>ImageTail参数、DynamicMasks/StaticMask参数、CameraControl参数三选一，不能同时使用</li></ul>
     * @param string $Prompt <p>正向文本提示词。不能超过2500个字符</p>
     * @param string $NegativePrompt <p>负向文本提示词。不能超过2500个字符</p>
     * @param string $Duration <p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15</p><p>不同模型支持时长不同</p><ul><li>模型v1.6、v2.0、v2.5、v2.6：支持5、10</li><li>模型v3.0：支持3～15s</li></ul>
     * @param string $Mode <p>生成视频的模式<br>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p><p>不同模型版本、视频模式支持范围不同</p><ul><li>v1.6：首尾帧与仅首帧情况下只支持pro</li><li>v2.0、v3.0 ：无需配置</li><li>v2.1、v2.5、v2.6：首尾帧情况下只支持pro</li></ul>
     * @param float $CfgScale <p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>v2.0、v2.5、v2.6模型的不支持当前参数<br>取值范围：[0, 1]</p>
     * @param string $Sound <p>生成视频时是否同时生成声音<br>枚举值：on，off<br>不同模型版本、视频模式支持范围不同</p><ul><li>v2.6：有首尾帧的pro模式只能生成无声的视频</li></ul>
     * @param integer $LogoAdd <p>为生成视频添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     * @param boolean $MultiShot <p>是否生成多镜头视频</p><ul><li>当前参数为true时，Prompt参数无效，且不支持设定首尾帧生视频</li><li>当前参数为false时，ShotType参数及MultiPrompt参数无效</li></ul>
     * @param string $ShotType <p>分镜方式</p><ul><li>枚举值：customize，intelligence</li><li>当MultiShot参数为true时，当前参数必填</li></ul>
     * @param array $MultiPrompt <p>各分镜信息，如提示词、时长等<br>通过Index、Prompt、Duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li></ul><p>用key:value承载，如下：<br>&quot;MultiPrompt&quot;:[<br>    {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  },<br>  {<br>      &quot;Index&quot;:int,<br>    &quot;Prompt&quot;: &quot;string&quot;,<br>    &quot;Duration&quot;: &quot;5&quot;<br>  }<br>]</p><ul><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空</li></ul>
     * @param array $ElementList <p>参考主体列表</p><ul><li><p>基于主体库中主体的ID配置，用key:value承载，如下：</p><pre><code>  &quot;ElementList&quot;:[      {         &quot;ElementId&quot;:long    },    {         &quot;ElementId&quot;:long    }  ]</code></pre></li><li><p>最多支持3个参考主体</p></li><li><p>主体分为视频定制主体（简称：视频角色主体）和图片定制主体（简称：多图主体），适用范围不同，请注意区分</p></li><li><p>更多主体信息详见：可灵「主体库 3.0」使用指南</p></li></ul>
     * @param string $StaticMask <p>静态笔刷涂抹区域（用户通过运动笔刷涂抹的 mask 图片）<br>“运动笔刷”能力包含“动态笔刷 DynamicMasks”和“静态笔刷 StaticMask”两种<br>支持传入图片Base64编码或图片URL（确保可访问，格式要求同 Image 字段）<br>图片格式支持.jpg / .jpeg / .png<br>图片长宽比必须与输入图片相同（即Image字段），否则任务失败（failed）<br>StaticMask和 DynamicMasks.Mask这两张图片的分辨率必须一致，否则任务失败（failed）</p>
     * @param array $DynamicMasks <p>动态笔刷配置列表<br>可配置多组（最多6组），每组包含“涂抹区域 Mask”与“运动轨迹 Trajectories”序列</p>
     * @param CameraControl $CameraControl <p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
     * @param string $CallbackUrl <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     * @param array $VoiceList <p>生成视频时所引用的音色的列表</p><p>一次视频生成任务至多引用2个音色<br>当VoiceList参数不为空且Prompt参数中引用音色ID时，视频生成任务按“有指定音色”计量计费<br>VoiceId参数值通过音色定制接口返回，也可使用系统预置音色，详见音色定制相关API；非对口型API的VoiceId<br>ElementList参数与VoiceList参数互斥，不能共存<br>v3模型不支持指定音色<br>用key:value承载，如下：<br>&quot;VoiceList&quot;:[<br>  {&quot;VoiceId&quot;:&quot;VoiceId_1&quot;},<br>  {&quot;VoiceId&quot;:&quot;VoiceId_2&quot;}<br>]</p>
     * @param string $ExternalTaskId 
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new Image();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("ImageTail",$param) and $param["ImageTail"] !== null) {
            $this->ImageTail = new Image();
            $this->ImageTail->deserialize($param["ImageTail"]);
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("CfgScale",$param) and $param["CfgScale"] !== null) {
            $this->CfgScale = $param["CfgScale"];
        }

        if (array_key_exists("Sound",$param) and $param["Sound"] !== null) {
            $this->Sound = $param["Sound"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("MultiShot",$param) and $param["MultiShot"] !== null) {
            $this->MultiShot = $param["MultiShot"];
        }

        if (array_key_exists("ShotType",$param) and $param["ShotType"] !== null) {
            $this->ShotType = $param["ShotType"];
        }

        if (array_key_exists("MultiPrompt",$param) and $param["MultiPrompt"] !== null) {
            $this->MultiPrompt = [];
            foreach ($param["MultiPrompt"] as $key => $value){
                $obj = new MultiPrompt();
                $obj->deserialize($value);
                array_push($this->MultiPrompt, $obj);
            }
        }

        if (array_key_exists("ElementList",$param) and $param["ElementList"] !== null) {
            $this->ElementList = [];
            foreach ($param["ElementList"] as $key => $value){
                $obj = new Element();
                $obj->deserialize($value);
                array_push($this->ElementList, $obj);
            }
        }

        if (array_key_exists("StaticMask",$param) and $param["StaticMask"] !== null) {
            $this->StaticMask = $param["StaticMask"];
        }

        if (array_key_exists("DynamicMasks",$param) and $param["DynamicMasks"] !== null) {
            $this->DynamicMasks = [];
            foreach ($param["DynamicMasks"] as $key => $value){
                $obj = new DynamicMask();
                $obj->deserialize($value);
                array_push($this->DynamicMasks, $obj);
            }
        }

        if (array_key_exists("CameraControl",$param) and $param["CameraControl"] !== null) {
            $this->CameraControl = new CameraControl();
            $this->CameraControl->deserialize($param["CameraControl"]);
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("VoiceList",$param) and $param["VoiceList"] !== null) {
            $this->VoiceList = [];
            foreach ($param["VoiceList"] as $key => $value){
                $obj = new Voice();
                $obj->deserialize($value);
                array_push($this->VoiceList, $obj);
            }
        }

        if (array_key_exists("ExternalTaskId",$param) and $param["ExternalTaskId"] !== null) {
            $this->ExternalTaskId = $param["ExternalTaskId"];
        }
    }
}
