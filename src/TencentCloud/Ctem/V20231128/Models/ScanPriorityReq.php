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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 优先级入参
 *
 * @method boolean getOnlyScanNewAsset() 获取<p>只对新增资产进行漏洞扫描</p>
 * @method void setOnlyScanNewAsset(boolean $OnlyScanNewAsset) 设置<p>只对新增资产进行漏洞扫描</p>
 * @method array getPriorityRules() 获取<p>启用的优先级规则(有序):new_asset,high_risk_port,admin_panel,high_risk_fingerprint</p>
 * @method void setPriorityRules(array $PriorityRules) 设置<p>启用的优先级规则(有序):new_asset,high_risk_port,admin_panel,high_risk_fingerprint</p>
 */
class ScanPriorityReq extends AbstractModel
{
    /**
     * @var boolean <p>只对新增资产进行漏洞扫描</p>
     */
    public $OnlyScanNewAsset;

    /**
     * @var array <p>启用的优先级规则(有序):new_asset,high_risk_port,admin_panel,high_risk_fingerprint</p>
     */
    public $PriorityRules;

    /**
     * @param boolean $OnlyScanNewAsset <p>只对新增资产进行漏洞扫描</p>
     * @param array $PriorityRules <p>启用的优先级规则(有序):new_asset,high_risk_port,admin_panel,high_risk_fingerprint</p>
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
        if (array_key_exists("OnlyScanNewAsset",$param) and $param["OnlyScanNewAsset"] !== null) {
            $this->OnlyScanNewAsset = $param["OnlyScanNewAsset"];
        }

        if (array_key_exists("PriorityRules",$param) and $param["PriorityRules"] !== null) {
            $this->PriorityRules = $param["PriorityRules"];
        }
    }
}
