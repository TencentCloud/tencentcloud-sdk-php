<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Svp\V20240125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节省计划覆盖率聚合数据
 *
 * @method string getDatePoint() 获取聚合时间维度，按天聚合格式为yyyy-MM-dd，按月聚合格式为yyyy-MM
 * @method void setDatePoint(string $DatePoint) 设置聚合时间维度，按天聚合格式为yyyy-MM-dd，按月聚合格式为yyyy-MM
 * @method float getRate() 获取覆盖率结果，取值[0, 100]
 * @method void setRate(float $Rate) 设置覆盖率结果，取值[0, 100]
 */
class SavingPlanCoverageRate extends AbstractModel
{
    /**
     * @var string 聚合时间维度，按天聚合格式为yyyy-MM-dd，按月聚合格式为yyyy-MM
     */
    public $DatePoint;

    /**
     * @var float 覆盖率结果，取值[0, 100]
     */
    public $Rate;

    /**
     * @param string $DatePoint 聚合时间维度，按天聚合格式为yyyy-MM-dd，按月聚合格式为yyyy-MM
     * @param float $Rate 覆盖率结果，取值[0, 100]
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
        if (array_key_exists("DatePoint",$param) and $param["DatePoint"] !== null) {
            $this->DatePoint = $param["DatePoint"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }
    }
}
