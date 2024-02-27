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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoScaleStrategy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getStrategyType() 获取自动扩缩容规则类型，1表示按负载指标扩缩容，2表示按时间扩缩容。
 * @method void setStrategyType(integer $StrategyType) 设置自动扩缩容规则类型，1表示按负载指标扩缩容，2表示按时间扩缩容。
 * @method array getTimeAutoScaleStrategies() 获取按时间扩缩容的规则。
 * @method void setTimeAutoScaleStrategies(array $TimeAutoScaleStrategies) 设置按时间扩缩容的规则。
 * @method integer getGroupId() 获取伸缩组Id
 * @method void setGroupId(integer $GroupId) 设置伸缩组Id
 */
class ModifyAutoScaleStrategyRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 自动扩缩容规则类型，1表示按负载指标扩缩容，2表示按时间扩缩容。
     */
    public $StrategyType;

    /**
     * @var array 按时间扩缩容的规则。
     */
    public $TimeAutoScaleStrategies;

    /**
     * @var integer 伸缩组Id
     */
    public $GroupId;

    /**
     * @param string $InstanceId 实例ID。
     * @param integer $StrategyType 自动扩缩容规则类型，1表示按负载指标扩缩容，2表示按时间扩缩容。
     * @param array $TimeAutoScaleStrategies 按时间扩缩容的规则。
     * @param integer $GroupId 伸缩组Id
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

        if (array_key_exists("TimeAutoScaleStrategies",$param) and $param["TimeAutoScaleStrategies"] !== null) {
            $this->TimeAutoScaleStrategies = [];
            foreach ($param["TimeAutoScaleStrategies"] as $key => $value){
                $obj = new TimeAutoScaleStrategy();
                $obj->deserialize($value);
                array_push($this->TimeAutoScaleStrategies, $obj);
            }
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
