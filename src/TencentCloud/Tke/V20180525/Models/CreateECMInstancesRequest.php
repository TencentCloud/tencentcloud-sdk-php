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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateECMInstances请求参数结构体
 *
 * @method string getClusterID() 获取集群id
 * @method void setClusterID(string $ClusterID) 设置集群id
 * @method string getModuleId() 获取模块id
 * @method void setModuleId(string $ModuleId) 设置模块id
 * @method array getZoneInstanceCountISPSet() 获取需要创建实例的可用区及创建数目及运营商的列表
 * @method void setZoneInstanceCountISPSet(array $ZoneInstanceCountISPSet) 设置需要创建实例的可用区及创建数目及运营商的列表
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method integer getInternetMaxBandwidthOut() 获取公网带宽
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网带宽
 * @method string getImageId() 获取镜像id
 * @method void setImageId(string $ImageId) 设置镜像id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method ECMEnhancedService getEnhancedService() 获取增强服务，包括云镜和云监控
 * @method void setEnhancedService(ECMEnhancedService $EnhancedService) 设置增强服务，包括云镜和云监控
 * @method string getUserData() 获取用户自定义脚本
 * @method void setUserData(string $UserData) 设置用户自定义脚本
 * @method string getExternal() 获取实例扩展信息
 * @method void setExternal(string $External) 设置实例扩展信息
 * @method array getSecurityGroupIds() 获取实例所属安全组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置实例所属安全组
 */
class CreateECMInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterID;

    /**
     * @var string 模块id
     */
    public $ModuleId;

    /**
     * @var array 需要创建实例的可用区及创建数目及运营商的列表
     */
    public $ZoneInstanceCountISPSet;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var integer 公网带宽
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 镜像id
     */
    public $ImageId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var ECMEnhancedService 增强服务，包括云镜和云监控
     */
    public $EnhancedService;

    /**
     * @var string 用户自定义脚本
     */
    public $UserData;

    /**
     * @var string 实例扩展信息
     */
    public $External;

    /**
     * @var array 实例所属安全组
     */
    public $SecurityGroupIds;

    /**
     * @param string $ClusterID 集群id
     * @param string $ModuleId 模块id
     * @param array $ZoneInstanceCountISPSet 需要创建实例的可用区及创建数目及运营商的列表
     * @param string $Password 密码
     * @param integer $InternetMaxBandwidthOut 公网带宽
     * @param string $ImageId 镜像id
     * @param string $InstanceName 实例名称
     * @param string $HostName 主机名称
     * @param ECMEnhancedService $EnhancedService 增强服务，包括云镜和云监控
     * @param string $UserData 用户自定义脚本
     * @param string $External 实例扩展信息
     * @param array $SecurityGroupIds 实例所属安全组
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("ZoneInstanceCountISPSet",$param) and $param["ZoneInstanceCountISPSet"] !== null) {
            $this->ZoneInstanceCountISPSet = [];
            foreach ($param["ZoneInstanceCountISPSet"] as $key => $value){
                $obj = new ECMZoneInstanceCountISP();
                $obj->deserialize($value);
                array_push($this->ZoneInstanceCountISPSet, $obj);
            }
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new ECMEnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = $param["External"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
