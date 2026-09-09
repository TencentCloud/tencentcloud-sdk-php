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
 * 微信客服渠道配置
 *
 * @method string getAgentSecret() 获取<p>企业微信应用Secret</p>
 * @method void setAgentSecret(string $AgentSecret) 设置<p>企业微信应用Secret</p>
 * @method string getAvatar() 获取<p>头像URL</p>
 * @method void setAvatar(string $Avatar) 设置<p>头像URL</p>
 * @method CallbackConfig getCallback() 获取<p>回调配置</p>
 * @method void setCallback(CallbackConfig $Callback) 设置<p>回调配置</p>
 * @method string getCustomerServiceId() 获取<p>客服账号ID</p>
 * @method void setCustomerServiceId(string $CustomerServiceId) 设置<p>客服账号ID</p>
 * @method string getName() 获取<p>客服账号名称</p>
 * @method void setName(string $Name) 设置<p>客服账号名称</p>
 * @method string getShareCodeUrl() 获取<p>客服形象二维码URL</p>
 * @method void setShareCodeUrl(string $ShareCodeUrl) 设置<p>客服形象二维码URL</p>
 * @method string getWecomCorpId() 获取<p>企业微信企业ID</p>
 * @method void setWecomCorpId(string $WecomCorpId) 设置<p>企业微信企业ID</p>
 */
class WechatCustomerServiceChannelConfig extends AbstractModel
{
    /**
     * @var string <p>企业微信应用Secret</p>
     */
    public $AgentSecret;

    /**
     * @var string <p>头像URL</p>
     */
    public $Avatar;

    /**
     * @var CallbackConfig <p>回调配置</p>
     */
    public $Callback;

    /**
     * @var string <p>客服账号ID</p>
     */
    public $CustomerServiceId;

    /**
     * @var string <p>客服账号名称</p>
     */
    public $Name;

    /**
     * @var string <p>客服形象二维码URL</p>
     */
    public $ShareCodeUrl;

    /**
     * @var string <p>企业微信企业ID</p>
     */
    public $WecomCorpId;

    /**
     * @param string $AgentSecret <p>企业微信应用Secret</p>
     * @param string $Avatar <p>头像URL</p>
     * @param CallbackConfig $Callback <p>回调配置</p>
     * @param string $CustomerServiceId <p>客服账号ID</p>
     * @param string $Name <p>客服账号名称</p>
     * @param string $ShareCodeUrl <p>客服形象二维码URL</p>
     * @param string $WecomCorpId <p>企业微信企业ID</p>
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
        if (array_key_exists("AgentSecret",$param) and $param["AgentSecret"] !== null) {
            $this->AgentSecret = $param["AgentSecret"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackConfig();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("CustomerServiceId",$param) and $param["CustomerServiceId"] !== null) {
            $this->CustomerServiceId = $param["CustomerServiceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ShareCodeUrl",$param) and $param["ShareCodeUrl"] !== null) {
            $this->ShareCodeUrl = $param["ShareCodeUrl"];
        }

        if (array_key_exists("WecomCorpId",$param) and $param["WecomCorpId"] !== null) {
            $this->WecomCorpId = $param["WecomCorpId"];
        }
    }
}
