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
 * 漏洞详细信息
 *
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getCveId() 获取cve编号
 * @method void setCveId(string $CveId) 设置cve编号
 * @method integer getId() 获取漏洞事件id
 * @method void setId(integer $Id) 设置漏洞事件id
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 * @method string getAlias() 获取主机名
 * @method void setAlias(string $Alias) 设置主机名
 * @method string getPrivateIp() 获取内网ip
 * @method void setPrivateIp(string $PrivateIp) 设置内网ip
 * @method string getPublicIp() 获取公网ip
 * @method void setPublicIp(string $PublicIp) 设置公网ip
 * @method integer getEventType() 获取0: 尝试攻击(WeDetect) 1:尝试攻击成功(WeDetect) 2:rasp防御事件
 * @method void setEventType(integer $EventType) 设置0: 尝试攻击(WeDetect) 1:尝试攻击成功(WeDetect) 2:rasp防御事件
 * @method string getSourceIp() 获取攻击源ip
 * @method void setSourceIp(string $SourceIp) 设置攻击源ip
 * @method string getCity() 获取攻击源ip地址所在城市
 * @method void setCity(string $City) 设置攻击源ip地址所在城市
 * @method array getSourcePort() 获取攻击源端口
 * @method void setSourcePort(array $SourcePort) 设置攻击源端口
 * @method string getCreateTime() 获取创建事件时间
 * @method void setCreateTime(string $CreateTime) 设置创建事件时间
 * @method string getMergeTime() 获取更新事件时间
 * @method void setMergeTime(string $MergeTime) 设置更新事件时间
 * @method integer getCount() 获取事件发生次数
 * @method void setCount(integer $Count) 设置事件发生次数
 * @method integer getStatus() 获取状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除
 * @method void setStatus(integer $Status) 设置状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除
 * @method string getMachineStatus() 获取ONLINE OFFLINE
 * @method void setMachineStatus(string $MachineStatus) 设置ONLINE OFFLINE
 * @method string getDescription() 获取漏洞描述信息
 * @method void setDescription(string $Description) 设置漏洞描述信息
 * @method string getFix() 获取修复建议
 * @method void setFix(string $Fix) 设置修复建议
 * @method string getNetworkPayload() 获取攻击payload
 * @method void setNetworkPayload(string $NetworkPayload) 设置攻击payload
 * @method integer getPid() 获取关联进程pid
 * @method void setPid(integer $Pid) 设置关联进程pid
 * @method string getMainClass() 获取关联进程主类名
 * @method void setMainClass(string $MainClass) 设置关联进程主类名
 * @method string getStackTrace() 获取堆栈信息(rasp特有)
 * @method void setStackTrace(string $StackTrace) 设置堆栈信息(rasp特有)
 * @method string getEventDetail() 获取漏洞ID相关的事件详情(json array格式 rasp特有)
 * @method void setEventDetail(string $EventDetail) 设置漏洞ID相关的事件详情(json array格式 rasp特有)
 * @method string getExceptionPstree() 获取主机失陷事件进程树(json格式 WeDetect特有)
 * @method void setExceptionPstree(string $ExceptionPstree) 设置主机失陷事件进程树(json格式 WeDetect特有)
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
 */
class VulDefenceEventDetail extends AbstractModel
{
    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string cve编号
     */
    public $CveId;

    /**
     * @var integer 漏洞事件id
     */
    public $Id;

    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @var string 主机名
     */
    public $Alias;

    /**
     * @var string 内网ip
     */
    public $PrivateIp;

    /**
     * @var string 公网ip
     */
    public $PublicIp;

    /**
     * @var integer 0: 尝试攻击(WeDetect) 1:尝试攻击成功(WeDetect) 2:rasp防御事件
     */
    public $EventType;

    /**
     * @var string 攻击源ip
     */
    public $SourceIp;

    /**
     * @var string 攻击源ip地址所在城市
     */
    public $City;

    /**
     * @var array 攻击源端口
     */
    public $SourcePort;

    /**
     * @var string 创建事件时间
     */
    public $CreateTime;

    /**
     * @var string 更新事件时间
     */
    public $MergeTime;

    /**
     * @var integer 事件发生次数
     */
    public $Count;

    /**
     * @var integer 状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除
     */
    public $Status;

    /**
     * @var string ONLINE OFFLINE
     */
    public $MachineStatus;

    /**
     * @var string 漏洞描述信息
     */
    public $Description;

    /**
     * @var string 修复建议
     */
    public $Fix;

    /**
     * @var string 攻击payload
     */
    public $NetworkPayload;

    /**
     * @var integer 关联进程pid
     */
    public $Pid;

    /**
     * @var string 关联进程主类名
     */
    public $MainClass;

    /**
     * @var string 堆栈信息(rasp特有)
     */
    public $StackTrace;

    /**
     * @var string 漏洞ID相关的事件详情(json array格式 rasp特有)
     */
    public $EventDetail;

    /**
     * @var string 主机失陷事件进程树(json格式 WeDetect特有)
     */
    public $ExceptionPstree;

    /**
     * @var MachineExtraInfo 主机额外信息
     */
    public $MachineExtraInfo;

    /**
     * @param string $VulName 漏洞名称
     * @param string $CveId cve编号
     * @param integer $Id 漏洞事件id
     * @param string $Quuid 主机quuid
     * @param string $Alias 主机名
     * @param string $PrivateIp 内网ip
     * @param string $PublicIp 公网ip
     * @param integer $EventType 0: 尝试攻击(WeDetect) 1:尝试攻击成功(WeDetect) 2:rasp防御事件
     * @param string $SourceIp 攻击源ip
     * @param string $City 攻击源ip地址所在城市
     * @param array $SourcePort 攻击源端口
     * @param string $CreateTime 创建事件时间
     * @param string $MergeTime 更新事件时间
     * @param integer $Count 事件发生次数
     * @param integer $Status 状态 0: 待处理 1:已防御 2:已处理 3: 已忽略 4: 已删除
     * @param string $MachineStatus ONLINE OFFLINE
     * @param string $Description 漏洞描述信息
     * @param string $Fix 修复建议
     * @param string $NetworkPayload 攻击payload
     * @param integer $Pid 关联进程pid
     * @param string $MainClass 关联进程主类名
     * @param string $StackTrace 堆栈信息(rasp特有)
     * @param string $EventDetail 漏洞ID相关的事件详情(json array格式 rasp特有)
     * @param string $ExceptionPstree 主机失陷事件进程树(json格式 WeDetect特有)
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("NetworkPayload",$param) and $param["NetworkPayload"] !== null) {
            $this->NetworkPayload = $param["NetworkPayload"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("MainClass",$param) and $param["MainClass"] !== null) {
            $this->MainClass = $param["MainClass"];
        }

        if (array_key_exists("StackTrace",$param) and $param["StackTrace"] !== null) {
            $this->StackTrace = $param["StackTrace"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = $param["EventDetail"];
        }

        if (array_key_exists("ExceptionPstree",$param) and $param["ExceptionPstree"] !== null) {
            $this->ExceptionPstree = $param["ExceptionPstree"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
