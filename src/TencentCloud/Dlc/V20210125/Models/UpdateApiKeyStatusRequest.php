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
 * UpdateApiKeyStatus请求参数结构体
 *
 * @method string getApiKeyId() 获取<p>apiKey的Id</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>apiKey的Id</p>
 * @method string getStatus() 获取<p>apiKey的状态</p><p>枚举值：</p><ul><li>Revoked： 不可用</li></ul>
 * @method void setStatus(string $Status) 设置<p>apiKey的状态</p><p>枚举值：</p><ul><li>Revoked： 不可用</li></ul>
 */
class UpdateApiKeyStatusRequest extends AbstractModel
{
    /**
     * @var string <p>apiKey的Id</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>apiKey的状态</p><p>枚举值：</p><ul><li>Revoked： 不可用</li></ul>
     */
    public $Status;

    /**
     * @param string $ApiKeyId <p>apiKey的Id</p>
     * @param string $Status <p>apiKey的状态</p><p>枚举值：</p><ul><li>Revoked： 不可用</li></ul>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
