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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 泳道入口信息
 *
 * @method string getEntryType() 获取   // type == "polarismesh.cn/gateway/tse-gateway, 则 selector 为 TSEGatewaySelector
   // type == "polarismesh.cn/gateway/spring-cloud-gateway", 则 selector 为 ServiceGatewaySelector
   // type == "polarismesh.cn/service, 则 selector 为 ServiceSelector
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntryType(string $EntryType) 设置   // type == "polarismesh.cn/gateway/tse-gateway, 则 selector 为 TSEGatewaySelector
   // type == "polarismesh.cn/gateway/spring-cloud-gateway", 则 selector 为 ServiceGatewaySelector
   // type == "polarismesh.cn/service, 则 selector 为 ServiceSelector
注意：此字段可能返回 null，表示取不到有效值。
 * @method TSEGatewaySelector getTSEGatewaySelector() 获取TSE云原生网关选择器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTSEGatewaySelector(TSEGatewaySelector $TSEGatewaySelector) 设置TSE云原生网关选择器
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceGatewaySelector getServiceGatewaySelector() 获取微服务网关选择器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceGatewaySelector(ServiceGatewaySelector $ServiceGatewaySelector) 设置微服务网关选择器
注意：此字段可能返回 null，表示取不到有效值。
 * @method ServiceSelector getServiceSelector() 获取普通微服务选择器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceSelector(ServiceSelector $ServiceSelector) 设置普通微服务选择器
注意：此字段可能返回 null，表示取不到有效值。
 */
class LaneTrafficEntry extends AbstractModel
{
    /**
     * @var string    // type == "polarismesh.cn/gateway/tse-gateway, 则 selector 为 TSEGatewaySelector
   // type == "polarismesh.cn/gateway/spring-cloud-gateway", 则 selector 为 ServiceGatewaySelector
   // type == "polarismesh.cn/service, 则 selector 为 ServiceSelector
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntryType;

    /**
     * @var TSEGatewaySelector TSE云原生网关选择器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TSEGatewaySelector;

    /**
     * @var ServiceGatewaySelector 微服务网关选择器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceGatewaySelector;

    /**
     * @var ServiceSelector 普通微服务选择器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceSelector;

    /**
     * @param string $EntryType    // type == "polarismesh.cn/gateway/tse-gateway, 则 selector 为 TSEGatewaySelector
   // type == "polarismesh.cn/gateway/spring-cloud-gateway", 则 selector 为 ServiceGatewaySelector
   // type == "polarismesh.cn/service, 则 selector 为 ServiceSelector
注意：此字段可能返回 null，表示取不到有效值。
     * @param TSEGatewaySelector $TSEGatewaySelector TSE云原生网关选择器
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceGatewaySelector $ServiceGatewaySelector 微服务网关选择器
注意：此字段可能返回 null，表示取不到有效值。
     * @param ServiceSelector $ServiceSelector 普通微服务选择器
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EntryType",$param) and $param["EntryType"] !== null) {
            $this->EntryType = $param["EntryType"];
        }

        if (array_key_exists("TSEGatewaySelector",$param) and $param["TSEGatewaySelector"] !== null) {
            $this->TSEGatewaySelector = new TSEGatewaySelector();
            $this->TSEGatewaySelector->deserialize($param["TSEGatewaySelector"]);
        }

        if (array_key_exists("ServiceGatewaySelector",$param) and $param["ServiceGatewaySelector"] !== null) {
            $this->ServiceGatewaySelector = new ServiceGatewaySelector();
            $this->ServiceGatewaySelector->deserialize($param["ServiceGatewaySelector"]);
        }

        if (array_key_exists("ServiceSelector",$param) and $param["ServiceSelector"] !== null) {
            $this->ServiceSelector = new ServiceSelector();
            $this->ServiceSelector->deserialize($param["ServiceSelector"]);
        }
    }
}
