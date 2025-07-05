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
 * @method integer getVulId() 获取漏洞ID
 * @method void setVulId(integer $VulId) 设置漏洞ID
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
 * @method integer getUpgradeType() 获取0 专业版,1 旗舰版,2 LH轻量版（仅限LH使用）,3  CVM轻量版（仅限CVM使用）
 * @method void setUpgradeType(integer $UpgradeType) 设置0 专业版,1 旗舰版,2 LH轻量版（仅限LH使用）,3  CVM轻量版（仅限CVM使用）
 * @method integer getFixType() 获取0 不支持修复，1 支持修复
 * @method void setFixType(integer $FixType) 设置0 不支持修复，1 支持修复
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
 */
class VulDefenceEvent extends AbstractModel
{
    /**
     * @var integer 漏洞ID
     */
    public $VulId;

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
     * @var integer 0 专业版,1 旗舰版,2 LH轻量版（仅限LH使用）,3  CVM轻量版（仅限CVM使用）
     */
    public $UpgradeType;

    /**
     * @var integer 0 不支持修复，1 支持修复
     */
    public $FixType;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo 主机额外信息
     */
    public $MachineExtraInfo;

    /**
     * @param integer $VulId 漏洞ID
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
     * @param integer $UpgradeType 0 专业版,1 旗舰版,2 LH轻量版（仅限LH使用）,3  CVM轻量版（仅限CVM使用）
     * @param integer $FixType 0 不支持修复，1 支持修复
     * @param string $Uuid 主机uuid
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
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

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("FixType",$param) and $param["FixType"] !== null) {
            $this->FixType = $param["FixType"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
