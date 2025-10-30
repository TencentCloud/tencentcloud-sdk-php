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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用描述
 *
 * @method string getApplicationId() 获取应用分配的appId
 * @method void setApplicationId(string $ApplicationId) 设置应用分配的appId
 * @method string getName() 获取应用中文名
 * @method void setName(string $Name) 设置应用中文名
 * @method string getAddress() 获取应用地址
 * @method void setAddress(string $Address) 设置应用地址
 * @method ApplicationLogo getApplicationLogo() 获取应用logo
 * @method void setApplicationLogo(ApplicationLogo $ApplicationLogo) 设置应用logo
 * @method integer getType() 获取应用类型，0:saas应用 1:平台应用
 * @method void setType(integer $Type) 设置应用类型，0:saas应用 1:平台应用
 * @method string getEnglishName() 获取engine
 * @method void setEnglishName(string $EnglishName) 设置engine
 * @method string getDescription() 获取能源管理应用
 * @method void setDescription(string $Description) 设置能源管理应用
 */
class ApplicationInfo extends AbstractModel
{
    /**
     * @var string 应用分配的appId
     */
    public $ApplicationId;

    /**
     * @var string 应用中文名
     */
    public $Name;

    /**
     * @var string 应用地址
     */
    public $Address;

    /**
     * @var ApplicationLogo 应用logo
     */
    public $ApplicationLogo;

    /**
     * @var integer 应用类型，0:saas应用 1:平台应用
     */
    public $Type;

    /**
     * @var string engine
     */
    public $EnglishName;

    /**
     * @var string 能源管理应用
     */
    public $Description;

    /**
     * @param string $ApplicationId 应用分配的appId
     * @param string $Name 应用中文名
     * @param string $Address 应用地址
     * @param ApplicationLogo $ApplicationLogo 应用logo
     * @param integer $Type 应用类型，0:saas应用 1:平台应用
     * @param string $EnglishName engine
     * @param string $Description 能源管理应用
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("ApplicationLogo",$param) and $param["ApplicationLogo"] !== null) {
            $this->ApplicationLogo = new ApplicationLogo();
            $this->ApplicationLogo->deserialize($param["ApplicationLogo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
