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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGovernanceLaneGroups请求参数结构体
 *
 * @method string getInstanceId() 获取引擎实例ID
 * @method void setInstanceId(string $InstanceId) 设置引擎实例ID
 * @method array getLaneGroups() 获取泳道组规则列表
 * @method void setLaneGroups(array $LaneGroups) 设置泳道组规则列表
 */
class CreateGovernanceLaneGroupsRequest extends AbstractModel
{
    /**
     * @var string 引擎实例ID
     */
    public $InstanceId;

    /**
     * @var array 泳道组规则列表
     */
    public $LaneGroups;

    /**
     * @param string $InstanceId 引擎实例ID
     * @param array $LaneGroups 泳道组规则列表
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

        if (array_key_exists("LaneGroups",$param) and $param["LaneGroups"] !== null) {
            $this->LaneGroups = [];
            foreach ($param["LaneGroups"] as $key => $value){
                $obj = new GovernanceLaneGroup();
                $obj->deserialize($value);
                array_push($this->LaneGroups, $obj);
            }
        }
    }
}
