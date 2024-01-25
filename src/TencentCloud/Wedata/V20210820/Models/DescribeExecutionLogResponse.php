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
 * DescribeExecutionLog返回参数结构体
 *
 * @method string getInstanceId() 获取任务实例Id
 * @method void setInstanceId(string $InstanceId) 设置任务实例Id
 * @method array getLogs() 获取日志内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogs(array $Logs) 设置日志内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetailId() 获取任务执行记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailId(integer $DetailId) 设置任务执行记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetailStatus() 获取子任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailStatus(string $DetailStatus) 设置子任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExecutionLogResponse extends AbstractModel
{
    /**
     * @var string 任务实例Id
     */
    public $InstanceId;

    /**
     * @var array 日志内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logs;

    /**
     * @var integer 任务执行记录Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailId;

    /**
     * @var string 子任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailStatus;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 任务实例Id
     * @param array $Logs 日志内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetailId 任务执行记录Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetailStatus 子任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
            $this->Logs = $param["Logs"];
        }

        if (array_key_exists("DetailId",$param) and $param["DetailId"] !== null) {
            $this->DetailId = $param["DetailId"];
        }

        if (array_key_exists("DetailStatus",$param) and $param["DetailStatus"] !== null) {
            $this->DetailStatus = $param["DetailStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
