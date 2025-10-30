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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防勒索主机列表
 *
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method string getInstanceId() 获取主机实例id
 * @method void setInstanceId(string $InstanceId) 设置主机实例id
 * @method string getMachineIp() 获取内网ip
 * @method void setMachineIp(string $MachineIp) 设置内网ip
 * @method string getMachineWanIp() 获取外网ip
 * @method void setMachineWanIp(string $MachineWanIp) 设置外网ip
 * @method array getCloudTags() 获取云标签
 * @method void setCloudTags(array $CloudTags) 设置云标签
 * @method RegionInfo getRegionInfo() 获取可用区信息
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置可用区信息
 * @method array getTag() 获取主机安全标签
 * @method void setTag(array $Tag) 设置主机安全标签
 * @method integer getStatus() 获取防护状态：0关闭，1开启
 * @method void setStatus(integer $Status) 设置防护状态：0关闭，1开启
 * @method integer getStrategyId() 获取策略id，为0时未绑定策略
 * @method void setStrategyId(integer $StrategyId) 设置策略id，为0时未绑定策略
 * @method string getDiskInfo() 获取硬盘信息，为空时所有硬盘生效：
;分割 diskId1|diskName1;diskId2|diskName2
 * @method void setDiskInfo(string $DiskInfo) 设置硬盘信息，为空时所有硬盘生效：
;分割 diskId1|diskName1;diskId2|diskName2
 * @method integer getHostVersion() 获取版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
 * @method void setHostVersion(integer $HostVersion) 设置版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
 * @method string getStrategyName() 获取策略名称
 * @method void setStrategyName(string $StrategyName) 设置策略名称
 * @method string getMachineType() 获取机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 * @method void setMachineType(string $MachineType) 设置机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 */
class RansomDefenseStrategyMachineDetail extends AbstractModel
{
    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var string 主机实例id
     */
    public $InstanceId;

    /**
     * @var string 内网ip
     */
    public $MachineIp;

    /**
     * @var string 外网ip
     */
    public $MachineWanIp;

    /**
     * @var array 云标签
     */
    public $CloudTags;

    /**
     * @var RegionInfo 可用区信息
     */
    public $RegionInfo;

    /**
     * @var array 主机安全标签
     */
    public $Tag;

    /**
     * @var integer 防护状态：0关闭，1开启
     */
    public $Status;

    /**
     * @var integer 策略id，为0时未绑定策略
     */
    public $StrategyId;

    /**
     * @var string 硬盘信息，为空时所有硬盘生效：
;分割 diskId1|diskName1;diskId2|diskName2
     */
    public $DiskInfo;

    /**
     * @var integer 版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
     */
    public $HostVersion;

    /**
     * @var string 策略名称
     */
    public $StrategyName;

    /**
     * @var string 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
     */
    public $MachineType;

    /**
     * @param string $Uuid 主机Uuid
     * @param string $Quuid 主机Quuid
     * @param string $MachineName 主机名称
     * @param string $InstanceId 主机实例id
     * @param string $MachineIp 内网ip
     * @param string $MachineWanIp 外网ip
     * @param array $CloudTags 云标签
     * @param RegionInfo $RegionInfo 可用区信息
     * @param array $Tag 主机安全标签
     * @param integer $Status 防护状态：0关闭，1开启
     * @param integer $StrategyId 策略id，为0时未绑定策略
     * @param string $DiskInfo 硬盘信息，为空时所有硬盘生效：
;分割 diskId1|diskName1;diskId2|diskName2
     * @param integer $HostVersion 版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
     * @param string $StrategyName 策略名称
     * @param string $MachineType 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("DiskInfo",$param) and $param["DiskInfo"] !== null) {
            $this->DiskInfo = $param["DiskInfo"];
        }

        if (array_key_exists("HostVersion",$param) and $param["HostVersion"] !== null) {
            $this->HostVersion = $param["HostVersion"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
