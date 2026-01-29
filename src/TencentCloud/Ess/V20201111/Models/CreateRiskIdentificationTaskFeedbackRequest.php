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
 * CreateRiskIdentificationTaskFeedback请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行合同审查任务的员工信息。
 * @method void setOperator(UserInfo $Operator) 设置执行合同审查任务的员工信息。
 * @method string getRiskId() 获取合同审查风险结果ID，取值如下：

- 反馈风险项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取Risks.RiskId值）。

- 反馈通过项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取ApprovedLists.RiskId值）
 * @method void setRiskId(string $RiskId) 设置合同审查风险结果ID，取值如下：

- 反馈风险项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取Risks.RiskId值）。

- 反馈通过项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取ApprovedLists.RiskId值）
 * @method integer getFeedbackResult() 获取反馈结果

- 1: 其他错误
- 2: 审查错误
- 3: 审查正确
 * @method void setFeedbackResult(integer $FeedbackResult) 设置反馈结果

- 1: 其他错误
- 2: 审查错误
- 3: 审查正确
 * @method string getReason() 获取审查反馈原因
 * @method void setReason(string $Reason) 设置审查反馈原因
 */
class CreateRiskIdentificationTaskFeedbackRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行合同审查任务的员工信息。
     */
    public $Operator;

    /**
     * @var string 合同审查风险结果ID，取值如下：

- 反馈风险项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取Risks.RiskId值）。

- 反馈通过项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取ApprovedLists.RiskId值）
     */
    public $RiskId;

    /**
     * @var integer 反馈结果

- 1: 其他错误
- 2: 审查错误
- 3: 审查正确
     */
    public $FeedbackResult;

    /**
     * @var string 审查反馈原因
     */
    public $Reason;

    /**
     * @param UserInfo $Operator 执行合同审查任务的员工信息。
     * @param string $RiskId 合同审查风险结果ID，取值如下：

- 反馈风险项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取Risks.RiskId值）。

- 反馈通过项结果。该参数通过调用接口[获取合同审查任务详情](https://qian.tencent.com/developers/companyApis/%E5%90%88%E5%90%8C%E6%99%BA%E8%83%BD%E7%9B%B8%E5%85%B3%E6%8E%A5%E5%8F%A3/DescribeContractReviewTask)获取（取ApprovedLists.RiskId值）
     * @param integer $FeedbackResult 反馈结果

- 1: 其他错误
- 2: 审查错误
- 3: 审查正确
     * @param string $Reason 审查反馈原因
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

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("FeedbackResult",$param) and $param["FeedbackResult"] !== null) {
            $this->FeedbackResult = $param["FeedbackResult"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
