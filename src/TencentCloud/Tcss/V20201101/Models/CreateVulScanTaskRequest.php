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
 * CreateVulScanTask请求参数结构体
 *
 * @method string getLocalImageScanType() 获取<p>本地镜像扫描范围类型</p><p>枚举值：</p><ul><li>ALL： 全部本地镜像</li><li>NOT_SCAN： 全部已授权未扫描本地镜像</li><li>IMAGEIDS： 自选本地镜像ID</li><li>CLUSTER： 集群筛选</li></ul>
 * @method void setLocalImageScanType(string $LocalImageScanType) 设置<p>本地镜像扫描范围类型</p><p>枚举值：</p><ul><li>ALL： 全部本地镜像</li><li>NOT_SCAN： 全部已授权未扫描本地镜像</li><li>IMAGEIDS： 自选本地镜像ID</li><li>CLUSTER： 集群筛选</li></ul>
 * @method array getLocalImageIDs() 获取<p>根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。</p>
 * @method void setLocalImageIDs(array $LocalImageIDs) 设置<p>根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。</p>
 * @method string getRegistryImageScanType() 获取<p>仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID</p>
 * @method void setRegistryImageScanType(string $RegistryImageScanType) 设置<p>仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID</p>
 * @method array getRegistryImageIDs() 获取<p>根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。</p>
 * @method void setRegistryImageIDs(array $RegistryImageIDs) 设置<p>根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。</p>
 * @method integer getLocalTaskID() 获取<p>本地镜像重新漏洞扫描时的任务ID</p>
 * @method void setLocalTaskID(integer $LocalTaskID) 设置<p>本地镜像重新漏洞扫描时的任务ID</p>
 * @method integer getRegistryTaskID() 获取<p>仓库镜像重新漏洞扫描时的任务ID</p>
 * @method void setRegistryTaskID(integer $RegistryTaskID) 设置<p>仓库镜像重新漏洞扫描时的任务ID</p>
 * @method boolean getLocalImageContainerRunning() 获取<p>本地镜像容器运行中</p>
 * @method void setLocalImageContainerRunning(boolean $LocalImageContainerRunning) 设置<p>本地镜像容器运行中</p>
 * @method boolean getRegistryImageContainerRunning() 获取<p>仓库镜像容器运行中</p>
 * @method void setRegistryImageContainerRunning(boolean $RegistryImageContainerRunning) 设置<p>仓库镜像容器运行中</p>
 * @method boolean getIsLatest() 获取<p>仓库镜像是否是最新</p>
 * @method void setIsLatest(boolean $IsLatest) 设置<p>仓库镜像是否是最新</p>
 * @method array getExcludeLocalImageIDs() 获取<p>要剔除的本地镜像id</p>
 * @method void setExcludeLocalImageIDs(array $ExcludeLocalImageIDs) 设置<p>要剔除的本地镜像id</p>
 * @method array getExcludeRegistryImageIDs() 获取<p>要剔除的仓库镜像id</p>
 * @method void setExcludeRegistryImageIDs(array $ExcludeRegistryImageIDs) 设置<p>要剔除的仓库镜像id</p>
 * @method array getLocalClusterIDs() 获取<p>集群id</p>
 * @method void setLocalClusterIDs(array $LocalClusterIDs) 设置<p>集群id</p>
 */
class CreateVulScanTaskRequest extends AbstractModel
{
    /**
     * @var string <p>本地镜像扫描范围类型</p><p>枚举值：</p><ul><li>ALL： 全部本地镜像</li><li>NOT_SCAN： 全部已授权未扫描本地镜像</li><li>IMAGEIDS： 自选本地镜像ID</li><li>CLUSTER： 集群筛选</li></ul>
     */
    public $LocalImageScanType;

    /**
     * @var array <p>根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。</p>
     */
    public $LocalImageIDs;

    /**
     * @var string <p>仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID</p>
     */
    public $RegistryImageScanType;

    /**
     * @var array <p>根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。</p>
     */
    public $RegistryImageIDs;

    /**
     * @var integer <p>本地镜像重新漏洞扫描时的任务ID</p>
     */
    public $LocalTaskID;

    /**
     * @var integer <p>仓库镜像重新漏洞扫描时的任务ID</p>
     */
    public $RegistryTaskID;

    /**
     * @var boolean <p>本地镜像容器运行中</p>
     */
    public $LocalImageContainerRunning;

    /**
     * @var boolean <p>仓库镜像容器运行中</p>
     */
    public $RegistryImageContainerRunning;

