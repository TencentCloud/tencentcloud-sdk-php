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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceState() 获取实例状态：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
ARREARS：表示待回收
STOPPED_NO_CHARGE：表示关机不收费
TERMINATING：表示销毁中
TERMINATED：表示已销毁
 * @method void setInstanceState(string $InstanceState) 设置实例状态：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
ARREARS：表示待回收
STOPPED_NO_CHARGE：表示关机不收费
TERMINATING：表示销毁中
TERMINATED：表示已销毁
 * @method string getApplicationName() 获取应用名称

 * @method void setApplicationName(string $ApplicationName) 设置应用名称

 * @method string getBundleName() 获取算力套餐名称

 * @method void setBundleName(string $BundleName) 设置算力套餐名称

 * @method integer getGPUCount() 获取实例所包含的GPU卡数
 * @method void setGPUCount(integer $GPUCount) 设置实例所包含的GPU卡数
 * @method string getGPUPerformance() 获取算力

 * @method void setGPUPerformance(string $GPUPerformance) 设置算力

 * @method string getGPUMemory() 获取显存，单位：GB
 * @method void setGPUMemory(string $GPUMemory) 设置显存，单位：GB
 * @method string getCPU() 获取CPU核数，单位：核
 * @method void setCPU(string $CPU) 设置CPU核数，单位：核
 * @method string getMemory() 获取内存，单位：GB

 * @method void setMemory(string $Memory) 设置内存，单位：GB

 * @method SystemDisk getSystemDisk() 获取系统盘数据
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置系统盘数据
 * @method array getPrivateIpAddresses() 获取内网ip地址
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置内网ip地址
 * @method array getPublicIpAddresses() 获取公网ip地址
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置公网ip地址
 * @method array getSecurityGroupIds() 获取安全组ID

 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID

 * @method string getLatestOperation() 获取实例最新操作
 * @method void setLatestOperation(string $LatestOperation) 设置实例最新操作
 * @method string getLatestOperationState() 获取实例最新操作状态：
SUCCESS：表示操作成功
OPERATING：表示操作执行中
FAILED：表示操作失败

 * @method void setLatestOperationState(string $LatestOperationState) 设置实例最新操作状态：
