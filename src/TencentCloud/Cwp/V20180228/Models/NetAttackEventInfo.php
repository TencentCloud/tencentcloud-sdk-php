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
 * 网络攻击事件详情
 *
 * @method integer getStatus() 获取处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
 * @method void setStatus(integer $Status) 设置处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
 * @method string getSrcIP() 获取攻击源ip
 * @method void setSrcIP(string $SrcIP) 设置攻击源ip
 * @method string getLocation() 获取攻击源地
 * @method void setLocation(string $Location) 设置攻击源地
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getCVEId() 获取漏洞CVE编号
 * @method void setCVEId(string $CVEId) 设置漏洞CVE编号
 * @method integer getAttackLevel() 获取漏洞攻击热度
 * @method void setAttackLevel(integer $AttackLevel) 设置漏洞攻击热度
 * @method integer getVulDefenceStatus() 获取漏洞防御状态，0关闭，1开启
 * @method void setVulDefenceStatus(integer $VulDefenceStatus) 设置漏洞防御状态，0关闭，1开启
 * @method integer getVulSupportDefense() 获取漏洞是否支持防御，0:不支持 1:支持
 * @method void setVulSupportDefense(integer $VulSupportDefense) 设置漏洞是否支持防御，0:不支持 1:支持
 * @method string getSvcPs() 获取服务进程 base64 
 * @method void setSvcPs(string $SvcPs) 设置服务进程 base64 
 * @method string getNetPayload() 获取攻击数据包
 * @method void setNetPayload(string $NetPayload) 设置攻击数据包
 * @method string getAbnormalAction() 获取异常行为
 * @method void setAbnormalAction(string $AbnormalAction) 设置异常行为
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method integer getId() 获取事件id
 * @method void setId(integer $Id) 设置事件id
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
 * @method integer getDstPort() 获取目标端口
 * @method void setDstPort(integer $DstPort) 设置目标端口
 * @method integer getCount() 获取攻击次数
 * @method void setCount(integer $Count) 设置攻击次数
 * @method integer getPayVersion() 获取机器付费版本，0 基础版，1专业版，2旗舰版，3轻量版
 * @method void setPayVersion(integer $PayVersion) 设置机器付费版本，0 基础版，1专业版，2旗舰版，3轻量版
 * @method string getQuuid() 获取cvm uuid
 * @method void setQuuid(string $Quuid) 设置cvm uuid
 * @method string getMergeTime() 获取攻击发生时间
 * @method void setMergeTime(string $MergeTime) 设置攻击发生时间
 * @method integer getType() 获取0: 尝试攻击 1:攻击成功
 * @method void setType(integer $Type) 设置0: 尝试攻击 1:攻击成功
 * @method integer getHostOpType() 获取0:无失陷行为 1: rce(命令执行) 2: dnslog 3: writefile
 * @method void setHostOpType(integer $HostOpType) 设置0:无失陷行为 1: rce(命令执行) 2: dnslog 3: writefile
 * @method string getHostOpProcessTree() 获取进程树,需要用base64 解码
 * @method void setHostOpProcessTree(string $HostOpProcessTree) 设置进程树,需要用base64 解码
 * @method IPAnalyse getIPAnalyse() 获取IP分析
 * @method void setIPAnalyse(IPAnalyse $IPAnalyse) 设置IP分析
 * @method string getNetResponsePayload() 获取响应数据包 base64编码
 * @method void setNetResponsePayload(string $NetResponsePayload) 设置响应数据包 base64编码
 */
class NetAttackEventInfo extends AbstractModel
{
    /**
     * @var integer 处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
     */
    public $Status;

    /**
     * @var string 攻击源ip
     */
    public $SrcIP;

    /**
     * @var string 攻击源地
     */
    public $Location;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 漏洞CVE编号
     */
    public $CVEId;

    /**
     * @var integer 漏洞攻击热度
     */
    public $AttackLevel;

    /**
     * @var integer 漏洞防御状态，0关闭，1开启
     */
    public $VulDefenceStatus;

    /**
     * @var integer 漏洞是否支持防御，0:不支持 1:支持
     */
    public $VulSupportDefense;

    /**
     * @var string 服务进程 base64 
     */
    public $SvcPs;

    /**
     * @var string 攻击数据包
     */
    public $NetPayload;

    /**
     * @var string 异常行为
     */
    public $AbnormalAction;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var integer 事件id
     */
    public $Id;

    /**
     * @var MachineExtraInfo 主机额外信息
     */
    public $MachineExtraInfo;

