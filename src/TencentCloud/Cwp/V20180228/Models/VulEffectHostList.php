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
 * 漏洞影响主机列表
 *
 * @method integer getEventId() 获取事件id
 * @method void setEventId(integer $EventId) 设置事件id
 * @method integer getStatus() 获取状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
 * @method void setStatus(integer $Status) 设置状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
 * @method string getLastTime() 获取最后检测时间
 * @method void setLastTime(string $LastTime) 设置最后检测时间
 * @method integer getLevel() 获取危害等级：1-低危；2-中危；3-高危；4-严重
 * @method void setLevel(integer $Level) 设置危害等级：1-低危；2-中危；3-高危；4-严重
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getHostIp() 获取主机HostIp
 * @method void setHostIp(string $HostIp) 设置主机HostIp
 * @method string getAliasName() 获取主机别名
 * @method void setAliasName(string $AliasName) 设置主机别名
 * @method array getTags() 获取主机标签
 * @method void setTags(array $Tags) 设置主机标签
 * @method string getDescription() 获取说明
 * @method void setDescription(string $Description) 设置说明
 * @method integer getHostVersion() 获取版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
 * @method void setHostVersion(integer $HostVersion) 设置版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
 * @method integer getIsSupportAutoFix() 获取是否能自动修复 0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中  9:修复失败，10:已忽略 11:漏洞只支持linux不支持Windows 12：漏洞只支持Windows不支持linux，13:修复失败但此时主机已离线，14:修复失败但此时主机不是旗舰版， 15:已手动修复
 * @method void setIsSupportAutoFix(integer $IsSupportAutoFix) 设置是否能自动修复 0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中  9:修复失败，10:已忽略 11:漏洞只支持linux不支持Windows 12：漏洞只支持Windows不支持linux，13:修复失败但此时主机已离线，14:修复失败但此时主机不是旗舰版， 15:已手动修复
 * @method string getFixStatusMsg() 获取失败原因
 * @method void setFixStatusMsg(string $FixStatusMsg) 设置失败原因
 * @method string getFirstDiscoveryTime() 获取首次发现时间
 * @method void setFirstDiscoveryTime(string $FirstDiscoveryTime) 设置首次发现时间
 * @method string getInstanceState() 获取实例状态："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 "
 * @method void setInstanceState(string $InstanceState) 设置实例状态："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 "
 * @method string getPublicIpAddresses() 获取外网ip
 * @method void setPublicIpAddresses(string $PublicIpAddresses) 设置外网ip
 * @method array getCloudTags() 获取云标签信息
 * @method void setCloudTags(array $CloudTags) 设置云标签信息
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
 * @method string getMachineType() 获取主机类型
 * @method void setMachineType(string $MachineType) 设置主机类型
 * @method integer getRegionId() 获取可用区ID
 * @method void setRegionId(integer $RegionId) 设置可用区ID
 * @method integer getHasSnapshot() 获取修复任务是否创建了快照： 0-未创建，其他-已创建
 * @method void setHasSnapshot(integer $HasSnapshot) 设置修复任务是否创建了快照： 0-未创建，其他-已创建
 * @method string getLatestFixTime() 获取最后修复时间
 * @method void setLatestFixTime(string $LatestFixTime) 设置最后修复时间
 * @method string getDescriptionEn() 获取说明
 * @method void setDescriptionEn(string $DescriptionEn) 设置说明
 */
class VulEffectHostList extends AbstractModel
{
    /**
     * @var integer 事件id
     */
    public $EventId;

    /**
     * @var integer 状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
     */
    public $Status;

    /**
     * @var string 最后检测时间
     */
    public $LastTime;

    /**
     * @var integer 危害等级：1-低危；2-中危；3-高危；4-严重
     */
    public $Level;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 主机HostIp
     */
    public $HostIp;

    /**
     * @var string 主机别名
     */
    public $AliasName;

    /**
     * @var array 主机标签
     */
    public $Tags;

    /**
     * @var string 说明
     */
    public $Description;

    /**
     * @var integer 版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
     */
    public $HostVersion;

