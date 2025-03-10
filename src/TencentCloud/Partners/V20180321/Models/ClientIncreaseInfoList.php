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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户增量激励考核信息列表
 *
 * @method string getClientUin() 获取客户UIN
 * @method void setClientUin(string $ClientUin) 设置客户UIN
 * @method string getIsJoinIncrease() 获取是否参与增量政策，
Y：是，N：否
 * @method void setIsJoinIncrease(string $IsJoinIncrease) 设置是否参与增量政策，
Y：是，N：否
 * @method string getIncreaseUseAssociateDate() 获取增量考核关联时间
 * @method void setIncreaseUseAssociateDate(string $IncreaseUseAssociateDate) 设置增量考核关联时间
 * @method string getTLevel() 获取参与增量考核的原始客户等级
 * @method void setTLevel(string $TLevel) 设置参与增量考核的原始客户等级
 * @method string getIncreaseGoal() 获取增量考核目标,分
 * @method void setIncreaseGoal(string $IncreaseGoal) 设置增量考核目标,分
 * @method string getTotalBaseAmt() 获取完成订单金额,分
 * @method void setTotalBaseAmt(string $TotalBaseAmt) 设置完成订单金额,分
 */
class ClientIncreaseInfoList extends AbstractModel
{
    /**
     * @var string 客户UIN
     */
    public $ClientUin;

    /**
     * @var string 是否参与增量政策，
Y：是，N：否
     */
    public $IsJoinIncrease;

    /**
     * @var string 增量考核关联时间
     */
    public $IncreaseUseAssociateDate;

    /**
     * @var string 参与增量考核的原始客户等级
     */
    public $TLevel;

    /**
     * @var string 增量考核目标,分
     */
    public $IncreaseGoal;

    /**
     * @var string 完成订单金额,分
     */
    public $TotalBaseAmt;

    /**
     * @param string $ClientUin 客户UIN
     * @param string $IsJoinIncrease 是否参与增量政策，
Y：是，N：否
     * @param string $IncreaseUseAssociateDate 增量考核关联时间
     * @param string $TLevel 参与增量考核的原始客户等级
     * @param string $IncreaseGoal 增量考核目标,分
     * @param string $TotalBaseAmt 完成订单金额,分
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("IsJoinIncrease",$param) and $param["IsJoinIncrease"] !== null) {
            $this->IsJoinIncrease = $param["IsJoinIncrease"];
        }

        if (array_key_exists("IncreaseUseAssociateDate",$param) and $param["IncreaseUseAssociateDate"] !== null) {
            $this->IncreaseUseAssociateDate = $param["IncreaseUseAssociateDate"];
        }

        if (array_key_exists("TLevel",$param) and $param["TLevel"] !== null) {
            $this->TLevel = $param["TLevel"];
        }

        if (array_key_exists("IncreaseGoal",$param) and $param["IncreaseGoal"] !== null) {
            $this->IncreaseGoal = $param["IncreaseGoal"];
        }

        if (array_key_exists("TotalBaseAmt",$param) and $param["TotalBaseAmt"] !== null) {
            $this->TotalBaseAmt = $param["TotalBaseAmt"];
        }
    }
}
