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
 * 自建k8s-工作负载信息
 *
 * @method string getKind() 获取工作负载的类型，支持的取值如下：
- deployment：无状态应用部署控制器。可管理无状态应用的多副本 Pod；支持滚动更新和回滚，实现无缝发布；通过 ReplicaSet 确保指定数量的 Pod 副本持续运行。适合 Web 服务、API 服务、微服务等不需要持久化存储或唯一标识的应用。

- statefulset：用于管理有状态应用的控制器。可以为每个 Pod 提供稳定的、唯一的标识（有序的主机名和网络标识）；能提供稳定的持久化存储（PVC 随 Pod 的迁移而保留）；Pod 的创建、扩展、删除和更新都遵循确定的顺序。适合数据库（MySQL、MongoDB）、消息队列（Kafka、RabbitMQ）、集群应用等需要稳定网络标识和持久化存储的应用。

- daemonset：确保所有（或特定）节点上都运行一个 Pod 副本的控制器。会在每个符合条件的 Node 上自动部署并运行一个 Pod；当新节点加入集群时，会自动在新节点上创建 Pod；适合运行节点级别的后台任务或服务，例如日志收集（Fluentd、Filebeat）、节点监控（Node Exporter）、网络插件（Calico、Weave Net）等场景。

- job：用于运行一次性任务的控制器。可创建一个或多个 Pod 来执行任务，直到成功完成；当任务完成后，Pod 不会重启（除非配置了重启策略）；可以指定任务的并行度和重试次数。适合数据处理、批量任务、数据库迁移、离线计算等一次性执行完成后就退出的任务。

- cronjob：基于时间调度的 Job 控制器。类似于 Linux 的 cron，按照预定的时间表周期性地创建并运行 Job。每个调度周期都会创建一个新的 Job 来执行任务。适合定期备份、发送报告、数据清理、定时同步等需要周期性执行的任务。
 * @method void setKind(string $Kind) 设置工作负载的类型，支持的取值如下：
- deployment：无状态应用部署控制器。可管理无状态应用的多副本 Pod；支持滚动更新和回滚，实现无缝发布；通过 ReplicaSet 确保指定数量的 Pod 副本持续运行。适合 Web 服务、API 服务、微服务等不需要持久化存储或唯一标识的应用。

- statefulset：用于管理有状态应用的控制器。可以为每个 Pod 提供稳定的、唯一的标识（有序的主机名和网络标识）；能提供稳定的持久化存储（PVC 随 Pod 的迁移而保留）；Pod 的创建、扩展、删除和更新都遵循确定的顺序。适合数据库（MySQL、MongoDB）、消息队列（Kafka、RabbitMQ）、集群应用等需要稳定网络标识和持久化存储的应用。

- daemonset：确保所有（或特定）节点上都运行一个 Pod 副本的控制器。会在每个符合条件的 Node 上自动部署并运行一个 Pod；当新节点加入集群时，会自动在新节点上创建 Pod；适合运行节点级别的后台任务或服务，例如日志收集（Fluentd、Filebeat）、节点监控（Node Exporter）、网络插件（Calico、Weave Net）等场景。

- job：用于运行一次性任务的控制器。可创建一个或多个 Pod 来执行任务，直到成功完成；当任务完成后，Pod 不会重启（除非配置了重启策略）；可以指定任务的并行度和重试次数。适合数据处理、批量任务、数据库迁移、离线计算等一次性执行完成后就退出的任务。

