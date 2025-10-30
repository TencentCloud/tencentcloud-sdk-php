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
 * DescribeComplianceAssetDetailInfo请求参数结构体
 *
 * @method integer getCustomerAssetId() 获取客户资产ID。
 * @method void setCustomerAssetId(integer $CustomerAssetId) 设置客户资产ID。
 * @method string getAssetType() 获取资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
 * @method void setAssetType(string $AssetType) 设置资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
 */
class DescribeComplianceAssetDetailInfoRequest extends AbstractModel
{
    /**
     * @var integer 客户资产ID。
     */
    public $CustomerAssetId;

    /**
     * @var string 资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
     */
    public $AssetType;

    /**
     * @param integer $CustomerAssetId 客户资产ID。
     * @param string $AssetType 资产类型 <li>ASSET_CONTAINER Docker容器</li> <li>ASSET_IMAGE Docker镜像</li> <li>ASSET_HOST Docker主机</li> <li>ASSET_K8S Kubernetes</li> <li>ASSET_CONTAINERD Containerd主机</li> <li>ASSET_CONTAINERD_CONTAINER Containerd容器</li>
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
        if (array_key_exists("CustomerAssetId",$param) and $param["CustomerAssetId"] !== null) {
            $this->CustomerAssetId = $param["CustomerAssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
