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
 * DeleteComplianceAssetPolicySetFromWhitelist请求参数结构体
 *
 * @method integer getAssetItemId() 获取资产ID
 * @method void setAssetItemId(integer $AssetItemId) 设置资产ID
 * @method array getCustomerPolicyItemIdSet() 获取需要忽略指定资产内的检查项ID列表
 * @method void setCustomerPolicyItemIdSet(array $CustomerPolicyItemIdSet) 设置需要忽略指定资产内的检查项ID列表
 * @method string getAssetType() 获取扫描资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
 * @method void setAssetType(string $AssetType) 设置扫描资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
 */
class DeleteComplianceAssetPolicySetFromWhitelistRequest extends AbstractModel
{
    /**
     * @var integer 资产ID
     */
    public $AssetItemId;

    /**
     * @var array 需要忽略指定资产内的检查项ID列表
     */
    public $CustomerPolicyItemIdSet;

    /**
     * @var string 扫描资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
     */
    public $AssetType;

    /**
     * @param integer $AssetItemId 资产ID
     * @param array $CustomerPolicyItemIdSet 需要忽略指定资产内的检查项ID列表
     * @param string $AssetType 扫描资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
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
        if (array_key_exists("AssetItemId",$param) and $param["AssetItemId"] !== null) {
            $this->AssetItemId = $param["AssetItemId"];
        }

        if (array_key_exists("CustomerPolicyItemIdSet",$param) and $param["CustomerPolicyItemIdSet"] !== null) {
            $this->CustomerPolicyItemIdSet = $param["CustomerPolicyItemIdSet"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