    /**
     * @var integer 是否能自动修复 0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中  9:修复失败，10:已忽略 11:漏洞只支持linux不支持Windows 12：漏洞只支持Windows不支持linux，13:修复失败但此时主机已离线，14:修复失败但此时主机不是旗舰版， 15:已手动修复
     */
    public $IsSupportAutoFix;

    /**
     * @var string 失败原因
     */
    public $FixStatusMsg;

    /**
     * @var string 首次发现时间
     */
    public $FirstDiscoveryTime;

    /**
     * @var string 实例状态："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 "
     */
    public $InstanceState;

    /**
     * @var string 外网ip
     */
    public $PublicIpAddresses;

    /**
     * @var array 云标签信息
     */
    public $CloudTags;

    /**
     * @var MachineExtraInfo 主机额外信息
     */
    public $MachineExtraInfo;

    /**
     * @var string 主机类型
     */
    public $MachineType;

    /**
     * @var integer 可用区ID
     */
    public $RegionId;

    /**
     * @var integer 修复任务是否创建了快照： 0-未创建，其他-已创建
     */
    public $HasSnapshot;

    /**
     * @var string 最后修复时间
     */
    public $LatestFixTime;

    /**
     * @var string 说明
     */
    public $DescriptionEn;

    /**
     * @param integer $EventId 事件id
     * @param integer $Status 状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中 7: 回滚中 8:修复失败
     * @param string $LastTime 最后检测时间
     * @param integer $Level 危害等级：1-低危；2-中危；3-高危；4-严重
     * @param string $Quuid 主机Quuid
     * @param string $Uuid 主机Uuid
     * @param string $HostIp 主机HostIp
     * @param string $AliasName 主机别名
     * @param array $Tags 主机标签
     * @param string $Description 说明
     * @param integer $HostVersion 版本信息：0-基础版 1-专业版 2-旗舰版 3-轻量版
     * @param integer $IsSupportAutoFix 是否能自动修复 0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中  9:修复失败，10:已忽略 11:漏洞只支持linux不支持Windows 12：漏洞只支持Windows不支持linux，13:修复失败但此时主机已离线，14:修复失败但此时主机不是旗舰版， 15:已手动修复
     * @param string $FixStatusMsg 失败原因
     * @param string $FirstDiscoveryTime 首次发现时间
     * @param string $InstanceState 实例状态："PENDING"-创建中 "LAUNCH_FAILED"-创建失败 "RUNNING"-运行中 "STOPPED"-关机 "STARTING"-表示开机中 "STOPPING"-表示关机中 "REBOOTING"-重启中 "SHUTDOWN"-表示停止待销毁 "TERMINATING"-表示销毁中 "
     * @param string $PublicIpAddresses 外网ip
     * @param array $CloudTags 云标签信息
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
     * @param string $MachineType 主机类型
     * @param integer $RegionId 可用区ID
     * @param integer $HasSnapshot 修复任务是否创建了快照： 0-未创建，其他-已创建
     * @param string $LatestFixTime 最后修复时间
     * @param string $DescriptionEn 说明
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HostVersion",$param) and $param["HostVersion"] !== null) {
            $this->HostVersion = $param["HostVersion"];
        }

        if (array_key_exists("IsSupportAutoFix",$param) and $param["IsSupportAutoFix"] !== null) {
            $this->IsSupportAutoFix = $param["IsSupportAutoFix"];
        }

        if (array_key_exists("FixStatusMsg",$param) and $param["FixStatusMsg"] !== null) {
            $this->FixStatusMsg = $param["FixStatusMsg"];
        }

        if (array_key_exists("FirstDiscoveryTime",$param) and $param["FirstDiscoveryTime"] !== null) {
            $this->FirstDiscoveryTime = $param["FirstDiscoveryTime"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("HasSnapshot",$param) and $param["HasSnapshot"] !== null) {
            $this->HasSnapshot = $param["HasSnapshot"];
        }

        if (array_key_exists("LatestFixTime",$param) and $param["LatestFixTime"] !== null) {
            $this->LatestFixTime = $param["LatestFixTime"];
        }

        if (array_key_exists("DescriptionEn",$param) and $param["DescriptionEn"] !== null) {
            $this->DescriptionEn = $param["DescriptionEn"];
        }
    }
}
