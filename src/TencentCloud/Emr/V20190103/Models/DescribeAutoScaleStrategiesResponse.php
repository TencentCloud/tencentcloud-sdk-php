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
 * DescribeAutoScaleStrategies返回参数结构体
 *
 * @method array getLoadAutoScaleStrategies() 获取按负载伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadAutoScaleStrategies(array $LoadAutoScaleStrategies) 设置按负载伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTimeBasedAutoScaleStrategies() 获取按时间伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeBasedAutoScaleStrategies(array $TimeBasedAutoScaleStrategies) 设置按时间伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAutoScaleStrategiesResponse extends AbstractModel
{
    /**
     * @var array 按负载伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadAutoScaleStrategies;

    /**
     * @var array 按时间伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeBasedAutoScaleStrategies;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LoadAutoScaleStrategies 按负载伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TimeBasedAutoScaleStrategies 按时间伸缩规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LoadAutoScaleStrategies",$param) and $param["LoadAutoScaleStrategies"] !== null) {
            $this->LoadAutoScaleStrategies = [];
            foreach ($param["LoadAutoScaleStrategies"] as $key => $value){
                $obj = new LoadAutoScaleStrategy();
                $obj->deserialize($value);
                array_push($this->LoadAutoScaleStrategies, $obj);
            }
        }

        if (array_key_exists("TimeBasedAutoScaleStrategies",$param) and $param["TimeBasedAutoScaleStrategies"] !== null) {
            $this->TimeBasedAutoScaleStrategies = [];
            foreach ($param["TimeBasedAutoScaleStrategies"] as $key => $value){
                $obj = new TimeAutoScaleStrategy();
                $obj->deserialize($value);
                array_push($this->TimeBasedAutoScaleStrategies, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
