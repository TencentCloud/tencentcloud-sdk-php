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
 * 主机所属项目
 *
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method integer getProjectID() 获取项目ID
 * @method void setProjectID(integer $ProjectID) 设置项目ID
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var integer 项目ID
     */
    public $ProjectID;

    /**
     * @param string $ProjectName 项目名称
     * @param integer $ProjectID 项目ID
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

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }
    }
}
