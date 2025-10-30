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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * notebook kernel session信息
 *
 * @method string getNotebookSessionId() 获取会话ID
 * @method void setNotebookSessionId(string $NotebookSessionId) 设置会话ID
 * @method string getNotebookSessionName() 获取会话名称
 * @method void setNotebookSessionName(string $NotebookSessionName) 设置会话名称
 */
class NotebookSessionInfo extends AbstractModel
{
    /**
     * @var string 会话ID
     */
    public $NotebookSessionId;

    /**
     * @var string 会话名称
     */
    public $NotebookSessionName;

    /**
     * @param string $NotebookSessionId 会话ID
     * @param string $NotebookSessionName 会话名称
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
        if (array_key_exists("NotebookSessionId",$param) and $param["NotebookSessionId"] !== null) {
            $this->NotebookSessionId = $param["NotebookSessionId"];
        }

        if (array_key_exists("NotebookSessionName",$param) and $param["NotebookSessionName"] !== null) {
            $this->NotebookSessionName = $param["NotebookSessionName"];
        }
    }
}
