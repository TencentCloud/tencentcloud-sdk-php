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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件任务状态
 *
 * @method string getFileId() 获取<p>文件id</p>
 * @method void setFileId(string $FileId) 设置<p>文件id</p>
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>0： 处理中</li><li>1： 可用</li><li>-1： 错误</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>0： 处理中</li><li>1： 可用</li><li>-1： 错误</li></ul>
 * @method integer getIsTerminated() 获取<p>是否已拉取过状态</p><p>枚举值：</p><ul><li>0： 未被拉取过状态</li><li>1： 已被拉取过状态</li></ul>
 * @method void setIsTerminated(integer $IsTerminated) 设置<p>是否已拉取过状态</p><p>枚举值：</p><ul><li>0： 未被拉取过状态</li><li>1： 已被拉取过状态</li></ul>
 * @method string getErrorMsg() 获取<p>错误信息，状态-1时不为空</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>错误信息，状态-1时不为空</p>
 */
class FileTaskStatus extends AbstractModel
{
    /**
     * @var string <p>文件id</p>
     */
    public $FileId;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>0： 处理中</li><li>1： 可用</li><li>-1： 错误</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>是否已拉取过状态</p><p>枚举值：</p><ul><li>0： 未被拉取过状态</li><li>1： 已被拉取过状态</li></ul>
     */
    public $IsTerminated;

    /**
     * @var string <p>错误信息，状态-1时不为空</p>
     */
    public $ErrorMsg;

    /**
     * @param string $FileId <p>文件id</p>
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>0： 处理中</li><li>1： 可用</li><li>-1： 错误</li></ul>
     * @param integer $IsTerminated <p>是否已拉取过状态</p><p>枚举值：</p><ul><li>0： 未被拉取过状态</li><li>1： 已被拉取过状态</li></ul>
     * @param string $ErrorMsg <p>错误信息，状态-1时不为空</p>
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsTerminated",$param) and $param["IsTerminated"] !== null) {
            $this->IsTerminated = $param["IsTerminated"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
