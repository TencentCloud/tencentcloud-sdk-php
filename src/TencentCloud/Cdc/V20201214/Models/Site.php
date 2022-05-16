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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户站点信息
 *
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method string getSiteId() 获取站点id
 * @method void setSiteId(string $SiteId) 设置站点id
 * @method string getDescription() 获取站点描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置站点描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取站点创建时间
 * @method void setCreateTime(string $CreateTime) 设置站点创建时间
 */
class Site extends AbstractModel
{
    /**
     * @var string 站点名称
     */
    public $Name;

    /**
     * @var string 站点id
     */
    public $SiteId;

    /**
     * @var string 站点描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 站点创建时间
     */
    public $CreateTime;

    /**
     * @param string $Name 站点名称
     * @param string $SiteId 站点id
     * @param string $Description 站点描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 站点创建时间
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

        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
