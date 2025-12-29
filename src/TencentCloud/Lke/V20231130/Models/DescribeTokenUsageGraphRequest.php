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
 * DescribeTokenUsageGraph请求参数结构体
 *
 * @method array getUinAccount() 获取子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
 * @method void setUinAccount(array $UinAccount) 设置子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
 * @method string getSubBizType() 获取知识引擎子业务类型:  FileParse(文档解析)、Embedding、Rewrite(多轮改写)、 Concurrency(并发)、KnowledgeSummary(知识总结)   KnowledgeQA(知识问答)、KnowledgeCapacity(知识库容量)、SearchEngine(搜索引擎)
 * @method void setSubBizType(string $SubBizType) 设置知识引擎子业务类型:  FileParse(文档解析)、Embedding、Rewrite(多轮改写)、 Concurrency(并发)、KnowledgeSummary(知识总结)   KnowledgeQA(知识问答)、KnowledgeCapacity(知识库容量)、SearchEngine(搜索引擎)
 * @method string getModelName() 获取模型标识
 * @method void setModelName(string $ModelName) 设置模型标识
 * @method string getStartTime() 获取开始时间戳, 单位为秒(废弃)
 * @method void setStartTime(string $StartTime) 设置开始时间戳, 单位为秒(废弃)
 * @method string getEndTime() 获取结束时间戳, 单位为秒(废弃)
 * @method void setEndTime(string $EndTime) 设置结束时间戳, 单位为秒(废弃)
 * @method array getAppBizIds() 获取应用ID列表。不填时：若指定SpaceId则查该空间所有应用；否则查用户下所有应用
 * @method void setAppBizIds(array $AppBizIds) 设置应用ID列表。不填时：若指定SpaceId则查该空间所有应用；否则查用户下所有应用
 * @method string getAppType() 获取应用类型。可选值：knowledge_qa(知识问答)/plugin_parsing_qa(插件)/shared_knowledge(知识库)/evaluate_test(评测)。不填时查所有类型
 * @method void setAppType(string $AppType) 设置应用类型。可选值：knowledge_qa(知识问答)/plugin_parsing_qa(插件)/shared_knowledge(知识库)/evaluate_test(评测)。不填时查所有类型
 * @method array getSubScenes() 获取筛选子场景
 * @method void setSubScenes(array $SubScenes) 设置筛选子场景
 * @method integer getStatStartTime() 获取开始时间。Unix 时间戳，单位是秒，默认为空。
 * @method void setStatStartTime(integer $StatStartTime) 设置开始时间。Unix 时间戳，单位是秒，默认为空。
 * @method integer getStatEndTime() 获取结束时间。Unix 时间戳，单位是秒，默认为空。
 * @method void setStatEndTime(integer $StatEndTime) 设置结束时间。Unix 时间戳，单位是秒，默认为空。
 */
class DescribeTokenUsageGraphRequest extends AbstractModel
{
    /**
     * @var array 子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
     */
    public $UinAccount;

    /**
     * @var string 知识引擎子业务类型:  FileParse(文档解析)、Embedding、Rewrite(多轮改写)、 Concurrency(并发)、KnowledgeSummary(知识总结)   KnowledgeQA(知识问答)、KnowledgeCapacity(知识库容量)、SearchEngine(搜索引擎)
     */
    public $SubBizType;

    /**
     * @var string 模型标识
     */
    public $ModelName;

    /**
     * @var string 开始时间戳, 单位为秒(废弃)
     * @deprecated
     */
    public $StartTime;

    /**
     * @var string 结束时间戳, 单位为秒(废弃)
     * @deprecated
     */
    public $EndTime;

    /**
     * @var array 应用ID列表。不填时：若指定SpaceId则查该空间所有应用；否则查用户下所有应用
     */
    public $AppBizIds;

    /**
     * @var string 应用类型。可选值：knowledge_qa(知识问答)/plugin_parsing_qa(插件)/shared_knowledge(知识库)/evaluate_test(评测)。不填时查所有类型
     */
    public $AppType;

    /**
     * @var array 筛选子场景
     */
    public $SubScenes;

    /**
     * @var integer 开始时间。Unix 时间戳，单位是秒，默认为空。
     */
    public $StatStartTime;

    /**
     * @var integer 结束时间。Unix 时间戳，单位是秒，默认为空。
     */
    public $StatEndTime;

    /**
     * @param array $UinAccount 子账号标识列表，支持批量查询多个子账号。不填时查询主账号下所有子账号的汇总数据
     * @param string $SubBizType 知识引擎子业务类型:  FileParse(文档解析)、Embedding、Rewrite(多轮改写)、 Concurrency(并发)、KnowledgeSummary(知识总结)   KnowledgeQA(知识问答)、KnowledgeCapacity(知识库容量)、SearchEngine(搜索引擎)
     * @param string $ModelName 模型标识
     * @param string $StartTime 开始时间戳, 单位为秒(废弃)
     * @param string $EndTime 结束时间戳, 单位为秒(废弃)
     * @param array $AppBizIds 应用ID列表。不填时：若指定SpaceId则查该空间所有应用；否则查用户下所有应用
     * @param string $AppType 应用类型。可选值：knowledge_qa(知识问答)/plugin_parsing_qa(插件)/shared_knowledge(知识库)/evaluate_test(评测)。不填时查所有类型
     * @param array $SubScenes 筛选子场景
     * @param integer $StatStartTime 开始时间。Unix 时间戳，单位是秒，默认为空。
     * @param integer $StatEndTime 结束时间。Unix 时间戳，单位是秒，默认为空。
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
        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("SubBizType",$param) and $param["SubBizType"] !== null) {
            $this->SubBizType = $param["SubBizType"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppBizIds",$param) and $param["AppBizIds"] !== null) {
            $this->AppBizIds = $param["AppBizIds"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("SubScenes",$param) and $param["SubScenes"] !== null) {
            $this->SubScenes = $param["SubScenes"];
        }

        if (array_key_exists("StatStartTime",$param) and $param["StatStartTime"] !== null) {
            $this->StatStartTime = $param["StatStartTime"];
        }

        if (array_key_exists("StatEndTime",$param) and $param["StatEndTime"] !== null) {
            $this->StatEndTime = $param["StatEndTime"];
        }
    }
}
