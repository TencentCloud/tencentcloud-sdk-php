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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标端为kafka时添加的同步选项字段
 *
 * @method string getDataType() 获取投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium
 * @method void setDataType(string $DataType) 设置投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium
 * @method string getTopicType() 获取同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)
 * @method void setTopicType(string $TopicType) 设置同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)
 * @method string getDDLTopicName() 获取用于存储ddl的topic
 * @method void setDDLTopicName(string $DDLTopicName) 设置用于存储ddl的topic
 * @method array getTopicRules() 获取单topic和自定义topic的描述
 * @method void setTopicRules(array $TopicRules) 设置单topic和自定义topic的描述
 * @method array getDataOption() 获取其他附加信息，对于特定数据类型可设置额外参数，比如针对Canal兼容的功能支持："canalOfficialFormat":"on"表示打开Canal兼容功能，默认不带。
 * @method void setDataOption(array $DataOption) 设置其他附加信息，对于特定数据类型可设置额外参数，比如针对Canal兼容的功能支持："canalOfficialFormat":"on"表示打开Canal兼容功能，默认不带。
 */
class KafkaOption extends AbstractModel
{
    /**
     * @var string 投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium
     */
    public $DataType;

    /**
     * @var string 同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)
     */
    public $TopicType;

    /**
     * @var string 用于存储ddl的topic
     */
    public $DDLTopicName;

    /**
     * @var array 单topic和自定义topic的描述
     */
    public $TopicRules;

    /**
     * @var array 其他附加信息，对于特定数据类型可设置额外参数，比如针对Canal兼容的功能支持："canalOfficialFormat":"on"表示打开Canal兼容功能，默认不带。
     */
    public $DataOption;

    /**
     * @param string $DataType 投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium
     * @param string $TopicType 同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)
     * @param string $DDLTopicName 用于存储ddl的topic
     * @param array $TopicRules 单topic和自定义topic的描述
     * @param array $DataOption 其他附加信息，对于特定数据类型可设置额外参数，比如针对Canal兼容的功能支持："canalOfficialFormat":"on"表示打开Canal兼容功能，默认不带。
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
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("DDLTopicName",$param) and $param["DDLTopicName"] !== null) {
            $this->DDLTopicName = $param["DDLTopicName"];
        }

        if (array_key_exists("TopicRules",$param) and $param["TopicRules"] !== null) {
            $this->TopicRules = [];
            foreach ($param["TopicRules"] as $key => $value){
                $obj = new TopicRule();
                $obj->deserialize($value);
                array_push($this->TopicRules, $obj);
            }
        }

        if (array_key_exists("DataOption",$param) and $param["DataOption"] !== null) {
            $this->DataOption = [];
            foreach ($param["DataOption"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->DataOption, $obj);
            }
        }
    }
}
