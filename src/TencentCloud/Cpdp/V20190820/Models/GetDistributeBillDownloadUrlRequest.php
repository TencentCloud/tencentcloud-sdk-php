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
 * GetDistributeBillDownloadUrl请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getDay() 获取分账日期（YYYYMMDD，今天传昨天的日期）
 * @method void setDay(string $Day) 设置分账日期（YYYYMMDD，今天传昨天的日期）
 */
class GetDistributeBillDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var string 分账日期（YYYYMMDD，今天传昨天的日期）
     */
    public $Day;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $Day 分账日期（YYYYMMDD，今天传昨天的日期）
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }
    }
}
