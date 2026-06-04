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
 * @method AICallConfig getAiCall() 获取AI通话配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiCall(AICallConfig $AiCall) 设置AI通话配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method BackgroundImage getBackgroundImage() 获取背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackgroundImage(BackgroundImage $BackgroundImage) 设置背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableFallbackReply() 获取兜底回复开关
 * @method void setEnableFallbackReply(boolean $EnableFallbackReply) 设置兜底回复开关
 * @method boolean getEnableRecommended() 获取是否使用推荐问
 * @method void setEnableRecommended(boolean $EnableRecommended) 设置是否使用推荐问
 * @method boolean getEnableWebSearch() 获取是否使用联网搜索
 * @method void setEnableWebSearch(boolean $EnableWebSearch) 设置是否使用联网搜索
 * @method string getFallbackReply() 获取兜底回复语
 * @method void setFallbackReply(string $FallbackReply) 设置兜底回复语
 * @method InputBoxConfig getInputBoxConfig() 获取输入框配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputBoxConfig(InputBoxConfig $InputBoxConfig) 设置输入框配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMethod() 获取输出方式。枚举值: 1:流式, 2:非流式
 * @method void setMethod(integer $Method) 设置输出方式。枚举值: 1:流式, 2:非流式
 * @method integer getRecommendPromptMode() 获取推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt
 * @method void setRecommendPromptMode(integer $RecommendPromptMode) 设置推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt
 */
class ConversationExperience extends AbstractModel
{
    /**
     * @var AICallConfig AI通话配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiCall;

    /**
     * @var BackgroundImage 背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackgroundImage;

    /**
     * @var boolean 兜底回复开关
     */
    public $EnableFallbackReply;

    /**
     * @var boolean 是否使用推荐问
     */
    public $EnableRecommended;

    /**
     * @var boolean 是否使用联网搜索
     */
    public $EnableWebSearch;

    /**
     * @var string 兜底回复语
     */
    public $FallbackReply;

    /**
     * @var InputBoxConfig 输入框配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputBoxConfig;

    /**
     * @var integer 输出方式。枚举值: 1:流式, 2:非流式
     */
    public $Method;

    /**
     * @var integer 推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt
     */
    public $RecommendPromptMode;

    /**
     * @param AICallConfig $AiCall AI通话配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param BackgroundImage $BackgroundImage 背景图片配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableFallbackReply 兜底回复开关
     * @param boolean $EnableRecommended 是否使用推荐问
     * @param boolean $EnableWebSearch 是否使用联网搜索
     * @param string $FallbackReply 兜底回复语
     * @param InputBoxConfig $InputBoxConfig 输入框配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Method 输出方式。枚举值: 1:流式, 2:非流式
     * @param integer $RecommendPromptMode 推荐问生成prompt模式。枚举值: 1:仅结合知识库输出推荐问的prompt
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
    }
}
