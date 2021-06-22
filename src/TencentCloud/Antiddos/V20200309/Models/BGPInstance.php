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
 * 高防包资产实例信息
 *
 * @method InstanceRelation getInstanceDetail() 获取资产实例的详细信息
 * @method void setInstanceDetail(InstanceRelation $InstanceDetail) 设置资产实例的详细信息
 * @method BGPInstanceSpecification getSpecificationLimit() 获取资产实例的规格信息
 * @method void setSpecificationLimit(BGPInstanceSpecification $SpecificationLimit) 设置资产实例的规格信息
 * @method BGPInstanceUsages getUsage() 获取资产实例的使用统计信息
 * @method void setUsage(BGPInstanceUsages $Usage) 设置资产实例的使用统计信息
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
 * @method string getCreatedTime() 获取购买时间
 * @method void setCreatedTime(string $CreatedTime) 设置购买时间
 * @method string getExpiredTime() 获取到期时间
 * @method void setExpiredTime(string $ExpiredTime) 设置到期时间
 * @method string getName() 获取资产实例的名称
 * @method void setName(string $Name) 设置资产实例的名称
 * @method PackInfo getPackInfo() 获取资产实例所属的套餐包信息，
注意：当资产实例不是套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackInfo(PackInfo $PackInfo) 设置资产实例所属的套餐包信息，
注意：当资产实例不是套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEipProductInfos() 获取高防包绑定的EIP属于的云产品信息
 * @method void setEipProductInfos(array $EipProductInfos) 设置高防包绑定的EIP属于的云产品信息
 * @method string getBoundStatus() 获取高防包绑定状态，取值[
"idle"：绑定已完成
 "bounding"：正在绑定中
"failed"：绑定失败
]
 * @method void setBoundStatus(string $BoundStatus) 设置高防包绑定状态，取值[
"idle"：绑定已完成
 "bounding"：正在绑定中
"failed"：绑定失败
]
 * @method string getDDoSLevel() 获取四层防护严格级别
 * @method void setDDoSLevel(string $DDoSLevel) 设置四层防护严格级别
 * @method integer getCCEnable() 获取CC防护开关
 * @method void setCCEnable(integer $CCEnable) 设置CC防护开关
 */
class BGPInstance extends AbstractModel
{
    /**
     * @var InstanceRelation 资产实例的详细信息
     */
    public $InstanceDetail;

    /**
     * @var BGPInstanceSpecification 资产实例的规格信息
     */
    public $SpecificationLimit;

    /**
     * @var BGPInstanceUsages 资产实例的使用统计信息
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
    public $CreatedTime;

    /**
     * @var string 到期时间
     */
    public $ExpiredTime;

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
     * @var array 高防包绑定的EIP属于的云产品信息
     */
    public $EipProductInfos;

    /**
     * @var string 高防包绑定状态，取值[
"idle"：绑定已完成
 "bounding"：正在绑定中
"failed"：绑定失败
]
     */
    public $BoundStatus;

    /**
     * @var string 四层防护严格级别
     */
    public $DDoSLevel;

    /**
     * @var integer CC防护开关
     */
    public $CCEnable;

    /**
     * @param InstanceRelation $InstanceDetail 资产实例的详细信息
     * @param BGPInstanceSpecification $SpecificationLimit 资产实例的规格信息
     * @param BGPInstanceUsages $Usage 资产实例的使用统计信息
     * @param RegionInfo $Region 资产实例所在的地域
     * @param string $Status 资产实例的防护状态，状态码如下：
"idle"：正常状态(无攻击)
"attacking"：攻击中
"blocking"：封堵中
"creating"：创建中
"deblocking"：解封中
"isolate"：回收隔离中
     * @param string $CreatedTime 购买时间
     * @param string $ExpiredTime 到期时间
     * @param string $Name 资产实例的名称
     * @param PackInfo $PackInfo 资产实例所属的套餐包信息，
注意：当资产实例不是套餐包的实例时，此字段为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EipProductInfos 高防包绑定的EIP属于的云产品信息
     * @param string $BoundStatus 高防包绑定状态，取值[
"idle"：绑定已完成
 "bounding"：正在绑定中
"failed"：绑定失败
]
     * @param string $DDoSLevel 四层防护严格级别
     * @param integer $CCEnable CC防护开关
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
            $this->SpecificationLimit = new BGPInstanceSpecification();
            $this->SpecificationLimit->deserialize($param["SpecificationLimit"]);
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = new BGPInstanceUsages();
            $this->Usage->deserialize($param["Usage"]);
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = new RegionInfo();
            $this->Region->deserialize($param["Region"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PackInfo",$param) and $param["PackInfo"] !== null) {
            $this->PackInfo = new PackInfo();
            $this->PackInfo->deserialize($param["PackInfo"]);
        }

        if (array_key_exists("EipProductInfos",$param) and $param["EipProductInfos"] !== null) {
            $this->EipProductInfos = [];
            foreach ($param["EipProductInfos"] as $key => $value){
                $obj = new EipProductInfo();
                $obj->deserialize($value);
                array_push($this->EipProductInfos, $obj);
            }
        }

        if (array_key_exists("BoundStatus",$param) and $param["BoundStatus"] !== null) {
            $this->BoundStatus = $param["BoundStatus"];
        }

        if (array_key_exists("DDoSLevel",$param) and $param["DDoSLevel"] !== null) {
            $this->DDoSLevel = $param["DDoSLevel"];
        }

        if (array_key_exists("CCEnable",$param) and $param["CCEnable"] !== null) {
            $this->CCEnable = $param["CCEnable"];
        }
    }
}
