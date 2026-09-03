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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateServiceAuthConfig请求参数结构体
 *
 * @method string getServiceId() 获取<p>服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务ID</p>
 * @method boolean getApiKeyAuthEnabled() 获取<p>是否启用 API-Key 鉴权</p>
 * @method void setApiKeyAuthEnabled(boolean $ApiKeyAuthEnabled) 设置<p>是否启用 API-Key 鉴权</p>
 */
class UpdateServiceAuthConfigRequest extends AbstractModel
{
    /**
     * @var string <p>服务ID</p>
     */
    public $ServiceId;

    /**
     * @var boolean <p>是否启用 API-Key 鉴权</p>
     */
    public $ApiKeyAuthEnabled;

    /**
     * @param string $ServiceId <p>服务ID</p>
     * @param boolean $ApiKeyAuthEnabled <p>是否启用 API-Key 鉴权</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ApiKeyAuthEnabled",$param) and $param["ApiKeyAuthEnabled"] !== null) {
            $this->ApiKeyAuthEnabled = $param["ApiKeyAuthEnabled"];
        }
    }
}
