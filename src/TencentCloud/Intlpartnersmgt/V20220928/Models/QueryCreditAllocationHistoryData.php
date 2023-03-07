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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询子客授信历史记录返回信息
 *
 * @method string getAllocatedTime() 获取分配时间
 * @method void setAllocatedTime(string $AllocatedTime) 设置分配时间
 * @method string getOperator() 获取操作员
 * @method void setOperator(string $Operator) 设置操作员
 * @method float getCredit() 获取分配的信用值
 * @method void setCredit(float $Credit) 设置分配的信用值
 * @method float getAllocatedCredit() 获取分配的总金额
 * @method void setAllocatedCredit(float $AllocatedCredit) 设置分配的总金额
 */
class QueryCreditAllocationHistoryData extends AbstractModel
{
    /**
     * @var string 分配时间
     */
    public $AllocatedTime;

    /**
     * @var string 操作员
     */
    public $Operator;

    /**
     * @var float 分配的信用值
     */
    public $Credit;

    /**
     * @var float 分配的总金额
     */
    public $AllocatedCredit;

    /**
     * @param string $AllocatedTime 分配时间
     * @param string $Operator 操作员
     * @param float $Credit 分配的信用值
     * @param float $AllocatedCredit 分配的总金额
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
        if (array_key_exists("AllocatedTime",$param) and $param["AllocatedTime"] !== null) {
            $this->AllocatedTime = $param["AllocatedTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Credit",$param) and $param["Credit"] !== null) {
            $this->Credit = $param["Credit"];
        }

        if (array_key_exists("AllocatedCredit",$param) and $param["AllocatedCredit"] !== null) {
            $this->AllocatedCredit = $param["AllocatedCredit"];
        }
    }
}
