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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAreaRegion返回参数结构体
 *
 * @method array getItems() 获取地域列表
 * @method void setItems(array $Items) 设置地域列表
 * @method array getFrontEndRules() 获取前端规则描述
 * @method void setFrontEndRules(array $FrontEndRules) 设置前端规则描述
 * @method array getAvailableWhiteListNames() 获取返回可用的白名单名称
 * @method void setAvailableWhiteListNames(array $AvailableWhiteListNames) 设置返回可用的白名单名称
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAreaRegionResponse extends AbstractModel
{
    /**
     * @var array 地域列表
     */
    public $Items;

    /**
     * @var array 前端规则描述
     */
    public $FrontEndRules;

    /**
     * @var array 返回可用的白名单名称
     */
    public $AvailableWhiteListNames;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Items 地域列表
     * @param array $FrontEndRules 前端规则描述
     * @param array $AvailableWhiteListNames 返回可用的白名单名称
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new RegionAreaInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("FrontEndRules",$param) and $param["FrontEndRules"] !== null) {
            $this->FrontEndRules = [];
            foreach ($param["FrontEndRules"] as $key => $value){
                $obj = new FrontEndRule();
                $obj->deserialize($value);
                array_push($this->FrontEndRules, $obj);
            }
        }

        if (array_key_exists("AvailableWhiteListNames",$param) and $param["AvailableWhiteListNames"] !== null) {
            $this->AvailableWhiteListNames = $param["AvailableWhiteListNames"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
