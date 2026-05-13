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
 * Dspm 资产安全分析状态统计数
 *
 * @method integer getOpenCount() 获取资产安全分析开启数
 * @method void setOpenCount(integer $OpenCount) 设置资产安全分析开启数
 * @method integer getOpeningCount() 获取资产安全分析开启中数
 * @method void setOpeningCount(integer $OpeningCount) 设置资产安全分析开启中数
 * @method integer getClosingCount() 获取资产安全分析关闭中数
 * @method void setClosingCount(integer $ClosingCount) 设置资产安全分析关闭中数
 * @method integer getCloseCount() 获取资产安全分析未开启数
 * @method void setCloseCount(integer $CloseCount) 设置资产安全分析未开启数
 * @method array getAssetTypeCountSet() 获取按照资产类型分组的资产安全分析状态统计数
 * @method void setAssetTypeCountSet(array $AssetTypeCountSet) 设置按照资产类型分组的资产安全分析状态统计数
 */
class DspmSecurityAnalyseStatusCount extends AbstractModel
{
    /**
     * @var integer 资产安全分析开启数
     */
    public $OpenCount;

    /**
     * @var integer 资产安全分析开启中数
     */
    public $OpeningCount;

    /**
     * @var integer 资产安全分析关闭中数
     */
    public $ClosingCount;

    /**
     * @var integer 资产安全分析未开启数
     */
    public $CloseCount;

    /**
     * @var array 按照资产类型分组的资产安全分析状态统计数
     */
    public $AssetTypeCountSet;

    /**
     * @param integer $OpenCount 资产安全分析开启数
     * @param integer $OpeningCount 资产安全分析开启中数
     * @param integer $ClosingCount 资产安全分析关闭中数
     * @param integer $CloseCount 资产安全分析未开启数
     * @param array $AssetTypeCountSet 按照资产类型分组的资产安全分析状态统计数
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
        if (array_key_exists("OpenCount",$param) and $param["OpenCount"] !== null) {
            $this->OpenCount = $param["OpenCount"];
        }

        if (array_key_exists("OpeningCount",$param) and $param["OpeningCount"] !== null) {
            $this->OpeningCount = $param["OpeningCount"];
        }

        if (array_key_exists("ClosingCount",$param) and $param["ClosingCount"] !== null) {
            $this->ClosingCount = $param["ClosingCount"];
        }

        if (array_key_exists("CloseCount",$param) and $param["CloseCount"] !== null) {
            $this->CloseCount = $param["CloseCount"];
        }

        if (array_key_exists("AssetTypeCountSet",$param) and $param["AssetTypeCountSet"] !== null) {
            $this->AssetTypeCountSet = [];
            foreach ($param["AssetTypeCountSet"] as $key => $value){
                $obj = new DspmAssetTypeCount();
                $obj->deserialize($value);
                array_push($this->AssetTypeCountSet, $obj);
            }
        }
    }
}
