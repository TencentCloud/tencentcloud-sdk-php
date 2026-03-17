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
 * 订单详情
 *
 * @method string getResourceID() 获取资源ID
 * @method void setResourceID(string $ResourceID) 设置资源ID
 * @method string getInquireKey() 获取计费项
 * @method void setInquireKey(string $InquireKey) 设置计费项
 * @method integer getStatus() 获取订单状态
- 1 正常
- 2 隔离期
- 3 已销毁
 * @method void setStatus(integer $Status) 设置订单状态
- 1 正常
- 2 隔离期
- 3 已销毁
 */
class OrderDetail extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceID;

    /**
     * @var string 计费项
     */
    public $InquireKey;

    /**
     * @var integer 订单状态
- 1 正常
- 2 隔离期
- 3 已销毁
     */
    public $Status;

    /**
     * @param string $ResourceID 资源ID
     * @param string $InquireKey 计费项
     * @param integer $Status 订单状态
- 1 正常
- 2 隔离期
- 3 已销毁
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
        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
