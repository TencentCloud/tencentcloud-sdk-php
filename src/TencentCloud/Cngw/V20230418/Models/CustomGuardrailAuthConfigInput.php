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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义安全护栏审核服务鉴权配置
 *
 * @method string getAuthType() 获取<p>审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
 * @method void setAuthType(string $AuthType) 设置<p>审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
 * @method string getHeaderName() 获取<p>AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
 * @method void setHeaderName(string $HeaderName) 设置<p>AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
 * @method string getApiKey() 获取<p>AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
 * @method void setApiKey(string $ApiKey) 设置<p>AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
 */
class CustomGuardrailAuthConfigInput extends AbstractModel
{
    /**
     * @var string <p>审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
     */
    public $AuthType;

    /**
     * @var string <p>AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
     */
    public $HeaderName;

    /**
     * @var string <p>AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
     */
    public $ApiKey;

    /**
     * @param string $AuthType <p>审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
     * @param string $HeaderName <p>AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
     * @param string $ApiKey <p>AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
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
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }
    }
}
