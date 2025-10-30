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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskFromMultiAction请求参数结构体
 *
 * @method array getTaskInstances() 获取参与演练的实例ID
CVM ins-xxx
MySQL cdb-xxx
CLB lb-xxx
Redis crs-xxx
NAT网关 nat-xxx
Redis crs-xxx
专线-独享专用通道 dcx-xxx
标准集群普通节点 {"ClusterId":"cls-xxx","InstanceId":"ins-xxx","LanIP":"1.1.1.1"}
标准集群Pod {"ClusterId":"cls-xxx","PodName":"podname","NodeName":"1.1.1.1","NameSpace":"ns","Workload":"workload"}
TDSQL-MySQL(InnoDB) tdsqlshard-xxx
TDSQL-C cynosdbmysql-xxx
VPC子网 subnet-xxxx
CKafka ckafka-xxx
MariaDB tdsql-xxxx
PostgreSQL postgres-xxx
云原生网关 gateway-xxx
标准集群超级节点 {"ClusterId":"cls-xxx","InstanceId":"eklet-xxx","LanIP":"1.1.1.1,"NodePoolId":"np-xxx"}
Serverless集群超级节点 {"ClusterId":"cls-xxxx","InstanceId":"eklet-xxxx","LanIP":"1.1.1.1"}
Elasticsearch集群 es-xxxx
RabbitMQ amqp-xxxx
 * @method void setTaskInstances(array $TaskInstances) 设置参与演练的实例ID
CVM ins-xxx
MySQL cdb-xxx
CLB lb-xxx
Redis crs-xxx
NAT网关 nat-xxx
Redis crs-xxx
专线-独享专用通道 dcx-xxx
标准集群普通节点 {"ClusterId":"cls-xxx","InstanceId":"ins-xxx","LanIP":"1.1.1.1"}
标准集群Pod {"ClusterId":"cls-xxx","PodName":"podname","NodeName":"1.1.1.1","NameSpace":"ns","Workload":"workload"}
TDSQL-MySQL(InnoDB) tdsqlshard-xxx
TDSQL-C cynosdbmysql-xxx
VPC子网 subnet-xxxx
CKafka ckafka-xxx
MariaDB tdsql-xxxx
PostgreSQL postgres-xxx
云原生网关 gateway-xxx
标准集群超级节点 {"ClusterId":"cls-xxx","InstanceId":"eklet-xxx","LanIP":"1.1.1.1,"NodePoolId":"np-xxx"}
Serverless集群超级节点 {"ClusterId":"cls-xxxx","InstanceId":"eklet-xxxx","LanIP":"1.1.1.1"}
Elasticsearch集群 es-xxxx
RabbitMQ amqp-xxxx
 * @method string getTaskTitle() 获取演练名称，不填则默认取动作名称
 * @method void setTaskTitle(string $TaskTitle) 设置演练名称，不填则默认取动作名称
 * @method string getTaskDescription() 获取演练描述，不填则默认取动作描述
 * @method void setTaskDescription(string $TaskDescription) 设置演练描述，不填则默认取动作描述
 * @method integer getTaskPauseDuration() 获取演练自动暂停时间，单位分钟, 不填则默认为60
 * @method void setTaskPauseDuration(integer $TaskPauseDuration) 设置演练自动暂停时间，单位分钟, 不填则默认为60
 * @method array getTaskAction() 获取演练动作组配置
 * @method void setTaskAction(array $TaskAction) 设置演练动作组配置
 */
class CreateTaskFromMultiActionRequest extends AbstractModel
{
    /**
     * @var array 参与演练的实例ID
CVM ins-xxx
MySQL cdb-xxx
CLB lb-xxx
Redis crs-xxx
NAT网关 nat-xxx
Redis crs-xxx
专线-独享专用通道 dcx-xxx
标准集群普通节点 {"ClusterId":"cls-xxx","InstanceId":"ins-xxx","LanIP":"1.1.1.1"}
标准集群Pod {"ClusterId":"cls-xxx","PodName":"podname","NodeName":"1.1.1.1","NameSpace":"ns","Workload":"workload"}
TDSQL-MySQL(InnoDB) tdsqlshard-xxx
TDSQL-C cynosdbmysql-xxx
VPC子网 subnet-xxxx
CKafka ckafka-xxx
MariaDB tdsql-xxxx
PostgreSQL postgres-xxx
云原生网关 gateway-xxx
标准集群超级节点 {"ClusterId":"cls-xxx","InstanceId":"eklet-xxx","LanIP":"1.1.1.1,"NodePoolId":"np-xxx"}
Serverless集群超级节点 {"ClusterId":"cls-xxxx","InstanceId":"eklet-xxxx","LanIP":"1.1.1.1"}
Elasticsearch集群 es-xxxx
RabbitMQ amqp-xxxx
     */
    public $TaskInstances;

    /**
     * @var string 演练名称，不填则默认取动作名称
     */
    public $TaskTitle;

    /**
     * @var string 演练描述，不填则默认取动作描述
     */
    public $TaskDescription;

    /**
     * @var integer 演练自动暂停时间，单位分钟, 不填则默认为60
     */
    public $TaskPauseDuration;

    /**
     * @var array 演练动作组配置
     */
    public $TaskAction;

    /**
     * @param array $TaskInstances 参与演练的实例ID
CVM ins-xxx
MySQL cdb-xxx
CLB lb-xxx
Redis crs-xxx
NAT网关 nat-xxx
Redis crs-xxx
专线-独享专用通道 dcx-xxx
标准集群普通节点 {"ClusterId":"cls-xxx","InstanceId":"ins-xxx","LanIP":"1.1.1.1"}
标准集群Pod {"ClusterId":"cls-xxx","PodName":"podname","NodeName":"1.1.1.1","NameSpace":"ns","Workload":"workload"}
TDSQL-MySQL(InnoDB) tdsqlshard-xxx
TDSQL-C cynosdbmysql-xxx
VPC子网 subnet-xxxx
CKafka ckafka-xxx
MariaDB tdsql-xxxx
PostgreSQL postgres-xxx
云原生网关 gateway-xxx
标准集群超级节点 {"ClusterId":"cls-xxx","InstanceId":"eklet-xxx","LanIP":"1.1.1.1,"NodePoolId":"np-xxx"}
Serverless集群超级节点 {"ClusterId":"cls-xxxx","InstanceId":"eklet-xxxx","LanIP":"1.1.1.1"}
Elasticsearch集群 es-xxxx
RabbitMQ amqp-xxxx
     * @param string $TaskTitle 演练名称，不填则默认取动作名称
     * @param string $TaskDescription 演练描述，不填则默认取动作描述
     * @param integer $TaskPauseDuration 演练自动暂停时间，单位分钟, 不填则默认为60
     * @param array $TaskAction 演练动作组配置
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
        if (array_key_exists("TaskInstances",$param) and $param["TaskInstances"] !== null) {
            $this->TaskInstances = $param["TaskInstances"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskPauseDuration",$param) and $param["TaskPauseDuration"] !== null) {
            $this->TaskPauseDuration = $param["TaskPauseDuration"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = [];
            foreach ($param["TaskAction"] as $key => $value){
                $obj = new TaskGroupForAction();
                $obj->deserialize($value);
                array_push($this->TaskAction, $obj);
            }
        }
    }
}
