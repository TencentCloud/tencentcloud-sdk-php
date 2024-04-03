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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 页码
 *
 * @method integer getPageSize() 获取每页条数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置每页条数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNum() 获取页码(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNum(integer $PageNum) 设置页码(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageCount() 获取总页数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageCount(integer $PageCount) 设置总页数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取记录总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置记录总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Paging extends AbstractModel
{
    /**
     * @var integer 每页条数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 页码(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNum;

    /**
     * @var integer 总页数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageCount;

    /**
     * @var integer 记录总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @param integer $PageSize 每页条数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNum 页码(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageCount 总页数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 记录总数
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
