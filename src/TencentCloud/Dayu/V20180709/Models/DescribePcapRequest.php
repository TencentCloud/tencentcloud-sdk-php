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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePcap请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 * @method string getStartTime() 获取攻击事件的开始时间，格式为"2018-08-28 07:00:00"
 * @method void setStartTime(string $StartTime) 设置攻击事件的开始时间，格式为"2018-08-28 07:00:00"
 * @method string getEndTime() 获取攻击事件的结束时间，格式为"2018-08-28 07:02:00"
 * @method void setEndTime(string $EndTime) 设置攻击事件的结束时间，格式为"2018-08-28 07:02:00"
 * @method string getIp() 获取资源的IP，只有当Business为net时才需要填写资源实例下的IP；
 * @method void setIp(string $Ip) 设置资源的IP，只有当Business为net时才需要填写资源实例下的IP；
 */
class DescribePcapRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源实例ID
     */
    public $Id;

    /**
     * @var string 攻击事件的开始时间，格式为"2018-08-28 07:00:00"
     */
    public $StartTime;

    /**
     * @var string 攻击事件的结束时间，格式为"2018-08-28 07:02:00"
     */
    public $EndTime;

    /**
     * @var string 资源的IP，只有当Business为net时才需要填写资源实例下的IP；
     */
    public $Ip;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param string $Id 资源实例ID
     * @param string $StartTime 攻击事件的开始时间，格式为"2018-08-28 07:00:00"
     * @param string $EndTime 攻击事件的结束时间，格式为"2018-08-28 07:02:00"
     * @param string $Ip 资源的IP，只有当Business为net时才需要填写资源实例下的IP；
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
        if (array_key_exists('Business',$param) and $param['Business'] !== null) {
            $this->Business = $param['Business'];
        }

        if (array_key_exists('Id',$param) and $param['Id'] !== null) {
            $this->Id = $param['Id'];
        }

        if (array_key_exists('StartTime',$param) and $param['StartTime'] !== null) {
            $this->StartTime = $param['StartTime'];
        }

        if (array_key_exists('EndTime',$param) and $param['EndTime'] !== null) {
            $this->EndTime = $param['EndTime'];
        }

        if (array_key_exists('Ip',$param) and $param['Ip'] !== null) {
            $this->Ip = $param['Ip'];
        }
    }
}
