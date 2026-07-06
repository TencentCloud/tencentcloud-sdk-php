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
 * 账号基本信息，主要有 Uin 和 AppId
 *
 * @method string getAppId() 获取租户appid
 * @method void setAppId(string $AppId) 设置租户appid
 * @method string getUin() 获取租户uin
 * @method void setUin(string $Uin) 设置租户uin
 * @method integer getRemainQuota() 获取剩余可用额度
 * @method void setRemainQuota(integer $RemainQuota) 设置剩余可用额度
 * @method string getNickname() 获取租户名称
 * @method void setNickname(string $Nickname) 设置租户名称
 * @method integer getDispatchRuleNum() 获取下发规则数
 * @method void setDispatchRuleNum(integer $DispatchRuleNum) 设置下发规则数
 * @method integer getOriginRuleNum() 获取产品已有规则数
 * @method void setOriginRuleNum(integer $OriginRuleNum) 设置产品已有规则数
 * @method integer getTotalQuota() 获取总额度
 * @method void setTotalQuota(integer $TotalQuota) 设置总额度
 * @method string getMemberId() 获取成员Id
 * @method void setMemberId(string $MemberId) 设置成员Id
 */
class Account extends AbstractModel
{
    /**
     * @var string 租户appid
     */
    public $AppId;

    /**
     * @var string 租户uin
     */
    public $Uin;

    /**
     * @var integer 剩余可用额度
     */
    public $RemainQuota;

    /**
     * @var string 租户名称
     */
    public $Nickname;

    /**
     * @var integer 下发规则数
     */
    public $DispatchRuleNum;

    /**
     * @var integer 产品已有规则数
     */
    public $OriginRuleNum;

    /**
     * @var integer 总额度
     */
    public $TotalQuota;

    /**
     * @var string 成员Id
     */
    public $MemberId;

    /**
     * @param string $AppId 租户appid
     * @param string $Uin 租户uin
     * @param integer $RemainQuota 剩余可用额度
     * @param string $Nickname 租户名称
     * @param integer $DispatchRuleNum 下发规则数
     * @param integer $OriginRuleNum 产品已有规则数
     * @param integer $TotalQuota 总额度
     * @param string $MemberId 成员Id
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("RemainQuota",$param) and $param["RemainQuota"] !== null) {
            $this->RemainQuota = $param["RemainQuota"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("DispatchRuleNum",$param) and $param["DispatchRuleNum"] !== null) {
            $this->DispatchRuleNum = $param["DispatchRuleNum"];
        }

        if (array_key_exists("OriginRuleNum",$param) and $param["OriginRuleNum"] !== null) {
            $this->OriginRuleNum = $param["OriginRuleNum"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
