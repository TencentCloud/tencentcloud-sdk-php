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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问控制列表对象
 *
 * @method string getSourceContent() 获取访问源
 * @method void setSourceContent(string $SourceContent) 设置访问源
 * @method string getTargetContent() 获取访问目的
 * @method void setTargetContent(string $TargetContent) 设置访问目的
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getPort() 获取端口
 * @method void setPort(string $Port) 设置端口
 * @method string getRuleAction() 获取访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
 * @method void setRuleAction(string $RuleAction) 设置访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getCount() 获取命中次数
 * @method void setCount(integer $Count) 设置命中次数
 * @method integer getOrderIndex() 获取执行顺序
 * @method void setOrderIndex(integer $OrderIndex) 设置执行顺序
 * @method string getSourceType() 获取访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
 * @method void setSourceType(string $SourceType) 设置访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
 * @method string getTargetType() 获取访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location,dnsparse
 * @method void setTargetType(string $TargetType) 设置访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location,dnsparse
 * @method integer getUuid() 获取规则对应的唯一id
 * @method void setUuid(integer $Uuid) 设置规则对应的唯一id
 * @method integer getInvalid() 获取规则有效性
 * @method void setInvalid(integer $Invalid) 设置规则有效性
 * @method integer getIsRegion() 获取0为正常规则,1为地域规则
 * @method void setIsRegion(integer $IsRegion) 设置0为正常规则,1为地域规则
 * @method integer getCountryCode() 获取国家id
 * @method void setCountryCode(integer $CountryCode) 设置国家id
 * @method integer getCityCode() 获取城市id
 * @method void setCityCode(integer $CityCode) 设置城市id
 * @method string getCountryName() 获取国家名称
 * @method void setCountryName(string $CountryName) 设置国家名称
 * @method string getCityName() 获取省名称
 * @method void setCityName(string $CityName) 设置省名称
 * @method string getCloudCode() 获取云厂商code
 * @method void setCloudCode(string $CloudCode) 设置云厂商code
 * @method integer getIsCloud() 获取0为正常规则,1为云厂商规则
 * @method void setIsCloud(integer $IsCloud) 设置0为正常规则,1为云厂商规则
 * @method string getEnable() 获取规则状态，true表示启用，false表示禁用
 * @method void setEnable(string $Enable) 设置规则状态，true表示启用，false表示禁用
 * @method integer getDirection() 获取规则方向：1，入向；0，出向
 * @method void setDirection(integer $Direction) 设置规则方向：1，入向；0，出向
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getInternalUuid() 获取内部使用的uuid，一般情况下不会使用到该字段
 * @method void setInternalUuid(integer $InternalUuid) 设置内部使用的uuid，一般情况下不会使用到该字段
 * @method integer getStatus() 获取规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
 * @method void setStatus(integer $Status) 设置规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
 * @method array getBetaList() 获取关联任务详情
 * @method void setBetaList(array $BetaList) 设置关联任务详情
 * @method string getScope() 获取（1）互联网边界防火墙，生效范围：serial，串行；side，旁路；all，全局；
（2）NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
 * @method void setScope(string $Scope) 设置（1）互联网边界防火墙，生效范围：serial，串行；side，旁路；all，全局；
（2）NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
 * @method string getScopeDesc() 获取生效范围描述
 * @method void setScopeDesc(string $ScopeDesc) 设置生效范围描述
 * @method string getInternetBorderUuid() 获取互联网边界防火墙使用的内部规则id
 * @method void setInternetBorderUuid(string $InternetBorderUuid) 设置互联网边界防火墙使用的内部规则id
 * @method string getParamTemplateName() 获取协议端口组名称
 * @method void setParamTemplateName(string $ParamTemplateName) 设置协议端口组名称
 * @method string getParamTemplateId() 获取协议端口组ID
 * @method void setParamTemplateId(string $ParamTemplateId) 设置协议端口组ID
 * @method string getSourceName() 获取访问源名称
 * @method void setSourceName(string $SourceName) 设置访问源名称
 * @method string getTargetName() 获取访问目的名称
 * @method void setTargetName(string $TargetName) 设置访问目的名称
 * @method string getLastHitTime() 获取规则最近命中时间
 * @method void setLastHitTime(string $LastHitTime) 设置规则最近命中时间
 */
class DescAcItem extends AbstractModel
{
    /**
     * @var string 访问源
     */
    public $SourceContent;

    /**
     * @var string 访问目的
     */
    public $TargetContent;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 端口
     */
    public $Port;

    /**
     * @var string 访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
     */
    public $RuleAction;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 命中次数
     */
    public $Count;

    /**
     * @var integer 执行顺序
     */
    public $OrderIndex;

    /**
     * @var string 访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
     */
    public $SourceType;

    /**
     * @var string 访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location,dnsparse
     */
    public $TargetType;

    /**
     * @var integer 规则对应的唯一id
     */
    public $Uuid;

    /**
     * @var integer 规则有效性
     */
    public $Invalid;

    /**
     * @var integer 0为正常规则,1为地域规则
     */
    public $IsRegion;

    /**
     * @var integer 国家id
     */
    public $CountryCode;

