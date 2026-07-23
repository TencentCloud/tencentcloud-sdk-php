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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音画质检测的LLM大模型AIGC质量检测结果。
 *
 * @method integer getResultCount() 获取<p>检测结果数量。</p>
 * @method void setResultCount(integer $ResultCount) 设置<p>检测结果数量。</p>
 * @method array getResultSet() 获取<p>各检测项结果列表。</p>
 * @method void setResultSet(array $ResultSet) 设置<p>各检测项结果列表。</p>
 */
class QualityInspectLLMDetectionReport extends AbstractModel
{
    /**
     * @var integer <p>检测结果数量。</p>
     */
    public $ResultCount;

    /**
     * @var array <p>各检测项结果列表。</p>
     */
    public $ResultSet;

    /**
     * @param integer $ResultCount <p>检测结果数量。</p>
     * @param array $ResultSet <p>各检测项结果列表。</p>
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
        if (array_key_exists("ResultCount",$param) and $param["ResultCount"] !== null) {
            $this->ResultCount = $param["ResultCount"];
        }

        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = [];
            foreach ($param["ResultSet"] as $key => $value){
                $obj = new QualityInspectLLMDetectionResultItem();
                $obj->deserialize($value);
                array_push($this->ResultSet, $obj);
            }
        }
    }
}
