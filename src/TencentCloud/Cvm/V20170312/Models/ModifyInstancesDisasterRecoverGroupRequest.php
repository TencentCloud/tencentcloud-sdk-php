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
 * ModifyInstancesDisasterRecoverGroup请求参数结构体
 *
 * @method array getInstanceIds() 获取一个或多个待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100
 * @method void setInstanceIds(array $InstanceIds) 设置一个或多个待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100
 * @method string getDisasterRecoverGroupId() 获取分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取
 * @method boolean getForce() 获取是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false
 * @method void setForce(boolean $Force) 设置是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false
 */
class ModifyInstancesDisasterRecoverGroupRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100
     */
    public $InstanceIds;

    /**
     * @var string 分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取
     */
    public $DisasterRecoverGroupId;

    /**
     * @var boolean 是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false
     */
    public $Force;

    /**
     * @param array $InstanceIds 一个或多个待操作的实例ID。可通过[ DescribeInstances ](https://cloud.tencent.com/document/api/213/15728)接口返回值中的`InstanceId`获取。每次请求批量实例的上限为100
     * @param string $DisasterRecoverGroupId 分散置放群组ID，可使用[DescribeDisasterRecoverGroups](https://cloud.tencent.com/document/api/213/17810)接口获取
     * @param boolean $Force 是否强制更换实例宿主机。取值范围：<br><li>true：表示允许实例更换宿主机，允许重启实例。本地盘子机不支持指定此参数。</li><br><li>false：不允许实例更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li><br><br>默认取值：false
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

        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
