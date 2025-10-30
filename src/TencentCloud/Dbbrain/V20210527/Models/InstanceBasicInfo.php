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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例基础信息。
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getVip() 获取实例内网IP。
 * @method void setVip(string $Vip) 设置实例内网IP。
 * @method integer getVport() 获取实例内网Port。
 * @method void setVport(integer $Vport) 设置实例内网Port。
 * @method string getProduct() 获取实例产品。
 * @method void setProduct(string $Product) 设置实例产品。
 * @method string getEngineVersion() 获取实例引擎版本。
 * @method void setEngineVersion(string $EngineVersion) 设置实例引擎版本。
 * @method integer getCpu() 获取CPU数量，对于Redis为0。
 * @method void setCpu(integer $Cpu) 设置CPU数量，对于Redis为0。
 * @method string getDeployMode() 获取实例部署模式。
 * @method void setDeployMode(string $DeployMode) 设置实例部署模式。
 * @method RedisInstanceConf getInstanceConf() 获取实例内存配置。
 * @method void setInstanceConf(RedisInstanceConf $InstanceConf) 设置实例内存配置。
 * @method boolean getIsSupported() 获取DBbrain是否支持该实例。
 * @method void setIsSupported(boolean $IsSupported) 设置DBbrain是否支持该实例。
 * @method integer getMemory() 获取实例内存，单位MB。
 * @method void setMemory(integer $Memory) 设置实例内存，单位MB。
 * @method string getRegion() 获取实例地域。
 * @method void setRegion(string $Region) 设置实例地域。
 * @method string getUniqSubnetId() 获取实例子网统一ID，对于redis为空字符串。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置实例子网统一ID，对于redis为空字符串。
 * @method string getUniqVpcId() 获取实例私有网络统一ID，对于redis为空字符串。
 * @method void setUniqVpcId(string $UniqVpcId) 设置实例私有网络统一ID，对于redis为空字符串。
 * @method integer getVolume() 获取实例磁盘容量，对于Redis为0。
 * @method void setVolume(integer $Volume) 设置实例磁盘容量，对于Redis为0。
 */
class InstanceBasicInfo extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例内网IP。
     */
    public $Vip;

    /**
     * @var integer 实例内网Port。
     */
    public $Vport;

    /**
     * @var string 实例产品。
     */
    public $Product;

    /**
     * @var string 实例引擎版本。
     */
    public $EngineVersion;

    /**
     * @var integer CPU数量，对于Redis为0。
     */
    public $Cpu;

    /**
     * @var string 实例部署模式。
     */
    public $DeployMode;

    /**
     * @var RedisInstanceConf 实例内存配置。
     */
    public $InstanceConf;

    /**
     * @var boolean DBbrain是否支持该实例。
     */
    public $IsSupported;

    /**
     * @var integer 实例内存，单位MB。
     */
    public $Memory;

    /**
     * @var string 实例地域。
     */
    public $Region;

    /**
     * @var string 实例子网统一ID，对于redis为空字符串。
     */
    public $UniqSubnetId;

    /**
     * @var string 实例私有网络统一ID，对于redis为空字符串。
     */
    public $UniqVpcId;

    /**
     * @var integer 实例磁盘容量，对于Redis为0。
     */
    public $Volume;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InstanceName 实例名称。
     * @param string $Vip 实例内网IP。
     * @param integer $Vport 实例内网Port。
     * @param string $Product 实例产品。
     * @param string $EngineVersion 实例引擎版本。
     * @param integer $Cpu CPU数量，对于Redis为0。
     * @param string $DeployMode 实例部署模式。
     * @param RedisInstanceConf $InstanceConf 实例内存配置。
     * @param boolean $IsSupported DBbrain是否支持该实例。
     * @param integer $Memory 实例内存，单位MB。
     * @param string $Region 实例地域。
     * @param string $UniqSubnetId 实例子网统一ID，对于redis为空字符串。
     * @param string $UniqVpcId 实例私有网络统一ID，对于redis为空字符串。
     * @param integer $Volume 实例磁盘容量，对于Redis为0。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("InstanceConf",$param) and $param["InstanceConf"] !== null) {
            $this->InstanceConf = new RedisInstanceConf();
            $this->InstanceConf->deserialize($param["InstanceConf"]);
        }

        if (array_key_exists("IsSupported",$param) and $param["IsSupported"] !== null) {
            $this->IsSupported = $param["IsSupported"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
