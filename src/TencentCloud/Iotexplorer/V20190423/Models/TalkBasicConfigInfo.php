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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基础配置信息。
 *
 * @method string getSystemPrompt() 获取系统提示词
 * @method void setSystemPrompt(string $SystemPrompt) 设置系统提示词
 * @method string getGreetingMessage() 获取欢迎语，支持多个欢迎语随机切换，格式：字符串数组，JSON字符串。
 * @method void setGreetingMessage(string $GreetingMessage) 设置欢迎语，支持多个欢迎语随机切换，格式：字符串数组，JSON字符串。
 * @method integer getDefaultVoiceType() 获取音色，支持的音色列表：100510000-阅读男声智逍遥；101001-情感女声智瑜；101002-通用女声智聆；101003-客服女声智美；101004-通用男声智云；101005-通用女声智莉；101006-助手女声智言；101008-客服女声智琪；101009-知性女声智芸；101010-通用男声智华；101011-新闻女声智燕；101012-新闻女声智丹；101013-新闻男声智辉；101014 -新闻男声智宁；101015-男童声智萌；101016-女童声智甜；101017-情感女声智蓉；101018-情感男声智靖；101019-粤语女声智彤。
 * @method void setDefaultVoiceType(integer $DefaultVoiceType) 设置音色，支持的音色列表：100510000-阅读男声智逍遥；101001-情感女声智瑜；101002-通用女声智聆；101003-客服女声智美；101004-通用男声智云；101005-通用女声智莉；101006-助手女声智言；101008-客服女声智琪；101009-知性女声智芸；101010-通用男声智华；101011-新闻女声智燕；101012-新闻女声智丹；101013-新闻男声智辉；101014 -新闻男声智宁；101015-男童声智萌；101016-女童声智甜；101017-情感女声智蓉；101018-情感男声智靖；101019-粤语女声智彤。
 * @method string getFastVoiceType() 获取复刻音色ID，当不为空时，DefaultVoiceType为200000000
 * @method void setFastVoiceType(string $FastVoiceType) 设置复刻音色ID，当不为空时，DefaultVoiceType为200000000
 */
class TalkBasicConfigInfo extends AbstractModel
{
    /**
     * @var string 系统提示词
     */
    public $SystemPrompt;

    /**
     * @var string 欢迎语，支持多个欢迎语随机切换，格式：字符串数组，JSON字符串。
     */
    public $GreetingMessage;

    /**
     * @var integer 音色，支持的音色列表：100510000-阅读男声智逍遥；101001-情感女声智瑜；101002-通用女声智聆；101003-客服女声智美；101004-通用男声智云；101005-通用女声智莉；101006-助手女声智言；101008-客服女声智琪；101009-知性女声智芸；101010-通用男声智华；101011-新闻女声智燕；101012-新闻女声智丹；101013-新闻男声智辉；101014 -新闻男声智宁；101015-男童声智萌；101016-女童声智甜；101017-情感女声智蓉；101018-情感男声智靖；101019-粤语女声智彤。
     */
    public $DefaultVoiceType;

    /**
     * @var string 复刻音色ID，当不为空时，DefaultVoiceType为200000000
     */
    public $FastVoiceType;

    /**
     * @param string $SystemPrompt 系统提示词
     * @param string $GreetingMessage 欢迎语，支持多个欢迎语随机切换，格式：字符串数组，JSON字符串。
     * @param integer $DefaultVoiceType 音色，支持的音色列表：100510000-阅读男声智逍遥；101001-情感女声智瑜；101002-通用女声智聆；101003-客服女声智美；101004-通用男声智云；101005-通用女声智莉；101006-助手女声智言；101008-客服女声智琪；101009-知性女声智芸；101010-通用男声智华；101011-新闻女声智燕；101012-新闻女声智丹；101013-新闻男声智辉；101014 -新闻男声智宁；101015-男童声智萌；101016-女童声智甜；101017-情感女声智蓉；101018-情感男声智靖；101019-粤语女声智彤。
     * @param string $FastVoiceType 复刻音色ID，当不为空时，DefaultVoiceType为200000000
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
        if (array_key_exists("SystemPrompt",$param) and $param["SystemPrompt"] !== null) {
            $this->SystemPrompt = $param["SystemPrompt"];
        }

        if (array_key_exists("GreetingMessage",$param) and $param["GreetingMessage"] !== null) {
            $this->GreetingMessage = $param["GreetingMessage"];
        }

        if (array_key_exists("DefaultVoiceType",$param) and $param["DefaultVoiceType"] !== null) {
            $this->DefaultVoiceType = $param["DefaultVoiceType"];
        }

        if (array_key_exists("FastVoiceType",$param) and $param["FastVoiceType"] !== null) {
            $this->FastVoiceType = $param["FastVoiceType"];
        }
    }
}
