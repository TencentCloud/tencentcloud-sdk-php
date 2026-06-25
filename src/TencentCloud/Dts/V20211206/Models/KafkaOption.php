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
 * @method string getDataType() 获取<p>投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium</p>
 * @method void setDataType(string $DataType) 设置<p>投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium</p>
 * @method string getTopicType() 获取<p>同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)</p>
 * @method void setTopicType(string $TopicType) 设置<p>同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)</p>
 * @method string getDDLTopicName() 获取<p>用于存储ddl的topic</p>
 * @method void setDDLTopicName(string $DDLTopicName) 设置<p>用于存储ddl的topic</p>
 * @method array getTopicRules() 获取<p>单topic和自定义topic的描述</p>
 * @method void setTopicRules(array $TopicRules) 设置<p>单topic和自定义topic的描述</p>
 * @method array getDataOption() 获取<p>其他附加信息，对于特定数据类型可设置额外参数。比如针对Canal兼容的功能支持：&quot;canalOfficialFormat&quot;:&quot;on&quot;表示打开Canal兼容功能，默认不带。针对大消息跳过的功能支持：&quot;skipLargeMessage&quot;:&quot;on&quot;表示开启跳过大消息，默认不带；开启时需同时设置&quot;maxMessageSizeMB&quot;为1~100的正整数字符串，表示最大消息大小阈值（MB），超过该大小的消息将被跳过，默认不带。</p>
 * @method void setDataOption(array $DataOption) 设置<p>其他附加信息，对于特定数据类型可设置额外参数。比如针对Canal兼容的功能支持：&quot;canalOfficialFormat&quot;:&quot;on&quot;表示打开Canal兼容功能，默认不带。针对大消息跳过的功能支持：&quot;skipLargeMessage&quot;:&quot;on&quot;表示开启跳过大消息，默认不带；开启时需同时设置&quot;maxMessageSizeMB&quot;为1~100的正整数字符串，表示最大消息大小阈值（MB），超过该大小的消息将被跳过，默认不带。</p>
 */
class KafkaOption extends AbstractModel
{
    /**
     * @var string <p>投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium</p>
     */
    public $DataType;

    /**
     * @var string <p>同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)</p>
     */
    public $TopicType;

    /**
     * @var string <p>用于存储ddl的topic</p>
     */
    public $DDLTopicName;

    /**
     * @var array <p>单topic和自定义topic的描述</p>
     */
    public $TopicRules;

    /**
     * @var array <p>其他附加信息，对于特定数据类型可设置额外参数。比如针对Canal兼容的功能支持：&quot;canalOfficialFormat&quot;:&quot;on&quot;表示打开Canal兼容功能，默认不带。针对大消息跳过的功能支持：&quot;skipLargeMessage&quot;:&quot;on&quot;表示开启跳过大消息，默认不带；开启时需同时设置&quot;maxMessageSizeMB&quot;为1~100的正整数字符串，表示最大消息大小阈值（MB），超过该大小的消息将被跳过，默认不带。</p>
     */
    public $DataOption;

    /**
     * @param string $DataType <p>投递到kafka的数据类型，如Avro,Json,canal-pb,canal-json,debezium</p>
     * @param string $TopicType <p>同步topic策略，如Single（集中投递到单topic）,Multi (自定义topic名称)</p>
     * @param string $DDLTopicName <p>用于存储ddl的topic</p>
     * @param array $TopicRules <p>单topic和自定义topic的描述</p>
     * @param array $DataOption <p>其他附加信息，对于特定数据类型可设置额外参数。比如针对Canal兼容的功能支持：&quot;canalOfficialFormat&quot;:&quot;on&quot;表示打开Canal兼容功能，默认不带。针对大消息跳过的功能支持：&quot;skipLargeMessage&quot;:&quot;on&quot;表示开启跳过大消息，默认不带；开启时需同时设置&quot;maxMessageSizeMB&quot;为1~100的正整数字符串，表示最大消息大小阈值（MB），超过该大小的消息将被跳过，默认不带。</p>
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
