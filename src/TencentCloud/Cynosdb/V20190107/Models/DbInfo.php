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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库详细信息
 *
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getCharacterSet() 获取字符集类型
 * @method void setCharacterSet(string $CharacterSet) 设置字符集类型
 * @method string getStatus() 获取数据库状态
 * @method void setStatus(string $Status) 设置数据库状态
 * @method string getCollateRule() 获取排序规则
 * @method void setCollateRule(string $CollateRule) 设置排序规则
 * @method string getDescription() 获取数据库备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置数据库备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserHostPrivileges() 获取用户权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserHostPrivileges(array $UserHostPrivileges) 设置用户权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDbId() 获取数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbId(integer $DbId) 设置数据库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取集群Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class DbInfo extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 字符集类型
     */
    public $CharacterSet;

    /**
     * @var string 数据库状态
     */
    public $Status;

    /**
     * @var string 排序规则
     */
    public $CollateRule;

    /**
     * @var string 数据库备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 用户权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserHostPrivileges;

    /**
     * @var integer 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 集群Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @param string $DbName 数据库名称
     * @param string $CharacterSet 字符集类型
     * @param string $Status 数据库状态
     * @param string $CollateRule 排序规则
     * @param string $Description 数据库备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserHostPrivileges 用户权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DbId 数据库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 集群Id
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("CharacterSet",$param) and $param["CharacterSet"] !== null) {
            $this->CharacterSet = $param["CharacterSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CollateRule",$param) and $param["CollateRule"] !== null) {
            $this->CollateRule = $param["CollateRule"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserHostPrivileges",$param) and $param["UserHostPrivileges"] !== null) {
            $this->UserHostPrivileges = [];
            foreach ($param["UserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->UserHostPrivileges, $obj);
            }
        }

        if (array_key_exists("DbId",$param) and $param["DbId"] !== null) {
            $this->DbId = $param["DbId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
