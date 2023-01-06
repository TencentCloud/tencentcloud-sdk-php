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
 * 高防IP资产实例信息
 *
 * @method InstanceRelation getInstanceDetail() 获取资产实例的详细信息
 * @method void setInstanceDetail(InstanceRelation $InstanceDetail) 设置资产实例的详细信息
 * @method BGPIPInstanceSpecification getSpecificationLimit() 获取资产实例的规格信息
 * @method void setSpecificationLimit(BGPIPInstanceSpecification $SpecificationLimit) 设置资产实例的规格信息
 * @method BGPIPInstanceUsages getUsage() 获取资产实例的使用统计信息
 * @method void setUsage(BGPIPInstanceUsages $Usage) 设置资产实例的使用统计信息
 * @method RegionInfo getRegion() 获取资产实例所在的地域
 * @method void setRegion(RegionInfo $Region) 设置资产实例所在的地域
 * @method string getStatus() 获取资产实例的防护状态，状态码如下：
"idle"：正常状态(无攻击)
"attacking"：攻击中
"blocking"：封堵中
"creating"：创建中
"deblocking"：解封中
"isolate"：回收隔离中
 * @method void setStatus(string $Status) 设置资产实例的防护状态，状态码如下：
"idle"：正常状态(无攻击)
"attacking"：攻击中
"blocking"：封堵中
"creating"：创建中
"deblocking"：解封中
"isolate"：回收隔离中
 * @method string getExpiredTime() 获取购买时间
 * @method void setExpiredTime(string $ExpiredTime) 设置购买时间
 * @method string getCreatedTime() 获取到期时间
 * @method void setCreatedTime(string $CreatedTime) 设置到期时间
 * @method string getName() 获取资产实例的名称
 * @method void setName(string $Name) 设置资产实例的名称
 * @method PackInfo getPackInfo() 获取资产实例所属的套餐包信息，
注意：当资产实例不是套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackInfo(PackInfo $PackInfo) 设置资产实例所属的套餐包信息，
注意：当资产实例不是套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method StaticPackRelation getStaticPackRelation() 获取资产实例所属的三网套餐包详情，
注意：当资产实例不是三网套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStaticPackRelation(StaticPackRelation $StaticPackRelation) 设置资产实例所属的三网套餐包详情，
注意：当资产实例不是三网套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取区分高防IP境外线路
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置区分高防IP境外线路
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTgw() 获取区分集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTgw(integer $Tgw) 设置区分集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEipAddressStatus() 获取高防弹性公网IP状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)。只对高防弹性公网IP实例有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipAddressStatus(string $EipAddressStatus) 设置高防弹性公网IP状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)。只对高防弹性公网IP实例有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEipFlag() 获取是否高防弹性公网IP实例，是为1，否为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipFlag(integer $EipFlag) 设置是否高防弹性公网IP实例，是为1，否为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EipAddressPackRelation getEipAddressPackRelation() 获取资产实例所属的高防弹性公网IP套餐包详情，
注意：当资产实例不是高防弹性公网IP套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipAddressPackRelation(EipAddressPackRelation $EipAddressPackRelation) 设置资产实例所属的高防弹性公网IP套餐包详情，
注意：当资产实例不是高防弹性公网IP套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method EipAddressRelation getEipAddressInfo() 获取高防弹性公网IP关联的实例信息。
注意：当资产实例不是高防弹性公网IP实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEipAddressInfo(EipAddressRelation $EipAddressInfo) 设置高防弹性公网IP关联的实例信息。
注意：当资产实例不是高防弹性公网IP实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取建议客户接入的域名，客户可使用域名接入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置建议客户接入的域名，客户可使用域名接入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDamDDoSStatus() 获取是否开启安全加速，是为1，否为0。
 * @method void setDamDDoSStatus(integer $DamDDoSStatus) 设置是否开启安全加速，是为1，否为0。
 * @method integer getV6Flag() 获取是否Ipv6版本的IP, 是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setV6Flag(integer $V6Flag) 设置是否Ipv6版本的IP, 是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBGPIPChannelFlag() 获取是否渠道版高防IP，是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBGPIPChannelFlag(integer $BGPIPChannelFlag) 设置是否渠道版高防IP，是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagInfoList() 获取资源关联标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInfoList(array $TagInfoList) 设置资源关联标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method AnycastOutPackRelation getAnycastOutPackRelation() 获取资产实例所属的全力防护套餐包详情，
