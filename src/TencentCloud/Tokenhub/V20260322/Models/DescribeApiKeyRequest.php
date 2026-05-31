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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApiKey请求参数结构体
 *
 * @method string getPlatform() 获取平台类型。当前支持填值：maas
 * @method void setPlatform(string $Platform) 设置平台类型。当前支持填值：maas
 * @method string getApiKeyId() 获取API 密钥 ID，与 ApiKey 至少需传入其一，优先使用 ApiKeyId。
 * @method void setApiKeyId(string $ApiKeyId) 设置API 密钥 ID，与 ApiKey 至少需传入其一，优先使用 ApiKeyId。
 * @method string getApiKey() 获取API 密钥明文，与 ApiKeyId 至少需传入其一。
 * @method void setApiKey(string $ApiKey) 设置API 密钥明文，与 ApiKeyId 至少需传入其一。
 */
class DescribeApiKeyRequest extends AbstractModel
{
    /**
     * @var string 平台类型。当前支持填值：maas
     */
    public $Platform;

    /**
     * @var string API 密钥 ID，与 ApiKey 至少需传入其一，优先使用 ApiKeyId。
     */
    public $ApiKeyId;

    /**
     * @var string API 密钥明文，与 ApiKeyId 至少需传入其一。
     */
    public $ApiKey;

    /**
     * @param string $Platform 平台类型。当前支持填值：maas
     * @param string $ApiKeyId API 密钥 ID，与 ApiKey 至少需传入其一，优先使用 ApiKeyId。
     * @param string $ApiKey API 密钥明文，与 ApiKeyId 至少需传入其一。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }
    }
}
