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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频导出完成事件。
 *
 * @method string getTaskId() 获取任务 Id。
 * @method void setTaskId(string $TaskId) 设置任务 Id。
 * @method string getStatus() 获取任务状态，取值有：
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
 * @method void setStatus(string $Status) 设置任务状态，取值有：
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
 * @method integer getErrCode() 获取错误码，取值有：
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码，取值有：
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method string getErrMsg() 获取错误信息。
 * @method void setErrMsg(string $ErrMsg) 设置错误信息。
 * @method VideoEditProjectOutput getOutput() 获取任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(VideoEditProjectOutput $Output) 设置任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VideoExportCompletedEvent extends AbstractModel
{
    /**
     * @var string 任务 Id。
     */
    public $TaskId;

    /**
     * @var string 任务状态，取值有：
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
     */
    public $Status;

    /**
     * @var integer 错误码，取值有：
<li>0：成功；</li>
<li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误信息。
     */
    public $ErrMsg;

    /**
     * @var VideoEditProjectOutput 任务输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @param string $TaskId 任务 Id。
     * @param string $Status 任务状态，取值有：
<li>SUCCESS：成功；</li>
<li>FAIL：失败。</li>
     * @param integer $ErrCode 错误码，取值有：
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param string $ErrMsg 错误信息。
     * @param VideoEditProjectOutput $Output 任务输出。
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

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new VideoEditProjectOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
