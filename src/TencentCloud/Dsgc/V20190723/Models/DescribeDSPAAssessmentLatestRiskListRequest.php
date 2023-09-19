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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAAssessmentLatestRiskList请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例Id
 * @method void setDspaId(string $DspaId) 设置dspa实例Id
 * @method integer getTemplateId() 获取评估模版id
 * @method void setTemplateId(integer $TemplateId) 设置评估模版id
 * @method integer getLimit() 获取限制条数
 * @method void setLimit(integer $Limit) 设置限制条数
 * @method string getOffset() 获取分页偏移量
 * @method void setOffset(string $Offset) 设置分页偏移量
 * @method string getDataSourceId() 获取资产名称，数据源id
 * @method void setDataSourceId(string $DataSourceId) 设置资产名称，数据源id
 * @method string getRiskType() 获取风险类型
 * @method void setRiskType(string $RiskType) 设置风险类型
 * @method string getControlItemId() 获取风险项
 * @method void setControlItemId(string $ControlItemId) 设置风险项
 * @method integer getStatus() 获取风险状态
 * @method void setStatus(integer $Status) 设置风险状态
 * @method string getBeginTime() 获取扫描开始时间
 * @method void setBeginTime(string $BeginTime) 设置扫描开始时间
 * @method string getEndTime() 获取扫描结束时间
 * @method void setEndTime(string $EndTime) 设置扫描结束时间
 * @method string getRiskLevel() 获取风险等级筛选
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级筛选
 * @method array getRiskSide() 获取风险面筛选
 * @method void setRiskSide(array $RiskSide) 设置风险面筛选
 * @method string getTimeSort() 获取ASC 正序，DESC倒叙
 * @method void setTimeSort(string $TimeSort) 设置ASC 正序，DESC倒叙
 */
class DescribeDSPAAssessmentLatestRiskListRequest extends AbstractModel
{
    /**
     * @var string dspa实例Id
     */
    public $DspaId;

    /**
     * @var integer 评估模版id
     */
    public $TemplateId;

    /**
     * @var integer 限制条数
     */
    public $Limit;

    /**
     * @var string 分页偏移量
     */
    public $Offset;

    /**
     * @var string 资产名称，数据源id
     */
    public $DataSourceId;

    /**
     * @var string 风险类型
     */
    public $RiskType;

    /**
     * @var string 风险项
     */
    public $ControlItemId;

    /**
     * @var integer 风险状态
     */
    public $Status;

    /**
     * @var string 扫描开始时间
     */
    public $BeginTime;

    /**
     * @var string 扫描结束时间
     */
    public $EndTime;

    /**
     * @var string 风险等级筛选
     */
    public $RiskLevel;

    /**
     * @var array 风险面筛选
     */
    public $RiskSide;

    /**
     * @var string ASC 正序，DESC倒叙
     */
    public $TimeSort;

    /**
     * @param string $DspaId dspa实例Id
     * @param integer $TemplateId 评估模版id
     * @param integer $Limit 限制条数
     * @param string $Offset 分页偏移量
     * @param string $DataSourceId 资产名称，数据源id
     * @param string $RiskType 风险类型
     * @param string $ControlItemId 风险项
     * @param integer $Status 风险状态
     * @param string $BeginTime 扫描开始时间
     * @param string $EndTime 扫描结束时间
     * @param string $RiskLevel 风险等级筛选
     * @param array $RiskSide 风险面筛选
     * @param string $TimeSort ASC 正序，DESC倒叙
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("ControlItemId",$param) and $param["ControlItemId"] !== null) {
            $this->ControlItemId = $param["ControlItemId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskSide",$param) and $param["RiskSide"] !== null) {
            $this->RiskSide = $param["RiskSide"];
        }

        if (array_key_exists("TimeSort",$param) and $param["TimeSort"] !== null) {
            $this->TimeSort = $param["TimeSort"];
        }
    }
}
