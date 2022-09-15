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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-分页查询对账单数据结果
 *
 * @method integer getPageNo() 获取页码
 * @method void setPageNo(integer $PageNo) 设置页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getCount() 获取总数
 * @method void setCount(integer $Count) 设置总数
 * @method array getDataList() 获取账单数据明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataList(array $DataList) 设置账单数据明细
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankBillDataPageResult extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNo;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 总数
     */
    public $Count;

    /**
     * @var array 账单数据明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataList;

    /**
     * @param integer $PageNo 页码
     * @param integer $PageSize 分页大小
     * @param integer $Count 总数
     * @param array $DataList 账单数据明细
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new QueryOpenBankBillData();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }
    }
}
