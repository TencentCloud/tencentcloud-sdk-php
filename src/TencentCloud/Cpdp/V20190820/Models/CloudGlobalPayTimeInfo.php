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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全局支付时间信息
 *
 * @method integer getStartTimestamp() 获取订单开始时间。
不指定时默认为当前时间。
 * @method void setStartTimestamp(integer $StartTimestamp) 设置订单开始时间。
不指定时默认为当前时间。
 * @method integer getExpireTimestamp() 获取订单结束时间。
逾期将会拒绝下单。不指定时默认为当前时间的7天后结束。
 * @method void setExpireTimestamp(integer $ExpireTimestamp) 设置订单结束时间。
逾期将会拒绝下单。不指定时默认为当前时间的7天后结束。
 * @method integer getTimeOffset() 获取时区。
不指定时默认为28800，表示北京时间（东八区）。
 * @method void setTimeOffset(integer $TimeOffset) 设置时区。
不指定时默认为28800，表示北京时间（东八区）。
 */
class CloudGlobalPayTimeInfo extends AbstractModel
{
    /**
     * @var integer 订单开始时间。
不指定时默认为当前时间。
     */
    public $StartTimestamp;

    /**
     * @var integer 订单结束时间。
逾期将会拒绝下单。不指定时默认为当前时间的7天后结束。
     */
    public $ExpireTimestamp;

    /**
     * @var integer 时区。
不指定时默认为28800，表示北京时间（东八区）。
     */
    public $TimeOffset;

    /**
     * @param integer $StartTimestamp 订单开始时间。
不指定时默认为当前时间。
     * @param integer $ExpireTimestamp 订单结束时间。
逾期将会拒绝下单。不指定时默认为当前时间的7天后结束。
     * @param integer $TimeOffset 时区。
不指定时默认为28800，表示北京时间（东八区）。
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
        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("ExpireTimestamp",$param) and $param["ExpireTimestamp"] !== null) {
            $this->ExpireTimestamp = $param["ExpireTimestamp"];
        }

        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }
    }
}
