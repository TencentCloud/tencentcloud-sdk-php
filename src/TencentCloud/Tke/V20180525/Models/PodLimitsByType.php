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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 某机型可支持的最大 VPC-CNI 模式的 Pod 数量
 *
 * @method integer getTKERouteENINonStaticIP() 获取TKE共享网卡非固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTKERouteENINonStaticIP(integer $TKERouteENINonStaticIP) 设置TKE共享网卡非固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTKERouteENIStaticIP() 获取TKE共享网卡固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTKERouteENIStaticIP(integer $TKERouteENIStaticIP) 设置TKE共享网卡固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTKEDirectENI() 获取TKE独立网卡模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTKEDirectENI(integer $TKEDirectENI) 设置TKE独立网卡模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class PodLimitsByType extends AbstractModel
{
    /**
     * @var integer TKE共享网卡非固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TKERouteENINonStaticIP;

    /**
     * @var integer TKE共享网卡固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TKERouteENIStaticIP;

    /**
     * @var integer TKE独立网卡模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TKEDirectENI;

    /**
     * @param integer $TKERouteENINonStaticIP TKE共享网卡非固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TKERouteENIStaticIP TKE共享网卡固定IP模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TKEDirectENI TKE独立网卡模式可支持的Pod数量
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TKERouteENINonStaticIP",$param) and $param["TKERouteENINonStaticIP"] !== null) {
            $this->TKERouteENINonStaticIP = $param["TKERouteENINonStaticIP"];
        }

        if (array_key_exists("TKERouteENIStaticIP",$param) and $param["TKERouteENIStaticIP"] !== null) {
            $this->TKERouteENIStaticIP = $param["TKERouteENIStaticIP"];
        }

        if (array_key_exists("TKEDirectENI",$param) and $param["TKEDirectENI"] !== null) {
            $this->TKEDirectENI = $param["TKEDirectENI"];
        }
    }
}
