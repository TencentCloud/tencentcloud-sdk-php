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
 * SubmitMotionControlKlingJob请求参数结构体
 *
 * @method string getModel() 获取<p>模型名称  枚举值：kling-v2-6, kling-v3。</p>
 * @method void setModel(string $Model) 设置<p>模型名称  枚举值：kling-v2-6, kling-v3。</p>
 * @method string getPrompt() 获取<p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
 * @method void setPrompt(string $Prompt) 设置<p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
 * @method string getImage() 获取<p>参考图像，生成视频中的人物、背景等元素均以参考图为准  视频内容需满足以下要求：  人物比例尽量与参考动作比例一致，尽量避免全身动作驱动半身人物进行生成  人物需要露出清晰的上半身或全身的肢体及头部，避免遮挡  画面中人物避免存在极端朝向，比如倒立、平卧等。人物占画面比例不得太低  支持真实/风格化的角色（包括人物/类人动物/部分纯动物/部分类人肢体比例的角色）通过  包含支持传入图片Base64编码或图片URL（确保可访问）。</p>
 * @method void setImage(string $Image) 设置<p>参考图像，生成视频中的人物、背景等元素均以参考图为准  视频内容需满足以下要求：  人物比例尽量与参考动作比例一致，尽量避免全身动作驱动半身人物进行生成  人物需要露出清晰的上半身或全身的肢体及头部，避免遮挡  画面中人物避免存在极端朝向，比如倒立、平卧等。人物占画面比例不得太低  支持真实/风格化的角色（包括人物/类人动物/部分纯动物/部分类人肢体比例的角色）通过  包含支持传入图片Base64编码或图片URL（确保可访问）。</p>
 * @method string getVideo() 获取<p>参考视频的获取链接。生成视频中的人物动作与参考视频一致。  视频内容需满足以下要求：  人物需要漏出清晰的上半身或全身的全部肢体及头部，避免遮挡  建议上传1人动作视频，2人及以上会取画面占比最大的人物动作进行生成  推荐使用真人动作，部分风格化的人物/类人肢体比例可以通过  动作视频一镜到底，角色始终出现在画面中，避免切镜、运镜等。否则会被截取  动作避免过快，相对平稳的动作生成效果更佳  视频文件支持.mp4/.mov，文件大小不超过100MB，仅支持长宽的边长均位于340px~3850px之间，上述校验不通过会返回错误码等信息  视频时长下限不短于3秒，时长上限与人物朝向参考（character_orientation）有关：  当人物朝向与视频中人物一致时，视频时长最长可达30秒；  当人物朝向与图片中人物一致时，视频时长最长可达10秒；  如果您的动作难度比较高、速度比较快，有一定概率生成不足上传视频时长的结果，因为模型只能提取有效动作时长进行生成，最短提取出3s可用连续动作即可生成。请注意，因此消耗的积分将无法退还，建议适当调整动作难度与速度  系统会校验视频内容，如有问题会返回错误码等信息。</p>
 * @method void setVideo(string $Video) 设置<p>参考视频的获取链接。生成视频中的人物动作与参考视频一致。  视频内容需满足以下要求：  人物需要漏出清晰的上半身或全身的全部肢体及头部，避免遮挡  建议上传1人动作视频，2人及以上会取画面占比最大的人物动作进行生成  推荐使用真人动作，部分风格化的人物/类人肢体比例可以通过  动作视频一镜到底，角色始终出现在画面中，避免切镜、运镜等。否则会被截取  动作避免过快，相对平稳的动作生成效果更佳  视频文件支持.mp4/.mov，文件大小不超过100MB，仅支持长宽的边长均位于340px~3850px之间，上述校验不通过会返回错误码等信息  视频时长下限不短于3秒，时长上限与人物朝向参考（character_orientation）有关：  当人物朝向与视频中人物一致时，视频时长最长可达30秒；  当人物朝向与图片中人物一致时，视频时长最长可达10秒；  如果您的动作难度比较高、速度比较快，有一定概率生成不足上传视频时长的结果，因为模型只能提取有效动作时长进行生成，最短提取出3s可用连续动作即可生成。请注意，因此消耗的积分将无法退还，建议适当调整动作难度与速度  系统会校验视频内容，如有问题会返回错误码等信息。</p>
 * @method string getMode() 获取<p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
 * @method void setMode(string $Mode) 设置<p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
 * @method string getKeepOriginalSound() 获取<p>可选择是否保留视频原声  枚举值：yes，no  其中yes：保留视频原声  其中no：不保留视频原声。</p>
 * @method void setKeepOriginalSound(string $KeepOriginalSound) 设置<p>可选择是否保留视频原声  枚举值：yes，no  其中yes：保留视频原声  其中no：不保留视频原声。</p>
 * @method string getCharacterOrientation() 获取<p>生成视频中人物的朝向，可选择与图片一致或与视频一致  枚举值：image，video，其中：  其中image：与图片中人物朝向一致；此时参考视频时长不得超过10秒；  其中video：与视频中人物朝向一致；此时参考视频时长不得超过30秒；  引用主体时，生成的视频暂时只能参考视频中的人物朝向。</p>
 * @method void setCharacterOrientation(string $CharacterOrientation) 设置<p>生成视频中人物的朝向，可选择与图片一致或与视频一致  枚举值：image，video，其中：  其中image：与图片中人物朝向一致；此时参考视频时长不得超过10秒；  其中video：与视频中人物朝向一致；此时参考视频时长不得超过30秒；  引用主体时，生成的视频暂时只能参考视频中的人物朝向。</p>
 * @method array getElementList() 获取<p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
 * @method void setElementList(array $ElementList) 设置<p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
 * @method string getCallbackUrl() 获取<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method integer getLogoAdd() 获取<p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
 * @method LogoParam getLogoParam() 获取<p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
 */
class SubmitMotionControlKlingJobRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称  枚举值：kling-v2-6, kling-v3。</p>
     */
    public $Model;

    /**
     * @var string <p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
     */
    public $Prompt;

    /**
     * @var string <p>参考图像，生成视频中的人物、背景等元素均以参考图为准  视频内容需满足以下要求：  人物比例尽量与参考动作比例一致，尽量避免全身动作驱动半身人物进行生成  人物需要露出清晰的上半身或全身的肢体及头部，避免遮挡  画面中人物避免存在极端朝向，比如倒立、平卧等。人物占画面比例不得太低  支持真实/风格化的角色（包括人物/类人动物/部分纯动物/部分类人肢体比例的角色）通过  包含支持传入图片Base64编码或图片URL（确保可访问）。</p>
     */
    public $Image;

    /**
     * @var string <p>参考视频的获取链接。生成视频中的人物动作与参考视频一致。  视频内容需满足以下要求：  人物需要漏出清晰的上半身或全身的全部肢体及头部，避免遮挡  建议上传1人动作视频，2人及以上会取画面占比最大的人物动作进行生成  推荐使用真人动作，部分风格化的人物/类人肢体比例可以通过  动作视频一镜到底，角色始终出现在画面中，避免切镜、运镜等。否则会被截取  动作避免过快，相对平稳的动作生成效果更佳  视频文件支持.mp4/.mov，文件大小不超过100MB，仅支持长宽的边长均位于340px~3850px之间，上述校验不通过会返回错误码等信息  视频时长下限不短于3秒，时长上限与人物朝向参考（character_orientation）有关：  当人物朝向与视频中人物一致时，视频时长最长可达30秒；  当人物朝向与图片中人物一致时，视频时长最长可达10秒；  如果您的动作难度比较高、速度比较快，有一定概率生成不足上传视频时长的结果，因为模型只能提取有效动作时长进行生成，最短提取出3s可用连续动作即可生成。请注意，因此消耗的积分将无法退还，建议适当调整动作难度与速度  系统会校验视频内容，如有问题会返回错误码等信息。</p>
     */
    public $Video;

    /**
     * @var string <p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
     */
    public $Mode;

    /**
     * @var string <p>可选择是否保留视频原声  枚举值：yes，no  其中yes：保留视频原声  其中no：不保留视频原声。</p>
     */
    public $KeepOriginalSound;

    /**
     * @var string <p>生成视频中人物的朝向，可选择与图片一致或与视频一致  枚举值：image，video，其中：  其中image：与图片中人物朝向一致；此时参考视频时长不得超过10秒；  其中video：与视频中人物朝向一致；此时参考视频时长不得超过30秒；  引用主体时，生成的视频暂时只能参考视频中的人物朝向。</p>
     */
    public $CharacterOrientation;

    /**
     * @var array <p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
     */
    public $ElementList;

    /**
     * @var string <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     */
    public $CallbackUrl;

    /**
     * @var integer <p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
     */
    public $LogoParam;

    /**
     * @param string $Model <p>模型名称  枚举值：kling-v2-6, kling-v3。</p>
     * @param string $Prompt <p>文本提示词，可包含正向描述和负向描述</p><p>可将提示词模板化来满足不同的视频生成需求</p><p>不能超过2500个字</p>
     * @param string $Image <p>参考图像，生成视频中的人物、背景等元素均以参考图为准  视频内容需满足以下要求：  人物比例尽量与参考动作比例一致，尽量避免全身动作驱动半身人物进行生成  人物需要露出清晰的上半身或全身的肢体及头部，避免遮挡  画面中人物避免存在极端朝向，比如倒立、平卧等。人物占画面比例不得太低  支持真实/风格化的角色（包括人物/类人动物/部分纯动物/部分类人肢体比例的角色）通过  包含支持传入图片Base64编码或图片URL（确保可访问）。</p>
     * @param string $Video <p>参考视频的获取链接。生成视频中的人物动作与参考视频一致。  视频内容需满足以下要求：  人物需要漏出清晰的上半身或全身的全部肢体及头部，避免遮挡  建议上传1人动作视频，2人及以上会取画面占比最大的人物动作进行生成  推荐使用真人动作，部分风格化的人物/类人肢体比例可以通过  动作视频一镜到底，角色始终出现在画面中，避免切镜、运镜等。否则会被截取  动作避免过快，相对平稳的动作生成效果更佳  视频文件支持.mp4/.mov，文件大小不超过100MB，仅支持长宽的边长均位于340px~3850px之间，上述校验不通过会返回错误码等信息  视频时长下限不短于3秒，时长上限与人物朝向参考（character_orientation）有关：  当人物朝向与视频中人物一致时，视频时长最长可达30秒；  当人物朝向与图片中人物一致时，视频时长最长可达10秒；  如果您的动作难度比较高、速度比较快，有一定概率生成不足上传视频时长的结果，因为模型只能提取有效动作时长进行生成，最短提取出3s可用连续动作即可生成。请注意，因此消耗的积分将无法退还，建议适当调整动作难度与速度  系统会校验视频内容，如有问题会返回错误码等信息。</p>
     * @param string $Mode <p>生成视频的模式</p><p>枚举值：std，pro<br>其中std：标准模式（标准），基础模式，性价比高<br>其中pro：专家模式（高品质），高表现模式，生成视频质量更佳</p>
     * @param string $KeepOriginalSound <p>可选择是否保留视频原声  枚举值：yes，no  其中yes：保留视频原声  其中no：不保留视频原声。</p>
     * @param string $CharacterOrientation <p>生成视频中人物的朝向，可选择与图片一致或与视频一致  枚举值：image，video，其中：  其中image：与图片中人物朝向一致；此时参考视频时长不得超过10秒；  其中video：与视频中人物朝向一致；此时参考视频时长不得超过30秒；  引用主体时，生成的视频暂时只能参考视频中的人物朝向。</p>
     * @param array $ElementList <p>参考主体列表  基于主体库中主体的ID配置，用key:value承载，如下：  &quot;element_list&quot;:[     {        &quot;element_id&quot;:long   },   {        &quot;element_id&quot;:long   } ] 参考主体数量与有无参考视频、参考图片数量有关，其中：  当使用首帧生成视频时，最多支持3个主体；  当使用首尾帧生成视频时，kling-v3-omni模型最多支持3个主体，kling-video-o1模不支持主体；  有参考视频时，参考图片数量和参考主体数量之和不得超过4，且不支持使用视频角色主体；  无参考视频时，参考图片数量和参考主体数量之和不得超过7；</p>
     * @param string $CallbackUrl <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     * @param integer $LogoAdd <p>为生成视频添加标识的开关，默认为1，0 需前往 控制台 申请开启显示标识自主完成方可生效。 1：添加标识； 0：不添加标识； 其他数值：默认按1处理。</p>
     * @param LogoParam $LogoParam <p>默认在生成视频的右下角添加“ AI 生成”字样，如需替换为其他的标识图片，需前往 控制台 申请开启显示标识自主完成。</p>
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

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Video",$param) and $param["Video"] !== null) {
            $this->Video = $param["Video"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("KeepOriginalSound",$param) and $param["KeepOriginalSound"] !== null) {
            $this->KeepOriginalSound = $param["KeepOriginalSound"];
        }

        if (array_key_exists("CharacterOrientation",$param) and $param["CharacterOrientation"] !== null) {
            $this->CharacterOrientation = $param["CharacterOrientation"];
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

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
