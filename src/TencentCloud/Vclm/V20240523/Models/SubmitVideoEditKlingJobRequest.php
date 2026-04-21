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
 * SubmitVideoEditKlingJob请求参数结构体
 *
 * @method string getPrompt() 获取<p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
 * @method void setPrompt(string $Prompt) 设置<p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
 * @method string getModel() 获取<p>模型名称，支持kling-video-o1，kling-v3-omni。默认kling-video-o1。</p>
 * @method void setModel(string $Model) 设置<p>模型名称，支持kling-video-o1，kling-v3-omni。默认kling-video-o1。</p>
 * @method string getExternalTaskId() 获取
 * @method void setExternalTaskId(string $ExternalTaskId) 设置
 * @method array getImageList() 获取<p>参考图列表</p><p>包括主体、场景、风格等参考图片，也可作为首帧或尾帧生成视频；当作为首帧或尾帧生成视频时：</p><p>通过type参数来定义图片是否为首尾帧：first_frame为首帧，end_frame为尾帧</p><p>暂时不支持仅尾帧，即有尾帧图时必须有首帧图</p><p>首帧或首尾帧生视频时，不能使用视频编辑功能</p><p>用key:value承载，如下：</p><p>&quot;ImageInfo&quot;:[<br>    {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;first_frame&quot;<br>  },<br>  {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;end_frame&quot;<br>  }<br>]<br>支持传入图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png</p><p>图片文件大小不能超过10MB，图片宽高尺寸不小于300px，不大于8000px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>有参考视频时，参考图片数量不得超过4；无参考视频时，参考图片数量不得超过7</p><p>数组中超过2张图片时，不支持设置尾帧</p>
 * @method void setImageList(array $ImageList) 设置<p>参考图列表</p><p>包括主体、场景、风格等参考图片，也可作为首帧或尾帧生成视频；当作为首帧或尾帧生成视频时：</p><p>通过type参数来定义图片是否为首尾帧：first_frame为首帧，end_frame为尾帧</p><p>暂时不支持仅尾帧，即有尾帧图时必须有首帧图</p><p>首帧或首尾帧生视频时，不能使用视频编辑功能</p><p>用key:value承载，如下：</p><p>&quot;ImageInfo&quot;:[<br>    {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;first_frame&quot;<br>  },<br>  {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;end_frame&quot;<br>  }<br>]<br>支持传入图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png</p><p>图片文件大小不能超过10MB，图片宽高尺寸不小于300px，不大于8000px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>有参考视频时，参考图片数量不得超过4；无参考视频时，参考图片数量不得超过7</p><p>数组中超过2张图片时，不支持设置尾帧</p>
 * @method string getAspectRatio() 获取<p>生成视频的画面纵横比（宽:高）</p><p>枚举值：16:9, 9:16, 1:1</p><p>未使用首帧参考或视频编辑功能时，当前参数必填</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>生成视频的画面纵横比（宽:高）</p><p>枚举值：16:9, 9:16, 1:1</p><p>未使用首帧参考或视频编辑功能时，当前参数必填</p>
 * @method integer getDuration() 获取<p>生成视频时长，单位s</p><p>枚举值：3，4，5，6，7，8，9，10，其中：使用文生视频、首帧图生视频时，仅支持5和10s<br>使用视频编辑功能（“refer_type”:“base”）时，输出结果与传入视频时长相同，此时当前参数无效；此时，按输入视频时长四舍五入取整计量计费</p>
 * @method void setDuration(integer $Duration) 设置<p>生成视频时长，单位s</p><p>枚举值：3，4，5，6，7，8，9，10，其中：使用文生视频、首帧图生视频时，仅支持5和10s<br>使用视频编辑功能（“refer_type”:“base”）时，输出结果与传入视频时长相同，此时当前参数无效；此时，按输入视频时长四舍五入取整计量计费</p>
 * @method integer getLogoAdd() 获取<p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
 * @method LogoParam getLogoParam() 获取<p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
 * @method string getMode() 获取<p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
 * @method void setMode(string $Mode) 设置<p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
 * @method array getVideoList() 获取<p>参考视频，通过URL方式获取</p><p>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声<br>通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频<br>参考视频为待编辑视频时，不能定义视频首尾帧<br>通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效</p><ul><li>视频格式仅支持MP4/MOV</li><li>仅支持时长≥3秒且≤10秒的视频</li><li>视频宽高尺寸需介于720px（含）和2160px（含）之间</li><li>视频帧率基于24fps～60fps，生成视频时会输出为24fps</li><li>至多仅支持上传1段视频，视频大小不超过200MB</li></ul>
 * @method void setVideoList(array $VideoList) 设置<p>参考视频，通过URL方式获取</p><p>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声<br>通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频<br>参考视频为待编辑视频时，不能定义视频首尾帧<br>通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效</p><ul><li>视频格式仅支持MP4/MOV</li><li>仅支持时长≥3秒且≤10秒的视频</li><li>视频宽高尺寸需介于720px（含）和2160px（含）之间</li><li>视频帧率基于24fps～60fps，生成视频时会输出为24fps</li><li>至多仅支持上传1段视频，视频大小不超过200MB</li></ul>
 * @method boolean getMultiShot() 获取<p>是否生成多镜头视频  当前参数为true时，prompt参数无效，且不支持设定首尾帧生视频  当前参数为false时，shot_type参数及multi_prompt参数无效</p>
 * @method void setMultiShot(boolean $MultiShot) 设置<p>是否生成多镜头视频  当前参数为true时，prompt参数无效，且不支持设定首尾帧生视频  当前参数为false时，shot_type参数及multi_prompt参数无效</p>
 * @method string getShotType() 获取<p>分镜方式  枚举值：customize  当multi_shot参数为true时，当前参数必填</p>
 * @method void setShotType(string $ShotType) 设置<p>分镜方式  枚举值：customize  当multi_shot参数为true时，当前参数必填</p>
 * @method array getMultiPrompt() 获取<p>各分镜信息，如提示词、时长等  通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：  最多支持6个分镜，最小支持1个分镜  每个分镜相关内容的最大长度不超过512  每个分镜的时长不大于当前任务的总时长，不小于1  所有分镜的时长之和等于当前任务的总时长</p>
 * @method void setMultiPrompt(array $MultiPrompt) 设置<p>各分镜信息，如提示词、时长等  通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：  最多支持6个分镜，最小支持1个分镜  每个分镜相关内容的最大长度不超过512  每个分镜的时长不大于当前任务的总时长，不小于1  所有分镜的时长之和等于当前任务的总时长</p>
 * @method array getElementList() 获取<p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
 * @method void setElementList(array $ElementList) 设置<p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
 * @method string getCallbackUrl() 获取<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method string getSound() 获取<p>是否开启声音</p>
 * @method void setSound(string $Sound) 设置<p>是否开启声音</p>
 */
