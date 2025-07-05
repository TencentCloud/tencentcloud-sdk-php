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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义错误信息对象
 *
 * @method string getErrorTip() 获取错误说明字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorTip(string $ErrorTip) 设置错误说明字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取原始异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置原始异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorLevel() 获取错误等级字段
ERROR
WARN
INFO
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorLevel(string $ErrorLevel) 设置错误等级字段
ERROR
WARN
INFO
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocLink() 获取指引文档链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocLink(string $DocLink) 设置指引文档链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFAQ() 获取快速指引说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFAQ(string $FAQ) 设置快速指引说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReservedField() 获取预留字段1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedField(string $ReservedField) 设置预留字段1
注意：此字段可能返回 null，表示取不到有效值。
 */
class ErrorInfo extends AbstractModel
{
    /**
     * @var string 错误说明字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorTip;

    /**
     * @var string 原始异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 错误等级字段
ERROR
WARN
INFO
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorLevel;

    /**
     * @var string 指引文档链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocLink;

    /**
     * @var string 快速指引说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FAQ;

    /**
     * @var string 预留字段1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedField;

    /**
     * @param string $ErrorTip 错误说明字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 原始异常信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorLevel 错误等级字段
ERROR
WARN
INFO
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocLink 指引文档链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FAQ 快速指引说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReservedField 预留字段1
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
        if (array_key_exists("ErrorTip",$param) and $param["ErrorTip"] !== null) {
            $this->ErrorTip = $param["ErrorTip"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ErrorLevel",$param) and $param["ErrorLevel"] !== null) {
            $this->ErrorLevel = $param["ErrorLevel"];
        }

        if (array_key_exists("DocLink",$param) and $param["DocLink"] !== null) {
            $this->DocLink = $param["DocLink"];
        }

        if (array_key_exists("FAQ",$param) and $param["FAQ"] !== null) {
            $this->FAQ = $param["FAQ"];
        }

        if (array_key_exists("ReservedField",$param) and $param["ReservedField"] !== null) {
            $this->ReservedField = $param["ReservedField"];
        }
    }
}
