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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全镜像仓库列表
 *
 * @method string getImageDigest() 获取镜像Digest
 * @method void setImageDigest(string $ImageDigest) 设置镜像Digest
 * @method string getImageRepoAddress() 获取镜像仓库地址
 * @method void setImageRepoAddress(string $ImageRepoAddress) 设置镜像仓库地址
 * @method string getRegistryType() 获取仓库类型
 * @method void setRegistryType(string $RegistryType) 设置仓库类型
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageTag() 获取镜像版本
 * @method void setImageTag(string $ImageTag) 设置镜像版本
 * @method integer getImageSize() 获取镜像大小
 * @method void setImageSize(integer $ImageSize) 设置镜像大小
 * @method string getScanTime() 获取最近扫描时间
 * @method void setScanTime(string $ScanTime) 设置最近扫描时间
 * @method string getScanStatus() 获取扫描状态
 * @method void setScanStatus(string $ScanStatus) 设置扫描状态
 * @method integer getVulCnt() 获取安全漏洞数
 * @method void setVulCnt(integer $VulCnt) 设置安全漏洞数
 * @method integer getVirusCnt() 获取木马病毒数
 * @method void setVirusCnt(integer $VirusCnt) 设置木马病毒数
 * @method integer getRiskCnt() 获取风险行为数
 * @method void setRiskCnt(integer $RiskCnt) 设置风险行为数
 * @method integer getSentiveInfoCnt() 获取敏感信息数
 * @method void setSentiveInfoCnt(integer $SentiveInfoCnt) 设置敏感信息数
 * @method boolean getIsTrustImage() 获取是否可信镜像
 * @method void setIsTrustImage(boolean $IsTrustImage) 设置是否可信镜像
 * @method string getOsName() 获取镜像系统
 * @method void setOsName(string $OsName) 设置镜像系统
 * @method string getScanVirusError() 获取木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVirusError(string $ScanVirusError) 设置木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanVulError() 获取漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVulError(string $ScanVulError) 设置漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getScanRiskError() 获取高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRiskError(string $ScanRiskError) 设置高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanVirusProgress() 获取敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVirusProgress(integer $ScanVirusProgress) 设置敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanVulProgress() 获取木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVulProgress(integer $ScanVulProgress) 设置木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanRiskProgress() 获取漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRiskProgress(integer $ScanRiskProgress) 设置漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanRemainTime() 获取剩余扫描时间秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRemainTime(integer $ScanRemainTime) 设置剩余扫描时间秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCveStatus() 获取cve扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCveStatus(string $CveStatus) 设置cve扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskStatus() 获取高危扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskStatus(string $RiskStatus) 设置高危扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirusStatus() 获取木马扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusStatus(string $VirusStatus) 设置木马扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取总进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置总进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAuthorized() 获取授权状态
 * @method void setIsAuthorized(integer $IsAuthorized) 设置授权状态
 * @method string getRegistryRegion() 获取仓库区域
 * @method void setRegistryRegion(string $RegistryRegion) 设置仓库区域
 * @method integer getId() 获取列表id
 * @method void setId(integer $Id) 设置列表id
 * @method string getImageId() 获取镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageCreateTime() 获取镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageCreateTime(string $ImageCreateTime) 设置镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLatestImage() 获取是否为镜像的最新版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatestImage(boolean $IsLatestImage) 设置是否为镜像的最新版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageRepoInfo extends AbstractModel
{
    /**
     * @var string 镜像Digest
     */
    public $ImageDigest;

    /**
     * @var string 镜像仓库地址
     */
    public $ImageRepoAddress;

    /**
     * @var string 仓库类型
     */
    public $RegistryType;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像版本
     */
    public $ImageTag;

    /**
     * @var integer 镜像大小
     */
    public $ImageSize;

    /**
     * @var string 最近扫描时间
     */
    public $ScanTime;

    /**
     * @var string 扫描状态
     */
    public $ScanStatus;

    /**
     * @var integer 安全漏洞数
     */
    public $VulCnt;

    /**
     * @var integer 木马病毒数
     */
    public $VirusCnt;

    /**
     * @var integer 风险行为数
     */
    public $RiskCnt;

    /**
     * @var integer 敏感信息数
     */
    public $SentiveInfoCnt;

    /**
     * @var boolean 是否可信镜像
     */
    public $IsTrustImage;

    /**
     * @var string 镜像系统
     */
    public $OsName;

    /**
     * @var string 木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVirusError;

    /**
     * @var string 漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVulError;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRiskError;

    /**
     * @var integer 敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVirusProgress;

    /**
     * @var integer 木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVulProgress;

    /**
     * @var integer 漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRiskProgress;

    /**
     * @var integer 剩余扫描时间秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRemainTime;

    /**
     * @var string cve扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CveStatus;

    /**
     * @var string 高危扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskStatus;

    /**
     * @var string 木马扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusStatus;

    /**
     * @var integer 总进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var integer 授权状态
     */
    public $IsAuthorized;

    /**
     * @var string 仓库区域
     */
    public $RegistryRegion;

    /**
     * @var integer 列表id
     */
    public $Id;

    /**
     * @var string 镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string 镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageCreateTime;

    /**
     * @var boolean 是否为镜像的最新版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatestImage;

    /**
     * @param string $ImageDigest 镜像Digest
     * @param string $ImageRepoAddress 镜像仓库地址
     * @param string $RegistryType 仓库类型
     * @param string $ImageName 镜像名称
     * @param string $ImageTag 镜像版本
     * @param integer $ImageSize 镜像大小
     * @param string $ScanTime 最近扫描时间
     * @param string $ScanStatus 扫描状态
     * @param integer $VulCnt 安全漏洞数
     * @param integer $VirusCnt 木马病毒数
     * @param integer $RiskCnt 风险行为数
     * @param integer $SentiveInfoCnt 敏感信息数
     * @param boolean $IsTrustImage 是否可信镜像
     * @param string $OsName 镜像系统
     * @param string $ScanVirusError 木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanVulError 漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名称
     * @param string $Namespace 命名空间
     * @param string $ScanRiskError 高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanVirusProgress 敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanVulProgress 木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanRiskProgress 漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanRemainTime 剩余扫描时间秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CveStatus cve扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskStatus 高危扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirusStatus 木马扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 总进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAuthorized 授权状态
     * @param string $RegistryRegion 仓库区域
     * @param integer $Id 列表id
     * @param string $ImageId 镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageCreateTime 镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLatestImage 是否为镜像的最新版本
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
        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("SentiveInfoCnt",$param) and $param["SentiveInfoCnt"] !== null) {
            $this->SentiveInfoCnt = $param["SentiveInfoCnt"];
        }

        if (array_key_exists("IsTrustImage",$param) and $param["IsTrustImage"] !== null) {
            $this->IsTrustImage = $param["IsTrustImage"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ScanVirusError",$param) and $param["ScanVirusError"] !== null) {
            $this->ScanVirusError = $param["ScanVirusError"];
        }

        if (array_key_exists("ScanVulError",$param) and $param["ScanVulError"] !== null) {
            $this->ScanVulError = $param["ScanVulError"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ScanRiskError",$param) and $param["ScanRiskError"] !== null) {
            $this->ScanRiskError = $param["ScanRiskError"];
        }

        if (array_key_exists("ScanVirusProgress",$param) and $param["ScanVirusProgress"] !== null) {
            $this->ScanVirusProgress = $param["ScanVirusProgress"];
        }

        if (array_key_exists("ScanVulProgress",$param) and $param["ScanVulProgress"] !== null) {
            $this->ScanVulProgress = $param["ScanVulProgress"];
        }

        if (array_key_exists("ScanRiskProgress",$param) and $param["ScanRiskProgress"] !== null) {
            $this->ScanRiskProgress = $param["ScanRiskProgress"];
        }

        if (array_key_exists("ScanRemainTime",$param) and $param["ScanRemainTime"] !== null) {
            $this->ScanRemainTime = $param["ScanRemainTime"];
        }

        if (array_key_exists("CveStatus",$param) and $param["CveStatus"] !== null) {
            $this->CveStatus = $param["CveStatus"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("VirusStatus",$param) and $param["VirusStatus"] !== null) {
            $this->VirusStatus = $param["VirusStatus"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("IsLatestImage",$param) and $param["IsLatestImage"] !== null) {
            $this->IsLatestImage = $param["IsLatestImage"];
        }
    }
}
