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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRejectedQuestion请求参数结构体
 *
 * @method string getBotBizId() 获取<p>应用ID, 获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method void setBotBizId(string $BotBizId) 设置<p>应用ID, 获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
 * @method integer getPageNumber() 获取<p>页码（必须大于0）</p><p>默认值：1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码（必须大于0）</p><p>默认值：1</p>
 * @method integer getPageSize() 获取<p>每页数量（取值范围1-200）</p><p>默认值：15</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量（取值范围1-200）</p><p>默认值：15</p>
 * @method string getQuery() 获取<p>查询内容</p>
 * @method void setQuery(string $Query) 设置<p>查询内容</p>
 * @method array getFilters() 获取<p>过滤条件：<br>生效： EnableScope: 1,2,3,4</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件：<br>生效： EnableScope: 1,2,3,4</p>
 */
class ListRejectedQuestionRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID, 获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     */
    public $BotBizId;

    /**
     * @var integer <p>页码（必须大于0）</p><p>默认值：1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量（取值范围1-200）</p><p>默认值：15</p>
     */
    public $PageSize;

    /**
     * @var string <p>查询内容</p>
     */
    public $Query;

    /**
     * @var array <p>过滤条件：<br>生效： EnableScope: 1,2,3,4</p>
     */
    public $Filters;

    /**
     * @param string $BotBizId <p>应用ID, 获取方法参看如何获取   <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。</p>
     * @param integer $PageNumber <p>页码（必须大于0）</p><p>默认值：1</p>
     * @param integer $PageSize <p>每页数量（取值范围1-200）</p><p>默认值：15</p>
     * @param string $Query <p>查询内容</p>
     * @param array $Filters <p>过滤条件：<br>生效： EnableScope: 1,2,3,4</p>
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterItem();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
