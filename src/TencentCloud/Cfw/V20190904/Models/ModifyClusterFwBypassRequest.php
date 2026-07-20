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
 * @method string getFwType() 获取<p>防火墙类型，&quot;VPC_FW&quot;-VPC防火墙，&quot;NAT_FW&quot;-NAT防火墙</p>
 * @method void setFwType(string $FwType) 设置<p>防火墙类型，&quot;VPC_FW&quot;-VPC防火墙，&quot;NAT_FW&quot;-NAT防火墙</p>
 * @method string getCcnId() 获取<p>云联网实例ID</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网实例ID</p>
 * @method boolean getEnable() 获取<p>Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）</p>
 * @method void setEnable(boolean $Enable) 设置<p>Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）</p>
 * @method string getNatInsId() 获取<p>NAT防火墙实例ID，FwType为nat时必填</p>
 * @method void setNatInsId(string $NatInsId) 设置<p>NAT防火墙实例ID，FwType为nat时必填</p>
 */
class ModifyClusterFwBypassRequest extends AbstractModel
{
    /**
     * @var string <p>防火墙类型，&quot;VPC_FW&quot;-VPC防火墙，&quot;NAT_FW&quot;-NAT防火墙</p>
     */
    public $FwType;

    /**
     * @var string <p>云联网实例ID</p>
     */
    public $CcnId;

    /**
     * @var boolean <p>Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）</p>
     */
    public $Enable;

    /**
     * @var string <p>NAT防火墙实例ID，FwType为nat时必填</p>
     */
    public $NatInsId;

    /**
     * @param string $FwType <p>防火墙类型，&quot;VPC_FW&quot;-VPC防火墙，&quot;NAT_FW&quot;-NAT防火墙</p>
     * @param string $CcnId <p>云联网实例ID</p>
     * @param boolean $Enable <p>Bypass开关，true-开启Bypass（禁用正常下一跳，流量绕过防火墙），false-关闭Bypass（启用正常下一跳，流量经过防火墙）</p>
     * @param string $NatInsId <p>NAT防火墙实例ID，FwType为nat时必填</p>
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
