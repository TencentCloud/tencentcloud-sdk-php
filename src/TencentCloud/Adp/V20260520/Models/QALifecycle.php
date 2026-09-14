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
 * QA 生命周期信息
 *
 * @method string getCreateTime() 获取<p>创建时间（Unix 秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间（Unix 秒）</p>
 * @method ExpirationPolicy getExpirationPolicy() 获取<p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) 设置<p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态：1=待校验，2=未采纳，3=导入失败，4=审核中，5=审核失败，6=学习中，7=学习失败，8=导入完成，9=已过期，10=超量失效，11=超量失效恢复中，12=人工申诉中，13=人工申诉失败<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>QA_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>QA_STATUS_PENDING_VERIFY</td><td>1</td><td>待校验</td></tr><tr><td>QA_STATUS_NOT_ACCEPTED</td><td>2</td><td>未采纳</td></tr><tr><td>QA_STATUS_IMPORT_FAIL</td><td>3</td><td>导入失败</td></tr><tr><td>QA_STATUS_AUDITING</td><td>4</td><td>审核中</td></tr><tr><td>QA_STATUS_AUDIT_FAIL</td><td>5</td><td>审核失败</td></tr><tr><td>QA_STATUS_LEARNING</td><td>6</td><td>学习中</td></tr><tr><td>QA_STATUS_LEARN_FAIL</td><td>7</td><td>学习失败</td></tr><tr><td>QA_STATUS_IMPORTED</td><td>8</td><td>导入完成</td></tr><tr><td>QA_STATUS_EXPIRED</td><td>9</td><td>已过期</td></tr><tr><td>QA_STATUS_QUOTA_INVALID</td><td>10</td><td>超量失效</td></tr><tr><td>QA_STATUS_QUOTA_RECOVERING</td><td>11</td><td>超量失效恢复中</td></tr><tr><td>QA_STATUS_MANUAL_APPEALING</td><td>12</td><td>人工申诉中</td></tr><tr><td>QA_STATUS_MANUAL_APPEAL_FAIL</td><td>13</td><td>人工申诉失败</td></tr></tbody></table></p>
 * @method void setStatus(integer $Status) 设置<p>状态：1=待校验，2=未采纳，3=导入失败，4=审核中，5=审核失败，6=学习中，7=学习失败，8=导入完成，9=已过期，10=超量失效，11=超量失效恢复中，12=人工申诉中，13=人工申诉失败<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>QA_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>QA_STATUS_PENDING_VERIFY</td><td>1</td><td>待校验</td></tr><tr><td>QA_STATUS_NOT_ACCEPTED</td><td>2</td><td>未采纳</td></tr><tr><td>QA_STATUS_IMPORT_FAIL</td><td>3</td><td>导入失败</td></tr><tr><td>QA_STATUS_AUDITING</td><td>4</td><td>审核中</td></tr><tr><td>QA_STATUS_AUDIT_FAIL</td><td>5</td><td>审核失败</td></tr><tr><td>QA_STATUS_LEARNING</td><td>6</td><td>学习中</td></tr><tr><td>QA_STATUS_LEARN_FAIL</td><td>7</td><td>学习失败</td></tr><tr><td>QA_STATUS_IMPORTED</td><td>8</td><td>导入完成</td></tr><tr><td>QA_STATUS_EXPIRED</td><td>9</td><td>已过期</td></tr><tr><td>QA_STATUS_QUOTA_INVALID</td><td>10</td><td>超量失效</td></tr><tr><td>QA_STATUS_QUOTA_RECOVERING</td><td>11</td><td>超量失效恢复中</td></tr><tr><td>QA_STATUS_MANUAL_APPEALING</td><td>12</td><td>人工申诉中</td></tr><tr><td>QA_STATUS_MANUAL_APPEAL_FAIL</td><td>13</td><td>人工申诉失败</td></tr></tbody></table></p>
 * @method string getStatusDesc() 获取<p>状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>状态描述</p>
 * @method string getStatusMessage() 获取<p>状态附加信息</p>
 * @method void setStatusMessage(string $StatusMessage) 设置<p>状态附加信息</p>
 * @method string getUpdateTime() 获取<p>更新时间（Unix 秒）</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间（Unix 秒）</p>
 */
class QALifecycle extends AbstractModel
{
    /**
     * @var string <p>创建时间（Unix 秒）</p>
     */
    public $CreateTime;

