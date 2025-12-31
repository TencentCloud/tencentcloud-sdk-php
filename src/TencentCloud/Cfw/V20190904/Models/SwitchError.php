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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 开关切换错误
 *
 * @method string getErrIns() 获取开关唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrIns(string $ErrIns) 设置开关唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrKey() 获取错误类型区分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrKey(string $ErrKey) 设置错误类型区分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取错误时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInsertTime(string $InsertTime) 设置错误时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class SwitchError extends AbstractModel
{
    /**
     * @var string 开关唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrIns;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var string 错误类型区分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrKey;

    /**
     * @var string 错误时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InsertTime;

    /**
     * @param string $ErrIns 开关唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrKey 错误类型区分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 错误时间
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
        if (array_key_exists("ErrIns",$param) and $param["ErrIns"] !== null) {
            $this->ErrIns = $param["ErrIns"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ErrKey",$param) and $param["ErrKey"] !== null) {
            $this->ErrKey = $param["ErrKey"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }
    }
}
