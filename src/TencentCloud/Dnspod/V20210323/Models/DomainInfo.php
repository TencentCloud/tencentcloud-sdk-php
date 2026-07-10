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
 * 域名详情
 *
 * @method integer getDomainId() 获取<p>域名ID</p>
 * @method void setDomainId(integer $DomainId) 设置<p>域名ID</p>
 * @method string getStatus() 获取<p>域名状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM</p>
 * @method void setStatus(string $Status) 设置<p>域名状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM</p>
 * @method string getGrade() 获取<p>域名套餐等级</p>
 * @method void setGrade(string $Grade) 设置<p>域名套餐等级</p>
 * @method integer getGroupId() 获取<p>域名分组ID</p>
 * @method void setGroupId(integer $GroupId) 设置<p>域名分组ID</p>
 * @method string getIsMark() 获取<p>是否星标域名</p>
 * @method void setIsMark(string $IsMark) 设置<p>是否星标域名</p>
 * @method integer getTTL() 获取<p>TTL(DNS记录缓存时间)，单位：秒</p>
 * @method void setTTL(integer $TTL) 设置<p>TTL(DNS记录缓存时间)，单位：秒</p>
 * @method string getCnameSpeedup() 获取<p>CNAME加速启用状态</p>
 * @method void setCnameSpeedup(string $CnameSpeedup) 设置<p>CNAME加速启用状态</p>
 * @method string getRemark() 获取<p>域名备注</p>
 * @method void setRemark(string $Remark) 设置<p>域名备注</p>
 * @method string getPunycode() 获取<p>域名Punycode</p>
 * @method void setPunycode(string $Punycode) 设置<p>域名Punycode</p>
 * @method string getDnsStatus() 获取<p>域名DNS状态，错误：dnserror，正常：空字符串</p>
 * @method void setDnsStatus(string $DnsStatus) 设置<p>域名DNS状态，错误：dnserror，正常：空字符串</p>
 * @method array getDnspodNsList() 获取<p>域名的NS列表</p>
 * @method void setDnspodNsList(array $DnspodNsList) 设置<p>域名的NS列表</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method integer getGradeLevel() 获取<p>域名等级代号</p>
 * @method void setGradeLevel(integer $GradeLevel) 设置<p>域名等级代号</p>
 * @method integer getUserId() 获取<p>域名所属的用户ID</p>
 * @method void setUserId(integer $UserId) 设置<p>域名所属的用户ID</p>
 * @method string getIsVip() 获取<p>是否为付费域名</p>
 * @method void setIsVip(string $IsVip) 设置<p>是否为付费域名</p>
 * @method string getOwner() 获取<p>域名所有者的账号</p>
 * @method void setOwner(string $Owner) 设置<p>域名所有者的账号</p>
 * @method string getGradeTitle() 获取<p>域名等级的描述</p>
 * @method void setGradeTitle(string $GradeTitle) 设置<p>域名等级的描述</p>
 * @method string getCreatedOn() 获取<p>域名创建时间</p>
 * @method void setCreatedOn(string $CreatedOn) 设置<p>域名创建时间</p>
 * @method string getUpdatedOn() 获取<p>最后操作时间</p>
 * @method void setUpdatedOn(string $UpdatedOn) 设置<p>最后操作时间</p>
 * @method string getUin() 获取<p>腾讯云账户Uin</p>
 * @method void setUin(string $Uin) 设置<p>腾讯云账户Uin</p>
 * @method array getActualNsList() 获取<p>域名实际使用的NS列表</p>
 * @method void setActualNsList(array $ActualNsList) 设置<p>域名实际使用的NS列表</p>
 * @method integer getRecordCount() 获取<p>域名的记录数量</p>
 * @method void setRecordCount(integer $RecordCount) 设置<p>域名的记录数量</p>
 * @method string getOwnerNick() 获取<p>域名所有者的账户昵称</p>
 * @method void setOwnerNick(string $OwnerNick) 设置<p>域名所有者的账户昵称</p>
 * @method string getIsGracePeriod() 获取<p>是否在付费套餐宽限期</p>
 * @method void setIsGracePeriod(string $IsGracePeriod) 设置<p>是否在付费套餐宽限期</p>
 * @method string getVipBuffered() 获取<p>是否在付费套餐缓冲期</p>
 * @method void setVipBuffered(string $VipBuffered) 设置<p>是否在付费套餐缓冲期</p>
 * @method string getVipStartAt() 获取<p>VIP套餐有效期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipStartAt(string $VipStartAt) 设置<p>VIP套餐有效期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipEndAt() 获取<p>VIP套餐有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipEndAt(string $VipEndAt) 设置<p>VIP套餐有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipAutoRenew() 获取<p>VIP套餐自动续费标识。可能的值为：default-默认；no-不自动续费；yes-自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipAutoRenew(string $VipAutoRenew) 设置<p>VIP套餐自动续费标识。可能的值为：default-默认；no-不自动续费；yes-自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipResourceId() 获取<p>VIP套餐资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipResourceId(string $VipResourceId) 设置<p>VIP套餐资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSubDomain() 获取<p>是否是子域名。</p>
 * @method void setIsSubDomain(boolean $IsSubDomain) 设置<p>是否是子域名。</p>
 * @method array getTagList() 获取<p>域名关联的标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>域名关联的标签列表</p>
 * @method string getSearchEnginePush() 获取<p>是否启用搜索引擎推送</p>
 * @method void setSearchEnginePush(string $SearchEnginePush) 设置<p>是否启用搜索引擎推送</p>
 * @method string getSlaveDNS() 获取<p>是否开启辅助 DNS</p>
 * @method void setSlaveDNS(string $SlaveDNS) 设置<p>是否开启辅助 DNS</p>
 * @method string getDNSStatus() 获取<p>域名DNS状态，错误：dnserror，正常：空字符串</p>
 * @method void setDNSStatus(string $DNSStatus) 设置<p>域名DNS状态，错误：dnserror，正常：空字符串</p>
 * @method string getCNAMESpeedup() 获取<p>CNAME加速启用状态</p>
 * @method void setCNAMESpeedup(string $CNAMESpeedup) 设置<p>CNAME加速启用状态</p>
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var integer <p>域名ID</p>
     */
    public $DomainId;

    /**
     * @var string <p>域名状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM</p>
     */
    public $Status;

    /**
     * @var string <p>域名套餐等级</p>
     */
    public $Grade;

    /**
     * @var integer <p>域名分组ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>是否星标域名</p>
     */
    public $IsMark;

    /**
     * @var integer <p>TTL(DNS记录缓存时间)，单位：秒</p>
     */
    public $TTL;

    /**
     * @var string <p>CNAME加速启用状态</p>
     * @deprecated
     */
    public $CnameSpeedup;

    /**
     * @var string <p>域名备注</p>
     */
    public $Remark;

    /**
     * @var string <p>域名Punycode</p>
     */
    public $Punycode;

    /**
     * @var string <p>域名DNS状态，错误：dnserror，正常：空字符串</p>
     * @deprecated
     */
    public $DnsStatus;

    /**
     * @var array <p>域名的NS列表</p>
     */
    public $DnspodNsList;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var integer <p>域名等级代号</p>
     */
    public $GradeLevel;

    /**
     * @var integer <p>域名所属的用户ID</p>
     */
    public $UserId;

    /**
     * @var string <p>是否为付费域名</p>
     */
    public $IsVip;

    /**
     * @var string <p>域名所有者的账号</p>
     */
    public $Owner;

    /**
     * @var string <p>域名等级的描述</p>
     */
    public $GradeTitle;

    /**
     * @var string <p>域名创建时间</p>
     */
    public $CreatedOn;

    /**
     * @var string <p>最后操作时间</p>
     */
    public $UpdatedOn;

    /**
     * @var string <p>腾讯云账户Uin</p>
     */
    public $Uin;

    /**
     * @var array <p>域名实际使用的NS列表</p>
     */
    public $ActualNsList;

    /**
     * @var integer <p>域名的记录数量</p>
     */
    public $RecordCount;

    /**
     * @var string <p>域名所有者的账户昵称</p>
     */
    public $OwnerNick;

    /**
     * @var string <p>是否在付费套餐宽限期</p>
     */
    public $IsGracePeriod;

    /**
     * @var string <p>是否在付费套餐缓冲期</p>
     */
    public $VipBuffered;

    /**
     * @var string <p>VIP套餐有效期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipStartAt;

    /**
     * @var string <p>VIP套餐有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipEndAt;

    /**
     * @var string <p>VIP套餐自动续费标识。可能的值为：default-默认；no-不自动续费；yes-自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipAutoRenew;

    /**
     * @var string <p>VIP套餐资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipResourceId;

    /**
     * @var boolean <p>是否是子域名。</p>
     */
    public $IsSubDomain;

    /**
     * @var array <p>域名关联的标签列表</p>
     */
    public $TagList;

    /**
     * @var string <p>是否启用搜索引擎推送</p>
     */
    public $SearchEnginePush;

    /**
     * @var string <p>是否开启辅助 DNS</p>
     */
    public $SlaveDNS;

    /**
     * @var string <p>域名DNS状态，错误：dnserror，正常：空字符串</p>
     */
    public $DNSStatus;

    /**
     * @var string <p>CNAME加速启用状态</p>
     */
    public $CNAMESpeedup;

    /**
     * @param integer $DomainId <p>域名ID</p>
     * @param string $Status <p>域名状态，正常：ENABLE，暂停：PAUSE，封禁：SPAM</p>
     * @param string $Grade <p>域名套餐等级</p>
     * @param integer $GroupId <p>域名分组ID</p>
     * @param string $IsMark <p>是否星标域名</p>
     * @param integer $TTL <p>TTL(DNS记录缓存时间)，单位：秒</p>
     * @param string $CnameSpeedup <p>CNAME加速启用状态</p>
     * @param string $Remark <p>域名备注</p>
     * @param string $Punycode <p>域名Punycode</p>
     * @param string $DnsStatus <p>域名DNS状态，错误：dnserror，正常：空字符串</p>
     * @param array $DnspodNsList <p>域名的NS列表</p>
     * @param string $Domain <p>域名</p>
     * @param integer $GradeLevel <p>域名等级代号</p>
     * @param integer $UserId <p>域名所属的用户ID</p>
     * @param string $IsVip <p>是否为付费域名</p>
     * @param string $Owner <p>域名所有者的账号</p>
     * @param string $GradeTitle <p>域名等级的描述</p>
     * @param string $CreatedOn <p>域名创建时间</p>
     * @param string $UpdatedOn <p>最后操作时间</p>
     * @param string $Uin <p>腾讯云账户Uin</p>
     * @param array $ActualNsList <p>域名实际使用的NS列表</p>
     * @param integer $RecordCount <p>域名的记录数量</p>
     * @param string $OwnerNick <p>域名所有者的账户昵称</p>
     * @param string $IsGracePeriod <p>是否在付费套餐宽限期</p>
     * @param string $VipBuffered <p>是否在付费套餐缓冲期</p>
     * @param string $VipStartAt <p>VIP套餐有效期开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VipEndAt <p>VIP套餐有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VipAutoRenew <p>VIP套餐自动续费标识。可能的值为：default-默认；no-不自动续费；yes-自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VipResourceId <p>VIP套餐资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSubDomain <p>是否是子域名。</p>
     * @param array $TagList <p>域名关联的标签列表</p>
     * @param string $SearchEnginePush <p>是否启用搜索引擎推送</p>
     * @param string $SlaveDNS <p>是否开启辅助 DNS</p>
     * @param string $DNSStatus <p>域名DNS状态，错误：dnserror，正常：空字符串</p>
     * @param string $CNAMESpeedup <p>CNAME加速启用状态</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IsMark",$param) and $param["IsMark"] !== null) {
            $this->IsMark = $param["IsMark"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("CnameSpeedup",$param) and $param["CnameSpeedup"] !== null) {
            $this->CnameSpeedup = $param["CnameSpeedup"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Punycode",$param) and $param["Punycode"] !== null) {
            $this->Punycode = $param["Punycode"];
        }

        if (array_key_exists("DnsStatus",$param) and $param["DnsStatus"] !== null) {
            $this->DnsStatus = $param["DnsStatus"];
        }

        if (array_key_exists("DnspodNsList",$param) and $param["DnspodNsList"] !== null) {
            $this->DnspodNsList = $param["DnspodNsList"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("GradeLevel",$param) and $param["GradeLevel"] !== null) {
            $this->GradeLevel = $param["GradeLevel"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("GradeTitle",$param) and $param["GradeTitle"] !== null) {
            $this->GradeTitle = $param["GradeTitle"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ActualNsList",$param) and $param["ActualNsList"] !== null) {
            $this->ActualNsList = $param["ActualNsList"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("OwnerNick",$param) and $param["OwnerNick"] !== null) {
            $this->OwnerNick = $param["OwnerNick"];
        }

        if (array_key_exists("IsGracePeriod",$param) and $param["IsGracePeriod"] !== null) {
            $this->IsGracePeriod = $param["IsGracePeriod"];
        }

        if (array_key_exists("VipBuffered",$param) and $param["VipBuffered"] !== null) {
            $this->VipBuffered = $param["VipBuffered"];
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

        if (array_key_exists("VipResourceId",$param) and $param["VipResourceId"] !== null) {
            $this->VipResourceId = $param["VipResourceId"];
        }

        if (array_key_exists("IsSubDomain",$param) and $param["IsSubDomain"] !== null) {
            $this->IsSubDomain = $param["IsSubDomain"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("SearchEnginePush",$param) and $param["SearchEnginePush"] !== null) {
            $this->SearchEnginePush = $param["SearchEnginePush"];
        }

        if (array_key_exists("SlaveDNS",$param) and $param["SlaveDNS"] !== null) {
            $this->SlaveDNS = $param["SlaveDNS"];
        }

        if (array_key_exists("DNSStatus",$param) and $param["DNSStatus"] !== null) {
            $this->DNSStatus = $param["DNSStatus"];
        }

        if (array_key_exists("CNAMESpeedup",$param) and $param["CNAMESpeedup"] !== null) {
            $this->CNAMESpeedup = $param["CNAMESpeedup"];
        }
    }
}
