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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险级别趋势项
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getHigh() 获取高风险数量
 * @method void setHigh(integer $High) 设置高风险数量
 * @method integer getMedium() 获取中风险数量
 * @method void setMedium(integer $Medium) 设置中风险数量
 * @method integer getLow() 获取低风险数量
 * @method void setLow(integer $Low) 设置低风险数量
 * @method integer getTotal() 获取总数
 * @method void setTotal(integer $Total) 设置总数
 */
class RiskLevelTrendItem extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 高风险数量
     */
    public $High;

    /**
     * @var integer 中风险数量
     */
    public $Medium;

    /**
     * @var integer 低风险数量
     */
    public $Low;

    /**
     * @var integer 总数
     */
    public $Total;

    /**
     * @param string $Date 日期
     * @param integer $High 高风险数量
     * @param integer $Medium 中风险数量
     * @param integer $Low 低风险数量
     * @param integer $Total 总数
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("High",$param) and $param["High"] !== null) {
            $this->High = $param["High"];
        }

        if (array_key_exists("Medium",$param) and $param["Medium"] !== null) {
            $this->Medium = $param["Medium"];
        }

        if (array_key_exists("Low",$param) and $param["Low"] !== null) {
            $this->Low = $param["Low"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
