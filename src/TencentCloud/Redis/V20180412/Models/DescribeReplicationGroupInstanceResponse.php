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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplicationGroupInstance返回参数结构体
 *
 * @method integer getAppId() 获取AppID。
 * @method void setAppId(integer $AppId) 设置AppID。
 * @method integer getRegionId() 获取地域数字编号。
 * @method void setRegionId(integer $RegionId) 设置地域数字编号。
 * @method string getGroupId() 获取复制组字符串ID。
 * @method void setGroupId(string $GroupId) 设置复制组字符串ID。
 * @method string getGroupName() 获取复制组名称。
 * @method void setGroupName(string $GroupName) 设置复制组名称。
 * @method string getInstanceRole() 获取实例复制组角色。
- r:  备实例
- rw: 主实例
 * @method void setInstanceRole(string $InstanceRole) 设置实例复制组角色。
- r:  备实例
- rw: 主实例
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReplicationGroupInstanceResponse extends AbstractModel
{
    /**
     * @var integer AppID。
     */
    public $AppId;

    /**
     * @var integer 地域数字编号。
     */
    public $RegionId;

    /**
     * @var string 复制组字符串ID。
     */
    public $GroupId;

    /**
     * @var string 复制组名称。
     */
    public $GroupName;

    /**
     * @var string 实例复制组角色。
- r:  备实例
- rw: 主实例
     */
    public $InstanceRole;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppId AppID。
     * @param integer $RegionId 地域数字编号。
     * @param string $GroupId 复制组字符串ID。
     * @param string $GroupName 复制组名称。
     * @param string $InstanceRole 实例复制组角色。
- r:  备实例
- rw: 主实例
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
