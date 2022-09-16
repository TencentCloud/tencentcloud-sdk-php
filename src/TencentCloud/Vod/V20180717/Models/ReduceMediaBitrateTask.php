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
 * 降码率任务信息
 *
 * @method string getTaskId() 获取视频处理任务 ID。
 * @method void setTaskId(string $TaskId) 设置视频处理任务 ID。
 * @method string getStatus() 获取任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method string getFileName() 获取媒体文件名称。
 * @method void setFileName(string $FileName) 设置媒体文件名称。
 * @method string getFileUrl() 获取媒体文件地址。
 * @method void setFileUrl(string $FileUrl) 设置媒体文件地址。
 * @method MediaMetaData getMetaData() 获取原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMediaProcessResultSet() 获取降码率任务执行状态与结果。
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) 设置降码率任务执行状态与结果。
 * @method integer getTasksPriority() 获取任务流的优先级，取值范围为 [-10, 10]。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务流的优先级，取值范围为 [-10, 10]。
 * @method string getTasksNotifyMode() 获取任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>None：不接受该任务流回调。</li>
 * @method void setTasksNotifyMode(string $TasksNotifyMode) 设置任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>None：不接受该任务流回调。</li>
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
 * @method string getSessionId() 获取用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 */
class ReduceMediaBitrateTask extends AbstractModel
{
    /**
     * @var string 视频处理任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var string 媒体文件名称。
     */
    public $FileName;

    /**
     * @var string 媒体文件地址。
     */
    public $FileUrl;

    /**
     * @var MediaMetaData 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var array 降码率任务执行状态与结果。
     */
    public $MediaProcessResultSet;

    /**
     * @var integer 任务流的优先级，取值范围为 [-10, 10]。
     */
    public $TasksPriority;

    /**
     * @var string 任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>None：不接受该任务流回调。</li>
     */
    public $TasksNotifyMode;

    /**
     * @var string 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var string 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @param string $TaskId 视频处理任务 ID。
     * @param string $Status 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     * @param string $FileId 媒体文件 ID。
     * @param string $FileName 媒体文件名称。
     * @param string $FileUrl 媒体文件地址。
     * @param MediaMetaData $MetaData 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MediaProcessResultSet 降码率任务执行状态与结果。
     * @param integer $TasksPriority 任务流的优先级，取值范围为 [-10, 10]。
     * @param string $TasksNotifyMode 任务流状态变更通知模式。
<li>Finish：只有当任务流全部执行完毕时，才发起一次事件通知；</li>
<li>None：不接受该任务流回调。</li>
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，任务流状态变更回调将返回该字段值，最长 1000 个字符。
     * @param string $SessionId 用于去重的识别码，如果七天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MediaProcessResultSet",$param) and $param["MediaProcessResultSet"] !== null) {
            $this->MediaProcessResultSet = [];
            foreach ($param["MediaProcessResultSet"] as $key => $value){
                $obj = new ReduceMediaBitrateMediaProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->MediaProcessResultSet, $obj);
            }
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
