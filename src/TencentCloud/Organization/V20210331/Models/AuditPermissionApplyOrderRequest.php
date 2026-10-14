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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuditPermissionApplyOrder请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间 ID</p>
 * @method string getApplyId() 获取<p>申请单 ID</p>
 * @method void setApplyId(string $ApplyId) 设置<p>申请单 ID</p>
 * @method string getAuditResult() 获取<p>审批结果</p><p>枚举值：</p><ul><li>Approve： 通过</li><li>Reject： 拒绝</li></ul>
 * @method void setAuditResult(string $AuditResult) 设置<p>审批结果</p><p>枚举值：</p><ul><li>Approve： 通过</li><li>Reject： 拒绝</li></ul>
 * @method string getAuditOpinion() 获取<p>审批意见</p>
 * @method void setAuditOpinion(string $AuditOpinion) 设置<p>审批意见</p>
 */
class AuditPermissionApplyOrderRequest extends AbstractModel
{
    /**
     * @var string <p>空间 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>申请单 ID</p>
     */
    public $ApplyId;

    /**
     * @var string <p>审批结果</p><p>枚举值：</p><ul><li>Approve： 通过</li><li>Reject： 拒绝</li></ul>
     */
    public $AuditResult;

    /**
     * @var string <p>审批意见</p>
     */
    public $AuditOpinion;

    /**
     * @param string $ZoneId <p>空间 ID</p>
     * @param string $ApplyId <p>申请单 ID</p>
     * @param string $AuditResult <p>审批结果</p><p>枚举值：</p><ul><li>Approve： 通过</li><li>Reject： 拒绝</li></ul>
     * @param string $AuditOpinion <p>审批意见</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ApplyId",$param) and $param["ApplyId"] !== null) {
            $this->ApplyId = $param["ApplyId"];
        }

        if (array_key_exists("AuditResult",$param) and $param["AuditResult"] !== null) {
            $this->AuditResult = $param["AuditResult"];
        }

        if (array_key_exists("AuditOpinion",$param) and $param["AuditOpinion"] !== null) {
            $this->AuditOpinion = $param["AuditOpinion"];
        }
    }
}
