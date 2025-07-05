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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ccn实例信息（不带地域属性）
 *
 * @method string getInstanceType() 获取云联网支持的实例类型：
`VPC`
`DIRECTCONNECT`
`BMVPC` 
`EDGE`
`EDGE_TUNNEL`
`EDGE_VPNGW`
`VPNGW`
 * @method void setInstanceType(string $InstanceType) 设置云联网支持的实例类型：
`VPC`
`DIRECTCONNECT`
`BMVPC` 
`EDGE`
`EDGE_TUNNEL`
`EDGE_VPNGW`
`VPNGW`
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 */
class CcnInstanceWithoutRegion extends AbstractModel
{
    /**
     * @var string 云联网支持的实例类型：
`VPC`
`DIRECTCONNECT`
`BMVPC` 
`EDGE`
`EDGE_TUNNEL`
`EDGE_VPNGW`
`VPNGW`
     */
    public $InstanceType;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @param string $InstanceType 云联网支持的实例类型：
`VPC`
`DIRECTCONNECT`
`BMVPC` 
`EDGE`
`EDGE_TUNNEL`
`EDGE_VPNGW`
`VPNGW`
     * @param string $InstanceId 实例ID。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
