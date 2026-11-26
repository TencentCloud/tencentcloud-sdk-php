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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGroup返回实体
 *
 * @method string getGroup() 获取<p>消费分组名称</p>
 * @method void setGroup(string $Group) 设置<p>消费分组名称</p>
 * @method string getProtocol() 获取<p>该 group 使用的协议。</p>
 * @method void setProtocol(string $Protocol) 设置<p>该 group 使用的协议。</p>
 */
class DescribeGroup extends AbstractModel
{
    /**
     * @var string <p>消费分组名称</p>
     */
    public $Group;

    /**
     * @var string <p>该 group 使用的协议。</p>
     */
    public $Protocol;

    /**
     * @param string $Group <p>消费分组名称</p>
     * @param string $Protocol <p>该 group 使用的协议。</p>
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
