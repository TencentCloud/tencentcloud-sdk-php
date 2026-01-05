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
 * 密码破解列表实体
 *
 * @method integer getId() 获取唯一Id
 * @method void setId(integer $Id) 设置唯一Id
 * @method string getUuid() 获取主机安全客户端唯一标识UUID
 * @method void setUuid(string $Uuid) 设置主机安全客户端唯一标识UUID
 * @method string getMachineIp() 获取主机ip
 * @method void setMachineIp(string $MachineIp) 设置主机ip
 * @method string getMachineName() 获取主机名
 * @method void setMachineName(string $MachineName) 设置主机名
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getSrcIp() 获取来源ip
 * @method void setSrcIp(string $SrcIp) 设置来源ip
 * @method string getStatus() 获取SUCCESS：破解成功；FAILED：破解失败
 * @method void setStatus(string $Status) 设置SUCCESS：破解成功；FAILED：破解失败
 * @method integer getCountry() 获取国家id
 * @method void setCountry(integer $Country) 设置国家id
 * @method integer getCity() 获取城市id
 * @method void setCity(integer $City) 设置城市id
 * @method integer getProvince() 获取省份id
 * @method void setProvince(integer $Province) 设置省份id
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getBanStatus() 获取0 -不阻断(客户端版本不支持)
1 -已阻断
2 -阻断失败(程序异常)
3 -不阻断(内网不阻断)
4 -可用区不支持阻断
10-阻断中
81-不阻断(未开启阻断)
82-不阻断(非专业版)
83-不阻断(已加白名单)
86-不阻断(系统白名单)
87-不阻断(客户端离线)
88-不阻断(来源Ip归属相同客户)
89-不阻断(ipv6不支持阻断)
 * @method void setBanStatus(integer $BanStatus) 设置0 -不阻断(客户端版本不支持)
1 -已阻断
2 -阻断失败(程序异常)
3 -不阻断(内网不阻断)
4 -可用区不支持阻断
10-阻断中
81-不阻断(未开启阻断)
82-不阻断(非专业版)
83-不阻断(已加白名单)
86-不阻断(系统白名单)
87-不阻断(客户端离线)
88-不阻断(来源Ip归属相同客户)
89-不阻断(ipv6不支持阻断)
 * @method integer getEventType() 获取事件类型：200-暴力破解事件，300-暴力破解成功事件（页面展示），400-暴力破解不存在的账号事件
 * @method void setEventType(integer $EventType) 设置事件类型：200-暴力破解事件，300-暴力破解成功事件（页面展示），400-暴力破解不存在的账号事件
 * @method integer getCount() 获取发生次数
 * @method void setCount(integer $Count) 设置发生次数
 * @method string getQuuid() 获取机器UUID
 * @method void setQuuid(string $Quuid) 设置机器UUID
 * @method boolean getIsProVersion() 获取是否为专业版（true/false）
 * @method void setIsProVersion(boolean $IsProVersion) 设置是否为专业版（true/false）
 * @method string getProtocol() 获取被攻击的服务的用户名
 * @method void setProtocol(string $Protocol) 设置被攻击的服务的用户名
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getModifyTime() 获取最近攻击时间
 * @method void setModifyTime(string $ModifyTime) 设置最近攻击时间
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getDataStatus() 获取0：待处理，1：忽略，5：已处理，6：加入白名单
 * @method void setDataStatus(integer $DataStatus) 设置0：待处理，1：忽略，5：已处理，6：加入白名单
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
 * @method string getLocation() 获取地理位置中文名
 * @method void setLocation(string $Location) 设置地理位置中文名
 * @method integer getRiskLevel() 获取威胁等级：0低危，1中危，2高危
 * @method void setRiskLevel(integer $RiskLevel) 设置威胁等级：0低危，1中危，2高危
 * @method integer getDataFrom() 获取事件来源：0--阻断规则，1--威胁情报
 * @method void setDataFrom(integer $DataFrom) 设置事件来源：0--阻断规则，1--威胁情报
 * @method string getAttackStatusDesc() 获取破解状态说明
 * @method void setAttackStatusDesc(string $AttackStatusDesc) 设置破解状态说明
 * @method string getBanExpiredTime() 获取阻断过期时间（仅阻断中事件有效）
 * @method void setBanExpiredTime(string $BanExpiredTime) 设置阻断过期时间（仅阻断中事件有效）
 * @method IPAnalyse getIPAnalyse() 获取IP分析
 * @method void setIPAnalyse(IPAnalyse $IPAnalyse) 设置IP分析
 */
class BruteAttackInfo extends AbstractModel
{
    /**
     * @var integer 唯一Id
     */
    public $Id;

    /**
     * @var string 主机安全客户端唯一标识UUID
     */
    public $Uuid;

    /**
     * @var string 主机ip
     */
    public $MachineIp;

    /**
     * @var string 主机名
     */
    public $MachineName;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 来源ip
     */
    public $SrcIp;

    /**
     * @var string SUCCESS：破解成功；FAILED：破解失败
     */
    public $Status;

