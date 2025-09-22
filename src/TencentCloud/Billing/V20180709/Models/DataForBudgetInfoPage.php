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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取预算管理的基础信息分页数据
 *
 * @method integer getPages() 获取分页
 * @method void setPages(integer $Pages) 设置分页
 * @method integer getSize() 获取分页大小
 * @method void setSize(integer $Size) 设置分页大小
 * @method integer getTotal() 获取总量
 * @method void setTotal(integer $Total) 设置总量
 * @method array getRecords() 获取查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecords(array $Records) 设置查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrent() 获取当前页
 * @method void setCurrent(integer $Current) 设置当前页
 */
class DataForBudgetInfoPage extends AbstractModel
{
    /**
     * @var integer 分页
     */
    public $Pages;

    /**
     * @var integer 分页大小
     */
    public $Size;

    /**
     * @var integer 总量
     */
    public $Total;

    /**
     * @var array 查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Records;

    /**
     * @var integer 当前页
     */
    public $Current;

    /**
     * @param integer $Pages 分页
     * @param integer $Size 分页大小
     * @param integer $Total 总量
     * @param array $Records 查询数据列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Current 当前页
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
        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new BudgetExtend();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }
    }
}
