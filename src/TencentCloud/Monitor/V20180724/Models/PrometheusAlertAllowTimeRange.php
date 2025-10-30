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
 * Prometheus自定义告警通知时间段
 *
 * @method string getStart() 获取从0点开始的秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStart(string $Start) 设置从0点开始的秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnd() 获取从0点开始的秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnd(string $End) 设置从0点开始的秒数
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertAllowTimeRange extends AbstractModel
{
    /**
     * @var string 从0点开始的秒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Start;

    /**
     * @var string 从0点开始的秒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $End;

    /**
     * @param string $Start 从0点开始的秒数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $End 从0点开始的秒数
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
