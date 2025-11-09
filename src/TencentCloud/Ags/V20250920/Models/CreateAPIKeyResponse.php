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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAPIKey返回参数结构体
 *
 * @method string getName() 获取用户传入的API密钥名称，方便用户记忆
 * @method void setName(string $Name) 设置用户传入的API密钥名称，方便用户记忆
 * @method string getAPIKey() 获取生成的API密钥，仅返回此一次，后续无法获取
 * @method void setAPIKey(string $APIKey) 设置生成的API密钥，仅返回此一次，后续无法获取
 * @method string getKeyId() 获取API密钥ID
 * @method void setKeyId(string $KeyId) 设置API密钥ID
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAPIKeyResponse extends AbstractModel
{
    /**
     * @var string 用户传入的API密钥名称，方便用户记忆
     */
    public $Name;

    /**
     * @var string 生成的API密钥，仅返回此一次，后续无法获取
     */
    public $APIKey;

    /**
     * @var string API密钥ID
     */
    public $KeyId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 用户传入的API密钥名称，方便用户记忆
     * @param string $APIKey 生成的API密钥，仅返回此一次，后续无法获取
     * @param string $KeyId API密钥ID
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("APIKey",$param) and $param["APIKey"] !== null) {
            $this->APIKey = $param["APIKey"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
