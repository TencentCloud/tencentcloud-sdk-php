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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务入参
 *
 * @method string getDeviceId() 获取业务入参id
 * @method void setDeviceId(string $DeviceId) 设置业务入参id
 * @method integer getDeviceType() 获取业务入参类型
 * @method void setDeviceType(integer $DeviceType) 设置业务入参类型
 */
class Device extends AbstractModel
{
    /**
     * @var string 业务入参id
     */
    public $DeviceId;

    /**
     * @var integer 业务入参类型
     */
    public $DeviceType;

    /**
     * @param string $DeviceId 业务入参id
     * @param integer $DeviceType 业务入参类型
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
