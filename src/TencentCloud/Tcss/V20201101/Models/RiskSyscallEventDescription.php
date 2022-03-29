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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时容器高危系统调用事件描述信息
 *
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 * @method string getRemark() 获取事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSyscallName() 获取系统调用名称
 * @method void setSyscallName(string $SyscallName) 设置系统调用名称
 * @method string getOperationTime() 获取事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationTime(string $OperationTime) 设置事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskSyscallEventDescription extends AbstractModel
{
    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @var string 事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 系统调用名称
     */
    public $SyscallName;

    /**
     * @var string 事件最后一次处理的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationTime;

    /**
     * @param string $Description 描述信息
     * @param string $Solution 解决方案
     * @param string $Remark 事件备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SyscallName 系统调用名称
     * @param string $OperationTime 事件最后一次处理的时间
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SyscallName",$param) and $param["SyscallName"] !== null) {
            $this->SyscallName = $param["SyscallName"];
        }

        if (array_key_exists("OperationTime",$param) and $param["OperationTime"] !== null) {
            $this->OperationTime = $param["OperationTime"];
        }
    }
}
