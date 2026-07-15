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
 * dspm数据识别分级组列表项
 *
 * @method integer getId() 获取<p>级别组id</p>
 * @method void setId(integer $Id) 设置<p>级别组id</p>
 * @method string getName() 获取<p>级别组名称</p>
 * @method void setName(string $Name) 设置<p>级别组名称</p>
 * @method string getDescription() 获取<p>级别组描述</p>
 * @method void setDescription(string $Description) 设置<p>级别组描述</p>
 * @method integer getType() 获取<p>级别组类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method void setType(integer $Type) 设置<p>级别组类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
 * @method array getLevelItems() 获取<p>级别信息</p>
 * @method void setLevelItems(array $LevelItems) 设置<p>级别信息</p>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method array getComplianceRelations() 获取<p>关联的识别模板信息</p>
 * @method void setComplianceRelations(array $ComplianceRelations) 设置<p>关联的识别模板信息</p>
 */
class DspmIdentifyLevelGroupItem extends AbstractModel
{
    /**
     * @var integer <p>级别组id</p>
     */
    public $Id;

    /**
     * @var string <p>级别组名称</p>
     */
    public $Name;

    /**
     * @var string <p>级别组描述</p>
     */
    public $Description;

    /**
     * @var integer <p>级别组类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     */
    public $Type;

    /**
     * @var array <p>级别信息</p>
     */
    public $LevelItems;

    /**
     * @var string <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>关联的识别模板信息</p>
     */
    public $ComplianceRelations;

    /**
     * @param integer $Id <p>级别组id</p>
     * @param string $Name <p>级别组名称</p>
     * @param string $Description <p>级别组描述</p>
     * @param integer $Type <p>级别组类型</p><p>枚举值：</p><ul><li>0： 内置</li><li>1： 自定义</li></ul>
     * @param array $LevelItems <p>级别信息</p>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param array $ComplianceRelations <p>关联的识别模板信息</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LevelItems",$param) and $param["LevelItems"] !== null) {
            $this->LevelItems = [];
            foreach ($param["LevelItems"] as $key => $value){
                $obj = new DspmIdentifyLevelItem();
                $obj->deserialize($value);
                array_push($this->LevelItems, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ComplianceRelations",$param) and $param["ComplianceRelations"] !== null) {
            $this->ComplianceRelations = [];
            foreach ($param["ComplianceRelations"] as $key => $value){
                $obj = new DspmIdentifyRefComplianceInfo();
                $obj->deserialize($value);
                array_push($this->ComplianceRelations, $obj);
            }
        }
    }
}
