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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddApplication返回参数结构体
 *
 * @method string getMpApplicationId() 获取应用ID
 * @method void setMpApplicationId(string $MpApplicationId) 设置应用ID
 * @method string getMpApplicationKey() 获取经过加密算法加密后的base64格式密钥
 * @method void setMpApplicationKey(string $MpApplicationKey) 设置经过加密算法加密后的base64格式密钥
 * @method string getMpApplicationName() 获取应用名
 * @method void setMpApplicationName(string $MpApplicationName) 设置应用名
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AddApplicationResponse extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $MpApplicationId;

    /**
     * @var string 经过加密算法加密后的base64格式密钥
     */
    public $MpApplicationKey;

    /**
     * @var string 应用名
     */
    public $MpApplicationName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MpApplicationId 应用ID
     * @param string $MpApplicationKey 经过加密算法加密后的base64格式密钥
     * @param string $MpApplicationName 应用名
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
        if (array_key_exists("MpApplicationId",$param) and $param["MpApplicationId"] !== null) {
            $this->MpApplicationId = $param["MpApplicationId"];
        }

        if (array_key_exists("MpApplicationKey",$param) and $param["MpApplicationKey"] !== null) {
            $this->MpApplicationKey = $param["MpApplicationKey"];
        }

        if (array_key_exists("MpApplicationName",$param) and $param["MpApplicationName"] !== null) {
            $this->MpApplicationName = $param["MpApplicationName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
