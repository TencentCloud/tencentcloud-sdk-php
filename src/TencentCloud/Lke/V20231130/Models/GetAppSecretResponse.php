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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAppSecret返回参数结构体
 *
 * @method string getAppKey() 获取应用密钥
 * @method void setAppKey(string $AppKey) 设置应用密钥
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getIsRelease() 获取是否发布
 * @method void setIsRelease(boolean $IsRelease) 设置是否发布
 * @method boolean getHasPermission() 获取是否有查看权限
 * @method void setHasPermission(boolean $HasPermission) 设置是否有查看权限
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetAppSecretResponse extends AbstractModel
{
    /**
     * @var string 应用密钥
     */
    public $AppKey;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否发布
     */
    public $IsRelease;

    /**
     * @var boolean 是否有查看权限
     */
    public $HasPermission;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppKey 应用密钥
     * @param string $CreateTime 创建时间
     * @param boolean $IsRelease 是否发布
     * @param boolean $HasPermission 是否有查看权限
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
        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsRelease",$param) and $param["IsRelease"] !== null) {
            $this->IsRelease = $param["IsRelease"];
        }

        if (array_key_exists("HasPermission",$param) and $param["HasPermission"] !== null) {
            $this->HasPermission = $param["HasPermission"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
