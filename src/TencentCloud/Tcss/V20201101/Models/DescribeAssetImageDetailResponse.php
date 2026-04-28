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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageDetail返回参数结构体
 *
 * @method string getImageID() 获取<p>镜像ID</p>
 * @method void setImageID(string $ImageID) 设置<p>镜像ID</p>
 * @method string getImageName() 获取<p>镜像名称</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名称</p>
 * @method string getImageDigest() 获取<p>镜像摘要</p>
 * @method void setImageDigest(string $ImageDigest) 设置<p>镜像摘要</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getSize() 获取<p>镜像大小</p>
 * @method void setSize(integer $Size) 设置<p>镜像大小</p>
 * @method integer getHostCnt() 获取<p>关联主机个数(包含普通节点数和超级节点数)</p>
 * @method void setHostCnt(integer $HostCnt) 设置<p>关联主机个数(包含普通节点数和超级节点数)</p>
 * @method integer getContainerCnt() 获取<p>关联容器个数</p>
 * @method void setContainerCnt(integer $ContainerCnt) 设置<p>关联容器个数</p>
 * @method integer getSuperNodeCnt() 获取<p>超级节点数</p>
 * @method void setSuperNodeCnt(integer $SuperNodeCnt) 设置<p>超级节点数</p>
 * @method string getScanTime() 获取<p>最近扫描时间</p>
 * @method void setScanTime(string $ScanTime) 设置<p>最近扫描时间</p>
 * @method integer getVulCnt() 获取<p>漏洞个数</p>
 * @method void setVulCnt(integer $VulCnt) 设置<p>漏洞个数</p>
 * @method integer getRiskCnt() 获取<p>风险行为数</p>
 * @method void setRiskCnt(integer $RiskCnt) 设置<p>风险行为数</p>
 * @method integer getSensitiveInfoCnt() 获取<p>敏感信息数</p>
 * @method void setSensitiveInfoCnt(integer $SensitiveInfoCnt) 设置<p>敏感信息数</p>
 * @method boolean getIsTrustImage() 获取<p>是否信任镜像</p>
 * @method void setIsTrustImage(boolean $IsTrustImage) 设置<p>是否信任镜像</p>
 * @method string getOsName() 获取<p>镜像系统</p>
 * @method void setOsName(string $OsName) 设置<p>镜像系统</p>
 * @method string getAgentError() 获取<p>agent镜像扫描错误</p>
 * @method void setAgentError(string $AgentError) 设置<p>agent镜像扫描错误</p>
 * @method string getScanError() 获取<p>后端镜像扫描错误</p>
 * @method void setScanError(string $ScanError) 设置<p>后端镜像扫描错误</p>
 * @method string getArchitecture() 获取<p>系统架构</p>
 * @method void setArchitecture(string $Architecture) 设置<p>系统架构</p>
 * @method string getAuthor() 获取<p>作者</p>
 * @method void setAuthor(string $Author) 设置<p>作者</p>
 * @method string getBuildHistory() 获取<p>构建历史</p>
 * @method void setBuildHistory(string $BuildHistory) 设置<p>构建历史</p>
 * @method integer getScanVirusProgress() 获取<p>木马扫描进度</p>
 * @method void setScanVirusProgress(integer $ScanVirusProgress) 设置<p>木马扫描进度</p>
 * @method integer getScanVulProgress() 获取<p>漏洞扫进度</p>
 * @method void setScanVulProgress(integer $ScanVulProgress) 设置<p>漏洞扫进度</p>
 * @method integer getScanRiskProgress() 获取<p>敏感信息扫描进度</p>
 * @method void setScanRiskProgress(integer $ScanRiskProgress) 设置<p>敏感信息扫描进度</p>
 * @method string getScanVirusError() 获取<p>木马扫描错误</p>
 * @method void setScanVirusError(string $ScanVirusError) 设置<p>木马扫描错误</p>
 * @method string getScanVulError() 获取<p>漏洞扫描错误</p>
 * @method void setScanVulError(string $ScanVulError) 设置<p>漏洞扫描错误</p>
 * @method string getScanRiskError() 获取<p>敏感信息错误</p>
 * @method void setScanRiskError(string $ScanRiskError) 设置<p>敏感信息错误</p>
 * @method string getScanStatus() 获取<p>镜像扫描状态</p>
 * @method void setScanStatus(string $ScanStatus) 设置<p>镜像扫描状态</p>
 * @method integer getVirusCnt() 获取<p>木马病毒数</p>
 * @method void setVirusCnt(integer $VirusCnt) 设置<p>木马病毒数</p>
 * @method integer getStatus() 获取<p>镜像扫描状态</p>
 * @method void setStatus(integer $Status) 设置<p>镜像扫描状态</p>
 * @method integer getRemainScanTime() 获取<p>剩余扫描时间</p>
 * @method void setRemainScanTime(integer $RemainScanTime) 设置<p>剩余扫描时间</p>
 * @method integer getIsAuthorized() 获取<p>授权为：1，未授权为：0</p>
 * @method void setIsAuthorized(integer $IsAuthorized) 设置<p>授权为：1，未授权为：0</p>
 * @method string getSolution() 获取<p>解决方案</p>
 * @method void setSolution(string $Solution) 设置<p>解决方案</p>
 * @method string getReason() 获取<p>原因</p>
 * @method void setReason(string $Reason) 设置<p>原因</p>
 * @method array getRepoDigests() 获取<p>仓库Digests</p>
 * @method void setRepoDigests(array $RepoDigests) 设置<p>仓库Digests</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetImageDetailResponse extends AbstractModel
{
    /**
     * @var string <p>镜像ID</p>
     */
    public $ImageID;

    /**
     * @var string <p>镜像名称</p>
     */
    public $ImageName;

    /**
     * @var string <p>镜像摘要</p>
     */
    public $ImageDigest;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>镜像大小</p>
     */
    public $Size;

    /**
     * @var integer <p>关联主机个数(包含普通节点数和超级节点数)</p>
     */
    public $HostCnt;

    /**
     * @var integer <p>关联容器个数</p>
     */
    public $ContainerCnt;

    /**
     * @var integer <p>超级节点数</p>
     */
    public $SuperNodeCnt;

    /**
     * @var string <p>最近扫描时间</p>
     */
    public $ScanTime;

    /**
     * @var integer <p>漏洞个数</p>
     */
    public $VulCnt;

    /**
     * @var integer <p>风险行为数</p>
     */
    public $RiskCnt;

    /**
     * @var integer <p>敏感信息数</p>
     */
    public $SensitiveInfoCnt;

    /**
     * @var boolean <p>是否信任镜像</p>
     */
    public $IsTrustImage;

    /**
     * @var string <p>镜像系统</p>
     */
    public $OsName;

    /**
     * @var string <p>agent镜像扫描错误</p>
     */
    public $AgentError;

    /**
     * @var string <p>后端镜像扫描错误</p>
     */
    public $ScanError;

    /**
     * @var string <p>系统架构</p>
     */
    public $Architecture;

    /**
     * @var string <p>作者</p>
     */
    public $Author;

    /**
     * @var string <p>构建历史</p>
     */
    public $BuildHistory;

    /**
     * @var integer <p>木马扫描进度</p>
     */
    public $ScanVirusProgress;

    /**
     * @var integer <p>漏洞扫进度</p>
     */
    public $ScanVulProgress;

    /**
     * @var integer <p>敏感信息扫描进度</p>
     */
    public $ScanRiskProgress;

    /**
     * @var string <p>木马扫描错误</p>
     */
    public $ScanVirusError;

    /**
     * @var string <p>漏洞扫描错误</p>
     */
    public $ScanVulError;

    /**
     * @var string <p>敏感信息错误</p>
     */
    public $ScanRiskError;

    /**
     * @var string <p>镜像扫描状态</p>
     */
    public $ScanStatus;

    /**
     * @var integer <p>木马病毒数</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>镜像扫描状态</p>
     */
    public $Status;

    /**
     * @var integer <p>剩余扫描时间</p>
     */
    public $RemainScanTime;

    /**
     * @var integer <p>授权为：1，未授权为：0</p>
     */
    public $IsAuthorized;

    /**
     * @var string <p>解决方案</p>
     */
    public $Solution;

    /**
     * @var string <p>原因</p>
     */
    public $Reason;

    /**
     * @var array <p>仓库Digests</p>
     */
    public $RepoDigests;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ImageID <p>镜像ID</p>
     * @param string $ImageName <p>镜像名称</p>
     * @param string $ImageDigest <p>镜像摘要</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $Size <p>镜像大小</p>
     * @param integer $HostCnt <p>关联主机个数(包含普通节点数和超级节点数)</p>
     * @param integer $ContainerCnt <p>关联容器个数</p>
     * @param integer $SuperNodeCnt <p>超级节点数</p>
     * @param string $ScanTime <p>最近扫描时间</p>
     * @param integer $VulCnt <p>漏洞个数</p>
     * @param integer $RiskCnt <p>风险行为数</p>
     * @param integer $SensitiveInfoCnt <p>敏感信息数</p>
     * @param boolean $IsTrustImage <p>是否信任镜像</p>
     * @param string $OsName <p>镜像系统</p>
     * @param string $AgentError <p>agent镜像扫描错误</p>
     * @param string $ScanError <p>后端镜像扫描错误</p>
     * @param string $Architecture <p>系统架构</p>
     * @param string $Author <p>作者</p>
     * @param string $BuildHistory <p>构建历史</p>
     * @param integer $ScanVirusProgress <p>木马扫描进度</p>
     * @param integer $ScanVulProgress <p>漏洞扫进度</p>
     * @param integer $ScanRiskProgress <p>敏感信息扫描进度</p>
     * @param string $ScanVirusError <p>木马扫描错误</p>
     * @param string $ScanVulError <p>漏洞扫描错误</p>
     * @param string $ScanRiskError <p>敏感信息错误</p>
     * @param string $ScanStatus <p>镜像扫描状态</p>
     * @param integer $VirusCnt <p>木马病毒数</p>
     * @param integer $Status <p>镜像扫描状态</p>
     * @param integer $RemainScanTime <p>剩余扫描时间</p>
     * @param integer $IsAuthorized <p>授权为：1，未授权为：0</p>
     * @param string $Solution <p>解决方案</p>
     * @param string $Reason <p>原因</p>
     * @param array $RepoDigests <p>仓库Digests</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
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

        if (array_key_exists("SuperNodeCnt",$param) and $param["SuperNodeCnt"] !== null) {
            $this->SuperNodeCnt = $param["SuperNodeCnt"];
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

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("RepoDigests",$param) and $param["RepoDigests"] !== null) {
            $this->RepoDigests = $param["RepoDigests"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
