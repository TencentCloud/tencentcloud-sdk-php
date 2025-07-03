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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎规格详情
 *
 * @method string getStartTime() 获取统计开始时间，格式为：yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置统计开始时间，格式为：yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取统计结束时间，格式为：yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置统计结束时间，格式为：yyyy-MM-dd HH:mm:ss
 * @method integer getCU() 获取当前统计时间段，引擎规格
 * @method void setCU(integer $CU) 设置当前统计时间段，引擎规格
 */
class DataEngineScaleInfoDetail extends AbstractModel
{
    /**
     * @var string 统计开始时间，格式为：yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 统计结束时间，格式为：yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 当前统计时间段，引擎规格
     */
    public $CU;

    /**
     * @param string $StartTime 统计开始时间，格式为：yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 统计结束时间，格式为：yyyy-MM-dd HH:mm:ss
     * @param integer $CU 当前统计时间段，引擎规格
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CU",$param) and $param["CU"] !== null) {
            $this->CU = $param["CU"];
        }
    }
}
