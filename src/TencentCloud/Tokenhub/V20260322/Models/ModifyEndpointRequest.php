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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEndpoint请求参数结构体
 *
 * @method integer getAutoAdjustQuota() 获取自动调整配额
 * @method void setAutoAdjustQuota(integer $AutoAdjustQuota) 设置自动调整配额
 */
class ModifyEndpointRequest extends AbstractModel
{
    /**
     * @var integer 自动调整配额
     */
    public $AutoAdjustQuota;

    /**
     * @param integer $AutoAdjustQuota 自动调整配额
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
        if (array_key_exists("AutoAdjustQuota",$param) and $param["AutoAdjustQuota"] !== null) {
            $this->AutoAdjustQuota = $param["AutoAdjustQuota"];
        }
    }
}
