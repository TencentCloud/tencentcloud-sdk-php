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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 验证码票据校验趋势obj
 *
 * @method string getFtime() 获取时间参数
 * @method void setFtime(string $Ftime) 设置时间参数
 * @method integer getTicketCount() 获取票据校验量
 * @method void setTicketCount(integer $TicketCount) 设置票据校验量
 * @method integer getTicketThroughput() 获取票据通过量
 * @method void setTicketThroughput(integer $TicketThroughput) 设置票据通过量
 * @method integer getTicketIntercept() 获取票据拦截量
 * @method void setTicketIntercept(integer $TicketIntercept) 设置票据拦截量
 */
class TicketCheckTrendObj extends AbstractModel
{
    /**
     * @var string 时间参数
     */
    public $Ftime;

    /**
     * @var integer 票据校验量
     */
    public $TicketCount;

    /**
     * @var integer 票据通过量
     */
    public $TicketThroughput;

    /**
     * @var integer 票据拦截量
     */
    public $TicketIntercept;

    /**
     * @param string $Ftime 时间参数
     * @param integer $TicketCount 票据校验量
     * @param integer $TicketThroughput 票据通过量
     * @param integer $TicketIntercept 票据拦截量
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
        if (array_key_exists("Ftime",$param) and $param["Ftime"] !== null) {
            $this->Ftime = $param["Ftime"];
        }

        if (array_key_exists("TicketCount",$param) and $param["TicketCount"] !== null) {
            $this->TicketCount = $param["TicketCount"];
        }

        if (array_key_exists("TicketThroughput",$param) and $param["TicketThroughput"] !== null) {
            $this->TicketThroughput = $param["TicketThroughput"];
        }

        if (array_key_exists("TicketIntercept",$param) and $param["TicketIntercept"] !== null) {
            $this->TicketIntercept = $param["TicketIntercept"];
        }
    }
}
