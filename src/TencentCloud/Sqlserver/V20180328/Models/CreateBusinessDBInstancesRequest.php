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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBusinessDBInstances请求参数结构体
 *
 * @method string getZone() 获取实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method void setZone(string $Zone) 设置实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
 * @method integer getMemory() 获取实例内存大小，单位GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位GB
 * @method integer getStorage() 获取实例磁盘大小，单位GB
 * @method void setStorage(integer $Storage) 设置实例磁盘大小，单位GB
 * @method integer getCpu() 获取预购买实例的CPU核心数
 * @method void setCpu(integer $Cpu) 设置预购买实例的CPU核心数
 * @method string getMachineType() 获取购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
 * @method void setMachineType(string $MachineType) 设置购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getGoodsNum() 获取本次购买几个实例，默认值为1
 * @method void setGoodsNum(integer $GoodsNum) 设置本次购买几个实例，默认值为1
 * @method string getSubnetId() 获取VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
 * @method void setSubnetId(string $SubnetId) 设置VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
 * @method string getVpcId() 获取VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
 * @method void setVpcId(string $VpcId) 设置VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
 * @method string getDBVersion() 获取商业智能服务器版本，目前只支持：201603（SQL Server 2016 Integration Services），201703（SQL Server 2017 Integration Services），201903（SQL Server 2019 Integration Services）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本201903。
 * @method void setDBVersion(string $DBVersion) 设置商业智能服务器版本，目前只支持：201603（SQL Server 2016 Integration Services），201703（SQL Server 2017 Integration Services），201903（SQL Server 2019 Integration Services）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本201903。
 * @method array getSecurityGroupList() 获取安全组列表，填写形如sg-xxx的安全组ID
 * @method void setSecurityGroupList(array $SecurityGroupList) 设置安全组列表，填写形如sg-xxx的安全组ID
 * @method array getWeekly() 获取可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
 * @method void setWeekly(array $Weekly) 设置可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
 * @method string getStartTime() 获取可维护时间窗配置，每天可维护的开始时间
 * @method void setStartTime(string $StartTime) 设置可维护时间窗配置，每天可维护的开始时间
 * @method integer getSpan() 获取可维护时间窗配置，持续时间，单位：小时
 * @method void setSpan(integer $Span) 设置可维护时间窗配置，持续时间，单位：小时
 * @method array getResourceTags() 获取新建实例绑定的标签集合
 * @method void setResourceTags(array $ResourceTags) 设置新建实例绑定的标签集合
 */
class CreateBusinessDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     */
    public $Zone;

    /**
     * @var integer 实例内存大小，单位GB
     */
    public $Memory;

    /**
     * @var integer 实例磁盘大小，单位GB
     */
    public $Storage;

    /**
     * @var integer 预购买实例的CPU核心数
     */
    public $Cpu;

    /**
     * @var string 购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
     */
    public $MachineType;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 本次购买几个实例，默认值为1
     */
    public $GoodsNum;

    /**
     * @var string VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
     */
    public $SubnetId;

    /**
     * @var string VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
     */
    public $VpcId;

    /**
     * @var string 商业智能服务器版本，目前只支持：201603（SQL Server 2016 Integration Services），201703（SQL Server 2017 Integration Services），201903（SQL Server 2019 Integration Services）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本201903。
     */
    public $DBVersion;

    /**
     * @var array 安全组列表，填写形如sg-xxx的安全组ID
     */
    public $SecurityGroupList;

    /**
     * @var array 可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
     */
    public $Weekly;

    /**
     * @var string 可维护时间窗配置，每天可维护的开始时间
     */
    public $StartTime;

    /**
     * @var integer 可维护时间窗配置，持续时间，单位：小时
     */
    public $Span;

    /**
     * @var array 新建实例绑定的标签集合
     */
    public $ResourceTags;

    /**
     * @param string $Zone 实例可用区，类似ap-guangzhou-1（广州一区）；实例可售卖区域可以通过接口DescribeZones获取
     * @param integer $Memory 实例内存大小，单位GB
     * @param integer $Storage 实例磁盘大小，单位GB
     * @param integer $Cpu 预购买实例的CPU核心数
     * @param string $MachineType 购买实例的宿主机类型，CLOUD_PREMIUM-虚拟机高性能云盘，CLOUD_SSD-虚拟机SSD云盘
     * @param integer $ProjectId 项目ID
     * @param integer $GoodsNum 本次购买几个实例，默认值为1
     * @param string $SubnetId VPC子网ID，形如subnet-bdoe83fa；SubnetId和VpcId需同时设置或者同时不设置
     * @param string $VpcId VPC网络ID，形如vpc-dsp338hz；SubnetId和VpcId需同时设置或者同时不设置
     * @param string $DBVersion 商业智能服务器版本，目前只支持：201603（SQL Server 2016 Integration Services），201703（SQL Server 2017 Integration Services），201903（SQL Server 2019 Integration Services）版本。每个地域支持售卖的版本不同，可通过DescribeProductConfig接口来拉取每个地域可售卖的版本信息。不填，默认为版本201903。
     * @param array $SecurityGroupList 安全组列表，填写形如sg-xxx的安全组ID
     * @param array $Weekly 可维护时间窗配置，以周为单位，表示周几允许维护，1-7分别代表周一到周末
     * @param string $StartTime 可维护时间窗配置，每天可维护的开始时间
     * @param integer $Span 可维护时间窗配置，持续时间，单位：小时
     * @param array $ResourceTags 新建实例绑定的标签集合
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = $param["Weekly"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Span",$param) and $param["Span"] !== null) {
            $this->Span = $param["Span"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
