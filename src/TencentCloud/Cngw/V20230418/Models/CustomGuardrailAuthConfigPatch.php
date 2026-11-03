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
 * 局部更新配置。只更新显式提供字段；未传字段保留。条件必填按合并后的完整策略校验，不会要求每次重传全部配置。
 *
 * @method string getAuthType() 获取<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
 * @method void setAuthType(string $AuthType) 设置<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
 * @method string getHeaderName() 获取<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
 * @method void setHeaderName(string $HeaderName) 设置<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
 * @method string getApiKey() 获取<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
 * @method void setApiKey(string $ApiKey) 设置<p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
 * @method boolean getClearApiKey() 获取<p>true 表示清除已保存密钥，不能与 ApiKey 同时传入。仅传 ClearApiKey=true 时同时切换为 none 并清空鉴权 Header；也可通过 AuthType=none 清除既有密钥。</p><p>修改时省略本字段保留原值。</p>
 * @method void setClearApiKey(boolean $ClearApiKey) 设置<p>true 表示清除已保存密钥，不能与 ApiKey 同时传入。仅传 ClearApiKey=true 时同时切换为 none 并清空鉴权 Header；也可通过 AuthType=none 清除既有密钥。</p><p>修改时省略本字段保留原值。</p>
 */
class CustomGuardrailAuthConfigPatch extends AbstractModel
{
    /**
     * @var string <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
     */
    public $AuthType;

    /**
     * @var string <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
     */
    public $HeaderName;

    /**
     * @var string <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
     */
    public $ApiKey;

    /**
     * @var boolean <p>true 表示清除已保存密钥，不能与 ApiKey 同时传入。仅传 ClearApiKey=true 时同时切换为 none 并清空鉴权 Header；也可通过 AuthType=none 清除既有密钥。</p><p>修改时省略本字段保留原值。</p>
     */
    public $ClearApiKey;

    /**
     * @param string $AuthType <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。审核引擎鉴权方式，必须显式选择 none（无鉴权）或 api_key（Header 密钥）；无鉴权也必须填写 none，不再自动补齐。api_key 时 HeaderName 和 ApiKey 必填；与客户端访问网关的鉴权独立。</p>
     * @param string $HeaderName <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填的有效 HTTP Header 名，例如 X-Audit-Key 或 Authorization；禁止协议保留头。AuthType=none 时不得填写。</p>
     * @param string $ApiKey <p>局部更新：省略本字段保留原值；显式填写须满足枚举及条件必填约束。AuthType=api_key 时必填，作为 Header 完整值原样发送；如需 Bearer，调用方自行填写前缀。修改时省略可沿用已保存密钥；不能用 HasApiKey 代替真实密钥。</p>
     * @param boolean $ClearApiKey <p>true 表示清除已保存密钥，不能与 ApiKey 同时传入。仅传 ClearApiKey=true 时同时切换为 none 并清空鉴权 Header；也可通过 AuthType=none 清除既有密钥。</p><p>修改时省略本字段保留原值。</p>
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

        if (array_key_exists("ClearApiKey",$param) and $param["ClearApiKey"] !== null) {
            $this->ClearApiKey = $param["ClearApiKey"];
        }
    }
}
