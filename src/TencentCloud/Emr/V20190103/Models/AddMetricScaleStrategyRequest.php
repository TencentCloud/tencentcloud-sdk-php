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
 * AddMetricScaleStrategy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getStrategyType() 获取1表示按负载规则扩缩容，2表示按时间规则扩缩容。必须填写，并且和下面的规则策略匹配
 * @method void setStrategyType(integer $StrategyType) 设置1表示按负载规则扩缩容，2表示按时间规则扩缩容。必须填写，并且和下面的规则策略匹配
 * @method LoadAutoScaleStrategy getLoadAutoScaleStrategy() 获取按负载扩容的规则。
 * @method void setLoadAutoScaleStrategy(LoadAutoScaleStrategy $LoadAutoScaleStrategy) 设置按负载扩容的规则。
 * @method TimeAutoScaleStrategy getTimeAutoScaleStrategy() 获取按时间扩缩容的规则。
 * @method void setTimeAutoScaleStrategy(TimeAutoScaleStrategy $TimeAutoScaleStrategy) 设置按时间扩缩容的规则。
 */
class AddMetricScaleStrategyRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 1表示按负载规则扩缩容，2表示按时间规则扩缩容。必须填写，并且和下面的规则策略匹配
     */
    public $StrategyType;

    /**
     * @var LoadAutoScaleStrategy 按负载扩容的规则。
     */
    public $LoadAutoScaleStrategy;

    /**
     * @var TimeAutoScaleStrategy 按时间扩缩容的规则。
     */
    public $TimeAutoScaleStrategy;

    /**
     * @param string $InstanceId 实例ID。
     * @param integer $StrategyType 1表示按负载规则扩缩容，2表示按时间规则扩缩容。必须填写，并且和下面的规则策略匹配
     * @param LoadAutoScaleStrategy $LoadAutoScaleStrategy 按负载扩容的规则。
     * @param TimeAutoScaleStrategy $TimeAutoScaleStrategy 按时间扩缩容的规则。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("LoadAutoScaleStrategy",$param) and $param["LoadAutoScaleStrategy"] !== null) {
            $this->LoadAutoScaleStrategy = new LoadAutoScaleStrategy();
            $this->LoadAutoScaleStrategy->deserialize($param["LoadAutoScaleStrategy"]);
        }

        if (array_key_exists("TimeAutoScaleStrategy",$param) and $param["TimeAutoScaleStrategy"] !== null) {
            $this->TimeAutoScaleStrategy = new TimeAutoScaleStrategy();
            $this->TimeAutoScaleStrategy->deserialize($param["TimeAutoScaleStrategy"]);
        }
    }
}
