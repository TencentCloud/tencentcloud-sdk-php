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
 * ModifyRoGroupInfo请求参数结构体
 *
 * @method string getRoGroupId() 获取RO 组的 ID。可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
 * @method void setRoGroupId(string $RoGroupId) 设置RO 组的 ID。可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
 * @method RoGroupAttr getRoGroupInfo() 获取RO 组的详细信息。
 * @method void setRoGroupInfo(RoGroupAttr $RoGroupInfo) 设置RO 组的详细信息。
 * @method array getRoWeightValues() 获取RO 组内实例的权重。若修改 RO 组的权重模式为用户自定义模式（custom），则必须设置该参数，且需要设置每个 RO 实例的权重值。RO 实例 ID 可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
 * @method void setRoWeightValues(array $RoWeightValues) 设置RO 组内实例的权重。若修改 RO 组的权重模式为用户自定义模式（custom），则必须设置该参数，且需要设置每个 RO 实例的权重值。RO 实例 ID 可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
 * @method integer getIsBalanceRoLoad() 获取是否重新均衡 RO 组内的 RO 实例的负载。支持值包括：1 - 重新均衡负载；0 - 不重新均衡负载。默认值为 0。注意，设置为重新均衡负载时，RO 组内 RO 实例会有一次数据库连接瞬断，请确保应用程序能重连数据库。
 * @method void setIsBalanceRoLoad(integer $IsBalanceRoLoad) 设置是否重新均衡 RO 组内的 RO 实例的负载。支持值包括：1 - 重新均衡负载；0 - 不重新均衡负载。默认值为 0。注意，设置为重新均衡负载时，RO 组内 RO 实例会有一次数据库连接瞬断，请确保应用程序能重连数据库。
 * @method integer getReplicationDelayTime() 获取废弃参数，无意义。
 * @method void setReplicationDelayTime(integer $ReplicationDelayTime) 设置废弃参数，无意义。
 */
class ModifyRoGroupInfoRequest extends AbstractModel
{
    /**
     * @var string RO 组的 ID。可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
     */
    public $RoGroupId;

    /**
     * @var RoGroupAttr RO 组的详细信息。
     */
    public $RoGroupInfo;

    /**
     * @var array RO 组内实例的权重。若修改 RO 组的权重模式为用户自定义模式（custom），则必须设置该参数，且需要设置每个 RO 实例的权重值。RO 实例 ID 可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
     */
    public $RoWeightValues;

    /**
     * @var integer 是否重新均衡 RO 组内的 RO 实例的负载。支持值包括：1 - 重新均衡负载；0 - 不重新均衡负载。默认值为 0。注意，设置为重新均衡负载时，RO 组内 RO 实例会有一次数据库连接瞬断，请确保应用程序能重连数据库。
     */
    public $IsBalanceRoLoad;

    /**
     * @var integer 废弃参数，无意义。
     * @deprecated
     */
    public $ReplicationDelayTime;

    /**
     * @param string $RoGroupId RO 组的 ID。可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
     * @param RoGroupAttr $RoGroupInfo RO 组的详细信息。
     * @param array $RoWeightValues RO 组内实例的权重。若修改 RO 组的权重模式为用户自定义模式（custom），则必须设置该参数，且需要设置每个 RO 实例的权重值。RO 实例 ID 可通过 [DescribeRoGroups](https://cloud.tencent.com/document/api/236/40939) 接口获取。
     * @param integer $IsBalanceRoLoad 是否重新均衡 RO 组内的 RO 实例的负载。支持值包括：1 - 重新均衡负载；0 - 不重新均衡负载。默认值为 0。注意，设置为重新均衡负载时，RO 组内 RO 实例会有一次数据库连接瞬断，请确保应用程序能重连数据库。
     * @param integer $ReplicationDelayTime 废弃参数，无意义。
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
        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }

        if (array_key_exists("RoGroupInfo",$param) and $param["RoGroupInfo"] !== null) {
            $this->RoGroupInfo = new RoGroupAttr();
            $this->RoGroupInfo->deserialize($param["RoGroupInfo"]);
        }

        if (array_key_exists("RoWeightValues",$param) and $param["RoWeightValues"] !== null) {
            $this->RoWeightValues = [];
            foreach ($param["RoWeightValues"] as $key => $value){
                $obj = new RoWeightValue();
                $obj->deserialize($value);
                array_push($this->RoWeightValues, $obj);
            }
        }

        if (array_key_exists("IsBalanceRoLoad",$param) and $param["IsBalanceRoLoad"] !== null) {
            $this->IsBalanceRoLoad = $param["IsBalanceRoLoad"];
        }

        if (array_key_exists("ReplicationDelayTime",$param) and $param["ReplicationDelayTime"] !== null) {
            $this->ReplicationDelayTime = $param["ReplicationDelayTime"];
        }
    }
}
