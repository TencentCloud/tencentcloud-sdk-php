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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取成员列表回包Payload
 *
 * @method string getAccountLevel() 获取用户级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountLevel(string $AccountLevel) 设置用户级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDataList() 获取用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataList(array $DataList) 设置用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimit() 获取每页数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimit(integer $Limit) 设置每页数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取分页偏移量，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置分页偏移量，从0开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取用户总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置用户总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetIndustryV1HomeMembersRespPayload extends AbstractModel
{
    /**
     * @var string 用户级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountLevel;

    /**
     * @var array 用户列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataList;

    /**
     * @var integer 每页数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var integer 用户总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @param string $AccountLevel 用户级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DataList 用户列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Limit 每页数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset 分页偏移量，从0开始
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 用户总数
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
        if (array_key_exists("AccountLevel",$param) and $param["AccountLevel"] !== null) {
            $this->AccountLevel = $param["AccountLevel"];
        }

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new GetIndustryV1HomeMembersRespData();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
