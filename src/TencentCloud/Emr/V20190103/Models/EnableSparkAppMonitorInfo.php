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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * spark开启app监控 对应的Prometheus
 *
 * @method string getPrometheusInstanceId() 获取<p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrometheusInstanceId(string $PrometheusInstanceId) 设置<p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrafanaInstanceId() 获取<p>grafana实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaInstanceId(string $GrafanaInstanceId) 设置<p>grafana实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableMonitor() 获取<p>开启关闭状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableMonitor(boolean $EnableMonitor) 设置<p>开启关闭状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrafanaURL() 获取<p>grafana访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaURL(string $GrafanaURL) 设置<p>grafana访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EnableSparkAppMonitorInfo extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrometheusInstanceId;

    /**
     * @var string <p>grafana实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaInstanceId;

    /**
     * @var boolean <p>开启关闭状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableMonitor;

    /**
     * @var string <p>grafana访问地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaURL;

    /**
     * @param string $PrometheusInstanceId <p>实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GrafanaInstanceId <p>grafana实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableMonitor <p>开启关闭状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GrafanaURL <p>grafana访问地址</p>
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
        if (array_key_exists("PrometheusInstanceId",$param) and $param["PrometheusInstanceId"] !== null) {
            $this->PrometheusInstanceId = $param["PrometheusInstanceId"];
        }

        if (array_key_exists("GrafanaInstanceId",$param) and $param["GrafanaInstanceId"] !== null) {
            $this->GrafanaInstanceId = $param["GrafanaInstanceId"];
        }

        if (array_key_exists("EnableMonitor",$param) and $param["EnableMonitor"] !== null) {
            $this->EnableMonitor = $param["EnableMonitor"];
        }

        if (array_key_exists("GrafanaURL",$param) and $param["GrafanaURL"] !== null) {
            $this->GrafanaURL = $param["GrafanaURL"];
        }
    }
}
