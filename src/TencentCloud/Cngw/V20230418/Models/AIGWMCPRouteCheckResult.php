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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP路由规则的校验结果
 *
 * @method string getConflictRouteId() 获取<p>冲突路由ID</p>
 * @method void setConflictRouteId(string $ConflictRouteId) 设置<p>冲突路由ID</p>
 * @method boolean getIsConflict() 获取<p>是否冲突</p><p>枚举值：</p><ul><li>true： 冲突</li><li>false： 未冲突</li></ul>
 * @method void setIsConflict(boolean $IsConflict) 设置<p>是否冲突</p><p>枚举值：</p><ul><li>true： 冲突</li><li>false： 未冲突</li></ul>
 * @method string getReason() 获取<p>冲突原因</p>
 * @method void setReason(string $Reason) 设置<p>冲突原因</p>
 */
class AIGWMCPRouteCheckResult extends AbstractModel
{
    /**
     * @var string <p>冲突路由ID</p>
     */
    public $ConflictRouteId;

    /**
     * @var boolean <p>是否冲突</p><p>枚举值：</p><ul><li>true： 冲突</li><li>false： 未冲突</li></ul>
     */
    public $IsConflict;

    /**
     * @var string <p>冲突原因</p>
     */
    public $Reason;

    /**
     * @param string $ConflictRouteId <p>冲突路由ID</p>
     * @param boolean $IsConflict <p>是否冲突</p><p>枚举值：</p><ul><li>true： 冲突</li><li>false： 未冲突</li></ul>
     * @param string $Reason <p>冲突原因</p>
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
        if (array_key_exists("ConflictRouteId",$param) and $param["ConflictRouteId"] !== null) {
            $this->ConflictRouteId = $param["ConflictRouteId"];
        }

        if (array_key_exists("IsConflict",$param) and $param["IsConflict"] !== null) {
            $this->IsConflict = $param["IsConflict"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
