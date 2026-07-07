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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TestModelInputModalities返回参数结构体
 *
 * @method string getModel() 获取<p>探测的模型</p>
 * @method void setModel(string $Model) 设置<p>探测的模型</p>
 * @method array getSupportedModalities() 获取<p>该模型确认支持的输入模态列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>收到上游大模型对于输入模态的响应即为“确认支持”</p>
 * @method void setSupportedModalities(array $SupportedModalities) 设置<p>该模型确认支持的输入模态列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>收到上游大模型对于输入模态的响应即为“确认支持”</p>
 * @method array getProbeDetails() 获取<p>每个待探测模态的详细请求结果</p>
 * @method void setProbeDetails(array $ProbeDetails) 设置<p>每个待探测模态的详细请求结果</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TestModelInputModalitiesResponse extends AbstractModel
{
    /**
     * @var string <p>探测的模型</p>
     */
    public $Model;

    /**
     * @var array <p>该模型确认支持的输入模态列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>收到上游大模型对于输入模态的响应即为“确认支持”</p>
     */
    public $SupportedModalities;

    /**
     * @var array <p>每个待探测模态的详细请求结果</p>
     */
    public $ProbeDetails;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Model <p>探测的模型</p>
     * @param array $SupportedModalities <p>该模型确认支持的输入模态列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>收到上游大模型对于输入模态的响应即为“确认支持”</p>
     * @param array $ProbeDetails <p>每个待探测模态的详细请求结果</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("SupportedModalities",$param) and $param["SupportedModalities"] !== null) {
            $this->SupportedModalities = $param["SupportedModalities"];
        }

        if (array_key_exists("ProbeDetails",$param) and $param["ProbeDetails"] !== null) {
            $this->ProbeDetails = [];
            foreach ($param["ProbeDetails"] as $key => $value){
                $obj = new ModalityProbeDetail();
                $obj->deserialize($value);
                array_push($this->ProbeDetails, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
