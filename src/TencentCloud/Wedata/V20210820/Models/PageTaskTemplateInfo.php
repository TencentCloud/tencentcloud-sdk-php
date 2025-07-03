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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务模版分页
 *
 * @method array getItems() 获取任务集合信息
 * @method void setItems(array $Items) 设置任务集合信息
 * @method integer getPageCount() 获取总页数
 * @method void setPageCount(integer $PageCount) 设置总页数
 * @method integer getTotalCount() 获取总数量
 * @method void setTotalCount(integer $TotalCount) 设置总数量
 * @method integer getPageNumber() 获取当前页
 * @method void setPageNumber(integer $PageNumber) 设置当前页
 * @method integer getPageSize() 获取每页显示数
 * @method void setPageSize(integer $PageSize) 设置每页显示数
 */
class PageTaskTemplateInfo extends AbstractModel
{
    /**
     * @var array 任务集合信息
     */
    public $Items;

    /**
     * @var integer 总页数
     */
    public $PageCount;

    /**
     * @var integer 总数量
     */
    public $TotalCount;

    /**
     * @var integer 当前页
     */
    public $PageNumber;

    /**
     * @var integer 每页显示数
     */
    public $PageSize;

    /**
     * @param array $Items 任务集合信息
     * @param integer $PageCount 总页数
     * @param integer $TotalCount 总数量
     * @param integer $PageNumber 当前页
     * @param integer $PageSize 每页显示数
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
                $obj = new CodeTemplateDetail();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
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
