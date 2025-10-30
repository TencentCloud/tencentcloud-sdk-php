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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例支持IPv6详情描述。
 *
 * @method boolean getIsSupport() 获取是否支持开启IPv6。
 * @method void setIsSupport(boolean $IsSupport) 设置是否支持开启IPv6。
 * @method string getDetail() 获取详情。

当IsSupport为True，Detail枚举值为:

EFFECTIVE_IMMEDIATELY: 立即生效

EFFECTIVE_AFTER_REBOOT: 分配过程需要开关机，用户需备份数据

 

当IsSupport为False，Detail枚举值为:

HAD_BEEN_ASSIGNED: 已分配IPv6地址

REGION_NOT_SUPPORT: 地域不支持

BLUEPRINT_NOT_SUPPORT: 镜像不支持

BUNDLE_INSTANCE_NOT_SUPPORT: 套餐实例不支持

BUNDLE_BANDWIDTH_NOT_SUPPORT: 套餐带宽不支持
 * @method void setDetail(string $Detail) 设置详情。

当IsSupport为True，Detail枚举值为:

EFFECTIVE_IMMEDIATELY: 立即生效

EFFECTIVE_AFTER_REBOOT: 分配过程需要开关机，用户需备份数据

 

当IsSupport为False，Detail枚举值为:

HAD_BEEN_ASSIGNED: 已分配IPv6地址

REGION_NOT_SUPPORT: 地域不支持

BLUEPRINT_NOT_SUPPORT: 镜像不支持

BUNDLE_INSTANCE_NOT_SUPPORT: 套餐实例不支持

BUNDLE_BANDWIDTH_NOT_SUPPORT: 套餐带宽不支持
 * @method string getMessage() 获取提示信息。
 * @method void setMessage(string $Message) 设置提示信息。
 */
class SupportIpv6Detail extends AbstractModel
{
    /**
     * @var boolean 是否支持开启IPv6。
     */
    public $IsSupport;

    /**
     * @var string 详情。

当IsSupport为True，Detail枚举值为:

EFFECTIVE_IMMEDIATELY: 立即生效

EFFECTIVE_AFTER_REBOOT: 分配过程需要开关机，用户需备份数据

 

当IsSupport为False，Detail枚举值为:

HAD_BEEN_ASSIGNED: 已分配IPv6地址

REGION_NOT_SUPPORT: 地域不支持

BLUEPRINT_NOT_SUPPORT: 镜像不支持

BUNDLE_INSTANCE_NOT_SUPPORT: 套餐实例不支持

BUNDLE_BANDWIDTH_NOT_SUPPORT: 套餐带宽不支持
     */
    public $Detail;

    /**
     * @var string 提示信息。
     */
    public $Message;

    /**
     * @param boolean $IsSupport 是否支持开启IPv6。
     * @param string $Detail 详情。

当IsSupport为True，Detail枚举值为:

EFFECTIVE_IMMEDIATELY: 立即生效

EFFECTIVE_AFTER_REBOOT: 分配过程需要开关机，用户需备份数据

 

当IsSupport为False，Detail枚举值为:

HAD_BEEN_ASSIGNED: 已分配IPv6地址

REGION_NOT_SUPPORT: 地域不支持

BLUEPRINT_NOT_SUPPORT: 镜像不支持

BUNDLE_INSTANCE_NOT_SUPPORT: 套餐实例不支持

BUNDLE_BANDWIDTH_NOT_SUPPORT: 套餐带宽不支持
     * @param string $Message 提示信息。
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
        if (array_key_exists("IsSupport",$param) and $param["IsSupport"] !== null) {
            $this->IsSupport = $param["IsSupport"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
