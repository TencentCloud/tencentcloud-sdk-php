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
 * CreateProject请求参数结构体
 *
 * @method string getProjectName() 获取项目名称，长度不超过24个字符
 * @method void setProjectName(string $ProjectName) 设置项目名称，长度不超过24个字符
 * @method string getProjectDescription() 获取项目描述，长度不超过120个字符，不填默认为空
 * @method void setProjectDescription(string $ProjectDescription) 设置项目描述，长度不超过120个字符，不填默认为空
 * @method string getPolicyMode() 获取权限模式，black为黑名单，white为白名单，不填默认为black
 * @method void setPolicyMode(string $PolicyMode) 设置权限模式，black为黑名单，white为白名单，不填默认为black
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string 项目名称，长度不超过24个字符
     */
    public $ProjectName;

    /**
     * @var string 项目描述，长度不超过120个字符，不填默认为空
     */
    public $ProjectDescription;

    /**
     * @var string 权限模式，black为黑名单，white为白名单，不填默认为black
     */
    public $PolicyMode;

    /**
     * @param string $ProjectName 项目名称，长度不超过24个字符
     * @param string $ProjectDescription 项目描述，长度不超过120个字符，不填默认为空
     * @param string $PolicyMode 权限模式，black为黑名单，white为白名单，不填默认为black
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
