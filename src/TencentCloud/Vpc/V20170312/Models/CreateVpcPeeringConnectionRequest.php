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
 * CreateVpcPeeringConnection请求参数结构体
 *
 * @method string getSourceVpcId() 获取本端VPC唯一ID。
 * @method void setSourceVpcId(string $SourceVpcId) 设置本端VPC唯一ID。
 * @method string getPeeringConnectionName() 获取对等连接名称。
 * @method void setPeeringConnectionName(string $PeeringConnectionName) 设置对等连接名称。
 * @method string getDestinationVpcId() 获取对端VPC唯一ID。
 * @method void setDestinationVpcId(string $DestinationVpcId) 设置对端VPC唯一ID。
 * @method string getDestinationUin() 获取对端用户UIN。
 * @method void setDestinationUin(string $DestinationUin) 设置对端用户UIN。
 * @method string getDestinationRegion() 获取对端地域。
 * @method void setDestinationRegion(string $DestinationRegion) 设置对端地域。
 * @method integer getBandwidth() 获取带宽上限，单位Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽上限，单位Mbps。
 * @method string getType() 获取互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
 * @method void setType(string $Type) 设置互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
 * @method string getChargeType() 获取计费模式，日峰值POSTPAID_BY_DAY_MAX，月95POSTPAID_BY_MONTH_95。
 * @method void setChargeType(string $ChargeType) 设置计费模式，日峰值POSTPAID_BY_DAY_MAX，月95POSTPAID_BY_MONTH_95。
 * @method string getQosLevel() 获取服务分级：PT、AU、AG。
 * @method void setQosLevel(string $QosLevel) 设置服务分级：PT、AU、AG。
 */
class CreateVpcPeeringConnectionRequest extends AbstractModel
{
    /**
     * @var string 本端VPC唯一ID。
     */
    public $SourceVpcId;

    /**
     * @var string 对等连接名称。
     */
    public $PeeringConnectionName;

    /**
     * @var string 对端VPC唯一ID。
     */
    public $DestinationVpcId;

    /**
     * @var string 对端用户UIN。
     */
    public $DestinationUin;

    /**
     * @var string 对端地域。
     */
    public $DestinationRegion;

    /**
     * @var integer 带宽上限，单位Mbps。
     */
    public $Bandwidth;

    /**
     * @var string 互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
     */
    public $Type;

    /**
     * @var string 计费模式，日峰值POSTPAID_BY_DAY_MAX，月95POSTPAID_BY_MONTH_95。
     */
    public $ChargeType;

    /**
     * @var string 服务分级：PT、AU、AG。
     */
    public $QosLevel;

    /**
     * @param string $SourceVpcId 本端VPC唯一ID。
     * @param string $PeeringConnectionName 对等连接名称。
     * @param string $DestinationVpcId 对端VPC唯一ID。
     * @param string $DestinationUin 对端用户UIN。
     * @param string $DestinationRegion 对端地域。
     * @param integer $Bandwidth 带宽上限，单位Mbps。
     * @param string $Type 互通类型，VPC_PEER：VPC间互通；VPC_BM_PEER：VPC与黑石网络互通。
     * @param string $ChargeType 计费模式，日峰值POSTPAID_BY_DAY_MAX，月95POSTPAID_BY_MONTH_95。
     * @param string $QosLevel 服务分级：PT、AU、AG。
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

        if (array_key_exists("PeeringConnectionName",$param) and $param["PeeringConnectionName"] !== null) {
            $this->PeeringConnectionName = $param["PeeringConnectionName"];
        }

        if (array_key_exists("DestinationVpcId",$param) and $param["DestinationVpcId"] !== null) {
            $this->DestinationVpcId = $param["DestinationVpcId"];
        }

        if (array_key_exists("DestinationUin",$param) and $param["DestinationUin"] !== null) {
            $this->DestinationUin = $param["DestinationUin"];
        }

        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }
    }
}
