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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作区关联的Topic
 *
 * @method string getTopicId() 获取<p>日志主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id</p>
 * @method string getTopicName() 获取<p>日志主题名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>日志主题名称</p>
 * @method string getType() 获取<p>日志主题类型</p><p>枚举值：</p><ul><li>entity： 实体主题</li><li>relation： 关系主题</li><li>ebpf： ebpf采集主题</li></ul>
 * @method void setType(string $Type) 设置<p>日志主题类型</p><p>枚举值：</p><ul><li>entity： 实体主题</li><li>relation： 关系主题</li><li>ebpf： ebpf采集主题</li></ul>
 */
class RelationTopic extends AbstractModel
{
    /**
     * @var string <p>日志主题id</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志主题名称</p>
     */
    public $TopicName;

    /**
     * @var string <p>日志主题类型</p><p>枚举值：</p><ul><li>entity： 实体主题</li><li>relation： 关系主题</li><li>ebpf： ebpf采集主题</li></ul>
     */
    public $Type;

    /**
     * @param string $TopicId <p>日志主题id</p>
     * @param string $TopicName <p>日志主题名称</p>
     * @param string $Type <p>日志主题类型</p><p>枚举值：</p><ul><li>entity： 实体主题</li><li>relation： 关系主题</li><li>ebpf： ebpf采集主题</li></ul>
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
