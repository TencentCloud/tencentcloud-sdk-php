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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table、Topic路由
 *
 * @method string getDatabase() 获取库名
 * @method void setDatabase(string $Database) 设置库名
 * @method string getTable() 获取表名，多个表,（逗号）隔开
 * @method void setTable(string $Table) 设置表名，多个表,（逗号）隔开
 * @method string getTopic() 获取Topic名称
 * @method void setTopic(string $Topic) 设置Topic名称
 * @method string getTopicId() 获取Topic ID
 * @method void setTopicId(string $TopicId) 设置Topic ID
 */
class TableMapping extends AbstractModel
{
    /**
     * @var string 库名
     */
    public $Database;

    /**
     * @var string 表名，多个表,（逗号）隔开
     */
    public $Table;

    /**
     * @var string Topic名称
     */
    public $Topic;

    /**
     * @var string Topic ID
     */
    public $TopicId;

    /**
     * @param string $Database 库名
     * @param string $Table 表名，多个表,（逗号）隔开
     * @param string $Topic Topic名称
     * @param string $TopicId Topic ID
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
