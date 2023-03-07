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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryVoucherPool返回参数结构体
 *
 * @method string getAgentName() 获取经销商姓名
 * @method void setAgentName(string $AgentName) 设置经销商姓名
 * @method integer getAccountType() 获取经销商角色类型：1:经销商 2:总经销商 3:二级经销商
 * @method void setAccountType(integer $AccountType) 设置经销商角色类型：1:经销商 2:总经销商 3:二级经销商
 * @method float getTotalQuota() 获取总额度
 * @method void setTotalQuota(float $TotalQuota) 设置总额度
 * @method float getRemainingQuota() 获取剩余额度
 * @method void setRemainingQuota(float $RemainingQuota) 设置剩余额度
 * @method integer getIssuedNum() 获取已发放的代金券数量
 * @method void setIssuedNum(integer $IssuedNum) 设置已发放的代金券数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryVoucherPoolResponse extends AbstractModel
{
    /**
     * @var string 经销商姓名
     */
    public $AgentName;

    /**
     * @var integer 经销商角色类型：1:经销商 2:总经销商 3:二级经销商
     */
    public $AccountType;

    /**
     * @var float 总额度
     */
    public $TotalQuota;

    /**
     * @var float 剩余额度
     */
    public $RemainingQuota;

    /**
     * @var integer 已发放的代金券数量
     */
    public $IssuedNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AgentName 经销商姓名
     * @param integer $AccountType 经销商角色类型：1:经销商 2:总经销商 3:二级经销商
     * @param float $TotalQuota 总额度
     * @param float $RemainingQuota 剩余额度
     * @param integer $IssuedNum 已发放的代金券数量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("RemainingQuota",$param) and $param["RemainingQuota"] !== null) {
            $this->RemainingQuota = $param["RemainingQuota"];
        }

        if (array_key_exists("IssuedNum",$param) and $param["IssuedNum"] !== null) {
            $this->IssuedNum = $param["IssuedNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
