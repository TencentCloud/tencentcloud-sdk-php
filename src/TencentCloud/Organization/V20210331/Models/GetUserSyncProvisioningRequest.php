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
 * GetUserSyncProvisioning请求参数结构体
 *
 * @method string getZoneId() 获取空间ID。
 * @method void setZoneId(string $ZoneId) 设置空间ID。
 * @method string getUserProvisioningId() 获取CAM 用户同步的 ID。
 * @method void setUserProvisioningId(string $UserProvisioningId) 设置CAM 用户同步的 ID。
 */
class GetUserSyncProvisioningRequest extends AbstractModel
{
    /**
     * @var string 空间ID。
     */
    public $ZoneId;

    /**
     * @var string CAM 用户同步的 ID。
     */
    public $UserProvisioningId;

    /**
     * @param string $ZoneId 空间ID。
     * @param string $UserProvisioningId CAM 用户同步的 ID。
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

        if (array_key_exists("UserProvisioningId",$param) and $param["UserProvisioningId"] !== null) {
            $this->UserProvisioningId = $param["UserProvisioningId"];
        }
    }
}
