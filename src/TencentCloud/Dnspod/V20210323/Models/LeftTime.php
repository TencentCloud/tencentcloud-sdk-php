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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量生成文件剩余时间
 *
 * @method integer getDays() 获取剩余天数
 * @method void setDays(integer $Days) 设置剩余天数
 * @method integer getHours() 获取剩余小时数
 * @method void setHours(integer $Hours) 设置剩余小时数
 * @method integer getMins() 获取剩余分钟数
 * @method void setMins(integer $Mins) 设置剩余分钟数
 */
class LeftTime extends AbstractModel
{
    /**
     * @var integer 剩余天数
     */
    public $Days;

    /**
     * @var integer 剩余小时数
     */
    public $Hours;

    /**
     * @var integer 剩余分钟数
     */
    public $Mins;

    /**
     * @param integer $Days 剩余天数
     * @param integer $Hours 剩余小时数
     * @param integer $Mins 剩余分钟数
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
        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Hours",$param) and $param["Hours"] !== null) {
            $this->Hours = $param["Hours"];
        }

        if (array_key_exists("Mins",$param) and $param["Mins"] !== null) {
            $this->Mins = $param["Mins"];
        }
    }
}
