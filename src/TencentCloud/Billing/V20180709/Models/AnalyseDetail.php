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
 * 成本分析数据复杂类型
 *
 * @method string getName() 获取时间
 * @method void setName(string $Name) 设置时间
 * @method string getTotal() 获取金额
 * @method void setTotal(string $Total) 设置金额
 * @method array getTimeDetail() 获取日期明细金额
 * @method void setTimeDetail(array $TimeDetail) 设置日期明细金额
 */
class AnalyseDetail extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Name;

    /**
     * @var string 金额
     */
    public $Total;

    /**
     * @var array 日期明细金额
     */
    public $TimeDetail;

    /**
     * @param string $Name 时间
     * @param string $Total 金额
     * @param array $TimeDetail 日期明细金额
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TimeDetail",$param) and $param["TimeDetail"] !== null) {
            $this->TimeDetail = [];
            foreach ($param["TimeDetail"] as $key => $value){
                $obj = new AnalyseTimeDetail();
                $obj->deserialize($value);
                array_push($this->TimeDetail, $obj);
            }
        }
    }
}
