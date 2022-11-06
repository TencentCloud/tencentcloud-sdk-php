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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteMachineGroupInfo请求参数结构体
 *
 * @method string getGroupId() 获取机器组ID
 * @method void setGroupId(string $GroupId) 设置机器组ID
 * @method MachineGroupTypeInfo getMachineGroupType() 获取机器组类型
目前type支持 ip 和 label
 * @method void setMachineGroupType(MachineGroupTypeInfo $MachineGroupType) 设置机器组类型
目前type支持 ip 和 label
 */
class DeleteMachineGroupInfoRequest extends AbstractModel
{
    /**
     * @var string 机器组ID
     */
    public $GroupId;

    /**
     * @var MachineGroupTypeInfo 机器组类型
目前type支持 ip 和 label
     */
    public $MachineGroupType;

    /**
     * @param string $GroupId 机器组ID
     * @param MachineGroupTypeInfo $MachineGroupType 机器组类型
目前type支持 ip 和 label
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

        if (array_key_exists("MachineGroupType",$param) and $param["MachineGroupType"] !== null) {
            $this->MachineGroupType = new MachineGroupTypeInfo();
            $this->MachineGroupType->deserialize($param["MachineGroupType"]);
        }
    }
}
