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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检测长度限制
 *
 * @method array getDetectLengthLimitRules() 获取检测长度限制的规则列表。
 * @method void setDetectLengthLimitRules(array $DetectLengthLimitRules) 设置检测长度限制的规则列表。
 */
class DetectLengthLimitConfig extends AbstractModel
{
    /**
     * @var array 检测长度限制的规则列表。
     */
    public $DetectLengthLimitRules;

    /**
     * @param array $DetectLengthLimitRules 检测长度限制的规则列表。
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
        if (array_key_exists("DetectLengthLimitRules",$param) and $param["DetectLengthLimitRules"] !== null) {
            $this->DetectLengthLimitRules = [];
            foreach ($param["DetectLengthLimitRules"] as $key => $value){
                $obj = new DetectLengthLimitRule();
                $obj->deserialize($value);
                array_push($this->DetectLengthLimitRules, $obj);
            }
        }
    }
}
