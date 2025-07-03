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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回调模板信息。
 *
 * @method integer getTemplateId() 获取模板 ID。
 * @method void setTemplateId(integer $TemplateId) 设置模板 ID。
 * @method string getTemplateName() 获取模板名称。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
 * @method string getDescription() 获取描述信息。
 * @method void setDescription(string $Description) 设置描述信息。
 * @method string getStreamBeginNotifyUrl() 获取开播回调 URL。
 * @method void setStreamBeginNotifyUrl(string $StreamBeginNotifyUrl) 设置开播回调 URL。
 * @method string getStreamMixNotifyUrl() 获取混流回调 URL。(参数已弃用)。
 * @method void setStreamMixNotifyUrl(string $StreamMixNotifyUrl) 设置混流回调 URL。(参数已弃用)。
 * @method string getStreamEndNotifyUrl() 获取断流回调 URL。
 * @method void setStreamEndNotifyUrl(string $StreamEndNotifyUrl) 设置断流回调 URL。
 * @method string getRecordNotifyUrl() 获取录制文件回调 URL。
 * @method void setRecordNotifyUrl(string $RecordNotifyUrl) 设置录制文件回调 URL。
 * @method string getSnapshotNotifyUrl() 获取截图回调 URL。
 * @method void setSnapshotNotifyUrl(string $SnapshotNotifyUrl) 设置截图回调 URL。
 * @method string getPornCensorshipNotifyUrl() 获取鉴黄回调 URL。
 * @method void setPornCensorshipNotifyUrl(string $PornCensorshipNotifyUrl) 设置鉴黄回调 URL。
 * @method string getCallbackKey() 获取回调的鉴权 key。
 * @method void setCallbackKey(string $CallbackKey) 设置回调的鉴权 key。
 * @method string getPushExceptionNotifyUrl() 获取推流异常回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPushExceptionNotifyUrl(string $PushExceptionNotifyUrl) 设置推流异常回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudioAuditNotifyUrl() 获取音频审核回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioAuditNotifyUrl(string $AudioAuditNotifyUrl) 设置音频审核回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordExceptionNotifyUrl() 获取录制异常回调 URL。
 * @method void setRecordExceptionNotifyUrl(string $RecordExceptionNotifyUrl) 设置录制异常回调 URL。
 * @method array getRecordExceptionLevels() 获取录制异常回调级别，可选择：error: 错误。alarm: 告警。
 * @method void setRecordExceptionLevels(array $RecordExceptionLevels) 设置录制异常回调级别，可选择：error: 错误。alarm: 告警。
 */
class CallBackTemplateInfo extends AbstractModel
{
    /**
     * @var integer 模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 模板名称。
     */
    public $TemplateName;

    /**
     * @var string 描述信息。
     */
    public $Description;

    /**
     * @var string 开播回调 URL。
     */
    public $StreamBeginNotifyUrl;

    /**
     * @var string 混流回调 URL。(参数已弃用)。
     */
    public $StreamMixNotifyUrl;

    /**
     * @var string 断流回调 URL。
     */
    public $StreamEndNotifyUrl;

    /**
     * @var string 录制文件回调 URL。
     */
    public $RecordNotifyUrl;

    /**
     * @var string 截图回调 URL。
     */
    public $SnapshotNotifyUrl;

    /**
     * @var string 鉴黄回调 URL。
     */
    public $PornCensorshipNotifyUrl;

    /**
     * @var string 回调的鉴权 key。
     */
    public $CallbackKey;

    /**
     * @var string 推流异常回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PushExceptionNotifyUrl;

    /**
     * @var string 音频审核回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioAuditNotifyUrl;

    /**
     * @var string 录制异常回调 URL。
     */
    public $RecordExceptionNotifyUrl;

    /**
     * @var array 录制异常回调级别，可选择：error: 错误。alarm: 告警。
     */
    public $RecordExceptionLevels;

    /**
     * @param integer $TemplateId 模板 ID。
     * @param string $TemplateName 模板名称。
     * @param string $Description 描述信息。
     * @param string $StreamBeginNotifyUrl 开播回调 URL。
     * @param string $StreamMixNotifyUrl 混流回调 URL。(参数已弃用)。
     * @param string $StreamEndNotifyUrl 断流回调 URL。
     * @param string $RecordNotifyUrl 录制文件回调 URL。
     * @param string $SnapshotNotifyUrl 截图回调 URL。
     * @param string $PornCensorshipNotifyUrl 鉴黄回调 URL。
     * @param string $CallbackKey 回调的鉴权 key。
     * @param string $PushExceptionNotifyUrl 推流异常回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudioAuditNotifyUrl 音频审核回调 URL。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordExceptionNotifyUrl 录制异常回调 URL。
     * @param array $RecordExceptionLevels 录制异常回调级别，可选择：error: 错误。alarm: 告警。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StreamBeginNotifyUrl",$param) and $param["StreamBeginNotifyUrl"] !== null) {
            $this->StreamBeginNotifyUrl = $param["StreamBeginNotifyUrl"];
        }

        if (array_key_exists("StreamMixNotifyUrl",$param) and $param["StreamMixNotifyUrl"] !== null) {
            $this->StreamMixNotifyUrl = $param["StreamMixNotifyUrl"];
        }

        if (array_key_exists("StreamEndNotifyUrl",$param) and $param["StreamEndNotifyUrl"] !== null) {
            $this->StreamEndNotifyUrl = $param["StreamEndNotifyUrl"];
        }

        if (array_key_exists("RecordNotifyUrl",$param) and $param["RecordNotifyUrl"] !== null) {
            $this->RecordNotifyUrl = $param["RecordNotifyUrl"];
        }

        if (array_key_exists("SnapshotNotifyUrl",$param) and $param["SnapshotNotifyUrl"] !== null) {
            $this->SnapshotNotifyUrl = $param["SnapshotNotifyUrl"];
        }

        if (array_key_exists("PornCensorshipNotifyUrl",$param) and $param["PornCensorshipNotifyUrl"] !== null) {
            $this->PornCensorshipNotifyUrl = $param["PornCensorshipNotifyUrl"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("PushExceptionNotifyUrl",$param) and $param["PushExceptionNotifyUrl"] !== null) {
            $this->PushExceptionNotifyUrl = $param["PushExceptionNotifyUrl"];
        }

        if (array_key_exists("AudioAuditNotifyUrl",$param) and $param["AudioAuditNotifyUrl"] !== null) {
            $this->AudioAuditNotifyUrl = $param["AudioAuditNotifyUrl"];
        }

        if (array_key_exists("RecordExceptionNotifyUrl",$param) and $param["RecordExceptionNotifyUrl"] !== null) {
            $this->RecordExceptionNotifyUrl = $param["RecordExceptionNotifyUrl"];
        }

        if (array_key_exists("RecordExceptionLevels",$param) and $param["RecordExceptionLevels"] !== null) {
            $this->RecordExceptionLevels = $param["RecordExceptionLevels"];
        }
    }
}
