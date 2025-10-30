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
 * 知识库问答插件
 *
 * @method AgentKnowledgeFilter getFilter() 获取知识检索筛选范围
 * @method void setFilter(AgentKnowledgeFilter $Filter) 设置知识检索筛选范围
 */
class AgentKnowledgeQAPlugin extends AbstractModel
{
    /**
     * @var AgentKnowledgeFilter 知识检索筛选范围
     */
    public $Filter;

    /**
     * @param AgentKnowledgeFilter $Filter 知识检索筛选范围
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
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AgentKnowledgeFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
