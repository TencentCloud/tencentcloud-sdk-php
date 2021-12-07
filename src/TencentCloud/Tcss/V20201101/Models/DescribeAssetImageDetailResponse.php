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
 * DescribeAssetImageDetail返回参数结构体
 *
 * @method string getImageID() 获取镜像ID
 * @method void setImageID(string $ImageID) 设置镜像ID
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getSize() 获取镜像大小
 * @method void setSize(integer $Size) 设置镜像大小
 * @method integer getHostCnt() 获取关联主机个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCnt(integer $HostCnt) 设置关联主机个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContainerCnt() 获取关联容器个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerCnt(integer $ContainerCnt) 设置关联容器个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanTime() 获取最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanTime(string $ScanTime) 设置最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulCnt() 获取漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulCnt(integer $VulCnt) 设置漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCnt() 获取风险行为数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCnt(integer $RiskCnt) 设置风险行为数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveInfoCnt() 获取敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveInfoCnt(integer $SensitiveInfoCnt) 设置敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsTrustImage() 获取是否信任镜像
 * @method void setIsTrustImage(boolean $IsTrustImage) 设置是否信任镜像
 * @method string getOsName() 获取镜像系统
 * @method void setOsName(string $OsName) 设置镜像系统
 * @method string getAgentError() 获取agent镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentError(string $AgentError) 设置agent镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanError() 获取后端镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanError(string $ScanError) 设置后端镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArchitecture() 获取系统架构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchitecture(string $Architecture) 设置系统架构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthor() 获取作者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthor(string $Author) 设置作者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBuildHistory() 获取构建历史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildHistory(string $BuildHistory) 设置构建历史
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanVirusProgress() 获取木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVirusProgress(integer $ScanVirusProgress) 设置木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanVulProgress() 获取漏洞扫进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVulProgress(integer $ScanVulProgress) 设置漏洞扫进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanRiskProgress() 获取敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRiskProgress(integer $ScanRiskProgress) 设置敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanVirusError() 获取木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVirusError(string $ScanVirusError) 设置木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanVulError() 获取漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanVulError(string $ScanVulError) 设置漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanRiskError() 获取敏感信息错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRiskError(string $ScanRiskError) 设置敏感信息错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanStatus() 获取镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanStatus(string $ScanStatus) 设置镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVirusCnt() 获取木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirusCnt(integer $VirusCnt) 设置木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemainScanTime() 获取剩余扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemainScanTime(integer $RemainScanTime) 设置剩余扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAuthorized() 获取授权为：1，未授权为：0
 * @method void setIsAuthorized(integer $IsAuthorized) 设置授权为：1，未授权为：0
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageDetailResponse extends AbstractModel
{
    /**
     * @var string 镜像ID
     */
    public $ImageID;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 镜像大小
     */
    public $Size;

    /**
     * @var integer 关联主机个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCnt;

    /**
     * @var integer 关联容器个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerCnt;

    /**
     * @var string 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanTime;

    /**
     * @var integer 漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulCnt;

    /**
     * @var integer 风险行为数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCnt;

    /**
     * @var integer 敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveInfoCnt;

    /**
     * @var boolean 是否信任镜像
     */
    public $IsTrustImage;

    /**
     * @var string 镜像系统
     */
    public $OsName;

    /**
     * @var string agent镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentError;

    /**
     * @var string 后端镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanError;

    /**
     * @var string 系统架构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Architecture;

    /**
     * @var string 作者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Author;

    /**
     * @var string 构建历史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildHistory;

    /**
     * @var integer 木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVirusProgress;

    /**
     * @var integer 漏洞扫进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanVulProgress;

    /**
     * @var integer 敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRiskProgress;

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
     * @var string 敏感信息错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRiskError;

    /**
     * @var string 镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanStatus;

    /**
     * @var integer 木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirusCnt;

    /**
     * @var integer 镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 剩余扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemainScanTime;

    /**
     * @var integer 授权为：1，未授权为：0
     */
    public $IsAuthorized;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ImageID 镜像ID
     * @param string $ImageName 镜像名称
     * @param string $CreateTime 创建时间
     * @param integer $Size 镜像大小
     * @param integer $HostCnt 关联主机个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContainerCnt 关联容器个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanTime 最近扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulCnt 漏洞个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCnt 风险行为数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveInfoCnt 敏感信息数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsTrustImage 是否信任镜像
     * @param string $OsName 镜像系统
     * @param string $AgentError agent镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanError 后端镜像扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Architecture 系统架构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Author 作者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BuildHistory 构建历史
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanVirusProgress 木马扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanVulProgress 漏洞扫进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanRiskProgress 敏感信息扫描进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanVirusError 木马扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanVulError 漏洞扫描错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanRiskError 敏感信息错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanStatus 镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VirusCnt 木马病毒数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 镜像扫描状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemainScanTime 剩余扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAuthorized 授权为：1，未授权为：0
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("SensitiveInfoCnt",$param) and $param["SensitiveInfoCnt"] !== null) {
            $this->SensitiveInfoCnt = $param["SensitiveInfoCnt"];
        }

        if (array_key_exists("IsTrustImage",$param) and $param["IsTrustImage"] !== null) {
            $this->IsTrustImage = $param["IsTrustImage"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("AgentError",$param) and $param["AgentError"] !== null) {
            $this->AgentError = $param["AgentError"];
        }

        if (array_key_exists("ScanError",$param) and $param["ScanError"] !== null) {
            $this->ScanError = $param["ScanError"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("BuildHistory",$param) and $param["BuildHistory"] !== null) {
            $this->BuildHistory = $param["BuildHistory"];
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

        if (array_key_exists("ScanVirusError",$param) and $param["ScanVirusError"] !== null) {
            $this->ScanVirusError = $param["ScanVirusError"];
        }

        if (array_key_exists("ScanVulError",$param) and $param["ScanVulError"] !== null) {
            $this->ScanVulError = $param["ScanVulError"];
        }

        if (array_key_exists("ScanRiskError",$param) and $param["ScanRiskError"] !== null) {
            $this->ScanRiskError = $param["ScanRiskError"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RemainScanTime",$param) and $param["RemainScanTime"] !== null) {
            $this->RemainScanTime = $param["RemainScanTime"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
