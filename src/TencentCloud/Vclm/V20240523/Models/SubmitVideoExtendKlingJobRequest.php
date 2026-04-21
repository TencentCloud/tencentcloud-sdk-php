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
 * SubmitVideoExtendKlingJob请求参数结构体
 *
 * @method string getVideoId() 获取<p>视频ID  支持通过文本、图片和视频延长生成的视频的ID（原视频不能超过3分钟）  请注意，基于目前的清理策略、视频生成30天之后会被清理，则无法进行延长</p>
 * @method void setVideoId(string $VideoId) 设置<p>视频ID  支持通过文本、图片和视频延长生成的视频的ID（原视频不能超过3分钟）  请注意，基于目前的清理策略、视频生成30天之后会被清理，则无法进行延长</p>
 * @method string getPrompt() 获取<p>正向文本提示词  不能超过2500个字符</p>
 * @method void setPrompt(string $Prompt) 设置<p>正向文本提示词  不能超过2500个字符</p>
 * @method string getNegativePrompt() 获取<p>负向文本提示词  不能超过2500个字符</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>负向文本提示词  不能超过2500个字符</p>
 * @method string getExternalTaskId() 获取
 * @method void setExternalTaskId(string $ExternalTaskId) 设置
 * @method float getCfgScale() 获取<p>提示词参考强度  取值范围：[0,1]，数值越大参考强度越大</p>
 * @method void setCfgScale(float $CfgScale) 设置<p>提示词参考强度  取值范围：[0,1]，数值越大参考强度越大</p>
 * @method string getCallbackUrl() 获取<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
 * @method integer getLogoAdd() 获取<p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
 */
class SubmitVideoExtendKlingJobRequest extends AbstractModel
{
    /**
     * @var string <p>视频ID  支持通过文本、图片和视频延长生成的视频的ID（原视频不能超过3分钟）  请注意，基于目前的清理策略、视频生成30天之后会被清理，则无法进行延长</p>
     */
    public $VideoId;

    /**
     * @var string <p>正向文本提示词  不能超过2500个字符</p>
     */
    public $Prompt;

    /**
     * @var string <p>负向文本提示词  不能超过2500个字符</p>
     */
    public $NegativePrompt;

    /**
     * @var string 
     */
    public $ExternalTaskId;

    /**
     * @var float <p>提示词参考强度  取值范围：[0,1]，数值越大参考强度越大</p>
     */
    public $CfgScale;

    /**
     * @var string <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     */
    public $CallbackUrl;

    /**
     * @var integer <p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
     */
    public $LogoParam;

    /**
     * @param string $VideoId <p>视频ID  支持通过文本、图片和视频延长生成的视频的ID（原视频不能超过3分钟）  请注意，基于目前的清理策略、视频生成30天之后会被清理，则无法进行延长</p>
     * @param string $Prompt <p>正向文本提示词  不能超过2500个字符</p>
     * @param string $NegativePrompt <p>负向文本提示词  不能超过2500个字符</p>
     * @param string $ExternalTaskId 
     * @param float $CfgScale <p>提示词参考强度  取值范围：[0,1]，数值越大参考强度越大</p>
     * @param string $CallbackUrl <p>本次任务结果回调通知地址，如果配置，服务端会在任务状态发生变更时主动通知</p>
     * @param integer $LogoAdd <p>为生成视频添加标识的开关，默认为1。传0 需前往  <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成后方可生效。<br>1：添加标识；<br>0：不添加标识；<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示，该视频是 AI 生成的视频。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成视频的右下角添加“ AI 生成”或“视频由 AI 生成”字样，如需替换为其他的标识图片，需前往   <a href="https://console.cloud.tencent.com/vtc/setting">控制台</a>  申请开启显式标识自主完成。</p>
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
        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("ExternalTaskId",$param) and $param["ExternalTaskId"] !== null) {
            $this->ExternalTaskId = $param["ExternalTaskId"];
        }

        if (array_key_exists("CfgScale",$param) and $param["CfgScale"] !== null) {
            $this->CfgScale = $param["CfgScale"];
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
