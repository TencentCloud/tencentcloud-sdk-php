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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目信息
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method string getProjectDescription() 获取项目描述
 * @method void setProjectDescription(string $ProjectDescription) 设置项目描述
 * @method string getPolicyMode() 获取项目权限模式，black为黑名单，white为白名单
 * @method void setPolicyMode(string $PolicyMode) 设置项目权限模式，black为黑名单，white为白名单
 * @method string getModifyTime() 获取项目信息修改时间
 * @method void setModifyTime(string $ModifyTime) 设置项目信息修改时间
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var string 项目描述
     */
    public $ProjectDescription;

    /**
     * @var string 项目权限模式，black为黑名单，white为白名单
     */
    public $PolicyMode;

    /**
     * @var string 项目信息修改时间
     */
    public $ModifyTime;

    /**
     * @param string $ProjectId 项目ID
     * @param string $ProjectName 项目名称
     * @param string $ProjectDescription 项目描述
     * @param string $PolicyMode 项目权限模式，black为黑名单，white为白名单
     * @param string $ModifyTime 项目信息修改时间
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ProjectDescription",$param) and $param["ProjectDescription"] !== null) {
            $this->ProjectDescription = $param["ProjectDescription"];
        }

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
