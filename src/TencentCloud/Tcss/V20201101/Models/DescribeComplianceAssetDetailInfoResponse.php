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
 * DescribeComplianceAssetDetailInfo返回参数结构体
 *
 * @method ComplianceAssetDetailInfo getAssetDetailInfo() 获取某资产的详情。
 * @method void setAssetDetailInfo(ComplianceAssetDetailInfo $AssetDetailInfo) 设置某资产的详情。
 * @method ComplianceContainerDetailInfo getContainerDetailInfo() 获取当资产为容器时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerDetailInfo(ComplianceContainerDetailInfo $ContainerDetailInfo) 设置当资产为容器时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComplianceImageDetailInfo getImageDetailInfo() 获取当资产为镜像时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageDetailInfo(ComplianceImageDetailInfo $ImageDetailInfo) 设置当资产为镜像时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComplianceHostDetailInfo getHostDetailInfo() 获取当资产为主机时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostDetailInfo(ComplianceHostDetailInfo $HostDetailInfo) 设置当资产为主机时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ComplianceK8SDetailInfo getK8SDetailInfo() 获取当资产为K8S时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setK8SDetailInfo(ComplianceK8SDetailInfo $K8SDetailInfo) 设置当资产为K8S时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeComplianceAssetDetailInfoResponse extends AbstractModel
{
    /**
     * @var ComplianceAssetDetailInfo 某资产的详情。
     */
    public $AssetDetailInfo;

    /**
     * @var ComplianceContainerDetailInfo 当资产为容器时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerDetailInfo;

    /**
     * @var ComplianceImageDetailInfo 当资产为镜像时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageDetailInfo;

    /**
     * @var ComplianceHostDetailInfo 当资产为主机时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostDetailInfo;

    /**
     * @var ComplianceK8SDetailInfo 当资产为K8S时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $K8SDetailInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ComplianceAssetDetailInfo $AssetDetailInfo 某资产的详情。
     * @param ComplianceContainerDetailInfo $ContainerDetailInfo 当资产为容器时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComplianceImageDetailInfo $ImageDetailInfo 当资产为镜像时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComplianceHostDetailInfo $HostDetailInfo 当资产为主机时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ComplianceK8SDetailInfo $K8SDetailInfo 当资产为K8S时，返回此字段。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AssetDetailInfo",$param) and $param["AssetDetailInfo"] !== null) {
            $this->AssetDetailInfo = new ComplianceAssetDetailInfo();
            $this->AssetDetailInfo->deserialize($param["AssetDetailInfo"]);
        }

        if (array_key_exists("ContainerDetailInfo",$param) and $param["ContainerDetailInfo"] !== null) {
            $this->ContainerDetailInfo = new ComplianceContainerDetailInfo();
            $this->ContainerDetailInfo->deserialize($param["ContainerDetailInfo"]);
        }

        if (array_key_exists("ImageDetailInfo",$param) and $param["ImageDetailInfo"] !== null) {
            $this->ImageDetailInfo = new ComplianceImageDetailInfo();
            $this->ImageDetailInfo->deserialize($param["ImageDetailInfo"]);
        }

        if (array_key_exists("HostDetailInfo",$param) and $param["HostDetailInfo"] !== null) {
            $this->HostDetailInfo = new ComplianceHostDetailInfo();
            $this->HostDetailInfo->deserialize($param["HostDetailInfo"]);
        }

        if (array_key_exists("K8SDetailInfo",$param) and $param["K8SDetailInfo"] !== null) {
            $this->K8SDetailInfo = new ComplianceK8SDetailInfo();
            $this->K8SDetailInfo->deserialize($param["K8SDetailInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
