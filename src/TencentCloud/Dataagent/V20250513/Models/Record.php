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
 * 问答结构
 *
 * @method string getQuestion() 获取问题内容
 * @method void setQuestion(string $Question) 设置问题内容
 * @method string getAnswer() 获取回答内容
 * @method void setAnswer(string $Answer) 设置回答内容
 * @method string getThink() 获取思考内容
 * @method void setThink(string $Think) 设置思考内容
 * @method array getTaskList() 获取任务列表
 * @method void setTaskList(array $TaskList) 设置任务列表
 * @method string getCreateTime() 获取记录创建时间
 * @method void setCreateTime(string $CreateTime) 设置记录创建时间
 * @method string getUpdateTime() 获取记录更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置记录更新时间
 * @method string getRecordId() 获取记录id
 * @method void setRecordId(string $RecordId) 设置记录id
 * @method string getFinalSummary() 获取总结内容
 * @method void setFinalSummary(string $FinalSummary) 设置总结内容
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method integer getFeedback() 获取1=赞，2=踩，0=无反馈
 * @method void setFeedback(integer $Feedback) 设置1=赞，2=踩，0=无反馈
 * @method string getDbInfo() 获取数据库信息
 * @method void setDbInfo(string $DbInfo) 设置数据库信息
 * @method string getErrorContext() 获取错误信息
 * @method void setErrorContext(string $ErrorContext) 设置错误信息
 * @method string getTaskListStr() 获取TaskList的string字符串
 * @method void setTaskListStr(string $TaskListStr) 设置TaskList的string字符串
 * @method array getKnowledgeBaseIds() 获取知识库id列表
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) 设置知识库id列表
 * @method string getContext() 获取上下文
 * @method void setContext(string $Context) 设置上下文
 */
class Record extends AbstractModel
{
    /**
     * @var string 问题内容
     */
    public $Question;

    /**
     * @var string 回答内容
     */
    public $Answer;

    /**
     * @var string 思考内容
     */
    public $Think;

    /**
     * @var array 任务列表
     */
    public $TaskList;

    /**
     * @var string 记录创建时间
     */
    public $CreateTime;

    /**
     * @var string 记录更新时间
     */
    public $UpdateTime;

    /**
     * @var string 记录id
     */
    public $RecordId;

    /**
     * @var string 总结内容
     */
    public $FinalSummary;

    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var integer 1=赞，2=踩，0=无反馈
     */
    public $Feedback;

    /**
     * @var string 数据库信息
     */
    public $DbInfo;

    /**
     * @var string 错误信息
     */
    public $ErrorContext;

    /**
     * @var string TaskList的string字符串
     */
    public $TaskListStr;

    /**
     * @var array 知识库id列表
     */
    public $KnowledgeBaseIds;

    /**
     * @var string 上下文
     */
    public $Context;

    /**
     * @param string $Question 问题内容
     * @param string $Answer 回答内容
     * @param string $Think 思考内容
     * @param array $TaskList 任务列表
     * @param string $CreateTime 记录创建时间
     * @param string $UpdateTime 记录更新时间
     * @param string $RecordId 记录id
     * @param string $FinalSummary 总结内容
     * @param string $SessionId 会话ID
     * @param integer $Feedback 1=赞，2=踩，0=无反馈
     * @param string $DbInfo 数据库信息
     * @param string $ErrorContext 错误信息
     * @param string $TaskListStr TaskList的string字符串
     * @param array $KnowledgeBaseIds 知识库id列表
     * @param string $Context 上下文
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Think",$param) and $param["Think"] !== null) {
            $this->Think = $param["Think"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new Task();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("FinalSummary",$param) and $param["FinalSummary"] !== null) {
            $this->FinalSummary = $param["FinalSummary"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Feedback",$param) and $param["Feedback"] !== null) {
            $this->Feedback = $param["Feedback"];
        }

        if (array_key_exists("DbInfo",$param) and $param["DbInfo"] !== null) {
            $this->DbInfo = $param["DbInfo"];
        }

        if (array_key_exists("ErrorContext",$param) and $param["ErrorContext"] !== null) {
            $this->ErrorContext = $param["ErrorContext"];
        }

        if (array_key_exists("TaskListStr",$param) and $param["TaskListStr"] !== null) {
            $this->TaskListStr = $param["TaskListStr"];
        }

        if (array_key_exists("KnowledgeBaseIds",$param) and $param["KnowledgeBaseIds"] !== null) {
            $this->KnowledgeBaseIds = $param["KnowledgeBaseIds"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
