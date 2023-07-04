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
 * DescribeKafkaRecharges请求参数结构体
 *
 * @method string getTopicId() 获取日志主题 ID
 * @method void setTopicId(string $TopicId) 设置日志主题 ID
 * @method string getId() 获取导入配置ID
 * @method void setId(string $Id) 设置导入配置ID
 * @method integer getStatus() 获取状态   status 1: 运行中, 2: 暂停...
 * @method void setStatus(integer $Status) 设置状态   status 1: 运行中, 2: 暂停...
 */
class DescribeKafkaRechargesRequest extends AbstractModel
{
    /**
     * @var string 日志主题 ID
     */
    public $TopicId;

    /**
     * @var string 导入配置ID
     */
    public $Id;

    /**
     * @var integer 状态   status 1: 运行中, 2: 暂停...
     */
    public $Status;

    /**
     * @param string $TopicId 日志主题 ID
     * @param string $Id 导入配置ID
     * @param integer $Status 状态   status 1: 运行中, 2: 暂停...
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
