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
 * 工作组部分信息
 *
 * @method integer getWorkGroupId() 获取工作组唯一Id
 * @method void setWorkGroupId(integer $WorkGroupId) 设置工作组唯一Id
 * @method string getWorkGroupName() 获取工作组名称
 * @method void setWorkGroupName(string $WorkGroupName) 设置工作组名称
 * @method string getWorkGroupDescription() 获取工作组描述
 * @method void setWorkGroupDescription(string $WorkGroupDescription) 设置工作组描述
 * @method string getCreator() 获取创建者
 * @method void setCreator(string $Creator) 设置创建者
 * @method string getCreateTime() 获取工作组创建的时间，形如2021-07-28 16:19:32
 * @method void setCreateTime(string $CreateTime) 设置工作组创建的时间，形如2021-07-28 16:19:32
 */
class WorkGroupMessage extends AbstractModel
{
    /**
     * @var integer 工作组唯一Id
     */
    public $WorkGroupId;

    /**
     * @var string 工作组名称
     */
    public $WorkGroupName;

    /**
     * @var string 工作组描述
     */
    public $WorkGroupDescription;

    /**
     * @var string 创建者
     */
    public $Creator;

    /**
     * @var string 工作组创建的时间，形如2021-07-28 16:19:32
     */
    public $CreateTime;

    /**
     * @param integer $WorkGroupId 工作组唯一Id
     * @param string $WorkGroupName 工作组名称
     * @param string $WorkGroupDescription 工作组描述
     * @param string $Creator 创建者
     * @param string $CreateTime 工作组创建的时间，形如2021-07-28 16:19:32
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("WorkGroupName",$param) and $param["WorkGroupName"] !== null) {
            $this->WorkGroupName = $param["WorkGroupName"];
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
