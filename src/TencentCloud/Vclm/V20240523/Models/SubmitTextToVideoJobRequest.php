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
 * SubmitTextToVideoJob请求参数结构体
 *
 * @method string getPrompt() 获取<p>正向文本提示词。不能超过2500个字符</p>
 * @method void setPrompt(string $Prompt) 设置<p>正向文本提示词。不能超过2500个字符</p>
 * @method string getModel() 获取<p>模型名称。<br>v1.0：Kling-V1<br>v1.5：Kling-V1-5<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1m：Kling-V2-1-master<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>v3.0：kling-v3</p>
 * @method void setModel(string $Model) 设置<p>模型名称。<br>v1.0：Kling-V1<br>v1.5：Kling-V1-5<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1m：Kling-V2-1-master<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>v3.0：kling-v3</p>
 * @method string getNegativePrompt() 获取<p>负向文本提示词。不能超过2500个字符</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>负向文本提示词。不能超过2500个字符</p>
 * @method string getDuration() 获取<p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15不同模型支持时长不同<br>●模型v1.0、v1.6、v2.0、v2.1m、v2.5、v2.6：支持5、10<br>●模型v3.0：支持3～15s</p>
 * @method void setDuration(string $Duration) 设置<p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15不同模型支持时长不同<br>●模型v1.0、v1.6、v2.0、v2.1m、v2.5、v2.6：支持5、10<br>●模型v3.0：支持3～15s</p>
 * @method string getMode() 获取<p>生成视频的模式；<br>枚举值：std，pro<br>●其中std：标准模式（标准），基础模式，性价比高<br>●其中pro：专家模式（高品质），高表现模式，生成视频质量更佳<br>不同模型版本、视频模式支持范围不同</p><p>●v1.6：std、pro。<br>●v1.0、v1.5：pro<br>●v2.0、v2.1m、v3.0：模型无需配置。<br>●v2.5：首尾帧情况下支持pro。<br>●v2.6：仅支持pro，选择v2.6模型时，默认自动生成高品质pro视频。</p>
 * @method void setMode(string $Mode) 设置<p>生成视频的模式；<br>枚举值：std，pro<br>●其中std：标准模式（标准），基础模式，性价比高<br>●其中pro：专家模式（高品质），高表现模式，生成视频质量更佳<br>不同模型版本、视频模式支持范围不同</p><p>●v1.6：std、pro。<br>●v1.0、v1.5：pro<br>●v2.0、v2.1m、v3.0：模型无需配置。<br>●v2.5：首尾帧情况下支持pro。<br>●v2.6：仅支持pro，选择v2.6模型时，默认自动生成高品质pro视频。</p>
 * @method float getCfgScale() 获取<p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>取值范围：[0, 1]<br>v2.0、v2.5、v2.6 模型不支持当前参数<br>默认值：0.5。</p>
 * @method void setCfgScale(float $CfgScale) 设置<p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>取值范围：[0, 1]<br>v2.0、v2.5、v2.6 模型不支持当前参数<br>默认值：0.5。</p>
 * @method string getAspectRatio() 获取<p>生成视频的画面纵横比（宽:高）<br>枚举值：16:9, 9:16, 1:1<br>默认值：16:9</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>生成视频的画面纵横比（宽:高）<br>枚举值：16:9, 9:16, 1:1<br>默认值：16:9</p>
 * @method string getSound() 获取<p>生成视频时是否同时生成声音</p><ul><li>枚举值：on，off</li></ul><p>仅V2.6及后续版本模型支持当前参数，v2.6模型的std模式只能生成无声的视频</p>
 * @method void setSound(string $Sound) 设置<p>生成视频时是否同时生成声音</p><ul><li>枚举值：on，off</li></ul><p>仅V2.6及后续版本模型支持当前参数，v2.6模型的std模式只能生成无声的视频</p>
 * @method integer getLogoAdd() 获取<p>为生成视频添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成视频添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
 * @method boolean getMultiShot() 获取<p>是否生成多镜头视频</p><ul><li>当前参数为true时，prompt参数无效</li><li>当前参数为false时，shot_type参数及multi_prompt参数无效</li></ul>
 * @method void setMultiShot(boolean $MultiShot) 设置<p>是否生成多镜头视频</p><ul><li>当前参数为true时，prompt参数无效</li><li>当前参数为false时，shot_type参数及multi_prompt参数无效</li></ul>
 * @method string getShotType() 获取<p>分镜方式</p><p>枚举值：customize，intelligence<br>当MultiShot参数为true时，当前参数必填</p>
 * @method void setShotType(string $ShotType) 设置<p>分镜方式</p><p>枚举值：customize，intelligence<br>当MultiShot参数为true时，当前参数必填</p>
 * @method array getMultiPrompt() 获取<p>各分镜提示词，可包含正向描述和负向描述</p><p>通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空<br>用key:value承载，如下：<pre><code> &quot;MultiPrompt&quot;:[              {                &quot;Index&quot;:int,              &quot;Prompt&quot;: &quot;string&quot;,              &quot;Duration&quot;: &quot;5&quot;            }  ]</code></pre></li></ul>
 * @method void setMultiPrompt(array $MultiPrompt) 设置<p>各分镜提示词，可包含正向描述和负向描述</p><p>通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空<br>用key:value承载，如下：<pre><code> &quot;MultiPrompt&quot;:[              {                &quot;Index&quot;:int,              &quot;Prompt&quot;: &quot;string&quot;,              &quot;Duration&quot;: &quot;5&quot;            }  ]</code></pre></li></ul>
 * @method CameraControl getCameraControl() 获取<p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
 * @method void setCameraControl(CameraControl $CameraControl) 设置<p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
 * @method string getCallbackUrl() 获取<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method string getExternalTaskId() 获取
 * @method void setExternalTaskId(string $ExternalTaskId) 设置
 */
