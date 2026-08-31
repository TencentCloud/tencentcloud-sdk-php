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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播处理任务信息
 *
 * @method string getTaskId() 获取<p>媒体处理任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>媒体处理任务 ID。</p>
 * @method string getStatus() 获取<p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method void setStatus(string $Status) 设置<p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
 * @method integer getErrCode() 获取<p>错误码，0 表示成功，其他值表示失败。</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码，0 表示成功，其他值表示失败。</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 * @method string getUrl() 获取<p>直播流 URL。</p>
 * @method void setUrl(string $Url) 设置<p>直播流 URL。</p>
 */
class LiveStreamProcessTask extends AbstractModel
{
    /**
     * @var string <p>媒体处理任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     */
    public $Status;

    /**
     * @var integer <p>错误码，0 表示成功，其他值表示失败。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @var string <p>直播流 URL。</p>
     */
    public $Url;

    /**
     * @param string $TaskId <p>媒体处理任务 ID。</p>
     * @param string $Status <p>任务流状态，取值：</p><li>PROCESSING：处理中；</li><li>FINISH：已完成。</li>
     * @param integer $ErrCode <p>错误码，0 表示成功，其他值表示失败。</p>
     * @param string $Message <p>错误信息。</p>
     * @param string $Url <p>直播流 URL。</p>
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
    }
}
