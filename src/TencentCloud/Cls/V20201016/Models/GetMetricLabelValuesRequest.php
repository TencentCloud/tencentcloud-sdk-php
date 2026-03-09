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
 * GetMetricLabelValues请求参数结构体
 *
 * @method string getTopicId() 获取<p>时序主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>时序主题id</p>
 * @method string getLabelName() 获取<p>时序label名称</p>
 * @method void setLabelName(string $LabelName) 设置<p>时序label名称</p>
 * @method integer getStart() 获取<p>起始时间</p>
 * @method void setStart(integer $Start) 设置<p>起始时间</p>
 * @method integer getEnd() 获取<p>结束时间</p>
 * @method void setEnd(integer $End) 设置<p>结束时间</p>
 * @method array getMatch() 获取<p>Label匹配规则</p>
 * @method void setMatch(array $Match) 设置<p>Label匹配规则</p>
 */
class GetMetricLabelValuesRequest extends AbstractModel
{
    /**
     * @var string <p>时序主题id</p>
     */
    public $TopicId;

    /**
     * @var string <p>时序label名称</p>
     */
    public $LabelName;

    /**
     * @var integer <p>起始时间</p>
     */
    public $Start;

    /**
     * @var integer <p>结束时间</p>
     */
    public $End;

    /**
     * @var array <p>Label匹配规则</p>
     */
    public $Match;

    /**
     * @param string $TopicId <p>时序主题id</p>
     * @param string $LabelName <p>时序label名称</p>
     * @param integer $Start <p>起始时间</p>
     * @param integer $End <p>结束时间</p>
     * @param array $Match <p>Label匹配规则</p>
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

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}
