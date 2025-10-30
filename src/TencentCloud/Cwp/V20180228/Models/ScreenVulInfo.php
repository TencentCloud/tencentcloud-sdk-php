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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏漏洞列表
 *
 * @method integer getId() 获取漏洞事件id
 * @method void setId(integer $Id) 设置漏洞事件id
 * @method string getName() 获取漏洞名
 * @method void setName(string $Name) 设置漏洞名
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getLastTime() 获取最后检测时间
 * @method void setLastTime(string $LastTime) 设置最后检测时间
 * @method integer getLevel() 获取漏洞等级 1:低 2:中 3:高 4:提示
 * @method void setLevel(integer $Level) 设置漏洞等级 1:低 2:中 3:高 4:提示
 * @method integer getCategory() 获取漏洞类型 1: web-cms漏洞, 2:应用漏洞, 4: Linux软件漏洞, 5: Windows系统漏洞
 * @method void setCategory(integer $Category) 设置漏洞类型 1: web-cms漏洞, 2:应用漏洞, 4: Linux软件漏洞, 5: Windows系统漏洞
 * @method string getUuid() 获取主机UUID
 * @method void setUuid(string $Uuid) 设置主机UUID
 */
class ScreenVulInfo extends AbstractModel
{
    /**
     * @var integer 漏洞事件id
     */
    public $Id;

    /**
     * @var string 漏洞名
     */
    public $Name;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 最后检测时间
     */
    public $LastTime;

    /**
     * @var integer 漏洞等级 1:低 2:中 3:高 4:提示
     */
    public $Level;

    /**
     * @var integer 漏洞类型 1: web-cms漏洞, 2:应用漏洞, 4: Linux软件漏洞, 5: Windows系统漏洞
     */
    public $Category;

    /**
     * @var string 主机UUID
     */
    public $Uuid;

    /**
     * @param integer $Id 漏洞事件id
     * @param string $Name 漏洞名
     * @param integer $VulId 漏洞id
     * @param string $LastTime 最后检测时间
     * @param integer $Level 漏洞等级 1:低 2:中 3:高 4:提示
     * @param integer $Category 漏洞类型 1: web-cms漏洞, 2:应用漏洞, 4: Linux软件漏洞, 5: Windows系统漏洞
     * @param string $Uuid 主机UUID
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

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