class SubmitTextToVideoJobRequest extends AbstractModel
{
    /**
     * @var string <p>正向文本提示词。不能超过2500个字符</p>
     */
    public $Prompt;

    /**
     * @var string <p>模型名称。<br>v1.0：Kling-V1<br>v1.5：Kling-V1-5<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1m：Kling-V2-1-master<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>v3.0：kling-v3</p>
     */
    public $Model;

    /**
     * @var string <p>负向文本提示词。不能超过2500个字符</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15不同模型支持时长不同<br>●模型v1.0、v1.6、v2.0、v2.1m、v2.5、v2.6：支持5、10<br>●模型v3.0：支持3～15s</p>
     */
    public $Duration;

    /**
     * @var string <p>生成视频的模式；<br>枚举值：std，pro<br>●其中std：标准模式（标准），基础模式，性价比高<br>●其中pro：专家模式（高品质），高表现模式，生成视频质量更佳<br>不同模型版本、视频模式支持范围不同</p><p>●v1.6：std、pro。<br>●v1.0、v1.5：pro<br>●v2.0、v2.1m、v3.0：模型无需配置。<br>●v2.5：首尾帧情况下支持pro。<br>●v2.6：仅支持pro，选择v2.6模型时，默认自动生成高品质pro视频。</p>
     */
    public $Mode;

    /**
     * @var float <p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>取值范围：[0, 1]<br>v2.0、v2.5、v2.6 模型不支持当前参数<br>默认值：0.5。</p>
     */
    public $CfgScale;

    /**
     * @var string <p>生成视频的画面纵横比（宽:高）<br>枚举值：16:9, 9:16, 1:1<br>默认值：16:9</p>
     */
    public $AspectRatio;

    /**
     * @var string <p>生成视频时是否同时生成声音</p><ul><li>枚举值：on，off</li></ul><p>仅V2.6及后续版本模型支持当前参数，v2.6模型的std模式只能生成无声的视频</p>
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
     * @var boolean <p>是否生成多镜头视频</p><ul><li>当前参数为true时，prompt参数无效</li><li>当前参数为false时，shot_type参数及multi_prompt参数无效</li></ul>
     */
    public $MultiShot;

    /**
     * @var string <p>分镜方式</p><p>枚举值：customize，intelligence<br>当MultiShot参数为true时，当前参数必填</p>
     */
    public $ShotType;

    /**
     * @var array <p>各分镜提示词，可包含正向描述和负向描述</p><p>通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空<br>用key:value承载，如下：<pre><code> &quot;MultiPrompt&quot;:[              {                &quot;Index&quot;:int,              &quot;Prompt&quot;: &quot;string&quot;,              &quot;Duration&quot;: &quot;5&quot;            }  ]</code></pre></li></ul>
     */
    public $MultiPrompt;

