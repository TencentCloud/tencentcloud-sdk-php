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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组解绑输入/输出请求信息。
 *
 * @method string getFlowId() 获取该安全组关联的FlowId。
 * @method void setFlowId(string $FlowId) 设置该安全组关联的FlowId。
 * @method string getInOutId() 获取要解绑的输入/输出ID。
 * @method void setInOutId(string $InOutId) 设置要解绑的输入/输出ID。
 * @method string getInOutType() 获取输入/输出类型，可选值：
Input：输入
Output：输出。
 * @method void setInOutType(string $InOutType) 设置输入/输出类型，可选值：
Input：输入
Output：输出。
 * @method string getFlowRegion() 获取Flow所在的Region，和input共用。
 * @method void setFlowRegion(string $FlowRegion) 设置Flow所在的Region，和input共用。
 */
class UnattachSecurityGroupInOutInfo extends AbstractModel
{
    /**
     * @var string 该安全组关联的FlowId。
     */
    public $FlowId;

    /**
     * @var string 要解绑的输入/输出ID。
     */
    public $InOutId;

    /**
     * @var string 输入/输出类型，可选值：
Input：输入
Output：输出。
     */
    public $InOutType;

    /**
     * @var string Flow所在的Region，和input共用。
     */
    public $FlowRegion;

    /**
     * @param string $FlowId 该安全组关联的FlowId。
     * @param string $InOutId 要解绑的输入/输出ID。
     * @param string $InOutType 输入/输出类型，可选值：
Input：输入
Output：输出。
     * @param string $FlowRegion Flow所在的Region，和input共用。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("InOutId",$param) and $param["InOutId"] !== null) {
            $this->InOutId = $param["InOutId"];
        }

        if (array_key_exists("InOutType",$param) and $param["InOutType"] !== null) {
            $this->InOutType = $param["InOutType"];
        }

        if (array_key_exists("FlowRegion",$param) and $param["FlowRegion"] !== null) {
            $this->FlowRegion = $param["FlowRegion"];
        }
    }
}
