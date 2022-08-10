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
 * DescribeAssetSummary返回参数结构体
 *
 * @method integer getAppCnt() 获取应用个数
 * @method void setAppCnt(integer $AppCnt) 设置应用个数
 * @method integer getContainerCnt() 获取容器个数
 * @method void setContainerCnt(integer $ContainerCnt) 设置容器个数
 * @method integer getContainerPause() 获取暂停的容器个数
 * @method void setContainerPause(integer $ContainerPause) 设置暂停的容器个数
 * @method integer getContainerRunning() 获取运行的容器个数
 * @method void setContainerRunning(integer $ContainerRunning) 设置运行的容器个数
 * @method integer getContainerStop() 获取停止运行的容器个数
 * @method void setContainerStop(integer $ContainerStop) 设置停止运行的容器个数
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getDbCnt() 获取数据库个数
 * @method void setDbCnt(integer $DbCnt) 设置数据库个数
 * @method integer getImageCnt() 获取镜像个数
 * @method void setImageCnt(integer $ImageCnt) 设置镜像个数
 * @method integer getHostOnline() 获取主机在线个数
 * @method void setHostOnline(integer $HostOnline) 设置主机在线个数
 * @method integer getHostCnt() 获取主机个数
 * @method void setHostCnt(integer $HostCnt) 设置主机个数
 * @method integer getImageHasRiskInfoCnt() 获取有风险的镜像个数
 * @method void setImageHasRiskInfoCnt(integer $ImageHasRiskInfoCnt) 设置有风险的镜像个数
 * @method integer getImageHasVirusCnt() 获取有病毒的镜像个数
 * @method void setImageHasVirusCnt(integer $ImageHasVirusCnt) 设置有病毒的镜像个数
 * @method integer getImageHasVulsCnt() 获取有漏洞的镜像个数
 * @method void setImageHasVulsCnt(integer $ImageHasVulsCnt) 设置有漏洞的镜像个数
 * @method integer getImageUntrustCnt() 获取不受信任的镜像个数
 * @method void setImageUntrustCnt(integer $ImageUntrustCnt) 设置不受信任的镜像个数
 * @method integer getListenPortCnt() 获取监听的端口个数
 * @method void setListenPortCnt(integer $ListenPortCnt) 设置监听的端口个数
 * @method integer getProcessCnt() 获取进程个数
 * @method void setProcessCnt(integer $ProcessCnt) 设置进程个数
 * @method integer getWebServiceCnt() 获取web服务个数
 * @method void setWebServiceCnt(integer $WebServiceCnt) 设置web服务个数
 * @method string getLatestImageScanTime() 获取最近镜像扫描时间
 * @method void setLatestImageScanTime(string $LatestImageScanTime) 设置最近镜像扫描时间
 * @method integer getImageUnsafeCnt() 获取风险镜像个数
 * @method void setImageUnsafeCnt(integer $ImageUnsafeCnt) 设置风险镜像个数
 * @method integer getHostUnInstallCnt() 获取主机未安装agent数量
 * @method void setHostUnInstallCnt(integer $HostUnInstallCnt) 设置主机未安装agent数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetSummaryResponse extends AbstractModel
{
    /**
     * @var integer 应用个数
     */
    public $AppCnt;

    /**
     * @var integer 容器个数
     */
    public $ContainerCnt;

    /**
     * @var integer 暂停的容器个数
     */
    public $ContainerPause;

    /**
     * @var integer 运行的容器个数
     */
    public $ContainerRunning;

    /**
     * @var integer 停止运行的容器个数
     */
    public $ContainerStop;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 数据库个数
     */
    public $DbCnt;

    /**
     * @var integer 镜像个数
     */
    public $ImageCnt;

    /**
     * @var integer 主机在线个数
     */
    public $HostOnline;

    /**
     * @var integer 主机个数
     */
    public $HostCnt;

    /**
     * @var integer 有风险的镜像个数
     */
    public $ImageHasRiskInfoCnt;

    /**
     * @var integer 有病毒的镜像个数
     */
    public $ImageHasVirusCnt;

    /**
     * @var integer 有漏洞的镜像个数
     */
    public $ImageHasVulsCnt;

    /**
     * @var integer 不受信任的镜像个数
     */
    public $ImageUntrustCnt;

    /**
     * @var integer 监听的端口个数
     */
    public $ListenPortCnt;

    /**
     * @var integer 进程个数
     */
    public $ProcessCnt;

    /**
     * @var integer web服务个数
     */
    public $WebServiceCnt;

    /**
     * @var string 最近镜像扫描时间
     */
    public $LatestImageScanTime;

    /**
     * @var integer 风险镜像个数
     */
    public $ImageUnsafeCnt;

    /**
     * @var integer 主机未安装agent数量
     */
    public $HostUnInstallCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppCnt 应用个数
     * @param integer $ContainerCnt 容器个数
     * @param integer $ContainerPause 暂停的容器个数
     * @param integer $ContainerRunning 运行的容器个数
     * @param integer $ContainerStop 停止运行的容器个数
     * @param string $CreateTime 创建时间
     * @param integer $DbCnt 数据库个数
     * @param integer $ImageCnt 镜像个数
     * @param integer $HostOnline 主机在线个数
     * @param integer $HostCnt 主机个数
     * @param integer $ImageHasRiskInfoCnt 有风险的镜像个数
     * @param integer $ImageHasVirusCnt 有病毒的镜像个数
     * @param integer $ImageHasVulsCnt 有漏洞的镜像个数
     * @param integer $ImageUntrustCnt 不受信任的镜像个数
     * @param integer $ListenPortCnt 监听的端口个数
     * @param integer $ProcessCnt 进程个数
     * @param integer $WebServiceCnt web服务个数
     * @param string $LatestImageScanTime 最近镜像扫描时间
     * @param integer $ImageUnsafeCnt 风险镜像个数
     * @param integer $HostUnInstallCnt 主机未安装agent数量
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
        if (array_key_exists("AppCnt",$param) and $param["AppCnt"] !== null) {
            $this->AppCnt = $param["AppCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ContainerPause",$param) and $param["ContainerPause"] !== null) {
            $this->ContainerPause = $param["ContainerPause"];
        }

        if (array_key_exists("ContainerRunning",$param) and $param["ContainerRunning"] !== null) {
            $this->ContainerRunning = $param["ContainerRunning"];
        }

        if (array_key_exists("ContainerStop",$param) and $param["ContainerStop"] !== null) {
            $this->ContainerStop = $param["ContainerStop"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbCnt",$param) and $param["DbCnt"] !== null) {
            $this->DbCnt = $param["DbCnt"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("HostOnline",$param) and $param["HostOnline"] !== null) {
            $this->HostOnline = $param["HostOnline"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("ImageHasRiskInfoCnt",$param) and $param["ImageHasRiskInfoCnt"] !== null) {
            $this->ImageHasRiskInfoCnt = $param["ImageHasRiskInfoCnt"];
        }

        if (array_key_exists("ImageHasVirusCnt",$param) and $param["ImageHasVirusCnt"] !== null) {
            $this->ImageHasVirusCnt = $param["ImageHasVirusCnt"];
        }

        if (array_key_exists("ImageHasVulsCnt",$param) and $param["ImageHasVulsCnt"] !== null) {
            $this->ImageHasVulsCnt = $param["ImageHasVulsCnt"];
        }

        if (array_key_exists("ImageUntrustCnt",$param) and $param["ImageUntrustCnt"] !== null) {
            $this->ImageUntrustCnt = $param["ImageUntrustCnt"];
        }

        if (array_key_exists("ListenPortCnt",$param) and $param["ListenPortCnt"] !== null) {
            $this->ListenPortCnt = $param["ListenPortCnt"];
        }

        if (array_key_exists("ProcessCnt",$param) and $param["ProcessCnt"] !== null) {
            $this->ProcessCnt = $param["ProcessCnt"];
        }

        if (array_key_exists("WebServiceCnt",$param) and $param["WebServiceCnt"] !== null) {
            $this->WebServiceCnt = $param["WebServiceCnt"];
        }

        if (array_key_exists("LatestImageScanTime",$param) and $param["LatestImageScanTime"] !== null) {
            $this->LatestImageScanTime = $param["LatestImageScanTime"];
        }

        if (array_key_exists("ImageUnsafeCnt",$param) and $param["ImageUnsafeCnt"] !== null) {
            $this->ImageUnsafeCnt = $param["ImageUnsafeCnt"];
        }

        if (array_key_exists("HostUnInstallCnt",$param) and $param["HostUnInstallCnt"] !== null) {
            $this->HostUnInstallCnt = $param["HostUnInstallCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
