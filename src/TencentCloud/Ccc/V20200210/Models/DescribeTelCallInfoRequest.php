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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCallInfo请求参数结构体
 *
 * @method integer getStartTimeStamp() 获取<p>起始时间戳，Unix 时间戳(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置<p>起始时间戳，Unix 时间戳(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
 * @method integer getEndTimeStamp() 获取<p>结束时间戳，Unix 时间戳，查询时间范围最大为90天(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
 * @method void setEndTimeStamp(integer $EndTimeStamp) 设置<p>结束时间戳，Unix 时间戳，查询时间范围最大为90天(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
 * @method array getSdkAppIdList() 获取<p>应用ID列表，多个ID时，返回值为多个ID使用总和</p>
 * @method void setSdkAppIdList(array $SdkAppIdList) 设置<p>应用ID列表，多个ID时，返回值为多个ID使用总和</p>
 */
class DescribeTelCallInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>起始时间戳，Unix 时间戳(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
     */
    public $StartTimeStamp;

    /**
     * @var integer <p>结束时间戳，Unix 时间戳，查询时间范围最大为90天(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
     */
    public $EndTimeStamp;

    /**
     * @var array <p>应用ID列表，多个ID时，返回值为多个ID使用总和</p>
     */
    public $SdkAppIdList;

    /**
     * @param integer $StartTimeStamp <p>起始时间戳，Unix 时间戳(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
     * @param integer $EndTimeStamp <p>结束时间戳，Unix 时间戳，查询时间范围最大为90天(查询维度仅支持天，例如查询5月1日应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-01 23:59:59&quot;的时间戳,查5月1日和5月2日的应该传startTime:&quot;2023-05-01 00:00:00&quot;,&quot;endTime&quot;:&quot;2023-05-02 23:59:59&quot;的时间戳)</p>
     * @param array $SdkAppIdList <p>应用ID列表，多个ID时，返回值为多个ID使用总和</p>
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("SdkAppIdList",$param) and $param["SdkAppIdList"] !== null) {
            $this->SdkAppIdList = $param["SdkAppIdList"];
        }
    }
}
