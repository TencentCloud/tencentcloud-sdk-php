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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务风险
 *
 * @method string getServiceTag() 获取测绘标签
 * @method void setServiceTag(string $ServiceTag) 设置测绘标签
 * @method integer getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAffectAsset() 获取影响资产
 * @method void setAffectAsset(string $AffectAsset) 设置影响资产
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getInstanceType() 获取资产类型
 * @method void setInstanceType(string $InstanceType) 设置资产类型
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getComponent() 获取组件
 * @method void setComponent(string $Component) 设置组件
 * @method string getService() 获取服务
 * @method void setService(string $Service) 设置服务
 * @method string getRecentTime() 获取最近识别时间
 * @method void setRecentTime(string $RecentTime) 设置最近识别时间
 * @method string getFirstTime() 获取首次识别时间
 * @method void setFirstTime(string $FirstTime) 设置首次识别时间
 * @method string getRiskDetails() 获取风险详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDetails(string $RiskDetails) 设置风险详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestion() 获取处置建议
 * @method void setSuggestion(string $Suggestion) 设置处置建议
 * @method integer getStatus() 获取状态，0未处理、1已处置、2已忽略
 * @method void setStatus(integer $Status) 设置状态，0未处理、1已处置、2已忽略
 * @method string getId() 获取资产唯一id
 * @method void setId(string $Id) 设置资产唯一id
 * @method string getAppId() 获取用户appid
 * @method void setAppId(string $AppId) 设置用户appid
 * @method string getNick() 获取用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNick(string $Nick) 设置用户昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceSnapshot() 获取服务快照
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceSnapshot(string $ServiceSnapshot) 设置服务快照
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取服务访问的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置服务访问的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndex() 获取列表索引值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(string $Index) 设置列表索引值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskList() 获取风险列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskList(array $RiskList) 设置风险列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSuggestionList() 获取建议列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestionList(array $SuggestionList) 设置建议列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusCode() 获取HTTP响应状态码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCode(string $StatusCode) 设置HTTP响应状态码
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServerRisk extends AbstractModel
{
    /**
     * @var string 测绘标签
     */
    public $ServiceTag;

    /**
     * @var integer 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 影响资产
     */
    public $AffectAsset;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 资产类型
     */
    public $InstanceType;

    /**
     * @var string 风险等级
     */
    public $Level;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 组件
     */
    public $Component;

    /**
     * @var string 服务
     */
    public $Service;

    /**
     * @var string 最近识别时间
     */
    public $RecentTime;

    /**
     * @var string 首次识别时间
     */
    public $FirstTime;

    /**
     * @var string 风险详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDetails;

    /**
     * @var string 处置建议
     */
    public $Suggestion;

    /**
     * @var integer 状态，0未处理、1已处置、2已忽略
     */
    public $Status;

    /**
     * @var string 资产唯一id
     */
    public $Id;

    /**
     * @var string 用户appid
     */
    public $AppId;

    /**
     * @var string 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nick;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 服务快照
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceSnapshot;

    /**
     * @var string 服务访问的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 列表索引值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var array 风险列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskList;

    /**
     * @var array 建议列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuggestionList;

    /**
     * @var string HTTP响应状态码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCode;

    /**
     * @param string $ServiceTag 测绘标签
     * @param integer $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AffectAsset 影响资产
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $InstanceType 资产类型
     * @param string $Level 风险等级
     * @param string $Protocol 协议
     * @param string $Component 组件
     * @param string $Service 服务
     * @param string $RecentTime 最近识别时间
     * @param string $FirstTime 首次识别时间
     * @param string $RiskDetails 风险详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Suggestion 处置建议
     * @param integer $Status 状态，0未处理、1已处置、2已忽略
     * @param string $Id 资产唯一id
     * @param string $AppId 用户appid
     * @param string $Nick 用户昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceSnapshot 服务快照
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 服务访问的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Index 列表索引值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskList 风险列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SuggestionList 建议列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusCode HTTP响应状态码
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
        if (array_key_exists("ServiceTag",$param) and $param["ServiceTag"] !== null) {
            $this->ServiceTag = $param["ServiceTag"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("AffectAsset",$param) and $param["AffectAsset"] !== null) {
            $this->AffectAsset = $param["AffectAsset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("RecentTime",$param) and $param["RecentTime"] !== null) {
            $this->RecentTime = $param["RecentTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("RiskDetails",$param) and $param["RiskDetails"] !== null) {
            $this->RiskDetails = $param["RiskDetails"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ServiceSnapshot",$param) and $param["ServiceSnapshot"] !== null) {
            $this->ServiceSnapshot = $param["ServiceSnapshot"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("RiskList",$param) and $param["RiskList"] !== null) {
            $this->RiskList = [];
            foreach ($param["RiskList"] as $key => $value){
                $obj = new ServerRiskSuggestion();
                $obj->deserialize($value);
                array_push($this->RiskList, $obj);
            }
        }

        if (array_key_exists("SuggestionList",$param) and $param["SuggestionList"] !== null) {
            $this->SuggestionList = [];
            foreach ($param["SuggestionList"] as $key => $value){
                $obj = new ServerRiskSuggestion();
                $obj->deserialize($value);
                array_push($this->SuggestionList, $obj);
            }
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }
    }
}
