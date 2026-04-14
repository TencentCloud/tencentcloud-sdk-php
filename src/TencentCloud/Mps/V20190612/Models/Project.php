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
 * 剧集项目信息
 *
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method string getProjectName() 获取<p>项目名称</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称</p>
 * @method string getDescription() 获取<p>项目描述</p>
 * @method void setDescription(string $Description) 设置<p>项目描述</p>
 * @method array getTermBase() 获取<p>项目术语库</p>
 * @method void setTermBase(array $TermBase) 设置<p>项目术语库</p>
 * @method array getSpeakers() 获取<p>角色列表</p>
 * @method void setSpeakers(array $Speakers) 设置<p>角色列表</p>
 * @method integer getCreatedAt() 获取<p>创建时间（Unix 时间戳）</p>
 * @method void setCreatedAt(integer $CreatedAt) 设置<p>创建时间（Unix 时间戳）</p>
 * @method integer getUpdatedAt() 获取<p>更新时间（Unix 时间戳）</p>
 * @method void setUpdatedAt(integer $UpdatedAt) 设置<p>更新时间（Unix 时间戳）</p>
 */
class Project extends AbstractModel
{
    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>项目名称</p>
     */
    public $ProjectName;

    /**
     * @var string <p>项目描述</p>
     */
    public $Description;

    /**
     * @var array <p>项目术语库</p>
     */
    public $TermBase;

    /**
     * @var array <p>角色列表</p>
     */
    public $Speakers;

    /**
     * @var integer <p>创建时间（Unix 时间戳）</p>
     */
    public $CreatedAt;

    /**
     * @var integer <p>更新时间（Unix 时间戳）</p>
     */
    public $UpdatedAt;

    /**
     * @param string $ProjectId <p>项目id</p>
     * @param string $ProjectName <p>项目名称</p>
     * @param string $Description <p>项目描述</p>
     * @param array $TermBase <p>项目术语库</p>
     * @param array $Speakers <p>角色列表</p>
     * @param integer $CreatedAt <p>创建时间（Unix 时间戳）</p>
     * @param integer $UpdatedAt <p>更新时间（Unix 时间戳）</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TermBase",$param) and $param["TermBase"] !== null) {
            $this->TermBase = [];
            foreach ($param["TermBase"] as $key => $value){
                $obj = new TermBase();
                $obj->deserialize($value);
                array_push($this->TermBase, $obj);
            }
        }

        if (array_key_exists("Speakers",$param) and $param["Speakers"] !== null) {
            $this->Speakers = [];
            foreach ($param["Speakers"] as $key => $value){
                $obj = new Speakers();
                $obj->deserialize($value);
                array_push($this->Speakers, $obj);
            }
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
