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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSSLStatus请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询双节点、三节点实例 SSL 开通情况，请填写实例 ID 参数进行查询。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询双节点、三节点实例 SSL 开通情况，请填写实例 ID 参数进行查询。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
 * @method string getRoGroupId() 获取只读组 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询只读实例或只读组 SSL 开通情况，请填写 RoGroupId 参数，并注意填写的都是只读组 ID。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
 * @method void setRoGroupId(string $RoGroupId) 设置只读组 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询只读实例或只读组 SSL 开通情况，请填写 RoGroupId 参数，并注意填写的都是只读组 ID。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
 */
class DescribeSSLStatusRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询双节点、三节点实例 SSL 开通情况，请填写实例 ID 参数进行查询。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
     */
    public $InstanceId;

    /**
     * @var string 只读组 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询只读实例或只读组 SSL 开通情况，请填写 RoGroupId 参数，并注意填写的都是只读组 ID。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
     */
    public $RoGroupId;

    /**
     * @param string $InstanceId 实例 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询双节点、三节点实例 SSL 开通情况，请填写实例 ID 参数进行查询。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
     * @param string $RoGroupId 只读组 ID。
说明：实例 ID 和实例组 ID 两个参数选其一填写即可。若要查询只读实例或只读组 SSL 开通情况，请填写 RoGroupId 参数，并注意填写的都是只读组 ID。单节点（云盘）、集群版实例不支持开启 SSL，因此不支持查询。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }
    }
}
