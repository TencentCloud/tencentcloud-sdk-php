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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTablePage
 *
 * @method array getItems() 获取Schema记录列表
 * @method void setItems(array $Items) 设置Schema记录列表
 * @method integer getPageCount() 获取分页总页数
 * @method void setPageCount(integer $PageCount) 设置分页总页数
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getPageNumber() 获取分页页码
 * @method void setPageNumber(integer $PageNumber) 设置分页页码
 * @method integer getTotalCount() 获取记录总数
 * @method void setTotalCount(integer $TotalCount) 设置记录总数
 */
class ListTablePage extends AbstractModel
{
    /**
     * @var array Schema记录列表
     */
    public $Items;

    /**
     * @var integer 分页总页数
     */
    public $PageCount;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 分页页码
     */
    public $PageNumber;

    /**
     * @var integer 记录总数
     */
    public $TotalCount;

    /**
     * @param array $Items Schema记录列表
     * @param integer $PageCount 分页总页数
     * @param integer $PageSize 分页大小
     * @param integer $PageNumber 分页页码
     * @param integer $TotalCount 记录总数
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TableInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
