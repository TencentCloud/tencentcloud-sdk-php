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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * redis独享集群详细信息
 *
 * @method integer getAppId() 获取用户的Appid
 * @method void setAppId(integer $AppId) 设置用户的Appid
 * @method integer getRegionId() 获取地域id
 * @method void setRegionId(integer $RegionId) 设置地域id
 * @method integer getZoneId() 获取可用区id
 * @method void setZoneId(integer $ZoneId) 设置可用区id
 * @method string getRedisClusterId() 获取redis独享集群id
 * @method void setRedisClusterId(string $RedisClusterId) 设置redis独享集群id
 * @method integer getPayMode() 获取计费模式，1-包年包月，0-按量计费
 * @method void setPayMode(integer $PayMode) 设置计费模式，1-包年包月，0-按量计费
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 * @method integer getAutoRenewFlag() 获取自动续费标识，0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标识，0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
 * @method string getClusterName() 获取独享集群名称
 * @method void setClusterName(string $ClusterName) 设置独享集群名称
 * @method string getStartTime() 获取实例创建时间
 * @method void setStartTime(string $StartTime) 设置实例创建时间
 * @method string getEndTime() 获取实例到期时间
 * @method void setEndTime(string $EndTime) 设置实例到期时间
 * @method integer getStatus() 获取集群状态：1-流程中，2-运行中，3-已隔离
 * @method void setStatus(integer $Status) 设置集群状态：1-流程中，2-运行中，3-已隔离
 * @method array getBaseBundles() 获取基础管控资源包
 * @method void setBaseBundles(array $BaseBundles) 设置基础管控资源包
 * @method array getResourceBundles() 获取资源包列表
 * @method void setResourceBundles(array $ResourceBundles) 设置资源包列表
 * @method string getDedicatedClusterId() 获取所属本地专有集群id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置所属本地专有集群id
 */
class CDCResource extends AbstractModel
{
    /**
     * @var integer 用户的Appid
     */
    public $AppId;

    /**
     * @var integer 地域id
     */
    public $RegionId;

    /**
     * @var integer 可用区id
     */
    public $ZoneId;

    /**
     * @var string redis独享集群id
     */
    public $RedisClusterId;

    /**
     * @var integer 计费模式，1-包年包月，0-按量计费
     */
    public $PayMode;

    /**
     * @var integer 项目id
     */
    public $ProjectId;

    /**
     * @var integer 自动续费标识，0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 独享集群名称
     */
    public $ClusterName;

    /**
     * @var string 实例创建时间
     */
    public $StartTime;

    /**
     * @var string 实例到期时间
     */
    public $EndTime;

    /**
     * @var integer 集群状态：1-流程中，2-运行中，3-已隔离
     */
    public $Status;

    /**
     * @var array 基础管控资源包
     */
    public $BaseBundles;

    /**
     * @var array 资源包列表
     */
    public $ResourceBundles;

    /**
     * @var string 所属本地专有集群id
     */
    public $DedicatedClusterId;

    /**
     * @param integer $AppId 用户的Appid
     * @param integer $RegionId 地域id
     * @param integer $ZoneId 可用区id
     * @param string $RedisClusterId redis独享集群id
     * @param integer $PayMode 计费模式，1-包年包月，0-按量计费
     * @param integer $ProjectId 项目id
     * @param integer $AutoRenewFlag 自动续费标识，0 - 默认状态（手动续费）；1 - 自动续费；2 - 明确不自动续费
     * @param string $ClusterName 独享集群名称
     * @param string $StartTime 实例创建时间
     * @param string $EndTime 实例到期时间
     * @param integer $Status 集群状态：1-流程中，2-运行中，3-已隔离
     * @param array $BaseBundles 基础管控资源包
     * @param array $ResourceBundles 资源包列表
     * @param string $DedicatedClusterId 所属本地专有集群id
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RedisClusterId",$param) and $param["RedisClusterId"] !== null) {
            $this->RedisClusterId = $param["RedisClusterId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BaseBundles",$param) and $param["BaseBundles"] !== null) {
            $this->BaseBundles = [];
            foreach ($param["BaseBundles"] as $key => $value){
                $obj = new ResourceBundle();
                $obj->deserialize($value);
                array_push($this->BaseBundles, $obj);
            }
        }

        if (array_key_exists("ResourceBundles",$param) and $param["ResourceBundles"] !== null) {
            $this->ResourceBundles = [];
            foreach ($param["ResourceBundles"] as $key => $value){
                $obj = new ResourceBundle();
                $obj->deserialize($value);
                array_push($this->ResourceBundles, $obj);
            }
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
