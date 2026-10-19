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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览资源与配额详情
 *
 * @method integer getPublicIpUsed() 获取<p>已使用公网 IP 数量。</p>
 * @method void setPublicIpUsed(integer $PublicIpUsed) 设置<p>已使用公网 IP 数量。</p>
 * @method integer getPublicIpTotal() 获取<p>公网 IP 总配额数量。</p>
 * @method void setPublicIpTotal(integer $PublicIpTotal) 设置<p>公网 IP 总配额数量。</p>
 * @method integer getCommonInstanceTotal() 获取<p>通用实例总配额数量。</p>
 * @method void setCommonInstanceTotal(integer $CommonInstanceTotal) 设置<p>通用实例总配额数量。</p>
 * @method integer getCommonInstanceRemain() 获取<p>通用实例剩余配额数量。</p>
 * @method void setCommonInstanceRemain(integer $CommonInstanceRemain) 设置<p>通用实例剩余配额数量。</p>
 * @method integer getCommonInstanceUsed() 获取<p>通用实例已使用数量。</p>
 * @method void setCommonInstanceUsed(integer $CommonInstanceUsed) 设置<p>通用实例已使用数量。</p>
 * @method integer getAccessControlRuleUsed() 获取<p>访问控制规则已使用数量。</p>
 * @method void setAccessControlRuleUsed(integer $AccessControlRuleUsed) 设置<p>访问控制规则已使用数量。</p>
 * @method integer getAccessControlRuleTotal() 获取<p>访问控制规则总配额数量。</p>
 * @method void setAccessControlRuleTotal(integer $AccessControlRuleTotal) 设置<p>访问控制规则总配额数量。</p>
 * @method integer getSerialRegionUsed() 获取<p>已使用串行地域数量。</p>
 * @method void setSerialRegionUsed(integer $SerialRegionUsed) 设置<p>已使用串行地域数量。</p>
 * @method integer getNatInstanceUsed() 获取<p>已使用 NAT 防火墙实例数量。</p>
 * @method void setNatInstanceUsed(integer $NatInstanceUsed) 设置<p>已使用 NAT 防火墙实例数量。</p>
 * @method integer getVpcInstanceUsed() 获取<p>已使用 VPC 防火墙实例数量。</p>
 * @method void setVpcInstanceUsed(integer $VpcInstanceUsed) 设置<p>已使用 VPC 防火墙实例数量。</p>
 * @method OverviewCommonRuleQuotaDetail getBorderRuleQuota() 获取<p>边界规则配额详情。</p>
 * @method void setBorderRuleQuota(OverviewCommonRuleQuotaDetail $BorderRuleQuota) 设置<p>边界规则配额详情。</p>
 * @method OverviewCommonRuleQuotaDetail getNatRuleQuota() 获取<p>NAT 规则配额详情。</p>
 * @method void setNatRuleQuota(OverviewCommonRuleQuotaDetail $NatRuleQuota) 设置<p>NAT 规则配额详情。</p>
 * @method OverviewVpcRuleQuotaDetail getVpcRuleQuota() 获取<p>VPC 规则配额详情。</p>
 * @method void setVpcRuleQuota(OverviewVpcRuleQuotaDetail $VpcRuleQuota) 设置<p>VPC 规则配额详情。</p>
 * @method OverviewBlockListQuota getBlockListQuota() 获取<p>封禁列表配额统计信息。</p>
 * @method void setBlockListQuota(OverviewBlockListQuota $BlockListQuota) 设置<p>封禁列表配额统计信息。</p>
 * @method integer getBlockIpCount() 获取<p>封禁 IP 总数量。</p>
 * @method void setBlockIpCount(integer $BlockIpCount) 设置<p>封禁 IP 总数量。</p>
 * @method integer getBlockIpUsed() 获取<p>已使用封禁 IP 数量。</p>
 * @method void setBlockIpUsed(integer $BlockIpUsed) 设置<p>已使用封禁 IP 数量。</p>
 * @method integer getBlockIpTotal() 获取<p>封禁 IP 总配额数量。</p>
 * @method void setBlockIpTotal(integer $BlockIpTotal) 设置<p>封禁 IP 总配额数量。</p>
 * @method OverviewBlockListQuotaDetail getBlockListQuotaDetail() 获取<p>封禁列表基础包与扩容包配额详情。</p>
 * @method void setBlockListQuotaDetail(OverviewBlockListQuotaDetail $BlockListQuotaDetail) 设置<p>封禁列表基础包与扩容包配额详情。</p>
 * @method integer getSgRuleQuotaUsed() 获取<p>安全组规则已使用数量。</p>
 * @method void setSgRuleQuotaUsed(integer $SgRuleQuotaUsed) 设置<p>安全组规则已使用数量。</p>
 * @method integer getSgRuleQuotaTotal() 获取<p>安全组规则总配额数量。</p>
 * @method void setSgRuleQuotaTotal(integer $SgRuleQuotaTotal) 设置<p>安全组规则总配额数量。</p>
 * @method integer getTotalExtensionUsed() 获取<p>总扩容资源已使用数量。</p>
 * @method void setTotalExtensionUsed(integer $TotalExtensionUsed) 设置<p>总扩容资源已使用数量。</p>
 * @method integer getTotalExtensionNum() 获取<p>总扩容资源配额数量。</p>
 * @method void setTotalExtensionNum(integer $TotalExtensionNum) 设置<p>总扩容资源配额数量。</p>
 * @method integer getAddressTemplateUsed() 获取<p>地址模板已使用数量。</p>
 * @method void setAddressTemplateUsed(integer $AddressTemplateUsed) 设置<p>地址模板已使用数量。</p>
 * @method integer getAddressTemplateTotal() 获取<p>地址模板总配额数量。</p>
 * @method void setAddressTemplateTotal(integer $AddressTemplateTotal) 设置<p>地址模板总配额数量。</p>
 * @method integer getHoneyPotUsed() 获取<p>蜜罐已使用数量。</p>
 * @method void setHoneyPotUsed(integer $HoneyPotUsed) 设置<p>蜜罐已使用数量。</p>
 * @method integer getHoneyPotTotal() 获取<p>蜜罐总配额数量。</p>
 * @method void setHoneyPotTotal(integer $HoneyPotTotal) 设置<p>蜜罐总配额数量。</p>
 */
