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
 * dspm分类分级模板列表信息
 *
 * @method integer getId() 获取<p>识别模板ID</p>
 * @method void setId(integer $Id) 设置<p>识别模板ID</p>
 * @method string getName() 获取<p>识别模板名称</p>
 * @method void setName(string $Name) 设置<p>识别模板名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method integer getStatus() 获取<p>启用状态</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
 * @method void setStatus(integer $Status) 设置<p>启用状态</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
 * @method integer getType() 获取<p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method void setType(integer $Type) 设置<p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method integer getApplyStatus() 获取<p>应用状态</p><p>枚举值：</p><ul><li>0： 未应用</li><li>1： 应用中</li></ul>
 * @method void setApplyStatus(integer $ApplyStatus) 设置<p>应用状态</p><p>枚举值：</p><ul><li>0： 未应用</li><li>1： 应用中</li></ul>
 */
class DspmIdentifyComplianceItem extends AbstractModel
{
    /**
     * @var integer <p>识别模板ID</p>
     */
    public $Id;

    /**
     * @var string <p>识别模板名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var integer <p>启用状态</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     */
    public $Type;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>应用状态</p><p>枚举值：</p><ul><li>0： 未应用</li><li>1： 应用中</li></ul>
     */
    public $ApplyStatus;

    /**
     * @param integer $Id <p>识别模板ID</p>
     * @param string $Name <p>识别模板名称</p>
     * @param string $Description <p>描述</p>
     * @param integer $Status <p>启用状态</p><p>枚举值：</p><ul><li>0： 不启用</li><li>1： 启用</li></ul>
     * @param integer $Type <p>模板类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     * @param string $UpdateTime <p>更新时间</p>
     * @param integer $ApplyStatus <p>应用状态</p><p>枚举值：</p><ul><li>0： 未应用</li><li>1： 应用中</li></ul>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ApplyStatus",$param) and $param["ApplyStatus"] !== null) {
            $this->ApplyStatus = $param["ApplyStatus"];
        }
    }
}