    /**
     * @var boolean <p>仓库镜像是否是最新</p>
     */
    public $IsLatest;

    /**
     * @var array <p>要剔除的本地镜像id</p>
     */
    public $ExcludeLocalImageIDs;

    /**
     * @var array <p>要剔除的仓库镜像id</p>
     */
    public $ExcludeRegistryImageIDs;

    /**
     * @var array <p>集群id</p>
     */
    public $LocalClusterIDs;

    /**
     * @param string $LocalImageScanType <p>本地镜像扫描范围类型</p><p>枚举值：</p><ul><li>ALL： 全部本地镜像</li><li>NOT_SCAN： 全部已授权未扫描本地镜像</li><li>IMAGEIDS： 自选本地镜像ID</li><li>CLUSTER： 集群筛选</li></ul>
     * @param array $LocalImageIDs <p>根据已授权的本地镜像IDs扫描，优先权高于根据满足条件的已授权的本地镜像。</p>
     * @param string $RegistryImageScanType <p>仓库镜像扫描范围类型。ALL:全部仓库镜像，NOT_SCAN：全部已授权未扫描仓库镜像，IMAGEIDS:自选仓库镜像ID</p>
     * @param array $RegistryImageIDs <p>根据已授权的仓库镜像IDs扫描，优先权高于根据满足条件的已授权的仓库镜像。</p>
     * @param integer $LocalTaskID <p>本地镜像重新漏洞扫描时的任务ID</p>
     * @param integer $RegistryTaskID <p>仓库镜像重新漏洞扫描时的任务ID</p>
     * @param boolean $LocalImageContainerRunning <p>本地镜像容器运行中</p>
     * @param boolean $RegistryImageContainerRunning <p>仓库镜像容器运行中</p>
     * @param boolean $IsLatest <p>仓库镜像是否是最新</p>
     * @param array $ExcludeLocalImageIDs <p>要剔除的本地镜像id</p>
     * @param array $ExcludeRegistryImageIDs <p>要剔除的仓库镜像id</p>
     * @param array $LocalClusterIDs <p>集群id</p>
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
        if (array_key_exists("LocalImageScanType",$param) and $param["LocalImageScanType"] !== null) {
            $this->LocalImageScanType = $param["LocalImageScanType"];
        }

        if (array_key_exists("LocalImageIDs",$param) and $param["LocalImageIDs"] !== null) {
            $this->LocalImageIDs = $param["LocalImageIDs"];
        }

        if (array_key_exists("RegistryImageScanType",$param) and $param["RegistryImageScanType"] !== null) {
            $this->RegistryImageScanType = $param["RegistryImageScanType"];
        }

        if (array_key_exists("RegistryImageIDs",$param) and $param["RegistryImageIDs"] !== null) {
            $this->RegistryImageIDs = $param["RegistryImageIDs"];
        }

        if (array_key_exists("LocalTaskID",$param) and $param["LocalTaskID"] !== null) {
            $this->LocalTaskID = $param["LocalTaskID"];
        }

        if (array_key_exists("RegistryTaskID",$param) and $param["RegistryTaskID"] !== null) {
            $this->RegistryTaskID = $param["RegistryTaskID"];
        }

        if (array_key_exists("LocalImageContainerRunning",$param) and $param["LocalImageContainerRunning"] !== null) {
            $this->LocalImageContainerRunning = $param["LocalImageContainerRunning"];
        }

        if (array_key_exists("RegistryImageContainerRunning",$param) and $param["RegistryImageContainerRunning"] !== null) {
            $this->RegistryImageContainerRunning = $param["RegistryImageContainerRunning"];
        }

        if (array_key_exists("IsLatest",$param) and $param["IsLatest"] !== null) {
            $this->IsLatest = $param["IsLatest"];
        }

        if (array_key_exists("ExcludeLocalImageIDs",$param) and $param["ExcludeLocalImageIDs"] !== null) {
            $this->ExcludeLocalImageIDs = $param["ExcludeLocalImageIDs"];
        }

        if (array_key_exists("ExcludeRegistryImageIDs",$param) and $param["ExcludeRegistryImageIDs"] !== null) {
            $this->ExcludeRegistryImageIDs = $param["ExcludeRegistryImageIDs"];
        }

        if (array_key_exists("LocalClusterIDs",$param) and $param["LocalClusterIDs"] !== null) {
            $this->LocalClusterIDs = $param["LocalClusterIDs"];
        }
    }
}
