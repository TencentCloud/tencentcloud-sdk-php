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
 * Agent 知识库检索插件支持多知识库搜索
 *
 * @method string getKnowledgeBizId() 获取知识库id
 * @method void setKnowledgeBizId(string $KnowledgeBizId) 设置知识库id
 * @method integer getKnowledgeType() 获取0-应用内知识库
1-共享知识库
 * @method void setKnowledgeType(integer $KnowledgeType) 设置0-应用内知识库
1-共享知识库
 * @method integer getFilter() 获取0-全部知识
1-按文档和问答
2-按标签
 * @method void setFilter(integer $Filter) 设置0-全部知识
1-按文档和问答
2-按标签
 * @method array getDocBizIds() 获取文档id
 * @method void setDocBizIds(array $DocBizIds) 设置文档id
 * @method boolean getAllQa() 获取true:包含所有问答
false:不包含问答
 * @method void setAllQa(boolean $AllQa) 设置true:包含所有问答
false:不包含问答
 * @method AgentKnowledgeFilterTag getTag() 获取文档标签过滤器
 * @method void setTag(AgentKnowledgeFilterTag $Tag) 设置文档标签过滤器
 */
class AgentKnowledge extends AbstractModel
{
    /**
     * @var string 知识库id
     */
    public $KnowledgeBizId;

    /**
     * @var integer 0-应用内知识库
1-共享知识库
     */
    public $KnowledgeType;

    /**
     * @var integer 0-全部知识
1-按文档和问答
2-按标签
     */
    public $Filter;

    /**
     * @var array 文档id
     */
    public $DocBizIds;

    /**
     * @var boolean true:包含所有问答
false:不包含问答
     */
    public $AllQa;

    /**
     * @var AgentKnowledgeFilterTag 文档标签过滤器
     */
    public $Tag;

    /**
     * @param string $KnowledgeBizId 知识库id
     * @param integer $KnowledgeType 0-应用内知识库
1-共享知识库
     * @param integer $Filter 0-全部知识
1-按文档和问答
2-按标签
     * @param array $DocBizIds 文档id
     * @param boolean $AllQa true:包含所有问答
false:不包含问答
     * @param AgentKnowledgeFilterTag $Tag 文档标签过滤器
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
        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("DocBizIds",$param) and $param["DocBizIds"] !== null) {
            $this->DocBizIds = $param["DocBizIds"];
        }

        if (array_key_exists("AllQa",$param) and $param["AllQa"] !== null) {
            $this->AllQa = $param["AllQa"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = new AgentKnowledgeFilterTag();
            $this->Tag->deserialize($param["Tag"]);
        }
    }
}
