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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MPS 媒体处理任务信息。
 *
 * @method string getTaskId() 获取任务 ID。
 * @method void setTaskId(string $TaskId) 设置任务 ID。
 * @method string getStatus() 获取任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
 * @method void setErrCode(integer $ErrCode) 设置错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
 * @method string getMessage() 获取错误信息。源异常时返回对应异常 Message，否则请使用各个具体任务的 Message。
 * @method void setMessage(string $Message) 设置错误信息。源异常时返回对应异常 Message，否则请使用各个具体任务的 Message。
 * @method array getSubTaskSet() 获取MPS 视频处理任务。
 * @method void setSubTaskSet(array $SubTaskSet) 设置MPS 视频处理任务。
 */
class ProcessMediaByMPS extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $TaskId;

    /**
     * @var string 任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer 错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
     */
    public $ErrCode;

    /**
     * @var string 错误信息。源异常时返回对应异常 Message，否则请使用各个具体任务的 Message。
     */
    public $Message;

    /**
     * @var array MPS 视频处理任务。
     */
    public $SubTaskSet;

    /**
     * @param string $TaskId 任务 ID。
     * @param string $Status 任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     * @param integer $ErrCode 错误码。源异常时返回非0错误码，返回0时请使用各个具体任务的 ErrCode。
     * @param string $Message 错误信息。源异常时返回对应异常 Message，否则请使用各个具体任务的 Message。
     * @param array $SubTaskSet MPS 视频处理任务。
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

        if (array_key_exists("SubTaskSet",$param) and $param["SubTaskSet"] !== null) {
            $this->SubTaskSet = [];
            foreach ($param["SubTaskSet"] as $key => $value){
                $obj = new MPSSubTaskResult();
                $obj->deserialize($value);
                array_push($this->SubTaskSet, $obj);
            }
        }
    }
}
