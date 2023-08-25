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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 处理历史
 *
 * @method string getTime() 获取处理时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置处理时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHandler() 获取处理人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHandler(string $Handler) 设置处理人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNote() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNote(string $Note) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProcessHistory extends AbstractModel
{
    /**
     * @var string 处理时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 处理人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Handler;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Note;

    /**
     * @param string $Time 处理时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Handler 处理人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Note 备注
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Handler",$param) and $param["Handler"] !== null) {
            $this->Handler = $param["Handler"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }
    }
}
