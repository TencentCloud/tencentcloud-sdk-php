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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机所属项目
 *
 * @method string getProjectName() 获取<p>项目名</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名</p>
 * @method integer getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目id</p>
 */
class ProjectInfo extends AbstractModel
{
    /**
     * @var string <p>项目名</p>
     */
    public $ProjectName;

    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @param string $ProjectName <p>项目名</p>
     * @param integer $ProjectId <p>项目id</p>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
