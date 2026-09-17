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
 * AI 分析的数据范围。DataScopeType值是CLSLogTopic。DataScopeEntry是数组结构，TopicId类型和Region类型是必填。实例： [{"Key":"TopicId",Value:"work-topic"},{"Key":"Region",Value:"ap-guangzhou"}]
 *
 * @method array getDataScopeEntry() 获取<p>告警AI诊断时查询的数据范围（查询哪些日志主题）</p>
 * @method void setDataScopeEntry(array $DataScopeEntry) 设置<p>告警AI诊断时查询的数据范围（查询哪些日志主题）</p>
 * @method string getDataScopeType() 获取<p>告警AI诊断的数据范围类型</p><p>枚举值：</p><ul><li>CLSLogTopic： 日志主题</li></ul><p>默认值：CLSLogTopic</p>
 * @method void setDataScopeType(string $DataScopeType) 设置<p>告警AI诊断的数据范围类型</p><p>枚举值：</p><ul><li>CLSLogTopic： 日志主题</li></ul><p>默认值：CLSLogTopic</p>
 */
class AIAnalysisDataScope extends AbstractModel
{
    /**
     * @var array <p>告警AI诊断时查询的数据范围（查询哪些日志主题）</p>
     */
    public $DataScopeEntry;

    /**
     * @var string <p>告警AI诊断的数据范围类型</p><p>枚举值：</p><ul><li>CLSLogTopic： 日志主题</li></ul><p>默认值：CLSLogTopic</p>
     */
    public $DataScopeType;

    /**
     * @param array $DataScopeEntry <p>告警AI诊断时查询的数据范围（查询哪些日志主题）</p>
     * @param string $DataScopeType <p>告警AI诊断的数据范围类型</p><p>枚举值：</p><ul><li>CLSLogTopic： 日志主题</li></ul><p>默认值：CLSLogTopic</p>
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
        if (array_key_exists("DataScopeEntry",$param) and $param["DataScopeEntry"] !== null) {
            $this->DataScopeEntry = [];
            foreach ($param["DataScopeEntry"] as $key => $value){
                $obj = new AIAnalysisDataScopeEntry();
                $obj->deserialize($value);
                array_push($this->DataScopeEntry, $obj);
            }
        }

        if (array_key_exists("DataScopeType",$param) and $param["DataScopeType"] !== null) {
            $this->DataScopeType = $param["DataScopeType"];
        }
    }
}
