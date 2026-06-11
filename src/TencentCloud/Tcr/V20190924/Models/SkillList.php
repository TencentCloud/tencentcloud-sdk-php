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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询指定实例下的 AI Skill 列表。
 *
 * @method string getSkillName() 获取
 * @method void setSkillName(string $SkillName) 设置
 * @method string getDescription() 获取
 * @method void setDescription(string $Description) 设置
 * @method string getSkillType() 获取
 * @method void setSkillType(string $SkillType) 设置
 * @method array getTags() 获取
 * @method void setTags(array $Tags) 设置
 * @method string getLatestVersion() 获取
 * @method void setLatestVersion(string $LatestVersion) 设置
 * @method string getStatus() 获取
 * @method void setStatus(string $Status) 设置
 * @method string getUpdateTime() 获取
 * @method void setUpdateTime(string $UpdateTime) 设置
 */
class SkillList extends AbstractModel
{
    /**
     * @var string 
     */
    public $SkillName;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var string 
     */
    public $SkillType;

    /**
     * @var array 
     */
    public $Tags;

    /**
     * @var string 
     */
    public $LatestVersion;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $UpdateTime;

    /**
     * @param string $SkillName 
     * @param string $Description 
     * @param string $SkillType 
     * @param array $Tags 
     * @param string $LatestVersion 
     * @param string $Status 
     * @param string $UpdateTime 
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
        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SkillType",$param) and $param["SkillType"] !== null) {
            $this->SkillType = $param["SkillType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
