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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteApiKey请求参数结构体
 *
 * @method string getEnvId() 获取环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
 * @method void setEnvId(string $EnvId) 设置环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
 * @method string getKeyId() 获取密钥的唯一标识符，用于精确定位指定的 API 密钥。可通过查询密钥列表接口获取
 * @method void setKeyId(string $KeyId) 设置密钥的唯一标识符，用于精确定位指定的 API 密钥。可通过查询密钥列表接口获取
 */
class DeleteApiKeyRequest extends AbstractModel
{
    /**
     * @var string 环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
     */
    public $EnvId;

    /**
     * @var string 密钥的唯一标识符，用于精确定位指定的 API 密钥。可通过查询密钥列表接口获取
     */
    public $KeyId;

    /**
     * @param string $EnvId 环境 ID，用于标识该密钥归属的云开发环境，不同环境之间的数据相互隔离
     * @param string $KeyId 密钥的唯一标识符，用于精确定位指定的 API 密钥。可通过查询密钥列表接口获取
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }
    }
}
