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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDeviceOrganization请求参数结构体
 *
 * @method array getDeviceIds() 获取设备 ID 数组（从获取设备列表接口ListDevices中获取）
 * @method void setDeviceIds(array $DeviceIds) 设置设备 ID 数组（从获取设备列表接口ListDevices中获取）
 * @method string getOrganizationId() 获取组织 ID（从查询组织接口DescribeOrganization中获取）
 * @method void setOrganizationId(string $OrganizationId) 设置组织 ID（从查询组织接口DescribeOrganization中获取）
 */
class UpdateDeviceOrganizationRequest extends AbstractModel
{
    /**
     * @var array 设备 ID 数组（从获取设备列表接口ListDevices中获取）
     */
    public $DeviceIds;

    /**
     * @var string 组织 ID（从查询组织接口DescribeOrganization中获取）
     */
    public $OrganizationId;

    /**
     * @param array $DeviceIds 设备 ID 数组（从获取设备列表接口ListDevices中获取）
     * @param string $OrganizationId 组织 ID（从查询组织接口DescribeOrganization中获取）
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }
    }
}
