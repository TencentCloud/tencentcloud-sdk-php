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
 * 应用高级配置
 *
 * @method boolean getEnableContextRewrite() 获取<p>是否开启上下文改写</p>
 * @method void setEnableContextRewrite(boolean $EnableContextRewrite) 设置<p>是否开启上下文改写</p>
 * @method boolean getEnableImageTextRetrieval() 获取<p>是否开启图文检索</p>
 * @method void setEnableImageTextRetrieval(boolean $EnableImageTextRetrieval) 设置<p>是否开启图文检索</p>
 * @method integer getReplyFlexibility() 获取<p>回复灵活度</p>
 * @method void setReplyFlexibility(integer $ReplyFlexibility) 设置<p>回复灵活度</p>
 * @method DialogCustomConfig getDialogCustomConfig() 获取<p>对话端自定义配置(所有模式共用,允许对话中动态修改配置)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDialogCustomConfig(DialogCustomConfig $DialogCustomConfig) 设置<p>对话端自定义配置(所有模式共用,允许对话中动态修改配置)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIntentAchievement() 获取<p>意图达成优先级</p>
 * @method void setIntentAchievement(array $IntentAchievement) 设置<p>意图达成优先级</p>
 */
class AppAdvancedConf extends AbstractModel
{
    /**
     * @var boolean <p>是否开启上下文改写</p>
     */
    public $EnableContextRewrite;

    /**
     * @var boolean <p>是否开启图文检索</p>
     */
    public $EnableImageTextRetrieval;

    /**
     * @var integer <p>回复灵活度</p>
     */
    public $ReplyFlexibility;

    /**
     * @var DialogCustomConfig <p>对话端自定义配置(所有模式共用,允许对话中动态修改配置)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DialogCustomConfig;

    /**
     * @var array <p>意图达成优先级</p>
     */
    public $IntentAchievement;

    /**
     * @param boolean $EnableContextRewrite <p>是否开启上下文改写</p>
     * @param boolean $EnableImageTextRetrieval <p>是否开启图文检索</p>
     * @param integer $ReplyFlexibility <p>回复灵活度</p>
     * @param DialogCustomConfig $DialogCustomConfig <p>对话端自定义配置(所有模式共用,允许对话中动态修改配置)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IntentAchievement <p>意图达成优先级</p>
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
        if (array_key_exists("EnableContextRewrite",$param) and $param["EnableContextRewrite"] !== null) {
            $this->EnableContextRewrite = $param["EnableContextRewrite"];
        }

        if (array_key_exists("EnableImageTextRetrieval",$param) and $param["EnableImageTextRetrieval"] !== null) {
            $this->EnableImageTextRetrieval = $param["EnableImageTextRetrieval"];
        }

        if (array_key_exists("ReplyFlexibility",$param) and $param["ReplyFlexibility"] !== null) {
            $this->ReplyFlexibility = $param["ReplyFlexibility"];
        }

        if (array_key_exists("DialogCustomConfig",$param) and $param["DialogCustomConfig"] !== null) {
            $this->DialogCustomConfig = new DialogCustomConfig();
            $this->DialogCustomConfig->deserialize($param["DialogCustomConfig"]);
        }

        if (array_key_exists("IntentAchievement",$param) and $param["IntentAchievement"] !== null) {
            $this->IntentAchievement = [];
            foreach ($param["IntentAchievement"] as $key => $value){
                $obj = new IntentAchievementInfo();
                $obj->deserialize($value);
                array_push($this->IntentAchievement, $obj);
            }
        }
    }
}
