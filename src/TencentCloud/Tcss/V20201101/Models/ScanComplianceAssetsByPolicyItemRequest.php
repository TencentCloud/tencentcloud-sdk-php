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
 * ScanComplianceAssetsByPolicyItem请求参数结构体
 *
 * @method integer getCustomerPolicyItemId() 获取指定的检测项的ID
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) 设置指定的检测项的ID
 * @method array getCustomerAssetIdSet() 获取要重新扫描的客户资产项ID的列表。
 * @method void setCustomerAssetIdSet(array $CustomerAssetIdSet) 设置要重新扫描的客户资产项ID的列表。
 * @method string getAssetType() 获取扫描资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
 * @method void setAssetType(string $AssetType) 设置扫描资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
 */
class ScanComplianceAssetsByPolicyItemRequest extends AbstractModel
{
    /**
     * @var integer 指定的检测项的ID
     */
    public $CustomerPolicyItemId;

    /**
     * @var array 要重新扫描的客户资产项ID的列表。
     */
    public $CustomerAssetIdSet;

    /**
     * @var string 扫描资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
     */
    public $AssetType;

    /**
     * @param integer $CustomerPolicyItemId 指定的检测项的ID
     * @param array $CustomerAssetIdSet 要重新扫描的客户资产项ID的列表。
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
        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("CustomerAssetIdSet",$param) and $param["CustomerAssetIdSet"] !== null) {
            $this->CustomerAssetIdSet = $param["CustomerAssetIdSet"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
