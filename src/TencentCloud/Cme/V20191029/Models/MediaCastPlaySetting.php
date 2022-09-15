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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放控制参数。
 *
 * @method integer getLoopCount() 获取循环播放次数。LoopCount 和 EndTime 同时只能有一个生效。默认循环播放次数为一次。如果同时设置了 LoopCount 和 EndTime 参数，优先使用 LoopCount 参数。
 * @method void setLoopCount(integer $LoopCount) 设置循环播放次数。LoopCount 和 EndTime 同时只能有一个生效。默认循环播放次数为一次。如果同时设置了 LoopCount 和 EndTime 参数，优先使用 LoopCount 参数。
 * @method string getEndTime() 获取结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setEndTime(string $EndTime) 设置结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class MediaCastPlaySetting extends AbstractModel
{
    /**
     * @var integer 循环播放次数。LoopCount 和 EndTime 同时只能有一个生效。默认循环播放次数为一次。如果同时设置了 LoopCount 和 EndTime 参数，优先使用 LoopCount 参数。
     */
    public $LoopCount;

    /**
     * @var string 结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $EndTime;

    /**
     * @param integer $LoopCount 循环播放次数。LoopCount 和 EndTime 同时只能有一个生效。默认循环播放次数为一次。如果同时设置了 LoopCount 和 EndTime 参数，优先使用 LoopCount 参数。
     * @param string $EndTime 结束时间，采用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
        if (array_key_exists("LoopCount",$param) and $param["LoopCount"] !== null) {
            $this->LoopCount = $param["LoopCount"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
