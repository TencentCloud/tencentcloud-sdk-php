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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务响应数据
 *
 * @method Paging getPage() 获取分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPage(Paging $Page) 设置分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAggrSoftCategorySoftList() 获取行数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAggrSoftCategorySoftList(array $AggrSoftCategorySoftList) 设置行数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAggrSoftCategorySoftListData extends AbstractModel
{
    /**
     * @var Paging 分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Page;

    /**
     * @var integer 总数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 行数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AggrSoftCategorySoftList;

    /**
     * @param Paging $Page 分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总数(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AggrSoftCategorySoftList 行数据
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = new Paging();
            $this->Page->deserialize($param["Page"]);
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("AggrSoftCategorySoftList",$param) and $param["AggrSoftCategorySoftList"] !== null) {
            $this->AggrSoftCategorySoftList = [];
            foreach ($param["AggrSoftCategorySoftList"] as $key => $value){
                $obj = new AggrCategorySoftDetailRow();
                $obj->deserialize($value);
                array_push($this->AggrSoftCategorySoftList, $obj);
            }
        }
    }
}