- cronjob：基于时间调度的 Job 控制器。类似于 Linux 的 cron，按照预定的时间表周期性地创建并运行 Job。每个调度周期都会创建一个新的 Job 来执行任务。适合定期备份、发送报告、数据清理、定时同步等需要周期性执行的任务。
 * @method string getName() 获取工作负载的名称
 * @method void setName(string $Name) 设置工作负载的名称
 * @method string getContainer() 获取容器名
 * @method void setContainer(string $Container) 设置容器名
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 */
class ContainerWorkLoadInfo extends AbstractModel
{
    /**
     * @var string 工作负载的类型，支持的取值如下：
- deployment：无状态应用部署控制器。可管理无状态应用的多副本 Pod；支持滚动更新和回滚，实现无缝发布；通过 ReplicaSet 确保指定数量的 Pod 副本持续运行。适合 Web 服务、API 服务、微服务等不需要持久化存储或唯一标识的应用。

- statefulset：用于管理有状态应用的控制器。可以为每个 Pod 提供稳定的、唯一的标识（有序的主机名和网络标识）；能提供稳定的持久化存储（PVC 随 Pod 的迁移而保留）；Pod 的创建、扩展、删除和更新都遵循确定的顺序。适合数据库（MySQL、MongoDB）、消息队列（Kafka、RabbitMQ）、集群应用等需要稳定网络标识和持久化存储的应用。

- daemonset：确保所有（或特定）节点上都运行一个 Pod 副本的控制器。会在每个符合条件的 Node 上自动部署并运行一个 Pod；当新节点加入集群时，会自动在新节点上创建 Pod；适合运行节点级别的后台任务或服务，例如日志收集（Fluentd、Filebeat）、节点监控（Node Exporter）、网络插件（Calico、Weave Net）等场景。

- job：用于运行一次性任务的控制器。可创建一个或多个 Pod 来执行任务，直到成功完成；当任务完成后，Pod 不会重启（除非配置了重启策略）；可以指定任务的并行度和重试次数。适合数据处理、批量任务、数据库迁移、离线计算等一次性执行完成后就退出的任务。

- cronjob：基于时间调度的 Job 控制器。类似于 Linux 的 cron，按照预定的时间表周期性地创建并运行 Job。每个调度周期都会创建一个新的 Job 来执行任务。适合定期备份、发送报告、数据清理、定时同步等需要周期性执行的任务。
     */
    public $Kind;

    /**
     * @var string 工作负载的名称
     */
    public $Name;

    /**
     * @var string 容器名
     */
    public $Container;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @param string $Kind 工作负载的类型，支持的取值如下：
- deployment：无状态应用部署控制器。可管理无状态应用的多副本 Pod；支持滚动更新和回滚，实现无缝发布；通过 ReplicaSet 确保指定数量的 Pod 副本持续运行。适合 Web 服务、API 服务、微服务等不需要持久化存储或唯一标识的应用。

- statefulset：用于管理有状态应用的控制器。可以为每个 Pod 提供稳定的、唯一的标识（有序的主机名和网络标识）；能提供稳定的持久化存储（PVC 随 Pod 的迁移而保留）；Pod 的创建、扩展、删除和更新都遵循确定的顺序。适合数据库（MySQL、MongoDB）、消息队列（Kafka、RabbitMQ）、集群应用等需要稳定网络标识和持久化存储的应用。

- daemonset：确保所有（或特定）节点上都运行一个 Pod 副本的控制器。会在每个符合条件的 Node 上自动部署并运行一个 Pod；当新节点加入集群时，会自动在新节点上创建 Pod；适合运行节点级别的后台任务或服务，例如日志收集（Fluentd、Filebeat）、节点监控（Node Exporter）、网络插件（Calico、Weave Net）等场景。

- job：用于运行一次性任务的控制器。可创建一个或多个 Pod 来执行任务，直到成功完成；当任务完成后，Pod 不会重启（除非配置了重启策略）；可以指定任务的并行度和重试次数。适合数据处理、批量任务、数据库迁移、离线计算等一次性执行完成后就退出的任务。

- cronjob：基于时间调度的 Job 控制器。类似于 Linux 的 cron，按照预定的时间表周期性地创建并运行 Job。每个调度周期都会创建一个新的 Job 来执行任务。适合定期备份、发送报告、数据清理、定时同步等需要周期性执行的任务。
     * @param string $Name 工作负载的名称
     * @param string $Container 容器名
     * @param string $Namespace 命名空间
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
        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
