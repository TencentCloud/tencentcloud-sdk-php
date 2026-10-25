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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMSSETrend返回参数结构体
 *
 * @method integer getIntervalSec() 获取<p>时间桶宽度，单位秒。</p>
 * @method void setIntervalSec(integer $IntervalSec) 设置<p>时间桶宽度，单位秒。</p>
 * @method array getPoints() 获取<p>Dimension 为 overall 时的时间桶。没有对话时为空数组。</p>
 * @method void setPoints(array $Points) 设置<p>Dimension 为 overall 时的时间桶。没有对话时为空数组。</p>
 * @method array getSeries() 获取<p>非 overall 时按指标从高到低取 TopN 后的序列。没有对话时为空数组。</p>
 * @method void setSeries(array $Series) 设置<p>非 overall 时按指标从高到低取 TopN 后的序列。没有对话时为空数组。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMSSETrendResponse extends AbstractModel
{
    /**
     * @var integer <p>时间桶宽度，单位秒。</p>
     */
    public $IntervalSec;

    /**
     * @var array <p>Dimension 为 overall 时的时间桶。没有对话时为空数组。</p>
     */
    public $Points;

    /**
     * @var array <p>非 overall 时按指标从高到低取 TopN 后的序列。没有对话时为空数组。</p>
     */
    public $Series;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IntervalSec <p>时间桶宽度，单位秒。</p>
     * @param array $Points <p>Dimension 为 overall 时的时间桶。没有对话时为空数组。</p>
     * @param array $Series <p>非 overall 时按指标从高到低取 TopN 后的序列。没有对话时为空数组。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IntervalSec",$param) and $param["IntervalSec"] !== null) {
            $this->IntervalSec = $param["IntervalSec"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new TDEMSSETrendPoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new TDEMSSETrendSeries();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
