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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProject请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getName() 获取项目名
 * @method void setName(string $Name) 设置项目名
 * @method string getDescription() 获取项目描述
 * @method void setDescription(string $Description) 设置项目描述
 * @method integer getStatus() 获取项目状态，默认传递1
 * @method void setStatus(integer $Status) 设置项目状态，默认传递1
 * @method array getTags() 获取标签数组
 * @method void setTags(array $Tags) 设置标签数组
 */
class UpdateProjectRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 项目名
     */
    public $Name;

    /**
     * @var string 项目描述
     */
    public $Description;

    /**
     * @var integer 项目状态，默认传递1
     */
    public $Status;

    /**
     * @var array 标签数组
     */
    public $Tags;

    /**
     * @param string $ProjectId 项目ID
     * @param string $Name 项目名
     * @param string $Description 项目描述
     * @param integer $Status 项目状态，默认传递1
     * @param array $Tags 标签数组
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpec();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
