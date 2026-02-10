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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱工具日志推送CLS相关配置
 *
 * @method string getTopicId() 获取沙箱工具日志推送所使用的CLS日志主题ID
 * @method void setTopicId(string $TopicId) 设置沙箱工具日志推送所使用的CLS日志主题ID
 */
class CLSConfig extends AbstractModel
{
    /**
     * @var string 沙箱工具日志推送所使用的CLS日志主题ID
     */
    public $TopicId;

    /**
     * @param string $TopicId 沙箱工具日志推送所使用的CLS日志主题ID
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
    }
}
