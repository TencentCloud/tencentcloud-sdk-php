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
 * DescribeAssetImageRegistryDetail返回参数结构体
 *
 * @method string getImageDigest() 获取镜像Digest
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageDigest(string $ImageDigest) 设置镜像Digest
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageRepoAddress() 获取镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageRepoAddress(string $ImageRepoAddress) 设置镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryType() 获取镜像类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryType(string $RegistryType) 设置镜像类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置仓库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageTag() 获取镜像版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageTag(string $ImageTag) 设置镜像版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanTime() 获取扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanTime(string $ScanTime) 设置扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanStatus() 获取扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanStatus(string $ScanStatus) 设置扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulCnt() 获取安全漏洞数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulCnt(integer $VulCnt) 设置安全漏洞数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVirusCnt() 获取木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusCnt(integer $VirusCnt) 设置木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCnt() 获取风险行为数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCnt(integer $RiskCnt) 设置风险行为数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSentiveInfoCnt() 获取敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSentiveInfoCnt(integer $SentiveInfoCnt) 设置敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOsName() 获取镜像系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOsName(string $OsName) 设置镜像系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanVirusError() 获取木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVirusError(string $ScanVirusError) 设置木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanVulError() 获取漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVulError(string $ScanVulError) 设置漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLayerInfo() 获取层文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLayerInfo(string $LayerInfo) 设置层文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanRiskError() 获取高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRiskError(string $ScanRiskError) 设置高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanVirusProgress() 获取木马信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVirusProgress(integer $ScanVirusProgress) 设置木马信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanVulProgress() 获取漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVulProgress(integer $ScanVulProgress) 设置漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanRiskProgress() 获取敏感扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRiskProgress(integer $ScanRiskProgress) 设置敏感扫描进度
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAuthorized(integer $IsAuthorized) 设置授权状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getImageSize() 获取镜像大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSize(integer $ImageSize) 设置镜像大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageId() 获取镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageId(string $ImageId) 设置镜像Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryRegion() 获取镜像区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryRegion(string $RegistryRegion) 设置镜像区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageCreateTime() 获取镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageCreateTime(string $ImageCreateTime) 设置镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveInfoCnt() 获取敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveInfoCnt(integer $SensitiveInfoCnt) 设置敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageRegistryDetailResponse extends AbstractModel
{
    /**
     * @var string 镜像Digest
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageDigest;

    /**
     * @var string 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageRepoAddress;

    /**
     * @var string 镜像类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryType;

    /**
     * @var string 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageName;

    /**
     * @var string 镜像版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageTag;

    /**
     * @var string 扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanTime;

    /**
     * @var string 扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanStatus;

    /**
     * @var integer 安全漏洞数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulCnt;

    /**
     * @var integer 木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusCnt;

    /**
     * @var integer 风险行为数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCnt;

    /**
     * @var integer 敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $SentiveInfoCnt;

    /**
     * @var string 镜像系统
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string 层文件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LayerInfo;

    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRiskError;

    /**
     * @var integer 木马信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVirusProgress;

    /**
     * @var integer 漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVulProgress;

    /**
     * @var integer 敏感扫描进度
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAuthorized;

    /**
     * @var integer 镜像大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSize;

    /**
     * @var string 镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageId;

    /**
     * @var string 镜像区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryRegion;

    /**
     * @var string 镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageCreateTime;

    /**
     * @var integer 敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveInfoCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ImageDigest 镜像Digest
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageRepoAddress 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryType 镜像类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 仓库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageTag 镜像版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanTime 扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanStatus 扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulCnt 安全漏洞数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VirusCnt 木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCnt 风险行为数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SentiveInfoCnt 敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OsName 镜像系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanVirusError 木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanVulError 漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LayerInfo 层文件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanRiskError 高危扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanVirusProgress 木马信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanVulProgress 漏洞扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanRiskProgress 敏感扫描进度
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
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ImageSize 镜像大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageId 镜像Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryRegion 镜像区域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageCreateTime 镜像创建的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveInfoCnt 敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ScanVirusError",$param) and $param["ScanVirusError"] !== null) {
            $this->ScanVirusError = $param["ScanVirusError"];
        }

        if (array_key_exists("ScanVulError",$param) and $param["ScanVulError"] !== null) {
            $this->ScanVulError = $param["ScanVulError"];
        }

        if (array_key_exists("LayerInfo",$param) and $param["LayerInfo"] !== null) {
            $this->LayerInfo = $param["LayerInfo"];
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

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("SensitiveInfoCnt",$param) and $param["SensitiveInfoCnt"] !== null) {
            $this->SensitiveInfoCnt = $param["SensitiveInfoCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
