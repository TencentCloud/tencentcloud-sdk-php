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
 * ExportQAList请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
若要操作共享知识库，传KnowledgeBizId
 * @method void setBotBizId(string $BotBizId) 设置应用ID
若要操作共享知识库，传KnowledgeBizId
 * @method array getQaBizIds() 获取QA业务ID
 * @method void setQaBizIds(array $QaBizIds) 设置QA业务ID
 * @method QAQuery getFilters() 获取查询参数
Filters.pageNumber范围是>0,0<Filters.pageSize<=200
Filters.query用于内容检索，模糊匹配
Filters.AcceptStatus默认值是0，表示不筛选，返回所有状态
Filters.ReleaseStatus默认值是0，表示不筛选，返回所有状态
Filters.Source默认值是0，表示不筛选，返回所有来源。表示来源(1 文档生成 2 批量导入 3 手动添加)。
Filter.QueryType默认值是"filename"，表示查询类型。
ShowCurrCate表示，是否只展示当前分类的数据 0不是，1是
 * @method void setFilters(QAQuery $Filters) 设置查询参数
Filters.pageNumber范围是>0,0<Filters.pageSize<=200
Filters.query用于内容检索，模糊匹配
Filters.AcceptStatus默认值是0，表示不筛选，返回所有状态
Filters.ReleaseStatus默认值是0，表示不筛选，返回所有状态
Filters.Source默认值是0，表示不筛选，返回所有来源。表示来源(1 文档生成 2 批量导入 3 手动添加)。
Filter.QueryType默认值是"filename"，表示查询类型。
ShowCurrCate表示，是否只展示当前分类的数据 0不是，1是
 */
class ExportQAListRequest extends AbstractModel
{
    /**
     * @var string 应用ID
若要操作共享知识库，传KnowledgeBizId
     */
    public $BotBizId;

    /**
     * @var array QA业务ID
     */
    public $QaBizIds;

    /**
     * @var QAQuery 查询参数
Filters.pageNumber范围是>0,0<Filters.pageSize<=200
Filters.query用于内容检索，模糊匹配
Filters.AcceptStatus默认值是0，表示不筛选，返回所有状态
Filters.ReleaseStatus默认值是0，表示不筛选，返回所有状态
Filters.Source默认值是0，表示不筛选，返回所有来源。表示来源(1 文档生成 2 批量导入 3 手动添加)。
Filter.QueryType默认值是"filename"，表示查询类型。
ShowCurrCate表示，是否只展示当前分类的数据 0不是，1是
     */
    public $Filters;

    /**
     * @param string $BotBizId 应用ID
若要操作共享知识库，传KnowledgeBizId
     * @param array $QaBizIds QA业务ID
     * @param QAQuery $Filters 查询参数
Filters.pageNumber范围是>0,0<Filters.pageSize<=200
Filters.query用于内容检索，模糊匹配
Filters.AcceptStatus默认值是0，表示不筛选，返回所有状态
Filters.ReleaseStatus默认值是0，表示不筛选，返回所有状态
Filters.Source默认值是0，表示不筛选，返回所有来源。表示来源(1 文档生成 2 批量导入 3 手动添加)。
Filter.QueryType默认值是"filename"，表示查询类型。
ShowCurrCate表示，是否只展示当前分类的数据 0不是，1是
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

        if (array_key_exists("QaBizIds",$param) and $param["QaBizIds"] !== null) {
            $this->QaBizIds = $param["QaBizIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new QAQuery();
            $this->Filters->deserialize($param["Filters"]);
        }
    }
}