class OverviewQuotaDetail extends AbstractModel
{
    /**
     * @var integer <p>已使用公网 IP 数量。</p>
     */
    public $PublicIpUsed;

    /**
     * @var integer <p>公网 IP 总配额数量。</p>
     */
    public $PublicIpTotal;

    /**
     * @var integer <p>通用实例总配额数量。</p>
     */
    public $CommonInstanceTotal;

    /**
     * @var integer <p>通用实例剩余配额数量。</p>
     */
    public $CommonInstanceRemain;

    /**
     * @var integer <p>通用实例已使用数量。</p>
     */
    public $CommonInstanceUsed;

    /**
     * @var integer <p>访问控制规则已使用数量。</p>
     */
    public $AccessControlRuleUsed;

    /**
     * @var integer <p>访问控制规则总配额数量。</p>
     */
    public $AccessControlRuleTotal;

    /**
     * @var integer <p>已使用串行地域数量。</p>
     */
    public $SerialRegionUsed;

    /**
     * @var integer <p>已使用 NAT 防火墙实例数量。</p>
     */
    public $NatInstanceUsed;

    /**
     * @var integer <p>已使用 VPC 防火墙实例数量。</p>
     */
    public $VpcInstanceUsed;

    /**
     * @var OverviewCommonRuleQuotaDetail <p>边界规则配额详情。</p>
     */
    public $BorderRuleQuota;

    /**
     * @var OverviewCommonRuleQuotaDetail <p>NAT 规则配额详情。</p>
     */
    public $NatRuleQuota;

    /**
     * @var OverviewVpcRuleQuotaDetail <p>VPC 规则配额详情。</p>
     */
    public $VpcRuleQuota;

    /**
     * @var OverviewBlockListQuota <p>封禁列表配额统计信息。</p>
     */
    public $BlockListQuota;

    /**
     * @var integer <p>封禁 IP 总数量。</p>
     */
    public $BlockIpCount;

    /**
     * @var integer <p>已使用封禁 IP 数量。</p>
     */
    public $BlockIpUsed;

    /**
     * @var integer <p>封禁 IP 总配额数量。</p>
     */
    public $BlockIpTotal;

    /**
     * @var OverviewBlockListQuotaDetail <p>封禁列表基础包与扩容包配额详情。</p>
     */
    public $BlockListQuotaDetail;

    /**
     * @var integer <p>安全组规则已使用数量。</p>
     */
    public $SgRuleQuotaUsed;

