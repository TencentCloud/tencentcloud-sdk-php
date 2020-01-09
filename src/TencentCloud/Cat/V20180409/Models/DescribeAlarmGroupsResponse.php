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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取用户名下总的告警接收组数目
 * @method void setTotalCount(integer $TotalCount) 设置用户名下总的告警接收组数目
 * @method array getAlarmGroupInfos() 获取满足条件的告警接收组列表
 * @method void setAlarmGroupInfos(array $AlarmGroupInfos) 设置满足条件的告警接收组列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeAlarmGroups返回参数结构体
 */
class DescribeAlarmGroupsResponse extends AbstractModel
{
    /**
     * @var integer 用户名下总的告警接收组数目
     */
    public $TotalCount;

    /**
     * @var array 满足条件的告警接收组列表
     */
    public $AlarmGroupInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 用户名下总的告警接收组数目
     * @param array $AlarmGroupInfos 满足条件的告警接收组列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("AlarmGroupInfos",$param) and $param["AlarmGroupInfos"] !== null) {
            $this->AlarmGroupInfos = [];
            foreach ($param["AlarmGroupInfos"] as $key => $value){
                $obj = new AlarmGroupInfo();
                $obj->deserialize($value);
                array_push($this->AlarmGroupInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
