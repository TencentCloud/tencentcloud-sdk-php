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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 攻击日志统计详情
 *
 * @method integer getCount() 获取日志条数
 * @method void setCount(integer $Count) 设置日志条数
 * @method integer getTimeStamp() 获取时间戳
 * @method void setTimeStamp(integer $TimeStamp) 设置时间戳
 */
class LogHistogramInfo extends AbstractModel
{
    /**
     * @var integer 日志条数
     */
    public $Count;

    /**
     * @var integer 时间戳
     */
    public $TimeStamp;

    /**
     * @param integer $Count 日志条数
     * @param integer $TimeStamp 时间戳
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }
    }
}
