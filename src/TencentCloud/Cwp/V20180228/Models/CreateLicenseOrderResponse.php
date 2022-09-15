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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLicenseOrder返回参数结构体
 *
 * @method array getDealNames() 获取订单号列表
 * @method void setDealNames(array $DealNames) 设置订单号列表
 * @method array getResourceIds() 获取资源ID列表,预付费订单该字段空值
 * @method void setResourceIds(array $ResourceIds) 设置资源ID列表,预付费订单该字段空值
 * @method string getBigDealId() 获取大订单号 , 后付费该字段空值
 * @method void setBigDealId(string $BigDealId) 设置大订单号 , 后付费该字段空值
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateLicenseOrderResponse extends AbstractModel
{
    /**
     * @var array 订单号列表
     */
    public $DealNames;

    /**
     * @var array 资源ID列表,预付费订单该字段空值
     */
    public $ResourceIds;

    /**
     * @var string 大订单号 , 后付费该字段空值
     */
    public $BigDealId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DealNames 订单号列表
     * @param array $ResourceIds 资源ID列表,预付费订单该字段空值
     * @param string $BigDealId 大订单号 , 后付费该字段空值
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
