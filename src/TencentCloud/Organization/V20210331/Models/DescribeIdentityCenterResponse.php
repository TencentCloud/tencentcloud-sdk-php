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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIdentityCenter返回参数结构体
 *
 * @method string getZoneId() 获取空间ID。z-前缀开头，后面是12位随机数字/小写字母
 * @method void setZoneId(string $ZoneId) 设置空间ID。z-前缀开头，后面是12位随机数字/小写字母
 * @method string getZoneName() 获取空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
 * @method void setZoneName(string $ZoneName) 设置空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
 * @method string getServiceStatus() 获取服务开启状态，Disabled代表未开通，Enabled代表已开通
 * @method void setServiceStatus(string $ServiceStatus) 设置服务开启状态，Disabled代表未开通，Enabled代表已开通
 * @method string getScimSyncStatus() 获取SCIM 同步状态。Enabled：启用。 Disabled：禁用。
 * @method void setScimSyncStatus(string $ScimSyncStatus) 设置SCIM 同步状态。Enabled：启用。 Disabled：禁用。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIdentityCenterResponse extends AbstractModel
{
    /**
     * @var string 空间ID。z-前缀开头，后面是12位随机数字/小写字母
     */
    public $ZoneId;

    /**
     * @var string 空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
     */
    public $ZoneName;

    /**
     * @var string 服务开启状态，Disabled代表未开通，Enabled代表已开通
     */
    public $ServiceStatus;

    /**
     * @var string SCIM 同步状态。Enabled：启用。 Disabled：禁用。
     */
    public $ScimSyncStatus;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ZoneId 空间ID。z-前缀开头，后面是12位随机数字/小写字母
     * @param string $ZoneName 空间名，必须全局唯一。包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。长度：2~64 个字符。
     * @param string $ServiceStatus 服务开启状态，Disabled代表未开通，Enabled代表已开通
     * @param string $ScimSyncStatus SCIM 同步状态。Enabled：启用。 Disabled：禁用。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("ScimSyncStatus",$param) and $param["ScimSyncStatus"] !== null) {
            $this->ScimSyncStatus = $param["ScimSyncStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
