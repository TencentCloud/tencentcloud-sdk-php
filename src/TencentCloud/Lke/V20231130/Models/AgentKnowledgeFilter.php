<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 知识检索筛选范围
 *
 * @method integer getFilterType() 获取知识检索筛选方式; 0: 全部知识; 1:按文档和问答; 2: 按标签
 * @method void setFilterType(integer $FilterType) 设置知识检索筛选方式; 0: 全部知识; 1:按文档和问答; 2: 按标签
 * @method AgentKnowledgeFilterDocAndAnswer getDocAndAnswer() 获取文档和问答过滤器
 * @method void setDocAndAnswer(AgentKnowledgeFilterDocAndAnswer $DocAndAnswer) 设置文档和问答过滤器
 * @method AgentKnowledgeFilterTag getTag() 获取标签过滤器
 * @method void setTag(AgentKnowledgeFilterTag $Tag) 设置标签过滤器
 */
class AgentKnowledgeFilter extends AbstractModel
{
    /**
     * @var integer 知识检索筛选方式; 0: 全部知识; 1:按文档和问答; 2: 按标签
     */
    public $FilterType;

    /**
     * @var AgentKnowledgeFilterDocAndAnswer 文档和问答过滤器
     */
    public $DocAndAnswer;

    /**
     * @var AgentKnowledgeFilterTag 标签过滤器
     */
    public $Tag;

    /**
     * @param integer $FilterType 知识检索筛选方式; 0: 全部知识; 1:按文档和问答; 2: 按标签
     * @param AgentKnowledgeFilterDocAndAnswer $DocAndAnswer 文档和问答过滤器
     * @param AgentKnowledgeFilterTag $Tag 标签过滤器
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
        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("DocAndAnswer",$param) and $param["DocAndAnswer"] !== null) {
            $this->DocAndAnswer = new AgentKnowledgeFilterDocAndAnswer();
            $this->DocAndAnswer->deserialize($param["DocAndAnswer"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new AgentKnowledgeFilterTag();
            $this->Tag->deserialize($param["Tag"]);
        }
    }
}
