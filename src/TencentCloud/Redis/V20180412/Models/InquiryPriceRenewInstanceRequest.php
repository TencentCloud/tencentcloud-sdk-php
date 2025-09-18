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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewInstance请求参数结构体
 *
 * @method integer getPeriod() 获取包年包月实例的购买时长。
- 单位：月。
- 取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method void setPeriod(integer $Period) 设置包年包月实例的购买时长。
- 单位：月。
- 取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis)在实例列表复制包年包月实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis)在实例列表复制包年包月实例 ID。
 */
class InquiryPriceRenewInstanceRequest extends AbstractModel
{
    /**
     * @var integer 包年包月实例的购买时长。
- 单位：月。
- 取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     */
    public $Period;

    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis)在实例列表复制包年包月实例 ID。
     */
    public $InstanceId;

    /**
     * @param integer $Period 包年包月实例的购买时长。
- 单位：月。
- 取值范围 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录 [Redis 控制台](https://console.cloud.tencent.com/redis)在实例列表复制包年包月实例 ID。
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