SUCCESS：表示操作成功
OPERATING：表示操作执行中
FAILED：表示操作失败

 * @method string getCreateTime() 获取实例创建时间，时间格式："YYYY-MM-DD HH:MM:SS"
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间，时间格式："YYYY-MM-DD HH:MM:SS"
 * @method string getMaxOutBandwidth() 获取公网出带宽上限，默认10Mbps，单位：Mbps
 * @method void setMaxOutBandwidth(string $MaxOutBandwidth) 设置公网出带宽上限，默认10Mbps，单位：Mbps
 * @method string getMaxFreeTraffic() 获取每月免费流量，默认500G，单位：GB
 * @method void setMaxFreeTraffic(string $MaxFreeTraffic) 设置每月免费流量，默认500G，单位：GB
 * @method string getConfigurationEnvironment() 获取应用配置环境
 * @method void setConfigurationEnvironment(string $ConfigurationEnvironment) 设置应用配置环境
 * @method array getLoginServices() 获取实例包含的登录服务详情
 * @method void setLoginServices(array $LoginServices) 设置实例包含的登录服务详情
 * @method string getOSType() 获取应用服务的操作系统类型；参数：linux、windows
 * @method void setOSType(string $OSType) 设置应用服务的操作系统类型；参数：linux、windows
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例状态：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
ARREARS：表示待回收
STOPPED_NO_CHARGE：表示关机不收费
TERMINATING：表示销毁中
TERMINATED：表示已销毁
     */
    public $InstanceState;

    /**
     * @var string 应用名称

     */
    public $ApplicationName;

    /**
     * @var string 算力套餐名称

     */
    public $BundleName;

    /**
     * @var integer 实例所包含的GPU卡数
     */
    public $GPUCount;

    /**
     * @var string 算力

     */
    public $GPUPerformance;

    /**
     * @var string 显存，单位：GB
     */
    public $GPUMemory;

    /**
     * @var string CPU核数，单位：核
     */
    public $CPU;

    /**
     * @var string 内存，单位：GB

     */
    public $Memory;

    /**
     * @var SystemDisk 系统盘数据
     */
    public $SystemDisk;

    /**
     * @var array 内网ip地址
     */
    public $PrivateIpAddresses;

    /**
     * @var array 公网ip地址
     */
    public $PublicIpAddresses;

    /**
     * @var array 安全组ID

     */
    public $SecurityGroupIds;

    /**
     * @var string 实例最新操作
     */
    public $LatestOperation;

    /**
     * @var string 实例最新操作状态：
SUCCESS：表示操作成功
OPERATING：表示操作执行中
FAILED：表示操作失败

     */
    public $LatestOperationState;

    /**
     * @var string 实例创建时间，时间格式："YYYY-MM-DD HH:MM:SS"
     */
    public $CreateTime;

    /**
     * @var string 公网出带宽上限，默认10Mbps，单位：Mbps
     */
    public $MaxOutBandwidth;

    /**
     * @var string 每月免费流量，默认500G，单位：GB
     */
    public $MaxFreeTraffic;

    /**
     * @var string 应用配置环境
     */
    public $ConfigurationEnvironment;

    /**
     * @var array 实例包含的登录服务详情
     */
    public $LoginServices;

    /**
     * @var string 应用服务的操作系统类型；参数：linux、windows
     */
    public $OSType;

    /**
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名称
     * @param string $InstanceState 实例状态：
PENDING：表示创建中
LAUNCH_FAILED：表示创建失败
RUNNING：表示运行中
ARREARS：表示待回收
STOPPED_NO_CHARGE：表示关机不收费
TERMINATING：表示销毁中
TERMINATED：表示已销毁
     * @param string $ApplicationName 应用名称

     * @param string $BundleName 算力套餐名称

     * @param integer $GPUCount 实例所包含的GPU卡数
     * @param string $GPUPerformance 算力

     * @param string $GPUMemory 显存，单位：GB
     * @param string $CPU CPU核数，单位：核
     * @param string $Memory 内存，单位：GB

     * @param SystemDisk $SystemDisk 系统盘数据
     * @param array $PrivateIpAddresses 内网ip地址
     * @param array $PublicIpAddresses 公网ip地址
     * @param array $SecurityGroupIds 安全组ID

     * @param string $LatestOperation 实例最新操作
     * @param string $LatestOperationState 实例最新操作状态：
SUCCESS：表示操作成功
OPERATING：表示操作执行中
FAILED：表示操作失败

     * @param string $CreateTime 实例创建时间，时间格式："YYYY-MM-DD HH:MM:SS"
     * @param string $MaxOutBandwidth 公网出带宽上限，默认10Mbps，单位：Mbps
     * @param string $MaxFreeTraffic 每月免费流量，默认500G，单位：GB
     * @param string $ConfigurationEnvironment 应用配置环境
     * @param array $LoginServices 实例包含的登录服务详情
     * @param string $OSType 应用服务的操作系统类型；参数：linux、windows
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

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("BundleName",$param) and $param["BundleName"] !== null) {
            $this->BundleName = $param["BundleName"];
        }

        if (array_key_exists("GPUCount",$param) and $param["GPUCount"] !== null) {
            $this->GPUCount = $param["GPUCount"];
        }

        if (array_key_exists("GPUPerformance",$param) and $param["GPUPerformance"] !== null) {
            $this->GPUPerformance = $param["GPUPerformance"];
        }

        if (array_key_exists("GPUMemory",$param) and $param["GPUMemory"] !== null) {
            $this->GPUMemory = $param["GPUMemory"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MaxOutBandwidth",$param) and $param["MaxOutBandwidth"] !== null) {
            $this->MaxOutBandwidth = $param["MaxOutBandwidth"];
        }

        if (array_key_exists("MaxFreeTraffic",$param) and $param["MaxFreeTraffic"] !== null) {
            $this->MaxFreeTraffic = $param["MaxFreeTraffic"];
        }

        if (array_key_exists("ConfigurationEnvironment",$param) and $param["ConfigurationEnvironment"] !== null) {
            $this->ConfigurationEnvironment = $param["ConfigurationEnvironment"];
        }

        if (array_key_exists("LoginServices",$param) and $param["LoginServices"] !== null) {
            $this->LoginServices = [];
            foreach ($param["LoginServices"] as $key => $value){
                $obj = new LoginService();
                $obj->deserialize($value);
                array_push($this->LoginServices, $obj);
            }
        }

        if (array_key_exists("OSType",$param) and $param["OSType"] !== null) {
            $this->OSType = $param["OSType"];
        }
    }
}
