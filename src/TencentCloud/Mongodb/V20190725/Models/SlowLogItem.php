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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢日志详情
 *
 * @method string getLog() 获取慢日志详情。
 * @method void setLog(string $Log) 设置慢日志详情。
 * @method string getNodeName() 获取节点名称。
 * @method void setNodeName(string $NodeName) 设置节点名称。
 * @method string getQueryHash() 获取查询哈希值。
 * @method void setQueryHash(string $QueryHash) 设置查询哈希值。
 */
class SlowLogItem extends AbstractModel
{
    /**
     * @var string 慢日志详情。
     */
    public $Log;

    /**
     * @var string 节点名称。
     */
    public $NodeName;

    /**
     * @var string 查询哈希值。
     */
    public $QueryHash;

    /**
     * @param string $Log 慢日志详情。
     * @param string $NodeName 节点名称。
     * @param string $QueryHash 查询哈希值。
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

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("QueryHash",$param) and $param["QueryHash"] !== null) {
            $this->QueryHash = $param["QueryHash"];
        }
    }
}
