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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 值块
 *
 * @method string getGrade() 获取等级
 * @method void setGrade(string $Grade) 设置等级
 * @method array getPercent() 获取百分比
 * @method void setPercent(array $Percent) 设置百分比
 * @method string getPositive() 获取阳性阴性
 * @method void setPositive(string $Positive) 设置阳性阴性
 */
class ValueBlock extends AbstractModel
{
    /**
     * @var string 等级
     */
    public $Grade;

    /**
     * @var array 百分比
     */
    public $Percent;

    /**
     * @var string 阳性阴性
     */
    public $Positive;

    /**
     * @param string $Grade 等级
     * @param array $Percent 百分比
     * @param string $Positive 阳性阴性
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
        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Positive",$param) and $param["Positive"] !== null) {
            $this->Positive = $param["Positive"];
        }
    }
}
