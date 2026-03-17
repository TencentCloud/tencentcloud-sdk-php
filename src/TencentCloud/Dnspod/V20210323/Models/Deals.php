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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子订单号列表
 *
 * @method string getDealId() 获取<p>子订单ID</p>
 * @method void setDealId(string $DealId) 设置<p>子订单ID</p>
 * @method string getDealName() 获取<p>子订单号</p>
 * @method void setDealName(string $DealName) 设置<p>子订单号</p>
 * @method string getResourceId() 获取<p>资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
 */
class Deals extends AbstractModel
{
    /**
     * @var string <p>子订单ID</p>
     */
    public $DealId;

    /**
     * @var string <p>子订单号</p>
     */
    public $DealName;

    /**
     * @var string <p>资源ID</p>
     */
    public $ResourceId;

    /**
     * @param string $DealId <p>子订单ID</p>
     * @param string $DealName <p>子订单号</p>
     * @param string $ResourceId <p>资源ID</p>
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
