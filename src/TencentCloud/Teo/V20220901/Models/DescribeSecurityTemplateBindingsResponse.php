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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityTemplateBindings返回参数结构体
 *
 * @method array getSecurityTemplate() 获取指定策略模板的绑定关系列表。

当某个站点中的域名包含在指定策略模板的绑定关系中时，绑定关系列表 `TemplateScope` 中会包含该站点的 `ZoneId`，和该站点下的和该策略模板有关的域名绑定关系。

注意：当没有任何域名正在绑定或已经绑定到指定策略模板时，绑定关系为空。即：返回结构体中，`TemplateScope` 数组长度为 0。

绑定关系中，同一域名可能在 `EntityStatus` 列表中重复出现，并标记为不同 `Status` 。例如，正在被绑定到其他策略模板的域名，会同时标记为 `online` 和 `pending` 。
 * @method void setSecurityTemplate(array $SecurityTemplate) 设置指定策略模板的绑定关系列表。

当某个站点中的域名包含在指定策略模板的绑定关系中时，绑定关系列表 `TemplateScope` 中会包含该站点的 `ZoneId`，和该站点下的和该策略模板有关的域名绑定关系。

注意：当没有任何域名正在绑定或已经绑定到指定策略模板时，绑定关系为空。即：返回结构体中，`TemplateScope` 数组长度为 0。

绑定关系中，同一域名可能在 `EntityStatus` 列表中重复出现，并标记为不同 `Status` 。例如，正在被绑定到其他策略模板的域名，会同时标记为 `online` 和 `pending` 。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityTemplateBindingsResponse extends AbstractModel
{
    /**
     * @var array 指定策略模板的绑定关系列表。

当某个站点中的域名包含在指定策略模板的绑定关系中时，绑定关系列表 `TemplateScope` 中会包含该站点的 `ZoneId`，和该站点下的和该策略模板有关的域名绑定关系。

注意：当没有任何域名正在绑定或已经绑定到指定策略模板时，绑定关系为空。即：返回结构体中，`TemplateScope` 数组长度为 0。

绑定关系中，同一域名可能在 `EntityStatus` 列表中重复出现，并标记为不同 `Status` 。例如，正在被绑定到其他策略模板的域名，会同时标记为 `online` 和 `pending` 。
     */
    public $SecurityTemplate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SecurityTemplate 指定策略模板的绑定关系列表。

当某个站点中的域名包含在指定策略模板的绑定关系中时，绑定关系列表 `TemplateScope` 中会包含该站点的 `ZoneId`，和该站点下的和该策略模板有关的域名绑定关系。

注意：当没有任何域名正在绑定或已经绑定到指定策略模板时，绑定关系为空。即：返回结构体中，`TemplateScope` 数组长度为 0。

绑定关系中，同一域名可能在 `EntityStatus` 列表中重复出现，并标记为不同 `Status` 。例如，正在被绑定到其他策略模板的域名，会同时标记为 `online` 和 `pending` 。
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
        if (array_key_exists("SecurityTemplate",$param) and $param["SecurityTemplate"] !== null) {
            $this->SecurityTemplate = [];
            foreach ($param["SecurityTemplate"] as $key => $value){
                $obj = new SecurityTemplateBinding();
                $obj->deserialize($value);
                array_push($this->SecurityTemplate, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
