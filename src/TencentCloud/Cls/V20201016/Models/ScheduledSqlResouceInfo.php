<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ScheduledSql的资源信息
 *
 * @method string getTopicId() 获取目标主题id
 * @method void setTopicId(string $TopicId) 设置目标主题id
 * @method string getRegion() 获取topic的地域信息
 * @method void setRegion(string $Region) 设置topic的地域信息
 */
class ScheduledSqlResouceInfo extends AbstractModel
{
    /**
     * @var string 目标主题id
     */
    public $TopicId;

    /**
     * @var string topic的地域信息
     */
    public $Region;

    /**
     * @param string $TopicId 目标主题id
     * @param string $Region topic的地域信息
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
