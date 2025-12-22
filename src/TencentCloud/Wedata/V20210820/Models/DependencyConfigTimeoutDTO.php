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
 * 超时弱依赖配置
 *
 * @method string getTimeoutType() 获取超时类型
WAIT_TOTAL_TIMEOUT 等待总时长

RUNNING_TIMEOUT 运行时长

WAIT_TIME_POINT_TIMEOUT 等待超过配置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutType(string $TimeoutType) 设置超时类型
WAIT_TOTAL_TIMEOUT 等待总时长

RUNNING_TIMEOUT 运行时长

WAIT_TIME_POINT_TIMEOUT 等待超过配置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeoutValue() 获取超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutValue(integer $TimeoutValue) 设置超时时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeoutPoint() 获取固定时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutPoint(string $TimeoutPoint) 设置固定时间点
注意：此字段可能返回 null，表示取不到有效值。
 */
class DependencyConfigTimeoutDTO extends AbstractModel
{
    /**
     * @var string 超时类型
WAIT_TOTAL_TIMEOUT 等待总时长

RUNNING_TIMEOUT 运行时长

WAIT_TIME_POINT_TIMEOUT 等待超过配置时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutType;

    /**
     * @var integer 超时时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutValue;

    /**
     * @var string 固定时间点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutPoint;

    /**
     * @param string $TimeoutType 超时类型
WAIT_TOTAL_TIMEOUT 等待总时长

RUNNING_TIMEOUT 运行时长

WAIT_TIME_POINT_TIMEOUT 等待超过配置时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeoutValue 超时时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeoutPoint 固定时间点
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
        if (array_key_exists("TimeoutType",$param) and $param["TimeoutType"] !== null) {
            $this->TimeoutType = $param["TimeoutType"];
        }

        if (array_key_exists("TimeoutValue",$param) and $param["TimeoutValue"] !== null) {
            $this->TimeoutValue = $param["TimeoutValue"];
        }

        if (array_key_exists("TimeoutPoint",$param) and $param["TimeoutPoint"] !== null) {
            $this->TimeoutPoint = $param["TimeoutPoint"];
        }
    }
}
