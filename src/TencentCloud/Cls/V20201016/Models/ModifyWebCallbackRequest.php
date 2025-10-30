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
 * ModifyWebCallback请求参数结构体
 *
 * @method string getWebCallbackId() 获取告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
 * @method void setWebCallbackId(string $WebCallbackId) 设置告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
 * @method string getName() 获取告警渠道回调配置名称。最大支持255个字节
 * @method void setName(string $Name) 设置告警渠道回调配置名称。最大支持255个字节
 * @method string getType() 获取渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
 * @method void setType(string $Type) 设置渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
 * @method string getWebhook() 获取回调地址。
 * @method void setWebhook(string $Webhook) 设置回调地址。
 * @method string getMethod() 获取请求方式。

支持POST、PUT。

注意：当Type为Http时，必填。
 * @method void setMethod(string $Method) 设置请求方式。

支持POST、PUT。

注意：当Type为Http时，必填。
 * @method string getKey() 获取秘钥信息。最大支持1024个字节
 * @method void setKey(string $Key) 设置秘钥信息。最大支持1024个字节
 */
class ModifyWebCallbackRequest extends AbstractModel
{
    /**
     * @var string 告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
     */
    public $WebCallbackId;

    /**
     * @var string 告警渠道回调配置名称。最大支持255个字节
     */
    public $Name;

    /**
     * @var string 渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
     */
    public $Type;

    /**
     * @var string 回调地址。
     */
    public $Webhook;

    /**
     * @var string 请求方式。

支持POST、PUT。

注意：当Type为Http时，必填。
     */
    public $Method;

    /**
     * @var string 秘钥信息。最大支持1024个字节
     */
    public $Key;

    /**
     * @param string $WebCallbackId 告警渠道回调配置ID。-通过[获取告警渠道回调配置列表](https://cloud.tencent.com/document/api/614/115229)获取告警渠道回调配置ID
     * @param string $Name 告警渠道回调配置名称。最大支持255个字节
     * @param string $Type 渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
     * @param string $Webhook 回调地址。
     * @param string $Method 请求方式。

支持POST、PUT。

注意：当Type为Http时，必填。
     * @param string $Key 秘钥信息。最大支持1024个字节
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
        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
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
