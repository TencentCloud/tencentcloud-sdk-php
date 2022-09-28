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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间分页
 *
 * @method array getRecords() 获取分页内容
 * @method void setRecords(array $Records) 设置分页内容
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 * @method integer getSize() 获取条目数
 * @method void setSize(integer $Size) 设置条目数
 * @method integer getPages() 获取页数
 * @method void setPages(integer $Pages) 设置页数
 * @method integer getCurrent() 获取当前条目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrent(integer $Current) 设置当前条目
注意：此字段可能返回 null，表示取不到有效值。
 */
class NamespacePage extends AbstractModel
{
    /**
     * @var array 分页内容
     */
    public $Records;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @var integer 条目数
     */
    public $Size;

    /**
     * @var integer 页数
     */
    public $Pages;

    /**
     * @var integer 当前条目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Current;

    /**
     * @param array $Records 分页内容
     * @param integer $Total 总数
     * @param integer $Size 条目数
     * @param integer $Pages 页数
     * @param integer $Current 当前条目
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
        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new TemNamespaceInfo();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }
    }
}
