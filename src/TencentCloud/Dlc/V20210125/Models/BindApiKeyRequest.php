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
 * BindApiKey请求参数结构体
 *
 * @method array getApiKeyIds() 获取<p>apiKey的Id</p>
 * @method void setApiKeyIds(array $ApiKeyIds) 设置<p>apiKey的Id</p>
 * @method string getServiceId() 获取<p>服务Id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务Id</p>
 */
class BindApiKeyRequest extends AbstractModel
{
    /**
     * @var array <p>apiKey的Id</p>
     */
    public $ApiKeyIds;

    /**
     * @var string <p>服务Id</p>
     */
    public $ServiceId;

    /**
     * @param array $ApiKeyIds <p>apiKey的Id</p>
     * @param string $ServiceId <p>服务Id</p>
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
        if (array_key_exists("ApiKeyIds",$param) and $param["ApiKeyIds"] !== null) {
            $this->ApiKeyIds = $param["ApiKeyIds"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
