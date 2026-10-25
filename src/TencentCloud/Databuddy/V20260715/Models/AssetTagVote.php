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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产标签投票记录
 *
 * @method string getId() 获取主键ID
 * @method void setId(string $Id) 设置主键ID
 * @method string getPropertyType() 获取资产类型，取值参考AssetType定义，如CATALOG、SCHEMA、TABLE、VIEW、MODEL、VOLUME、FUNCTION等
 * @method void setPropertyType(string $PropertyType) 设置资产类型，取值参考AssetType定义，如CATALOG、SCHEMA、TABLE、VIEW、MODEL、VOLUME、FUNCTION等
 * @method string getPropertyId() 获取资产ID
 * @method void setPropertyId(string $PropertyId) 设置资产ID
 * @method string getLabelId() 获取标签ID
 * @method void setLabelId(string $LabelId) 设置标签ID
 * @method string getLabelName() 获取标签名称
 * @method void setLabelName(string $LabelName) 设置标签名称
 * @method string getLabelValueId() 获取标签值ID
 * @method void setLabelValueId(string $LabelValueId) 设置标签值ID
 * @method string getLabelValue() 获取标签值
 * @method void setLabelValue(string $LabelValue) 设置标签值
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method string getModifier() 获取修改者
 * @method void setModifier(string $Modifier) 设置修改者
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifiedTime() 获取修改时间
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间
 * @method string getOwnerAccount() 获取所有者账号
 * @method void setOwnerAccount(string $OwnerAccount) 设置所有者账号
 * @method integer getType() 获取标签类型，取值：0=未知，1=治理标签，2=自定义标签，3=属性标签，4=脱敏标签
 * @method void setType(integer $Type) 设置标签类型，取值：0=未知，1=治理标签，2=自定义标签，3=属性标签，4=脱敏标签
 * @method boolean getDeleted() 获取是否删除
 * @method void setDeleted(boolean $Deleted) 设置是否删除
 */
class AssetTagVote extends AbstractModel
{
    /**
     * @var string 主键ID
     */
    public $Id;

    /**
     * @var string 资产类型，取值参考AssetType定义，如CATALOG、SCHEMA、TABLE、VIEW、MODEL、VOLUME、FUNCTION等
     */
    public $PropertyType;

    /**
     * @var string 资产ID
     */
    public $PropertyId;

    /**
     * @var string 标签ID
     */
    public $LabelId;

    /**
     * @var string 标签名称
     */
    public $LabelName;

    /**
     * @var string 标签值ID
     */
    public $LabelValueId;

    /**
     * @var string 标签值
     */
    public $LabelValue;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var string 修改者
     */
    public $Modifier;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifiedTime;

    /**
     * @var string 所有者账号
     */
    public $OwnerAccount;

    /**
     * @var integer 标签类型，取值：0=未知，1=治理标签，2=自定义标签，3=属性标签，4=脱敏标签
     */
    public $Type;

    /**
     * @var boolean 是否删除
     */
    public $Deleted;

    /**
     * @param string $Id 主键ID
     * @param string $PropertyType 资产类型，取值参考AssetType定义，如CATALOG、SCHEMA、TABLE、VIEW、MODEL、VOLUME、FUNCTION等
     * @param string $PropertyId 资产ID
     * @param string $LabelId 标签ID
     * @param string $LabelName 标签名称
     * @param string $LabelValueId 标签值ID
     * @param string $LabelValue 标签值
     * @param string $Creator 创建人
     * @param string $Modifier 修改者
     * @param string $CreateTime 创建时间
     * @param string $ModifiedTime 修改时间
     * @param string $OwnerAccount 所有者账号
     * @param integer $Type 标签类型，取值：0=未知，1=治理标签，2=自定义标签，3=属性标签，4=脱敏标签
     * @param boolean $Deleted 是否删除
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

        if (array_key_exists("PropertyType",$param) and $param["PropertyType"] !== null) {
            $this->PropertyType = $param["PropertyType"];
        }

        if (array_key_exists("PropertyId",$param) and $param["PropertyId"] !== null) {
            $this->PropertyId = $param["PropertyId"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelValueId",$param) and $param["LabelValueId"] !== null) {
            $this->LabelValueId = $param["LabelValueId"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }
    }
}
