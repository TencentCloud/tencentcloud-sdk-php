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
 * 应用状态信息 - 运行时状态信息(用户不可修改)
 *
 * @method integer getStatus() 获取应用状态 (OFFLINE:未上线, RUNNING:运行中, DISABLED:停用)。枚举值: 1:未上线, 2:运行中, 3:停用
 * @method void setStatus(integer $Status) 设置应用状态 (OFFLINE:未上线, RUNNING:运行中, DISABLED:停用)。枚举值: 1:未上线, 2:运行中, 3:停用
 * @method string getStatusDescription() 获取状态描述
 * @method void setStatusDescription(string $StatusDescription) 设置状态描述
 */
class AppStatusInfo extends AbstractModel
{
    /**
     * @var integer 应用状态 (OFFLINE:未上线, RUNNING:运行中, DISABLED:停用)。枚举值: 1:未上线, 2:运行中, 3:停用
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDescription;

    /**
     * @param integer $Status 应用状态 (OFFLINE:未上线, RUNNING:运行中, DISABLED:停用)。枚举值: 1:未上线, 2:运行中, 3:停用
     * @param string $StatusDescription 状态描述
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

        if (array_key_exists("StatusDescription",$param) and $param["StatusDescription"] !== null) {
            $this->StatusDescription = $param["StatusDescription"];
        }
    }
}
