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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyPublicIps请求参数结构体
 *
 * @method string getNetworkInstanceId() 获取公网实例 ID（路由发布模式必须为 STATIC ）
 * @method void setNetworkInstanceId(string $NetworkInstanceId) 设置公网实例 ID（路由发布模式必须为 STATIC ）
 * @method integer getCount() 获取申请Ip数量，最小为 1
 * @method void setCount(integer $Count) 设置申请Ip数量，最小为 1
 * @method string getType() 获取申请的Ip类型，枚举值：ipv4、ipv6
 * @method void setType(string $Type) 设置申请的Ip类型，枚举值：ipv4、ipv6
 */
class ApplyPublicIpsRequest extends AbstractModel
{
    /**
     * @var string 公网实例 ID（路由发布模式必须为 STATIC ）
     */
    public $NetworkInstanceId;

    /**
     * @var integer 申请Ip数量，最小为 1
     */
    public $Count;

    /**
     * @var string 申请的Ip类型，枚举值：ipv4、ipv6
     */
    public $Type;

    /**
     * @param string $NetworkInstanceId 公网实例 ID（路由发布模式必须为 STATIC ）
     * @param integer $Count 申请Ip数量，最小为 1
     * @param string $Type 申请的Ip类型，枚举值：ipv4、ipv6
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
