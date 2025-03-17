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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专属可用区资源水位数据扩展信息，包含可用区当地时间等数据。
 *
 * @method string getThisMondayLocalDate() 获取专属可用区当地时间本周一日期
 * @method void setThisMondayLocalDate(string $ThisMondayLocalDate) 设置专属可用区当地时间本周一日期
 * @method string getLastMondayLocalDate() 获取专属可用区当地时间上周一日期
 * @method void setLastMondayLocalDate(string $LastMondayLocalDate) 设置专属可用区当地时间上周一日期
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var string 专属可用区当地时间本周一日期
     */
    public $ThisMondayLocalDate;

    /**
     * @var string 专属可用区当地时间上周一日期
     */
    public $LastMondayLocalDate;

    /**
     * @param string $ThisMondayLocalDate 专属可用区当地时间本周一日期
     * @param string $LastMondayLocalDate 专属可用区当地时间上周一日期
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
        if (array_key_exists("ThisMondayLocalDate",$param) and $param["ThisMondayLocalDate"] !== null) {
            $this->ThisMondayLocalDate = $param["ThisMondayLocalDate"];
        }

        if (array_key_exists("LastMondayLocalDate",$param) and $param["LastMondayLocalDate"] !== null) {
            $this->LastMondayLocalDate = $param["LastMondayLocalDate"];
        }
    }
}
