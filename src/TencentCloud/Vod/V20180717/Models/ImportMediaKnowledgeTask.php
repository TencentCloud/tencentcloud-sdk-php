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
 * 媒体导入知识库任务
 *
 * @method string getTaskId() 获取<p>任务 ID。</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID。</p>
 * @method string getFileId() 获取<p>媒体文件 ID</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件 ID</p>
 * @method ImportMediaKnowledgeTaskInput getInput() 获取<p>导入知识库任务的输入。</p>
 * @method void setInput(ImportMediaKnowledgeTaskInput $Input) 设置<p>导入知识库任务的输入。</p>
 * @method string getStatus() 获取<p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
 * @method void setStatus(string $Status) 设置<p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
 * @method integer getErrCode() 获取<p>错误码，0 表示成功，其他值表示失败</p>
 * @method void setErrCode(integer $ErrCode) 设置<p>错误码，0 表示成功，其他值表示失败</p>
 * @method string getMessage() 获取<p>错误信息。</p>
 * @method void setMessage(string $Message) 设置<p>错误信息。</p>
 */
class ImportMediaKnowledgeTask extends AbstractModel
{
    /**
     * @var string <p>任务 ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>媒体文件 ID</p>
     */
    public $FileId;

    /**
     * @var ImportMediaKnowledgeTaskInput <p>导入知识库任务的输入。</p>
     */
    public $Input;

    /**
     * @var string <p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
     */
    public $Status;

    /**
     * @var integer <p>错误码，0 表示成功，其他值表示失败</p>
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息。</p>
     */
    public $Message;

    /**
     * @param string $TaskId <p>任务 ID。</p>
     * @param string $FileId <p>媒体文件 ID</p>
     * @param ImportMediaKnowledgeTaskInput $Input <p>导入知识库任务的输入。</p>
     * @param string $Status <p>任务状态，取值：<li>PROCESSING：处理中；</li><li>FINISH：已完成。</li></p>
     * @param integer $ErrCode <p>错误码，0 表示成功，其他值表示失败</p>
     * @param string $Message <p>错误信息。</p>
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new ImportMediaKnowledgeTaskInput();
            $this->Input->deserialize($param["Input"]);
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
    }
}
