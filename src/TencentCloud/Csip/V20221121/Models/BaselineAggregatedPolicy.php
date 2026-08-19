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
 * 基线策略聚合结果，用于策略维度汇总展示当前扫描通过/未通过情况。
 *
 * @method integer getParentCategoryID() 获取<p>系统策略所属父分类 ID（仅 PolicyType=SYSTEM 时聚合使用，自定义策略为 0）。</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) 设置<p>系统策略所属父分类 ID（仅 PolicyType=SYSTEM 时聚合使用，自定义策略为 0）。</p>
 * @method array getPolicyID() 获取<p>本次聚合涉及的基线策略 ID 列表。</p>
 * @method void setPolicyID(array $PolicyID) 设置<p>本次聚合涉及的基线策略 ID 列表。</p>
 * @method string getName() 获取<p>策略名称（自定义策略为用户输入，系统策略为内置分类名）。</p>
 * @method void setName(string $Name) 设置<p>策略名称（自定义策略为用户输入，系统策略为内置分类名）。</p>
 * @method string getDescription() 获取<p>策略描述。</p>
 * @method void setDescription(string $Description) 设置<p>策略描述。</p>
 * @method integer getConfItemCount() 获取<p>策略已配置的检测项数量。</p>
 * @method void setConfItemCount(integer $ConfItemCount) 设置<p>策略已配置的检测项数量。</p>
 * @method integer getPassItemCount() 获取<p>本策略下结果为 PASS 的检测项数量。</p>
 * @method void setPassItemCount(integer $PassItemCount) 设置<p>本策略下结果为 PASS 的检测项数量。</p>
 * @method integer getNotPassItemCount() 获取<p>本策略下结果为 NOT_PASS 的检测项数量。</p>
 * @method void setNotPassItemCount(integer $NotPassItemCount) 设置<p>本策略下结果为 NOT_PASS 的检测项数量。</p>
 * @method array getNotPassItemRiskLevelStatistic() 获取<p>未通过检测项按风险等级（LOW/MEDIUM/HIGH/CRITICAL）的分布统计。</p>
 * @method void setNotPassItemRiskLevelStatistic(array $NotPassItemRiskLevelStatistic) 设置<p>未通过检测项按风险等级（LOW/MEDIUM/HIGH/CRITICAL）的分布统计。</p>
 * @method float getPassRate() 获取<p>本策略最近一次扫描的通过率，单位为百分比（0~100），保留两位小数。</p>
 * @method void setPassRate(float $PassRate) 设置<p>本策略最近一次扫描的通过率，单位为百分比（0~100），保留两位小数。</p>
 * @method array getCategoryStatistic() 获取<p>该策略下各子分类的扫描结果统计明细。</p>
 * @method void setCategoryStatistic(array $CategoryStatistic) 设置<p>该策略下各子分类的扫描结果统计明细。</p>
 * @method string getPolicyType() 获取<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method void setPolicyType(string $PolicyType) 设置<p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
 * @method string getCheckAssetType() 获取<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) 设置<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method boolean getScanned() 获取<p>该基线类别是否被扫描过</p>
 * @method void setScanned(boolean $Scanned) 设置<p>该基线类别是否被扫描过</p>
 */
class BaselineAggregatedPolicy extends AbstractModel
{
    /**
     * @var integer <p>系统策略所属父分类 ID（仅 PolicyType=SYSTEM 时聚合使用，自定义策略为 0）。</p>
     */
    public $ParentCategoryID;

    /**
     * @var array <p>本次聚合涉及的基线策略 ID 列表。</p>
     */
    public $PolicyID;

    /**
     * @var string <p>策略名称（自定义策略为用户输入，系统策略为内置分类名）。</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述。</p>
     */
    public $Description;

    /**
     * @var integer <p>策略已配置的检测项数量。</p>
     */
    public $ConfItemCount;

    /**
     * @var integer <p>本策略下结果为 PASS 的检测项数量。</p>
     */
    public $PassItemCount;

    /**
     * @var integer <p>本策略下结果为 NOT_PASS 的检测项数量。</p>
     */
    public $NotPassItemCount;

    /**
     * @var array <p>未通过检测项按风险等级（LOW/MEDIUM/HIGH/CRITICAL）的分布统计。</p>
     */
    public $NotPassItemRiskLevelStatistic;

    /**
     * @var float <p>本策略最近一次扫描的通过率，单位为百分比（0~100），保留两位小数。</p>
     */
    public $PassRate;

    /**
     * @var array <p>该策略下各子分类的扫描结果统计明细。</p>
     */
    public $CategoryStatistic;

    /**
     * @var string <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     */
    public $PolicyType;

    /**
     * @var string <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var boolean <p>该基线类别是否被扫描过</p>
     */
    public $Scanned;

    /**
     * @param integer $ParentCategoryID <p>系统策略所属父分类 ID（仅 PolicyType=SYSTEM 时聚合使用，自定义策略为 0）。</p>
     * @param array $PolicyID <p>本次聚合涉及的基线策略 ID 列表。</p>
     * @param string $Name <p>策略名称（自定义策略为用户输入，系统策略为内置分类名）。</p>
     * @param string $Description <p>策略描述。</p>
     * @param integer $ConfItemCount <p>策略已配置的检测项数量。</p>
     * @param integer $PassItemCount <p>本策略下结果为 PASS 的检测项数量。</p>
     * @param integer $NotPassItemCount <p>本策略下结果为 NOT_PASS 的检测项数量。</p>
     * @param array $NotPassItemRiskLevelStatistic <p>未通过检测项按风险等级（LOW/MEDIUM/HIGH/CRITICAL）的分布统计。</p>
     * @param float $PassRate <p>本策略最近一次扫描的通过率，单位为百分比（0~100），保留两位小数。</p>
     * @param array $CategoryStatistic <p>该策略下各子分类的扫描结果统计明细。</p>
     * @param string $PolicyType <p>基线策略类型。取值：</p><ul><li>SYSTEM：系统策略（CSIP 内置）</li><li>SELF：用户自定义策略</li></ul>
     * @param string $CheckAssetType <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
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
        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConfItemCount",$param) and $param["ConfItemCount"] !== null) {
            $this->ConfItemCount = $param["ConfItemCount"];
        }

        if (array_key_exists("PassItemCount",$param) and $param["PassItemCount"] !== null) {
            $this->PassItemCount = $param["PassItemCount"];
        }

        if (array_key_exists("NotPassItemCount",$param) and $param["NotPassItemCount"] !== null) {
            $this->NotPassItemCount = $param["NotPassItemCount"];
        }

        if (array_key_exists("NotPassItemRiskLevelStatistic",$param) and $param["NotPassItemRiskLevelStatistic"] !== null) {
            $this->NotPassItemRiskLevelStatistic = [];
            foreach ($param["NotPassItemRiskLevelStatistic"] as $key => $value){
                $obj = new BaselineRiskLevelStatistic();
                $obj->deserialize($value);
                array_push($this->NotPassItemRiskLevelStatistic, $obj);
            }
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("CategoryStatistic",$param) and $param["CategoryStatistic"] !== null) {
            $this->CategoryStatistic = [];
            foreach ($param["CategoryStatistic"] as $key => $value){
                $obj = new BaselineAggregatedCategory();
                $obj->deserialize($value);
                array_push($this->CategoryStatistic, $obj);
            }
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("Scanned",$param) and $param["Scanned"] !== null) {
            $this->Scanned = $param["Scanned"];
        }
    }
}
