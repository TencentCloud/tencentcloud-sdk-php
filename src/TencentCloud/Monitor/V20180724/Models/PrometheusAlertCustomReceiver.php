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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus告警自定义通知模板
 *
 * @method string getType() 获取自定义通知类型
alertmanager -- vpc内自建alertmanager
webhook -- vpc内webhook地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置自定义通知类型
alertmanager -- vpc内自建alertmanager
webhook -- vpc内webhook地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取alertmanager/webhook地址。（prometheus实例同vpc内ip）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置alertmanager/webhook地址。（prometheus实例同vpc内ip）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowedTimeRanges() 获取允许发送告警的时间范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowedTimeRanges(array $AllowedTimeRanges) 设置允许发送告警的时间范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取alertmanager所在的内网集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置alertmanager所在的内网集群ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取alertmanager所在的内网集群类型(tke/eks/tdcc)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置alertmanager所在的内网集群类型(tke/eks/tdcc)
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertCustomReceiver extends AbstractModel
{
    /**
     * @var string 自定义通知类型
alertmanager -- vpc内自建alertmanager
webhook -- vpc内webhook地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string alertmanager/webhook地址。（prometheus实例同vpc内ip）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var array 允许发送告警的时间范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowedTimeRanges;

    /**
     * @var string alertmanager所在的内网集群ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string alertmanager所在的内网集群类型(tke/eks/tdcc)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @param string $Type 自定义通知类型
alertmanager -- vpc内自建alertmanager
webhook -- vpc内webhook地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url alertmanager/webhook地址。（prometheus实例同vpc内ip）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowedTimeRanges 允许发送告警的时间范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId alertmanager所在的内网集群ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType alertmanager所在的内网集群类型(tke/eks/tdcc)
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AllowedTimeRanges",$param) and $param["AllowedTimeRanges"] !== null) {
            $this->AllowedTimeRanges = [];
            foreach ($param["AllowedTimeRanges"] as $key => $value){
                $obj = new PrometheusAlertAllowTimeRange();
                $obj->deserialize($value);
                array_push($this->AllowedTimeRanges, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
