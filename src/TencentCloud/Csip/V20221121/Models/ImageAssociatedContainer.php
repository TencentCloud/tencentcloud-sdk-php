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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像关联主机资产
 *
 * @method string getContainerId() 获取<p>容器id</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器id</p>
 * @method string getContainerName() 获取<p>容器名</p>
 * @method void setContainerName(string $ContainerName) 设置<p>容器名</p>
 * @method string getPodName() 获取<p>pod名</p>
 * @method void setPodName(string $PodName) 设置<p>pod名</p>
 * @method string getPodIp() 获取<p>pod ip</p>
 * @method void setPodIp(string $PodIp) 设置<p>pod ip</p>
 * @method string getOwnerAccountName() 获取<p>pod所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>pod所属账号名</p>
 * @method integer getOwnerAppId() 获取<p>pod所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>pod所属账号appid</p>
 * @method string getOwnerUin() 获取<p>pod所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>pod所属账号uin</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群名</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名</p>
 * @method string getClusterStatus() 获取<p>集群状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Exception： 异常</li><li>Unknown： 未知</li><li>Creating： 创建中</li></ul>
 * @method void setClusterStatus(string $ClusterStatus) 设置<p>集群状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Exception： 异常</li><li>Unknown： 未知</li><li>Creating： 创建中</li></ul>
 * @method string getCmd() 获取<p>镜像cmd</p>
 * @method void setCmd(string $Cmd) 设置<p>镜像cmd</p>
 * @method string getPodId() 获取<p>Pod唯一id</p>
 * @method void setPodId(string $PodId) 设置<p>Pod唯一id</p>
 * @method string getClusterCaMd5() 获取<p>集群唯一Id</p>
 * @method void setClusterCaMd5(string $ClusterCaMd5) 设置<p>集群唯一Id</p>
 */
class ImageAssociatedContainer extends AbstractModel
{
    /**
     * @var string <p>容器id</p>
     */
    public $ContainerId;

    /**
     * @var string <p>容器名</p>
     */
    public $ContainerName;

    /**
     * @var string <p>pod名</p>
     */
    public $PodName;

    /**
     * @var string <p>pod ip</p>
     */
    public $PodIp;

    /**
     * @var string <p>pod所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>pod所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>pod所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Exception： 异常</li><li>Unknown： 未知</li><li>Creating： 创建中</li></ul>
     */
    public $ClusterStatus;

    /**
     * @var string <p>镜像cmd</p>
     */
    public $Cmd;

    /**
     * @var string <p>Pod唯一id</p>
     */
    public $PodId;

    /**
     * @var string <p>集群唯一Id</p>
     */
    public $ClusterCaMd5;

    /**
     * @param string $ContainerId <p>容器id</p>
     * @param string $ContainerName <p>容器名</p>
     * @param string $PodName <p>pod名</p>
     * @param string $PodIp <p>pod ip</p>
     * @param string $OwnerAccountName <p>pod所属账号名</p>
     * @param integer $OwnerAppId <p>pod所属账号appid</p>
     * @param string $OwnerUin <p>pod所属账号uin</p>
     * @param string $ClusterId <p>集群id</p>
     * @param string $ClusterName <p>集群名</p>
     * @param string $ClusterStatus <p>集群状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>Exception： 异常</li><li>Unknown： 未知</li><li>Creating： 创建中</li></ul>
     * @param string $Cmd <p>镜像cmd</p>
     * @param string $PodId <p>Pod唯一id</p>
     * @param string $ClusterCaMd5 <p>集群唯一Id</p>
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
        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("ClusterCaMd5",$param) and $param["ClusterCaMd5"] !== null) {
            $this->ClusterCaMd5 = $param["ClusterCaMd5"];
        }
    }
}
