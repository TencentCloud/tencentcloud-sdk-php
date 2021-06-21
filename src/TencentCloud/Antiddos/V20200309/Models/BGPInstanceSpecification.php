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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高防包资产实例的规格信息
 *
 * @method integer getProtectBandwidth() 获取保底防护峰值，单位Gbps
 * @method void setProtectBandwidth(integer $ProtectBandwidth) 设置保底防护峰值，单位Gbps
 * @method integer getProtectCountLimit() 获取防护次数，单位次
 * @method void setProtectCountLimit(integer $ProtectCountLimit) 设置防护次数，单位次
 * @method integer getProtectIPNumberLimit() 获取防护IP数，单位个
 * @method void setProtectIPNumberLimit(integer $ProtectIPNumberLimit) 设置防护IP数，单位个
 * @method integer getAutoRenewFlag() 获取自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
 */
class BGPInstanceSpecification extends AbstractModel
{
    /**
     * @var integer 保底防护峰值，单位Gbps
     */
    public $ProtectBandwidth;

    /**
     * @var integer 防护次数，单位次
     */
    public $ProtectCountLimit;

    /**
     * @var integer 防护IP数，单位个
     */
    public $ProtectIPNumberLimit;

    /**
     * @var integer 自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
     */
    public $AutoRenewFlag;

    /**
     * @param integer $ProtectBandwidth 保底防护峰值，单位Gbps
     * @param integer $ProtectCountLimit 防护次数，单位次
     * @param integer $ProtectIPNumberLimit 防护IP数，单位个
     * @param integer $AutoRenewFlag 自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
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
        if (array_key_exists("ProtectBandwidth",$param) and $param["ProtectBandwidth"] !== null) {
            $this->ProtectBandwidth = $param["ProtectBandwidth"];
        }

        if (array_key_exists("ProtectCountLimit",$param) and $param["ProtectCountLimit"] !== null) {
            $this->ProtectCountLimit = $param["ProtectCountLimit"];
        }

        if (array_key_exists("ProtectIPNumberLimit",$param) and $param["ProtectIPNumberLimit"] !== null) {
            $this->ProtectIPNumberLimit = $param["ProtectIPNumberLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
