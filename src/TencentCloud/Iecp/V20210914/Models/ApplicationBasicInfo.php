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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用基本信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getManageUrl() 获取管理URL地址
 * @method void setManageUrl(string $ManageUrl) 设置管理URL地址
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method boolean getAllowVisualModify() 获取是否允许可视化修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowVisualModify(boolean $AllowVisualModify) 设置是否允许可视化修改
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationBasicInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 管理URL地址
     */
    public $ManageUrl;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var boolean 是否允许可视化修改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowVisualModify;

    /**
     * @param string $Name 名称
     * @param string $ManageUrl 管理URL地址
     * @param string $Description 描述信息
     * @param string $CreateTime 创建时间
     * @param boolean $AllowVisualModify 是否允许可视化修改
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ManageUrl",$param) and $param["ManageUrl"] !== null) {
            $this->ManageUrl = $param["ManageUrl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AllowVisualModify",$param) and $param["AllowVisualModify"] !== null) {
            $this->AllowVisualModify = $param["AllowVisualModify"];
        }
    }
}
