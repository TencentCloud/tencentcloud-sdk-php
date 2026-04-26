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
 * 查询视图主题配置
 *
 * @method string getRegion() 获取<p>日志集与主题所属地域</p><p>参数格式：ap-guangzhou</p><p>同一查询视图内，包含的各个主题需为相同地域</p>
 * @method void setRegion(string $Region) 设置<p>日志集与主题所属地域</p><p>参数格式：ap-guangzhou</p><p>同一查询视图内，包含的各个主题需为相同地域</p>
 * @method string getLogsetId() 获取<p>日志集id</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集id</p>
 * @method string getTopicId() 获取<p>日志主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id</p>
 */
class ViewSearchTopic extends AbstractModel
{
    /**
     * @var string <p>日志集与主题所属地域</p><p>参数格式：ap-guangzhou</p><p>同一查询视图内，包含的各个主题需为相同地域</p>
     */
    public $Region;

    /**
     * @var string <p>日志集id</p>
     */
    public $LogsetId;

    /**
     * @var string <p>日志主题id</p>
     */
    public $TopicId;

    /**
     * @param string $Region <p>日志集与主题所属地域</p><p>参数格式：ap-guangzhou</p><p>同一查询视图内，包含的各个主题需为相同地域</p>
     * @param string $LogsetId <p>日志集id</p>
     * @param string $TopicId <p>日志主题id</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
