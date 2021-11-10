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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetBatchProductionsList返回参数结构体
 *
 * @method array getBatchProductions() 获取返回详情信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchProductions(array $BatchProductions) 设置返回详情信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCnt() 获取返回数量。
 * @method void setTotalCnt(integer $TotalCnt) 设置返回数量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetBatchProductionsListResponse extends AbstractModel
{
    /**
     * @var array 返回详情信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchProductions;

    /**
     * @var integer 返回数量。
     */
    public $TotalCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BatchProductions 返回详情信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCnt 返回数量。
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
        if (array_key_exists("BatchProductions",$param) and $param["BatchProductions"] !== null) {
            $this->BatchProductions = [];
            foreach ($param["BatchProductions"] as $key => $value){
                $obj = new BatchProductionInfo();
                $obj->deserialize($value);
                array_push($this->BatchProductions, $obj);
            }
        }

        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
