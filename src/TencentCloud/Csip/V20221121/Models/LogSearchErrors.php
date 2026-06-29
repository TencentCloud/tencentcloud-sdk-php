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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志检索错误信息
 *
 * @method string getTopicId() 获取<p>主题</p>
 * @method void setTopicId(string $TopicId) 设置<p>主题</p>
 * @method string getErrorMsg() 获取<p>错误信息</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>错误信息</p>
 * @method string getErrorCodeStr() 获取<p>错误信息</p>
 * @method void setErrorCodeStr(string $ErrorCodeStr) 设置<p>错误信息</p>
 */
class LogSearchErrors extends AbstractModel
{
    /**
     * @var string <p>主题</p>
     */
    public $TopicId;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrorMsg;

    /**
     * @var string <p>错误信息</p>
     */
    public $ErrorCodeStr;

    /**
     * @param string $TopicId <p>主题</p>
     * @param string $ErrorMsg <p>错误信息</p>
     * @param string $ErrorCodeStr <p>错误信息</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("ErrorCodeStr",$param) and $param["ErrorCodeStr"] !== null) {
            $this->ErrorCodeStr = $param["ErrorCodeStr"];
        }
    }
}
