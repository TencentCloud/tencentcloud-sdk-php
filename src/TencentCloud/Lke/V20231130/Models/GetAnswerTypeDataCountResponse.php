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
 * GetAnswerTypeDataCount返回参数结构体
 *
 * @method integer getTotal() 获取总消息数
 * @method void setTotal(integer $Total) 设置总消息数
 * @method integer getModelReplyCount() 获取大模型直接回复总数
 * @method void setModelReplyCount(integer $ModelReplyCount) 设置大模型直接回复总数
 * @method integer getKnowledgeCount() 获取知识型回复总数
 * @method void setKnowledgeCount(integer $KnowledgeCount) 设置知识型回复总数
 * @method integer getTaskFlowCount() 获取任务流回复总数
 * @method void setTaskFlowCount(integer $TaskFlowCount) 设置任务流回复总数
 * @method integer getSearchEngineCount() 获取搜索引擎回复总数
 * @method void setSearchEngineCount(integer $SearchEngineCount) 设置搜索引擎回复总数
 * @method integer getImageUnderstandingCount() 获取图片理解回复总数
 * @method void setImageUnderstandingCount(integer $ImageUnderstandingCount) 设置图片理解回复总数
 * @method integer getRejectCount() 获取拒答回复总数
 * @method void setRejectCount(integer $RejectCount) 设置拒答回复总数
 * @method integer getSensitiveCount() 获取敏感回复总数
 * @method void setSensitiveCount(integer $SensitiveCount) 设置敏感回复总数
 * @method integer getConcurrentLimitCount() 获取并发超限回复总数
 * @method void setConcurrentLimitCount(integer $ConcurrentLimitCount) 设置并发超限回复总数
 * @method integer getUnknownIssuesCount() 获取未知问题回复总数
 * @method void setUnknownIssuesCount(integer $UnknownIssuesCount) 设置未知问题回复总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetAnswerTypeDataCountResponse extends AbstractModel
{
    /**
     * @var integer 总消息数
     */
    public $Total;

    /**
     * @var integer 大模型直接回复总数
     */
    public $ModelReplyCount;

    /**
     * @var integer 知识型回复总数
     */
    public $KnowledgeCount;

    /**
     * @var integer 任务流回复总数
     */
    public $TaskFlowCount;

    /**
     * @var integer 搜索引擎回复总数
     */
    public $SearchEngineCount;

    /**
     * @var integer 图片理解回复总数
     */
    public $ImageUnderstandingCount;

    /**
     * @var integer 拒答回复总数
     */
    public $RejectCount;

    /**
     * @var integer 敏感回复总数
     */
    public $SensitiveCount;

    /**
     * @var integer 并发超限回复总数
     */
    public $ConcurrentLimitCount;

    /**
     * @var integer 未知问题回复总数
     */
    public $UnknownIssuesCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 总消息数
     * @param integer $ModelReplyCount 大模型直接回复总数
     * @param integer $KnowledgeCount 知识型回复总数
     * @param integer $TaskFlowCount 任务流回复总数
     * @param integer $SearchEngineCount 搜索引擎回复总数
     * @param integer $ImageUnderstandingCount 图片理解回复总数
     * @param integer $RejectCount 拒答回复总数
     * @param integer $SensitiveCount 敏感回复总数
     * @param integer $ConcurrentLimitCount 并发超限回复总数
     * @param integer $UnknownIssuesCount 未知问题回复总数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ModelReplyCount",$param) and $param["ModelReplyCount"] !== null) {
            $this->ModelReplyCount = $param["ModelReplyCount"];
        }

        if (array_key_exists("KnowledgeCount",$param) and $param["KnowledgeCount"] !== null) {
            $this->KnowledgeCount = $param["KnowledgeCount"];
        }

        if (array_key_exists("TaskFlowCount",$param) and $param["TaskFlowCount"] !== null) {
            $this->TaskFlowCount = $param["TaskFlowCount"];
        }

        if (array_key_exists("SearchEngineCount",$param) and $param["SearchEngineCount"] !== null) {
            $this->SearchEngineCount = $param["SearchEngineCount"];
        }

        if (array_key_exists("ImageUnderstandingCount",$param) and $param["ImageUnderstandingCount"] !== null) {
            $this->ImageUnderstandingCount = $param["ImageUnderstandingCount"];
        }

        if (array_key_exists("RejectCount",$param) and $param["RejectCount"] !== null) {
            $this->RejectCount = $param["RejectCount"];
        }

        if (array_key_exists("SensitiveCount",$param) and $param["SensitiveCount"] !== null) {
            $this->SensitiveCount = $param["SensitiveCount"];
        }

        if (array_key_exists("ConcurrentLimitCount",$param) and $param["ConcurrentLimitCount"] !== null) {
            $this->ConcurrentLimitCount = $param["ConcurrentLimitCount"];
        }

        if (array_key_exists("UnknownIssuesCount",$param) and $param["UnknownIssuesCount"] !== null) {
            $this->UnknownIssuesCount = $param["UnknownIssuesCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
