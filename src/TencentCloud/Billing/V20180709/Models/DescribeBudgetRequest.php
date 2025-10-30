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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBudget请求参数结构体
 *
 * @method integer getPageNo() 获取页码，整型
 * @method void setPageNo(integer $PageNo) 设置页码，整型
 * @method integer getPageSize() 获取每页数目，整型
 * @method void setPageSize(integer $PageSize) 设置每页数目，整型
 * @method string getBudgetId() 获取预算项目id
 * @method void setBudgetId(string $BudgetId) 设置预算项目id
 * @method string getBudgetName() 获取预算名称
 * @method void setBudgetName(string $BudgetName) 设置预算名称
 * @method string getBudgetStatus() 获取EXPIRED失效，ACTIVE生效中， ACTIVATED待生效
 * @method void setBudgetStatus(string $BudgetStatus) 设置EXPIRED失效，ACTIVE生效中， ACTIVATED待生效
 * @method array getCycleTypes() 获取DAY天 MONTH月度 QUARTER季度 YEAR年度
 * @method void setCycleTypes(array $CycleTypes) 设置DAY天 MONTH月度 QUARTER季度 YEAR年度
 */
class DescribeBudgetRequest extends AbstractModel
{
    /**
     * @var integer 页码，整型
     */
    public $PageNo;

    /**
     * @var integer 每页数目，整型
     */
    public $PageSize;

    /**
     * @var string 预算项目id
     */
    public $BudgetId;

    /**
     * @var string 预算名称
     */
    public $BudgetName;

    /**
     * @var string EXPIRED失效，ACTIVE生效中， ACTIVATED待生效
     */
    public $BudgetStatus;

    /**
     * @var array DAY天 MONTH月度 QUARTER季度 YEAR年度
     */
    public $CycleTypes;

    /**
     * @param integer $PageNo 页码，整型
     * @param integer $PageSize 每页数目，整型
     * @param string $BudgetId 预算项目id
     * @param string $BudgetName 预算名称
     * @param string $BudgetStatus EXPIRED失效，ACTIVE生效中， ACTIVATED待生效
     * @param array $CycleTypes DAY天 MONTH月度 QUARTER季度 YEAR年度
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("BudgetStatus",$param) and $param["BudgetStatus"] !== null) {
            $this->BudgetStatus = $param["BudgetStatus"];
        }

        if (array_key_exists("CycleTypes",$param) and $param["CycleTypes"] !== null) {
            $this->CycleTypes = $param["CycleTypes"];
        }
    }
}
