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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN网关的流量监控数据。
 *
 * @method OutBandwidth getOutBandwidth() 获取出带宽流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutBandwidth(OutBandwidth $OutBandwidth) 设置出带宽流量
注意：此字段可能返回 null，表示取不到有效值。
 * @method InBandwidth getInBandwidth() 获取入带宽流量
 * @method void setInBandwidth(InBandwidth $InBandwidth) 设置入带宽流量
 */
class VpngwBandwidthData extends AbstractModel
{
    /**
     * @var OutBandwidth 出带宽流量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutBandwidth;

    /**
     * @var InBandwidth 入带宽流量
     */
    public $InBandwidth;

    /**
     * @param OutBandwidth $OutBandwidth 出带宽流量
注意：此字段可能返回 null，表示取不到有效值。
     * @param InBandwidth $InBandwidth 入带宽流量
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
        if (array_key_exists("OutBandwidth",$param) and $param["OutBandwidth"] !== null) {
            $this->OutBandwidth = new OutBandwidth();
            $this->OutBandwidth->deserialize($param["OutBandwidth"]);
        }

        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = new InBandwidth();
            $this->InBandwidth->deserialize($param["InBandwidth"]);
        }
    }
}
