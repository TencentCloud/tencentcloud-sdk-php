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
 * 查询联行号返回结果
 *
 * @method array getBankBranchList() 获取支行列表。
 * @method void setBankBranchList(array $BankBranchList) 设置支行列表。
 * @method integer getCount() 获取列表总数。
 * @method void setCount(integer $Count) 设置列表总数。
 */
class QueryOpenBankBankBranchListResult extends AbstractModel
{
    /**
     * @var array 支行列表。
     */
    public $BankBranchList;

    /**
     * @var integer 列表总数。
     */
    public $Count;

    /**
     * @param array $BankBranchList 支行列表。
     * @param integer $Count 列表总数。
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
        if (array_key_exists("BankBranchList",$param) and $param["BankBranchList"] !== null) {
            $this->BankBranchList = [];
            foreach ($param["BankBranchList"] as $key => $value){
                $obj = new BankBranchInfo();
                $obj->deserialize($value);
                array_push($this->BankBranchList, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
