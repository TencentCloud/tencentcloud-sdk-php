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
 * DescribeContainerAssetSummary返回参数结构体
 *
 * @method integer getContainerTotalCnt() 获取容器总数
 * @method void setContainerTotalCnt(integer $ContainerTotalCnt) 设置容器总数
 * @method integer getContainerRunningCnt() 获取正在运行容器数量
 * @method void setContainerRunningCnt(integer $ContainerRunningCnt) 设置正在运行容器数量
 * @method integer getContainerPauseCnt() 获取暂停运行容器数量
 * @method void setContainerPauseCnt(integer $ContainerPauseCnt) 设置暂停运行容器数量
 * @method integer getContainerStopped() 获取停止运行容器数量
 * @method void setContainerStopped(integer $ContainerStopped) 设置停止运行容器数量
 * @method integer getImageCnt() 获取本地镜像数量
 * @method void setImageCnt(integer $ImageCnt) 设置本地镜像数量
 * @method integer getHostCnt() 获取主机节点数量
 * @method void setHostCnt(integer $HostCnt) 设置主机节点数量
 * @method integer getHostRunningCnt() 获取主机正在运行节点数量
 * @method void setHostRunningCnt(integer $HostRunningCnt) 设置主机正在运行节点数量
 * @method integer getHostOfflineCnt() 获取主机离线节点数量
 * @method void setHostOfflineCnt(integer $HostOfflineCnt) 设置主机离线节点数量
 * @method integer getImageRegistryCnt() 获取镜像仓库数量
 * @method void setImageRegistryCnt(integer $ImageRegistryCnt) 设置镜像仓库数量
 * @method integer getImageTotalCnt() 获取镜像总数
 * @method void setImageTotalCnt(integer $ImageTotalCnt) 设置镜像总数
 * @method integer getHostUnInstallCnt() 获取主机未安装agent数量
 * @method void setHostUnInstallCnt(integer $HostUnInstallCnt) 设置主机未安装agent数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeContainerAssetSummaryResponse extends AbstractModel
{
    /**
     * @var integer 容器总数
     */
    public $ContainerTotalCnt;

    /**
     * @var integer 正在运行容器数量
     */
    public $ContainerRunningCnt;

    /**
     * @var integer 暂停运行容器数量
     */
    public $ContainerPauseCnt;

    /**
     * @var integer 停止运行容器数量
     */
    public $ContainerStopped;

    /**
     * @var integer 本地镜像数量
     */
    public $ImageCnt;

    /**
     * @var integer 主机节点数量
     */
    public $HostCnt;

    /**
     * @var integer 主机正在运行节点数量
     */
    public $HostRunningCnt;

    /**
     * @var integer 主机离线节点数量
     */
    public $HostOfflineCnt;

    /**
     * @var integer 镜像仓库数量
     */
    public $ImageRegistryCnt;

    /**
     * @var integer 镜像总数
     */
    public $ImageTotalCnt;

    /**
     * @var integer 主机未安装agent数量
     */
    public $HostUnInstallCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ContainerTotalCnt 容器总数
     * @param integer $ContainerRunningCnt 正在运行容器数量
     * @param integer $ContainerPauseCnt 暂停运行容器数量
     * @param integer $ContainerStopped 停止运行容器数量
     * @param integer $ImageCnt 本地镜像数量
     * @param integer $HostCnt 主机节点数量
     * @param integer $HostRunningCnt 主机正在运行节点数量
     * @param integer $HostOfflineCnt 主机离线节点数量
     * @param integer $ImageRegistryCnt 镜像仓库数量
     * @param integer $ImageTotalCnt 镜像总数
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
        if (array_key_exists("ContainerTotalCnt",$param) and $param["ContainerTotalCnt"] !== null) {
            $this->ContainerTotalCnt = $param["ContainerTotalCnt"];
        }

        if (array_key_exists("ContainerRunningCnt",$param) and $param["ContainerRunningCnt"] !== null) {
            $this->ContainerRunningCnt = $param["ContainerRunningCnt"];
        }

        if (array_key_exists("ContainerPauseCnt",$param) and $param["ContainerPauseCnt"] !== null) {
            $this->ContainerPauseCnt = $param["ContainerPauseCnt"];
        }

        if (array_key_exists("ContainerStopped",$param) and $param["ContainerStopped"] !== null) {
            $this->ContainerStopped = $param["ContainerStopped"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("HostRunningCnt",$param) and $param["HostRunningCnt"] !== null) {
            $this->HostRunningCnt = $param["HostRunningCnt"];
        }

        if (array_key_exists("HostOfflineCnt",$param) and $param["HostOfflineCnt"] !== null) {
            $this->HostOfflineCnt = $param["HostOfflineCnt"];
        }

        if (array_key_exists("ImageRegistryCnt",$param) and $param["ImageRegistryCnt"] !== null) {
            $this->ImageRegistryCnt = $param["ImageRegistryCnt"];
        }

        if (array_key_exists("ImageTotalCnt",$param) and $param["ImageTotalCnt"] !== null) {
            $this->ImageTotalCnt = $param["ImageTotalCnt"];
        }

        if (array_key_exists("HostUnInstallCnt",$param) and $param["HostUnInstallCnt"] !== null) {
            $this->HostUnInstallCnt = $param["HostUnInstallCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
