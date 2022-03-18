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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkGroup请求参数结构体
 *
 * @method string getWorkGroupName() 获取工作组名称
 * @method void setWorkGroupName(string $WorkGroupName) 设置工作组名称
 * @method string getWorkGroupDescription() 获取工作组描述
 * @method void setWorkGroupDescription(string $WorkGroupDescription) 设置工作组描述
 * @method array getPolicySet() 获取工作组绑定的鉴权策略集合
 * @method void setPolicySet(array $PolicySet) 设置工作组绑定的鉴权策略集合
 * @method array getUserIds() 获取需要绑定到工作组的用户Id集合
 * @method void setUserIds(array $UserIds) 设置需要绑定到工作组的用户Id集合
 */
class CreateWorkGroupRequest extends AbstractModel
{
    /**
     * @var string 工作组名称
     */
    public $WorkGroupName;

    /**
     * @var string 工作组描述
     */
    public $WorkGroupDescription;

    /**
     * @var array 工作组绑定的鉴权策略集合
     */
    public $PolicySet;

    /**
     * @var array 需要绑定到工作组的用户Id集合
     */
    public $UserIds;

    /**
     * @param string $WorkGroupName 工作组名称
     * @param string $WorkGroupDescription 工作组描述
     * @param array $PolicySet 工作组绑定的鉴权策略集合
     * @param array $UserIds 需要绑定到工作组的用户Id集合
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
        if (array_key_exists("WorkGroupName",$param) and $param["WorkGroupName"] !== null) {
            $this->WorkGroupName = $param["WorkGroupName"];
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
