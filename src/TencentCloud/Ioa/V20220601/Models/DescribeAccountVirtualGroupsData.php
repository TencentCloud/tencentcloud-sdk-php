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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列表账户虚拟组分页数据集
 *
 * @method integer getId() 获取<p>id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccountGroupId() 获取<p>分组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountGroupId(integer $AccountGroupId) 设置<p>分组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>账户虚拟组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>账户虚拟组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceType() 获取<p>源类型，手动、自动(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceType(integer $SourceType) 设置<p>源类型，手动、自动(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserTotal() 获取<p>用户总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserTotal(integer $UserTotal) 设置<p>用户总数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItime(string $Itime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUtime() 获取<p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUtime(string $Utime) 设置<p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAccountVirtualGroupsData extends AbstractModel
{
    /**
     * @var integer <p>id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer <p>分组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountGroupId;

    /**
     * @var string <p>账户虚拟组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>源类型，手动、自动(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceType;

    /**
     * @var string <p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var integer <p>用户总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserTotal;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Itime;

    /**
     * @var string <p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Utime;

    /**
     * @param integer $Id <p>id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AccountGroupId <p>分组id(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>账户虚拟组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceType <p>源类型，手动、自动(只支持32位)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo <p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserTotal <p>用户总数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Itime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Utime <p>最后更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("UserTotal",$param) and $param["UserTotal"] !== null) {
            $this->UserTotal = $param["UserTotal"];
        }

        if (array_key_exists("Itime",$param) and $param["Itime"] !== null) {
            $this->Itime = $param["Itime"];
        }

        if (array_key_exists("Utime",$param) and $param["Utime"] !== null) {
            $this->Utime = $param["Utime"];
        }
    }
}
