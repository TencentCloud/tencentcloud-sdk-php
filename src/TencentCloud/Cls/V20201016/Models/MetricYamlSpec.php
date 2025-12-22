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
 * 指标采集yaml格式配置
 *
 * @method string getType() 获取yaml监控类型。
支持：
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor `,`ServiceMonitor `,`ScrapeConfig ` 属于prometheus-operator
`ScrapeConfig-prometheus` 属于prometheus
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置yaml监控类型。
支持：
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor `,`ServiceMonitor `,`ScrapeConfig ` 属于prometheus-operator
`ScrapeConfig-prometheus` 属于prometheus
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpec() 获取配置yaml格式。
例如：Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(string $Spec) 设置配置yaml格式。
例如：Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricYamlSpec extends AbstractModel
{
    /**
     * @var string yaml监控类型。
支持：
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor `,`ServiceMonitor `,`ScrapeConfig ` 属于prometheus-operator
`ScrapeConfig-prometheus` 属于prometheus
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 配置yaml格式。
例如：Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @param string $Type yaml监控类型。
支持：
- PodMonitor
- ServiceMonitor
- ScrapeConfig
- ScrapeConfig-prometheus

`PodMonitor `,`ServiceMonitor `,`ScrapeConfig ` 属于prometheus-operator
`ScrapeConfig-prometheus` 属于prometheus
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Spec 配置yaml格式。
例如：Type: ServiceMonitor


```
apiVersion: monitoring.coreos.com/v1
kind: ServiceMonitor
metadata:
  name: test
  namespace: test
  labels:
    k8s-app1: test
    k8s-app2: test
spec:
  endpoints:
    - interval: 15s
      port: 8080-8080-tcp
      path: /metrics
      relabelings:
        - action: replace
          sourceLabels:
            - __meta_kubernetes_pod_label_app
          targetLabel: application
  namespaceSelector:
    matchNames:
      - test
  selector:
    matchLabels:
      app: test
```
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

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }
    }
}
