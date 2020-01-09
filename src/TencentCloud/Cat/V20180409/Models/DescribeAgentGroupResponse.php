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
 * @method integer getGroupId() 获取拨测分组Id
 * @method void setGroupId(integer $GroupId) 设置拨测分组Id
 * @method string getGroupName() 获取拨测分组名称
 * @method void setGroupName(string $GroupName) 设置拨测分组名称
 * @method integer getIsDefault() 获取是否为默认拨测分组
 * @method void setIsDefault(integer $IsDefault) 设置是否为默认拨测分组
 * @method integer getTaskNum() 获取使用本拨测分组的任务数
 * @method void setTaskNum(integer $TaskNum) 设置使用本拨测分组的任务数
 * @method array getAgents() 获取拨测分组运营商列表
 * @method void setAgents(array $Agents) 设置拨测分组运营商列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *DescribeAgentGroup返回参数结构体
 */
class DescribeAgentGroupResponse extends AbstractModel
{
    /**
     * @var integer 拨测分组Id
     */
    public $GroupId;

    /**
     * @var string 拨测分组名称
     */
    public $GroupName;

    /**
     * @var integer 是否为默认拨测分组
     */
    public $IsDefault;

    /**
     * @var integer 使用本拨测分组的任务数
     */
    public $TaskNum;

    /**
     * @var array 拨测分组运营商列表
     */
    public $Agents;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param integer $GroupId 拨测分组Id
     * @param string $GroupName 拨测分组名称
     * @param integer $IsDefault 是否为默认拨测分组
     * @param integer $TaskNum 使用本拨测分组的任务数
     * @param array $Agents 拨测分组运营商列表
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("TaskNum",$param) and $param["TaskNum"] !== null) {
            $this->TaskNum = $param["TaskNum"];
        }

        if (array_key_exists("Agents",$param) and $param["Agents"] !== null) {
            $this->Agents = [];
            foreach ($param["Agents"] as $key => $value){
                $obj = new CatAgent();
                $obj->deserialize($value);
                array_push($this->Agents, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
