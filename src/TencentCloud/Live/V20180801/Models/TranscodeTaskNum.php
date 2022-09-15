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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码任务数。
 *
 * @method string getTime() 获取时间点。
 * @method void setTime(string $Time) 设置时间点。
 * @method integer getCodeRate() 获取码率。
 * @method void setCodeRate(integer $CodeRate) 设置码率。
 * @method integer getNum() 获取任务数。
 * @method void setNum(integer $Num) 设置任务数。
 */
class TranscodeTaskNum extends AbstractModel
{
    /**
     * @var string 时间点。
     */
    public $Time;

    /**
     * @var integer 码率。
     */
    public $CodeRate;

    /**
     * @var integer 任务数。
     */
    public $Num;

    /**
     * @param string $Time 时间点。
     * @param integer $CodeRate 码率。
     * @param integer $Num 任务数。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CodeRate",$param) and $param["CodeRate"] !== null) {
            $this->CodeRate = $param["CodeRate"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
