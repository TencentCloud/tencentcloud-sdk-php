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
 * DescribeDataEnginesScaleDetail请求参数结构体
 *
 * @method array getDataEngineNames() 获取引擎名称列表
 * @method void setDataEngineNames(array $DataEngineNames) 设置引擎名称列表
 * @method string getStartTime() 获取开始时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
 * @method void setStartTime(string $StartTime) 设置开始时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
 * @method string getEndTime() 获取结束时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
 * @method void setEndTime(string $EndTime) 设置结束时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
 */
class DescribeDataEnginesScaleDetailRequest extends AbstractModel
{
    /**
     * @var array 引擎名称列表
     */
    public $DataEngineNames;

    /**
     * @var string 开始时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
     */
    public $StartTime;

    /**
     * @var string 结束时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
     */
    public $EndTime;

    /**
     * @param array $DataEngineNames 引擎名称列表
     * @param string $StartTime 开始时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
     * @param string $EndTime 结束时间，时间格式：yyyy-MM-dd HH:mm:ss，最长查询一个月内的记录
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
        if (array_key_exists("DataEngineNames",$param) and $param["DataEngineNames"] !== null) {
            $this->DataEngineNames = $param["DataEngineNames"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
