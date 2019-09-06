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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getStatus() 获取上下线状态。online 为上线，offline 为下线。
 * @method void setStatus(string $Status) 设置上下线状态。online 为上线，offline 为下线。
 * @method string getDatetime() 获取操作时间。当该值为 null 时表示无历史状态变更记录。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatetime(string $Datetime) 设置操作时间。当该值为 null 时表示无历史状态变更记录。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *CdnIp 节点上下线历史
 */
class CdnIpHistory extends AbstractModel
{
    /**
     * @var string 上下线状态。online 为上线，offline 为下线。
     */
    public $Status;

    /**
     * @var string 操作时间。当该值为 null 时表示无历史状态变更记录。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Datetime;
    /**
     * @param string $Status 上下线状态。online 为上线，offline 为下线。
     * @param string $Datetime 操作时间。当该值为 null 时表示无历史状态变更记录。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Datetime",$param) and $param["Datetime"] !== null) {
            $this->Datetime = $param["Datetime"];
        }
    }
}
