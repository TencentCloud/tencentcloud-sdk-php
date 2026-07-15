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
 * @method string getSessionId() 获取<p>会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getQuestion() 获取<p>问题内容</p>
 * @method void setQuestion(string $Question) 设置<p>问题内容</p>
 * @method string getContext() 获取<p>上下文</p>
 * @method void setContext(string $Context) 设置<p>上下文</p>
 * @method string getModel() 获取<p>模型</p>
 * @method void setModel(string $Model) 设置<p>模型</p>
 * @method boolean getDeepThinking() 获取<p>是否深度思考</p>
 * @method void setDeepThinking(boolean $DeepThinking) 设置<p>是否深度思考</p>
 * @method array getDataSourceIds() 获取<p>数据源id</p>
 * @method void setDataSourceIds(array $DataSourceIds) 设置<p>数据源id</p>
 * @method string getAgentType() 获取<p>agent类型</p>
 * @method void setAgentType(string $AgentType) 设置<p>agent类型</p>
 * @method string getOldRecordId() 获取<p>需要重新生成答案的记录ID</p>
 * @method void setOldRecordId(string $OldRecordId) 设置<p>需要重新生成答案的记录ID</p>
 * @method array getKnowledgeBaseIds() 获取<p>知识库id列表</p>
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) 设置<p>知识库id列表</p>
 * @method string getArchVersion() 获取<p>版本信息</p>
 * @method void setArchVersion(string $ArchVersion) 设置<p>版本信息</p>
 */
class ChatAIRequest extends AbstractModel
{
    /**
     * @var string <p>会话ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>问题内容</p>
     */
    public $Question;

    /**
     * @var string <p>上下文</p>
     */
    public $Context;

    /**
     * @var string <p>模型</p>
     */
    public $Model;

    /**
     * @var boolean <p>是否深度思考</p>
     */
    public $DeepThinking;

    /**
     * @var array <p>数据源id</p>
     */
    public $DataSourceIds;

    /**
     * @var string <p>agent类型</p>
     */
    public $AgentType;

    /**
     * @var string <p>需要重新生成答案的记录ID</p>
     */
    public $OldRecordId;

    /**
     * @var array <p>知识库id列表</p>
     */
    public $KnowledgeBaseIds;

    /**
     * @var string <p>版本信息</p>
     */
    public $ArchVersion;

    /**
     * @param string $SessionId <p>会话ID</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Question <p>问题内容</p>
     * @param string $Context <p>上下文</p>
     * @param string $Model <p>模型</p>
     * @param boolean $DeepThinking <p>是否深度思考</p>
     * @param array $DataSourceIds <p>数据源id</p>
     * @param string $AgentType <p>agent类型</p>
     * @param string $OldRecordId <p>需要重新生成答案的记录ID</p>
     * @param array $KnowledgeBaseIds <p>知识库id列表</p>
     * @param string $ArchVersion <p>版本信息</p>
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

        if (array_key_exists("ArchVersion",$param) and $param["ArchVersion"] !== null) {
            $this->ArchVersion = $param["ArchVersion"];
        }
    }
}
