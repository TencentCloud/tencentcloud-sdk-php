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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子订单号列表
 *
 * @method string getDealId() 获取子订单ID
 * @method void setDealId(string $DealId) 设置子订单ID
 * @method string getDealName() 获取子订单号
 * @method void setDealName(string $DealName) 设置子订单号
 */
class Deals extends AbstractModel
{
    /**
     * @var string 子订单ID
     */
    public $DealId;

    /**
     * @var string 子订单号
     */
    public $DealName;

    /**
     * @param string $DealId 子订单ID
     * @param string $DealName 子订单号
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
        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }
    }
}