    /**
     * @var integer 城市id
     */
    public $CityCode;

    /**
     * @var string 国家名称
     */
    public $CountryName;

    /**
     * @var string 省名称
     */
    public $CityName;

    /**
     * @var string 云厂商code
     */
    public $CloudCode;

    /**
     * @var integer 0为正常规则,1为云厂商规则
     */
    public $IsCloud;

    /**
     * @var string 规则状态，true表示启用，false表示禁用
     */
    public $Enable;

    /**
     * @var integer 规则方向：1，入向；0，出向
     */
    public $Direction;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 内部使用的uuid，一般情况下不会使用到该字段
     */
    public $InternalUuid;

    /**
     * @var integer 规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
     */
    public $Status;

    /**
     * @var array 关联任务详情
     */
    public $BetaList;

    /**
     * @var string （1）互联网边界防火墙，生效范围：serial，串行；side，旁路；all，全局；
（2）NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
     */
    public $Scope;

    /**
     * @var string 生效范围描述
     */
    public $ScopeDesc;

    /**
     * @var string 互联网边界防火墙使用的内部规则id
     */
    public $InternetBorderUuid;

    /**
     * @var string 协议端口组名称
     */
    public $ParamTemplateName;

    /**
     * @var string 协议端口组ID
     */
    public $ParamTemplateId;

    /**
     * @var string 访问源名称
     */
    public $SourceName;

    /**
     * @var string 访问目的名称
     */
    public $TargetName;

    /**
     * @var string 规则最近命中时间
     */
    public $LastHitTime;

    /**
     * @param string $SourceContent 访问源
     * @param string $TargetContent 访问目的
     * @param string $Protocol 协议
     * @param string $Port 端口
     * @param string $RuleAction 访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
     * @param string $Description 描述
     * @param integer $Count 命中次数
     * @param integer $OrderIndex 执行顺序
     * @param string $SourceType 访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
     * @param string $TargetType 访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location,dnsparse
     * @param integer $Uuid 规则对应的唯一id
     * @param integer $Invalid 规则有效性
     * @param integer $IsRegion 0为正常规则,1为地域规则
     * @param integer $CountryCode 国家id
     * @param integer $CityCode 城市id
     * @param string $CountryName 国家名称
     * @param string $CityName 省名称
     * @param string $CloudCode 云厂商code
     * @param integer $IsCloud 0为正常规则,1为云厂商规则
     * @param string $Enable 规则状态，true表示启用，false表示禁用
     * @param integer $Direction 规则方向：1，入向；0，出向
     * @param string $InstanceName 实例名称
     * @param integer $InternalUuid 内部使用的uuid，一般情况下不会使用到该字段
     * @param integer $Status 规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
     * @param array $BetaList 关联任务详情
     * @param string $Scope （1）互联网边界防火墙，生效范围：serial，串行；side，旁路；all，全局；
（2）NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
     * @param string $ScopeDesc 生效范围描述
     * @param string $InternetBorderUuid 互联网边界防火墙使用的内部规则id
     * @param string $ParamTemplateName 协议端口组名称
     * @param string $ParamTemplateId 协议端口组ID
     * @param string $SourceName 访问源名称
     * @param string $TargetName 访问目的名称
     * @param string $LastHitTime 规则最近命中时间
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
        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("TargetContent",$param) and $param["TargetContent"] !== null) {
            $this->TargetContent = $param["TargetContent"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Invalid",$param) and $param["Invalid"] !== null) {
            $this->Invalid = $param["Invalid"];
        }

        if (array_key_exists("IsRegion",$param) and $param["IsRegion"] !== null) {
            $this->IsRegion = $param["IsRegion"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("CityCode",$param) and $param["CityCode"] !== null) {
            $this->CityCode = $param["CityCode"];
        }

        if (array_key_exists("CountryName",$param) and $param["CountryName"] !== null) {
            $this->CountryName = $param["CountryName"];
        }

        if (array_key_exists("CityName",$param) and $param["CityName"] !== null) {
            $this->CityName = $param["CityName"];
        }

        if (array_key_exists("CloudCode",$param) and $param["CloudCode"] !== null) {
            $this->CloudCode = $param["CloudCode"];
        }

        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BetaList",$param) and $param["BetaList"] !== null) {
            $this->BetaList = [];
            foreach ($param["BetaList"] as $key => $value){
                $obj = new BetaInfoByACL();
                $obj->deserialize($value);
                array_push($this->BetaList, $obj);
            }
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ScopeDesc",$param) and $param["ScopeDesc"] !== null) {
            $this->ScopeDesc = $param["ScopeDesc"];
        }

        if (array_key_exists("InternetBorderUuid",$param) and $param["InternetBorderUuid"] !== null) {
            $this->InternetBorderUuid = $param["InternetBorderUuid"];
        }

        if (array_key_exists("ParamTemplateName",$param) and $param["ParamTemplateName"] !== null) {
            $this->ParamTemplateName = $param["ParamTemplateName"];
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("LastHitTime",$param) and $param["LastHitTime"] !== null) {
            $this->LastHitTime = $param["LastHitTime"];
        }
    }
}
