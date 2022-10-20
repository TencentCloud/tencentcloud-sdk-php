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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灰度项目配置
 *
 * @method string getProjectName() 获取灰度项目名称
 * @method void setProjectName(string $ProjectName) 设置灰度项目名称
 * @method boolean getStatus() 获取true：正在灰度，false：不在灰度
 * @method void setStatus(boolean $Status) 设置true：正在灰度，false：不在灰度
 */
class ABTestConfig extends AbstractModel
{
    /**
     * @var string 灰度项目名称
     */
    public $ProjectName;

    /**
     * @var boolean true：正在灰度，false：不在灰度
     */
    public $Status;

    /**
     * @param string $ProjectName 灰度项目名称
     * @param boolean $Status true：正在灰度，false：不在灰度
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
