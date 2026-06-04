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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 特殊状态信息
 *
 * @method integer getStatus() 获取状态 (0-不在特殊状态中, 1-在特殊状态中)。枚举值: 1:在特殊状态中
 * @method void setStatus(integer $Status) 设置状态 (0-不在特殊状态中, 1-在特殊状态中)。枚举值: 1:在特殊状态中
 */
class SpecialStatusInfo extends AbstractModel
{
    /**
     * @var integer 状态 (0-不在特殊状态中, 1-在特殊状态中)。枚举值: 1:在特殊状态中
     */
    public $Status;

    /**
     * @param integer $Status 状态 (0-不在特殊状态中, 1-在特殊状态中)。枚举值: 1:在特殊状态中
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