注意：当资产实例不是全力防护套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnycastOutPackRelation(AnycastOutPackRelation $AnycastOutPackRelation) 设置资产实例所属的全力防护套餐包详情，
注意：当资产实例不是全力防护套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceVersion() 获取资源实例版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceVersion(integer $InstanceVersion) 设置资源实例版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConvoyId() 获取重保实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConvoyId(string $ConvoyId) 设置重保实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticBandwidth() 获取带宽后付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置带宽后付费
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEOFlag() 获取是否为EO代播的ip: 1是，0不是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEOFlag(integer $EOFlag) 设置是否为EO代播的ip: 1是，0不是
注意：此字段可能返回 null，表示取不到有效值。
 */
class BGPIPInstance extends AbstractModel
{
    /**
     * @var InstanceRelation 资产实例的详细信息
     */
    public $InstanceDetail;

    /**
     * @var BGPIPInstanceSpecification 资产实例的规格信息
     */
    public $SpecificationLimit;

    /**
     * @var BGPIPInstanceUsages 资产实例的使用统计信息
     */
    public $Usage;

    /**
     * @var RegionInfo 资产实例所在的地域
     */
    public $Region;

    /**
     * @var string 资产实例的防护状态，状态码如下：
"idle"：正常状态(无攻击)
"attacking"：攻击中
"blocking"：封堵中
"creating"：创建中
"deblocking"：解封中
"isolate"：回收隔离中
     */
    public $Status;

    /**
     * @var string 购买时间
     */
    public $ExpiredTime;

    /**
     * @var string 到期时间
     */
    public $CreatedTime;

    /**
     * @var string 资产实例的名称
     */
    public $Name;

    /**
     * @var PackInfo 资产实例所属的套餐包信息，
注意：当资产实例不是套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackInfo;

    /**
     * @var StaticPackRelation 资产实例所属的三网套餐包详情，
注意：当资产实例不是三网套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StaticPackRelation;

    /**
     * @var integer 区分高防IP境外线路
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var integer 区分集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tgw;

    /**
     * @var string 高防弹性公网IP状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)。只对高防弹性公网IP实例有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipAddressStatus;

    /**
     * @var integer 是否高防弹性公网IP实例，是为1，否为0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipFlag;

    /**
     * @var EipAddressPackRelation 资产实例所属的高防弹性公网IP套餐包详情，
注意：当资产实例不是高防弹性公网IP套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipAddressPackRelation;

    /**
     * @var EipAddressRelation 高防弹性公网IP关联的实例信息。
注意：当资产实例不是高防弹性公网IP实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EipAddressInfo;

    /**
     * @var string 建议客户接入的域名，客户可使用域名接入。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer 是否开启安全加速，是为1，否为0。
     */
    public $DamDDoSStatus;

