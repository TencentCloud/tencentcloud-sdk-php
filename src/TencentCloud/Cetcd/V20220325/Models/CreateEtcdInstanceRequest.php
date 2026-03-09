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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEtcdInstance请求参数结构体
 *
 * @method string getName() 获取etcd实例名称
 * @method void setName(string $Name) 设置etcd实例名称
 * @method string getVpcId() 获取etcd所属vpc
 * @method void setVpcId(string $VpcId) 设置etcd所属vpc
 * @method string getServiceSubnetId() 获取etcd对外提供访问ip地址所在子网
 * @method void setServiceSubnetId(string $ServiceSubnetId) 设置etcd对外提供访问ip地址所在子网
 * @method array getSubnetIds() 获取etcd部署子网
 * @method void setSubnetIds(array $SubnetIds) 设置etcd部署子网
 * @method string getEtcdVersion() 获取etcd版本
 * @method void setEtcdVersion(string $EtcdVersion) 设置etcd版本
 * @method integer getSize() 获取etcd节点个数，可选范围: 1, 3, 5, 7, 9
 * @method void setSize(integer $Size) 设置etcd节点个数，可选范围: 1, 3, 5, 7, 9
 * @method string getDescription() 获取etcd集群描述信息
 * @method void setDescription(string $Description) 设置etcd集群描述信息
 * @method EtcdAdvancedSettings getAdvancedSettings() 获取高级设置
 * @method void setAdvancedSettings(EtcdAdvancedSettings $AdvancedSettings) 设置高级设置
 * @method string getChargeType() 获取付费类型：
PREPAID 预付费
POSTPAID_BY_HOUR 后付费按小时付费
 * @method void setChargeType(string $ChargeType) 设置付费类型：
PREPAID 预付费
POSTPAID_BY_HOUR 后付费按小时付费
 * @method ChargePrepaidConfig getChargePrepaid() 获取预付费相关配置
 * @method void setChargePrepaid(ChargePrepaidConfig $ChargePrepaid) 设置预付费相关配置
 * @method integer getDiskSize() 获取存储大小GB
 * @method void setDiskSize(integer $DiskSize) 设置存储大小GB
 * @method boolean getDeletionProtection() 获取删除保护，true 删除保护开启；false删除保护关闭
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护，true 删除保护开启；false删除保护关闭
 */
class CreateEtcdInstanceRequest extends AbstractModel
{
    /**
     * @var string etcd实例名称
     */
    public $Name;

    /**
     * @var string etcd所属vpc
     */
    public $VpcId;

    /**
     * @var string etcd对外提供访问ip地址所在子网
     */
    public $ServiceSubnetId;

    /**
     * @var array etcd部署子网
     */
    public $SubnetIds;

    /**
     * @var string etcd版本
     */
    public $EtcdVersion;

    /**
     * @var integer etcd节点个数，可选范围: 1, 3, 5, 7, 9
     */
    public $Size;

    /**
     * @var string etcd集群描述信息
     */
    public $Description;

    /**
     * @var EtcdAdvancedSettings 高级设置
     */
    public $AdvancedSettings;

    /**
     * @var string 付费类型：
PREPAID 预付费
POSTPAID_BY_HOUR 后付费按小时付费
     */
    public $ChargeType;

    /**
     * @var ChargePrepaidConfig 预付费相关配置
     */
    public $ChargePrepaid;

    /**
     * @var integer 存储大小GB
     */
    public $DiskSize;

    /**
     * @var boolean 删除保护，true 删除保护开启；false删除保护关闭
     */
    public $DeletionProtection;

    /**
     * @param string $Name etcd实例名称
     * @param string $VpcId etcd所属vpc
     * @param string $ServiceSubnetId etcd对外提供访问ip地址所在子网
     * @param array $SubnetIds etcd部署子网
     * @param string $EtcdVersion etcd版本
     * @param integer $Size etcd节点个数，可选范围: 1, 3, 5, 7, 9
     * @param string $Description etcd集群描述信息
     * @param EtcdAdvancedSettings $AdvancedSettings 高级设置
     * @param string $ChargeType 付费类型：
PREPAID 预付费
POSTPAID_BY_HOUR 后付费按小时付费
     * @param ChargePrepaidConfig $ChargePrepaid 预付费相关配置
     * @param integer $DiskSize 存储大小GB
     * @param boolean $DeletionProtection 删除保护，true 删除保护开启；false删除保护关闭
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ServiceSubnetId",$param) and $param["ServiceSubnetId"] !== null) {
            $this->ServiceSubnetId = $param["ServiceSubnetId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("EtcdVersion",$param) and $param["EtcdVersion"] !== null) {
            $this->EtcdVersion = $param["EtcdVersion"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AdvancedSettings",$param) and $param["AdvancedSettings"] !== null) {
            $this->AdvancedSettings = new EtcdAdvancedSettings();
            $this->AdvancedSettings->deserialize($param["AdvancedSettings"]);
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePrepaid",$param) and $param["ChargePrepaid"] !== null) {
            $this->ChargePrepaid = new ChargePrepaidConfig();
            $this->ChargePrepaid->deserialize($param["ChargePrepaid"]);
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
