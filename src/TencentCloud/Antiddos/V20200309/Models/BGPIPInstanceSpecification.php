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
 * 高防IP资产实例的规格信息
 *
 * @method integer getProtectBandwidth() 获取保底防护峰值，单位Mbps
 * @method void setProtectBandwidth(integer $ProtectBandwidth) 设置保底防护峰值，单位Mbps
 * @method integer getProtectCCQPS() 获取CC防护峰值，单位qps
 * @method void setProtectCCQPS(integer $ProtectCCQPS) 设置CC防护峰值，单位qps
 * @method integer getNormalBandwidth() 获取正常业务带宽，单位Mbps
 * @method void setNormalBandwidth(integer $NormalBandwidth) 设置正常业务带宽，单位Mbps
 * @method integer getForwardRulesLimit() 获取转发规则数，单位条
 * @method void setForwardRulesLimit(integer $ForwardRulesLimit) 设置转发规则数，单位条
 * @method integer getAutoRenewFlag() 获取自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
 * @method integer getLine() 获取高防IP线路，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
 * @method void setLine(integer $Line) 设置高防IP线路，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
 * @method integer getElasticBandwidth() 获取弹性防护峰值，单位Mbps
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置弹性防护峰值，单位Mbps
 */
class BGPIPInstanceSpecification extends AbstractModel
{
    /**
     * @var integer 保底防护峰值，单位Mbps
     */
    public $ProtectBandwidth;

    /**
     * @var integer CC防护峰值，单位qps
     */
    public $ProtectCCQPS;

    /**
     * @var integer 正常业务带宽，单位Mbps
     */
    public $NormalBandwidth;

    /**
     * @var integer 转发规则数，单位条
     */
    public $ForwardRulesLimit;

    /**
     * @var integer 自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
     */
    public $AutoRenewFlag;

    /**
     * @var integer 高防IP线路，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
     */
    public $Line;

    /**
     * @var integer 弹性防护峰值，单位Mbps
     */
    public $ElasticBandwidth;

    /**
     * @param integer $ProtectBandwidth 保底防护峰值，单位Mbps
     * @param integer $ProtectCCQPS CC防护峰值，单位qps
     * @param integer $NormalBandwidth 正常业务带宽，单位Mbps
     * @param integer $ForwardRulesLimit 转发规则数，单位条
     * @param integer $AutoRenewFlag 自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
     * @param integer $Line 高防IP线路，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
     * @param integer $ElasticBandwidth 弹性防护峰值，单位Mbps
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

        if (array_key_exists("ProtectCCQPS",$param) and $param["ProtectCCQPS"] !== null) {
            $this->ProtectCCQPS = $param["ProtectCCQPS"];
        }

        if (array_key_exists("NormalBandwidth",$param) and $param["NormalBandwidth"] !== null) {
            $this->NormalBandwidth = $param["NormalBandwidth"];
        }

        if (array_key_exists("ForwardRulesLimit",$param) and $param["ForwardRulesLimit"] !== null) {
            $this->ForwardRulesLimit = $param["ForwardRulesLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("ElasticBandwidth",$param) and $param["ElasticBandwidth"] !== null) {
            $this->ElasticBandwidth = $param["ElasticBandwidth"];
        }
    }
}
