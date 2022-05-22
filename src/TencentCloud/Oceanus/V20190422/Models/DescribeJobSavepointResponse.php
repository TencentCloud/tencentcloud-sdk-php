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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobSavepoint返回参数结构体
 *
 * @method integer getTotalNumber() 获取快照列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNumber(integer $TotalNumber) 设置快照列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSavepoint() 获取快照列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSavepoint(array $Savepoint) 设置快照列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRunningSavepoint() 获取进行中的快照列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningSavepoint(array $RunningSavepoint) 设置进行中的快照列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunningTotalNumber() 获取进行中的快照列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningTotalNumber(integer $RunningTotalNumber) 设置进行中的快照列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobSavepointResponse extends AbstractModel
{
    /**
     * @var integer 快照列表总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNumber;

    /**
     * @var array 快照列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Savepoint;

    /**
     * @var array 进行中的快照列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningSavepoint;

    /**
     * @var integer 进行中的快照列表总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningTotalNumber;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalNumber 快照列表总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Savepoint 快照列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RunningSavepoint 进行中的快照列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunningTotalNumber 进行中的快照列表总数
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
        if (array_key_exists("TotalNumber",$param) and $param["TotalNumber"] !== null) {
            $this->TotalNumber = $param["TotalNumber"];
        }

        if (array_key_exists("Savepoint",$param) and $param["Savepoint"] !== null) {
            $this->Savepoint = [];
            foreach ($param["Savepoint"] as $key => $value){
                $obj = new Savepoint();
                $obj->deserialize($value);
                array_push($this->Savepoint, $obj);
            }
        }

        if (array_key_exists("RunningSavepoint",$param) and $param["RunningSavepoint"] !== null) {
            $this->RunningSavepoint = [];
            foreach ($param["RunningSavepoint"] as $key => $value){
                $obj = new Savepoint();
                $obj->deserialize($value);
                array_push($this->RunningSavepoint, $obj);
            }
        }

        if (array_key_exists("RunningTotalNumber",$param) and $param["RunningTotalNumber"] !== null) {
            $this->RunningTotalNumber = $param["RunningTotalNumber"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
