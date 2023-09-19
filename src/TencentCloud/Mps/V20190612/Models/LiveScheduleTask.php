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
 * 直播编排任务信息
 *
 * @method string getTaskId() 获取直播编排任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置直播编排任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrCode() 获取源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取直播流 URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置直播流 URL。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLiveActivityResultSet() 获取直播编排任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveActivityResultSet(array $LiveActivityResultSet) 设置直播编排任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveScheduleTask extends AbstractModel
{
    /**
     * @var string 直播编排任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string 源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 直播流 URL。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var array 直播编排任务输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveActivityResultSet;

    /**
     * @param string $TaskId 直播编排任务 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务流状态，取值：
<li>PROCESSING：处理中；</li>
<li>FINISH：已完成。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrCode 源异常时返回非0错误码，返回0 时请使用各个具体任务的 ErrCode。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 源异常时返回对应异常Message，否则请使用各个具体任务的 Message。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 直播流 URL。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LiveActivityResultSet 直播编排任务输出。
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LiveActivityResultSet",$param) and $param["LiveActivityResultSet"] !== null) {
            $this->LiveActivityResultSet = [];
            foreach ($param["LiveActivityResultSet"] as $key => $value){
                $obj = new LiveActivityResult();
                $obj->deserialize($value);
                array_push($this->LiveActivityResultSet, $obj);
            }
        }
    }
}
