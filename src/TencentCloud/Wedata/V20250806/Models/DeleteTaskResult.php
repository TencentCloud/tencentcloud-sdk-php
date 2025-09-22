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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除数据开发任务结果
 *
 * @method boolean getStatus() 获取删除状态,true表示成功，false表示失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置删除状态,true表示成功，false表示失败
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeleteTaskResult extends AbstractModel
{
    /**
     * @var boolean 删除状态,true表示成功，false表示失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param boolean $Status 删除状态,true表示成功，false表示失败
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
