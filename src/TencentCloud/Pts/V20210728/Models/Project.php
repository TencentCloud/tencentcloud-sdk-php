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
 * 项目
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getName() 获取项目名
 * @method void setName(string $Name) 设置项目名
 * @method string getDescription() 获取项目描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置项目描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取项目状态
 * @method void setStatus(integer $Status) 设置项目状态
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取修改时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置修改时间
 * @method integer getAppId() 获取App ID
 * @method void setAppId(integer $AppId) 设置App ID
 * @method string getUin() 获取用户ID
 * @method void setUin(string $Uin) 设置用户ID
 * @method string getSubAccountUin() 获取子用户ID
 * @method void setSubAccountUin(string $SubAccountUin) 设置子用户ID
 */
class Project extends AbstractModel
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 标签数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 项目状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 修改时间
     */
    public $UpdatedAt;

    /**
     * @var integer App ID
     */
    public $AppId;

    /**
     * @var string 用户ID
     */
    public $Uin;

    /**
     * @var string 子用户ID
     */
    public $SubAccountUin;

    /**
     * @param string $ProjectId 项目ID
     * @param string $Name 项目名
     * @param string $Description 项目描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 项目状态
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 修改时间
     * @param integer $AppId App ID
     * @param string $Uin 用户ID
     * @param string $SubAccountUin 子用户ID
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpec();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
