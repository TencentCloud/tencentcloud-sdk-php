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
 * 容器安全镜像列表
 *
 * @method string getImageID() 获取镜像id
 * @method void setImageID(string $ImageID) 设置镜像id
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getSize() 获取镜像大小
 * @method void setSize(integer $Size) 设置镜像大小
 * @method integer getHostCnt() 获取主机个数(包含普通节点数和超级节点数)
 * @method void setHostCnt(integer $HostCnt) 设置主机个数(包含普通节点数和超级节点数)
 * @method integer getSuperNodeCnt() 获取超级节点数
 * @method void setSuperNodeCnt(integer $SuperNodeCnt) 设置超级节点数
 * @method integer getContainerCnt() 获取容器个数
 * @method void setContainerCnt(integer $ContainerCnt) 设置容器个数
 * @method string getScanTime() 获取扫描时间
 * @method void setScanTime(string $ScanTime) 设置扫描时间
 * @method integer getVulCnt() 获取漏洞个数
 * @method void setVulCnt(integer $VulCnt) 设置漏洞个数
 * @method integer getVirusCnt() 获取病毒个数
 * @method void setVirusCnt(integer $VirusCnt) 设置病毒个数
 * @method integer getRiskCnt() 获取敏感信息个数
 * @method void setRiskCnt(integer $RiskCnt) 设置敏感信息个数
 * @method boolean getIsTrustImage() 获取是否信任镜像
 * @method void setIsTrustImage(boolean $IsTrustImage) 设置是否信任镜像
 * @method string getOsName() 获取镜像系统
 * @method void setOsName(string $OsName) 设置镜像系统
 * @method string getAgentError() 获取agent镜像扫描错误
 * @method void setAgentError(string $AgentError) 设置agent镜像扫描错误
 * @method string getScanError() 获取后端镜像扫描错误
 * @method void setScanError(string $ScanError) 设置后端镜像扫描错误
 * @method string getScanStatus() 获取扫描状态
 * @method void setScanStatus(string $ScanStatus) 设置扫描状态
 * @method string getScanVirusError() 获取木马扫描错误信息
 * @method void setScanVirusError(string $ScanVirusError) 设置木马扫描错误信息
 * @method string getScanVulError() 获取漏洞扫描错误信息
 * @method void setScanVulError(string $ScanVulError) 设置漏洞扫描错误信息
 * @method string getScanRiskError() 获取风险扫描错误信息
 * @method void setScanRiskError(string $ScanRiskError) 设置风险扫描错误信息
 * @method integer getIsSuggest() 获取是否是重点关注镜像，为0不是，非0是
 * @method void setIsSuggest(integer $IsSuggest) 设置是否是重点关注镜像，为0不是，非0是
 * @method integer getIsAuthorized() 获取是否授权，1是0否
 * @method void setIsAuthorized(integer $IsAuthorized) 设置是否授权，1是0否
 * @method integer getComponentCnt() 获取组件个数
 * @method void setComponentCnt(integer $ComponentCnt) 设置组件个数
 * @method integer getCriticalLevelVulCnt() 获取严重漏洞数
 * @method void setCriticalLevelVulCnt(integer $CriticalLevelVulCnt) 设置严重漏洞数
 * @method integer getHighLevelVulCnt() 获取高危漏洞数
 * @method void setHighLevelVulCnt(integer $HighLevelVulCnt) 设置高危漏洞数
 * @method integer getMediumLevelVulCnt() 获取中危漏洞数
 * @method void setMediumLevelVulCnt(integer $MediumLevelVulCnt) 设置中危漏洞数
 * @method integer getLowLevelVulCnt() 获取低危漏洞数
 * @method void setLowLevelVulCnt(integer $LowLevelVulCnt) 设置低危漏洞数
 * @method boolean getIsLatestImage() 获取是否最新版本镜像
 * @method void setIsLatestImage(boolean $IsLatestImage) 设置是否最新版本镜像
 * @method boolean getRecommendedFix() 获取是否推荐处置
 * @method void setRecommendedFix(boolean $RecommendedFix) 设置是否推荐处置
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 * @method string getReason() 获取原因

 * @method void setReason(string $Reason) 设置原因
 */
class ImagesInfo extends AbstractModel
{
    /**
     * @var string 镜像id
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
     * @var integer 主机个数(包含普通节点数和超级节点数)
     */
    public $HostCnt;

    /**
     * @var integer 超级节点数
     */
    public $SuperNodeCnt;

    /**
     * @var integer 容器个数
     */
    public $ContainerCnt;

    /**
     * @var string 扫描时间
     */
    public $ScanTime;

    /**
     * @var integer 漏洞个数
     */
    public $VulCnt;

