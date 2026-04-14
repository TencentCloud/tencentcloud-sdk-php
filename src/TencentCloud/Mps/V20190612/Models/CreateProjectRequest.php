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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject请求参数结构体
 *
 * @method string getProjectName() 获取<p>项目名称</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
 * @method array getTermBase() 获取<p>项目术语表</p>
 * @method void setTermBase(array $TermBase) 设置<p>项目术语表</p>
 * @method string getDescription() 获取<p>项目描述</p>
 * @method void setDescription(string $Description) 设置<p>项目描述</p>
 * @method array getSpeakers() 获取<p>角色列表</p>
 * @method void setSpeakers(array $Speakers) 设置<p>角色列表</p>
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string <p>项目名称</p>
     */
    public $ProjectName;

    /**
     * @var array <p>项目术语表</p>
     */
    public $TermBase;

    /**
     * @var string <p>项目描述</p>
     */
    public $Description;

    /**
     * @var array <p>角色列表</p>
     */
    public $Speakers;

    /**
     * @param string $ProjectName <p>项目名称</p>
     * @param array $TermBase <p>项目术语表</p>
     * @param string $Description <p>项目描述</p>
     * @param array $Speakers <p>角色列表</p>
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

        if (array_key_exists("TermBase",$param) and $param["TermBase"] !== null) {
            $this->TermBase = [];
            foreach ($param["TermBase"] as $key => $value){
                $obj = new TermBase();
                $obj->deserialize($value);
                array_push($this->TermBase, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Speakers",$param) and $param["Speakers"] !== null) {
            $this->Speakers = [];
            foreach ($param["Speakers"] as $key => $value){
                $obj = new Speakers();
                $obj->deserialize($value);
                array_push($this->Speakers, $obj);
            }
        }
    }
}
