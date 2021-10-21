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
 * 通过Cls日志，计算出来的IP每秒访问数量
 *
 * @method string getClientIp() 获取IP
 * @method void setClientIp(string $ClientIp) 设置IP
 * @method integer getRequest() 获取在给定的时间段中，1秒内的最大请求量
 * @method void setRequest(integer $Request) 设置在给定的时间段中，1秒内的最大请求量
 * @method integer getCount() 获取在获取的Top信息中，IP出现的次数
 * @method void setCount(integer $Count) 设置在获取的Top信息中，IP出现的次数
 * @method string getTime() 获取在给定的时间段中，1秒内的最大请求量对应的时间
 * @method void setTime(string $Time) 设置在给定的时间段中，1秒内的最大请求量对应的时间
 */
class ClsLogIpData extends AbstractModel
{
    /**
     * @var string IP
     */
    public $ClientIp;

    /**
     * @var integer 在给定的时间段中，1秒内的最大请求量
     */
    public $Request;

    /**
     * @var integer 在获取的Top信息中，IP出现的次数
     */
    public $Count;

    /**
     * @var string 在给定的时间段中，1秒内的最大请求量对应的时间
     */
    public $Time;

    /**
     * @param string $ClientIp IP
     * @param integer $Request 在给定的时间段中，1秒内的最大请求量
     * @param integer $Count 在获取的Top信息中，IP出现的次数
     * @param string $Time 在给定的时间段中，1秒内的最大请求量对应的时间
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }
    }
}
