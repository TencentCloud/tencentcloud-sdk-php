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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWebCallback请求参数结构体
 *
 * @method string getName() 获取通知内容名称。最大支持255个字节
 * @method void setName(string $Name) 设置通知内容名称。最大支持255个字节
 * @method string getType() 获取渠道类型。

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调。
 * @method void setType(string $Type) 设置渠道类型。

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调。
 * @method string getWebhook() 获取Webhook地址。
 * @method void setWebhook(string $Webhook) 设置Webhook地址。
 * @method string getMethod() 获取请求方式。 支持POST、PUT。

当Type为Http时，必填。
 * @method void setMethod(string $Method) 设置请求方式。 支持POST、PUT。

当Type为Http时，必填。
 * @method string getKey() 获取秘钥。最大支持1024个字节
 * @method void setKey(string $Key) 设置秘钥。最大支持1024个字节
 */
class CreateWebCallbackRequest extends AbstractModel
{
    /**
     * @var string 通知内容名称。最大支持255个字节
     */
    public $Name;

    /**
     * @var string 渠道类型。

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调。
     */
    public $Type;

    /**
     * @var string Webhook地址。
     */
    public $Webhook;

    /**
     * @var string 请求方式。 支持POST、PUT。

当Type为Http时，必填。
     */
    public $Method;

    /**
     * @var string 秘钥。最大支持1024个字节
     */
    public $Key;

    /**
     * @param string $Name 通知内容名称。最大支持255个字节
     * @param string $Type 渠道类型。

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调。
     * @param string $Webhook Webhook地址。
     * @param string $Method 请求方式。 支持POST、PUT。

当Type为Http时，必填。
     * @param string $Key 秘钥。最大支持1024个字节
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Webhook",$param) and $param["Webhook"] !== null) {
            $this->Webhook = $param["Webhook"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
