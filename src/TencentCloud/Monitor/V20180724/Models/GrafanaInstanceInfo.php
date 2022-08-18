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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询 Grafana 实例时的实例类型
 *
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method array getSubnetIds() 获取子网 ID 数组
 * @method void setSubnetIds(array $SubnetIds) 设置子网 ID 数组
 * @method string getInternetUrl() 获取Grafana 内网地址
 * @method void setInternetUrl(string $InternetUrl) 设置Grafana 内网地址
 * @method string getInternalUrl() 获取Grafana 公网地址
 * @method void setInternalUrl(string $InternalUrl) 设置Grafana 公网地址
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method integer getInstanceStatus() 获取运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:停机中； 6:已停机； 7: 已删除）
 * @method void setInstanceStatus(integer $InstanceStatus) 设置运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:停机中； 6:已停机； 7: 已删除）
 * @method array getTagSpecification() 获取实例的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(array $TagSpecification) 设置实例的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取实例的可用区
 * @method void setZone(string $Zone) 设置实例的可用区
 * @method integer getInstanceChargeType() 获取计费模式（1:包年包月）
 * @method void setInstanceChargeType(integer $InstanceChargeType) 设置计费模式（1:包年包月）
 * @method string getVpcName() 获取VPC 名称
 * @method void setVpcName(string $VpcName) 设置VPC 名称
 * @method string getSubnetName() 获取子网名称
 * @method void setSubnetName(string $SubnetName) 设置子网名称
 * @method integer getRegionId() 获取地域 ID
 * @method void setRegionId(integer $RegionId) 设置地域 ID
 * @method string getRootUrl() 获取可访问此实例的完整 URL
 * @method void setRootUrl(string $RootUrl) 设置可访问此实例的完整 URL
 * @method boolean getEnableSSO() 获取是否开启 SSO
 * @method void setEnableSSO(boolean $EnableSSO) 设置是否开启 SSO
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method boolean getEnableSSOCamCheck() 获取SSO登录时是否开启cam鉴权
 * @method void setEnableSSOCamCheck(boolean $EnableSSOCamCheck) 设置SSO登录时是否开启cam鉴权
 */
class GrafanaInstanceInfo extends AbstractModel
{
    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var array 子网 ID 数组
     */
    public $SubnetIds;

    /**
     * @var string Grafana 内网地址
     */
    public $InternetUrl;

    /**
     * @var string Grafana 公网地址
     */
    public $InternalUrl;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:停机中； 6:已停机； 7: 已删除）
     */
    public $InstanceStatus;

    /**
     * @var array 实例的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @var string 实例的可用区
     */
    public $Zone;

    /**
     * @var integer 计费模式（1:包年包月）
     */
    public $InstanceChargeType;

    /**
     * @var string VPC 名称
     */
    public $VpcName;

    /**
     * @var string 子网名称
     */
    public $SubnetName;

    /**
     * @var integer 地域 ID
     */
    public $RegionId;

    /**
     * @var string 可访问此实例的完整 URL
     */
    public $RootUrl;

    /**
     * @var boolean 是否开启 SSO
     */
    public $EnableSSO;

    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var boolean SSO登录时是否开启cam鉴权
     */
    public $EnableSSOCamCheck;

    /**
     * @param string $InstanceName 实例名
     * @param string $InstanceId 实例 ID
     * @param string $Region 地域
     * @param string $VpcId VPC ID
     * @param array $SubnetIds 子网 ID 数组
     * @param string $InternetUrl Grafana 内网地址
     * @param string $InternalUrl Grafana 公网地址
     * @param string $CreatedAt 创建时间
     * @param integer $InstanceStatus 运行状态（1:正在创建；2:运行中；3:异常；4:重启中；5:停机中； 6:已停机； 7: 已删除）
     * @param array $TagSpecification 实例的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 实例的可用区
     * @param integer $InstanceChargeType 计费模式（1:包年包月）
     * @param string $VpcName VPC 名称
     * @param string $SubnetName 子网名称
     * @param integer $RegionId 地域 ID
     * @param string $RootUrl 可访问此实例的完整 URL
     * @param boolean $EnableSSO 是否开启 SSO
     * @param string $Version 版本号
     * @param boolean $EnableSSOCamCheck SSO登录时是否开启cam鉴权
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("InternalUrl",$param) and $param["InternalUrl"] !== null) {
            $this->InternalUrl = $param["InternalUrl"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RootUrl",$param) and $param["RootUrl"] !== null) {
            $this->RootUrl = $param["RootUrl"];
        }

        if (array_key_exists("EnableSSO",$param) and $param["EnableSSO"] !== null) {
            $this->EnableSSO = $param["EnableSSO"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("EnableSSOCamCheck",$param) and $param["EnableSSOCamCheck"] !== null) {
            $this->EnableSSOCamCheck = $param["EnableSSOCamCheck"];
        }
    }
}
