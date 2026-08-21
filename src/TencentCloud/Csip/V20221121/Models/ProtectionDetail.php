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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防护配置详情
 *
 * @method array getConfigItems() 获取各配置项开启状态
 * @method void setConfigItems(array $ConfigItems) 设置各配置项开启状态
 * @method integer getEligibleAssetCount() 获取应防护资产数
 * @method void setEligibleAssetCount(integer $EligibleAssetCount) 设置应防护资产数
 * @method integer getProtectedAssetCount() 获取已防护资产数
 * @method void setProtectedAssetCount(integer $ProtectedAssetCount) 设置已防护资产数
 * @method integer getCoveragePercent() 获取覆盖率百分比
取值范围：[0, 100]
 * @method void setCoveragePercent(integer $CoveragePercent) 设置覆盖率百分比
取值范围：[0, 100]
 * @method array getExpiringProducts() 获取即将到期产品列表
 * @method void setExpiringProducts(array $ExpiringProducts) 设置即将到期产品列表
 */
class ProtectionDetail extends AbstractModel
{
    /**
     * @var array 各配置项开启状态
     */
    public $ConfigItems;

    /**
     * @var integer 应防护资产数
     */
    public $EligibleAssetCount;

    /**
     * @var integer 已防护资产数
     */
    public $ProtectedAssetCount;

    /**
     * @var integer 覆盖率百分比
取值范围：[0, 100]
     */
    public $CoveragePercent;

    /**
     * @var array 即将到期产品列表
     */
    public $ExpiringProducts;

    /**
     * @param array $ConfigItems 各配置项开启状态
     * @param integer $EligibleAssetCount 应防护资产数
     * @param integer $ProtectedAssetCount 已防护资产数
     * @param integer $CoveragePercent 覆盖率百分比
取值范围：[0, 100]
     * @param array $ExpiringProducts 即将到期产品列表
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
        if (array_key_exists("ConfigItems",$param) and $param["ConfigItems"] !== null) {
            $this->ConfigItems = [];
            foreach ($param["ConfigItems"] as $key => $value){
                $obj = new ProtectionConfigItem();
                $obj->deserialize($value);
                array_push($this->ConfigItems, $obj);
            }
        }

        if (array_key_exists("EligibleAssetCount",$param) and $param["EligibleAssetCount"] !== null) {
            $this->EligibleAssetCount = $param["EligibleAssetCount"];
        }

        if (array_key_exists("ProtectedAssetCount",$param) and $param["ProtectedAssetCount"] !== null) {
            $this->ProtectedAssetCount = $param["ProtectedAssetCount"];
        }

        if (array_key_exists("CoveragePercent",$param) and $param["CoveragePercent"] !== null) {
            $this->CoveragePercent = $param["CoveragePercent"];
        }

        if (array_key_exists("ExpiringProducts",$param) and $param["ExpiringProducts"] !== null) {
            $this->ExpiringProducts = [];
            foreach ($param["ExpiringProducts"] as $key => $value){
                $obj = new ExpiringProduct();
                $obj->deserialize($value);
                array_push($this->ExpiringProducts, $obj);
            }
        }
    }
}
