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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVoiceConversation请求参数结构体
 *
 * @method integer getSdkAppId() 获取<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
 * @method string getTaskId() 获取<p>对话任务的唯一Id，在启动对话成功后会返回。</p>
 * @method void setTaskId(string $TaskId) 设置<p>对话任务的唯一Id，在启动对话成功后会返回。</p>
 * @method integer getSequenceNumber() 获取<p>需要保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
 * @method void setSequenceNumber(integer $SequenceNumber) 设置<p>需要保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
 * @method VoiceConversationLLMConfig getLLMConfig() 获取<p>大模型配置。<strong>仅 <code>Cascade</code> 模式生效</strong>；<code>S2S</code> 模式报错。</p>
 * @method void setLLMConfig(VoiceConversationLLMConfig $LLMConfig) 设置<p>大模型配置。<strong>仅 <code>Cascade</code> 模式生效</strong>；<code>S2S</code> 模式报错。</p>
 * @method VoiceConversationS2SConfig getS2SConfig() 获取<p>端到端语音大模型配置。仅 <strong><code>S2S</code> 模式</strong>生效；<code>Cascade</code> 报错。</p>
 * @method void setS2SConfig(VoiceConversationS2SConfig $S2SConfig) 设置<p>端到端语音大模型配置。仅 <strong><code>S2S</code> 模式</strong>生效；<code>Cascade</code> 报错。</p>
 * @method VoiceConversationDialogConfig getDialogConfig() 获取<p>对话控制配置。<strong>仅 <code>Cascade</code> 模式生效</strong>。</p>
 * @method void setDialogConfig(VoiceConversationDialogConfig $DialogConfig) 设置<p>对话控制配置。<strong>仅 <code>Cascade</code> 模式生效</strong>。</p>
 */
class ModifyVoiceConversationRequest extends AbstractModel
{
    /**
     * @var integer <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>对话任务的唯一Id，在启动对话成功后会返回。</p>
     */
    public $TaskId;

    /**
     * @var integer <p>需要保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
     */
    public $SequenceNumber;

    /**
     * @var VoiceConversationLLMConfig <p>大模型配置。<strong>仅 <code>Cascade</code> 模式生效</strong>；<code>S2S</code> 模式报错。</p>
     */
    public $LLMConfig;

    /**
     * @var VoiceConversationS2SConfig <p>端到端语音大模型配置。仅 <strong><code>S2S</code> 模式</strong>生效；<code>Cascade</code> 报错。</p>
     */
    public $S2SConfig;

    /**
     * @var VoiceConversationDialogConfig <p>对话控制配置。<strong>仅 <code>Cascade</code> 模式生效</strong>。</p>
     */
    public $DialogConfig;

    /**
     * @param integer $SdkAppId <p>TRTC的<a href="https://cloud.tencent.com/document/product/647/46351#sdkappid">SdkAppId</a>，和对话的房间所对应的SdkAppId相同。</p>
     * @param string $TaskId <p>对话任务的唯一Id，在启动对话成功后会返回。</p>
     * @param integer $SequenceNumber <p>需要保证同一个任务，每次更新请求中的SequenceNumber递增，防止请求乱序。</p>
     * @param VoiceConversationLLMConfig $LLMConfig <p>大模型配置。<strong>仅 <code>Cascade</code> 模式生效</strong>；<code>S2S</code> 模式报错。</p>
     * @param VoiceConversationS2SConfig $S2SConfig <p>端到端语音大模型配置。仅 <strong><code>S2S</code> 模式</strong>生效；<code>Cascade</code> 报错。</p>
     * @param VoiceConversationDialogConfig $DialogConfig <p>对话控制配置。<strong>仅 <code>Cascade</code> 模式生效</strong>。</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SequenceNumber",$param) and $param["SequenceNumber"] !== null) {
            $this->SequenceNumber = $param["SequenceNumber"];
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new VoiceConversationLLMConfig();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("S2SConfig",$param) and $param["S2SConfig"] !== null) {
            $this->S2SConfig = new VoiceConversationS2SConfig();
            $this->S2SConfig->deserialize($param["S2SConfig"]);
        }

        if (array_key_exists("DialogConfig",$param) and $param["DialogConfig"] !== null) {
            $this->DialogConfig = new VoiceConversationDialogConfig();
            $this->DialogConfig->deserialize($param["DialogConfig"]);
        }
    }
}