    /**
     * @var integer 目标端口
     */
    public $DstPort;

    /**
     * @var integer 攻击次数
     */
    public $Count;

    /**
     * @var integer 机器付费版本，0 基础版，1专业版，2旗舰版，3轻量版
     */
    public $PayVersion;

    /**
     * @var string cvm uuid
     */
    public $Quuid;

    /**
     * @var string 攻击发生时间
     */
    public $MergeTime;

    /**
     * @var integer 0: 尝试攻击 1:攻击成功
     */
    public $Type;

    /**
     * @var integer 0:无失陷行为 1: rce(命令执行) 2: dnslog 3: writefile
     */
    public $HostOpType;

    /**
     * @var string 进程树,需要用base64 解码
     */
    public $HostOpProcessTree;

    /**
     * @var IPAnalyse IP分析
     */
    public $IPAnalyse;

    /**
     * @var string 响应数据包 base64编码
     */
    public $NetResponsePayload;

    /**
     * @param integer $Status 处理状态，0 待处理 1 已处理 2 已加白  3 已忽略 4 已删除 5: 已开启防御
     * @param string $SrcIP 攻击源ip
     * @param string $Location 攻击源地
     * @param string $VulName 漏洞名称
     * @param integer $VulId 漏洞id
     * @param string $CVEId 漏洞CVE编号
     * @param integer $AttackLevel 漏洞攻击热度
     * @param integer $VulDefenceStatus 漏洞防御状态，0关闭，1开启
     * @param integer $VulSupportDefense 漏洞是否支持防御，0:不支持 1:支持
     * @param string $SvcPs 服务进程 base64 
     * @param string $NetPayload 攻击数据包
     * @param string $AbnormalAction 异常行为
     * @param string $Uuid 主机uuid
     * @param integer $Id 事件id
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
     * @param integer $DstPort 目标端口
     * @param integer $Count 攻击次数
     * @param integer $PayVersion 机器付费版本，0 基础版，1专业版，2旗舰版，3轻量版
     * @param string $Quuid cvm uuid
     * @param string $MergeTime 攻击发生时间
     * @param integer $Type 0: 尝试攻击 1:攻击成功
     * @param integer $HostOpType 0:无失陷行为 1: rce(命令执行) 2: dnslog 3: writefile
     * @param string $HostOpProcessTree 进程树,需要用base64 解码
     * @param IPAnalyse $IPAnalyse IP分析
     * @param string $NetResponsePayload 响应数据包 base64编码
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("CVEId",$param) and $param["CVEId"] !== null) {
            $this->CVEId = $param["CVEId"];
        }

        if (array_key_exists("AttackLevel",$param) and $param["AttackLevel"] !== null) {
            $this->AttackLevel = $param["AttackLevel"];
        }

        if (array_key_exists("VulDefenceStatus",$param) and $param["VulDefenceStatus"] !== null) {
            $this->VulDefenceStatus = $param["VulDefenceStatus"];
        }

        if (array_key_exists("VulSupportDefense",$param) and $param["VulSupportDefense"] !== null) {
            $this->VulSupportDefense = $param["VulSupportDefense"];
        }

        if (array_key_exists("SvcPs",$param) and $param["SvcPs"] !== null) {
            $this->SvcPs = $param["SvcPs"];
        }

        if (array_key_exists("NetPayload",$param) and $param["NetPayload"] !== null) {
            $this->NetPayload = $param["NetPayload"];
        }

        if (array_key_exists("AbnormalAction",$param) and $param["AbnormalAction"] !== null) {
            $this->AbnormalAction = $param["AbnormalAction"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("PayVersion",$param) and $param["PayVersion"] !== null) {
            $this->PayVersion = $param["PayVersion"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MergeTime",$param) and $param["MergeTime"] !== null) {
            $this->MergeTime = $param["MergeTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HostOpType",$param) and $param["HostOpType"] !== null) {
            $this->HostOpType = $param["HostOpType"];
        }

        if (array_key_exists("HostOpProcessTree",$param) and $param["HostOpProcessTree"] !== null) {
            $this->HostOpProcessTree = $param["HostOpProcessTree"];
        }

        if (array_key_exists("IPAnalyse",$param) and $param["IPAnalyse"] !== null) {
            $this->IPAnalyse = new IPAnalyse();
            $this->IPAnalyse->deserialize($param["IPAnalyse"]);
        }

        if (array_key_exists("NetResponsePayload",$param) and $param["NetResponsePayload"] !== null) {
            $this->NetResponsePayload = $param["NetResponsePayload"];
        }
    }
}
