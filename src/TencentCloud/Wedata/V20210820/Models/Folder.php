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
 * 文件夹信息
 *
 * @method string getId() 获取文件ID
 * @method void setId(string $Id) 设置文件ID
 * @method string getName() 获取文件夹名称
 * @method void setName(string $Name) 设置文件夹名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getProjectId() 获取所属项目id
 * @method void setProjectId(string $ProjectId) 设置所属项目id
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class Folder extends AbstractModel
{
    /**
     * @var string 文件ID
     */
    public $Id;

    /**
     * @var string 文件夹名称
     */
    public $Name;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 所属项目id
     */
    public $ProjectId;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Id 文件ID
     * @param string $Name 文件夹名称
     * @param string $CreateTime 创建时间
     * @param string $ProjectId 所属项目id
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
