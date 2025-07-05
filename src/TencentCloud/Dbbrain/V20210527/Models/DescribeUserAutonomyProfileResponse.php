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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserAutonomyProfile返回参数结构体
 *
 * @method string getProfileType() 获取配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）。
 * @method void setProfileType(string $ProfileType) 设置配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 * @method AutonomyUserProfileInfo getProfileInfo() 获取自治用户配置。
 * @method void setProfileInfo(AutonomyUserProfileInfo $ProfileInfo) 设置自治用户配置。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserAutonomyProfileResponse extends AbstractModel
{
    /**
     * @var string 配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）。
     */
    public $ProfileType;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @var AutonomyUserProfileInfo 自治用户配置。
     */
    public $ProfileInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ProfileType 配置类型，为需要配置的功能枚举值，目前包含一下枚举值：AutonomyGlobal（自治功能全局配置）、RedisAutoScaleUp（Redis自治扩容配置）。
     * @param string $UpdateTime 更新时间。
     * @param AutonomyUserProfileInfo $ProfileInfo 自治用户配置。
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
        if (array_key_exists("ProfileType",$param) and $param["ProfileType"] !== null) {
            $this->ProfileType = $param["ProfileType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ProfileInfo",$param) and $param["ProfileInfo"] !== null) {
            $this->ProfileInfo = new AutonomyUserProfileInfo();
            $this->ProfileInfo->deserialize($param["ProfileInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
