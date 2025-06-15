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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分页的具体数据对象
 *
 * @method string getCmdLine() 获取命令行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdLine(string $CmdLine) 设置命令行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessId() 获取进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessId(integer $ProcessId) 设置进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartType() 获取启动类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartType(integer $StartType) 设置启动类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取启动用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置启动用户
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceServiceInfo extends AbstractModel
{
    /**
     * @var string 命令行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdLine;

    /**
     * @var string 内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 进程id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessId;

    /**
     * @var integer 启动类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartType;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 启动用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @param string $CmdLine 命令行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessId 进程id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartType 启动类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 启动用户
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
        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("StartType",$param) and $param["StartType"] !== null) {
            $this->StartType = $param["StartType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
