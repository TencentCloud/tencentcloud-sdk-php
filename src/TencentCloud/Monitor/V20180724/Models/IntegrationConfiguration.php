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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * export 集成配置
 *
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getKind() 获取类型
 * @method void setKind(string $Kind) 设置类型
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 * @method string getCategory() 获取实例类型
 * @method void setCategory(string $Category) 设置实例类型
 * @method string getInstanceDesc() 获取实例描述
 * @method void setInstanceDesc(string $InstanceDesc) 设置实例描述
 * @method string getGrafanaDashboardURL() 获取dashboard 的 URL
 * @method void setGrafanaDashboardURL(string $GrafanaDashboardURL) 设置dashboard 的 URL
 */
class IntegrationConfiguration extends AbstractModel
{
    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 类型
     */
    public $Kind;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @var string 实例类型
     */
    public $Category;

    /**
     * @var string 实例描述
     */
    public $InstanceDesc;

    /**
     * @var string dashboard 的 URL
     */
    public $GrafanaDashboardURL;

    /**
     * @param string $Name 名字
     * @param string $Kind 类型
     * @param string $Content 内容
     * @param integer $Status 状态
     * @param string $Category 实例类型
     * @param string $InstanceDesc 实例描述
     * @param string $GrafanaDashboardURL dashboard 的 URL
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

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("GrafanaDashboardURL",$param) and $param["GrafanaDashboardURL"] !== null) {
            $this->GrafanaDashboardURL = $param["GrafanaDashboardURL"];
        }
    }
}
