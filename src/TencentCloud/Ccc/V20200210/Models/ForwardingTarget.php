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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 呼转目标
 *
 * @method integer getType() 获取呼转目标类型 1 座席 2 技能组 3 分机
 * @method void setType(integer $Type) 设置呼转目标类型 1 座席 2 技能组 3 分机
 * @method string getStaffUserId() 获取呼转目标为座席的账号 Type 为 1 时填写
 * @method void setStaffUserId(string $StaffUserId) 设置呼转目标为座席的账号 Type 为 1 时填写
 * @method integer getSkillGroupId() 获取呼转目标为技能组的 ID，Type 为 2 时填写
 * @method void setSkillGroupId(integer $SkillGroupId) 设置呼转目标为技能组的 ID，Type 为 2 时填写
 * @method string getExtension() 获取呼转目标为分机的账号，Type 为 3 时填写
 * @method void setExtension(string $Extension) 设置呼转目标为分机的账号，Type 为 3 时填写
 */
class ForwardingTarget extends AbstractModel
{
    /**
     * @var integer 呼转目标类型 1 座席 2 技能组 3 分机
     */
    public $Type;

    /**
     * @var string 呼转目标为座席的账号 Type 为 1 时填写
     */
    public $StaffUserId;

    /**
     * @var integer 呼转目标为技能组的 ID，Type 为 2 时填写
     */
    public $SkillGroupId;

    /**
     * @var string 呼转目标为分机的账号，Type 为 3 时填写
     */
    public $Extension;

    /**
     * @param integer $Type 呼转目标类型 1 座席 2 技能组 3 分机
     * @param string $StaffUserId 呼转目标为座席的账号 Type 为 1 时填写
     * @param integer $SkillGroupId 呼转目标为技能组的 ID，Type 为 2 时填写
     * @param string $Extension 呼转目标为分机的账号，Type 为 3 时填写
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("SkillGroupId",$param) and $param["SkillGroupId"] !== null) {
            $this->SkillGroupId = $param["SkillGroupId"];
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = $param["Extension"];
        }
    }
}
