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
 * 成本分析表头数据复杂类型
 *
 * @method array getHeadDetail() 获取表头日期
 * @method void setHeadDetail(array $HeadDetail) 设置表头日期
 * @method string getName() 获取时间
 * @method void setName(string $Name) 设置时间
 * @method string getTotal() 获取总计
 * @method void setTotal(string $Total) 设置总计
 */
class AnalyseHeaderDetail extends AbstractModel
{
    /**
     * @var array 表头日期
     */
    public $HeadDetail;

    /**
     * @var string 时间
     */
    public $Name;

    /**
     * @var string 总计
     */
    public $Total;

    /**
     * @param array $HeadDetail 表头日期
     * @param string $Name 时间
     * @param string $Total 总计
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
        if (array_key_exists("HeadDetail",$param) and $param["HeadDetail"] !== null) {
            $this->HeadDetail = [];
            foreach ($param["HeadDetail"] as $key => $value){
                $obj = new AnalyseHeaderTimeDetail();
                $obj->deserialize($value);
                array_push($this->HeadDetail, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
