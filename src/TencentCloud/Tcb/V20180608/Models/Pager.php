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
 * 分页信息
 *
 * @method integer getOffset() 获取分页偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置分页偏移量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimit() 获取每页返回记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimit(integer $Limit) 设置每页返回记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取文档集合总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置文档集合总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Pager extends AbstractModel
{
    /**
     * @var integer 分页偏移量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var integer 每页返回记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limit;

    /**
     * @var integer 文档集合总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @param integer $Offset 分页偏移量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Limit 每页返回记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 文档集合总数
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
