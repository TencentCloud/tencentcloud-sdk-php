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
 * 监控数据点
 *
 * @method integer getTimestamp() 获取<p>该监控数据点生成的时间点</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>该监控数据点生成的时间点</p>
 * @method float getValue() 获取<p>监控数据点的值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置<p>监控数据点的值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Point extends AbstractModel
{
    /**
     * @var integer <p>该监控数据点生成的时间点</p>
     */
    public $Timestamp;

    /**
     * @var float <p>监控数据点的值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param integer $Timestamp <p>该监控数据点生成的时间点</p>
     * @param float $Value <p>监控数据点的值</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
