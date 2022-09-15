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
 * CreateDeal返回参数结构体
 *
 * @method string getBigDealId() 获取大订单号，一个大订单号下可以有多个子订单，说明是同一次下单
 * @method void setBigDealId(string $BigDealId) 设置大订单号，一个大订单号下可以有多个子订单，说明是同一次下单
 * @method array getDealList() 获取子订单列表
 * @method void setDealList(array $DealList) 设置子订单列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDealResponse extends AbstractModel
{
    /**
     * @var string 大订单号，一个大订单号下可以有多个子订单，说明是同一次下单
     */
    public $BigDealId;

    /**
     * @var array 子订单列表
     */
    public $DealList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $BigDealId 大订单号，一个大订单号下可以有多个子订单，说明是同一次下单
     * @param array $DealList 子订单列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("DealList",$param) and $param["DealList"] !== null) {
            $this->DealList = [];
            foreach ($param["DealList"] as $key => $value){
                $obj = new Deals();
                $obj->deserialize($value);
                array_push($this->DealList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