    /**
     * @var integer 是否Ipv6版本的IP, 是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $V6Flag;

    /**
     * @var integer 是否渠道版高防IP，是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BGPIPChannelFlag;

    /**
     * @var array 资源关联标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInfoList;

    /**
     * @var AnycastOutPackRelation 资产实例所属的全力防护套餐包详情，
注意：当资产实例不是全力防护套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnycastOutPackRelation;

    /**
     * @var integer 资源实例版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceVersion;

    /**
     * @var string 重保实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConvoyId;

    /**
     * @var integer 带宽后付费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBandwidth;

    /**
     * @var integer 是否为EO代播的ip: 1是，0不是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EOFlag;

    /**
     * @param InstanceRelation $InstanceDetail 资产实例的详细信息
     * @param BGPIPInstanceSpecification $SpecificationLimit 资产实例的规格信息
     * @param BGPIPInstanceUsages $Usage 资产实例的使用统计信息
     * @param RegionInfo $Region 资产实例所在的地域
     * @param string $Status 资产实例的防护状态，状态码如下：
"idle"：正常状态(无攻击)
"attacking"：攻击中
"blocking"：封堵中
"creating"：创建中
"deblocking"：解封中
"isolate"：回收隔离中
     * @param string $ExpiredTime 购买时间
     * @param string $CreatedTime 到期时间
     * @param string $Name 资产实例的名称
     * @param PackInfo $PackInfo 资产实例所属的套餐包信息，
注意：当资产实例不是套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param StaticPackRelation $StaticPackRelation 资产实例所属的三网套餐包详情，
注意：当资产实例不是三网套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 区分高防IP境外线路
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tgw 区分集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EipAddressStatus 高防弹性公网IP状态，包含'CREATING'(创建中),'BINDING'(绑定中),'BIND'(已绑定),'UNBINDING'(解绑中),'UNBIND'(已解绑),'OFFLINING'(释放中),'BIND_ENI'(绑定悬空弹性网卡)。只对高防弹性公网IP实例有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EipFlag 是否高防弹性公网IP实例，是为1，否为0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EipAddressPackRelation $EipAddressPackRelation 资产实例所属的高防弹性公网IP套餐包详情，
注意：当资产实例不是高防弹性公网IP套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param EipAddressRelation $EipAddressInfo 高防弹性公网IP关联的实例信息。
注意：当资产实例不是高防弹性公网IP实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 建议客户接入的域名，客户可使用域名接入。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DamDDoSStatus 是否开启安全加速，是为1，否为0。
     * @param integer $V6Flag 是否Ipv6版本的IP, 是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BGPIPChannelFlag 是否渠道版高防IP，是为1，否为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagInfoList 资源关联标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param AnycastOutPackRelation $AnycastOutPackRelation 资产实例所属的全力防护套餐包详情，
注意：当资产实例不是全力防护套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceVersion 资源实例版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConvoyId 重保实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticBandwidth 带宽后付费
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EOFlag 是否为EO代播的ip: 1是，0不是
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
        if (array_key_exists("InstanceDetail",$param) and $param["InstanceDetail"] !== null) {
            $this->InstanceDetail = new InstanceRelation();
            $this->InstanceDetail->deserialize($param["InstanceDetail"]);
        }

        if (array_key_exists("SpecificationLimit",$param) and $param["SpecificationLimit"] !== null) {
            $this->SpecificationLimit = new BGPIPInstanceSpecification();
            $this->SpecificationLimit->deserialize($param["SpecificationLimit"]);
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new BGPIPInstanceUsages();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = new RegionInfo();
            $this->Region->deserialize($param["Region"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PackInfo",$param) and $param["PackInfo"] !== null) {
            $this->PackInfo = new PackInfo();
            $this->PackInfo->deserialize($param["PackInfo"]);
        }

        if (array_key_exists("StaticPackRelation",$param) and $param["StaticPackRelation"] !== null) {
            $this->StaticPackRelation = new StaticPackRelation();
            $this->StaticPackRelation->deserialize($param["StaticPackRelation"]);
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Tgw",$param) and $param["Tgw"] !== null) {
            $this->Tgw = $param["Tgw"];
        }

        if (array_key_exists("EipAddressStatus",$param) and $param["EipAddressStatus"] !== null) {
            $this->EipAddressStatus = $param["EipAddressStatus"];
        }

        if (array_key_exists("EipFlag",$param) and $param["EipFlag"] !== null) {
            $this->EipFlag = $param["EipFlag"];
        }

        if (array_key_exists("EipAddressPackRelation",$param) and $param["EipAddressPackRelation"] !== null) {
            $this->EipAddressPackRelation = new EipAddressPackRelation();
            $this->EipAddressPackRelation->deserialize($param["EipAddressPackRelation"]);
        }

        if (array_key_exists("EipAddressInfo",$param) and $param["EipAddressInfo"] !== null) {
            $this->EipAddressInfo = new EipAddressRelation();
            $this->EipAddressInfo->deserialize($param["EipAddressInfo"]);
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DamDDoSStatus",$param) and $param["DamDDoSStatus"] !== null) {
            $this->DamDDoSStatus = $param["DamDDoSStatus"];
        }

        if (array_key_exists("V6Flag",$param) and $param["V6Flag"] !== null) {
            $this->V6Flag = $param["V6Flag"];
        }

        if (array_key_exists("BGPIPChannelFlag",$param) and $param["BGPIPChannelFlag"] !== null) {
            $this->BGPIPChannelFlag = $param["BGPIPChannelFlag"];
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("AnycastOutPackRelation",$param) and $param["AnycastOutPackRelation"] !== null) {
            $this->AnycastOutPackRelation = new AnycastOutPackRelation();
            $this->AnycastOutPackRelation->deserialize($param["AnycastOutPackRelation"]);
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("ConvoyId",$param) and $param["ConvoyId"] !== null) {
            $this->ConvoyId = $param["ConvoyId"];
        }

        if (array_key_exists("ElasticBandwidth",$param) and $param["ElasticBandwidth"] !== null) {
            $this->ElasticBandwidth = $param["ElasticBandwidth"];
        }

        if (array_key_exists("EOFlag",$param) and $param["EOFlag"] !== null) {
            $this->EOFlag = $param["EOFlag"];
        }
    }
}
