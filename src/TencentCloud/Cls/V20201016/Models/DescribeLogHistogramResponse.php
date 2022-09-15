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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogHistogram返回参数结构体
 *
 * @method integer getInterval() 获取统计周期： 单位ms
 * @method void setInterval(integer $Interval) 设置统计周期： 单位ms
 * @method integer getTotalCount() 获取命中关键字的日志总条数
 * @method void setTotalCount(integer $TotalCount) 设置命中关键字的日志总条数
 * @method array getHistogramInfos() 获取周期内统计结果详情
 * @method void setHistogramInfos(array $HistogramInfos) 设置周期内统计结果详情
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogHistogramResponse extends AbstractModel
{
    /**
     * @var integer 统计周期： 单位ms
     */
    public $Interval;

    /**
     * @var integer 命中关键字的日志总条数
     */
    public $TotalCount;

    /**
     * @var array 周期内统计结果详情
     */
    public $HistogramInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Interval 统计周期： 单位ms
     * @param integer $TotalCount 命中关键字的日志总条数
     * @param array $HistogramInfos 周期内统计结果详情
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("HistogramInfos",$param) and $param["HistogramInfos"] !== null) {
            $this->HistogramInfos = [];
            foreach ($param["HistogramInfos"] as $key => $value){
                $obj = new HistogramInfo();
                $obj->deserialize($value);
                array_push($this->HistogramInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
