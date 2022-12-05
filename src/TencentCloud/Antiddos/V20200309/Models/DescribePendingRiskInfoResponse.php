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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePendingRiskInfo返回参数结构体
 *
 * @method boolean getIsPaidUsr() 获取是否为付费用户，true：付费用户， false：普通用户
 * @method void setIsPaidUsr(boolean $IsPaidUsr) 设置是否为付费用户，true：付费用户， false：普通用户
 * @method integer getAttackingCount() 获取攻击中的资源数量
 * @method void setAttackingCount(integer $AttackingCount) 设置攻击中的资源数量
 * @method integer getBlockingCount() 获取封堵中的资源数量
 * @method void setBlockingCount(integer $BlockingCount) 设置封堵中的资源数量
 * @method integer getExpiredCount() 获取已过期的资源数量
 * @method void setExpiredCount(integer $ExpiredCount) 设置已过期的资源数量
 * @method integer getTotal() 获取所有待处理风险事件总数
 * @method void setTotal(integer $Total) 设置所有待处理风险事件总数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePendingRiskInfoResponse extends AbstractModel
{
    /**
     * @var boolean 是否为付费用户，true：付费用户， false：普通用户
     */
    public $IsPaidUsr;

    /**
     * @var integer 攻击中的资源数量
     */
    public $AttackingCount;

    /**
     * @var integer 封堵中的资源数量
     */
    public $BlockingCount;

    /**
     * @var integer 已过期的资源数量
     */
    public $ExpiredCount;

    /**
     * @var integer 所有待处理风险事件总数
     */
    public $Total;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsPaidUsr 是否为付费用户，true：付费用户， false：普通用户
     * @param integer $AttackingCount 攻击中的资源数量
     * @param integer $BlockingCount 封堵中的资源数量
     * @param integer $ExpiredCount 已过期的资源数量
     * @param integer $Total 所有待处理风险事件总数
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
        if (array_key_exists("IsPaidUsr",$param) and $param["IsPaidUsr"] !== null) {
            $this->IsPaidUsr = $param["IsPaidUsr"];
        }

        if (array_key_exists("AttackingCount",$param) and $param["AttackingCount"] !== null) {
            $this->AttackingCount = $param["AttackingCount"];
        }

        if (array_key_exists("BlockingCount",$param) and $param["BlockingCount"] !== null) {
            $this->BlockingCount = $param["BlockingCount"];
        }

        if (array_key_exists("ExpiredCount",$param) and $param["ExpiredCount"] !== null) {
            $this->ExpiredCount = $param["ExpiredCount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
