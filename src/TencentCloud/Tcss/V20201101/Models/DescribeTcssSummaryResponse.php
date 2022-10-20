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
 * DescribeTcssSummary返回参数结构体
 *
 * @method integer getImageCnt() 获取镜像总数
 * @method void setImageCnt(integer $ImageCnt) 设置镜像总数
 * @method integer getScannedImageCnt() 获取已扫描镜像数
 * @method void setScannedImageCnt(integer $ScannedImageCnt) 设置已扫描镜像数
 * @method integer getUnScannedImageCnt() 获取待扫描镜像个数
 * @method void setUnScannedImageCnt(integer $UnScannedImageCnt) 设置待扫描镜像个数
 * @method integer getLocalImageCnt() 获取本地镜像个数
 * @method void setLocalImageCnt(integer $LocalImageCnt) 设置本地镜像个数
 * @method integer getRepositoryImageCnt() 获取仓库镜像个数
 * @method void setRepositoryImageCnt(integer $RepositoryImageCnt) 设置仓库镜像个数
 * @method integer getRiskLocalImageCnt() 获取风险本地镜像个数
 * @method void setRiskLocalImageCnt(integer $RiskLocalImageCnt) 设置风险本地镜像个数
 * @method integer getRiskRepositoryImageCnt() 获取风险仓库镜像个数
 * @method void setRiskRepositoryImageCnt(integer $RiskRepositoryImageCnt) 设置风险仓库镜像个数
 * @method integer getContainerCnt() 获取容器个数
 * @method void setContainerCnt(integer $ContainerCnt) 设置容器个数
 * @method integer getRiskContainerCnt() 获取风险容器个数
 * @method void setRiskContainerCnt(integer $RiskContainerCnt) 设置风险容器个数
 * @method integer getClusterCnt() 获取集群个数
 * @method void setClusterCnt(integer $ClusterCnt) 设置集群个数
 * @method integer getRiskClusterCnt() 获取风险集群个数
 * @method void setRiskClusterCnt(integer $RiskClusterCnt) 设置风险集群个数
 * @method integer getUnScannedVulCnt() 获取待扫描漏洞个数
 * @method void setUnScannedVulCnt(integer $UnScannedVulCnt) 设置待扫描漏洞个数
 * @method integer getRiskVulCnt() 获取风险漏洞个数
 * @method void setRiskVulCnt(integer $RiskVulCnt) 设置风险漏洞个数
 * @method integer getUnScannedBaseLineCnt() 获取安全基线待扫描项个数
 * @method void setUnScannedBaseLineCnt(integer $UnScannedBaseLineCnt) 设置安全基线待扫描项个数
 * @method integer getRiskBaseLineCnt() 获取安全基线风险个数
 * @method void setRiskBaseLineCnt(integer $RiskBaseLineCnt) 设置安全基线风险个数
 * @method integer getRuntimeUnhandleEventCnt() 获取运行时(高危)待处理事件个数
 * @method void setRuntimeUnhandleEventCnt(integer $RuntimeUnhandleEventCnt) 设置运行时(高危)待处理事件个数
 * @method integer getUnScannedClusterCnt() 获取待扫描集群个数
 * @method void setUnScannedClusterCnt(integer $UnScannedClusterCnt) 设置待扫描集群个数
 * @method boolean getScanImageStatus() 获取是否已扫描镜像
 * @method void setScanImageStatus(boolean $ScanImageStatus) 设置是否已扫描镜像
 * @method boolean getScanClusterStatus() 获取是否已扫描集群
 * @method void setScanClusterStatus(boolean $ScanClusterStatus) 设置是否已扫描集群
 * @method boolean getScanBaseLineStatus() 获取是否已扫描基线
 * @method void setScanBaseLineStatus(boolean $ScanBaseLineStatus) 设置是否已扫描基线
 * @method boolean getScanVulStatus() 获取是否已扫描漏洞
 * @method void setScanVulStatus(boolean $ScanVulStatus) 设置是否已扫描漏洞
 * @method integer getVulRiskImageCnt() 获取漏洞影响镜像数
 * @method void setVulRiskImageCnt(integer $VulRiskImageCnt) 设置漏洞影响镜像数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTcssSummaryResponse extends AbstractModel
{
    /**
     * @var integer 镜像总数
     */
    public $ImageCnt;

    /**
     * @var integer 已扫描镜像数
     */
    public $ScannedImageCnt;

    /**
     * @var integer 待扫描镜像个数
     */
    public $UnScannedImageCnt;

    /**
     * @var integer 本地镜像个数
     */
    public $LocalImageCnt;

    /**
     * @var integer 仓库镜像个数
     */
    public $RepositoryImageCnt;

    /**
     * @var integer 风险本地镜像个数
     */
    public $RiskLocalImageCnt;

    /**
     * @var integer 风险仓库镜像个数
     */
    public $RiskRepositoryImageCnt;

    /**
     * @var integer 容器个数
     */
    public $ContainerCnt;

    /**
     * @var integer 风险容器个数
     */
    public $RiskContainerCnt;

    /**
     * @var integer 集群个数
     */
    public $ClusterCnt;

    /**
     * @var integer 风险集群个数
     */
    public $RiskClusterCnt;

    /**
     * @var integer 待扫描漏洞个数
     */
    public $UnScannedVulCnt;

    /**
     * @var integer 风险漏洞个数
     */
    public $RiskVulCnt;

    /**
     * @var integer 安全基线待扫描项个数
     */
    public $UnScannedBaseLineCnt;

    /**
     * @var integer 安全基线风险个数
     */
    public $RiskBaseLineCnt;

    /**
     * @var integer 运行时(高危)待处理事件个数
     */
    public $RuntimeUnhandleEventCnt;

    /**
     * @var integer 待扫描集群个数
     */
    public $UnScannedClusterCnt;

    /**
     * @var boolean 是否已扫描镜像
     */
    public $ScanImageStatus;

    /**
     * @var boolean 是否已扫描集群
     */
    public $ScanClusterStatus;

    /**
     * @var boolean 是否已扫描基线
     */
    public $ScanBaseLineStatus;

    /**
     * @var boolean 是否已扫描漏洞
     */
    public $ScanVulStatus;

    /**
     * @var integer 漏洞影响镜像数
     */
    public $VulRiskImageCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ImageCnt 镜像总数
     * @param integer $ScannedImageCnt 已扫描镜像数
     * @param integer $UnScannedImageCnt 待扫描镜像个数
     * @param integer $LocalImageCnt 本地镜像个数
     * @param integer $RepositoryImageCnt 仓库镜像个数
     * @param integer $RiskLocalImageCnt 风险本地镜像个数
     * @param integer $RiskRepositoryImageCnt 风险仓库镜像个数
     * @param integer $ContainerCnt 容器个数
     * @param integer $RiskContainerCnt 风险容器个数
     * @param integer $ClusterCnt 集群个数
     * @param integer $RiskClusterCnt 风险集群个数
     * @param integer $UnScannedVulCnt 待扫描漏洞个数
     * @param integer $RiskVulCnt 风险漏洞个数
     * @param integer $UnScannedBaseLineCnt 安全基线待扫描项个数
     * @param integer $RiskBaseLineCnt 安全基线风险个数
     * @param integer $RuntimeUnhandleEventCnt 运行时(高危)待处理事件个数
     * @param integer $UnScannedClusterCnt 待扫描集群个数
     * @param boolean $ScanImageStatus 是否已扫描镜像
     * @param boolean $ScanClusterStatus 是否已扫描集群
     * @param boolean $ScanBaseLineStatus 是否已扫描基线
     * @param boolean $ScanVulStatus 是否已扫描漏洞
     * @param integer $VulRiskImageCnt 漏洞影响镜像数
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
        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ScannedImageCnt",$param) and $param["ScannedImageCnt"] !== null) {
            $this->ScannedImageCnt = $param["ScannedImageCnt"];
        }

        if (array_key_exists("UnScannedImageCnt",$param) and $param["UnScannedImageCnt"] !== null) {
            $this->UnScannedImageCnt = $param["UnScannedImageCnt"];
        }

        if (array_key_exists("LocalImageCnt",$param) and $param["LocalImageCnt"] !== null) {
            $this->LocalImageCnt = $param["LocalImageCnt"];
        }

        if (array_key_exists("RepositoryImageCnt",$param) and $param["RepositoryImageCnt"] !== null) {
            $this->RepositoryImageCnt = $param["RepositoryImageCnt"];
        }

        if (array_key_exists("RiskLocalImageCnt",$param) and $param["RiskLocalImageCnt"] !== null) {
            $this->RiskLocalImageCnt = $param["RiskLocalImageCnt"];
        }

        if (array_key_exists("RiskRepositoryImageCnt",$param) and $param["RiskRepositoryImageCnt"] !== null) {
            $this->RiskRepositoryImageCnt = $param["RiskRepositoryImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("RiskContainerCnt",$param) and $param["RiskContainerCnt"] !== null) {
            $this->RiskContainerCnt = $param["RiskContainerCnt"];
        }

        if (array_key_exists("ClusterCnt",$param) and $param["ClusterCnt"] !== null) {
            $this->ClusterCnt = $param["ClusterCnt"];
        }

        if (array_key_exists("RiskClusterCnt",$param) and $param["RiskClusterCnt"] !== null) {
            $this->RiskClusterCnt = $param["RiskClusterCnt"];
        }

        if (array_key_exists("UnScannedVulCnt",$param) and $param["UnScannedVulCnt"] !== null) {
            $this->UnScannedVulCnt = $param["UnScannedVulCnt"];
        }

        if (array_key_exists("RiskVulCnt",$param) and $param["RiskVulCnt"] !== null) {
            $this->RiskVulCnt = $param["RiskVulCnt"];
        }

        if (array_key_exists("UnScannedBaseLineCnt",$param) and $param["UnScannedBaseLineCnt"] !== null) {
            $this->UnScannedBaseLineCnt = $param["UnScannedBaseLineCnt"];
        }

        if (array_key_exists("RiskBaseLineCnt",$param) and $param["RiskBaseLineCnt"] !== null) {
            $this->RiskBaseLineCnt = $param["RiskBaseLineCnt"];
        }

        if (array_key_exists("RuntimeUnhandleEventCnt",$param) and $param["RuntimeUnhandleEventCnt"] !== null) {
            $this->RuntimeUnhandleEventCnt = $param["RuntimeUnhandleEventCnt"];
        }

        if (array_key_exists("UnScannedClusterCnt",$param) and $param["UnScannedClusterCnt"] !== null) {
            $this->UnScannedClusterCnt = $param["UnScannedClusterCnt"];
        }

        if (array_key_exists("ScanImageStatus",$param) and $param["ScanImageStatus"] !== null) {
            $this->ScanImageStatus = $param["ScanImageStatus"];
        }

        if (array_key_exists("ScanClusterStatus",$param) and $param["ScanClusterStatus"] !== null) {
            $this->ScanClusterStatus = $param["ScanClusterStatus"];
        }

        if (array_key_exists("ScanBaseLineStatus",$param) and $param["ScanBaseLineStatus"] !== null) {
            $this->ScanBaseLineStatus = $param["ScanBaseLineStatus"];
        }

        if (array_key_exists("ScanVulStatus",$param) and $param["ScanVulStatus"] !== null) {
            $this->ScanVulStatus = $param["ScanVulStatus"];
        }

        if (array_key_exists("VulRiskImageCnt",$param) and $param["VulRiskImageCnt"] !== null) {
            $this->VulRiskImageCnt = $param["VulRiskImageCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
