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
 * DescribeWorkflowRunSummaryList请求参数结构体
 *
 * @method string getAppId() 获取<p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method void setAppId(string $AppId) 设置<p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method integer getPageSize() 获取<p>每页数量(取值范围1-200)</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量(取值范围1-200)</p>
 * @method integer getPageNumber() 获取<p>页码(必须大于0)</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码(必须大于0)</p>
 * @method integer getDomain() 获取<p>运行环境。1:开发域，2:生产域    -</p>
 * @method void setDomain(integer $Domain) 设置<p>运行环境。1:开发域，2:生产域    -</p>
 * @method array getFilterList() 获取<p>参数过滤</p>
 * @method void setFilterList(array $FilterList) 设置<p>参数过滤</p>
 */
class DescribeWorkflowRunSummaryListRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     */
    public $AppId;

    /**
     * @var integer <p>每页数量(取值范围1-200)</p>
     */
    public $PageSize;

    /**
     * @var integer <p>页码(必须大于0)</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>运行环境。1:开发域，2:生产域    -</p>
     */
    public $Domain;

    /**
     * @var array <p>参数过滤</p>
     */
    public $FilterList;

    /**
     * @param string $AppId <p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     * @param integer $PageSize <p>每页数量(取值范围1-200)</p>
     * @param integer $PageNumber <p>页码(必须大于0)</p>
     * @param integer $Domain <p>运行环境。1:开发域，2:生产域    -</p>
     * @param array $FilterList <p>参数过滤</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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
