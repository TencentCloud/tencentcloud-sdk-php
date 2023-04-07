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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编排任务信息
 *
 * @method string getTaskId() 获取编排任务 ID。
 * @method void setTaskId(string $TaskId) 设置编排任务 ID。
 * @method string getStatus() 获取任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
 * @method void setErrCode(integer $ErrCode) 设置源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
 * @method string getMessage() 获取源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
 * @method void setMessage(string $Message) 设置源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
 * @method MediaInputInfo getInputInfo() 获取媒体处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputInfo(MediaInputInfo $InputInfo) 设置媒体处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetaData getMetaData() 获取原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActivityResultSet() 获取编排任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityResultSet(array $ActivityResultSet) 设置编排任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScheduleTask extends AbstractModel
{
    /**
     * @var string 编排任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer 源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
     */
    public $ErrCode;

    /**
     * @var string 源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
     */
    public $Message;

    /**
     * @var MediaInputInfo 媒体处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputInfo;

    /**
     * @var MediaMetaData 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var array 编排任务输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityResultSet;

    /**
     * @param string $TaskId 编排任务 ID。
     * @param string $Status 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
     * @param integer $ErrCode 源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
     * @param string $Message 源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
     * @param MediaInputInfo $InputInfo 媒体处理的目标文件信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetaData $MetaData 原始视频的元信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ActivityResultSet 编排任务输出。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("ActivityResultSet",$param) and $param["ActivityResultSet"] !== null) {
            $this->ActivityResultSet = [];
            foreach ($param["ActivityResultSet"] as $key => $value){
                $obj = new ActivityResult();
                $obj->deserialize($value);
                array_push($this->ActivityResultSet, $obj);
            }
        }
    }
}
