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
 * @method boolean getEnableContextRewrite() 获取是否开启上下文改写
 * @method void setEnableContextRewrite(boolean $EnableContextRewrite) 设置是否开启上下文改写
 * @method boolean getEnableImageTextRetrieval() 获取是否开启图文检索
 * @method void setEnableImageTextRetrieval(boolean $EnableImageTextRetrieval) 设置是否开启图文检索
 * @method integer getReplyFlexibility() 获取回复灵活度
 * @method void setReplyFlexibility(integer $ReplyFlexibility) 设置回复灵活度
 * @method array getIntentAchievement() 获取意图达成优先级
 * @method void setIntentAchievement(array $IntentAchievement) 设置意图达成优先级
 */
class AppAdvancedConf extends AbstractModel
{
    /**
     * @var boolean 是否开启上下文改写
     */
    public $EnableContextRewrite;

    /**
     * @var boolean 是否开启图文检索
     */
    public $EnableImageTextRetrieval;

    /**
     * @var integer 回复灵活度
     */
    public $ReplyFlexibility;

    /**
     * @var array 意图达成优先级
     */
    public $IntentAchievement;

    /**
     * @param boolean $EnableContextRewrite 是否开启上下文改写
     * @param boolean $EnableImageTextRetrieval 是否开启图文检索
     * @param integer $ReplyFlexibility 回复灵活度
     * @param array $IntentAchievement 意图达成优先级
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
