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
 * 加权pod亲和性项
 *
 * @method integer getWeight() 获取<p>权重</p>
 * @method void setWeight(integer $Weight) 设置<p>权重</p>
 * @method PodAffinityTerm getPodAffinityTerm() 获取<p>pod亲和性条件</p>
 * @method void setPodAffinityTerm(PodAffinityTerm $PodAffinityTerm) 设置<p>pod亲和性条件</p>
 */
class WeightedPodAffinityTerm extends AbstractModel
{
    /**
     * @var integer <p>权重</p>
     */
    public $Weight;

    /**
     * @var PodAffinityTerm <p>pod亲和性条件</p>
     */
    public $PodAffinityTerm;

    /**
     * @param integer $Weight <p>权重</p>
     * @param PodAffinityTerm $PodAffinityTerm <p>pod亲和性条件</p>
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
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PodAffinityTerm",$param) and $param["PodAffinityTerm"] !== null) {
            $this->PodAffinityTerm = new PodAffinityTerm();
            $this->PodAffinityTerm->deserialize($param["PodAffinityTerm"]);
        }
    }
}
