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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceContent(string $SourceContent) 设置访问源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetContent() 获取访问目的
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetContent(string $TargetContent) 设置访问目的
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleAction() 获取访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleAction(string $RuleAction) 设置访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取命中次数
 * @method void setCount(integer $Count) 设置命中次数
 * @method integer getOrderIndex() 获取执行顺序
 * @method void setOrderIndex(integer $OrderIndex) 设置执行顺序
 * @method string getSourceType() 获取访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(string $SourceType) 设置访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetType() 获取访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetType(string $TargetType) 设置访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUuid() 获取规则对应的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(integer $Uuid) 设置规则对应的唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInvalid() 获取规则有效性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvalid(integer $Invalid) 设置规则有效性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsRegion() 获取0为正常规则,1为地域规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsRegion(integer $IsRegion) 设置0为正常规则,1为地域规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCountryCode() 获取国家id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountryCode(integer $CountryCode) 设置国家id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCityCode() 获取城市id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityCode(integer $CityCode) 设置城市id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountryName() 获取国家名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountryName(string $CountryName) 设置国家名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCityName() 获取省名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCityName(string $CityName) 设置省名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudCode() 获取云厂商code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudCode(string $CloudCode) 设置云厂商code
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsCloud() 获取0为正常规则,1为云厂商规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCloud(integer $IsCloud) 设置0为正常规则,1为云厂商规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnable() 获取规则状态，true表示启用，false表示禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(string $Enable) 设置规则状态，true表示启用，false表示禁用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDirection() 获取规则方向：1，入向；0，出向
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirection(integer $Direction) 设置规则方向：1，入向；0，出向
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternalUuid() 获取内部使用的uuid，一般情况下不会使用到该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalUuid(integer $InternalUuid) 设置内部使用的uuid，一般情况下不会使用到该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBetaList() 获取关联任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBetaList(array $BetaList) 设置关联任务详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescAcItem extends AbstractModel
{
    /**
     * @var string 访问源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceContent;

    /**
     * @var string 访问目的
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetContent;

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
     * @var string 访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleAction;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var string 访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetType;

    /**
     * @var integer 规则对应的唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var integer 规则有效性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Invalid;

    /**
     * @var integer 0为正常规则,1为地域规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsRegion;

    /**
     * @var integer 国家id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountryCode;

    /**
     * @var integer 城市id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityCode;

    /**
     * @var string 国家名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountryName;

    /**
     * @var string 省名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CityName;

    /**
     * @var string 云厂商code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudCode;

    /**
     * @var integer 0为正常规则,1为云厂商规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCloud;

    /**
     * @var string 规则状态，true表示启用，false表示禁用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 规则方向：1，入向；0，出向
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Direction;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var integer 内部使用的uuid，一般情况下不会使用到该字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalUuid;

    /**
     * @var integer 规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 关联任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BetaList;

    /**
     * @param string $SourceContent 访问源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetContent 访问目的
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleAction 访问控制策略中设置的流量通过云防火墙的方式。取值： accept：放行 drop：拒绝 log：观察
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 命中次数
     * @param integer $OrderIndex 执行顺序
     * @param string $SourceType 访问源类型：入向规则时类型可以为 ip,net,template,location；出向规则时可以为 ip,net,template,instance,group,tag
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetType 访问目的类型：入向规则时类型可以为ip,net,template,instance,group,tag；出向规则时可以为 ip,net,domain,template,location
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Uuid 规则对应的唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Invalid 规则有效性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsRegion 0为正常规则,1为地域规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CountryCode 国家id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CityCode 城市id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CountryName 国家名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CityName 省名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudCode 云厂商code
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsCloud 0为正常规则,1为云厂商规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Enable 规则状态，true表示启用，false表示禁用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Direction 规则方向：1，入向；0，出向
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternalUuid 内部使用的uuid，一般情况下不会使用到该字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 规则状态，查询规则命中详情时该字段有效，0：新增，1: 已删除, 2: 编辑删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BetaList 关联任务详情
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
    }
}
