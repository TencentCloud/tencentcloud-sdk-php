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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签选择器
 *
 * @method array getMatchLabels() 获取<p>标签精确匹配条件</p>
 * @method void setMatchLabels(array $MatchLabels) 设置<p>标签精确匹配条件</p>
 * @method array getMatchExpressions() 获取<p>标签表达式匹配条件</p>
 * @method void setMatchExpressions(array $MatchExpressions) 设置<p>标签表达式匹配条件</p>
 */
class LabelSelector extends AbstractModel
{
    /**
     * @var array <p>标签精确匹配条件</p>
     */
    public $MatchLabels;

    /**
     * @var array <p>标签表达式匹配条件</p>
     */
    public $MatchExpressions;

    /**
     * @param array $MatchLabels <p>标签精确匹配条件</p>
     * @param array $MatchExpressions <p>标签表达式匹配条件</p>
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
        if (array_key_exists("MatchLabels",$param) and $param["MatchLabels"] !== null) {
            $this->MatchLabels = [];
            foreach ($param["MatchLabels"] as $key => $value){
                $obj = new StringMap();
                $obj->deserialize($value);
                array_push($this->MatchLabels, $obj);
            }
        }

        if (array_key_exists("MatchExpressions",$param) and $param["MatchExpressions"] !== null) {
            $this->MatchExpressions = [];
            foreach ($param["MatchExpressions"] as $key => $value){
                $obj = new LabelSelectorRequirement();
                $obj->deserialize($value);
                array_push($this->MatchExpressions, $obj);
            }
        }
    }
}
