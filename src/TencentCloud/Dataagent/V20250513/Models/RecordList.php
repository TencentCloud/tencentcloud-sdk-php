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
 * 记录列表
 *
 * @method string getContext() 获取<p>会话上下文</p>
 * @method void setContext(string $Context) 设置<p>会话上下文</p>
 * @method string getRecordId() 获取<p>记录id</p>
 * @method void setRecordId(string $RecordId) 设置<p>记录id</p>
 * @method string getTraceId() 获取<p>追踪id</p>
 * @method void setTraceId(string $TraceId) 设置<p>追踪id</p>
 * @method string getSessionId() 获取<p>会话id</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话id</p>
 * @method string getQuestion() 获取<p>问题</p>
 * @method void setQuestion(string $Question) 设置<p>问题</p>
 * @method string getAnswer() 获取<p>回答</p>
 * @method void setAnswer(string $Answer) 设置<p>回答</p>
 * @method integer getFeedback() 获取<p>0-否定反馈, 1-肯定反馈</p>
 * @method void setFeedback(integer $Feedback) 设置<p>0-否定反馈, 1-肯定反馈</p>
 * @method string getErrorContext() 获取<p>错误信息</p>
 * @method void setErrorContext(string $ErrorContext) 设置<p>错误信息</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getModel() 获取<p>模型信息</p>
 * @method void setModel(string $Model) 设置<p>模型信息</p>
 */
class RecordList extends AbstractModel
{
    /**
     * @var string <p>会话上下文</p>
     */
    public $Context;

    /**
     * @var string <p>记录id</p>
     */
    public $RecordId;

    /**
     * @var string <p>追踪id</p>
     */
    public $TraceId;

    /**
     * @var string <p>会话id</p>
     */
    public $SessionId;

    /**
     * @var string <p>问题</p>
     */
    public $Question;

    /**
     * @var string <p>回答</p>
     */
    public $Answer;

    /**
     * @var integer <p>0-否定反馈, 1-肯定反馈</p>
     */
    public $Feedback;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrorContext;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>模型信息</p>
     */
    public $Model;

    /**
     * @param string $Context <p>会话上下文</p>
     * @param string $RecordId <p>记录id</p>
     * @param string $TraceId <p>追踪id</p>
     * @param string $SessionId <p>会话id</p>
     * @param string $Question <p>问题</p>
     * @param string $Answer <p>回答</p>
     * @param integer $Feedback <p>0-否定反馈, 1-肯定反馈</p>
     * @param string $ErrorContext <p>错误信息</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Model <p>模型信息</p>
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Feedback",$param) and $param["Feedback"] !== null) {
            $this->Feedback = $param["Feedback"];
        }

        if (array_key_exists("ErrorContext",$param) and $param["ErrorContext"] !== null) {
            $this->ErrorContext = $param["ErrorContext"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
