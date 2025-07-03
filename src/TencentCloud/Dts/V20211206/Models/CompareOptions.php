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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一致性校验选项
 *
 * @method string getMethod() 获取对比方式：dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比), 默认为dataCheck
 * @method void setMethod(string $Method) 设置对比方式：dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比), 默认为dataCheck
 * @method integer getSampleRate() 获取抽样比例;范围0,100。默认为100
 * @method void setSampleRate(integer $SampleRate) 设置抽样比例;范围0,100。默认为100
 * @method integer getThreadCount() 获取线程数，取值1-8，默认为1
 * @method void setThreadCount(integer $ThreadCount) 设置线程数，取值1-8，默认为1
 */
class CompareOptions extends AbstractModel
{
    /**
     * @var string 对比方式：dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比), 默认为dataCheck
     */
    public $Method;

    /**
     * @var integer 抽样比例;范围0,100。默认为100
     */
    public $SampleRate;

    /**
     * @var integer 线程数，取值1-8，默认为1
     */
    public $ThreadCount;

    /**
     * @param string $Method 对比方式：dataCheck(完整数据对比)、sampleDataCheck(抽样数据对比)、rowsCount(行数对比), 默认为dataCheck
     * @param integer $SampleRate 抽样比例;范围0,100。默认为100
     * @param integer $ThreadCount 线程数，取值1-8，默认为1
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ThreadCount",$param) and $param["ThreadCount"] !== null) {
            $this->ThreadCount = $param["ThreadCount"];
        }
    }
}
