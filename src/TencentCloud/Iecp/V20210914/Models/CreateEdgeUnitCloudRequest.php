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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgeUnitCloud请求参数结构体
 *
 * @method string getName() 获取集群名称，长度小于32
 * @method void setName(string $Name) 设置集群名称，长度小于32
 * @method string getK8sVersion() 获取k8s版本，仅支持1.16.7 和 1.18.2
 * @method void setK8sVersion(string $K8sVersion) 设置k8s版本，仅支持1.16.7 和 1.18.2
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getDescription() 获取集群描述
 * @method void setDescription(string $Description) 设置集群描述
 * @method string getPodCIDR() 获取集群pod cidr， 默认  10.1.0.0/16
 * @method void setPodCIDR(string $PodCIDR) 设置集群pod cidr， 默认  10.1.0.0/16
 * @method string getServiceCIDR() 获取集群service cidr, 默认 10.2.0.0/16
 * @method void setServiceCIDR(string $ServiceCIDR) 设置集群service cidr, 默认 10.2.0.0/16
 * @method boolean getOpenCloudMonitor() 获取是否开启监控。目前内存中权限开启联系产品开通白名单
 * @method void setOpenCloudMonitor(boolean $OpenCloudMonitor) 设置是否开启监控。目前内存中权限开启联系产品开通白名单
 */
class CreateEdgeUnitCloudRequest extends AbstractModel
{
    /**
     * @var string 集群名称，长度小于32
     */
    public $Name;

    /**
     * @var string k8s版本，仅支持1.16.7 和 1.18.2
     */
    public $K8sVersion;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 集群描述
     */
    public $Description;

    /**
     * @var string 集群pod cidr， 默认  10.1.0.0/16
     */
    public $PodCIDR;

    /**
     * @var string 集群service cidr, 默认 10.2.0.0/16
     */
    public $ServiceCIDR;

    /**
     * @var boolean 是否开启监控。目前内存中权限开启联系产品开通白名单
     */
    public $OpenCloudMonitor;

    /**
     * @param string $Name 集群名称，长度小于32
     * @param string $K8sVersion k8s版本，仅支持1.16.7 和 1.18.2
     * @param string $VpcId 私有网络ID
     * @param string $Description 集群描述
     * @param string $PodCIDR 集群pod cidr， 默认  10.1.0.0/16
     * @param string $ServiceCIDR 集群service cidr, 默认 10.2.0.0/16
     * @param boolean $OpenCloudMonitor 是否开启监控。目前内存中权限开启联系产品开通白名单
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }

        if (array_key_exists("OpenCloudMonitor",$param) and $param["OpenCloudMonitor"] !== null) {
            $this->OpenCloudMonitor = $param["OpenCloudMonitor"];
        }
    }
}
