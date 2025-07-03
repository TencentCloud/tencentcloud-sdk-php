<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrganizationAuthUrl返回参数结构体
 *
 * @method string getAuthUrl() 获取生成的认证链接。

注： `链接有效期统一30天`
 * @method void setAuthUrl(string $AuthUrl) 设置生成的认证链接。

注： `链接有效期统一30天`
 * @method integer getExpiredTime() 获取链接过期时间，格式为Unix标准时间戳（秒）
 * @method void setExpiredTime(integer $ExpiredTime) 设置链接过期时间，格式为Unix标准时间戳（秒）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateOrganizationAuthUrlResponse extends AbstractModel
{
    /**
     * @var string 生成的认证链接。

注： `链接有效期统一30天`
     */
    public $AuthUrl;

    /**
     * @var integer 链接过期时间，格式为Unix标准时间戳（秒）
     */
    public $ExpiredTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AuthUrl 生成的认证链接。

注： `链接有效期统一30天`
     * @param integer $ExpiredTime 链接过期时间，格式为Unix标准时间戳（秒）
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
        if (array_key_exists("AuthUrl",$param) and $param["AuthUrl"] !== null) {
            $this->AuthUrl = $param["AuthUrl"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
