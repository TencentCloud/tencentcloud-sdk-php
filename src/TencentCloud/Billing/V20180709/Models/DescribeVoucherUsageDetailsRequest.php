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
 * DescribeVoucherUsageDetails请求参数结构体
 *
 * @method integer getLimit() 获取一页多少条数据，默认是20条，最大不超过1000
 * @method void setLimit(integer $Limit) 设置一页多少条数据，默认是20条，最大不超过1000
 * @method integer getOffset() 获取第多少页，默认是1
 * @method void setOffset(integer $Offset) 设置第多少页，默认是1
 * @method string getVoucherId() 获取代金券id
 * @method void setVoucherId(string $VoucherId) 设置代金券id
 * @method string getOperator() 获取操作人，默认就是用户uin
 * @method void setOperator(string $Operator) 设置操作人，默认就是用户uin
 */
class DescribeVoucherUsageDetailsRequest extends AbstractModel
{
    /**
     * @var integer 一页多少条数据，默认是20条，最大不超过1000
     */
    public $Limit;

    /**
     * @var integer 第多少页，默认是1
     */
    public $Offset;

    /**
     * @var string 代金券id
     */
    public $VoucherId;

    /**
     * @var string 操作人，默认就是用户uin
     */
    public $Operator;

    /**
     * @param integer $Limit 一页多少条数据，默认是20条，最大不超过1000
     * @param integer $Offset 第多少页，默认是1
     * @param string $VoucherId 代金券id
     * @param string $Operator 操作人，默认就是用户uin
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
