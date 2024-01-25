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
 * 【项目克隆任务模式】任务分页返回数据
 *
 * @method integer getTotalItems() 获取item 总数量
 * @method void setTotalItems(integer $TotalItems) 设置item 总数量
 * @method integer getTotalPages() 获取总页数
 * @method void setTotalPages(integer $TotalPages) 设置总页数
 * @method integer getCurrentPage() 获取当前页码
 * @method void setCurrentPage(integer $CurrentPage) 设置当前页码
 * @method integer getPageSize() 获取每页大小
 * @method void setPageSize(integer $PageSize) 设置每页大小
 * @method integer getCurrentPageItems() 获取当前页实际 item 数量
 * @method void setCurrentPageItems(integer $CurrentPageItems) 设置当前页实际 item 数量
 * @method array getItems() 获取任务列表信息-项目克隆
 * @method void setItems(array $Items) 设置任务列表信息-项目克隆
 */
class CloneTaskModePageInfoInfo extends AbstractModel
{
    /**
     * @var integer item 总数量
     */
    public $TotalItems;

    /**
     * @var integer 总页数
     */
    public $TotalPages;

    /**
     * @var integer 当前页码
     */
    public $CurrentPage;

    /**
     * @var integer 每页大小
     */
    public $PageSize;

    /**
     * @var integer 当前页实际 item 数量
     */
    public $CurrentPageItems;

    /**
     * @var array 任务列表信息-项目克隆
     */
    public $Items;

    /**
     * @param integer $TotalItems item 总数量
     * @param integer $TotalPages 总页数
     * @param integer $CurrentPage 当前页码
     * @param integer $PageSize 每页大小
     * @param integer $CurrentPageItems 当前页实际 item 数量
     * @param array $Items 任务列表信息-项目克隆
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
        if (array_key_exists("TotalItems",$param) and $param["TotalItems"] !== null) {
            $this->TotalItems = $param["TotalItems"];
        }

        if (array_key_exists("TotalPages",$param) and $param["TotalPages"] !== null) {
            $this->TotalPages = $param["TotalPages"];
        }

        if (array_key_exists("CurrentPage",$param) and $param["CurrentPage"] !== null) {
            $this->CurrentPage = $param["CurrentPage"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("CurrentPageItems",$param) and $param["CurrentPageItems"] !== null) {
            $this->CurrentPageItems = $param["CurrentPageItems"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new CloneTaskModeInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
