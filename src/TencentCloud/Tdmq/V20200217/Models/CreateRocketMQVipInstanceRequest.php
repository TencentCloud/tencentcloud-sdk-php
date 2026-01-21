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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRocketMQVipInstance请求参数结构体
 *
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getSpec() 获取集群规格，支持规格有 1.通用型:rocket-vip-basic-0; 2.基础型:rocket-vip-basic-1; 3.标准型:rocket-vip-basic-2; 4.高阶Ⅰ型:rocket-vip-basic-3; 5.高阶Ⅱ型:rocket-vip-basic-4
 * @method void setSpec(string $Spec) 设置集群规格，支持规格有 1.通用型:rocket-vip-basic-0; 2.基础型:rocket-vip-basic-1; 3.标准型:rocket-vip-basic-2; 4.高阶Ⅰ型:rocket-vip-basic-3; 5.高阶Ⅱ型:rocket-vip-basic-4
 * @method integer getStorageSize() 获取单节点存储空间，GB为单位，最低200GB
 * @method void setStorageSize(integer $StorageSize) 设置单节点存储空间，GB为单位，最低200GB
 * @method array getZoneIds() 获取节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
 * @method void setZoneIds(array $ZoneIds) 设置节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
 * @method VpcInfo getVpcInfo() 获取VPC信息
 * @method void setVpcInfo(VpcInfo $VpcInfo) 设置VPC信息
 * @method integer getTimeSpan() 获取购买时长，月为单位
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长，月为单位
 * @method integer getNodeCount() 获取节点数量，创建专享集群时必填
 * @method void setNodeCount(integer $NodeCount) 设置节点数量，创建专享集群时必填
 * @method string getGeneralSkuCode() 获取通用集群规格标识，新购通用集群时必填，从 [DescribeRocketMQGeneralSKUs](https://cloud.tencent.com/document/api/1179/127066) 接口返回的 [GeneralSKU](https://cloud.tencent.com/document/api/1179/46089#GeneralSKU) 字段获取。
 * @method void setGeneralSkuCode(string $GeneralSkuCode) 设置通用集群规格标识，新购通用集群时必填，从 [DescribeRocketMQGeneralSKUs](https://cloud.tencent.com/document/api/1179/127066) 接口返回的 [GeneralSKU](https://cloud.tencent.com/document/api/1179/46089#GeneralSKU) 字段获取。
 * @method boolean getSupportsMigrateToCloud() 获取是否用于迁移上云，默认为false
 * @method void setSupportsMigrateToCloud(boolean $SupportsMigrateToCloud) 设置是否用于迁移上云，默认为false
 * @method boolean getEnablePublic() 获取是否开启公网
 * @method void setEnablePublic(boolean $EnablePublic) 设置是否开启公网
 * @method integer getBandwidth() 获取公网带宽，在开启公网情况下为必传字段
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽，在开启公网情况下为必传字段
 * @method array getIpRules() 获取公网白名单
 * @method void setIpRules(array $IpRules) 设置公网白名单
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class CreateRocketMQVipInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 集群规格，支持规格有 1.通用型:rocket-vip-basic-0; 2.基础型:rocket-vip-basic-1; 3.标准型:rocket-vip-basic-2; 4.高阶Ⅰ型:rocket-vip-basic-3; 5.高阶Ⅱ型:rocket-vip-basic-4
     */
    public $Spec;

    /**
     * @var integer 单节点存储空间，GB为单位，最低200GB
     */
    public $StorageSize;

    /**
     * @var array 节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
     */
    public $ZoneIds;

    /**
     * @var VpcInfo VPC信息
     */
    public $VpcInfo;

    /**
     * @var integer 购买时长，月为单位
     */
    public $TimeSpan;

    /**
     * @var integer 节点数量，创建专享集群时必填
     */
    public $NodeCount;

    /**
     * @var string 通用集群规格标识，新购通用集群时必填，从 [DescribeRocketMQGeneralSKUs](https://cloud.tencent.com/document/api/1179/127066) 接口返回的 [GeneralSKU](https://cloud.tencent.com/document/api/1179/46089#GeneralSKU) 字段获取。
     */
    public $GeneralSkuCode;

    /**
     * @var boolean 是否用于迁移上云，默认为false
     */
    public $SupportsMigrateToCloud;

    /**
     * @var boolean 是否开启公网
     */
    public $EnablePublic;

    /**
     * @var integer 公网带宽，在开启公网情况下为必传字段
     */
    public $Bandwidth;

    /**
     * @var array 公网白名单
     */
    public $IpRules;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $Name 实例名称
     * @param string $Spec 集群规格，支持规格有 1.通用型:rocket-vip-basic-0; 2.基础型:rocket-vip-basic-1; 3.标准型:rocket-vip-basic-2; 4.高阶Ⅰ型:rocket-vip-basic-3; 5.高阶Ⅱ型:rocket-vip-basic-4
     * @param integer $StorageSize 单节点存储空间，GB为单位，最低200GB
     * @param array $ZoneIds 节点部署的区域ID列表，如广州一区，则是100001，具体可查询腾讯云官网
     * @param VpcInfo $VpcInfo VPC信息
     * @param integer $TimeSpan 购买时长，月为单位
     * @param integer $NodeCount 节点数量，创建专享集群时必填
     * @param string $GeneralSkuCode 通用集群规格标识，新购通用集群时必填，从 [DescribeRocketMQGeneralSKUs](https://cloud.tencent.com/document/api/1179/127066) 接口返回的 [GeneralSKU](https://cloud.tencent.com/document/api/1179/46089#GeneralSKU) 字段获取。
     * @param boolean $SupportsMigrateToCloud 是否用于迁移上云，默认为false
     * @param boolean $EnablePublic 是否开启公网
     * @param integer $Bandwidth 公网带宽，在开启公网情况下为必传字段
     * @param array $IpRules 公网白名单
     * @param array $Tags 标签
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = new VpcInfo();
            $this->VpcInfo->deserialize($param["VpcInfo"]);
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("GeneralSkuCode",$param) and $param["GeneralSkuCode"] !== null) {
            $this->GeneralSkuCode = $param["GeneralSkuCode"];
        }

        if (array_key_exists("SupportsMigrateToCloud",$param) and $param["SupportsMigrateToCloud"] !== null) {
            $this->SupportsMigrateToCloud = $param["SupportsMigrateToCloud"];
        }

        if (array_key_exists("EnablePublic",$param) and $param["EnablePublic"] !== null) {
            $this->EnablePublic = $param["EnablePublic"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new PublicAccessRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
