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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodeRunLog
 *
 * @method string getLog() 获取<p>节点的日志。</p>
 * @method void setLog(string $Log) 设置<p>节点的日志。</p>
 * @method string getLogRef() 获取<p>节点的日志的完整内容的链接志（当Log内容超过限制的时候才有值）</p>
 * @method void setLogRef(string $LogRef) 设置<p>节点的日志的完整内容的链接志（当Log内容超过限制的时候才有值）</p>
 */
class NodeRunLog extends AbstractModel
{
    /**
     * @var string <p>节点的日志。</p>
     */
    public $Log;

    /**
     * @var string <p>节点的日志的完整内容的链接志（当Log内容超过限制的时候才有值）</p>
     */
    public $LogRef;

    /**
     * @param string $Log <p>节点的日志。</p>
     * @param string $LogRef <p>节点的日志的完整内容的链接志（当Log内容超过限制的时候才有值）</p>
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
        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("LogRef",$param) and $param["LogRef"] !== null) {
            $this->LogRef = $param["LogRef"];
        }
    }
}
