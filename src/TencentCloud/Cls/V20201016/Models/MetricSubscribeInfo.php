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
 * 指标订阅配置信息
 *
 * @method string getTaskId() 获取订阅任务id。
 * @method void setTaskId(string $TaskId) 设置订阅任务id。
 * @method string getTopicId() 获取日志主题id。
 * @method void setTopicId(string $TopicId) 设置日志主题id。
 * @method string getName() 获取订阅任务名称。
 * @method void setName(string $Name) 设置订阅任务名称。
 * @method string getNamespace() 获取云产品命名空间。
 * @method void setNamespace(string $Namespace) 设置云产品命名空间。
 * @method array getMetrics() 获取指标配置信息。
 * @method void setMetrics(array $Metrics) 设置指标配置信息。
 * @method InstanceConfig getInstanceInfo() 获取实例配置信息。
 * @method void setInstanceInfo(InstanceConfig $InstanceInfo) 设置实例配置信息。
 * @method integer getEnable() 获取订阅任务开关。1:暂停 2:启用
 * @method void setEnable(integer $Enable) 设置订阅任务开关。1:暂停 2:启用
 * @method integer getStatus() 获取订阅任务运行状态。0:创建中 1:暂停 2:运行中 3:异常
 * @method void setStatus(integer $Status) 设置订阅任务运行状态。0:创建中 1:暂停 2:运行中 3:异常
 * @method string getErrMsg() 获取订阅任务运行异常时的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置订阅任务运行异常时的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间（秒级时间戳）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间（秒级时间戳）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间（秒级时间戳）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间（秒级时间戳）
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricSubscribeInfo extends AbstractModel
{
    /**
     * @var string 订阅任务id。
     */
    public $TaskId;

    /**
     * @var string 日志主题id。
     */
    public $TopicId;

    /**
     * @var string 订阅任务名称。
     */
    public $Name;

    /**
     * @var string 云产品命名空间。
     */
    public $Namespace;

    /**
     * @var array 指标配置信息。
     */
    public $Metrics;

    /**
     * @var InstanceConfig 实例配置信息。
     */
    public $InstanceInfo;

    /**
     * @var integer 订阅任务开关。1:暂停 2:启用
     */
    public $Enable;

    /**
     * @var integer 订阅任务运行状态。0:创建中 1:暂停 2:运行中 3:异常
     */
    public $Status;

    /**
     * @var string 订阅任务运行异常时的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var integer 创建时间（秒级时间戳）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间（秒级时间戳）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $TaskId 订阅任务id。
     * @param string $TopicId 日志主题id。
     * @param string $Name 订阅任务名称。
     * @param string $Namespace 云产品命名空间。
     * @param array $Metrics 指标配置信息。
     * @param InstanceConfig $InstanceInfo 实例配置信息。
     * @param integer $Enable 订阅任务开关。1:暂停 2:启用
     * @param integer $Status 订阅任务运行状态。0:创建中 1:暂停 2:运行中 3:异常
     * @param string $ErrMsg 订阅任务运行异常时的错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间（秒级时间戳）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间（秒级时间戳）
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new MetricConfig();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("InstanceInfo",$param) and $param["InstanceInfo"] !== null) {
            $this->InstanceInfo = new InstanceConfig();
            $this->InstanceInfo->deserialize($param["InstanceInfo"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
