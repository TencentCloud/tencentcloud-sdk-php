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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * export 集成配置
 *
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getKind() 获取<p>类型</p>
 * @method void setKind(string $Kind) 设置<p>类型</p>
 * @method string getContent() 获取<p>内容</p>
 * @method void setContent(string $Content) 设置<p>内容</p>
 * @method integer getStatus() 获取<p>状态</p>
 * @method void setStatus(integer $Status) 设置<p>状态</p>
 * @method string getCategory() 获取<p>实例类型</p>
 * @method void setCategory(string $Category) 设置<p>实例类型</p>
 * @method string getInstanceDesc() 获取<p>实例描述</p>
 * @method void setInstanceDesc(string $InstanceDesc) 设置<p>实例描述</p>
 * @method string getGrafanaDashboardURL() 获取<p>dashboard 的 URL</p>
 * @method void setGrafanaDashboardURL(string $GrafanaDashboardURL) 设置<p>dashboard 的 URL</p>
 */
class IntegrationConfiguration extends AbstractModel
{
    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>类型</p>
     */
    public $Kind;

    /**
     * @var string <p>内容</p>
     */
    public $Content;

    /**
     * @var integer <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>实例类型</p>
     */
    public $Category;

    /**
     * @var string <p>实例描述</p>
     */
    public $InstanceDesc;

    /**
     * @var string <p>dashboard 的 URL</p>
     */
    public $GrafanaDashboardURL;

    /**
     * @param string $Name <p>名字</p>
     * @param string $Kind <p>类型</p>
     * @param string $Content <p>内容</p>
     * @param integer $Status <p>状态</p>
     * @param string $Category <p>实例类型</p>
     * @param string $InstanceDesc <p>实例描述</p>
     * @param string $GrafanaDashboardURL <p>dashboard 的 URL</p>
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
