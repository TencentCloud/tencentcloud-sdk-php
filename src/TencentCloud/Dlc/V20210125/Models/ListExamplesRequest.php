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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListExamples请求参数结构体
 *
 * @method string getCategory() 获取<p>分类</p>
 * @method void setCategory(string $Category) 设置<p>分类</p>
 * @method string getKeyword() 获取<p>关键词</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键词</p>
 * @method array getTags() 获取<p>标签数组，多个标签 AND 关系；与 Category/Keyword 之间也是 AND</p>
 * @method void setTags(array $Tags) 设置<p>标签数组，多个标签 AND 关系；与 Category/Keyword 之间也是 AND</p>
 * @method string getOrderBy() 获取<p>DEFAULT（sort_order ASC, create_time DESC）/ POPULARITY（按热度降序），非法值降级为 DEFAULT</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>DEFAULT（sort_order ASC, create_time DESC）/ POPULARITY（按热度降序），非法值降级为 DEFAULT</p>
 * @method integer getPage() 获取<p>当前页码（从1开始）</p>
 * @method void setPage(integer $Page) 设置<p>当前页码（从1开始）</p>
 * @method integer getPageSize() 获取<p>页数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>页数</p>
 */
class ListExamplesRequest extends AbstractModel
{
    /**
     * @var string <p>分类</p>
     */
    public $Category;

    /**
     * @var string <p>关键词</p>
     */
    public $Keyword;

    /**
     * @var array <p>标签数组，多个标签 AND 关系；与 Category/Keyword 之间也是 AND</p>
     */
    public $Tags;

    /**
     * @var string <p>DEFAULT（sort_order ASC, create_time DESC）/ POPULARITY（按热度降序），非法值降级为 DEFAULT</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>当前页码（从1开始）</p>
     */
    public $Page;

    /**
     * @var integer <p>页数</p>
     */
    public $PageSize;

    /**
     * @param string $Category <p>分类</p>
     * @param string $Keyword <p>关键词</p>
     * @param array $Tags <p>标签数组，多个标签 AND 关系；与 Category/Keyword 之间也是 AND</p>
     * @param string $OrderBy <p>DEFAULT（sort_order ASC, create_time DESC）/ POPULARITY（按热度降序），非法值降级为 DEFAULT</p>
     * @param integer $Page <p>当前页码（从1开始）</p>
     * @param integer $PageSize <p>页数</p>
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
        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
