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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于接口DescribeAccessHistogram 的出参
 *
 * @method integer getBTime() 获取时间，单位ms
 * @method void setBTime(integer $BTime) 设置时间，单位ms
 * @method integer getCount() 获取日志条数
 * @method void setCount(integer $Count) 设置日志条数
 * @method integer getBeginTime() 获取时间，单位ms
 * @method void setBeginTime(integer $BeginTime) 设置时间，单位ms
 */
class AccessHistogramItem extends AbstractModel
{
    /**
     * @var integer 时间，单位ms
     * @deprecated
     */
    public $BTime;

    /**
     * @var integer 日志条数
     */
    public $Count;

    /**
     * @var integer 时间，单位ms
     */
    public $BeginTime;

    /**
     * @param integer $BTime 时间，单位ms
     * @param integer $Count 日志条数
     * @param integer $BeginTime 时间，单位ms
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
        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }
    }
}
