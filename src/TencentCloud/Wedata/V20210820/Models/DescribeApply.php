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
 * 申请列表
 *
 * @method array getRows() 获取申请列表详情
 * @method void setRows(array $Rows) 设置申请列表详情
 * @method integer getTotalPageNumber() 获取总分页页码
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置总分页页码
 * @method integer getTotalCount() 获取总个数
 * @method void setTotalCount(integer $TotalCount) 设置总个数
 * @method integer getPageNumber() 获取分页页码
 * @method void setPageNumber(integer $PageNumber) 设置分页页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 */
class DescribeApply extends AbstractModel
{
    /**
     * @var array 申请列表详情
     */
    public $Rows;

    /**
     * @var integer 总分页页码
     */
    public $TotalPageNumber;

    /**
     * @var integer 总个数
     */
    public $TotalCount;

    /**
     * @var integer 分页页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @param array $Rows 申请列表详情
     * @param integer $TotalPageNumber 总分页页码
     * @param integer $TotalCount 总个数
     * @param integer $PageNumber 分页页码
     * @param integer $PageSize 分页大小
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
        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new Apply();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
