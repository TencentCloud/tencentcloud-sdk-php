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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多语言模板
 *
 * @method string getZhCN() 获取<p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZhCN(string $ZhCN) 设置<p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnUS() 获取<p>英文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnUS(string $EnUS) 设置<p>英文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubjectZhCN() 获取<p>中文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubjectZhCN(string $SubjectZhCN) 设置<p>中文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubjectEnUS() 获取<p>英文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubjectEnUS(string $SubjectEnUS) 设置<p>英文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSenderNameZhCN() 获取<p>中文发件人</p><p>入参限制：长度限制50字符以内，静态纯文本，不支持变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSenderNameZhCN(string $SenderNameZhCN) 设置<p>中文发件人</p><p>入参限制：长度限制50字符以内，静态纯文本，不支持变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSenderNameEnUS() 获取<p>英文发件人</p><p>默认值：长度限制50字符以内，静态纯文本，不支持变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSenderNameEnUS(string $SenderNameEnUS) 设置<p>英文发件人</p><p>默认值：长度限制50字符以内，静态纯文本，不支持变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LocalizedTemplate extends AbstractModel
{
    /**
     * @var string <p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZhCN;

    /**
     * @var string <p>英文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnUS;

    /**
     * @var string <p>中文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubjectZhCN;

    /**
     * @var string <p>英文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubjectEnUS;

    /**
     * @var string <p>中文发件人</p><p>入参限制：长度限制50字符以内，静态纯文本，不支持变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SenderNameZhCN;

    /**
     * @var string <p>英文发件人</p><p>默认值：长度限制50字符以内，静态纯文本，不支持变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SenderNameEnUS;

    /**
     * @param string $ZhCN <p>中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnUS <p>英文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubjectZhCN <p>中文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubjectEnUS <p>英文主题</p><p>入参限制：长度限制100字符以内，仅允许：{{.VerificationCode}}、{{.Usage}}、{{.Email}}、{{.ExpireMinutes}}、{{.ConfirmationURL}}，未知变量拒绝</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SenderNameZhCN <p>中文发件人</p><p>入参限制：长度限制50字符以内，静态纯文本，不支持变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SenderNameEnUS <p>英文发件人</p><p>默认值：长度限制50字符以内，静态纯文本，不支持变量</p>
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
        if (array_key_exists("ZhCN",$param) and $param["ZhCN"] !== null) {
            $this->ZhCN = $param["ZhCN"];
        }

        if (array_key_exists("EnUS",$param) and $param["EnUS"] !== null) {
            $this->EnUS = $param["EnUS"];
        }

        if (array_key_exists("SubjectZhCN",$param) and $param["SubjectZhCN"] !== null) {
            $this->SubjectZhCN = $param["SubjectZhCN"];
        }

        if (array_key_exists("SubjectEnUS",$param) and $param["SubjectEnUS"] !== null) {
            $this->SubjectEnUS = $param["SubjectEnUS"];
        }

        if (array_key_exists("SenderNameZhCN",$param) and $param["SenderNameZhCN"] !== null) {
            $this->SenderNameZhCN = $param["SenderNameZhCN"];
        }

        if (array_key_exists("SenderNameEnUS",$param) and $param["SenderNameEnUS"] !== null) {
            $this->SenderNameEnUS = $param["SenderNameEnUS"];
        }
    }
}
