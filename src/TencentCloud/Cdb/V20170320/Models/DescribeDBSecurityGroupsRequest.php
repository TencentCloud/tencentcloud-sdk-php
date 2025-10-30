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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSecurityGroups请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv或者cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-c1nl9rpv或者cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同。
 * @method boolean getForReadonlyInstance() 获取该值默认为False，表示当传入只读实例ID时，查询操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True。
 * @method void setForReadonlyInstance(boolean $ForReadonlyInstance) 设置该值默认为False，表示当传入只读实例ID时，查询操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True。
 * @method string getOpResourceId() 获取变更集群版实例只读组时，InstanceId传实例id，需要额外指定该参数表示操作只读组。 如果操作读写节点则不需指定该参数。
 * @method void setOpResourceId(string $OpResourceId) 设置变更集群版实例只读组时，InstanceId传实例id，需要额外指定该参数表示操作只读组。 如果操作读写节点则不需指定该参数。
 */
class DescribeDBSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv或者cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var boolean 该值默认为False，表示当传入只读实例ID时，查询操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True。
     */
    public $ForReadonlyInstance;

    /**
     * @var string 变更集群版实例只读组时，InstanceId传实例id，需要额外指定该参数表示操作只读组。 如果操作读写节点则不需指定该参数。
     */
    public $OpResourceId;

    /**
     * @param string $InstanceId 实例ID，格式如：cdb-c1nl9rpv或者cdbro-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同。
     * @param boolean $ForReadonlyInstance 该值默认为False，表示当传入只读实例ID时，查询操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True。
     * @param string $OpResourceId 变更集群版实例只读组时，InstanceId传实例id，需要额外指定该参数表示操作只读组。 如果操作读写节点则不需指定该参数。
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

        if (array_key_exists("ForReadonlyInstance",$param) and $param["ForReadonlyInstance"] !== null) {
            $this->ForReadonlyInstance = $param["ForReadonlyInstance"];
        }

        if (array_key_exists("OpResourceId",$param) and $param["OpResourceId"] !== null) {
            $this->OpResourceId = $param["OpResourceId"];
        }
    }
}
