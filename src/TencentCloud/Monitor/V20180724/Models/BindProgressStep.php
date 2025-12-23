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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定进度参数
 *
 * @method string getEndAt() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndAt(string $EndAt) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailedMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedMsg(string $FailedMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLifeState() 获取状态
 * @method void setLifeState(string $LifeState) 设置状态
 * @method string getStartAt() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartAt(string $StartAt) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStep() 获取任务进程
"prepare_env"   // 准备环境,安装instance EKS
"check_target"  // 检查target是否为running
"install_crd"   // 安装需要测crd
"install_rbac"  // 安装rbac
"install_agent" // 安装agent
"install_cr"    // 安装prometheus CR
"install_basic" // 安装基础采集信息，标记target状态为normal
 * @method void setStep(string $Step) 设置任务进程
"prepare_env"   // 准备环境,安装instance EKS
"check_target"  // 检查target是否为running
"install_crd"   // 安装需要测crd
"install_rbac"  // 安装rbac
"install_agent" // 安装agent
"install_cr"    // 安装prometheus CR
"install_basic" // 安装基础采集信息，标记target状态为normal
 */
class BindProgressStep extends AbstractModel
{
    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndAt;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedMsg;

    /**
     * @var string 状态
     */
    public $LifeState;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartAt;

    /**
     * @var string 任务进程
"prepare_env"   // 准备环境,安装instance EKS
"check_target"  // 检查target是否为running
"install_crd"   // 安装需要测crd
"install_rbac"  // 安装rbac
"install_agent" // 安装agent
"install_cr"    // 安装prometheus CR
"install_basic" // 安装基础采集信息，标记target状态为normal
     */
    public $Step;

    /**
     * @param string $EndAt 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailedMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LifeState 状态
     * @param string $StartAt 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Step 任务进程
"prepare_env"   // 准备环境,安装instance EKS
"check_target"  // 检查target是否为running
"install_crd"   // 安装需要测crd
"install_rbac"  // 安装rbac
"install_agent" // 安装agent
"install_cr"    // 安装prometheus CR
"install_basic" // 安装基础采集信息，标记target状态为normal
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
        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("FailedMsg",$param) and $param["FailedMsg"] !== null) {
            $this->FailedMsg = $param["FailedMsg"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }
    }
}
