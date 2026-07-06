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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号组配额详情
 *
 * @method string getGroupId() 获取账号组Id
 * @method void setGroupId(string $GroupId) 设置账号组Id
 * @method string getGroupName() 获取账号组名称
 * @method void setGroupName(string $GroupName) 设置账号组名称
 * @method integer getMemberCount() 获取账号组成员数
 * @method void setMemberCount(integer $MemberCount) 设置账号组成员数
 * @method integer getRemainQuota() 获取取组内 RemainQuota 最小成员的值
 * @method void setRemainQuota(integer $RemainQuota) 设置取组内 RemainQuota 最小成员的值
 * @method integer getTotalQuota() 获取同上成员的 TotalQuota
 * @method void setTotalQuota(integer $TotalQuota) 设置同上成员的 TotalQuota
 * @method integer getDispatchRuleNum() 获取同上成员的 DispatchRuleNum
 * @method void setDispatchRuleNum(integer $DispatchRuleNum) 设置同上成员的 DispatchRuleNum
 * @method integer getOriginRuleNum() 获取同上成员的 OriginRuleNum
 * @method void setOriginRuleNum(integer $OriginRuleNum) 设置同上成员的 OriginRuleNum
 * @method string getBottleneckUin() 获取配额最少的成员 Uin
 * @method void setBottleneckUin(string $BottleneckUin) 设置配额最少的成员 Uin
 * @method array getMembers() 获取成员列表
 * @method void setMembers(array $Members) 设置成员列表
 */
class AccountGroupQuotaDetail extends AbstractModel
{
    /**
     * @var string 账号组Id
     */
    public $GroupId;

    /**
     * @var string 账号组名称
     */
    public $GroupName;

    /**
     * @var integer 账号组成员数
     */
    public $MemberCount;

    /**
     * @var integer 取组内 RemainQuota 最小成员的值
     */
    public $RemainQuota;

    /**
     * @var integer 同上成员的 TotalQuota
     */
    public $TotalQuota;

    /**
     * @var integer 同上成员的 DispatchRuleNum
     */
    public $DispatchRuleNum;

    /**
     * @var integer 同上成员的 OriginRuleNum
     */
    public $OriginRuleNum;

    /**
     * @var string 配额最少的成员 Uin
     */
    public $BottleneckUin;

    /**
     * @var array 成员列表
     */
    public $Members;

    /**
     * @param string $GroupId 账号组Id
     * @param string $GroupName 账号组名称
     * @param integer $MemberCount 账号组成员数
     * @param integer $RemainQuota 取组内 RemainQuota 最小成员的值
     * @param integer $TotalQuota 同上成员的 TotalQuota
     * @param integer $DispatchRuleNum 同上成员的 DispatchRuleNum
     * @param integer $OriginRuleNum 同上成员的 OriginRuleNum
     * @param string $BottleneckUin 配额最少的成员 Uin
     * @param array $Members 成员列表
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("RemainQuota",$param) and $param["RemainQuota"] !== null) {
            $this->RemainQuota = $param["RemainQuota"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("DispatchRuleNum",$param) and $param["DispatchRuleNum"] !== null) {
            $this->DispatchRuleNum = $param["DispatchRuleNum"];
        }

        if (array_key_exists("OriginRuleNum",$param) and $param["OriginRuleNum"] !== null) {
            $this->OriginRuleNum = $param["OriginRuleNum"];
        }

        if (array_key_exists("BottleneckUin",$param) and $param["BottleneckUin"] !== null) {
            $this->BottleneckUin = $param["BottleneckUin"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new Account();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }
    }
}
