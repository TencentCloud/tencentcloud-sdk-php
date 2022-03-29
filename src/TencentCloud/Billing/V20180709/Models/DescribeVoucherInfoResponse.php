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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVoucherInfo返回参数结构体
 *
 * @method integer getTotalCount() 获取券总数
 * @method void setTotalCount(integer $TotalCount) 设置券总数
 * @method integer getTotalBalance() 获取总余额（微分）
 * @method void setTotalBalance(integer $TotalBalance) 设置总余额（微分）
 * @method array getVoucherInfos() 获取代金券相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoucherInfos(array $VoucherInfos) 设置代金券相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVoucherInfoResponse extends AbstractModel
{
    /**
     * @var integer 券总数
     */
    public $TotalCount;

    /**
     * @var integer 总余额（微分）
     */
    public $TotalBalance;

    /**
     * @var array 代金券相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoucherInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 券总数
     * @param integer $TotalBalance 总余额（微分）
     * @param array $VoucherInfos 代金券相关信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalBalance",$param) and $param["TotalBalance"] !== null) {
            $this->TotalBalance = $param["TotalBalance"];
        }

        if (array_key_exists("VoucherInfos",$param) and $param["VoucherInfos"] !== null) {
            $this->VoucherInfos = [];
            foreach ($param["VoucherInfos"] as $key => $value){
                $obj = new VoucherInfos();
                $obj->deserialize($value);
                array_push($this->VoucherInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
