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
 * DescribeLMInformationExtractionTaskFieldFeedback请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行合同智能提取任务的员工信息。
 * @method void setOperator(UserInfo $Operator) 设置执行合同智能提取任务的员工信息。
 * @method string getTaskId() 获取合同智能提取任务ID，该参数通过调用接口[批量创建合同智能提取任务](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchInformationExtractionTask/)获取。
 * @method void setTaskId(string $TaskId) 设置合同智能提取任务ID，该参数通过调用接口[批量创建合同智能提取任务](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchInformationExtractionTask/)获取。
 */
class DescribeLMInformationExtractionTaskFieldFeedbackRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行合同智能提取任务的员工信息。
     */
    public $Operator;

    /**
     * @var string 合同智能提取任务ID，该参数通过调用接口[批量创建合同智能提取任务](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchInformationExtractionTask/)获取。
     */
    public $TaskId;

    /**
     * @param UserInfo $Operator 执行合同智能提取任务的员工信息。
     * @param string $TaskId 合同智能提取任务ID，该参数通过调用接口[批量创建合同智能提取任务](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/CreateBatchInformationExtractionTask/)获取。
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
