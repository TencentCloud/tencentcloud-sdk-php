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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDos攻击源数据
 *
 * @method array getList() 获取DDos攻击源数据集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置DDos攻击源数据集合。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNo() 获取分页拉取的起始页号。最小值：1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageNo(integer $PageNo) 设置分页拉取的起始页号。最小值：1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageSize() 获取分页拉取的最大返回结果数。最大值：1000。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageSize(integer $PageSize) 设置分页拉取的最大返回结果数。最大值：1000。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPages() 获取总页数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPages(integer $Pages) 设置总页数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSize() 获取总条数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSize(integer $TotalSize) 设置总条数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDosAttackSourceEventData extends AbstractModel
{
    /**
     * @var array DDos攻击源数据集合。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var integer 分页拉取的起始页号。最小值：1。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageNo;

    /**
     * @var integer 分页拉取的最大返回结果数。最大值：1000。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageSize;

    /**
     * @var integer 总页数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pages;

    /**
     * @var integer 总条数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSize;

    /**
     * @param array $List DDos攻击源数据集合。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNo 分页拉取的起始页号。最小值：1。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageSize 分页拉取的最大返回结果数。最大值：1000。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pages 总页数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSize 总条数。
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new DDosAttackSourceEvent();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
