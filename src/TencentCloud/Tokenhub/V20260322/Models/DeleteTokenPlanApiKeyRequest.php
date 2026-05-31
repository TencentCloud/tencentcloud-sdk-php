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
 * DeleteTokenPlanApiKey请求参数结构体
 *
 * @method string getApiKeyId() 获取API Key ID。可通过DescribeTokenPlanApiKeyList接口获取。
 * @method void setApiKeyId(string $ApiKeyId) 设置API Key ID。可通过DescribeTokenPlanApiKeyList接口获取。
 */
class DeleteTokenPlanApiKeyRequest extends AbstractModel
{
    /**
     * @var string API Key ID。可通过DescribeTokenPlanApiKeyList接口获取。
     */
    public $ApiKeyId;

    /**
     * @param string $ApiKeyId API Key ID。可通过DescribeTokenPlanApiKeyList接口获取。
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
        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }
    }
}
