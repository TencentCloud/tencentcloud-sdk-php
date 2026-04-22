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
 * Pod亲和性
 *
 * @method array getRequiredDuringSchedulingIgnoredDuringExecution() 获取<p>调度硬关联规则</p>
 * @method void setRequiredDuringSchedulingIgnoredDuringExecution(array $RequiredDuringSchedulingIgnoredDuringExecution) 设置<p>调度硬关联规则</p>
 * @method array getPreferredDuringSchedulingIgnoredDuringExecution() 获取<p>调度软关联规则</p>
 * @method void setPreferredDuringSchedulingIgnoredDuringExecution(array $PreferredDuringSchedulingIgnoredDuringExecution) 设置<p>调度软关联规则</p>
 */
class PodAffinitySpec extends AbstractModel
{
    /**
     * @var array <p>调度硬关联规则</p>
     */
    public $RequiredDuringSchedulingIgnoredDuringExecution;

    /**
     * @var array <p>调度软关联规则</p>
     */
    public $PreferredDuringSchedulingIgnoredDuringExecution;

    /**
     * @param array $RequiredDuringSchedulingIgnoredDuringExecution <p>调度硬关联规则</p>
     * @param array $PreferredDuringSchedulingIgnoredDuringExecution <p>调度软关联规则</p>
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
        if (array_key_exists("RequiredDuringSchedulingIgnoredDuringExecution",$param) and $param["RequiredDuringSchedulingIgnoredDuringExecution"] !== null) {
            $this->RequiredDuringSchedulingIgnoredDuringExecution = [];
            foreach ($param["RequiredDuringSchedulingIgnoredDuringExecution"] as $key => $value){
                $obj = new PodAffinityTerm();
                $obj->deserialize($value);
                array_push($this->RequiredDuringSchedulingIgnoredDuringExecution, $obj);
            }
        }

        if (array_key_exists("PreferredDuringSchedulingIgnoredDuringExecution",$param) and $param["PreferredDuringSchedulingIgnoredDuringExecution"] !== null) {
            $this->PreferredDuringSchedulingIgnoredDuringExecution = [];
            foreach ($param["PreferredDuringSchedulingIgnoredDuringExecution"] as $key => $value){
                $obj = new WeightedPodAffinityTerm();
                $obj->deserialize($value);
                array_push($this->PreferredDuringSchedulingIgnoredDuringExecution, $obj);
            }
        }
    }
}
