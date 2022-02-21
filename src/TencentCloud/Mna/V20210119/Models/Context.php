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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速策略关键数据
 *
 * @method NetworkData getNetworkData() 获取测速数据
 * @method void setNetworkData(NetworkData $NetworkData) 设置测速数据
 * @method ExpectedThreshold getExpectedLowThreshold() 获取用户期望最低门限
 * @method void setExpectedLowThreshold(ExpectedThreshold $ExpectedLowThreshold) 设置用户期望最低门限
 * @method ExpectedThreshold getExpectedHighThreshold() 获取用户期望最高门限
 * @method void setExpectedHighThreshold(ExpectedThreshold $ExpectedHighThreshold) 设置用户期望最高门限
 */
class Context extends AbstractModel
{
    /**
     * @var NetworkData 测速数据
     */
    public $NetworkData;

    /**
     * @var ExpectedThreshold 用户期望最低门限
     */
    public $ExpectedLowThreshold;

    /**
     * @var ExpectedThreshold 用户期望最高门限
     */
    public $ExpectedHighThreshold;

    /**
     * @param NetworkData $NetworkData 测速数据
     * @param ExpectedThreshold $ExpectedLowThreshold 用户期望最低门限
     * @param ExpectedThreshold $ExpectedHighThreshold 用户期望最高门限
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
        if (array_key_exists("NetworkData",$param) and $param["NetworkData"] !== null) {
            $this->NetworkData = new NetworkData();
            $this->NetworkData->deserialize($param["NetworkData"]);
        }

        if (array_key_exists("ExpectedLowThreshold",$param) and $param["ExpectedLowThreshold"] !== null) {
            $this->ExpectedLowThreshold = new ExpectedThreshold();
            $this->ExpectedLowThreshold->deserialize($param["ExpectedLowThreshold"]);
        }

        if (array_key_exists("ExpectedHighThreshold",$param) and $param["ExpectedHighThreshold"] !== null) {
            $this->ExpectedHighThreshold = new ExpectedThreshold();
            $this->ExpectedHighThreshold->deserialize($param["ExpectedHighThreshold"]);
        }
    }
}
