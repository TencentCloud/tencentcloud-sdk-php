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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTaskId() 获取转拉上传任务 ID。
 * @method void setTaskId(string $TaskId) 设置转拉上传任务 ID。
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取转拉上传完成后生成的视频 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置转拉上传完成后生成的视频 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileUrl() 获取转拉上传完成后生成的播放地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUrl(string $FileUrl) 设置转拉上传完成后生成的播放地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcedureTaskId() 获取若转拉上传时指定了视频处理流程，则该参数为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedureTaskId(string $ProcedureTaskId) 设置若转拉上传时指定了视频处理流程，则该参数为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *视频转拉任务信息
 */
class PullFileTask extends AbstractModel
{
    /**
     * @var string 转拉上传任务 ID。
     */
    public $TaskId;

    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 转拉上传完成后生成的视频 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @var string 转拉上传完成后生成的播放地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUrl;

    /**
     * @var string 若转拉上传时指定了视频处理流程，则该参数为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcedureTaskId;
    /**
     * @param string $TaskId 转拉上传任务 ID。
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 转拉上传完成后生成的视频 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileUrl 转拉上传完成后生成的播放地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcedureTaskId 若转拉上传时指定了视频处理流程，则该参数为流程任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }
    }
}
