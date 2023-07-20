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
 * 运维大屏实例状态统计和实例状态趋势
 *
 * @method array getCountList() 获取实例状态趋势状态统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountList(array $CountList) 设置实例状态趋势状态统计
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTimeList() 获取实例状态趋势时间分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeList(array $TimeList) 设置实例状态趋势时间分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取实例状态标识：WAITING_RUNNING、KILLING、FAILED、FAILED_TRYING、SUCCEED 分别表示等待执行、正在终止、失败、失败重试、成功，用于实例状态分布和实例状态趋势
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态标识：WAITING_RUNNING、KILLING、FAILED、FAILED_TRYING、SUCCEED 分别表示等待执行、正在终止、失败、失败重试、成功，用于实例状态分布和实例状态趋势
 * @method integer getInstanceCount() 获取用于实例状态分布计数
 * @method void setInstanceCount(integer $InstanceCount) 设置用于实例状态分布计数
 * @method string getShowTime() 获取当前展示时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowTime(string $ShowTime) 设置当前展示时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceStatisticInfo extends AbstractModel
{
    /**
     * @var array 实例状态趋势状态统计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CountList;

    /**
     * @var array 实例状态趋势时间分割
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeList;

    /**
     * @var string 实例状态标识：WAITING_RUNNING、KILLING、FAILED、FAILED_TRYING、SUCCEED 分别表示等待执行、正在终止、失败、失败重试、成功，用于实例状态分布和实例状态趋势
     */
    public $InstanceStatus;

    /**
     * @var integer 用于实例状态分布计数
     */
    public $InstanceCount;

    /**
     * @var string 当前展示时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowTime;

    /**
     * @param array $CountList 实例状态趋势状态统计
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TimeList 实例状态趋势时间分割
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus 实例状态标识：WAITING_RUNNING、KILLING、FAILED、FAILED_TRYING、SUCCEED 分别表示等待执行、正在终止、失败、失败重试、成功，用于实例状态分布和实例状态趋势
     * @param integer $InstanceCount 用于实例状态分布计数
     * @param string $ShowTime 当前展示时间
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
        if (array_key_exists("CountList",$param) and $param["CountList"] !== null) {
            $this->CountList = $param["CountList"];
        }

        if (array_key_exists("TimeList",$param) and $param["TimeList"] !== null) {
            $this->TimeList = $param["TimeList"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ShowTime",$param) and $param["ShowTime"] !== null) {
            $this->ShowTime = $param["ShowTime"];
        }
    }
}