class SubmitVideoEditKlingJobRequest extends AbstractModel
{
    /**
     * @var string <p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
     */
    public $Prompt;

    /**
     * @var string <p>模型名称，支持kling-video-o1，kling-v3-omni。默认kling-video-o1。</p>
     */
    public $Model;

    /**
     * @var string 
     */
    public $ExternalTaskId;

    /**
     * @var array <p>参考图列表</p><p>包括主体、场景、风格等参考图片，也可作为首帧或尾帧生成视频；当作为首帧或尾帧生成视频时：</p><p>通过type参数来定义图片是否为首尾帧：first_frame为首帧，end_frame为尾帧</p><p>暂时不支持仅尾帧，即有尾帧图时必须有首帧图</p><p>首帧或首尾帧生视频时，不能使用视频编辑功能</p><p>用key:value承载，如下：</p><p>&quot;ImageInfo&quot;:[<br>    {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;first_frame&quot;<br>  },<br>  {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;end_frame&quot;<br>  }<br>]<br>支持传入图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png</p><p>图片文件大小不能超过10MB，图片宽高尺寸不小于300px，不大于8000px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>有参考视频时，参考图片数量不得超过4；无参考视频时，参考图片数量不得超过7</p><p>数组中超过2张图片时，不支持设置尾帧</p>
     */
    public $ImageList;

    /**
     * @var string <p>生成视频的画面纵横比（宽:高）</p><p>枚举值：16:9, 9:16, 1:1</p><p>未使用首帧参考或视频编辑功能时，当前参数必填</p>
     */
    public $AspectRatio;

    /**
     * @var integer <p>生成视频时长，单位s</p><p>枚举值：3，4，5，6，7，8，9，10，其中：使用文生视频、首帧图生视频时，仅支持5和10s<br>使用视频编辑功能（“refer_type”:“base”）时，输出结果与传入视频时长相同，此时当前参数无效；此时，按输入视频时长四舍五入取整计量计费</p>
     */
    public $Duration;

    /**
     * @var integer <p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
     */
    public $LogoParam;

    /**
     * @var string <p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
     */
    public $Mode;

    /**
     * @var array <p>参考视频，通过URL方式获取</p><p>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声<br>通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频<br>参考视频为待编辑视频时，不能定义视频首尾帧<br>通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效</p><ul><li>视频格式仅支持MP4/MOV</li><li>仅支持时长≥3秒且≤10秒的视频</li><li>视频宽高尺寸需介于720px（含）和2160px（含）之间</li><li>视频帧率基于24fps～60fps，生成视频时会输出为24fps</li><li>至多仅支持上传1段视频，视频大小不超过200MB</li></ul>
     */
    public $VideoList;

    /**
     * @var boolean <p>是否生成多镜头视频  当前参数为true时，prompt参数无效，且不支持设定首尾帧生视频  当前参数为false时，shot_type参数及multi_prompt参数无效</p>
     */
    public $MultiShot;

