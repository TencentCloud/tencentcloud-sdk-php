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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApiKey列表
 *
 * @method integer getTotal() 获取<p>总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置<p>总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalPages() 获取<p>页数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPages(integer $TotalPages) 设置<p>页数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getList() 获取<p>列表数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置<p>列表数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiKeyAuthApplyVOList extends AbstractModel
{
    /**
     * @var integer <p>总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer <p>页数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPages;

    /**
     * @var array <p>列表数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param integer $Total <p>总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalPages <p>页数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $List <p>列表数据</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TotalPages",$param) and $param["TotalPages"] !== null) {
            $this->TotalPages = $param["TotalPages"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new ApiKeyAuthApplyVO();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
