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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡器目标属性
 *
 * @method integer getPort() 获取端口。取值范围为 [1,65535]。作为入参时，该参数必填。
 * @method void setPort(integer $Port) 设置端口。取值范围为 [1,65535]。作为入参时，该参数必填。
 * @method integer getWeight() 获取权重。取值范围为 [0,100]。作为入参时，该参数必填。
 * @method void setWeight(integer $Weight) 设置权重。取值范围为 [0,100]。作为入参时，该参数必填。
 */
class TargetAttribute extends AbstractModel
{
    /**
     * @var integer 端口。取值范围为 [1,65535]。作为入参时，该参数必填。
     */
    public $Port;

    /**
     * @var integer 权重。取值范围为 [0,100]。作为入参时，该参数必填。
     */
    public $Weight;

    /**
     * @param integer $Port 端口。取值范围为 [1,65535]。作为入参时，该参数必填。
     * @param integer $Weight 权重。取值范围为 [0,100]。作为入参时，该参数必填。
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
