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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标准阻断模式规则
 *
 * @method integer getTimeRange() 获取爆破事件发生的时间范围，单位：秒
 * @method void setTimeRange(integer $TimeRange) 设置爆破事件发生的时间范围，单位：秒
 * @method integer getLoginFailTimes() 获取爆破事件失败次数
 * @method void setLoginFailTimes(integer $LoginFailTimes) 设置爆破事件失败次数
 */
class BruteAttackRule extends AbstractModel
{
    /**
     * @var integer 爆破事件发生的时间范围，单位：秒
     */
    public $TimeRange;

    /**
     * @var integer 爆破事件失败次数
     */
    public $LoginFailTimes;

    /**
     * @param integer $TimeRange 爆破事件发生的时间范围，单位：秒
     * @param integer $LoginFailTimes 爆破事件失败次数
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("LoginFailTimes",$param) and $param["LoginFailTimes"] !== null) {
            $this->LoginFailTimes = $param["LoginFailTimes"];
        }
    }
}