    /**
     * @var integer 病毒个数
     */
    public $VirusCnt;

    /**
     * @var integer 敏感信息个数
     */
    public $RiskCnt;

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
     */
    public $AgentError;

    /**
     * @var string 后端镜像扫描错误
     */
    public $ScanError;

    /**
     * @var string 扫描状态
     */
    public $ScanStatus;

    /**
     * @var string 木马扫描错误信息
     */
    public $ScanVirusError;

    /**
     * @var string 漏洞扫描错误信息
     */
    public $ScanVulError;

    /**
     * @var string 风险扫描错误信息
     */
    public $ScanRiskError;

    /**
     * @var integer 是否是重点关注镜像，为0不是，非0是
     */
    public $IsSuggest;

    /**
     * @var integer 是否授权，1是0否
     */
    public $IsAuthorized;

    /**
     * @var integer 组件个数
     */
    public $ComponentCnt;

    /**
     * @var integer 严重漏洞数
     */
    public $CriticalLevelVulCnt;

    /**
     * @var integer 高危漏洞数
     */
    public $HighLevelVulCnt;

    /**
     * @var integer 中危漏洞数
     */
    public $MediumLevelVulCnt;

    /**
     * @var integer 低危漏洞数
     */
    public $LowLevelVulCnt;

    /**
     * @var boolean 是否最新版本镜像
     */
    public $IsLatestImage;

    /**
     * @var boolean 是否推荐处置
     */
    public $RecommendedFix;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @var string 原因

     */
    public $Reason;

    /**
     * @param string $ImageID 镜像id
     * @param string $ImageName 镜像名称
     * @param string $CreateTime 创建时间
     * @param integer $Size 镜像大小
     * @param integer $HostCnt 主机个数(包含普通节点数和超级节点数)
     * @param integer $SuperNodeCnt 超级节点数
     * @param integer $ContainerCnt 容器个数
     * @param string $ScanTime 扫描时间
     * @param integer $VulCnt 漏洞个数
     * @param integer $VirusCnt 病毒个数
     * @param integer $RiskCnt 敏感信息个数
     * @param boolean $IsTrustImage 是否信任镜像
     * @param string $OsName 镜像系统
     * @param string $AgentError agent镜像扫描错误
     * @param string $ScanError 后端镜像扫描错误
     * @param string $ScanStatus 扫描状态
     * @param string $ScanVirusError 木马扫描错误信息
     * @param string $ScanVulError 漏洞扫描错误信息
     * @param string $ScanRiskError 风险扫描错误信息
     * @param integer $IsSuggest 是否是重点关注镜像，为0不是，非0是
     * @param integer $IsAuthorized 是否授权，1是0否
     * @param integer $ComponentCnt 组件个数
     * @param integer $CriticalLevelVulCnt 严重漏洞数
     * @param integer $HighLevelVulCnt 高危漏洞数
     * @param integer $MediumLevelVulCnt 中危漏洞数
     * @param integer $LowLevelVulCnt 低危漏洞数
     * @param boolean $IsLatestImage 是否最新版本镜像
     * @param boolean $RecommendedFix 是否推荐处置
     * @param string $Solution 解决方案
     * @param string $Reason 原因
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

        if (array_key_exists("SuperNodeCnt",$param) and $param["SuperNodeCnt"] !== null) {
            $this->SuperNodeCnt = $param["SuperNodeCnt"];
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

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
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

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
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

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("ComponentCnt",$param) and $param["ComponentCnt"] !== null) {
            $this->ComponentCnt = $param["ComponentCnt"];
        }

        if (array_key_exists("CriticalLevelVulCnt",$param) and $param["CriticalLevelVulCnt"] !== null) {
            $this->CriticalLevelVulCnt = $param["CriticalLevelVulCnt"];
        }

        if (array_key_exists("HighLevelVulCnt",$param) and $param["HighLevelVulCnt"] !== null) {
            $this->HighLevelVulCnt = $param["HighLevelVulCnt"];
        }

        if (array_key_exists("MediumLevelVulCnt",$param) and $param["MediumLevelVulCnt"] !== null) {
            $this->MediumLevelVulCnt = $param["MediumLevelVulCnt"];
        }

        if (array_key_exists("LowLevelVulCnt",$param) and $param["LowLevelVulCnt"] !== null) {
            $this->LowLevelVulCnt = $param["LowLevelVulCnt"];
        }

        if (array_key_exists("IsLatestImage",$param) and $param["IsLatestImage"] !== null) {
            $this->IsLatestImage = $param["IsLatestImage"];
        }

        if (array_key_exists("RecommendedFix",$param) and $param["RecommendedFix"] !== null) {
            $this->RecommendedFix = $param["RecommendedFix"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
