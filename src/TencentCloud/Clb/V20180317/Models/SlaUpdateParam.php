<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 性能保障变配参数
 *
 * @method string getLoadBalancerId() 获取lb的字符串ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置lb的字符串ID
 * @method string getSlaType() 获取需要变更的性能保障级别
 * @method void setSlaType(string $SlaType) 设置需要变更的性能保障级别
 */
class SlaUpdateParam extends AbstractModel
{
    /**
     * @var string lb的字符串ID
     */
    public $LoadBalancerId;

    /**
     * @var string 需要变更的性能保障级别
     */
    public $SlaType;

    /**
     * @param string $LoadBalancerId lb的字符串ID
     * @param string $SlaType 需要变更的性能保障级别
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }
    }
}
