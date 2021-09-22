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
 * CreateProject请求参数结构体
 *
 * @method string getName() 获取创建的项目名(不为空且最长为 200)
 * @method void setName(string $Name) 设置创建的项目名(不为空且最长为 200)
 * @method string getInstanceID() 获取业务系统 ID
 * @method void setInstanceID(string $InstanceID) 设置业务系统 ID
 * @method string getRate() 获取项目抽样率(大于等于 0)
 * @method void setRate(string $Rate) 设置项目抽样率(大于等于 0)
 * @method integer getEnableURLGroup() 获取是否开启聚类
 * @method void setEnableURLGroup(integer $EnableURLGroup) 设置是否开启聚类
 * @method string getType() 获取项目类型("web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method void setType(string $Type) 设置项目类型("web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
 * @method string getRepo() 获取项目对应仓库地址(可选，最长为 256)
 * @method void setRepo(string $Repo) 设置项目对应仓库地址(可选，最长为 256)
 * @method string getURL() 获取项目对应网页地址(可选，最长为 256)
 * @method void setURL(string $URL) 设置项目对应网页地址(可选，最长为 256)
 * @method string getDesc() 获取创建的项目描述(可选，最长为 1000)
 * @method void setDesc(string $Desc) 设置创建的项目描述(可选，最长为 1000)
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string 创建的项目名(不为空且最长为 200)
     */
    public $Name;

    /**
     * @var string 业务系统 ID
     */
    public $InstanceID;

    /**
     * @var string 项目抽样率(大于等于 0)
     */
    public $Rate;

    /**
     * @var integer 是否开启聚类
     */
    public $EnableURLGroup;

    /**
     * @var string 项目类型("web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     */
    public $Type;

    /**
     * @var string 项目对应仓库地址(可选，最长为 256)
     */
    public $Repo;

    /**
     * @var string 项目对应网页地址(可选，最长为 256)
     */
    public $URL;

    /**
     * @var string 创建的项目描述(可选，最长为 1000)
     */
    public $Desc;

    /**
     * @param string $Name 创建的项目名(不为空且最长为 200)
     * @param string $InstanceID 业务系统 ID
     * @param string $Rate 项目抽样率(大于等于 0)
     * @param integer $EnableURLGroup 是否开启聚类
     * @param string $Type 项目类型("web", "mp", "android", "ios", "node", "hippy", "weex", "viola", "rn")
     * @param string $Repo 项目对应仓库地址(可选，最长为 256)
     * @param string $URL 项目对应网页地址(可选，最长为 256)
     * @param string $Desc 创建的项目描述(可选，最长为 1000)
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

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
