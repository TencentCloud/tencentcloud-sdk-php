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
 * ChatAI请求参数结构体
 *
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getQuestion() 获取问题内容
 * @method void setQuestion(string $Question) 设置问题内容
 * @method string getContext() 获取上下文
 * @method void setContext(string $Context) 设置上下文
 * @method string getModel() 获取模型
 * @method void setModel(string $Model) 设置模型
 * @method boolean getDeepThinking() 获取是否深度思考
 * @method void setDeepThinking(boolean $DeepThinking) 设置是否深度思考
 * @method array getDataSourceIds() 获取数据源id
 * @method void setDataSourceIds(array $DataSourceIds) 设置数据源id
 * @method string getAgentType() 获取agent类型
 * @method void setAgentType(string $AgentType) 设置agent类型
 * @method string getOldRecordId() 获取需要重新生成答案的记录ID
 * @method void setOldRecordId(string $OldRecordId) 设置需要重新生成答案的记录ID
 * @method array getKnowledgeBaseIds() 获取知识库id列表
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) 设置知识库id列表
 */
class ChatAIRequest extends AbstractModel
{
    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 问题内容
     */
    public $Question;

    /**
     * @var string 上下文
     */
    public $Context;

    /**
     * @var string 模型
     */
    public $Model;

    /**
     * @var boolean 是否深度思考
     */
    public $DeepThinking;

    /**
     * @var array 数据源id
     */
    public $DataSourceIds;

    /**
     * @var string agent类型
     */
    public $AgentType;

    /**
     * @var string 需要重新生成答案的记录ID
     */
    public $OldRecordId;

    /**
     * @var array 知识库id列表
     */
    public $KnowledgeBaseIds;

    /**
     * @param string $SessionId 会话ID
     * @param string $InstanceId 实例ID
     * @param string $Question 问题内容
     * @param string $Context 上下文
     * @param string $Model 模型
     * @param boolean $DeepThinking 是否深度思考
     * @param array $DataSourceIds 数据源id
     * @param string $AgentType agent类型
     * @param string $OldRecordId 需要重新生成答案的记录ID
     * @param array $KnowledgeBaseIds 知识库id列表
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("DeepThinking",$param) and $param["DeepThinking"] !== null) {
            $this->DeepThinking = $param["DeepThinking"];
        }

        if (array_key_exists("DataSourceIds",$param) and $param["DataSourceIds"] !== null) {
            $this->DataSourceIds = $param["DataSourceIds"];
        }

        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("OldRecordId",$param) and $param["OldRecordId"] !== null) {
            $this->OldRecordId = $param["OldRecordId"];
        }

        if (array_key_exists("KnowledgeBaseIds",$param) and $param["KnowledgeBaseIds"] !== null) {
            $this->KnowledgeBaseIds = $param["KnowledgeBaseIds"];
        }
    }
}
