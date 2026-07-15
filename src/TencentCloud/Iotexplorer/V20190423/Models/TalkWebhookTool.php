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
 * Webhook工具配置列表
 *
 * @method string getName() 获取Webhook工具名称
 * @method void setName(string $Name) 设置Webhook工具名称
 * @method string getDescription() 获取Webhook工具描述
 * @method void setDescription(string $Description) 设置Webhook工具描述
 * @method string getParameters() 获取工具参数JSON Schema，JSON对象字符串，必须为type=object
 * @method void setParameters(string $Parameters) 设置工具参数JSON Schema，JSON对象字符串，必须为type=object
 * @method TalkWebhookEndpoint getEndpoint() 获取Webhook HTTP端点配置
 * @method void setEndpoint(TalkWebhookEndpoint $Endpoint) 设置Webhook HTTP端点配置
 * @method array getRequired() 获取必填参数名列表，必须存在于Parameters.properties中
 * @method void setRequired(array $Required) 设置必填参数名列表，必须存在于Parameters.properties中
 * @method TalkWebhookAuth getAuth() 获取Webhook鉴权配置
 * @method void setAuth(TalkWebhookAuth $Auth) 设置Webhook鉴权配置
 */
class TalkWebhookTool extends AbstractModel
{
    /**
     * @var string Webhook工具名称
     */
    public $Name;

    /**
     * @var string Webhook工具描述
     */
    public $Description;

    /**
     * @var string 工具参数JSON Schema，JSON对象字符串，必须为type=object
     */
    public $Parameters;

    /**
     * @var TalkWebhookEndpoint Webhook HTTP端点配置
     */
    public $Endpoint;

    /**
     * @var array 必填参数名列表，必须存在于Parameters.properties中
     */
    public $Required;

    /**
     * @var TalkWebhookAuth Webhook鉴权配置
     */
    public $Auth;

    /**
     * @param string $Name Webhook工具名称
     * @param string $Description Webhook工具描述
     * @param string $Parameters 工具参数JSON Schema，JSON对象字符串，必须为type=object
     * @param TalkWebhookEndpoint $Endpoint Webhook HTTP端点配置
     * @param array $Required 必填参数名列表，必须存在于Parameters.properties中
     * @param TalkWebhookAuth $Auth Webhook鉴权配置
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = new TalkWebhookEndpoint();
            $this->Endpoint->deserialize($param["Endpoint"]);
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("Auth",$param) and $param["Auth"] !== null) {
            $this->Auth = new TalkWebhookAuth();
            $this->Auth->deserialize($param["Auth"]);
        }
    }
}
