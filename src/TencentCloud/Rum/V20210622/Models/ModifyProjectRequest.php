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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProject请求参数结构体
 *
 * @method integer getID() 获取项目 id
 * @method void setID(integer $ID) 设置项目 id
 * @method string getName() 获取项目名(可选，不为空且最长为 200)
 * @method void setName(string $Name) 设置项目名(可选，不为空且最长为 200)
 * @method string getURL() 获取项目网页地址(可选，最长为 256)
 * @method void setURL(string $URL) 设置项目网页地址(可选，最长为 256)
 * @method string getRepo() 获取项目仓库地址(可选，最长为 256)
 * @method void setRepo(string $Repo) 设置项目仓库地址(可选，最长为 256)
 * @method string getInstanceID() 获取项目需要转移到的实例 id(可选)
 * @method void setInstanceID(string $InstanceID) 设置项目需要转移到的实例 id(可选)
 * @method string getRate() 获取项目采样率(可选)
 * @method void setRate(string $Rate) 设置项目采样率(可选)
 * @method integer getEnableURLGroup() 获取是否开启聚类(可选)
 * @method void setEnableURLGroup(integer $EnableURLGroup) 设置是否开启聚类(可选)
 * @method string getType() 获取项目类型(可接受值为 "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method void setType(string $Type) 设置项目类型(可接受值为 "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method string getDesc() 获取项目描述(可选，最长为 1000)
 * @method void setDesc(string $Desc) 设置项目描述(可选，最长为 1000)
 */
class ModifyProjectRequest extends AbstractModel
{
    /**
     * @var integer 项目 id
     */
    public $ID;

    /**
     * @var string 项目名(可选，不为空且最长为 200)
     */
    public $Name;

    /**
     * @var string 项目网页地址(可选，最长为 256)
     */
    public $URL;

    /**
     * @var string 项目仓库地址(可选，最长为 256)
     */
    public $Repo;

    /**
     * @var string 项目需要转移到的实例 id(可选)
     */
    public $InstanceID;

    /**
     * @var string 项目采样率(可选)
     */
    public $Rate;

    /**
     * @var integer 是否开启聚类(可选)
     */
    public $EnableURLGroup;

    /**
     * @var string 项目类型(可接受值为 "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     */
    public $Type;

    /**
     * @var string 项目描述(可选，最长为 1000)
     */
    public $Desc;

    /**
     * @param integer $ID 项目 id
     * @param string $Name 项目名(可选，不为空且最长为 200)
     * @param string $URL 项目网页地址(可选，最长为 256)
     * @param string $Repo 项目仓库地址(可选，最长为 256)
     * @param string $InstanceID 项目需要转移到的实例 id(可选)
     * @param string $Rate 项目采样率(可选)
     * @param integer $EnableURLGroup 是否开启聚类(可选)
     * @param string $Type 项目类型(可接受值为 "web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     * @param string $Desc 项目描述(可选，最长为 1000)
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("EnableURLGroup",$param) and $param["EnableURLGroup"] !== null) {
            $this->EnableURLGroup = $param["EnableURLGroup"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
