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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对话体验配置
 *
 * @method AICallConfig getAiCall() 获取<p>AI通话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiCall(AICallConfig $AiCall) 设置<p>AI通话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackgroundImage getBackgroundImage() 获取<p>背景图片配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackgroundImage(BackgroundImage $BackgroundImage) 设置<p>背景图片配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableFallbackReply() 获取<p>兜底回复开关</p>
 * @method void setEnableFallbackReply(boolean $EnableFallbackReply) 设置<p>兜底回复开关</p>
 * @method boolean getEnableRecommended() 获取<p>是否使用推荐问</p>
 * @method void setEnableRecommended(boolean $EnableRecommended) 设置<p>是否使用推荐问</p>
 * @method boolean getEnableWebSearch() 获取<p>是否使用联网搜索</p>
 * @method void setEnableWebSearch(boolean $EnableWebSearch) 设置<p>是否使用联网搜索</p>
 * @method string getFallbackReply() 获取<p>兜底回复语</p>
 * @method void setFallbackReply(string $FallbackReply) 设置<p>兜底回复语</p>
 * @method InputBoxConfig getInputBoxConfig() 获取<p>输入框配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputBoxConfig(InputBoxConfig $InputBoxConfig) 设置<p>输入框配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMethod() 获取<p>输出方式。枚举值: 1:流式, 2:非流式</p>
 * @method void setMethod(integer $Method) 设置<p>输出方式。枚举值: 1:流式, 2:非流式</p>
 * @method integer getRecommendPromptMode() 获取<p>推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt</p>
 * @method void setRecommendPromptMode(integer $RecommendPromptMode) 设置<p>推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt</p>
 * @method boolean getEnableNewMessageInterrupt() 获取<p>新消息中断正在进行的消息</p>
 * @method void setEnableNewMessageInterrupt(boolean $EnableNewMessageInterrupt) 设置<p>新消息中断正在进行的消息</p>
 */
class ConversationExperience extends AbstractModel
{
    /**
     * @var AICallConfig <p>AI通话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiCall;

    /**
     * @var BackgroundImage <p>背景图片配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackgroundImage;

    /**
     * @var boolean <p>兜底回复开关</p>
     */
    public $EnableFallbackReply;

    /**
     * @var boolean <p>是否使用推荐问</p>
     */
    public $EnableRecommended;

    /**
     * @var boolean <p>是否使用联网搜索</p>
     */
    public $EnableWebSearch;

    /**
     * @var string <p>兜底回复语</p>
     */
    public $FallbackReply;

    /**
     * @var InputBoxConfig <p>输入框配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputBoxConfig;

    /**
     * @var integer <p>输出方式。枚举值: 1:流式, 2:非流式</p>
     */
    public $Method;

    /**
     * @var integer <p>推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt</p>
     */
    public $RecommendPromptMode;

    /**
     * @var boolean <p>新消息中断正在进行的消息</p>
     */
    public $EnableNewMessageInterrupt;

    /**
     * @param AICallConfig $AiCall <p>AI通话配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackgroundImage $BackgroundImage <p>背景图片配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableFallbackReply <p>兜底回复开关</p>
     * @param boolean $EnableRecommended <p>是否使用推荐问</p>
     * @param boolean $EnableWebSearch <p>是否使用联网搜索</p>
     * @param string $FallbackReply <p>兜底回复语</p>
     * @param InputBoxConfig $InputBoxConfig <p>输入框配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Method <p>输出方式。枚举值: 1:流式, 2:非流式</p>
     * @param integer $RecommendPromptMode <p>推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt</p>
     * @param boolean $EnableNewMessageInterrupt <p>新消息中断正在进行的消息</p>
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
        if (array_key_exists("AiCall",$param) and $param["AiCall"] !== null) {
            $this->AiCall = new AICallConfig();
            $this->AiCall->deserialize($param["AiCall"]);
        }

        if (array_key_exists("BackgroundImage",$param) and $param["BackgroundImage"] !== null) {
            $this->BackgroundImage = new BackgroundImage();
            $this->BackgroundImage->deserialize($param["BackgroundImage"]);
        }

        if (array_key_exists("EnableFallbackReply",$param) and $param["EnableFallbackReply"] !== null) {
            $this->EnableFallbackReply = $param["EnableFallbackReply"];
        }

        if (array_key_exists("EnableRecommended",$param) and $param["EnableRecommended"] !== null) {
            $this->EnableRecommended = $param["EnableRecommended"];
        }

        if (array_key_exists("EnableWebSearch",$param) and $param["EnableWebSearch"] !== null) {
            $this->EnableWebSearch = $param["EnableWebSearch"];
        }

        if (array_key_exists("FallbackReply",$param) and $param["FallbackReply"] !== null) {
            $this->FallbackReply = $param["FallbackReply"];
        }

        if (array_key_exists("InputBoxConfig",$param) and $param["InputBoxConfig"] !== null) {
            $this->InputBoxConfig = new InputBoxConfig();
            $this->InputBoxConfig->deserialize($param["InputBoxConfig"]);
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("RecommendPromptMode",$param) and $param["RecommendPromptMode"] !== null) {
            $this->RecommendPromptMode = $param["RecommendPromptMode"];
        }

        if (array_key_exists("EnableNewMessageInterrupt",$param) and $param["EnableNewMessageInterrupt"] !== null) {
            $this->EnableNewMessageInterrupt = $param["EnableNewMessageInterrupt"];
        }
    }
}
