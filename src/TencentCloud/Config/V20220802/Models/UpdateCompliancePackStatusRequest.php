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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCompliancePackStatus请求参数结构体
 *
 * @method string getCompliancePackId() 获取<p>合规包ID</p>
 * @method void setCompliancePackId(string $CompliancePackId) 设置<p>合规包ID</p>
 * @method string getStatus() 获取<p>ACTIVE：启用<br>UN_ACTIVE ：停用</p>
 * @method void setStatus(string $Status) 设置<p>ACTIVE：启用<br>UN_ACTIVE ：停用</p>
 */
class UpdateCompliancePackStatusRequest extends AbstractModel
{
    /**
     * @var string <p>合规包ID</p>
     */
    public $CompliancePackId;

    /**
     * @var string <p>ACTIVE：启用<br>UN_ACTIVE ：停用</p>
     */
    public $Status;

    /**
     * @param string $CompliancePackId <p>合规包ID</p>
     * @param string $Status <p>ACTIVE：启用<br>UN_ACTIVE ：停用</p>
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
        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
