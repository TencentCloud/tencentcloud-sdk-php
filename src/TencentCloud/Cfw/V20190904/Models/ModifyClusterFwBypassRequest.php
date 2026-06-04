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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterFwBypass请求参数结构体
 *
 * @method string getFwType() 获取防火墙类型，"VPC_FW"-VPC防火墙，"NAT_FW"-NAT防火墙
 * @method void setFwType(string $FwType) 设置防火墙类型，"VPC_FW"-VPC防火墙，"NAT_FW"-NAT防火墙
 * @method string getCcnId() 获取云联网实例ID
 * @method void setCcnId(string $CcnId) 设置云联网实例ID
 * @method boolean getEnable() 获取Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）
 * @method void setEnable(boolean $Enable) 设置Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）
 * @method string getNatInsId() 获取NAT防火墙实例ID，FwType为nat时必填
 * @method void setNatInsId(string $NatInsId) 设置NAT防火墙实例ID，FwType为nat时必填
 */
class ModifyClusterFwBypassRequest extends AbstractModel
{
    /**
     * @var string 防火墙类型，"VPC_FW"-VPC防火墙，"NAT_FW"-NAT防火墙
     */
    public $FwType;

    /**
     * @var string 云联网实例ID
     */
    public $CcnId;

    /**
     * @var boolean Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）
     */
    public $Enable;

    /**
     * @var string NAT防火墙实例ID，FwType为nat时必填
     */
    public $NatInsId;

    /**
     * @param string $FwType 防火墙类型，"VPC_FW"-VPC防火墙，"NAT_FW"-NAT防火墙
     * @param string $CcnId 云联网实例ID
     * @param boolean $Enable Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）
     * @param string $NatInsId NAT防火墙实例ID，FwType为nat时必填
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
        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }
    }
}
