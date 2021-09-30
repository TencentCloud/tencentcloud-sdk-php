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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器核保输出
 *
 * @method string getCustomerId() 获取客户号
 * @method void setCustomerId(string $CustomerId) 设置客户号
 * @method string getCustomerName() 获取客户姓名
 * @method void setCustomerName(string $CustomerName) 设置客户姓名
 * @method array getResults() 获取各个险种的结果
 * @method void setResults(array $Results) 设置各个险种的结果
 */
class MachineUnderwriteOutput extends AbstractModel
{
    /**
     * @var string 客户号
     */
    public $CustomerId;

    /**
     * @var string 客户姓名
     */
    public $CustomerName;

    /**
     * @var array 各个险种的结果
     */
    public $Results;

    /**
     * @param string $CustomerId 客户号
     * @param string $CustomerName 客户姓名
     * @param array $Results 各个险种的结果
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new InsuranceResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }
    }
}
