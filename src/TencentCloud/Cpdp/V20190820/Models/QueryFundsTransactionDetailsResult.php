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
 * 查询会员资金交易信息列表结果
 *
 * @method integer getResultCount() 获取本次交易返回查询结果记录数。
 * @method void setResultCount(integer $ResultCount) 设置本次交易返回查询结果记录数。
 * @method integer getTotalCount() 获取符合业务查询条件的记录总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置符合业务查询条件的记录总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndFlag() 获取结束标志。
__0__：否
__1__：是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndFlag(string $EndFlag) 设置结束标志。
__0__：否
__1__：是
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTranItemArray() 获取会员资金交易信息数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranItemArray(array $TranItemArray) 设置会员资金交易信息数组。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryFundsTransactionDetailsResult extends AbstractModel
{
    /**
     * @var integer 本次交易返回查询结果记录数。
     */
    public $ResultCount;

    /**
     * @var integer 符合业务查询条件的记录总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 结束标志。
__0__：否
__1__：是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndFlag;

    /**
     * @var array 会员资金交易信息数组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranItemArray;

    /**
     * @param integer $ResultCount 本次交易返回查询结果记录数。
     * @param integer $TotalCount 符合业务查询条件的记录总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndFlag 结束标志。
__0__：否
__1__：是
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TranItemArray 会员资金交易信息数组。
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
        if (array_key_exists("ResultCount",$param) and $param["ResultCount"] !== null) {
            $this->ResultCount = $param["ResultCount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("EndFlag",$param) and $param["EndFlag"] !== null) {
            $this->EndFlag = $param["EndFlag"];
        }

        if (array_key_exists("TranItemArray",$param) and $param["TranItemArray"] !== null) {
            $this->TranItemArray = [];
            foreach ($param["TranItemArray"] as $key => $value){
                $obj = new FundsTransactionItem();
                $obj->deserialize($value);
                array_push($this->TranItemArray, $obj);
            }
        }
    }
}
