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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则执行配置
 *
 * @method string getQueueName() 获取计算队列名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueName(string $QueueName) 设置计算队列名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorGroupId() 获取执行资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorGroupId(string $ExecutorGroupId) 设置执行资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineType() 获取运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineType(string $EngineType) 设置运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcGroupName() 获取DLC执行引擎资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcGroupName(string $DlcGroupName) 设置DLC执行引擎资源组
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleExecConfig extends AbstractModel
{
    /**
     * @var string 计算队列名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueName;

    /**
     * @var string 执行资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorGroupId;

    /**
     * @var string 运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineType;

    /**
     * @var string DLC执行引擎资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcGroupName;

    /**
     * @param string $QueueName 计算队列名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorGroupId 执行资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineType 运行的执行引擎，不传时会请求该数据源下默认的执行引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcGroupName DLC执行引擎资源组
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
        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("DlcGroupName",$param) and $param["DlcGroupName"] !== null) {
            $this->DlcGroupName = $param["DlcGroupName"];
        }
    }
}
