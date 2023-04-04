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
 * ModifyProject请求参数结构体
 *
 * @method string getProjectId() 获取目标修改项目的项目ID
 * @method void setProjectId(string $ProjectId) 设置目标修改项目的项目ID
 * @method string getProjectName() 获取修改后的项目名称，不填则不修改
 * @method void setProjectName(string $ProjectName) 设置修改后的项目名称，不填则不修改
 * @method string getProjectDescription() 获取修改后的项目描述，不填则不修改
 * @method void setProjectDescription(string $ProjectDescription) 设置修改后的项目描述，不填则不修改
 * @method string getPolicyMode() 获取修改后的权限模式，black为黑名单，white为白名单,不填则不修改
 * @method void setPolicyMode(string $PolicyMode) 设置修改后的权限模式，black为黑名单，white为白名单,不填则不修改
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var string 目标修改项目的项目ID
     */
    public $ProjectId;

    /**
     * @var string 修改后的项目名称，不填则不修改
     */
    public $ProjectName;

    /**
     * @var string 修改后的项目描述，不填则不修改
     */
    public $ProjectDescription;

    /**
     * @var string 修改后的权限模式，black为黑名单，white为白名单,不填则不修改
     */
    public $PolicyMode;

    /**
     * @param string $ProjectId 目标修改项目的项目ID
     * @param string $ProjectName 修改后的项目名称，不填则不修改
     * @param string $ProjectDescription 修改后的项目描述，不填则不修改
     * @param string $PolicyMode 修改后的权限模式，black为黑名单，white为白名单,不填则不修改
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
    }
}