    /**
     * @var string <p>分镜方式  枚举值：customize  当multi_shot参数为true时，当前参数必填</p>
     */
    public $ShotType;

    /**
     * @var array <p>各分镜信息，如提示词、时长等  通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：  最多支持6个分镜，最小支持1个分镜  每个分镜相关内容的最大长度不超过512  每个分镜的时长不大于当前任务的总时长，不小于1  所有分镜的时长之和等于当前任务的总时长</p>
     */
    public $MultiPrompt;

    /**
     * @var array <p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
     */
    public $ElementList;

    /**
     * @var string <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     */
    public $CallbackUrl;

    /**
     * @var string <p>是否开启声音</p>
     */
    public $Sound;

    /**
     * @param string $Prompt <p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
     * @param string $Model <p>模型名称，支持kling-video-o1，kling-v3-omni。默认kling-video-o1。</p>
     * @param string $ExternalTaskId 
     * @param array $ImageList <p>参考图列表</p><p>包括主体、场景、风格等参考图片，也可作为首帧或尾帧生成视频；当作为首帧或尾帧生成视频时：</p><p>通过type参数来定义图片是否为首尾帧：first_frame为首帧，end_frame为尾帧</p><p>暂时不支持仅尾帧，即有尾帧图时必须有首帧图</p><p>首帧或首尾帧生视频时，不能使用视频编辑功能</p><p>用key:value承载，如下：</p><p>&quot;ImageInfo&quot;:[<br>    {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;first_frame&quot;<br>  },<br>  {<br>      &quot;ImageUrl&quot;:&quot;https://cos.ap-guangzhou.myqcloud.com/test.png&quot;,<br>    &quot;Type&quot;:&quot;end_frame&quot;<br>  }<br>]<br>支持传入图片URL（确保可访问）</p><p>图片格式支持.jpg / .jpeg / .png</p><p>图片文件大小不能超过10MB，图片宽高尺寸不小于300px，不大于8000px，图片宽高比要在1:2.5 ~ 2.5:1之间</p><p>有参考视频时，参考图片数量不得超过4；无参考视频时，参考图片数量不得超过7</p><p>数组中超过2张图片时，不支持设置尾帧</p>
     * @param string $AspectRatio <p>生成视频的画面纵横比（宽:高）</p><p>枚举值：16:9, 9:16, 1:1</p><p>未使用首帧参考或视频编辑功能时，当前参数必填</p>
     * @param integer $Duration <p>生成视频时长，单位s</p><p>枚举值：3，4，5，6，7，8，9，10，其中：使用文生视频、首帧图生视频时，仅支持5和10s<br>使用视频编辑功能（“refer_type”:“base”）时，输出结果与传入视频时长相同，此时当前参数无效；此时，按输入视频时长四舍五入取整计量计费</p>
     * @param integer $LogoAdd <p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
     * @param LogoParam $LogoParam <p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
     * @param string $Mode <p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
     * @param array $VideoList <p>参考视频，通过URL方式获取</p><p>可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声<br>通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频<br>参考视频为待编辑视频时，不能定义视频首尾帧<br>通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效</p><ul><li>视频格式仅支持MP4/MOV</li><li>仅支持时长≥3秒且≤10秒的视频</li><li>视频宽高尺寸需介于720px（含）和2160px（含）之间</li><li>视频帧率基于24fps～60fps，生成视频时会输出为24fps</li><li>至多仅支持上传1段视频，视频大小不超过200MB</li></ul>
     * @param boolean $MultiShot <p>是否生成多镜头视频  当前参数为true时，prompt参数无效，且不支持设定首尾帧生视频  当前参数为false时，shot_type参数及multi_prompt参数无效</p>
     * @param string $ShotType <p>分镜方式  枚举值：customize  当multi_shot参数为true时，当前参数必填</p>
     * @param array $MultiPrompt <p>各分镜信息，如提示词、时长等  通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：  最多支持6个分镜，最小支持1个分镜  每个分镜相关内容的最大长度不超过512  每个分镜的时长不大于当前任务的总时长，不小于1  所有分镜的时长之和等于当前任务的总时长</p>
     * @param array $ElementList <p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
     * @param string $CallbackUrl <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     * @param string $Sound <p>是否开启声音</p>
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

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("ExternalTaskId",$param) and $param["ExternalTaskId"] !== null) {
            $this->ExternalTaskId = $param["ExternalTaskId"];
        }

        if (array_key_exists("ImageList",$param) and $param["ImageList"] !== null) {
            $this->ImageList = [];
            foreach ($param["ImageList"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageList, $obj);
            }
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("VideoList",$param) and $param["VideoList"] !== null) {
            $this->VideoList = [];
            foreach ($param["VideoList"] as $key => $value){
                $obj = new ReferVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoList, $obj);
            }
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

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Sound",$param) and $param["Sound"] !== null) {
            $this->Sound = $param["Sound"];
        }
    }
}
