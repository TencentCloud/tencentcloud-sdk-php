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
 * Skill 异常通知。
 *
 * @method integer getLevel() 获取通知级别

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 成功，字符串面："success" |
| 2 | 警告，字符串面："warning" |
| 3 | 错误，字符串面："error" |
 * @method void setLevel(integer $Level) 设置通知级别

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 成功，字符串面："success" |
| 2 | 警告，字符串面："warning" |
| 3 | 错误，字符串面："error" |
 * @method string getNoticeContent() 获取文案（i18n 后字符串）
 * @method void setNoticeContent(string $NoticeContent) 设置文案（i18n 后字符串）
 * @method string getTriggerVersionId() 获取触发本通知的 Skill 版本ID
 * @method void setTriggerVersionId(string $TriggerVersionId) 设置触发本通知的 Skill 版本ID
 * @method integer getType() 获取通知类型 

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 发布失败 |
| 2 | 共享审批被拒 |
 * @method void setType(integer $Type) 设置通知类型 

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 发布失败 |
| 2 | 共享审批被拒 |
 */
class SkillNotice extends AbstractModel
{
    /**
     * @var integer 通知级别

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 成功，字符串面："success" |
| 2 | 警告，字符串面："warning" |
| 3 | 错误，字符串面："error" |
     */
    public $Level;

    /**
     * @var string 文案（i18n 后字符串）
     */
    public $NoticeContent;

    /**
     * @var string 触发本通知的 Skill 版本ID
     */
    public $TriggerVersionId;

    /**
     * @var integer 通知类型 

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 发布失败 |
| 2 | 共享审批被拒 |
     */
    public $Type;

    /**
     * @param integer $Level 通知级别

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 成功，字符串面："success" |
| 2 | 警告，字符串面："warning" |
| 3 | 错误，字符串面："error" |
     * @param string $NoticeContent 文案（i18n 后字符串）
     * @param string $TriggerVersionId 触发本通知的 Skill 版本ID
     * @param integer $Type 通知类型 

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 占位 |
| 1 | 发布失败 |
| 2 | 共享审批被拒 |
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("NoticeContent",$param) and $param["NoticeContent"] !== null) {
            $this->NoticeContent = $param["NoticeContent"];
        }

        if (array_key_exists("TriggerVersionId",$param) and $param["TriggerVersionId"] !== null) {
            $this->TriggerVersionId = $param["TriggerVersionId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
