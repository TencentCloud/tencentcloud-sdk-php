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
 * CreateBaselineAggregatedItemExportJob请求参数结构体
 *
 * @method array getPolicyID() 获取<p>基线策略 ID 列表（可同时传多条做联合统计）。</p>
 * @method void setPolicyID(array $PolicyID) 设置<p>基线策略 ID 列表（可同时传多条做联合统计）。</p>
 * @method integer getParentCategoryID() 获取<p>基线系统父分类 ID。</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) 设置<p>基线系统父分类 ID。</p>
 * @method integer getCategoryID() 获取<p>基线子分类 ID。</p>
 * @method void setCategoryID(integer $CategoryID) 设置<p>基线子分类 ID。</p>
 * @method string getName() 获取<p>导出任务名称。不传时自动生成。</p>
 * @method void setName(string $Name) 设置<p>导出任务名称。不传时自动生成。</p>
 * @method string getExportType() 获取<p>导出类型，默认 RISK。<br>枚举值：<br>STATISTIC：导出统计结果<br>RISK：导出风险明细</p>
 * @method void setExportType(string $ExportType) 设置<p>导出类型，默认 RISK。<br>枚举值：<br>STATISTIC：导出统计结果<br>RISK：导出风险明细</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getFilters() 获取<p>通用过滤条件。支持的 Name：ResultStatus（通过状态 PASS/NOT_PASS）、Name（检测项名称，模糊搜索）、RiskLevel（风险等级 CRITICAL/HIGH/MEDIUM/LOW）、PolicyName（所属基线/策略名称，模糊搜索）。</p>
 * @method void setFilters(array $Filters) 设置<p>通用过滤条件。支持的 Name：ResultStatus（通过状态 PASS/NOT_PASS）、Name（检测项名称，模糊搜索）、RiskLevel（风险等级 CRITICAL/HIGH/MEDIUM/LOW）、PolicyName（所属基线/策略名称，模糊搜索）。</p>
 * @method string getCheckAssetType() 获取<p>废弃</p>
 * @method void setCheckAssetType(string $CheckAssetType) 设置<p>废弃</p>
 */
class CreateBaselineAggregatedItemExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>基线策略 ID 列表（可同时传多条做联合统计）。</p>
     */
    public $PolicyID;

    /**
     * @var integer <p>基线系统父分类 ID。</p>
     */
    public $ParentCategoryID;

    /**
     * @var integer <p>基线子分类 ID。</p>
     */
    public $CategoryID;

    /**
     * @var string <p>导出任务名称。不传时自动生成。</p>
     */
    public $Name;

    /**
     * @var string <p>导出类型，默认 RISK。<br>枚举值：<br>STATISTIC：导出统计结果<br>RISK：导出风险明细</p>
     */
    public $ExportType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>通用过滤条件。支持的 Name：ResultStatus（通过状态 PASS/NOT_PASS）、Name（检测项名称，模糊搜索）、RiskLevel（风险等级 CRITICAL/HIGH/MEDIUM/LOW）、PolicyName（所属基线/策略名称，模糊搜索）。</p>
     */
    public $Filters;

    /**
     * @var string <p>废弃</p>
     */
    public $CheckAssetType;

    /**
     * @param array $PolicyID <p>基线策略 ID 列表（可同时传多条做联合统计）。</p>
     * @param integer $ParentCategoryID <p>基线系统父分类 ID。</p>
     * @param integer $CategoryID <p>基线子分类 ID。</p>
     * @param string $Name <p>导出任务名称。不传时自动生成。</p>
     * @param string $ExportType <p>导出类型，默认 RISK。<br>枚举值：<br>STATISTIC：导出统计结果<br>RISK：导出风险明细</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $Filters <p>通用过滤条件。支持的 Name：ResultStatus（通过状态 PASS/NOT_PASS）、Name（检测项名称，模糊搜索）、RiskLevel（风险等级 CRITICAL/HIGH/MEDIUM/LOW）、PolicyName（所属基线/策略名称，模糊搜索）。</p>
     * @param string $CheckAssetType <p>废弃</p>
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
        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("CategoryID",$param) and $param["CategoryID"] !== null) {
            $this->CategoryID = $param["CategoryID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }
    }
}
