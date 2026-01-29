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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLMInformationExtractionTaskFieldFeedback请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行合同智能提取任务的员工信息。
 * @method void setOperator(UserInfo $Operator) 设置执行合同智能提取任务的员工信息。
 * @method string getId() 获取合同智能提取任务结果字段ID值。该参数通过调用接口[获取合同智能提取任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeInformationExtractionTask)返回中的Results. ExtractionFieldResults.Id获取。
 * @method void setId(string $Id) 设置合同智能提取任务结果字段ID值。该参数通过调用接口[获取合同智能提取任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeInformationExtractionTask)返回中的Results. ExtractionFieldResults.Id获取。
 * @method FeedbackInfo getFeedback() 获取合同智能提取任务反馈信息
 * @method void setFeedback(FeedbackInfo $Feedback) 设置合同智能提取任务反馈信息
 */
class CreateLMInformationExtractionTaskFieldFeedbackRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行合同智能提取任务的员工信息。
     */
    public $Operator;

    /**
     * @var string 合同智能提取任务结果字段ID值。该参数通过调用接口[获取合同智能提取任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeInformationExtractionTask)返回中的Results. ExtractionFieldResults.Id获取。
     */
    public $Id;

    /**
     * @var FeedbackInfo 合同智能提取任务反馈信息
     */
    public $Feedback;

    /**
     * @param UserInfo $Operator 执行合同智能提取任务的员工信息。
     * @param string $Id 合同智能提取任务结果字段ID值。该参数通过调用接口[获取合同智能提取任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeInformationExtractionTask)返回中的Results. ExtractionFieldResults.Id获取。
     * @param FeedbackInfo $Feedback 合同智能提取任务反馈信息
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Feedback",$param) and $param["Feedback"] !== null) {
            $this->Feedback = new FeedbackInfo();
            $this->Feedback->deserialize($param["Feedback"]);
        }
    }
}
