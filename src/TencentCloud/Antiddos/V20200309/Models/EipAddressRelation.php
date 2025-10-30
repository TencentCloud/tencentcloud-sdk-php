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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高防弹性公网IP关联信息
 *
 * @method string getEipAddressRegion() 获取高防弹性公网IP绑定的实例地区，例如hk代表中国香港
 * @method void setEipAddressRegion(string $EipAddressRegion) 设置高防弹性公网IP绑定的实例地区，例如hk代表中国香港
 * @method string getEipBoundRscIns() 获取绑定的资源实例ID。可能是一个CVM。
 * @method void setEipBoundRscIns(string $EipBoundRscIns) 设置绑定的资源实例ID。可能是一个CVM。
 * @method string getEipBoundRscEni() 获取绑定的弹性网卡ID
 * @method void setEipBoundRscEni(string $EipBoundRscEni) 设置绑定的弹性网卡ID
 * @method string getEipBoundRscVip() 获取绑定的资源内网ip
 * @method void setEipBoundRscVip(string $EipBoundRscVip) 设置绑定的资源内网ip
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class EipAddressRelation extends AbstractModel
{
    /**
     * @var string 高防弹性公网IP绑定的实例地区，例如hk代表中国香港
     */
    public $EipAddressRegion;

    /**
     * @var string 绑定的资源实例ID。可能是一个CVM。
     */
    public $EipBoundRscIns;

    /**
     * @var string 绑定的弹性网卡ID
     */
    public $EipBoundRscEni;

    /**
     * @var string 绑定的资源内网ip
     */
    public $EipBoundRscVip;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param string $EipAddressRegion 高防弹性公网IP绑定的实例地区，例如hk代表中国香港
     * @param string $EipBoundRscIns 绑定的资源实例ID。可能是一个CVM。
     * @param string $EipBoundRscEni 绑定的弹性网卡ID
     * @param string $EipBoundRscVip 绑定的资源内网ip
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("EipAddressRegion",$param) and $param["EipAddressRegion"] !== null) {
            $this->EipAddressRegion = $param["EipAddressRegion"];
        }

        if (array_key_exists("EipBoundRscIns",$param) and $param["EipBoundRscIns"] !== null) {
            $this->EipBoundRscIns = $param["EipBoundRscIns"];
        }

        if (array_key_exists("EipBoundRscEni",$param) and $param["EipBoundRscEni"] !== null) {
            $this->EipBoundRscEni = $param["EipBoundRscEni"];
        }

        if (array_key_exists("EipBoundRscVip",$param) and $param["EipBoundRscVip"] !== null) {
            $this->EipBoundRscVip = $param["EipBoundRscVip"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
