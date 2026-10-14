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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取截图模板详情列表
 *
 * @method integer getTotalCount() 获取<p>总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>总数</p>
 * @method string getSort() 获取<p>排序参数</p>
 * @method void setSort(string $Sort) 设置<p>排序参数</p>
 * @method string getOrder() 获取<p>排序顺序</p>
 * @method void setOrder(string $Order) 设置<p>排序顺序</p>
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method integer getPageSize() 获取<p>每页数目</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目</p>
 * @method array getList() 获取<p>截图模板列表</p>
 * @method void setList(array $List) 设置<p>截图模板列表</p>
 */
class ListVideoSnapshotTemplateData extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
     */
    public $TotalCount;

    /**
     * @var string <p>排序参数</p>
     */
    public $Sort;

    /**
     * @var string <p>排序顺序</p>
     */
    public $Order;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数目</p>
     */
    public $PageSize;

    /**
     * @var array <p>截图模板列表</p>
     */
    public $List;

    /**
     * @param integer $TotalCount <p>总数</p>
     * @param string $Sort <p>排序参数</p>
     * @param string $Order <p>排序顺序</p>
     * @param integer $PageNumber <p>页码</p>
     * @param integer $PageSize <p>每页数目</p>
     * @param array $List <p>截图模板列表</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new VideoSnapshotTemplateInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
