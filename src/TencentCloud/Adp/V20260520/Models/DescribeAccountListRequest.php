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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountList请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>页码</p><p>从0开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p><p>从0开始</p>
 * @method integer getPageSize() 获取<p>分页数量</p><p>取值范围：[1, 100]</p><p>单位：个</p><p>最大100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页数量</p><p>取值范围：[1, 100]</p><p>单位：个</p><p>最大100</p>
 * @method array getFilterList() 获取<p>参数过滤</p><p>支持SpaceId,NIckName 过滤查询</p>
 * @method void setFilterList(array $FilterList) 设置<p>参数过滤</p><p>支持SpaceId,NIckName 过滤查询</p>
 */
class DescribeAccountListRequest extends AbstractModel
{
    /**
     * @var integer <p>页码</p><p>从0开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>分页数量</p><p>取值范围：[1, 100]</p><p>单位：个</p><p>最大100</p>
     */
    public $PageSize;

    /**
     * @var array <p>参数过滤</p><p>支持SpaceId,NIckName 过滤查询</p>
     */
    public $FilterList;

    /**
     * @param integer $PageNumber <p>页码</p><p>从0开始</p>
     * @param integer $PageSize <p>分页数量</p><p>取值范围：[1, 100]</p><p>单位：个</p><p>最大100</p>
     * @param array $FilterList <p>参数过滤</p><p>支持SpaceId,NIckName 过滤查询</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