    /**
     * @var CameraControl <p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
     */
    public $CameraControl;

    /**
     * @var string <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     */
    public $CallbackUrl;

    /**
     * @var string 
     */
    public $ExternalTaskId;

    /**
     * @param string $Prompt <p>正向文本提示词。不能超过2500个字符</p>
     * @param string $Model <p>模型名称。<br>v1.0：Kling-V1<br>v1.5：Kling-V1-5<br>v1.6：Kling-V1-6<br>v2.0：Kling-V2-Master<br>v2.1m：Kling-V2-1-master<br>v2.5：Kling-V2-5-Turbo<br>v2.6：Kling-V2-6<br>v3.0：kling-v3</p>
     * @param string $NegativePrompt <p>负向文本提示词。不能超过2500个字符</p>
     * @param string $Duration <p>生成视频时长，单位s。默认值为5。<br>枚举值：3，4，5，6，7，8，9，10，11，12，13，14，15不同模型支持时长不同<br>●模型v1.0、v1.6、v2.0、v2.1m、v2.5、v2.6：支持5、10<br>●模型v3.0：支持3～15s</p>
     * @param string $Mode <p>生成视频的模式；<br>枚举值：std，pro<br>●其中std：标准模式（标准），基础模式，性价比高<br>●其中pro：专家模式（高品质），高表现模式，生成视频质量更佳<br>不同模型版本、视频模式支持范围不同</p><p>●v1.6：std、pro。<br>●v1.0、v1.5：pro<br>●v2.0、v2.1m、v3.0：模型无需配置。<br>●v2.5：首尾帧情况下支持pro。<br>●v2.6：仅支持pro，选择v2.6模型时，默认自动生成高品质pro视频。</p>
     * @param float $CfgScale <p>生成视频的自由度；值越大，模型自由度越小，与用户输入的提示词相关性越强。<br>取值范围：[0, 1]<br>v2.0、v2.5、v2.6 模型不支持当前参数<br>默认值：0.5。</p>
     * @param string $AspectRatio <p>生成视频的画面纵横比（宽:高）<br>枚举值：16:9, 9:16, 1:1<br>默认值：16:9</p>
     * @param string $Sound <p>生成视频时是否同时生成声音</p><ul><li>枚举值：on，off</li></ul><p>仅V2.6及后续版本模型支持当前参数，v2.6模型的std模式只能生成无声的视频</p>
     * @param integer $LogoAdd <p>为生成视频添加标识的开关，默认为1。<br>1：添加标识。<br>0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成视频的右下角添加“视频由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。</p>
     * @param boolean $MultiShot <p>是否生成多镜头视频</p><ul><li>当前参数为true时，prompt参数无效</li><li>当前参数为false时，shot_type参数及multi_prompt参数无效</li></ul>
     * @param string $ShotType <p>分镜方式</p><p>枚举值：customize，intelligence<br>当MultiShot参数为true时，当前参数必填</p>
     * @param array $MultiPrompt <p>各分镜提示词，可包含正向描述和负向描述</p><p>通过index、prompt、duration参数定义分镜序号及相应提示词和时长，其中：</p><ul><li>最多支持6个分镜，最小支持1个分镜</li><li>每个分镜相关内容的最大长度不超过512</li><li>每个分镜的时长不大于当前任务的总时长，不小于1</li><li>所有分镜的时长之和等于当前任务的总时长</li><li>当MultiShot参数为true且ShotType参数为customize时，当前参数不得为空<br>用key:value承载，如下：<pre><code> &quot;MultiPrompt&quot;:[              {                &quot;Index&quot;:int,              &quot;Prompt&quot;: &quot;string&quot;,              &quot;Duration&quot;: &quot;5&quot;            }  ]</code></pre></li></ul>
     * @param CameraControl $CameraControl <p>控制摄像机运动的协议（如未指定，模型将根据输入的文本/图片进行智能匹配）</p>
     * @param string $CallbackUrl <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
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

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
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

        if (array_key_exists("CameraControl",$param) and $param["CameraControl"] !== null) {
            $this->CameraControl = new CameraControl();
            $this->CameraControl->deserialize($param["CameraControl"]);
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ExternalTaskId",$param) and $param["ExternalTaskId"] !== null) {
            $this->ExternalTaskId = $param["ExternalTaskId"];
        }
    }
}
