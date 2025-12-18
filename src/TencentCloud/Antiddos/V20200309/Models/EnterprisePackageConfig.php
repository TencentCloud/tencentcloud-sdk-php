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
 * {
    "Region": "ap-guangzhou",
    "ProtectIpCount": 1,
    "BasicProtectBandwidth": 300,
    "Bandwidth": 100,
    "ElasticProtectBandwidth": 0,
    "ElasticBandwidthFlag": true
}
 *
 * @method string getRegion() 获取购买高防包所属地域
 * @method void setRegion(string $Region) 设置购买高防包所属地域
 * @method integer getProtectIpCount() 获取防护IP数
 * @method void setProtectIpCount(integer $ProtectIpCount) 设置防护IP数
 * @method integer getBasicProtectBandwidth() 获取保底防护带宽
 * @method void setBasicProtectBandwidth(integer $BasicProtectBandwidth) 设置保底防护带宽
 * @method integer getBandwidth() 获取业务带宽规模
 * @method void setBandwidth(integer $Bandwidth) 设置业务带宽规模
 * @method integer getElasticProtectBandwidth() 获取弹性带宽 Gbps，可选择的弹性带宽[0,400,500,600,800,1000]
默认为0
 * @method void setElasticProtectBandwidth(integer $ElasticProtectBandwidth) 设置弹性带宽 Gbps，可选择的弹性带宽[0,400,500,600,800,1000]
默认为0
 * @method boolean getElasticBandwidthFlag() 获取是否开启弹性业务带宽
默认为false
 * @method void setElasticBandwidthFlag(boolean $ElasticBandwidthFlag) 设置是否开启弹性业务带宽
默认为false
 */
class EnterprisePackageConfig extends AbstractModel
{
    /**
     * @var string 购买高防包所属地域
     */
    public $Region;

    /**
     * @var integer 防护IP数
     */
    public $ProtectIpCount;

    /**
     * @var integer 保底防护带宽
     */
    public $BasicProtectBandwidth;

    /**
     * @var integer 业务带宽规模
     */
    public $Bandwidth;

    /**
     * @var integer 弹性带宽 Gbps，可选择的弹性带宽[0,400,500,600,800,1000]
默认为0
     */
    public $ElasticProtectBandwidth;

    /**
     * @var boolean 是否开启弹性业务带宽
默认为false
     */
    public $ElasticBandwidthFlag;

    /**
     * @param string $Region 购买高防包所属地域
     * @param integer $ProtectIpCount 防护IP数
     * @param integer $BasicProtectBandwidth 保底防护带宽
     * @param integer $Bandwidth 业务带宽规模
     * @param integer $ElasticProtectBandwidth 弹性带宽 Gbps，可选择的弹性带宽[0,400,500,600,800,1000]
默认为0
     * @param boolean $ElasticBandwidthFlag 是否开启弹性业务带宽
默认为false
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProtectIpCount",$param) and $param["ProtectIpCount"] !== null) {
            $this->ProtectIpCount = $param["ProtectIpCount"];
        }

        if (array_key_exists("BasicProtectBandwidth",$param) and $param["BasicProtectBandwidth"] !== null) {
            $this->BasicProtectBandwidth = $param["BasicProtectBandwidth"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ElasticProtectBandwidth",$param) and $param["ElasticProtectBandwidth"] !== null) {
            $this->ElasticProtectBandwidth = $param["ElasticProtectBandwidth"];
        }

        if (array_key_exists("ElasticBandwidthFlag",$param) and $param["ElasticBandwidthFlag"] !== null) {
            $this->ElasticBandwidthFlag = $param["ElasticBandwidthFlag"];
        }
    }
}
