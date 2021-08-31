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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线检测信息
 *
 * @method string getRuleName() 获取检测项名称
 * @method void setRuleName(string $RuleName) 设置检测项名称
 * @method string getDescription() 获取检测项描述
 * @method void setDescription(string $Description) 设置检测项描述
 * @method string getFixMessage() 获取修复建议
 * @method void setFixMessage(string $FixMessage) 设置修复建议
 * @method integer getLevel() 获取危害等级
 * @method void setLevel(integer $Level) 设置危害等级
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method integer getRuleId() 获取检测项id
 * @method void setRuleId(integer $RuleId) 设置检测项id
 * @method string getLastScanAt() 获取最后检测时间
 * @method void setLastScanAt(string $LastScanAt) 设置最后检测时间
 * @method string getRuleRemark() 获取具体原因说明
 * @method void setRuleRemark(string $RuleRemark) 设置具体原因说明
 * @method string getUuid() 获取唯一Uuid
 * @method void setUuid(string $Uuid) 设置唯一Uuid
 * @method integer getEventId() 获取唯一事件ID
 * @method void setEventId(integer $EventId) 设置唯一事件ID
 */
class BaselineRuleInfo extends AbstractModel
{
    /**
     * @var string 检测项名称
     */
    public $RuleName;

    /**
     * @var string 检测项描述
     */
    public $Description;

    /**
     * @var string 修复建议
     */
    public $FixMessage;

    /**
     * @var integer 危害等级
     */
    public $Level;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var integer 检测项id
     */
    public $RuleId;

    /**
     * @var string 最后检测时间
     */
    public $LastScanAt;

    /**
     * @var string 具体原因说明
     */
    public $RuleRemark;

    /**
     * @var string 唯一Uuid
     */
    public $Uuid;

    /**
     * @var integer 唯一事件ID
     */
    public $EventId;

    /**
     * @param string $RuleName 检测项名称
     * @param string $Description 检测项描述
     * @param string $FixMessage 修复建议
     * @param integer $Level 危害等级
     * @param integer $Status 状态
     * @param integer $RuleId 检测项id
     * @param string $LastScanAt 最后检测时间
     * @param string $RuleRemark 具体原因说明
     * @param string $Uuid 唯一Uuid
     * @param integer $EventId 唯一事件ID
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FixMessage",$param) and $param["FixMessage"] !== null) {
            $this->FixMessage = $param["FixMessage"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("LastScanAt",$param) and $param["LastScanAt"] !== null) {
            $this->LastScanAt = $param["LastScanAt"];
        }

        if (array_key_exists("RuleRemark",$param) and $param["RuleRemark"] !== null) {
            $this->RuleRemark = $param["RuleRemark"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
