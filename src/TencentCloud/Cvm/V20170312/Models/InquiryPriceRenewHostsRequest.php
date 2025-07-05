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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewHosts请求参数结构体
 *
 * @method array getHostIds() 获取一个或多个待操作的`CDH`实例`ID`。可通过[`DescribeHosts`](https://cloud.tencent.com/document/api/213/16474)接口返回值中的`HostId`获取。每次请求批量实例的上限为100。
 * @method void setHostIds(array $HostIds) 设置一个或多个待操作的`CDH`实例`ID`。可通过[`DescribeHosts`](https://cloud.tencent.com/document/api/213/16474)接口返回值中的`HostId`获取。每次请求批量实例的上限为100。
 * @method ChargePrepaid getHostChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
 * @method void setHostChargePrepaid(ChargePrepaid $HostChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
 * @method boolean getDryRun() 获取是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.false（默认）：发送正常请求，通过检查后直接创建实例
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.false（默认）：发送正常请求，通过检查后直接创建实例
 */
class InquiryPriceRenewHostsRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的`CDH`实例`ID`。可通过[`DescribeHosts`](https://cloud.tencent.com/document/api/213/16474)接口返回值中的`HostId`获取。每次请求批量实例的上限为100。
     */
    public $HostIds;

    /**
     * @var ChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
     */
    public $HostChargePrepaid;

    /**
     * @var boolean 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.false（默认）：发送正常请求，通过检查后直接创建实例
     */
    public $DryRun;

    /**
     * @param array $HostIds 一个或多个待操作的`CDH`实例`ID`。可通过[`DescribeHosts`](https://cloud.tencent.com/document/api/213/16474)接口返回值中的`HostId`获取。每次请求批量实例的上限为100。
     * @param ChargePrepaid $HostChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
     * @param boolean $DryRun 是否只预检此次请求。true：发送检查请求，不会创建实例。检查项包括是否填写了必需参数，请求格式，业务限制和云服务器库存。如果检查不通过，则返回对应错误码；如果检查通过，则返回RequestId.false（默认）：发送正常请求，通过检查后直接创建实例
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
        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostChargePrepaid",$param) and $param["HostChargePrepaid"] !== null) {
            $this->HostChargePrepaid = new ChargePrepaid();
            $this->HostChargePrepaid->deserialize($param["HostChargePrepaid"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