    /**
     * @var integer 国家id
     */
    public $Country;

    /**
     * @var integer 城市id
     */
    public $City;

    /**
     * @var integer 省份id
     */
    public $Province;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 0 -不阻断(客户端版本不支持)
1 -已阻断
2 -阻断失败(程序异常)
3 -不阻断(内网不阻断)
4 -可用区不支持阻断
10-阻断中
81-不阻断(未开启阻断)
82-不阻断(非专业版)
83-不阻断(已加白名单)
86-不阻断(系统白名单)
87-不阻断(客户端离线)
88-不阻断(来源Ip归属相同客户)
89-不阻断(ipv6不支持阻断)
     */
    public $BanStatus;

    /**
     * @var integer 事件类型：200-暴力破解事件，300-暴力破解成功事件（页面展示），400-暴力破解不存在的账号事件
     */
    public $EventType;

    /**
     * @var integer 发生次数
     */
    public $Count;

    /**
     * @var string 机器UUID
     */
    public $Quuid;

    /**
     * @var boolean 是否为专业版（true/false）
     */
    public $IsProVersion;

    /**
     * @var string 被攻击的服务的用户名
     */
    public $Protocol;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 最近攻击时间
     */
    public $ModifyTime;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 0：待处理，1：忽略，5：已处理，6：加入白名单
     */
    public $DataStatus;

    /**
     * @var MachineExtraInfo 附加信息
     */
    public $MachineExtraInfo;

    /**
     * @var string 地理位置中文名
     */
    public $Location;

    /**
     * @var integer 威胁等级：0低危，1中危，2高危
     */
    public $RiskLevel;

    /**
     * @var integer 事件来源：0--阻断规则，1--威胁情报
     */
    public $DataFrom;

    /**
     * @var string 破解状态说明
     */
    public $AttackStatusDesc;

    /**
     * @var string 阻断过期时间（仅阻断中事件有效）
     */
    public $BanExpiredTime;

    /**
     * @var IPAnalyse IP分析
     */
    public $IPAnalyse;

    /**
     * @param integer $Id 唯一Id
     * @param string $Uuid 主机安全客户端唯一标识UUID
     * @param string $MachineIp 主机ip
     * @param string $MachineName 主机名
     * @param string $UserName 用户名
     * @param string $SrcIp 来源ip
     * @param string $Status SUCCESS：破解成功；FAILED：破解失败
     * @param integer $Country 国家id
     * @param integer $City 城市id
     * @param integer $Province 省份id
     * @param string $CreateTime 创建时间
     * @param integer $BanStatus 0 -不阻断(客户端版本不支持)
1 -已阻断
2 -阻断失败(程序异常)
3 -不阻断(内网不阻断)
4 -可用区不支持阻断
10-阻断中
81-不阻断(未开启阻断)
82-不阻断(非专业版)
83-不阻断(已加白名单)
86-不阻断(系统白名单)
87-不阻断(客户端离线)
88-不阻断(来源Ip归属相同客户)
89-不阻断(ipv6不支持阻断)
     * @param integer $EventType 事件类型：200-暴力破解事件，300-暴力破解成功事件（页面展示），400-暴力破解不存在的账号事件
     * @param integer $Count 发生次数
     * @param string $Quuid 机器UUID
     * @param boolean $IsProVersion 是否为专业版（true/false）
     * @param string $Protocol 被攻击的服务的用户名
     * @param integer $Port 端口
     * @param string $ModifyTime 最近攻击时间
     * @param string $InstanceId 实例ID
     * @param integer $DataStatus 0：待处理，1：忽略，5：已处理，6：加入白名单
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
     * @param string $Location 地理位置中文名
     * @param integer $RiskLevel 威胁等级：0低危，1中危，2高危
     * @param integer $DataFrom 事件来源：0--阻断规则，1--威胁情报
     * @param string $AttackStatusDesc 破解状态说明
     * @param string $BanExpiredTime 阻断过期时间（仅阻断中事件有效）
     * @param IPAnalyse $IPAnalyse IP分析
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BanStatus",$param) and $param["BanStatus"] !== null) {
            $this->BanStatus = $param["BanStatus"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DataStatus",$param) and $param["DataStatus"] !== null) {
            $this->DataStatus = $param["DataStatus"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("DataFrom",$param) and $param["DataFrom"] !== null) {
            $this->DataFrom = $param["DataFrom"];
        }

        if (array_key_exists("AttackStatusDesc",$param) and $param["AttackStatusDesc"] !== null) {
            $this->AttackStatusDesc = $param["AttackStatusDesc"];
        }

        if (array_key_exists("BanExpiredTime",$param) and $param["BanExpiredTime"] !== null) {
            $this->BanExpiredTime = $param["BanExpiredTime"];
        }

        if (array_key_exists("IPAnalyse",$param) and $param["IPAnalyse"] !== null) {
            $this->IPAnalyse = new IPAnalyse();
            $this->IPAnalyse->deserialize($param["IPAnalyse"]);
        }
    }
}
