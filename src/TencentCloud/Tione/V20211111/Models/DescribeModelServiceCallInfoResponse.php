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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelServiceCallInfo返回参数结构体
 *
 * @method ServiceCallInfo getServiceCallInfo() 获取服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCallInfo(ServiceCallInfo $ServiceCallInfo) 设置服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method InferGatewayCallInfo getInferGatewayCallInfo() 获取升级网关调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInferGatewayCallInfo(InferGatewayCallInfo $InferGatewayCallInfo) 设置升级网关调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DefaultNginxGatewayCallInfo getDefaultNginxGatewayCallInfo() 获取默认nginx网关的调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultNginxGatewayCallInfo(DefaultNginxGatewayCallInfo $DefaultNginxGatewayCallInfo) 设置默认nginx网关的调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method TJCallInfo getTJCallInfo() 获取太极服务的调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTJCallInfo(TJCallInfo $TJCallInfo) 设置太极服务的调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntranetCallInfo getIntranetCallInfo() 获取内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntranetCallInfo(IntranetCallInfo $IntranetCallInfo) 设置内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceCallInfoV2 getServiceCallInfoV2() 获取基于新网关的服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCallInfoV2(ServiceCallInfoV2 $ServiceCallInfoV2) 设置基于新网关的服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModelServiceCallInfoResponse extends AbstractModel
{
    /**
     * @var ServiceCallInfo 服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCallInfo;

    /**
     * @var InferGatewayCallInfo 升级网关调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InferGatewayCallInfo;

    /**
     * @var DefaultNginxGatewayCallInfo 默认nginx网关的调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultNginxGatewayCallInfo;

    /**
     * @var TJCallInfo 太极服务的调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TJCallInfo;

    /**
     * @var IntranetCallInfo 内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntranetCallInfo;

    /**
     * @var ServiceCallInfoV2 基于新网关的服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCallInfoV2;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ServiceCallInfo $ServiceCallInfo 服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param InferGatewayCallInfo $InferGatewayCallInfo 升级网关调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DefaultNginxGatewayCallInfo $DefaultNginxGatewayCallInfo 默认nginx网关的调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param TJCallInfo $TJCallInfo 太极服务的调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntranetCallInfo $IntranetCallInfo 内网调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceCallInfoV2 $ServiceCallInfoV2 基于新网关的服务调用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ServiceCallInfo",$param) and $param["ServiceCallInfo"] !== null) {
            $this->ServiceCallInfo = new ServiceCallInfo();
            $this->ServiceCallInfo->deserialize($param["ServiceCallInfo"]);
        }

        if (array_key_exists("InferGatewayCallInfo",$param) and $param["InferGatewayCallInfo"] !== null) {
            $this->InferGatewayCallInfo = new InferGatewayCallInfo();
            $this->InferGatewayCallInfo->deserialize($param["InferGatewayCallInfo"]);
        }

        if (array_key_exists("DefaultNginxGatewayCallInfo",$param) and $param["DefaultNginxGatewayCallInfo"] !== null) {
            $this->DefaultNginxGatewayCallInfo = new DefaultNginxGatewayCallInfo();
            $this->DefaultNginxGatewayCallInfo->deserialize($param["DefaultNginxGatewayCallInfo"]);
        }

        if (array_key_exists("TJCallInfo",$param) and $param["TJCallInfo"] !== null) {
            $this->TJCallInfo = new TJCallInfo();
            $this->TJCallInfo->deserialize($param["TJCallInfo"]);
        }

        if (array_key_exists("IntranetCallInfo",$param) and $param["IntranetCallInfo"] !== null) {
            $this->IntranetCallInfo = new IntranetCallInfo();
            $this->IntranetCallInfo->deserialize($param["IntranetCallInfo"]);
        }

        if (array_key_exists("ServiceCallInfoV2",$param) and $param["ServiceCallInfoV2"] !== null) {
            $this->ServiceCallInfoV2 = new ServiceCallInfoV2();
            $this->ServiceCallInfoV2->deserialize($param["ServiceCallInfoV2"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
