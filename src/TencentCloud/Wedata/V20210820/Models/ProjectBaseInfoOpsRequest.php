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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基础信息
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getProjectIdent() 获取项目标识
 * @method void setProjectIdent(string $ProjectIdent) 设置项目标识
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method boolean getIsAdmin() 获取是否admin
 * @method void setIsAdmin(boolean $IsAdmin) 设置是否admin
 */
class ProjectBaseInfoOpsRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 项目标识
     */
    public $ProjectIdent;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var boolean 是否admin
     */
    public $IsAdmin;

    /**
     * @param string $ProjectId 项目Id
     * @param string $ProjectIdent 项目标识
     * @param string $ProjectName 项目名称
     * @param boolean $IsAdmin 是否admin
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

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }
    }
}