    /**
     * @var ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationPolicy;

    /**
     * @var integer <p>状态：1=待校验，2=未采纳，3=导入失败，4=审核中，5=审核失败，6=学习中，7=学习失败，8=导入完成，9=已过期，10=超量失效，11=超量失效恢复中，12=人工申诉中，13=人工申诉失败<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>QA_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>QA_STATUS_PENDING_VERIFY</td><td>1</td><td>待校验</td></tr><tr><td>QA_STATUS_NOT_ACCEPTED</td><td>2</td><td>未采纳</td></tr><tr><td>QA_STATUS_IMPORT_FAIL</td><td>3</td><td>导入失败</td></tr><tr><td>QA_STATUS_AUDITING</td><td>4</td><td>审核中</td></tr><tr><td>QA_STATUS_AUDIT_FAIL</td><td>5</td><td>审核失败</td></tr><tr><td>QA_STATUS_LEARNING</td><td>6</td><td>学习中</td></tr><tr><td>QA_STATUS_LEARN_FAIL</td><td>7</td><td>学习失败</td></tr><tr><td>QA_STATUS_IMPORTED</td><td>8</td><td>导入完成</td></tr><tr><td>QA_STATUS_EXPIRED</td><td>9</td><td>已过期</td></tr><tr><td>QA_STATUS_QUOTA_INVALID</td><td>10</td><td>超量失效</td></tr><tr><td>QA_STATUS_QUOTA_RECOVERING</td><td>11</td><td>超量失效恢复中</td></tr><tr><td>QA_STATUS_MANUAL_APPEALING</td><td>12</td><td>人工申诉中</td></tr><tr><td>QA_STATUS_MANUAL_APPEAL_FAIL</td><td>13</td><td>人工申诉失败</td></tr></tbody></table></p>
     */
    public $Status;

    /**
     * @var string <p>状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>状态附加信息</p>
     */
    public $StatusMessage;

    /**
     * @var string <p>更新时间（Unix 秒）</p>
     */
    public $UpdateTime;

    /**
     * @param string $CreateTime <p>创建时间（Unix 秒）</p>
     * @param ExpirationPolicy $ExpirationPolicy <p>过期策略（有效时间与超过有效时间后的行为）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态：1=待校验，2=未采纳，3=导入失败，4=审核中，5=审核失败，6=学习中，7=学习失败，8=导入完成，9=已过期，10=超量失效，11=超量失效恢复中，12=人工申诉中，13=人工申诉失败<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>QA_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>QA_STATUS_PENDING_VERIFY</td><td>1</td><td>待校验</td></tr><tr><td>QA_STATUS_NOT_ACCEPTED</td><td>2</td><td>未采纳</td></tr><tr><td>QA_STATUS_IMPORT_FAIL</td><td>3</td><td>导入失败</td></tr><tr><td>QA_STATUS_AUDITING</td><td>4</td><td>审核中</td></tr><tr><td>QA_STATUS_AUDIT_FAIL</td><td>5</td><td>审核失败</td></tr><tr><td>QA_STATUS_LEARNING</td><td>6</td><td>学习中</td></tr><tr><td>QA_STATUS_LEARN_FAIL</td><td>7</td><td>学习失败</td></tr><tr><td>QA_STATUS_IMPORTED</td><td>8</td><td>导入完成</td></tr><tr><td>QA_STATUS_EXPIRED</td><td>9</td><td>已过期</td></tr><tr><td>QA_STATUS_QUOTA_INVALID</td><td>10</td><td>超量失效</td></tr><tr><td>QA_STATUS_QUOTA_RECOVERING</td><td>11</td><td>超量失效恢复中</td></tr><tr><td>QA_STATUS_MANUAL_APPEALING</td><td>12</td><td>人工申诉中</td></tr><tr><td>QA_STATUS_MANUAL_APPEAL_FAIL</td><td>13</td><td>人工申诉失败</td></tr></tbody></table></p>
     * @param string $StatusDesc <p>状态描述</p>
     * @param string $StatusMessage <p>状态附加信息</p>
     * @param string $UpdateTime <p>更新时间（Unix 秒）</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpirationPolicy",$param) and $param["ExpirationPolicy"] !== null) {
            $this->ExpirationPolicy = new ExpirationPolicy();
            $this->ExpirationPolicy->deserialize($param["ExpirationPolicy"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
