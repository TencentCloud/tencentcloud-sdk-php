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
 * 事件排行时序点
 *
 * @method integer getTs() 获取<p>时间戳 Unix 毫秒</p>
 * @method void setTs(integer $Ts) 设置<p>时间戳 Unix 毫秒</p>
 * @method integer getCount() 获取<p>次数</p>
 * @method void setCount(integer $Count) 设置<p>次数</p>
 * @method integer getFail() 获取<p>失败次数</p>
 * @method void setFail(integer $Fail) 设置<p>失败次数</p>
 * @method float getDuration() 获取<p>耗时</p>
 * @method void setDuration(float $Duration) 设置<p>耗时</p>
 */
class EventRankPoint extends AbstractModel
{
    /**
     * @var integer <p>时间戳 Unix 毫秒</p>
     */
    public $Ts;

    /**
     * @var integer <p>次数</p>
     */
    public $Count;

    /**
     * @var integer <p>失败次数</p>
     */
    public $Fail;

    /**
     * @var float <p>耗时</p>
     */
    public $Duration;

    /**
     * @param integer $Ts <p>时间戳 Unix 毫秒</p>
     * @param integer $Count <p>次数</p>
     * @param integer $Fail <p>失败次数</p>
     * @param float $Duration <p>耗时</p>
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
        if (array_key_exists("Ts",$param) and $param["Ts"] !== null) {
            $this->Ts = $param["Ts"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Fail",$param) and $param["Fail"] !== null) {
            $this->Fail = $param["Fail"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
