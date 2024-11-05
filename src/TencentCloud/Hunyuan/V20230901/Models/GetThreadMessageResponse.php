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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetThreadMessage返回参数结构体
 *
 * @method string getID() 获取消息 ID
 * @method void setID(string $ID) 设置消息 ID
 * @method string getObject() 获取对象类型
 * @method void setObject(string $Object) 设置对象类型
 * @method integer getCreatedAt() 获取创建时间
 * @method void setCreatedAt(integer $CreatedAt) 设置创建时间
 * @method string getThreadID() 获取会话 ID
 * @method void setThreadID(string $ThreadID) 设置会话 ID
 * @method string getStatus() 获取状态，处理中 in_progress，已完成 completed，未完成 incomplete。 
 * @method void setStatus(string $Status) 设置状态，处理中 in_progress，已完成 completed，未完成 incomplete。 
 * @method ThreadMessageInCompleteDetailsObject getInCompleteDetails() 获取未完成原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCompleteDetails(ThreadMessageInCompleteDetailsObject $InCompleteDetails) 设置未完成原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompletedAt() 获取完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompletedAt(integer $CompletedAt) 设置完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInCompleteAt() 获取未完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInCompleteAt(integer $InCompleteAt) 设置未完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRole() 获取角色
 * @method void setRole(string $Role) 设置角色
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method string getAssistantID() 获取助手 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssistantID(string $AssistantID) 设置助手 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunID() 获取运行 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunID(string $RunID) 设置运行 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttachments() 获取附件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttachments(array $Attachments) 设置附件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
 */
class GetThreadMessageResponse extends AbstractModel
{
    /**
     * @var string 消息 ID
     */
    public $ID;

    /**
     * @var string 对象类型
     */
    public $Object;

    /**
     * @var integer 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 会话 ID
     */
    public $ThreadID;

    /**
     * @var string 状态，处理中 in_progress，已完成 completed，未完成 incomplete。 
     */
    public $Status;

    /**
     * @var ThreadMessageInCompleteDetailsObject 未完成原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCompleteDetails;

    /**
     * @var integer 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompletedAt;

    /**
     * @var integer 未完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InCompleteAt;

    /**
     * @var string 角色
     */
    public $Role;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var string 助手 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssistantID;

    /**
     * @var string 运行 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunID;

    /**
     * @var array 附件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attachments;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
     */
    public $RequestId;

    /**
     * @param string $ID 消息 ID
     * @param string $Object 对象类型
     * @param integer $CreatedAt 创建时间
     * @param string $ThreadID 会话 ID
     * @param string $Status 状态，处理中 in_progress，已完成 completed，未完成 incomplete。 
     * @param ThreadMessageInCompleteDetailsObject $InCompleteDetails 未完成原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompletedAt 完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InCompleteAt 未完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Role 角色
     * @param string $Content 内容
     * @param string $AssistantID 助手 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunID 运行 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Attachments 附件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。本接口为流式响应接口，当请求成功时，RequestId 会被放在 HTTP 响应的 Header "X-TC-RequestId" 中。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ThreadID",$param) and $param["ThreadID"] !== null) {
            $this->ThreadID = $param["ThreadID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InCompleteDetails",$param) and $param["InCompleteDetails"] !== null) {
            $this->InCompleteDetails = new ThreadMessageInCompleteDetailsObject();
            $this->InCompleteDetails->deserialize($param["InCompleteDetails"]);
        }

        if (array_key_exists("CompletedAt",$param) and $param["CompletedAt"] !== null) {
            $this->CompletedAt = $param["CompletedAt"];
        }

        if (array_key_exists("InCompleteAt",$param) and $param["InCompleteAt"] !== null) {
            $this->InCompleteAt = $param["InCompleteAt"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("AssistantID",$param) and $param["AssistantID"] !== null) {
            $this->AssistantID = $param["AssistantID"];
        }

        if (array_key_exists("RunID",$param) and $param["RunID"] !== null) {
            $this->RunID = $param["RunID"];
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = [];
            foreach ($param["Attachments"] as $key => $value){
                $obj = new ThreadMessageAttachmentObject();
                $obj->deserialize($value);
                array_push($this->Attachments, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
