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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryChunkList请求参数结构体
 *
 * @method integer getPage() 获取<p>表示第一页</p>
 * @method void setPage(integer $Page) 设置<p>表示第一页</p>
 * @method integer getPageSize() 获取<p>默认一页展示 10 条</p>
 * @method void setPageSize(integer $PageSize) 设置<p>默认一页展示 10 条</p>
 * @method string getKnowledgeBaseId() 获取<p>知识库id</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置<p>知识库id</p>
 */
class QueryChunkListRequest extends AbstractModel
{
    /**
     * @var integer <p>表示第一页</p>
     */
    public $Page;

    /**
     * @var integer <p>默认一页展示 10 条</p>
     */
    public $PageSize;

    /**
     * @var string <p>知识库id</p>
     */
    public $KnowledgeBaseId;

    /**
     * @param integer $Page <p>表示第一页</p>
     * @param integer $PageSize <p>默认一页展示 10 条</p>
     * @param string $KnowledgeBaseId <p>知识库id</p>
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }
    }
}
