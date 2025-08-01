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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDataForwardStatus请求参数结构体
 *
 * @method string getProductId() 获取产品ID。
 * @method void setProductId(string $ProductId) 设置产品ID。
 * @method integer getStatus() 获取转发状态，1启用，0禁用。
 * @method void setStatus(integer $Status) 设置转发状态，1启用，0禁用。
 */
class ModifyDataForwardStatusRequest extends AbstractModel
{
    /**
     * @var string 产品ID。
     */
    public $ProductId;

    /**
     * @var integer 转发状态，1启用，0禁用。
     */
    public $Status;

    /**
     * @param string $ProductId 产品ID。
     * @param integer $Status 转发状态，1启用，0禁用。
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
