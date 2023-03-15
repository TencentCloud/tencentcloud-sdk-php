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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 潜客客户档案信息
 *
 * @method integer getCustomerId() 获取客户档案id，客户唯一识别编码
 * @method void setCustomerId(integer $CustomerId) 设置客户档案id，客户唯一识别编码
 * @method string getDealerCode() 获取所属经销商id
 * @method void setDealerCode(string $DealerCode) 设置所属经销商id
 * @method string getUnionId() 获取客户在微信生态中唯一识别码
 * @method void setUnionId(string $UnionId) 设置客户在微信生态中唯一识别码
 * @method string getCreateTime() 获取档案创建时间戳，单位：秒
 * @method void setCreateTime(string $CreateTime) 设置档案创建时间戳，单位：秒
 * @method string getUserName() 获取客户姓名
 * @method void setUserName(string $UserName) 设置客户姓名
 * @method integer getGender() 获取0未知，1：男，2：女
 * @method void setGender(integer $Gender) 设置0未知，1：男，2：女
 * @method string getPhone() 获取客户联系手机号
 * @method void setPhone(string $Phone) 设置客户联系手机号
 * @method string getAgeRangeName() 获取客户年龄段名称
 * @method void setAgeRangeName(string $AgeRangeName) 设置客户年龄段名称
 * @method string getJobTypeName() 获取客户行业类型名称信息，如教师、医生
 * @method void setJobTypeName(string $JobTypeName) 设置客户行业类型名称信息，如教师、医生
 * @method string getAddress() 获取客户居住地址
 * @method void setAddress(string $Address) 设置客户居住地址
 * @method integer getLeadsProcessStatus() 获取客户所处状态
 0:已分配 1:未分配 1 待建档, 2 已建档， 3 已到店 4 已经试驾 5 战败申请中 6 已战败 7 已成交 
 * @method void setLeadsProcessStatus(integer $LeadsProcessStatus) 设置客户所处状态
 0:已分配 1:未分配 1 待建档, 2 已建档， 3 已到店 4 已经试驾 5 战败申请中 6 已战败 7 已成交 
 * @method integer getLeadType() 获取客户来源类型，1：线上，2：线下
 * @method void setLeadType(integer $LeadType) 设置客户来源类型，1：线上，2：线下
 * @method string getSourceName() 获取与客户来源类型对应的渠道名称
 * @method void setSourceName(string $SourceName) 设置与客户来源类型对应的渠道名称
 * @method string getLeadsLevelCode() 获取客户购车的意向等级
 * @method void setLeadsLevelCode(string $LeadsLevelCode) 设置客户购车的意向等级
 * @method string getVehicleBrandCode() 获取客户意向品牌编号
 * @method void setVehicleBrandCode(string $VehicleBrandCode) 设置客户意向品牌编号
 * @method string getVehicleSeriesCode() 获取客户意向车系编号
 * @method void setVehicleSeriesCode(string $VehicleSeriesCode) 设置客户意向车系编号
 * @method string getVehicleTypeCode() 获取客户意向车型编号
 * @method void setVehicleTypeCode(string $VehicleTypeCode) 设置客户意向车型编号
 * @method VehiclePurpose getVehiclePurpose() 获取购车用途信息
 * @method void setVehiclePurpose(VehiclePurpose $VehiclePurpose) 设置购车用途信息
 * @method array getPurchaseConcern() 获取购车关注点信息
 * @method void setPurchaseConcern(array $PurchaseConcern) 设置购车关注点信息
 * @method string getSalesName() 获取客户所属顾问姓名
 * @method void setSalesName(string $SalesName) 设置客户所属顾问姓名
 * @method string getSalesPhone() 获取客户所属顾问手机号
 * @method void setSalesPhone(string $SalesPhone) 设置客户所属顾问手机号
 * @method integer getRealArrivalTime() 获取客户实际到店时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealArrivalTime(integer $RealArrivalTime) 设置客户实际到店时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompleteTestDriveTime() 获取客户到店完成试乘试驾时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompleteTestDriveTime(string $CompleteTestDriveTime) 设置客户到店完成试乘试驾时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrderTime() 获取客户完成下订的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderTime(integer $OrderTime) 设置客户完成下订的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeliveryTime() 获取客户成交的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeliveryTime(integer $DeliveryTime) 设置客户成交的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInvoiceTime() 获取开票时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvoiceTime(integer $InvoiceTime) 设置开票时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoseTime() 获取完成对此客户战败审批的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoseTime(integer $LoseTime) 设置完成对此客户战败审批的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedAtTime() 获取线索成功获取的时间戳，单位：秒
 * @method void setCreatedAtTime(integer $CreatedAtTime) 设置线索成功获取的时间戳，单位：秒
 * @method integer getImportAtTime() 获取线索成功导入的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportAtTime(integer $ImportAtTime) 设置线索成功导入的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDistributeTime() 获取完成线索分配的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistributeTime(integer $DistributeTime) 设置完成线索分配的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLeadCreateTime() 获取线索成功创建的时间戳，单位：秒
 * @method void setLeadCreateTime(integer $LeadCreateTime) 设置线索成功创建的时间戳，单位：秒
 * @method string getNickname() 获取线索关联微信昵称
 * @method void setNickname(string $Nickname) 设置线索关联微信昵称
 * @method array getOrgIdList() 获取线索归属部门节点
 * @method void setOrgIdList(array $OrgIdList) 设置线索归属部门节点
 * @method string getIntroducer() 获取客户的介绍人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntroducer(string $Introducer) 设置客户的介绍人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIntroducerPhone() 获取客户的介绍人手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntroducerPhone(string $IntroducerPhone) 设置客户的介绍人手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFollowTime() 获取最近一次完成跟进的时间戳，单位：秒
 * @method void setFollowTime(integer $FollowTime) 设置最近一次完成跟进的时间戳，单位：秒
 * @method integer getNextFollowTime() 获取最近一次计划跟进的时间戳，单位：秒
 * @method void setNextFollowTime(integer $NextFollowTime) 设置最近一次计划跟进的时间戳，单位：秒
 * @method array getEnterpriseTags() 获取已为该客户添加的企业标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnterpriseTags(array $EnterpriseTags) 设置已为该客户添加的企业标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChannelTags() 获取已为该客户添加的渠道标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelTags(array $ChannelTags) 设置已为该客户添加的渠道标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomerProfile extends AbstractModel
{
    /**
     * @var integer 客户档案id，客户唯一识别编码
     */
    public $CustomerId;

    /**
     * @var string 所属经销商id
     */
    public $DealerCode;

    /**
     * @var string 客户在微信生态中唯一识别码
     */
    public $UnionId;

    /**
     * @var string 档案创建时间戳，单位：秒
     */
    public $CreateTime;

    /**
     * @var string 客户姓名
     */
    public $UserName;

    /**
     * @var integer 0未知，1：男，2：女
     */
    public $Gender;

    /**
     * @var string 客户联系手机号
     */
    public $Phone;

    /**
     * @var string 客户年龄段名称
     */
    public $AgeRangeName;

    /**
     * @var string 客户行业类型名称信息，如教师、医生
     */
    public $JobTypeName;

    /**
     * @var string 客户居住地址
     */
    public $Address;

    /**
     * @var integer 客户所处状态
 0:已分配 1:未分配 1 待建档, 2 已建档， 3 已到店 4 已经试驾 5 战败申请中 6 已战败 7 已成交 
     */
    public $LeadsProcessStatus;

    /**
     * @var integer 客户来源类型，1：线上，2：线下
     */
    public $LeadType;

    /**
     * @var string 与客户来源类型对应的渠道名称
     */
    public $SourceName;

    /**
     * @var string 客户购车的意向等级
     */
    public $LeadsLevelCode;

    /**
     * @var string 客户意向品牌编号
     */
    public $VehicleBrandCode;

    /**
     * @var string 客户意向车系编号
     */
    public $VehicleSeriesCode;

    /**
     * @var string 客户意向车型编号
     */
    public $VehicleTypeCode;

    /**
     * @var VehiclePurpose 购车用途信息
     */
    public $VehiclePurpose;

    /**
     * @var array 购车关注点信息
     */
    public $PurchaseConcern;

    /**
     * @var string 客户所属顾问姓名
     */
    public $SalesName;

    /**
     * @var string 客户所属顾问手机号
     */
    public $SalesPhone;

    /**
     * @var integer 客户实际到店时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealArrivalTime;

    /**
     * @var string 客户到店完成试乘试驾时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompleteTestDriveTime;

    /**
     * @var integer 客户完成下订的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderTime;

    /**
     * @var integer 客户成交的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeliveryTime;

    /**
     * @var integer 开票时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvoiceTime;

    /**
     * @var integer 完成对此客户战败审批的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoseTime;

    /**
     * @var integer 线索成功获取的时间戳，单位：秒
     */
    public $CreatedAtTime;

    /**
     * @var integer 线索成功导入的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportAtTime;

    /**
     * @var integer 完成线索分配的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DistributeTime;

    /**
     * @var integer 线索成功创建的时间戳，单位：秒
     */
    public $LeadCreateTime;

    /**
     * @var string 线索关联微信昵称
     */
    public $Nickname;

    /**
     * @var array 线索归属部门节点
     */
    public $OrgIdList;

    /**
     * @var string 客户的介绍人姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Introducer;

    /**
     * @var string 客户的介绍人手机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntroducerPhone;

    /**
     * @var integer 最近一次完成跟进的时间戳，单位：秒
     */
    public $FollowTime;

    /**
     * @var integer 最近一次计划跟进的时间戳，单位：秒
     */
    public $NextFollowTime;

    /**
     * @var array 已为该客户添加的企业标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnterpriseTags;

    /**
     * @var array 已为该客户添加的渠道标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelTags;

    /**
     * @param integer $CustomerId 客户档案id，客户唯一识别编码
     * @param string $DealerCode 所属经销商id
     * @param string $UnionId 客户在微信生态中唯一识别码
     * @param string $CreateTime 档案创建时间戳，单位：秒
     * @param string $UserName 客户姓名
     * @param integer $Gender 0未知，1：男，2：女
     * @param string $Phone 客户联系手机号
     * @param string $AgeRangeName 客户年龄段名称
     * @param string $JobTypeName 客户行业类型名称信息，如教师、医生
     * @param string $Address 客户居住地址
     * @param integer $LeadsProcessStatus 客户所处状态
 0:已分配 1:未分配 1 待建档, 2 已建档， 3 已到店 4 已经试驾 5 战败申请中 6 已战败 7 已成交 
     * @param integer $LeadType 客户来源类型，1：线上，2：线下
     * @param string $SourceName 与客户来源类型对应的渠道名称
     * @param string $LeadsLevelCode 客户购车的意向等级
     * @param string $VehicleBrandCode 客户意向品牌编号
     * @param string $VehicleSeriesCode 客户意向车系编号
     * @param string $VehicleTypeCode 客户意向车型编号
     * @param VehiclePurpose $VehiclePurpose 购车用途信息
     * @param array $PurchaseConcern 购车关注点信息
     * @param string $SalesName 客户所属顾问姓名
     * @param string $SalesPhone 客户所属顾问手机号
     * @param integer $RealArrivalTime 客户实际到店时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompleteTestDriveTime 客户到店完成试乘试驾时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrderTime 客户完成下订的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeliveryTime 客户成交的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InvoiceTime 开票时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoseTime 完成对此客户战败审批的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedAtTime 线索成功获取的时间戳，单位：秒
     * @param integer $ImportAtTime 线索成功导入的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DistributeTime 完成线索分配的时间戳，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LeadCreateTime 线索成功创建的时间戳，单位：秒
     * @param string $Nickname 线索关联微信昵称
     * @param array $OrgIdList 线索归属部门节点
     * @param string $Introducer 客户的介绍人姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IntroducerPhone 客户的介绍人手机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FollowTime 最近一次完成跟进的时间戳，单位：秒
     * @param integer $NextFollowTime 最近一次计划跟进的时间戳，单位：秒
     * @param array $EnterpriseTags 已为该客户添加的企业标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChannelTags 已为该客户添加的渠道标签信息
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("DealerCode",$param) and $param["DealerCode"] !== null) {
            $this->DealerCode = $param["DealerCode"];
        }

        if (array_key_exists("UnionId",$param) and $param["UnionId"] !== null) {
            $this->UnionId = $param["UnionId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("AgeRangeName",$param) and $param["AgeRangeName"] !== null) {
            $this->AgeRangeName = $param["AgeRangeName"];
        }

        if (array_key_exists("JobTypeName",$param) and $param["JobTypeName"] !== null) {
            $this->JobTypeName = $param["JobTypeName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("LeadsProcessStatus",$param) and $param["LeadsProcessStatus"] !== null) {
            $this->LeadsProcessStatus = $param["LeadsProcessStatus"];
        }

        if (array_key_exists("LeadType",$param) and $param["LeadType"] !== null) {
            $this->LeadType = $param["LeadType"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("LeadsLevelCode",$param) and $param["LeadsLevelCode"] !== null) {
            $this->LeadsLevelCode = $param["LeadsLevelCode"];
        }

        if (array_key_exists("VehicleBrandCode",$param) and $param["VehicleBrandCode"] !== null) {
            $this->VehicleBrandCode = $param["VehicleBrandCode"];
        }

        if (array_key_exists("VehicleSeriesCode",$param) and $param["VehicleSeriesCode"] !== null) {
            $this->VehicleSeriesCode = $param["VehicleSeriesCode"];
        }

        if (array_key_exists("VehicleTypeCode",$param) and $param["VehicleTypeCode"] !== null) {
            $this->VehicleTypeCode = $param["VehicleTypeCode"];
        }

        if (array_key_exists("VehiclePurpose",$param) and $param["VehiclePurpose"] !== null) {
            $this->VehiclePurpose = new VehiclePurpose();
            $this->VehiclePurpose->deserialize($param["VehiclePurpose"]);
        }

        if (array_key_exists("PurchaseConcern",$param) and $param["PurchaseConcern"] !== null) {
            $this->PurchaseConcern = [];
            foreach ($param["PurchaseConcern"] as $key => $value){
                $obj = new PurchaseConcern();
                $obj->deserialize($value);
                array_push($this->PurchaseConcern, $obj);
            }
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("SalesPhone",$param) and $param["SalesPhone"] !== null) {
            $this->SalesPhone = $param["SalesPhone"];
        }

        if (array_key_exists("RealArrivalTime",$param) and $param["RealArrivalTime"] !== null) {
            $this->RealArrivalTime = $param["RealArrivalTime"];
        }

        if (array_key_exists("CompleteTestDriveTime",$param) and $param["CompleteTestDriveTime"] !== null) {
            $this->CompleteTestDriveTime = $param["CompleteTestDriveTime"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }

        if (array_key_exists("DeliveryTime",$param) and $param["DeliveryTime"] !== null) {
            $this->DeliveryTime = $param["DeliveryTime"];
        }

        if (array_key_exists("InvoiceTime",$param) and $param["InvoiceTime"] !== null) {
            $this->InvoiceTime = $param["InvoiceTime"];
        }

        if (array_key_exists("LoseTime",$param) and $param["LoseTime"] !== null) {
            $this->LoseTime = $param["LoseTime"];
        }

        if (array_key_exists("CreatedAtTime",$param) and $param["CreatedAtTime"] !== null) {
            $this->CreatedAtTime = $param["CreatedAtTime"];
        }

        if (array_key_exists("ImportAtTime",$param) and $param["ImportAtTime"] !== null) {
            $this->ImportAtTime = $param["ImportAtTime"];
        }

        if (array_key_exists("DistributeTime",$param) and $param["DistributeTime"] !== null) {
            $this->DistributeTime = $param["DistributeTime"];
        }

        if (array_key_exists("LeadCreateTime",$param) and $param["LeadCreateTime"] !== null) {
            $this->LeadCreateTime = $param["LeadCreateTime"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("OrgIdList",$param) and $param["OrgIdList"] !== null) {
            $this->OrgIdList = $param["OrgIdList"];
        }

        if (array_key_exists("Introducer",$param) and $param["Introducer"] !== null) {
            $this->Introducer = $param["Introducer"];
        }

        if (array_key_exists("IntroducerPhone",$param) and $param["IntroducerPhone"] !== null) {
            $this->IntroducerPhone = $param["IntroducerPhone"];
        }

        if (array_key_exists("FollowTime",$param) and $param["FollowTime"] !== null) {
            $this->FollowTime = $param["FollowTime"];
        }

        if (array_key_exists("NextFollowTime",$param) and $param["NextFollowTime"] !== null) {
            $this->NextFollowTime = $param["NextFollowTime"];
        }

        if (array_key_exists("EnterpriseTags",$param) and $param["EnterpriseTags"] !== null) {
            $this->EnterpriseTags = [];
            foreach ($param["EnterpriseTags"] as $key => $value){
                $obj = new EnterpriseTag();
                $obj->deserialize($value);
                array_push($this->EnterpriseTags, $obj);
            }
        }

        if (array_key_exists("ChannelTags",$param) and $param["ChannelTags"] !== null) {
            $this->ChannelTags = [];
            foreach ($param["ChannelTags"] as $key => $value){
                $obj = new ChannelTag();
                $obj->deserialize($value);
                array_push($this->ChannelTags, $obj);
            }
        }
    }
}
