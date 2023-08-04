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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间片段结构体
 *
 * @method integer getBegin() 获取分片起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBegin(integer $Begin) 设置分片起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnd() 获取分片结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnd(integer $End) 设置分片结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class Timeline extends AbstractModel
{
    /**
     * @var integer 分片起始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Begin;

    /**
     * @var integer 分片结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $End;

    /**
     * @param integer $Begin 分片起始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $End 分片结束时间
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
        if (array_key_exists("Begin",$param) and $param["Begin"] !== null) {
            $this->Begin = $param["Begin"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
