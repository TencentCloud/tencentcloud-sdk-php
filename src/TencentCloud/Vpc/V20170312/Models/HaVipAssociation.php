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
 * HaVip绑定的子机/网卡（用于限制HaVip飘移的范围，并不是真正的飘移动作）。
 *
 * @method string getInstanceId() 获取HaVip绑定的子机或网卡唯一ID。
 * @method void setInstanceId(string $InstanceId) 设置HaVip绑定的子机或网卡唯一ID。
 * @method string getHaVipId() 获取HaVip实例唯一ID。
 * @method void setHaVipId(string $HaVipId) 设置HaVip实例唯一ID。
 * @method string getInstanceType() 获取HaVip绑定的类型。取值:CVM, ENI。
 * @method void setInstanceType(string $InstanceType) 设置HaVip绑定的类型。取值:CVM, ENI。
 */
class HaVipAssociation extends AbstractModel
{
    /**
     * @var string HaVip绑定的子机或网卡唯一ID。
     */
    public $InstanceId;

    /**
     * @var string HaVip实例唯一ID。
     */
    public $HaVipId;

    /**
     * @var string HaVip绑定的类型。取值:CVM, ENI。
     */
    public $InstanceType;

    /**
     * @param string $InstanceId HaVip绑定的子机或网卡唯一ID。
     * @param string $HaVipId HaVip实例唯一ID。
     * @param string $InstanceType HaVip绑定的类型。取值:CVM, ENI。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
