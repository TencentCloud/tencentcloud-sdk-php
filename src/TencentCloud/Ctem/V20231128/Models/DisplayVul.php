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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getIp() 获取解析的IP
 * @method void setIp(string $Ip) 设置解析的IP
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getUrl() 获取Url地址
 * @method void setUrl(string $Url) 设置Url地址
 * @method integer getLevel() 获取风险等级：1：提示, 2:低危, 3:中危, 4:高危, 5: 严重
 * @method void setLevel(integer $Level) 设置风险等级：1：提示, 2:低危, 3:中危, 4:高危, 5: 严重
 * @method string getName() 获取漏洞名称
 * @method void setName(string $Name) 设置漏洞名称
 * @method integer getRepairStatus() 获取是否修复，0:未修复，1:已修复
 * @method void setRepairStatus(integer $RepairStatus) 设置是否修复，0:未修复，1:已修复
 * @method string getSuggestion() 获取建议
 * @method void setSuggestion(string $Suggestion) 设置建议
 * @method string getDiscoverTime() 获取发现时间
 * @method void setDiscoverTime(string $DiscoverTime) 设置发现时间
 * @method string getAiJudge() 获取AI研判
 * @method void setAiJudge(string $AiJudge) 设置AI研判
 * @method string getStatus() 获取状态：unrepaired:未修复，repaired:已修复, offline:资产已下线, ignore:已忽略
 * @method void setStatus(string $Status) 设置状态：unrepaired:未修复，repaired:已修复, offline:资产已下线, ignore:已忽略
 * @method string getLastCheckTime() 获取上次复测时间
 * @method void setLastCheckTime(string $LastCheckTime) 设置上次复测时间
 * @method integer getIsCloudAsset() 获取是否为云资产：0-非云资产 1-是云资产
 * @method void setIsCloudAsset(integer $IsCloudAsset) 设置是否为云资产：0-非云资产 1-是云资产
 * @method integer getCloudAssetStatus() 获取云资产是否下线：-1-已下线 0-正常
 * @method void setCloudAssetStatus(integer $CloudAssetStatus) 设置云资产是否下线：-1-已下线 0-正常
 * @method integer getAnalysisState() 获取域名解析状态 1:异常 0:正常
 * @method void setAnalysisState(integer $AnalysisState) 设置域名解析状态 1:异常 0:正常
 */
class DisplayVul extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string 解析的IP
     */
    public $Ip;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string Url地址
     */
    public $Url;

    /**
     * @var integer 风险等级：1：提示, 2:低危, 3:中危, 4:高危, 5: 严重
     */
    public $Level;

    /**
     * @var string 漏洞名称
     */
    public $Name;

    /**
     * @var integer 是否修复，0:未修复，1:已修复
     */
    public $RepairStatus;

    /**
     * @var string 建议
     */
    public $Suggestion;

    /**
     * @var string 发现时间
     */
    public $DiscoverTime;

    /**
     * @var string AI研判
     */
    public $AiJudge;

    /**
     * @var string 状态：unrepaired:未修复，repaired:已修复, offline:资产已下线, ignore:已忽略
     */
    public $Status;

    /**
     * @var string 上次复测时间
     */
    public $LastCheckTime;

    /**
     * @var integer 是否为云资产：0-非云资产 1-是云资产
     */
    public $IsCloudAsset;

    /**
     * @var integer 云资产是否下线：-1-已下线 0-正常
     */
    public $CloudAssetStatus;

    /**
     * @var integer 域名解析状态 1:异常 0:正常
     */
    public $AnalysisState;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Ip 解析的IP
     * @param integer $Port 端口
     * @param string $Url Url地址
     * @param integer $Level 风险等级：1：提示, 2:低危, 3:中危, 4:高危, 5: 严重
     * @param string $Name 漏洞名称
     * @param integer $RepairStatus 是否修复，0:未修复，1:已修复
     * @param string $Suggestion 建议
     * @param string $DiscoverTime 发现时间
     * @param string $AiJudge AI研判
     * @param string $Status 状态：unrepaired:未修复，repaired:已修复, offline:资产已下线, ignore:已忽略
     * @param string $LastCheckTime 上次复测时间
     * @param integer $IsCloudAsset 是否为云资产：0-非云资产 1-是云资产
     * @param integer $CloudAssetStatus 云资产是否下线：-1-已下线 0-正常
     * @param integer $AnalysisState 域名解析状态 1:异常 0:正常
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

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RepairStatus",$param) and $param["RepairStatus"] !== null) {
            $this->RepairStatus = $param["RepairStatus"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("DiscoverTime",$param) and $param["DiscoverTime"] !== null) {
            $this->DiscoverTime = $param["DiscoverTime"];
        }

        if (array_key_exists("AiJudge",$param) and $param["AiJudge"] !== null) {
            $this->AiJudge = $param["AiJudge"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("IsCloudAsset",$param) and $param["IsCloudAsset"] !== null) {
            $this->IsCloudAsset = $param["IsCloudAsset"];
        }

        if (array_key_exists("CloudAssetStatus",$param) and $param["CloudAssetStatus"] !== null) {
            $this->CloudAssetStatus = $param["CloudAssetStatus"];
        }

        if (array_key_exists("AnalysisState",$param) and $param["AnalysisState"] !== null) {
            $this->AnalysisState = $param["AnalysisState"];
        }
    }
}
