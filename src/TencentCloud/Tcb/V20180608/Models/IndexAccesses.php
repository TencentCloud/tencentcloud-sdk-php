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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 索引命中信息
 *
 * @method integer getOps() 获取索引命中次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOps(integer $Ops) 设置索引命中次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSince() 获取命中次数从何时开始计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSince(string $Since) 设置命中次数从何时开始计数
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndexAccesses extends AbstractModel
{
    /**
     * @var integer 索引命中次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ops;

    /**
     * @var string 命中次数从何时开始计数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Since;

    /**
     * @param integer $Ops 索引命中次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Since 命中次数从何时开始计数
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
        if (array_key_exists("Ops",$param) and $param["Ops"] !== null) {
            $this->Ops = $param["Ops"];
        }

        if (array_key_exists("Since",$param) and $param["Since"] !== null) {
            $this->Since = $param["Since"];
        }
    }
}
