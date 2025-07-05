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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kafka投递的topic和path的信息
 *
 * @method string getTopic() 获取投递kafka的topic
 * @method void setTopic(string $Topic) 设置投递kafka的topic
 * @method array getPath() 获取采集日志的path
 * @method void setPath(array $Path) 设置采集日志的path
 * @method string getLineRule() 获取default，默认换行符分行
time，按时间分行
custom, 选了custom那么CustomRule就要填入具体的自定义值
 * @method void setLineRule(string $LineRule) 设置default，默认换行符分行
time，按时间分行
custom, 选了custom那么CustomRule就要填入具体的自定义值
 * @method string getCustomRule() 获取自定义的分行值
 * @method void setCustomRule(string $CustomRule) 设置自定义的分行值
 */
class DeliveryKafkaInfo extends AbstractModel
{
    /**
     * @var string 投递kafka的topic
     */
    public $Topic;

    /**
     * @var array 采集日志的path
     */
    public $Path;

    /**
     * @var string default，默认换行符分行
time，按时间分行
custom, 选了custom那么CustomRule就要填入具体的自定义值
     */
    public $LineRule;

    /**
     * @var string 自定义的分行值
     */
    public $CustomRule;

    /**
     * @param string $Topic 投递kafka的topic
     * @param array $Path 采集日志的path
     * @param string $LineRule default，默认换行符分行
time，按时间分行
custom, 选了custom那么CustomRule就要填入具体的自定义值
     * @param string $CustomRule 自定义的分行值
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
        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("LineRule",$param) and $param["LineRule"] !== null) {
            $this->LineRule = $param["LineRule"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = $param["CustomRule"];
        }
    }
}
