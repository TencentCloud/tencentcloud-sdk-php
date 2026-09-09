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
 * @method string getApprovalId() 获取<p>审批ID</p>
 * @method void setApprovalId(string $ApprovalId) 设置<p>审批ID</p>
 * @method string getShareSkillId() 获取<p>共享后关联的新 skill_id</p>
 * @method void setShareSkillId(string $ShareSkillId) 设置<p>共享后关联的新 skill_id</p>
 * @method string getShareVersion() 获取<p>共享版本，如 1.0.0</p>
 * @method void setShareVersion(string $ShareVersion) 设置<p>共享版本，如 1.0.0</p>
 * @method string getShareVersionId() 获取<p>共享版本ID</p>
 * @method void setShareVersionId(string $ShareVersionId) 设置<p>共享版本ID</p>
 * @method string getSkillId() 获取<p>原 skill_id</p>
 * @method void setSkillId(string $SkillId) 设置<p>原 skill_id</p>
 * @method integer getStatus() 获取<p>共享状态</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 未共享 |<br>| 1 | 已共享 |<br>| 2 | 审批中 |</p>
 * @method void setStatus(integer $Status) 设置<p>共享状态</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 未共享 |<br>| 1 | 已共享 |<br>| 2 | 审批中 |</p>
 * @method SkillCorpShareConfig getCorpShareConfig() 获取<p>企业共享范围</p>
 * @method void setCorpShareConfig(SkillCorpShareConfig $CorpShareConfig) 设置<p>企业共享范围</p>
 */
class SkillShare extends AbstractModel
{
    /**
     * @var string <p>审批ID</p>
     */
    public $ApprovalId;

    /**
     * @var string <p>共享后关联的新 skill_id</p>
     */
    public $ShareSkillId;

    /**
     * @var string <p>共享版本，如 1.0.0</p>
     */
    public $ShareVersion;

    /**
     * @var string <p>共享版本ID</p>
     */
    public $ShareVersionId;

    /**
     * @var string <p>原 skill_id</p>
     */
    public $SkillId;

    /**
     * @var integer <p>共享状态</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 未共享 |<br>| 1 | 已共享 |<br>| 2 | 审批中 |</p>
     */
    public $Status;

    /**
     * @var SkillCorpShareConfig <p>企业共享范围</p>
     */
    public $CorpShareConfig;

    /**
     * @param string $ApprovalId <p>审批ID</p>
     * @param string $ShareSkillId <p>共享后关联的新 skill_id</p>
     * @param string $ShareVersion <p>共享版本，如 1.0.0</p>
     * @param string $ShareVersionId <p>共享版本ID</p>
     * @param string $SkillId <p>原 skill_id</p>
     * @param integer $Status <p>共享状态</p><p>枚举值:<br>| uint | 描述 |<br>| --- | --- |<br>| 0 | 未共享 |<br>| 1 | 已共享 |<br>| 2 | 审批中 |</p>
     * @param SkillCorpShareConfig $CorpShareConfig <p>企业共享范围</p>
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

        if (array_key_exists("CorpShareConfig",$param) and $param["CorpShareConfig"] !== null) {
            $this->CorpShareConfig = new SkillCorpShareConfig();
            $this->CorpShareConfig->deserialize($param["CorpShareConfig"]);
        }
    }
}
