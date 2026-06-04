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
 * SkillShare Skill 企业共享信息。
 *
 * @method string getApprovalId() 获取审批ID
 * @method void setApprovalId(string $ApprovalId) 设置审批ID
 * @method string getShareSkillId() 获取共享后关联的新 skill_id
 * @method void setShareSkillId(string $ShareSkillId) 设置共享后关联的新 skill_id
 * @method string getShareVersion() 获取共享版本，如 1.0.0
 * @method void setShareVersion(string $ShareVersion) 设置共享版本，如 1.0.0
 * @method string getShareVersionId() 获取共享版本ID
 * @method void setShareVersionId(string $ShareVersionId) 设置共享版本ID
 * @method string getSkillId() 获取原 skill_id
 * @method void setSkillId(string $SkillId) 设置原 skill_id
 * @method integer getStatus() 获取共享状态

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 未共享 |
| 1 | 已共享 |
| 2 | 审批中 |
 * @method void setStatus(integer $Status) 设置共享状态

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 未共享 |
| 1 | 已共享 |
| 2 | 审批中 |
 */
class SkillShare extends AbstractModel
{
    /**
     * @var string 审批ID
     */
    public $ApprovalId;

    /**
     * @var string 共享后关联的新 skill_id
     */
    public $ShareSkillId;

    /**
     * @var string 共享版本，如 1.0.0
     */
    public $ShareVersion;

    /**
     * @var string 共享版本ID
     */
    public $ShareVersionId;

    /**
     * @var string 原 skill_id
     */
    public $SkillId;

    /**
     * @var integer 共享状态

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 未共享 |
| 1 | 已共享 |
| 2 | 审批中 |
     */
    public $Status;

    /**
     * @param string $ApprovalId 审批ID
     * @param string $ShareSkillId 共享后关联的新 skill_id
     * @param string $ShareVersion 共享版本，如 1.0.0
     * @param string $ShareVersionId 共享版本ID
     * @param string $SkillId 原 skill_id
     * @param integer $Status 共享状态

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 未共享 |
| 1 | 已共享 |
| 2 | 审批中 |
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
        if (array_key_exists("ApprovalId",$param) and $param["ApprovalId"] !== null) {
            $this->ApprovalId = $param["ApprovalId"];
        }

        if (array_key_exists("ShareSkillId",$param) and $param["ShareSkillId"] !== null) {
            $this->ShareSkillId = $param["ShareSkillId"];
        }

        if (array_key_exists("ShareVersion",$param) and $param["ShareVersion"] !== null) {
            $this->ShareVersion = $param["ShareVersion"];
        }

        if (array_key_exists("ShareVersionId",$param) and $param["ShareVersionId"] !== null) {
            $this->ShareVersionId = $param["ShareVersionId"];
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
