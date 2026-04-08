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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体任务信息
 *
 * @method integer getIndex() 获取<p>任务序号</p>
 * @method void setIndex(integer $Index) 设置<p>任务序号</p>
 * @method string getContent() 获取<p>任务内容</p>
 * @method void setContent(string $Content) 设置<p>任务内容</p>
 * @method string getStatus() 获取<p>任务状态</p>
 * @method void setStatus(string $Status) 设置<p>任务状态</p>
 */
class AgentTask extends AbstractModel
{
    /**
     * @var integer <p>任务序号</p>
     */
    public $Index;

    /**
     * @var string <p>任务内容</p>
     */
    public $Content;

    /**
     * @var string <p>任务状态</p>
     */
    public $Status;

    /**
     * @param integer $Index <p>任务序号</p>
     * @param string $Content <p>任务内容</p>
     * @param string $Status <p>任务状态</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
