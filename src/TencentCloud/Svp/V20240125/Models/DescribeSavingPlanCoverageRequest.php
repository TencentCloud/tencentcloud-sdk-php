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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSavingPlanCoverage请求参数结构体
 *
 * @method string getStartDate() 获取费用起始日期，格式yyyy-MM-dd
 * @method void setStartDate(string $StartDate) 设置费用起始日期，格式yyyy-MM-dd
 * @method string getEndDate() 获取费用结束日期，格式yyyy-MM-dd
 * @method void setEndDate(string $EndDate) 设置费用结束日期，格式yyyy-MM-dd
 * @method integer getOffset() 获取分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
 * @method void setOffset(integer $Offset) 设置分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
 * @method integer getLimit() 获取数量，最大值为200
 * @method void setLimit(integer $Limit) 设置数量，最大值为200
 * @method integer getPeriodType() 获取取值包括1（缺省值）和2，1表示按天统计覆盖率，2表示按月统计覆盖率，此参数仅影响返回的RateSet聚合粒度，不影响返回的DetailSet
 * @method void setPeriodType(integer $PeriodType) 设置取值包括1（缺省值）和2，1表示按天统计覆盖率，2表示按月统计覆盖率，此参数仅影响返回的RateSet聚合粒度，不影响返回的DetailSet
 */
class DescribeSavingPlanCoverageRequest extends AbstractModel
{
    /**
     * @var string 费用起始日期，格式yyyy-MM-dd
     */
    public $StartDate;

    /**
     * @var string 费用结束日期，格式yyyy-MM-dd
     */
    public $EndDate;

    /**
     * @var integer 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
     */
    public $Offset;

    /**
     * @var integer 数量，最大值为200
     */
    public $Limit;

    /**
     * @var integer 取值包括1（缺省值）和2，1表示按天统计覆盖率，2表示按月统计覆盖率，此参数仅影响返回的RateSet聚合粒度，不影响返回的DetailSet
     */
    public $PeriodType;

    /**
     * @param string $StartDate 费用起始日期，格式yyyy-MM-dd
     * @param string $EndDate 费用结束日期，格式yyyy-MM-dd
     * @param integer $Offset 分页偏移量，Offset=0表示第一页，如果Limit=100，则Offset=100表示第二页，Offset=200表示第三页，以此类推
     * @param integer $Limit 数量，最大值为200
     * @param integer $PeriodType 取值包括1（缺省值）和2，1表示按天统计覆盖率，2表示按月统计覆盖率，此参数仅影响返回的RateSet聚合粒度，不影响返回的DetailSet
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }
    }
}
