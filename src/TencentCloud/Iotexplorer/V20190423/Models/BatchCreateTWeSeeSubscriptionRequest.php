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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchCreateTWeSeeSubscription请求参数结构体
 *
 * @method array getEntries() 获取待开通的订阅列表
 * @method void setEntries(array $Entries) 设置待开通的订阅列表
 */
class BatchCreateTWeSeeSubscriptionRequest extends AbstractModel
{
    /**
     * @var array 待开通的订阅列表
     */
    public $Entries;

    /**
     * @param array $Entries 待开通的订阅列表
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
        if (array_key_exists("Entries",$param) and $param["Entries"] !== null) {
            $this->Entries = [];
            foreach ($param["Entries"] as $key => $value){
                $obj = new SeeCreateSubscriptionEntry();
                $obj->deserialize($value);
                array_push($this->Entries, $obj);
            }
        }
    }
}
