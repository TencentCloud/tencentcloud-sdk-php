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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐列表元素
 *
 * @method integer getDomainId() 获取域名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainId(integer $DomainId) 设置域名ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名的原始格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名的原始格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrade() 获取套餐等级代码
 * @method void setGrade(string $Grade) 设置套餐等级代码
 * @method string getGradeTitle() 获取套餐名称
 * @method void setGradeTitle(string $GradeTitle) 设置套餐名称
 * @method string getVipStartAt() 获取付费套餐开通时间
 * @method void setVipStartAt(string $VipStartAt) 设置付费套餐开通时间
 * @method string getVipEndAt() 获取付费套餐到期时间
 * @method void setVipEndAt(string $VipEndAt) 设置付费套餐到期时间
 * @method string getVipAutoRenew() 获取域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
 * @method void setVipAutoRenew(string $VipAutoRenew) 设置域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
 * @method integer getRemainTimes() 获取套餐剩余换绑/绑定域名次数
 * @method void setRemainTimes(integer $RemainTimes) 设置套餐剩余换绑/绑定域名次数
 * @method string getResourceId() 获取套餐资源ID
 * @method void setResourceId(string $ResourceId) 设置套餐资源ID
 * @method integer getGradeLevel() 获取域名等级代号
 * @method void setGradeLevel(integer $GradeLevel) 设置域名等级代号
 * @method string getStatus() 获取套餐绑定的域名的状态
 * @method void setStatus(string $Status) 设置套餐绑定的域名的状态
 * @method string getIsGracePeriod() 获取套餐是否处于宽限期
 * @method void setIsGracePeriod(string $IsGracePeriod) 设置套餐是否处于宽限期
 * @method boolean getDowngrade() 获取是否降级
 * @method void setDowngrade(boolean $Downgrade) 设置是否降级
 * @method SecurityInfo getSecurityInfo() 获取关联安全防护信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityInfo(SecurityInfo $SecurityInfo) 设置关联安全防护信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSubDomain() 获取套餐绑定的域名是否为子域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSubDomain(boolean $IsSubDomain) 设置套餐绑定的域名是否为子域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class PackageListItem extends AbstractModel
{
    /**
     * @var integer 域名ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainId;

    /**
     * @var string 域名的原始格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 套餐等级代码
     */
    public $Grade;

    /**
     * @var string 套餐名称
     */
    public $GradeTitle;

    /**
     * @var string 付费套餐开通时间
     */
    public $VipStartAt;

    /**
     * @var string 付费套餐到期时间
     */
    public $VipEndAt;

    /**
     * @var string 域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
     */
    public $VipAutoRenew;

    /**
     * @var integer 套餐剩余换绑/绑定域名次数
     */
    public $RemainTimes;

    /**
     * @var string 套餐资源ID
     */
    public $ResourceId;

    /**
     * @var integer 域名等级代号
     */
    public $GradeLevel;

    /**
     * @var string 套餐绑定的域名的状态
     */
    public $Status;

    /**
     * @var string 套餐是否处于宽限期
     */
    public $IsGracePeriod;

    /**
     * @var boolean 是否降级
     */
    public $Downgrade;

    /**
     * @var SecurityInfo 关联安全防护信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityInfo;

    /**
     * @var boolean 套餐绑定的域名是否为子域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSubDomain;

    /**
     * @param integer $DomainId 域名ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名的原始格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Grade 套餐等级代码
     * @param string $GradeTitle 套餐名称
     * @param string $VipStartAt 付费套餐开通时间
     * @param string $VipEndAt 付费套餐到期时间
     * @param string $VipAutoRenew 域名是否开通VIP自动续费，是：YES，否：NO，默认：DEFAULT
     * @param integer $RemainTimes 套餐剩余换绑/绑定域名次数
     * @param string $ResourceId 套餐资源ID
     * @param integer $GradeLevel 域名等级代号
     * @param string $Status 套餐绑定的域名的状态
     * @param string $IsGracePeriod 套餐是否处于宽限期
     * @param boolean $Downgrade 是否降级
     * @param SecurityInfo $SecurityInfo 关联安全防护信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSubDomain 套餐绑定的域名是否为子域名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("GradeTitle",$param) and $param["GradeTitle"] !== null) {
            $this->GradeTitle = $param["GradeTitle"];
        }

        if (array_key_exists("VipStartAt",$param) and $param["VipStartAt"] !== null) {
            $this->VipStartAt = $param["VipStartAt"];
        }

        if (array_key_exists("VipEndAt",$param) and $param["VipEndAt"] !== null) {
            $this->VipEndAt = $param["VipEndAt"];
        }

        if (array_key_exists("VipAutoRenew",$param) and $param["VipAutoRenew"] !== null) {
            $this->VipAutoRenew = $param["VipAutoRenew"];
        }

        if (array_key_exists("RemainTimes",$param) and $param["RemainTimes"] !== null) {
            $this->RemainTimes = $param["RemainTimes"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("GradeLevel",$param) and $param["GradeLevel"] !== null) {
            $this->GradeLevel = $param["GradeLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsGracePeriod",$param) and $param["IsGracePeriod"] !== null) {
            $this->IsGracePeriod = $param["IsGracePeriod"];
        }

        if (array_key_exists("Downgrade",$param) and $param["Downgrade"] !== null) {
            $this->Downgrade = $param["Downgrade"];
        }

        if (array_key_exists("SecurityInfo",$param) and $param["SecurityInfo"] !== null) {
            $this->SecurityInfo = new SecurityInfo();
            $this->SecurityInfo->deserialize($param["SecurityInfo"]);
        }

        if (array_key_exists("IsSubDomain",$param) and $param["IsSubDomain"] !== null) {
            $this->IsSubDomain = $param["IsSubDomain"];
        }
    }
}
