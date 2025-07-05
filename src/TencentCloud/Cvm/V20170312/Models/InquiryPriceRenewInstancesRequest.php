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
 * InquiryPriceRenewInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
 * @method void setInstanceIds(array $InstanceIds) 设置一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
 * @method boolean getDryRun() 获取试运行，测试使用，不执行具体逻辑。取值范围：<br><li>true：跳过执行逻辑</li><li>false：执行逻辑<br><br>默认取值：false。</li>
 * @method void setDryRun(boolean $DryRun) 设置试运行，测试使用，不执行具体逻辑。取值范围：<br><li>true：跳过执行逻辑</li><li>false：执行逻辑<br><br>默认取值：false。</li>
 * @method boolean getRenewPortableDataDisk() 获取是否续费弹性数据盘。取值范围：<br><li>true：表示续费包年包月实例同时续费其挂载的弹性数据盘</li><li>false：表示续费包年包月实例同时不再续费其挂载的弹性数据盘</li><br>默认取值：true。
 * @method void setRenewPortableDataDisk(boolean $RenewPortableDataDisk) 设置是否续费弹性数据盘。取值范围：<br><li>true：表示续费包年包月实例同时续费其挂载的弹性数据盘</li><li>false：表示续费包年包月实例同时不再续费其挂载的弹性数据盘</li><br>默认取值：true。
 */
class InquiryPriceRenewInstancesRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
     */
    public $InstanceIds;

    /**
     * @var InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
     */
    public $InstanceChargePrepaid;

    /**
     * @var boolean 试运行，测试使用，不执行具体逻辑。取值范围：<br><li>true：跳过执行逻辑</li><li>false：执行逻辑<br><br>默认取值：false。</li>
     */
    public $DryRun;

    /**
     * @var boolean 是否续费弹性数据盘。取值范围：<br><li>true：表示续费包年包月实例同时续费其挂载的弹性数据盘</li><li>false：表示续费包年包月实例同时不再续费其挂载的弹性数据盘</li><br>默认取值：true。
     */
    public $RenewPortableDataDisk;

    /**
     * @param array $InstanceIds 一个或多个待操作的实例ID。可通过 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) 接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100。
     * @param InstanceChargePrepaid $InstanceChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数可以指定包年包月实例的续费时长、是否设置自动续费等属性。
     * @param boolean $DryRun 试运行，测试使用，不执行具体逻辑。取值范围：<br><li>true：跳过执行逻辑</li><li>false：执行逻辑<br><br>默认取值：false。</li>
     * @param boolean $RenewPortableDataDisk 是否续费弹性数据盘。取值范围：<br><li>true：表示续费包年包月实例同时续费其挂载的弹性数据盘</li><li>false：表示续费包年包月实例同时不再续费其挂载的弹性数据盘</li><br>默认取值：true。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("RenewPortableDataDisk",$param) and $param["RenewPortableDataDisk"] !== null) {
            $this->RenewPortableDataDisk = $param["RenewPortableDataDisk"];
        }
    }
}
