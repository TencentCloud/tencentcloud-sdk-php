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
 * DescribeKBSummaryList请求参数结构体
 *
 * @method string getSpaceId() 获取<p>工作空间 ID</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>工作空间 ID</p>
 * @method array getFilterList() 获取<p>通用过滤</p>
 * @method void setFilterList(array $FilterList) 设置<p>通用过滤</p>
 * @method integer getPageNumber() 获取<p>分页页码，从 0 开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码，从 0 开始</p>
 * @method integer getPageSize() 获取<p>每页数量，默认 10，最大 100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，默认 10，最大 100</p>
 * @method string getQuery() 获取<p>关键词</p>
 * @method void setQuery(string $Query) 设置<p>关键词</p>
 */
class DescribeKBSummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间 ID</p>
     */
    public $SpaceId;

    /**
     * @var array <p>通用过滤</p>
     */
    public $FilterList;

    /**
     * @var integer <p>分页页码，从 0 开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量，默认 10，最大 100</p>
     */
    public $PageSize;

    /**
     * @var string <p>关键词</p>
     */
    public $Query;

    /**
     * @param string $SpaceId <p>工作空间 ID</p>
     * @param array $FilterList <p>通用过滤</p>
     * @param integer $PageNumber <p>分页页码，从 0 开始</p>
     * @param integer $PageSize <p>每页数量，默认 10，最大 100</p>
     * @param string $Query <p>关键词</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
