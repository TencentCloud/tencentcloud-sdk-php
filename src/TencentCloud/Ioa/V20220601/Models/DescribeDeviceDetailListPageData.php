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
 * @method array getItems() 获取终端详情响应对象集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置终端详情响应对象集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method Paging getPage() 获取分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPage(Paging $Page) 设置分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeDeviceDetailListPageData extends AbstractModel
{
    /**
     * @var array 终端详情响应对象集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var Paging 分页公共对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Page;

    /**
     * @param array $Items 终端详情响应对象集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param Paging $Page 分页公共对象
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DescribeDeviceDetailListData();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = new Paging();
            $this->Page->deserialize($param["Page"]);
        }
    }
}
