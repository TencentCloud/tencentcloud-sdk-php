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
 * 基线子分类维度的聚合结果，承载该子分类下检测项的通过/未通过统计。
 *
 * @method BaselineCategory getCategory() 获取<p>基线子分类基础信息（含分类 ID、名称、描述）。</p>
 * @method void setCategory(BaselineCategory $Category) 设置<p>基线子分类基础信息（含分类 ID、名称、描述）。</p>
 * @method array getNotPassItemRiskLevelStatistic() 获取<p>该子分类下未通过检测项按风险等级的分布统计。</p>
 * @method void setNotPassItemRiskLevelStatistic(array $NotPassItemRiskLevelStatistic) 设置<p>该子分类下未通过检测项按风险等级的分布统计。</p>
 * @method integer getPassItemCount() 获取<p>该子分类下结果为 PASS 的检测项数量。</p>
 * @method void setPassItemCount(integer $PassItemCount) 设置<p>该子分类下结果为 PASS 的检测项数量。</p>
 * @method integer getNotPassItemCount() 获取<p>该子分类下结果为 NOT_PASS 的检测项数量。</p>
 * @method void setNotPassItemCount(integer $NotPassItemCount) 设置<p>该子分类下结果为 NOT_PASS 的检测项数量。</p>
 * @method float getPassRate() 获取<p>该子分类下检测项通过率，单位为百分比（0~100），保留两位小数。</p>
 * @method void setPassRate(float $PassRate) 设置<p>该子分类下检测项通过率，单位为百分比（0~100），保留两位小数。</p>
 * @method boolean getScanned() 获取<p>该基线类别是否被扫描过</p>
 * @method void setScanned(boolean $Scanned) 设置<p>该基线类别是否被扫描过</p>
 */
class BaselineAggregatedCategory extends AbstractModel
{
    /**
     * @var BaselineCategory <p>基线子分类基础信息（含分类 ID、名称、描述）。</p>
     */
    public $Category;

    /**
     * @var array <p>该子分类下未通过检测项按风险等级的分布统计。</p>
     */
    public $NotPassItemRiskLevelStatistic;

    /**
     * @var integer <p>该子分类下结果为 PASS 的检测项数量。</p>
     */
    public $PassItemCount;

    /**
     * @var integer <p>该子分类下结果为 NOT_PASS 的检测项数量。</p>
     */
    public $NotPassItemCount;

    /**
     * @var float <p>该子分类下检测项通过率，单位为百分比（0~100），保留两位小数。</p>
     */
    public $PassRate;

    /**
     * @var boolean <p>该基线类别是否被扫描过</p>
     */
    public $Scanned;

    /**
     * @param BaselineCategory $Category <p>基线子分类基础信息（含分类 ID、名称、描述）。</p>
     * @param array $NotPassItemRiskLevelStatistic <p>该子分类下未通过检测项按风险等级的分布统计。</p>
     * @param integer $PassItemCount <p>该子分类下结果为 PASS 的检测项数量。</p>
     * @param integer $NotPassItemCount <p>该子分类下结果为 NOT_PASS 的检测项数量。</p>
     * @param float $PassRate <p>该子分类下检测项通过率，单位为百分比（0~100），保留两位小数。</p>
     * @param boolean $Scanned <p>该基线类别是否被扫描过</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = new BaselineCategory();
            $this->Category->deserialize($param["Category"]);
        }

        if (array_key_exists("NotPassItemRiskLevelStatistic",$param) and $param["NotPassItemRiskLevelStatistic"] !== null) {
            $this->NotPassItemRiskLevelStatistic = [];
            foreach ($param["NotPassItemRiskLevelStatistic"] as $key => $value){
                $obj = new BaselineRiskLevelStatistic();
                $obj->deserialize($value);
                array_push($this->NotPassItemRiskLevelStatistic, $obj);
            }
        }

        if (array_key_exists("PassItemCount",$param) and $param["PassItemCount"] !== null) {
            $this->PassItemCount = $param["PassItemCount"];
        }

        if (array_key_exists("NotPassItemCount",$param) and $param["NotPassItemCount"] !== null) {
            $this->NotPassItemCount = $param["NotPassItemCount"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("Scanned",$param) and $param["Scanned"] !== null) {
            $this->Scanned = $param["Scanned"];
        }
    }
}
