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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线分类基础信息，覆盖父分类与子分类两层。
 *
 * @method integer getID() 获取<p>基线分类 ID。</p>
 * @method void setID(integer $ID) 设置<p>基线分类 ID。</p>
 * @method string getName() 获取<p>基线分类名称（中文）。</p>
 * @method void setName(string $Name) 设置<p>基线分类名称（中文）。</p>
 * @method string getDescription() 获取<p>基线分类描述（中文）。</p>
 * @method void setDescription(string $Description) 设置<p>基线分类描述（中文）。</p>
 * @method string getCheckAssetType() 获取<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) 设置<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 */
class BaselineCategory extends AbstractModel
{
    /**
     * @var integer <p>基线分类 ID。</p>
     */
    public $ID;

    /**
     * @var string <p>基线分类名称（中文）。</p>
     */
    public $Name;

    /**
     * @var string <p>基线分类描述（中文）。</p>
     */
    public $Description;

    /**
     * @var string <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     */
    public $CheckAssetType;

    /**
     * @param integer $ID <p>基线分类 ID。</p>
     * @param string $Name <p>基线分类名称（中文）。</p>
     * @param string $Description <p>基线分类描述（中文）。</p>
     * @param string $CheckAssetType <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }
    }
}
