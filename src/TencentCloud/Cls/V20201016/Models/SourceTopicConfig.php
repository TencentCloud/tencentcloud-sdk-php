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
 * 源日志主题配置
 *
 * @method integer getTopicFilterType() 获取<p>日志主题筛选方式。</p><p>枚举值：</p><ul><li>1： 静态选择</li></ul>
 * @method void setTopicFilterType(integer $TopicFilterType) 设置<p>日志主题筛选方式。</p><p>枚举值：</p><ul><li>1： 静态选择</li></ul>
 * @method string getLogsetId() 获取<p>源日志集id</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>源日志集id</p>
 * @method array getTopics() 获取<p>源日志主题列表</p><p>TopicFilterType=1时必填</p>
 * @method void setTopics(array $Topics) 设置<p>源日志主题列表</p><p>TopicFilterType=1时必填</p>
 */
class SourceTopicConfig extends AbstractModel
{
    /**
     * @var integer <p>日志主题筛选方式。</p><p>枚举值：</p><ul><li>1： 静态选择</li></ul>
     */
    public $TopicFilterType;

    /**
     * @var string <p>源日志集id</p>
     */
    public $LogsetId;

    /**
     * @var array <p>源日志主题列表</p><p>TopicFilterType=1时必填</p>
     */
    public $Topics;

    /**
     * @param integer $TopicFilterType <p>日志主题筛选方式。</p><p>枚举值：</p><ul><li>1： 静态选择</li></ul>
     * @param string $LogsetId <p>源日志集id</p>
     * @param array $Topics <p>源日志主题列表</p><p>TopicFilterType=1时必填</p>
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
        if (array_key_exists("TopicFilterType",$param) and $param["TopicFilterType"] !== null) {
            $this->TopicFilterType = $param["TopicFilterType"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new SourceTopicInfo();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }
    }
}
