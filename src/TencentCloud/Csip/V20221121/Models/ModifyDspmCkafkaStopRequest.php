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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmCkafkaStop请求参数结构体
 *
 * @method array getLogDeliveryInfo() 获取日志投递类型的配置
 * @method void setLogDeliveryInfo(array $LogDeliveryInfo) 设置日志投递类型的配置
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class ModifyDspmCkafkaStopRequest extends AbstractModel
{
    /**
     * @var array 日志投递类型的配置
     */
    public $LogDeliveryInfo;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param array $LogDeliveryInfo 日志投递类型的配置
     * @param array $MemberId <p>集团账号的成员id</p>
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
        if (array_key_exists("LogDeliveryInfo",$param) and $param["LogDeliveryInfo"] !== null) {
            $this->LogDeliveryInfo = [];
            foreach ($param["LogDeliveryInfo"] as $key => $value){
                $obj = new LogDeliveryInfo();
                $obj->deserialize($value);
                array_push($this->LogDeliveryInfo, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
