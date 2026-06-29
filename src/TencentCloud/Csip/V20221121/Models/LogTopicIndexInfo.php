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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志主题索性信息
 *
 * @method string getTopicId() 获取<p>主题</p>
 * @method void setTopicId(string $TopicId) 设置<p>主题</p>
 * @method boolean getStatus() 获取<p>状态</p>
 * @method void setStatus(boolean $Status) 设置<p>状态</p>
 * @method LogIndexRuleInfo getRule() 获取<p>规则</p>
 * @method void setRule(LogIndexRuleInfo $Rule) 设置<p>规则</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method boolean getIncludeInternalFields() 获取<p>是否包含</p>
 * @method void setIncludeInternalFields(boolean $IncludeInternalFields) 设置<p>是否包含</p>
 * @method integer getMetadataFlag() 获取<p>元数据标签</p>
 * @method void setMetadataFlag(integer $MetadataFlag) 设置<p>元数据标签</p>
 */
class LogTopicIndexInfo extends AbstractModel
{
    /**
     * @var string <p>主题</p>
     */
    public $TopicId;

    /**
     * @var boolean <p>状态</p>
     */
    public $Status;

    /**
     * @var LogIndexRuleInfo <p>规则</p>
     */
    public $Rule;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var boolean <p>是否包含</p>
     */
    public $IncludeInternalFields;

    /**
     * @var integer <p>元数据标签</p>
     */
    public $MetadataFlag;

    /**
     * @param string $TopicId <p>主题</p>
     * @param boolean $Status <p>状态</p>
     * @param LogIndexRuleInfo $Rule <p>规则</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param boolean $IncludeInternalFields <p>是否包含</p>
     * @param integer $MetadataFlag <p>元数据标签</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new LogIndexRuleInfo();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IncludeInternalFields",$param) and $param["IncludeInternalFields"] !== null) {
            $this->IncludeInternalFields = $param["IncludeInternalFields"];
        }

        if (array_key_exists("MetadataFlag",$param) and $param["MetadataFlag"] !== null) {
            $this->MetadataFlag = $param["MetadataFlag"];
        }
    }
}
