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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLatestAnalyseInfo请求参数结构体
 *
 * @method string getProjectId() 获取项目编号
 * @method void setProjectId(string $ProjectId) 设置项目编号
 * @method string getScriptId() 获取脚本编号
 * @method void setScriptId(string $ScriptId) 设置脚本编号
 * @method boolean getIsOnlyCurrUser() 获取是否只显示当前用户的
 * @method void setIsOnlyCurrUser(boolean $IsOnlyCurrUser) 设置是否只显示当前用户的
 */
class GetLatestAnalyseInfoRequest extends AbstractModel
{
    /**
     * @var string 项目编号
     */
    public $ProjectId;

    /**
     * @var string 脚本编号
     */
    public $ScriptId;

    /**
     * @var boolean 是否只显示当前用户的
     */
    public $IsOnlyCurrUser;

    /**
     * @param string $ProjectId 项目编号
     * @param string $ScriptId 脚本编号
     * @param boolean $IsOnlyCurrUser 是否只显示当前用户的
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

        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("IsOnlyCurrUser",$param) and $param["IsOnlyCurrUser"] !== null) {
            $this->IsOnlyCurrUser = $param["IsOnlyCurrUser"];
        }
    }
}
