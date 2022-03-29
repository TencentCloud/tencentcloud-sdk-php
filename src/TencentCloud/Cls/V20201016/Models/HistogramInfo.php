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
 * 直方图详细信息
 *
 * @method integer getCount() 获取统计周期内的日志条数
 * @method void setCount(integer $Count) 设置统计周期内的日志条数
 * @method integer getBTime() 获取按 period 取整后的 unix timestamp： 单位毫秒
 * @method void setBTime(integer $BTime) 设置按 period 取整后的 unix timestamp： 单位毫秒
 */
class HistogramInfo extends AbstractModel
{
    /**
     * @var integer 统计周期内的日志条数
     */
    public $Count;

    /**
     * @var integer 按 period 取整后的 unix timestamp： 单位毫秒
     */
    public $BTime;

    /**
     * @param integer $Count 统计周期内的日志条数
     * @param integer $BTime 按 period 取整后的 unix timestamp： 单位毫秒
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

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }
    }
}
