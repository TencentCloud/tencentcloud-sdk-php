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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Serverless HBase包年包月时间
 *
 * @method integer getTimeSpan() 获取时间跨度
 * @method void setTimeSpan(integer $TimeSpan) 设置时间跨度
 * @method string getTimeUnit() 获取时间单位，"m"代表月。
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位，"m"代表月。
 */
class Period extends AbstractModel
{
    /**
     * @var integer 时间跨度
     */
    public $TimeSpan;

    /**
     * @var string 时间单位，"m"代表月。
     */
    public $TimeUnit;

    /**
     * @param integer $TimeSpan 时间跨度
     * @param string $TimeUnit 时间单位，"m"代表月。
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }
    }
}
