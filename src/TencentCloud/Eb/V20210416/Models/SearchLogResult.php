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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志检索详情
 *
 * @method string getTimestamp() 获取<p>单条日志上报时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置<p>单条日志上报时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>日志内容详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>日志内容详情</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取<p>事件来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置<p>事件来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>事件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>事件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleIds() 获取<p>事件匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleIds(string $RuleIds) 设置<p>事件匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubject() 获取<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubject(string $Subject) 设置<p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>事件状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>事件状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SearchLogResult extends AbstractModel
{
    /**
     * @var string <p>单条日志上报时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string <p>日志内容详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string <p>事件来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string <p>事件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>事件匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleIds;

    /**
     * @var string <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Subject;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>事件状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Timestamp <p>单条日志上报时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>日志内容详情</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source <p>事件来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>事件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleIds <p>事件匹配规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Subject <p>实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>事件状态</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
