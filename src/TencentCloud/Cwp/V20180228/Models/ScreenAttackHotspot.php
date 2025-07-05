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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏全网攻击热点
 *
 * @method string getEventName() 获取事件名
 * @method void setEventName(string $EventName) 设置事件名
 * @method string getSrcIp() 获取攻击者IP
 * @method void setSrcIp(string $SrcIp) 设置攻击者IP
 * @method string getDstIp() 获取受害者IP
 * @method void setDstIp(string $DstIp) 设置受害者IP
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getCreatedTime() 获取时间
 * @method void setCreatedTime(string $CreatedTime) 设置时间
 */
class ScreenAttackHotspot extends AbstractModel
{
    /**
     * @var string 事件名
     */
    public $EventName;

    /**
     * @var string 攻击者IP
     */
    public $SrcIp;

    /**
     * @var string 受害者IP
     */
    public $DstIp;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 时间
     */
    public $CreatedTime;

    /**
     * @param string $EventName 事件名
     * @param string $SrcIp 攻击者IP
     * @param string $DstIp 受害者IP
     * @param string $Region 地域
     * @param string $CreatedTime 时间
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
