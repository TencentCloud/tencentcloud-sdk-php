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
 * CreateSkillShare请求参数结构体
 *
 * @method string getApplyRemark() 获取<p>必填，申请备注（弹窗&quot;申请备注&quot;）</p>
 * @method void setApplyRemark(string $ApplyRemark) 设置<p>必填，申请备注（弹窗&quot;申请备注&quot;）</p>
 * @method string getSkillId() 获取<p>必填，原skill_id</p>
 * @method void setSkillId(string $SkillId) 设置<p>必填，原skill_id</p>
 * @method string getSpaceId() 获取<p>空间ID，必填</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间ID，必填</p>
 * @method string getVersionId() 获取<p>必填，被共享的版本id（必须高于已共享版本）</p>
 * @method void setVersionId(string $VersionId) 设置<p>必填，被共享的版本id（必须高于已共享版本）</p>
 */
class CreateSkillShareRequest extends AbstractModel
{
    /**
     * @var string <p>必填，申请备注（弹窗&quot;申请备注&quot;）</p>
     */
    public $ApplyRemark;

    /**
     * @var string <p>必填，原skill_id</p>
     */
    public $SkillId;

    /**
     * @var string <p>空间ID，必填</p>
     */
    public $SpaceId;

    /**
     * @var string <p>必填，被共享的版本id（必须高于已共享版本）</p>
     */
    public $VersionId;

    /**
     * @param string $ApplyRemark <p>必填，申请备注（弹窗&quot;申请备注&quot;）</p>
     * @param string $SkillId <p>必填，原skill_id</p>
     * @param string $SpaceId <p>空间ID，必填</p>
     * @param string $VersionId <p>必填，被共享的版本id（必须高于已共享版本）</p>
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
        if (array_key_exists("ApplyRemark",$param) and $param["ApplyRemark"] !== null) {
            $this->ApplyRemark = $param["ApplyRemark"];
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
