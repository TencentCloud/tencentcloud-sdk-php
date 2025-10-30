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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS日志投递配置
 *
 * @method string getTopicOperation() 获取日志主题操作：可选create,reuse。
create:新增日志主题，使用TopicName创建日志主题。
reuse:使用已有日志主题，使用TopicId指定日志主题。
不允许使用已有日志主题且新建日志集的组合。
 * @method void setTopicOperation(string $TopicOperation) 设置日志主题操作：可选create,reuse。
create:新增日志主题，使用TopicName创建日志主题。
reuse:使用已有日志主题，使用TopicId指定日志主题。
不允许使用已有日志主题且新建日志集的组合。
 * @method string getGroupOperation() 获取日志集操作：可选create,reuse。
create:新增日志集，使用GroupName创建日志集。
reuse:使用已有日志集，使用GroupId指定日志集。
不允许使用已有日志主题且新建日志集的组合。
 * @method void setGroupOperation(string $GroupOperation) 设置日志集操作：可选create,reuse。
create:新增日志集，使用GroupName创建日志集。
reuse:使用已有日志集，使用GroupId指定日志集。
不允许使用已有日志主题且新建日志集的组合。
 * @method string getRegion() 获取日志投递地域
 * @method void setRegion(string $Region) 设置日志投递地域
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method string getTopicName() 获取日志主题name
 * @method void setTopicName(string $TopicName) 设置日志主题name
 * @method string getGroupId() 获取日志集id
 * @method void setGroupId(string $GroupId) 设置日志集id
 * @method string getGroupName() 获取日志集name
 * @method void setGroupName(string $GroupName) 设置日志集name
 */
class CLSInfo extends AbstractModel
{
    /**
     * @var string 日志主题操作：可选create,reuse。
create:新增日志主题，使用TopicName创建日志主题。
reuse:使用已有日志主题，使用TopicId指定日志主题。
不允许使用已有日志主题且新建日志集的组合。
     */
    public $TopicOperation;

    /**
     * @var string 日志集操作：可选create,reuse。
create:新增日志集，使用GroupName创建日志集。
reuse:使用已有日志集，使用GroupId指定日志集。
不允许使用已有日志主题且新建日志集的组合。
     */
    public $GroupOperation;

    /**
     * @var string 日志投递地域
     */
    public $Region;

    /**
     * @var string 日志主题id
     */
    public $TopicId;

    /**
     * @var string 日志主题name
     */
    public $TopicName;

    /**
     * @var string 日志集id
     */
    public $GroupId;

    /**
     * @var string 日志集name
     */
    public $GroupName;

    /**
     * @param string $TopicOperation 日志主题操作：可选create,reuse。
create:新增日志主题，使用TopicName创建日志主题。
reuse:使用已有日志主题，使用TopicId指定日志主题。
不允许使用已有日志主题且新建日志集的组合。
     * @param string $GroupOperation 日志集操作：可选create,reuse。
create:新增日志集，使用GroupName创建日志集。
reuse:使用已有日志集，使用GroupId指定日志集。
不允许使用已有日志主题且新建日志集的组合。
     * @param string $Region 日志投递地域
     * @param string $TopicId 日志主题id
     * @param string $TopicName 日志主题name
     * @param string $GroupId 日志集id
     * @param string $GroupName 日志集name
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
        if (array_key_exists("TopicOperation",$param) and $param["TopicOperation"] !== null) {
            $this->TopicOperation = $param["TopicOperation"];
        }

        if (array_key_exists("GroupOperation",$param) and $param["GroupOperation"] !== null) {
            $this->GroupOperation = $param["GroupOperation"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
