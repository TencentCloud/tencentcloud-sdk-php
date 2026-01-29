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
 * 合同审查反馈信息
 *
 * @method string getRiskId() 获取审查结果ID
 * @method void setRiskId(string $RiskId) 设置审查结果ID
 * @method integer getFeedbackResult() 获取反馈结果

- 1: 其他错误
- 2: 审查错误
- 3: 审查正确
 * @method void setFeedbackResult(integer $FeedbackResult) 设置反馈结果

- 1: 其他错误
- 2: 审查错误
- 3: 审查正确
 * @method string getReason() 获取反馈原因
 * @method void setReason(string $Reason) 设置反馈原因
 */
class RiskIdentificationFeedbackInfo extends AbstractModel
{
    /**
     * @var string 审查结果ID
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
     * @var string 反馈原因
     */
    public $Reason;

    /**
     * @param string $RiskId 审查结果ID
     * @param integer $FeedbackResult 反馈结果

- 1: 其他错误
- 2: 审查错误
- 3: 审查正确
     * @param string $Reason 反馈原因
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
