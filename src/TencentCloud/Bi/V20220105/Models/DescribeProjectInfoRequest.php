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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectInfo请求参数结构体
 *
 * @method integer getId() 获取<p>项目Id</p>
 * @method void setId(integer $Id) 设置<p>项目Id</p>
 * @method integer getDefaultPanelType() 获取<p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
 * @method void setDefaultPanelType(integer $DefaultPanelType) 设置<p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
 */
class DescribeProjectInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>项目Id</p>
     */
    public $Id;

    /**
     * @var integer <p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
     */
    public $DefaultPanelType;

    /**
     * @param integer $Id <p>项目Id</p>
     * @param integer $DefaultPanelType <p>默认看板</p><p>枚举值：</p><ul><li>1： 项目看板</li><li>2： 我的看板</li></ul>
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

        if (array_key_exists("DefaultPanelType",$param) and $param["DefaultPanelType"] !== null) {
            $this->DefaultPanelType = $param["DefaultPanelType"];
        }
    }
}
