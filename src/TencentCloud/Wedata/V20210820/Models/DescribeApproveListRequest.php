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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApproveList请求参数结构体
 *
 * @method string getApproveClassification() 获取审批分类key
 * @method void setApproveClassification(string $ApproveClassification) 设置审批分类key
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getPageNumber() 获取分页数
 * @method void setPageNumber(integer $PageNumber) 设置分页数
 * @method array getFilters() 获取自定义条件查询
 * @method void setFilters(array $Filters) 设置自定义条件查询
 * @method array getOrderFields() 获取排序字段
 * @method void setOrderFields(array $OrderFields) 设置排序字段
 */
class DescribeApproveListRequest extends AbstractModel
{
    /**
     * @var string 审批分类key
     */
    public $ApproveClassification;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 分页数
     */
    public $PageNumber;

    /**
     * @var array 自定义条件查询
     */
    public $Filters;

    /**
     * @var array 排序字段
     */
    public $OrderFields;

    /**
     * @param string $ApproveClassification 审批分类key
     * @param integer $PageSize 分页大小
     * @param integer $PageNumber 分页数
     * @param array $Filters 自定义条件查询
     * @param array $OrderFields 排序字段
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
        if (array_key_exists("ApproveClassification",$param) and $param["ApproveClassification"] !== null) {
            $this->ApproveClassification = $param["ApproveClassification"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterOptional();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderFieldOptional();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
