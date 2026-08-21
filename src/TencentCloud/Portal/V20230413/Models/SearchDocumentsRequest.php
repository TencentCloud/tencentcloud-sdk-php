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
namespace TencentCloud\Portal\V20230413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchDocuments请求参数结构体
 *
 * @method string getQuery() 获取<p>搜索关键词</p>
 * @method void setQuery(string $Query) 设置<p>搜索关键词</p>
 * @method integer getPage() 获取<p>页码</p><p>取值范围：[1, 99]</p>
 * @method void setPage(integer $Page) 设置<p>页码</p><p>取值范围：[1, 99]</p>
 * @method integer getPageSize() 获取<p>每页条数</p><p>取值范围：[1, 20]</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页条数</p><p>取值范围：[1, 20]</p>
 * @method string getProductName() 获取<p>产品名称</p>
 * @method void setProductName(string $ProductName) 设置<p>产品名称</p>
 */
class SearchDocumentsRequest extends AbstractModel
{
    /**
     * @var string <p>搜索关键词</p>
     */
    public $Query;

    /**
     * @var integer <p>页码</p><p>取值范围：[1, 99]</p>
     */
    public $Page;

    /**
     * @var integer <p>每页条数</p><p>取值范围：[1, 20]</p>
     */
    public $PageSize;

    /**
     * @var string <p>产品名称</p>
     */
    public $ProductName;

    /**
     * @param string $Query <p>搜索关键词</p>
     * @param integer $Page <p>页码</p><p>取值范围：[1, 99]</p>
     * @param integer $PageSize <p>每页条数</p><p>取值范围：[1, 20]</p>
     * @param string $ProductName <p>产品名称</p>
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
