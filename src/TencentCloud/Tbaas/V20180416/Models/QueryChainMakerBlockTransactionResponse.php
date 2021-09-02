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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryChainMakerBlockTransaction返回参数结构体
 *
 * @method array getResult() 获取区块交易
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(array $Result) 设置区块交易
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockHeight() 获取区块高度
 * @method void setBlockHeight(integer $BlockHeight) 设置区块高度
 * @method integer getTxCount() 获取交易数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTxCount(integer $TxCount) 设置交易数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBlockTimestamp() 获取区块时间戳，单位是秒
 * @method void setBlockTimestamp(integer $BlockTimestamp) 设置区块时间戳，单位是秒
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryChainMakerBlockTransactionResponse extends AbstractModel
{
    /**
     * @var array 区块交易
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer 区块高度
     */
    public $BlockHeight;

    /**
     * @var integer 交易数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TxCount;

    /**
     * @var integer 区块时间戳，单位是秒
     */
    public $BlockTimestamp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Result 区块交易
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockHeight 区块高度
     * @param integer $TxCount 交易数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BlockTimestamp 区块时间戳，单位是秒
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = [];
            foreach ($param["Result"] as $key => $value){
                $obj = new ChainMakerTransactionResult();
                $obj->deserialize($value);
                array_push($this->Result, $obj);
            }
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("TxCount",$param) and $param["TxCount"] !== null) {
            $this->TxCount = $param["TxCount"];
        }

        if (array_key_exists("BlockTimestamp",$param) and $param["BlockTimestamp"] !== null) {
            $this->BlockTimestamp = $param["BlockTimestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
