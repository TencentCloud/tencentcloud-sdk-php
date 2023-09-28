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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例刷新批次信息，包含该批次的刷新状态、实例、起止时间等信息。
 *
 * @method integer getRefreshBatchNum() 获取刷新批次序号。例如，2 表示当前批次实例会在第二批次进行实例刷新。
 * @method void setRefreshBatchNum(integer $RefreshBatchNum) 设置刷新批次序号。例如，2 表示当前批次实例会在第二批次进行实例刷新。
 * @method string getRefreshBatchStatus() 获取刷新批次状态。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED:  刷新失败</li><li>PARTIALLY_SUCCESSFUL：批次部分成功</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功
 * @method void setRefreshBatchStatus(string $RefreshBatchStatus) 设置刷新批次状态。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED:  刷新失败</li><li>PARTIALLY_SUCCESSFUL：批次部分成功</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功
 * @method array getRefreshBatchRelatedInstanceSet() 获取刷新批次关联实例列表。
 * @method void setRefreshBatchRelatedInstanceSet(array $RefreshBatchRelatedInstanceSet) 设置刷新批次关联实例列表。
 * @method string getStartTime() 获取刷新批次开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置刷新批次开始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取刷新批次结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置刷新批次结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RefreshBatch extends AbstractModel
{
    /**
     * @var integer 刷新批次序号。例如，2 表示当前批次实例会在第二批次进行实例刷新。
     */
    public $RefreshBatchNum;

    /**
     * @var string 刷新批次状态。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED:  刷新失败</li><li>PARTIALLY_SUCCESSFUL：批次部分成功</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功
     */
    public $RefreshBatchStatus;

    /**
     * @var array 刷新批次关联实例列表。
     */
    public $RefreshBatchRelatedInstanceSet;

    /**
     * @var string 刷新批次开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 刷新批次结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param integer $RefreshBatchNum 刷新批次序号。例如，2 表示当前批次实例会在第二批次进行实例刷新。
     * @param string $RefreshBatchStatus 刷新批次状态。取值如下：<br><li>WAITING：待刷新</li><li>INIT：初始化中</li><li>RUNNING：刷新中</li><li>FAILED:  刷新失败</li><li>PARTIALLY_SUCCESSFUL：批次部分成功</li><li>CANCELLED：已取消</li><li>SUCCESSFUL：刷新成功
     * @param array $RefreshBatchRelatedInstanceSet 刷新批次关联实例列表。
     * @param string $StartTime 刷新批次开始时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 刷新批次结束时间。
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
        if (array_key_exists("RefreshBatchNum",$param) and $param["RefreshBatchNum"] !== null) {
            $this->RefreshBatchNum = $param["RefreshBatchNum"];
        }

        if (array_key_exists("RefreshBatchStatus",$param) and $param["RefreshBatchStatus"] !== null) {
            $this->RefreshBatchStatus = $param["RefreshBatchStatus"];
        }

        if (array_key_exists("RefreshBatchRelatedInstanceSet",$param) and $param["RefreshBatchRelatedInstanceSet"] !== null) {
            $this->RefreshBatchRelatedInstanceSet = [];
            foreach ($param["RefreshBatchRelatedInstanceSet"] as $key => $value){
                $obj = new RefreshBatchRelatedInstance();
                $obj->deserialize($value);
                array_push($this->RefreshBatchRelatedInstanceSet, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
