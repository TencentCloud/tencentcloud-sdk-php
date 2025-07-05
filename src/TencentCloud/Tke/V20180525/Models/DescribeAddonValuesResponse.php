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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAddonValues返回参数结构体
 *
 * @method string getValues() 获取参数列表，如果addon已安装，会使用已设置的参数和chart里的默认参数做渲染，是一个json格式的字符串，未安装addon时返回为空值。
 * @method void setValues(string $Values) 设置参数列表，如果addon已安装，会使用已设置的参数和chart里的默认参数做渲染，是一个json格式的字符串，未安装addon时返回为空值。
 * @method string getDefaultValues() 获取addon支持的参数列表，值为chart的默认值，是一个json格式的字符串。
 * @method void setDefaultValues(string $DefaultValues) 设置addon支持的参数列表，值为chart的默认值，是一个json格式的字符串。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAddonValuesResponse extends AbstractModel
{
    /**
     * @var string 参数列表，如果addon已安装，会使用已设置的参数和chart里的默认参数做渲染，是一个json格式的字符串，未安装addon时返回为空值。
     */
    public $Values;

    /**
     * @var string addon支持的参数列表，值为chart的默认值，是一个json格式的字符串。
     */
    public $DefaultValues;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Values 参数列表，如果addon已安装，会使用已设置的参数和chart里的默认参数做渲染，是一个json格式的字符串，未安装addon时返回为空值。
     * @param string $DefaultValues addon支持的参数列表，值为chart的默认值，是一个json格式的字符串。
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
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("DefaultValues",$param) and $param["DefaultValues"] !== null) {
            $this->DefaultValues = $param["DefaultValues"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
