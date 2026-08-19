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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OperateRisk请求参数结构体
 *
 * @method string getRiskRuleId() 获取<p>风险规则ID</p>
 * @method void setRiskRuleId(string $RiskRuleId) 设置<p>风险规则ID</p>
 * @method array getRiskIdList() 获取<p>风险ID集合</p>
 * @method void setRiskIdList(array $RiskIdList) 设置<p>风险ID集合</p>
 * @method string getOperationType() 获取<p>操作类型</p>
 * @method void setOperationType(string $OperationType) 设置<p>操作类型</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getReason() 获取<p>风险忽略原因</p>
 * @method void setReason(string $Reason) 设置<p>风险忽略原因</p>
 */
class OperateRiskRequest extends AbstractModel
{
    /**
     * @var string <p>风险规则ID</p>
     */
    public $RiskRuleId;

    /**
     * @var array <p>风险ID集合</p>
     */
    public $RiskIdList;

    /**
     * @var string <p>操作类型</p>
     */
    public $OperationType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>风险忽略原因</p>
     */
    public $Reason;

    /**
     * @param string $RiskRuleId <p>风险规则ID</p>
     * @param array $RiskIdList <p>风险ID集合</p>
     * @param string $OperationType <p>操作类型</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Reason <p>风险忽略原因</p>
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
        if (array_key_exists("RiskRuleId",$param) and $param["RiskRuleId"] !== null) {
            $this->RiskRuleId = $param["RiskRuleId"];
        }

        if (array_key_exists("RiskIdList",$param) and $param["RiskIdList"] !== null) {
            $this->RiskIdList = $param["RiskIdList"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
