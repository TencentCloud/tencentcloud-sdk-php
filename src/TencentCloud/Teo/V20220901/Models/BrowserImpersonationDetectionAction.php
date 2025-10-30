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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot 浏览器校验规则（原主动特征识别规则）的 Action。
 *
 * @method BotSessionValidation getBotSessionValidation() 获取Cookie 校验和会话跟踪配置。
 * @method void setBotSessionValidation(BotSessionValidation $BotSessionValidation) 设置Cookie 校验和会话跟踪配置。
 * @method ClientBehaviorDetection getClientBehaviorDetection() 获取客户端行为校验配置。
 * @method void setClientBehaviorDetection(ClientBehaviorDetection $ClientBehaviorDetection) 设置客户端行为校验配置。
 */
class BrowserImpersonationDetectionAction extends AbstractModel
{
    /**
     * @var BotSessionValidation Cookie 校验和会话跟踪配置。
     */
    public $BotSessionValidation;

    /**
     * @var ClientBehaviorDetection 客户端行为校验配置。
     */
    public $ClientBehaviorDetection;

    /**
     * @param BotSessionValidation $BotSessionValidation Cookie 校验和会话跟踪配置。
     * @param ClientBehaviorDetection $ClientBehaviorDetection 客户端行为校验配置。
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
        if (array_key_exists("BotSessionValidation",$param) and $param["BotSessionValidation"] !== null) {
            $this->BotSessionValidation = new BotSessionValidation();
            $this->BotSessionValidation->deserialize($param["BotSessionValidation"]);
        }

        if (array_key_exists("ClientBehaviorDetection",$param) and $param["ClientBehaviorDetection"] !== null) {
            $this->ClientBehaviorDetection = new ClientBehaviorDetection();
            $this->ClientBehaviorDetection->deserialize($param["ClientBehaviorDetection"]);
        }
    }
}
