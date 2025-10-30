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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindDeviceResource请求参数结构体
 *
 * @method array getDeviceIdSet() 获取资产ID集合
 * @method void setDeviceIdSet(array $DeviceIdSet) 设置资产ID集合
 * @method string getResourceId() 获取堡垒机服务ID
 * @method void setResourceId(string $ResourceId) 设置堡垒机服务ID
 * @method string getDomainId() 获取网络域ID
 * @method void setDomainId(string $DomainId) 设置网络域ID
 * @method integer getManageDimension() 获取K8S集群托管账号维度。1-集群，2-命名空间，3-工作负载
 * @method void setManageDimension(integer $ManageDimension) 设置K8S集群托管账号维度。1-集群，2-命名空间，3-工作负载
 * @method integer getManageAccountId() 获取K8S集群托管账号id
 * @method void setManageAccountId(integer $ManageAccountId) 设置K8S集群托管账号id
 * @method string getManageAccount() 获取K8S集群托管账号名称
 * @method void setManageAccount(string $ManageAccount) 设置K8S集群托管账号名称
 * @method string getManageKubeconfig() 获取K8S集群托管账号凭证
 * @method void setManageKubeconfig(string $ManageKubeconfig) 设置K8S集群托管账号凭证
 * @method string getNamespace() 获取K8S集群托管的namespace
 * @method void setNamespace(string $Namespace) 设置K8S集群托管的namespace
 * @method string getWorkload() 获取K8S集群托管的workload
 * @method void setWorkload(string $Workload) 设置K8S集群托管的workload
 */
class BindDeviceResourceRequest extends AbstractModel
{
    /**
     * @var array 资产ID集合
     */
    public $DeviceIdSet;

    /**
     * @var string 堡垒机服务ID
     */
    public $ResourceId;

    /**
     * @var string 网络域ID
     */
    public $DomainId;

    /**
     * @var integer K8S集群托管账号维度。1-集群，2-命名空间，3-工作负载
     */
    public $ManageDimension;

    /**
     * @var integer K8S集群托管账号id
     */
    public $ManageAccountId;

    /**
     * @var string K8S集群托管账号名称
     */
    public $ManageAccount;

    /**
     * @var string K8S集群托管账号凭证
     */
    public $ManageKubeconfig;

    /**
     * @var string K8S集群托管的namespace
     */
    public $Namespace;

    /**
     * @var string K8S集群托管的workload
     */
    public $Workload;

    /**
     * @param array $DeviceIdSet 资产ID集合
     * @param string $ResourceId 堡垒机服务ID
     * @param string $DomainId 网络域ID
     * @param integer $ManageDimension K8S集群托管账号维度。1-集群，2-命名空间，3-工作负载
     * @param integer $ManageAccountId K8S集群托管账号id
     * @param string $ManageAccount K8S集群托管账号名称
     * @param string $ManageKubeconfig K8S集群托管账号凭证
     * @param string $Namespace K8S集群托管的namespace
     * @param string $Workload K8S集群托管的workload
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
        if (array_key_exists("DeviceIdSet",$param) and $param["DeviceIdSet"] !== null) {
            $this->DeviceIdSet = $param["DeviceIdSet"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("ManageDimension",$param) and $param["ManageDimension"] !== null) {
            $this->ManageDimension = $param["ManageDimension"];
        }

        if (array_key_exists("ManageAccountId",$param) and $param["ManageAccountId"] !== null) {
            $this->ManageAccountId = $param["ManageAccountId"];
        }

        if (array_key_exists("ManageAccount",$param) and $param["ManageAccount"] !== null) {
            $this->ManageAccount = $param["ManageAccount"];
        }

        if (array_key_exists("ManageKubeconfig",$param) and $param["ManageKubeconfig"] !== null) {
            $this->ManageKubeconfig = $param["ManageKubeconfig"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Workload",$param) and $param["Workload"] !== null) {
            $this->Workload = $param["Workload"];
        }
    }
}
