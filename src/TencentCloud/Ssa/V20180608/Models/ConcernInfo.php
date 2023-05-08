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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关注点类型
 *
 * @method integer getConcernType() 获取关注点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcernType(integer $ConcernType) 设置关注点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEntityType() 获取实体类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntityType(integer $EntityType) 设置实体类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConcern() 获取关注点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConcern(string $Concern) 设置关注点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatisticsCount() 获取最近数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticsCount(integer $StatisticsCount) 设置最近数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpCountry() 获取IP国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpCountry(string $IpCountry) 设置IP国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpProvince() 获取IP省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpProvince(string $IpProvince) 设置IP省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfidence() 获取置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfidence(integer $Confidence) 设置置信度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpIsp() 获取服务商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpIsp(string $IpIsp) 设置服务商
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpInfrastructure() 获取是否基础设施
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpInfrastructure(string $IpInfrastructure) 设置是否基础设施
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getThreatType() 获取威胁类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreatType(array $ThreatType) 设置威胁类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroups() 获取威胁团伙
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置威胁团伙
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态威胁情报接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态威胁情报接口
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取恶意标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置恶意标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVictimAssetType() 获取资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVictimAssetType(string $VictimAssetType) 设置资产类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVictimAssetName() 获取资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVictimAssetName(string $VictimAssetName) 设置资产名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainRegistrant() 获取注册者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainRegistrant(string $DomainRegistrant) 设置注册者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainRegisteredInstitution() 获取注册机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainRegisteredInstitution(string $DomainRegisteredInstitution) 设置注册机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainRegistrationTime() 获取注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainRegistrationTime(string $DomainRegistrationTime) 设置注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMd5() 获取MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMd5(string $FileMd5) 设置MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusName() 获取病毒名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusName(string $VirusName) 设置病毒名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePath() 获取文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePath(string $FilePath) 设置文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(string $FileSize) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcName() 获取进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcName(string $ProcName) 设置进程名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPid() 获取进程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPid(string $Pid) 设置进程ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcPath() 获取进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcPath(string $ProcPath) 设置进程路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcUser() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcUser(string $ProcUser) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefendedCount() 获取已防御
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefendedCount(integer $DefendedCount) 设置已防御
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetectedCount() 获取仅检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectedCount(integer $DetectedCount) 设置仅检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSearchData() 获取可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchData(string $SearchData) 设置可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpCountryIso() 获取可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpCountryIso(string $IpCountryIso) 设置可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpProvinceIso() 获取可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpProvinceIso(string $IpProvinceIso) 设置可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpCity() 获取可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpCity(string $IpCity) 设置可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventSubType() 获取可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventSubType(string $EventSubType) 设置可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConcernInfo extends AbstractModel
{
    /**
     * @var integer 关注点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConcernType;

    /**
     * @var integer 实体类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntityType;

    /**
     * @var string 关注点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Concern;

    /**
     * @var integer 最近数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticsCount;

    /**
     * @var string IP国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpCountry;

    /**
     * @var string IP省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpProvince;

    /**
     * @var string 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer 置信度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Confidence;

    /**
     * @var string 服务商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpIsp;

    /**
     * @var string 是否基础设施
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpInfrastructure;

    /**
     * @var array 威胁类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThreatType;

    /**
     * @var array 威胁团伙
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var string 状态威胁情报接口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 恶意标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VictimAssetType;

    /**
     * @var string 资产名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VictimAssetName;

    /**
     * @var string 注册者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainRegistrant;

    /**
     * @var string 注册机构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainRegisteredInstitution;

    /**
     * @var string 注册时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainRegistrationTime;

    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMd5;

    /**
     * @var string 病毒名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusName;

    /**
     * @var string 文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePath;

    /**
     * @var string 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 进程名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcName;

    /**
     * @var string 进程ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pid;

    /**
     * @var string 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcPath;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcUser;

    /**
     * @var integer 已防御
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefendedCount;

    /**
     * @var integer 仅检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectedCount;

    /**
     * @var string 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchData;

    /**
     * @var string 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpCountryIso;

    /**
     * @var string 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpProvinceIso;

    /**
     * @var string 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpCity;

    /**
     * @var string 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventSubType;

    /**
     * @param integer $ConcernType 关注点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EntityType 实体类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Concern 关注点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StatisticsCount 最近数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpCountry IP国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpProvince IP省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Confidence 置信度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpIsp 服务商
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpInfrastructure 是否基础设施
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ThreatType 威胁类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Groups 威胁团伙
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态威胁情报接口
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 恶意标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VictimAssetType 资产类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VictimAssetName 资产名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainRegistrant 注册者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainRegisteredInstitution 注册机构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainRegistrationTime 注册时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMd5 MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusName 病毒名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePath 文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSize 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcName 进程名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Pid 进程ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcPath 进程路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcUser 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefendedCount 已防御
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetectedCount 仅检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SearchData 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpCountryIso 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpProvinceIso 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpCity 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventSubType 可疑关注点字段
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ConcernType",$param) and $param["ConcernType"] !== null) {
            $this->ConcernType = $param["ConcernType"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Concern",$param) and $param["Concern"] !== null) {
            $this->Concern = $param["Concern"];
        }

        if (array_key_exists("StatisticsCount",$param) and $param["StatisticsCount"] !== null) {
            $this->StatisticsCount = $param["StatisticsCount"];
        }

        if (array_key_exists("IpCountry",$param) and $param["IpCountry"] !== null) {
            $this->IpCountry = $param["IpCountry"];
        }

        if (array_key_exists("IpProvince",$param) and $param["IpProvince"] !== null) {
            $this->IpProvince = $param["IpProvince"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("IpIsp",$param) and $param["IpIsp"] !== null) {
            $this->IpIsp = $param["IpIsp"];
        }

        if (array_key_exists("IpInfrastructure",$param) and $param["IpInfrastructure"] !== null) {
            $this->IpInfrastructure = $param["IpInfrastructure"];
        }

        if (array_key_exists("ThreatType",$param) and $param["ThreatType"] !== null) {
            $this->ThreatType = $param["ThreatType"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("VictimAssetType",$param) and $param["VictimAssetType"] !== null) {
            $this->VictimAssetType = $param["VictimAssetType"];
        }

        if (array_key_exists("VictimAssetName",$param) and $param["VictimAssetName"] !== null) {
            $this->VictimAssetName = $param["VictimAssetName"];
        }

        if (array_key_exists("DomainRegistrant",$param) and $param["DomainRegistrant"] !== null) {
            $this->DomainRegistrant = $param["DomainRegistrant"];
        }

        if (array_key_exists("DomainRegisteredInstitution",$param) and $param["DomainRegisteredInstitution"] !== null) {
            $this->DomainRegisteredInstitution = $param["DomainRegisteredInstitution"];
        }

        if (array_key_exists("DomainRegistrationTime",$param) and $param["DomainRegistrationTime"] !== null) {
            $this->DomainRegistrationTime = $param["DomainRegistrationTime"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("VirusName",$param) and $param["VirusName"] !== null) {
            $this->VirusName = $param["VirusName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("ProcName",$param) and $param["ProcName"] !== null) {
            $this->ProcName = $param["ProcName"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("ProcPath",$param) and $param["ProcPath"] !== null) {
            $this->ProcPath = $param["ProcPath"];
        }

        if (array_key_exists("ProcUser",$param) and $param["ProcUser"] !== null) {
            $this->ProcUser = $param["ProcUser"];
        }

        if (array_key_exists("DefendedCount",$param) and $param["DefendedCount"] !== null) {
            $this->DefendedCount = $param["DefendedCount"];
        }

        if (array_key_exists("DetectedCount",$param) and $param["DetectedCount"] !== null) {
            $this->DetectedCount = $param["DetectedCount"];
        }

        if (array_key_exists("SearchData",$param) and $param["SearchData"] !== null) {
            $this->SearchData = $param["SearchData"];
        }

        if (array_key_exists("IpCountryIso",$param) and $param["IpCountryIso"] !== null) {
            $this->IpCountryIso = $param["IpCountryIso"];
        }

        if (array_key_exists("IpProvinceIso",$param) and $param["IpProvinceIso"] !== null) {
            $this->IpProvinceIso = $param["IpProvinceIso"];
        }

        if (array_key_exists("IpCity",$param) and $param["IpCity"] !== null) {
            $this->IpCity = $param["IpCity"];
        }

        if (array_key_exists("EventSubType",$param) and $param["EventSubType"] !== null) {
            $this->EventSubType = $param["EventSubType"];
        }
    }
}
