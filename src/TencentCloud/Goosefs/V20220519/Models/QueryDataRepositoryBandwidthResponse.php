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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryDataRepositoryBandwidth返回参数结构体
 *
 * @method integer getBandwidth() 获取数据流动带宽, 单位MB/s
 * @method void setBandwidth(integer $Bandwidth) 设置数据流动带宽, 单位MB/s
 * @method integer getBandwidthStatus() 获取带宽状态。1:待扩容;2:运行中;3:扩容中
 * @method void setBandwidthStatus(integer $BandwidthStatus) 设置带宽状态。1:待扩容;2:运行中;3:扩容中
 * @method integer getMinBandwidth() 获取能设置的最小带宽, 单位MB/s
 * @method void setMinBandwidth(integer $MinBandwidth) 设置能设置的最小带宽, 单位MB/s
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class QueryDataRepositoryBandwidthResponse extends AbstractModel
{
    /**
     * @var integer 数据流动带宽, 单位MB/s
     */
    public $Bandwidth;

    /**
     * @var integer 带宽状态。1:待扩容;2:运行中;3:扩容中
     */
    public $BandwidthStatus;

    /**
     * @var integer 能设置的最小带宽, 单位MB/s
     */
    public $MinBandwidth;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Bandwidth 数据流动带宽, 单位MB/s
     * @param integer $BandwidthStatus 带宽状态。1:待扩容;2:运行中;3:扩容中
     * @param integer $MinBandwidth 能设置的最小带宽, 单位MB/s
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
        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("BandwidthStatus",$param) and $param["BandwidthStatus"] !== null) {
            $this->BandwidthStatus = $param["BandwidthStatus"];
        }

        if (array_key_exists("MinBandwidth",$param) and $param["MinBandwidth"] !== null) {
            $this->MinBandwidth = $param["MinBandwidth"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
