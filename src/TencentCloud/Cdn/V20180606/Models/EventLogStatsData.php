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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件日志统计数据结果
 *
 * @method string getDatetime() 获取时间
 * @method void setDatetime(string $Datetime) 设置时间
 * @method integer getRequest() 获取请求数
 * @method void setRequest(integer $Request) 设置请求数
 */
class EventLogStatsData extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Datetime;

    /**
     * @var integer 请求数
     */
    public $Request;

    /**
     * @param string $Datetime 时间
     * @param integer $Request 请求数
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
        if (array_key_exists("Datetime",$param) and $param["Datetime"] !== null) {
            $this->Datetime = $param["Datetime"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }
    }
}
