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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对等连接实例信息。
 *
 * @method string getSourceVpcId() 获取本端VPC唯一ID。
 * @method void setSourceVpcId(string $SourceVpcId) 设置本端VPC唯一ID。
 * @method string getPeerVpcId() 获取对端VPC唯一ID。
 * @method void setPeerVpcId(string $PeerVpcId) 设置对端VPC唯一ID。
 * @method string getPeeringConnectionId() 获取对等连接唯一ID。
 * @method void setPeeringConnectionId(string $PeeringConnectionId) 设置对等连接唯一ID。
 * @method string getPeeringConnectionName() 获取对等连接名称。
 * @method void setPeeringConnectionName(string $PeeringConnectionName) 设置对等连接名称。
 * @method string getState() 获取对等连接状态，PENDING，投放中；ACTIVE，使用中；REJECTED，已拒绝‘DELETED，已删除；FAILED，失败；EXPIRED，已过期；ISOLATED，隔离中。
 * @method void setState(string $State) 设置对等连接状态，PENDING，投放中；ACTIVE，使用中；REJECTED，已拒绝‘DELETED，已删除；FAILED，失败；EXPIRED，已过期；ISOLATED，隔离中。
 * @method boolean getIsNgw() 获取是否是新控制器，true: 是NewAfc；false:不是。
 * @method void setIsNgw(boolean $IsNgw) 设置是否是新控制器，true: 是NewAfc；false:不是。
 * @method integer getBandwidth() 获取对等连接带宽值。
 * @method void setBandwidth(integer $Bandwidth) 设置对等连接带宽值。
 * @method string getSourceRegion() 获取本端地域。
 * @method void setSourceRegion(string $SourceRegion) 设置本端地域。
 * @method string getDestinationRegion() 获取对端地域。
 * @method void setDestinationRegion(string $DestinationRegion) 设置对端地域。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method integer getAppId() 获取本端APPID。
 * @method void setAppId(integer $AppId) 设置本端APPID。
 * @method integer getPeerAppId() 获取对端APPID。
 * @method void setPeerAppId(integer $PeerAppId) 设置对端APPID。
 * @method string getChargeType() 获取计费类型，POSTPAID_BY_DAY_MAX：日峰值计费；POSTPAID_BY_MONTH_95：月95计费。
 * @method void setChargeType(string $ChargeType) 设置计费类型，POSTPAID_BY_DAY_MAX：日峰值计费；POSTPAID_BY_MONTH_95：月95计费。
 * @method integer getSourceUin() 获取本端UIN。
 * @method void setSourceUin(integer $SourceUin) 设置本端UIN。
 * @method integer getDestinationUin() 获取对端UIN。
 * @method void setDestinationUin(integer $DestinationUin) 设置对端UIN。
 * @method array getTagSet() 获取资源标签数据。
 * @method void setTagSet(array $TagSet) 设置资源标签数据。
 * @method string getQosLevel() 获取服务分级：PT、AU、AG。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQosLevel(string $QosLevel) 设置服务分级：PT、AU、AG。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
注意：此字段可能返回 null，表示取不到有效值。
 */
class PeerConnection extends AbstractModel
{
    /**
     * @var string 本端VPC唯一ID。
     */
    public $SourceVpcId;

    /**
     * @var string 对端VPC唯一ID。
     */
    public $PeerVpcId;

    /**
     * @var string 对等连接唯一ID。
     */
    public $PeeringConnectionId;

    /**
     * @var string 对等连接名称。
     */
    public $PeeringConnectionName;

    /**
     * @var string 对等连接状态，PENDING，投放中；ACTIVE，使用中；REJECTED，已拒绝‘DELETED，已删除；FAILED，失败；EXPIRED，已过期；ISOLATED，隔离中。
     */
    public $State;

    /**
     * @var boolean 是否是新控制器，true: 是NewAfc；false:不是。
     */
    public $IsNgw;

    /**
     * @var integer 对等连接带宽值。
     */
    public $Bandwidth;

    /**
     * @var string 本端地域。
     */
    public $SourceRegion;

    /**
     * @var string 对端地域。
     */
    public $DestinationRegion;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 本端APPID。
     */
    public $AppId;

    /**
     * @var integer 对端APPID。
     */
    public $PeerAppId;

    /**
     * @var string 计费类型，POSTPAID_BY_DAY_MAX：日峰值计费；POSTPAID_BY_MONTH_95：月95计费。
     */
    public $ChargeType;

    /**
     * @var integer 本端UIN。
     */
    public $SourceUin;

    /**
     * @var integer 对端UIN。
     */
    public $DestinationUin;

    /**
     * @var array 资源标签数据。
     */
    public $TagSet;

    /**
     * @var string 服务分级：PT、AU、AG。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QosLevel;

    /**
     * @var string 互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @param string $SourceVpcId 本端VPC唯一ID。
     * @param string $PeerVpcId 对端VPC唯一ID。
     * @param string $PeeringConnectionId 对等连接唯一ID。
     * @param string $PeeringConnectionName 对等连接名称。
     * @param string $State 对等连接状态，PENDING，投放中；ACTIVE，使用中；REJECTED，已拒绝‘DELETED，已删除；FAILED，失败；EXPIRED，已过期；ISOLATED，隔离中。
     * @param boolean $IsNgw 是否是新控制器，true: 是NewAfc；false:不是。
     * @param integer $Bandwidth 对等连接带宽值。
     * @param string $SourceRegion 本端地域。
     * @param string $DestinationRegion 对端地域。
     * @param string $CreateTime 创建时间。
     * @param integer $AppId 本端APPID。
     * @param integer $PeerAppId 对端APPID。
     * @param string $ChargeType 计费类型，POSTPAID_BY_DAY_MAX：日峰值计费；POSTPAID_BY_MONTH_95：月95计费。
     * @param integer $SourceUin 本端UIN。
     * @param integer $DestinationUin 对端UIN。
     * @param array $TagSet 资源标签数据。
     * @param string $QosLevel 服务分级：PT、AU、AG。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
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
        if (array_key_exists("SourceVpcId",$param) and $param["SourceVpcId"] !== null) {
            $this->SourceVpcId = $param["SourceVpcId"];
        }

        if (array_key_exists("PeerVpcId",$param) and $param["PeerVpcId"] !== null) {
            $this->PeerVpcId = $param["PeerVpcId"];
        }

        if (array_key_exists("PeeringConnectionId",$param) and $param["PeeringConnectionId"] !== null) {
            $this->PeeringConnectionId = $param["PeeringConnectionId"];
        }

        if (array_key_exists("PeeringConnectionName",$param) and $param["PeeringConnectionName"] !== null) {
            $this->PeeringConnectionName = $param["PeeringConnectionName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("IsNgw",$param) and $param["IsNgw"] !== null) {
            $this->IsNgw = $param["IsNgw"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PeerAppId",$param) and $param["PeerAppId"] !== null) {
            $this->PeerAppId = $param["PeerAppId"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("SourceUin",$param) and $param["SourceUin"] !== null) {
            $this->SourceUin = $param["SourceUin"];
        }

        if (array_key_exists("DestinationUin",$param) and $param["DestinationUin"] !== null) {
            $this->DestinationUin = $param["DestinationUin"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