    /**
     * @var integer <p>安全组规则总配额数量。</p>
     */
    public $SgRuleQuotaTotal;

    /**
     * @var integer <p>总扩容资源已使用数量。</p>
     */
    public $TotalExtensionUsed;

    /**
     * @var integer <p>总扩容资源配额数量。</p>
     */
    public $TotalExtensionNum;

    /**
     * @var integer <p>地址模板已使用数量。</p>
     */
    public $AddressTemplateUsed;

    /**
     * @var integer <p>地址模板总配额数量。</p>
     */
    public $AddressTemplateTotal;

    /**
     * @var integer <p>蜜罐已使用数量。</p>
     */
    public $HoneyPotUsed;

    /**
     * @var integer <p>蜜罐总配额数量。</p>
     */
    public $HoneyPotTotal;

    /**
     * @param integer $PublicIpUsed <p>已使用公网 IP 数量。</p>
     * @param integer $PublicIpTotal <p>公网 IP 总配额数量。</p>
     * @param integer $CommonInstanceTotal <p>通用实例总配额数量。</p>
     * @param integer $CommonInstanceRemain <p>通用实例剩余配额数量。</p>
     * @param integer $CommonInstanceUsed <p>通用实例已使用数量。</p>
     * @param integer $AccessControlRuleUsed <p>访问控制规则已使用数量。</p>
     * @param integer $AccessControlRuleTotal <p>访问控制规则总配额数量。</p>
     * @param integer $SerialRegionUsed <p>已使用串行地域数量。</p>
     * @param integer $NatInstanceUsed <p>已使用 NAT 防火墙实例数量。</p>
     * @param integer $VpcInstanceUsed <p>已使用 VPC 防火墙实例数量。</p>
     * @param OverviewCommonRuleQuotaDetail $BorderRuleQuota <p>边界规则配额详情。</p>
     * @param OverviewCommonRuleQuotaDetail $NatRuleQuota <p>NAT 规则配额详情。</p>
     * @param OverviewVpcRuleQuotaDetail $VpcRuleQuota <p>VPC 规则配额详情。</p>
     * @param OverviewBlockListQuota $BlockListQuota <p>封禁列表配额统计信息。</p>
     * @param integer $BlockIpCount <p>封禁 IP 总数量。</p>
     * @param integer $BlockIpUsed <p>已使用封禁 IP 数量。</p>
     * @param integer $BlockIpTotal <p>封禁 IP 总配额数量。</p>
     * @param OverviewBlockListQuotaDetail $BlockListQuotaDetail <p>封禁列表基础包与扩容包配额详情。</p>
     * @param integer $SgRuleQuotaUsed <p>安全组规则已使用数量。</p>
     * @param integer $SgRuleQuotaTotal <p>安全组规则总配额数量。</p>
     * @param integer $TotalExtensionUsed <p>总扩容资源已使用数量。</p>
     * @param integer $TotalExtensionNum <p>总扩容资源配额数量。</p>
     * @param integer $AddressTemplateUsed <p>地址模板已使用数量。</p>
     * @param integer $AddressTemplateTotal <p>地址模板总配额数量。</p>
     * @param integer $HoneyPotUsed <p>蜜罐已使用数量。</p>
     * @param integer $HoneyPotTotal <p>蜜罐总配额数量。</p>
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
        if (array_key_exists("PublicIpUsed",$param) and $param["PublicIpUsed"] !== null) {
            $this->PublicIpUsed = $param["PublicIpUsed"];
        }

        if (array_key_exists("PublicIpTotal",$param) and $param["PublicIpTotal"] !== null) {
            $this->PublicIpTotal = $param["PublicIpTotal"];
        }

        if (array_key_exists("CommonInstanceTotal",$param) and $param["CommonInstanceTotal"] !== null) {
            $this->CommonInstanceTotal = $param["CommonInstanceTotal"];
        }

        if (array_key_exists("CommonInstanceRemain",$param) and $param["CommonInstanceRemain"] !== null) {
            $this->CommonInstanceRemain = $param["CommonInstanceRemain"];
        }

        if (array_key_exists("CommonInstanceUsed",$param) and $param["CommonInstanceUsed"] !== null) {
            $this->CommonInstanceUsed = $param["CommonInstanceUsed"];
        }

        if (array_key_exists("AccessControlRuleUsed",$param) and $param["AccessControlRuleUsed"] !== null) {
            $this->AccessControlRuleUsed = $param["AccessControlRuleUsed"];
        }

        if (array_key_exists("AccessControlRuleTotal",$param) and $param["AccessControlRuleTotal"] !== null) {
            $this->AccessControlRuleTotal = $param["AccessControlRuleTotal"];
        }

        if (array_key_exists("SerialRegionUsed",$param) and $param["SerialRegionUsed"] !== null) {
            $this->SerialRegionUsed = $param["SerialRegionUsed"];
        }

        if (array_key_exists("NatInstanceUsed",$param) and $param["NatInstanceUsed"] !== null) {
            $this->NatInstanceUsed = $param["NatInstanceUsed"];
        }

        if (array_key_exists("VpcInstanceUsed",$param) and $param["VpcInstanceUsed"] !== null) {
            $this->VpcInstanceUsed = $param["VpcInstanceUsed"];
        }

        if (array_key_exists("BorderRuleQuota",$param) and $param["BorderRuleQuota"] !== null) {
            $this->BorderRuleQuota = new OverviewCommonRuleQuotaDetail();
            $this->BorderRuleQuota->deserialize($param["BorderRuleQuota"]);
        }

        if (array_key_exists("NatRuleQuota",$param) and $param["NatRuleQuota"] !== null) {
            $this->NatRuleQuota = new OverviewCommonRuleQuotaDetail();
            $this->NatRuleQuota->deserialize($param["NatRuleQuota"]);
        }

        if (array_key_exists("VpcRuleQuota",$param) and $param["VpcRuleQuota"] !== null) {
            $this->VpcRuleQuota = new OverviewVpcRuleQuotaDetail();
            $this->VpcRuleQuota->deserialize($param["VpcRuleQuota"]);
        }

        if (array_key_exists("BlockListQuota",$param) and $param["BlockListQuota"] !== null) {
            $this->BlockListQuota = new OverviewBlockListQuota();
            $this->BlockListQuota->deserialize($param["BlockListQuota"]);
        }

        if (array_key_exists("BlockIpCount",$param) and $param["BlockIpCount"] !== null) {
            $this->BlockIpCount = $param["BlockIpCount"];
        }

        if (array_key_exists("BlockIpUsed",$param) and $param["BlockIpUsed"] !== null) {
            $this->BlockIpUsed = $param["BlockIpUsed"];
        }

        if (array_key_exists("BlockIpTotal",$param) and $param["BlockIpTotal"] !== null) {
            $this->BlockIpTotal = $param["BlockIpTotal"];
        }

        if (array_key_exists("BlockListQuotaDetail",$param) and $param["BlockListQuotaDetail"] !== null) {
            $this->BlockListQuotaDetail = new OverviewBlockListQuotaDetail();
            $this->BlockListQuotaDetail->deserialize($param["BlockListQuotaDetail"]);
        }

        if (array_key_exists("SgRuleQuotaUsed",$param) and $param["SgRuleQuotaUsed"] !== null) {
            $this->SgRuleQuotaUsed = $param["SgRuleQuotaUsed"];
        }

        if (array_key_exists("SgRuleQuotaTotal",$param) and $param["SgRuleQuotaTotal"] !== null) {
            $this->SgRuleQuotaTotal = $param["SgRuleQuotaTotal"];
        }

        if (array_key_exists("TotalExtensionUsed",$param) and $param["TotalExtensionUsed"] !== null) {
            $this->TotalExtensionUsed = $param["TotalExtensionUsed"];
        }

        if (array_key_exists("TotalExtensionNum",$param) and $param["TotalExtensionNum"] !== null) {
            $this->TotalExtensionNum = $param["TotalExtensionNum"];
        }

        if (array_key_exists("AddressTemplateUsed",$param) and $param["AddressTemplateUsed"] !== null) {
            $this->AddressTemplateUsed = $param["AddressTemplateUsed"];
        }

        if (array_key_exists("AddressTemplateTotal",$param) and $param["AddressTemplateTotal"] !== null) {
            $this->AddressTemplateTotal = $param["AddressTemplateTotal"];
        }

        if (array_key_exists("HoneyPotUsed",$param) and $param["HoneyPotUsed"] !== null) {
            $this->HoneyPotUsed = $param["HoneyPotUsed"];
        }

        if (array_key_exists("HoneyPotTotal",$param) and $param["HoneyPotTotal"] !== null) {
            $this->HoneyPotTotal = $param["HoneyPotTotal"];
        }
    }
}
