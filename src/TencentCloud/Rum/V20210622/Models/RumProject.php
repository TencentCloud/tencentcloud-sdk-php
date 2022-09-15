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
 * Rum 项目信息
 *
 * @method string getName() 获取项目名
 * @method void setName(string $Name) 设置项目名
 * @method string getCreator() 获取创建者 id
 * @method void setCreator(string $Creator) 设置创建者 id
 * @method string getInstanceID() 获取实例 id
 * @method void setInstanceID(string $InstanceID) 设置实例 id
 * @method string getType() 获取项目类型
 * @method void setType(string $Type) 设置项目类型
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRepo() 获取项目仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepo(string $Repo) 设置项目仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getURL() 获取项目网址地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURL(string $URL) 设置项目网址地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRate() 获取项目采样频率
 * @method void setRate(string $Rate) 设置项目采样频率
 * @method string getKey() 获取项目唯一key（长度 12 位）
 * @method void setKey(string $Key) 设置项目唯一key（长度 12 位）
 * @method integer getEnableURLGroup() 获取是否开启url聚类
 * @method void setEnableURLGroup(integer $EnableURLGroup) 设置是否开启url聚类
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method integer getID() 获取项目 ID
 * @method void setID(integer $ID) 设置项目 ID
 * @method string getInstanceKey() 获取实例 key
 * @method void setInstanceKey(string $InstanceKey) 设置实例 key
 * @method string getDesc() 获取项目描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置项目描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsStar() 获取是否星标  1:是 0:否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsStar(integer $IsStar) 设置是否星标  1:是 0:否
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectStatus() 获取项目状态(1 创建中，2 运行中，3 异常，4 重启中，5 停止中，6 已停止， 7 销毁中，8 已销毁)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectStatus(integer $ProjectStatus) 设置项目状态(1 创建中，2 运行中，3 异常，4 重启中，5 停止中，6 已停止， 7 销毁中，8 已销毁)
注意：此字段可能返回 null，表示取不到有效值。
 */
class RumProject extends AbstractModel
{
    /**
     * @var string 项目名
     */
    public $Name;

    /**
     * @var string 创建者 id
     */
    public $Creator;

    /**
     * @var string 实例 id
     */
    public $InstanceID;

    /**
     * @var string 项目类型
     */
    public $Type;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 项目仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Repo;

    /**
     * @var string 项目网址地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URL;

    /**
     * @var string 项目采样频率
     */
    public $Rate;

    /**
     * @var string 项目唯一key（长度 12 位）
     */
    public $Key;

    /**
     * @var integer 是否开启url聚类
     */
    public $EnableURLGroup;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var integer 项目 ID
     */
    public $ID;

    /**
     * @var string 实例 key
     */
    public $InstanceKey;

    /**
     * @var string 项目描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var integer 是否星标  1:是 0:否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsStar;

    /**
     * @var integer 项目状态(1 创建中，2 运行中，3 异常，4 重启中，5 停止中，6 已停止， 7 销毁中，8 已销毁)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectStatus;

    /**
     * @param string $Name 项目名
     * @param string $Creator 创建者 id
     * @param string $InstanceID 实例 id
     * @param string $Type 项目类型
     * @param string $CreateTime 创建时间
     * @param string $Repo 项目仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $URL 项目网址地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Rate 项目采样频率
     * @param string $Key 项目唯一key（长度 12 位）
     * @param integer $EnableURLGroup 是否开启url聚类
     * @param string $InstanceName 实例名
     * @param integer $ID 项目 ID
     * @param string $InstanceKey 实例 key
     * @param string $Desc 项目描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsStar 是否星标  1:是 0:否
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectStatus 项目状态(1 创建中，2 运行中，3 异常，4 重启中，5 停止中，6 已停止， 7 销毁中，8 已销毁)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("EnableURLGroup",$param) and $param["EnableURLGroup"] !== null) {
            $this->EnableURLGroup = $param["EnableURLGroup"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("IsStar",$param) and $param["IsStar"] !== null) {
            $this->IsStar = $param["IsStar"];
        }

        if (array_key_exists("ProjectStatus",$param) and $param["ProjectStatus"] !== null) {
            $this->ProjectStatus = $param["ProjectStatus"];
        }
    }
}
