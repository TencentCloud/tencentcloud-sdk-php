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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流高级设置
 *
 * @method string getQueuingMode() 获取排队模式，ON（默认）, OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueuingMode(string $QueuingMode) 设置排队模式，ON（默认）, OFF
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrentNum() 获取	
默认值为1

QueuingMode为ON时，MaxConcurrentNum 设置才生效；只能输入大于0的整数，输入非法值自动转换为1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConcurrentNum(integer $MaxConcurrentNum) 设置	
默认值为1

QueuingMode为ON时，MaxConcurrentNum 设置才生效；只能输入大于0的整数，输入非法值自动转换为1
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowAdvanceConfig extends AbstractModel
{
    /**
     * @var string 排队模式，ON（默认）, OFF
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueuingMode;

    /**
     * @var integer 	
默认值为1

QueuingMode为ON时，MaxConcurrentNum 设置才生效；只能输入大于0的整数，输入非法值自动转换为1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConcurrentNum;

    /**
     * @param string $QueuingMode 排队模式，ON（默认）, OFF
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrentNum 	
默认值为1

QueuingMode为ON时，MaxConcurrentNum 设置才生效；只能输入大于0的整数，输入非法值自动转换为1
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
        if (array_key_exists("QueuingMode",$param) and $param["QueuingMode"] !== null) {
            $this->QueuingMode = $param["QueuingMode"];
        }

        if (array_key_exists("MaxConcurrentNum",$param) and $param["MaxConcurrentNum"] !== null) {
            $this->MaxConcurrentNum = $param["MaxConcurrentNum"];
        }
    }
}
