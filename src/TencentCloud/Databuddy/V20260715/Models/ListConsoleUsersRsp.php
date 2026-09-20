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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询控制台用户列表响应
 *
 * @method array getItems() 获取用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageNumber() 获取当前页码
 * @method void setPageNumber(integer $PageNumber) 设置当前页码
 * @method integer getPageSize() 获取每页大小
 * @method void setPageSize(integer $PageSize) 设置每页大小
 * @method integer getTotalCount() 获取总记录数
 * @method void setTotalCount(integer $TotalCount) 设置总记录数
 * @method integer getTotalPageNumber() 获取总页数
 * @method void setTotalPageNumber(integer $TotalPageNumber) 设置总页数
 */
class ListConsoleUsersRsp extends AbstractModel
{
    /**
     * @var array 用户列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 当前页码
     */
    public $PageNumber;

    /**
     * @var integer 每页大小
     */
    public $PageSize;

    /**
     * @var integer 总记录数
     */
    public $TotalCount;

    /**
     * @var integer 总页数
     */
    public $TotalPageNumber;

    /**
     * @param array $Items 用户列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageNumber 当前页码
     * @param integer $PageSize 每页大小
     * @param integer $TotalCount 总记录数
     * @param integer $TotalPageNumber 总页数
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
                $obj = new ConsoleUserInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalPageNumber",$param) and $param["TotalPageNumber"] !== null) {
            $this->TotalPageNumber = $param["TotalPageNumber"];
        }
    }
}
