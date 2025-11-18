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
 * ListDocCate请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method integer getQueryType() 获取分类查询类型：0-全量查询整棵标签树，1-根据父节点BizId分页查询子节点，2-关键词检索所有匹配的分类链路
 * @method void setQueryType(integer $QueryType) 设置分类查询类型：0-全量查询整棵标签树，1-根据父节点BizId分页查询子节点，2-关键词检索所有匹配的分类链路
 * @method string getParentCateBizId() 获取QueryType=1时，父节点分类ID
 * @method void setParentCateBizId(string $ParentCateBizId) 设置QueryType=1时，父节点分类ID
 * @method integer getPageNumber() 获取QueryType=1时，页码（从1开始）
 * @method void setPageNumber(integer $PageNumber) 设置QueryType=1时，页码（从1开始）
 * @method integer getPageSize() 获取每页数量（默认10）
 * @method void setPageSize(integer $PageSize) 设置每页数量（默认10）
 * @method string getQuery() 获取QueryType=2时，搜索内容
 * @method void setQuery(string $Query) 设置QueryType=2时，搜索内容
 */
class ListDocCateRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var integer 分类查询类型：0-全量查询整棵标签树，1-根据父节点BizId分页查询子节点，2-关键词检索所有匹配的分类链路
     */
    public $QueryType;

    /**
     * @var string QueryType=1时，父节点分类ID
     */
    public $ParentCateBizId;

    /**
     * @var integer QueryType=1时，页码（从1开始）
     */
    public $PageNumber;

    /**
     * @var integer 每页数量（默认10）
     */
    public $PageSize;

    /**
     * @var string QueryType=2时，搜索内容
     */
    public $Query;

    /**
     * @param string $BotBizId 应用ID
     * @param integer $QueryType 分类查询类型：0-全量查询整棵标签树，1-根据父节点BizId分页查询子节点，2-关键词检索所有匹配的分类链路
     * @param string $ParentCateBizId QueryType=1时，父节点分类ID
     * @param integer $PageNumber QueryType=1时，页码（从1开始）
     * @param integer $PageSize 每页数量（默认10）
     * @param string $Query QueryType=2时，搜索内容
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

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("ParentCateBizId",$param) and $param["ParentCateBizId"] !== null) {
            $this->ParentCateBizId = $param["ParentCateBizId"];
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
