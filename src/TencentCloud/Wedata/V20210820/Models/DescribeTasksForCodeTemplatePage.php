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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量操作任务列表分页
 *
 * @method integer getPageCount() 获取总页码数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageCount(integer $PageCount) 设置总页码数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeTasksForCodeTemplatePage extends AbstractModel
{
    /**
     * @var integer 总页码数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageCount;

    /**
     * @var array 内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 总个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @param integer $PageCount 总页码数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总个数
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
        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new TaskSimpleVo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
