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
 * ModifyDspmRiskInfo请求参数结构体
 *
 * @method array getRiskId() 获取风险id
 * @method void setRiskId(array $RiskId) 设置风险id
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method integer getStatus() 获取风险状态 2-已忽略
 * @method void setStatus(integer $Status) 设置风险状态 2-已忽略
 */
class ModifyDspmRiskInfoRequest extends AbstractModel
{
    /**
     * @var array 风险id
     */
    public $RiskId;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var integer 风险状态 2-已忽略
     */
    public $Status;

    /**
     * @param array $RiskId 风险id
     * @param array $MemberId 集团账号的成员id
     * @param integer $Status 风险状态 2-已忽略
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
