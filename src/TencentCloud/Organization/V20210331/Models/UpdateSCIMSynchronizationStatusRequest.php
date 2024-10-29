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
 * UpdateSCIMSynchronizationStatus请求参数结构体
 *
 * @method string getZoneId() 获取空间ID。z-前缀开头，后面是12位随机数字/小写字母
 * @method void setZoneId(string $ZoneId) 设置空间ID。z-前缀开头，后面是12位随机数字/小写字母
 * @method string getSCIMSynchronizationStatus() 获取SCIM 同步状态。Enabled：启用。Disabled：禁用。
 * @method void setSCIMSynchronizationStatus(string $SCIMSynchronizationStatus) 设置SCIM 同步状态。Enabled：启用。Disabled：禁用。
 */
class UpdateSCIMSynchronizationStatusRequest extends AbstractModel
{
    /**
     * @var string 空间ID。z-前缀开头，后面是12位随机数字/小写字母
     */
    public $ZoneId;

    /**
     * @var string SCIM 同步状态。Enabled：启用。Disabled：禁用。
     */
    public $SCIMSynchronizationStatus;

    /**
     * @param string $ZoneId 空间ID。z-前缀开头，后面是12位随机数字/小写字母
     * @param string $SCIMSynchronizationStatus SCIM 同步状态。Enabled：启用。Disabled：禁用。
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

        if (array_key_exists("SCIMSynchronizationStatus",$param) and $param["SCIMSynchronizationStatus"] !== null) {
            $this->SCIMSynchronizationStatus = $param["SCIMSynchronizationStatus"];
        }
    }
}
