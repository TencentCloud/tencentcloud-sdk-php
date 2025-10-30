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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DLC资源配置信息
 *
 * @method string getDriverSize() 获取Driver资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDriverSize(string $DriverSize) 设置Driver资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorSize() 获取Executor资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorSize(string $ExecutorSize) 设置Executor资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutorNumbers() 获取Executor数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutorNumbers(string $ExecutorNumbers) 设置Executor数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsInherit() 获取资源配置方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInherit(string $IsInherit) 设置资源配置方式
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiopsDLCResourceConfigDto extends AbstractModel
{
    /**
     * @var string Driver资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DriverSize;

    /**
     * @var string Executor资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorSize;

    /**
     * @var string Executor数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutorNumbers;

    /**
     * @var string 资源配置方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInherit;

    /**
     * @param string $DriverSize Driver资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorSize Executor资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutorNumbers Executor数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsInherit 资源配置方式
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
        if (array_key_exists("DriverSize",$param) and $param["DriverSize"] !== null) {
            $this->DriverSize = $param["DriverSize"];
        }

        if (array_key_exists("ExecutorSize",$param) and $param["ExecutorSize"] !== null) {
            $this->ExecutorSize = $param["ExecutorSize"];
        }

        if (array_key_exists("ExecutorNumbers",$param) and $param["ExecutorNumbers"] !== null) {
            $this->ExecutorNumbers = $param["ExecutorNumbers"];
        }

        if (array_key_exists("IsInherit",$param) and $param["IsInherit"] !== null) {
            $this->IsInherit = $param["IsInherit"];
        }
    }
}
