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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 测绘记录
 *
 * @method string getAssetName() 获取资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetIp() 获取公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetIp(string $AssetIp) 设置公网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateIp() 获取内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetId() 获取资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(string $AssetId) 设置资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getService() 获取服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(string $Service) 设置服务
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComponent() 获取组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponent(string $Component) 设置组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcess() 获取进程
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcess(string $Process) 设置进程
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOS() 获取操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOS(string $OS) 设置操作系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastMappingTime() 获取测绘时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastMappingTime(string $LastMappingTime) 设置测绘时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisposalRecommendations() 获取处置建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisposalRecommendations(string $DisposalRecommendations) 设置处置建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisposalRecommendationDetails() 获取处置建议详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisposalRecommendationDetails(string $DisposalRecommendationDetails) 设置处置建议详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMappingStatus() 获取测绘状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMappingStatus(integer $MappingStatus) 设置测绘状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityStatus() 获取安全防护状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityStatus(array $SecurityStatus) 设置安全防护状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisposalRecommendation() 获取处置建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisposalRecommendation(integer $DisposalRecommendation) 设置处置建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMappingType() 获取测绘类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMappingType(string $MappingType) 设置测绘类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class MappingResult extends AbstractModel
{
    /**
     * @var string 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetIp;

    /**
     * @var string 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateIp;

    /**
     * @var string 资产id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 服务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var string 组件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Component;

    /**
     * @var string 进程
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Process;

    /**
     * @var string 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OS;

    /**
     * @var string 测绘时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastMappingTime;

    /**
     * @var string 处置建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisposalRecommendations;

    /**
     * @var string 处置建议详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisposalRecommendationDetails;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string 域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer 测绘状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MappingStatus;

    /**
     * @var string 区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var array 安全防护状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityStatus;

    /**
     * @var integer 处置建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisposalRecommendation;

    /**
     * @var string 测绘类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MappingType;

    /**
     * @param string $AssetName 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetIp 公网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateIp 内网ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetId 资产id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Service 服务
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Component 组件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Process 进程
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OS 操作系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastMappingTime 测绘时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisposalRecommendations 处置建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisposalRecommendationDetails 处置建议详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MappingStatus 测绘状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityStatus 安全防护状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DisposalRecommendation 处置建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MappingType 测绘类型
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
        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetIp",$param) and $param["AssetIp"] !== null) {
            $this->AssetIp = $param["AssetIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = $param["Process"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("LastMappingTime",$param) and $param["LastMappingTime"] !== null) {
            $this->LastMappingTime = $param["LastMappingTime"];
        }

        if (array_key_exists("DisposalRecommendations",$param) and $param["DisposalRecommendations"] !== null) {
            $this->DisposalRecommendations = $param["DisposalRecommendations"];
        }

        if (array_key_exists("DisposalRecommendationDetails",$param) and $param["DisposalRecommendationDetails"] !== null) {
            $this->DisposalRecommendationDetails = $param["DisposalRecommendationDetails"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("MappingStatus",$param) and $param["MappingStatus"] !== null) {
            $this->MappingStatus = $param["MappingStatus"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = [];
            foreach ($param["SecurityStatus"] as $key => $value){
                $obj = new SecurityStatus();
                $obj->deserialize($value);
                array_push($this->SecurityStatus, $obj);
            }
        }

        if (array_key_exists("DisposalRecommendation",$param) and $param["DisposalRecommendation"] !== null) {
            $this->DisposalRecommendation = $param["DisposalRecommendation"];
        }

        if (array_key_exists("MappingType",$param) and $param["MappingType"] !== null) {
            $this->MappingType = $param["MappingType"];
        }
    }
}
