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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标采集label配置信息
 *
 * @method array getMetadata() 获取元数据。
支持
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(array $Metadata) 设置元数据。
支持
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppointLabel getLabel() 获取元数据Pod Label信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(AppointLabel $Label) 设置元数据Pod Label信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomLabels() 获取自定义label信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomLabels(array $CustomLabels) 设置自定义label信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricConfigLabel extends AbstractModel
{
    /**
     * @var array 元数据。
支持
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var AppointLabel 元数据Pod Label信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var array 自定义label信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomLabels;

    /**
     * @param array $Metadata 元数据。
支持
- `namespace`
- `pod_name`
- `pod_ip`
- `pod_uid`
- `container_name`
- `container_id`
- `image_name`
- `cluster_id`
- `node_id`
- `node_ip`
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppointLabel $Label 元数据Pod Label信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomLabels 自定义label信息。
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
        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = new AppointLabel();
            $this->Label->deserialize($param["Label"]);
        }

        if (array_key_exists("CustomLabels",$param) and $param["CustomLabels"] !== null) {
            $this->CustomLabels = [];
            foreach ($param["CustomLabels"] as $key => $value){
                $obj = new CustomLabel();
                $obj->deserialize($value);
                array_push($this->CustomLabels, $obj);
            }
        }
    }
}
