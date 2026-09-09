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
 * 企微应用渠道配置
 *
 * @method CallbackConfig getCallback() 获取<p>回调配置</p>
 * @method void setCallback(CallbackConfig $Callback) 设置<p>回调配置</p>
 * @method string getThirdChannelCorpId() 获取<p>第三方企业ID</p>
 * @method void setThirdChannelCorpId(string $ThirdChannelCorpId) 设置<p>第三方企业ID</p>
 * @method string getThirdChannelId() 获取<p>第三方渠道ID</p>
 * @method void setThirdChannelId(string $ThirdChannelId) 设置<p>第三方渠道ID</p>
 * @method string getWecomAgentId() 获取<p>企微应用ID</p>
 * @method void setWecomAgentId(string $WecomAgentId) 设置<p>企微应用ID</p>
 * @method string getWecomAgentSecret() 获取<p>企微应用Secret</p>
 * @method void setWecomAgentSecret(string $WecomAgentSecret) 设置<p>企微应用Secret</p>
 * @method string getWecomCorpId() 获取<p>企业ID</p>
 * @method void setWecomCorpId(string $WecomCorpId) 设置<p>企业ID</p>
 */
class WecomAppChannelConfig extends AbstractModel
{
    /**
     * @var CallbackConfig <p>回调配置</p>
     */
    public $Callback;

    /**
     * @var string <p>第三方企业ID</p>
     */
    public $ThirdChannelCorpId;

    /**
     * @var string <p>第三方渠道ID</p>
     */
    public $ThirdChannelId;

    /**
     * @var string <p>企微应用ID</p>
     */
    public $WecomAgentId;

    /**
     * @var string <p>企微应用Secret</p>
     */
    public $WecomAgentSecret;

    /**
     * @var string <p>企业ID</p>
     */
    public $WecomCorpId;

    /**
     * @param CallbackConfig $Callback <p>回调配置</p>
     * @param string $ThirdChannelCorpId <p>第三方企业ID</p>
     * @param string $ThirdChannelId <p>第三方渠道ID</p>
     * @param string $WecomAgentId <p>企微应用ID</p>
     * @param string $WecomAgentSecret <p>企微应用Secret</p>
     * @param string $WecomCorpId <p>企业ID</p>
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
        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackConfig();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("ThirdChannelCorpId",$param) and $param["ThirdChannelCorpId"] !== null) {
            $this->ThirdChannelCorpId = $param["ThirdChannelCorpId"];
        }

        if (array_key_exists("ThirdChannelId",$param) and $param["ThirdChannelId"] !== null) {
            $this->ThirdChannelId = $param["ThirdChannelId"];
        }

        if (array_key_exists("WecomAgentId",$param) and $param["WecomAgentId"] !== null) {
            $this->WecomAgentId = $param["WecomAgentId"];
        }

        if (array_key_exists("WecomAgentSecret",$param) and $param["WecomAgentSecret"] !== null) {
            $this->WecomAgentSecret = $param["WecomAgentSecret"];
        }

        if (array_key_exists("WecomCorpId",$param) and $param["WecomCorpId"] !== null) {
            $this->WecomCorpId = $param["WecomCorpId"];
        }
    }
}
