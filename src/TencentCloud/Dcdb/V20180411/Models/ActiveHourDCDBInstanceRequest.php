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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActiveHourDCDBInstance请求参数结构体
 *
 * @method array getInstanceIds() 获取待升级的实例ID列表。形如：["dcdbt-ow728lmc"]，可以通过 DescribeDCDBInstances 查询实例详情获得。
 * @method void setInstanceIds(array $InstanceIds) 设置待升级的实例ID列表。形如：["dcdbt-ow728lmc"]，可以通过 DescribeDCDBInstances 查询实例详情获得。
 */
class ActiveHourDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var array 待升级的实例ID列表。形如：["dcdbt-ow728lmc"]，可以通过 DescribeDCDBInstances 查询实例详情获得。
     */
    public $InstanceIds;

    /**
     * @param array $InstanceIds 待升级的实例ID列表。形如：["dcdbt-ow728lmc"]，可以通过 DescribeDCDBInstances 查询实例详情获得。
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
    }
}
