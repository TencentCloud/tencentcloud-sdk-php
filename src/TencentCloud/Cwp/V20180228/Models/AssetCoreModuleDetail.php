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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理内核模块详情
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method integer getSize() 获取大小
 * @method void setSize(integer $Size) 设置大小
 * @method string getProcesses() 获取依赖进程
 * @method void setProcesses(string $Processes) 设置依赖进程
 * @method string getModules() 获取被依赖模块
 * @method void setModules(string $Modules) 设置被依赖模块
 * @method array getParams() 获取参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetCoreModuleDetail extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var integer 大小
     */
    public $Size;

    /**
     * @var string 依赖进程
     */
    public $Processes;

    /**
     * @var string 被依赖模块
     */
    public $Modules;

    /**
     * @var array 参数信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $Name 名称
     * @param string $Desc 描述
     * @param string $Path 路径
     * @param string $Version 版本
     * @param integer $Size 大小
     * @param string $Processes 依赖进程
     * @param string $Modules 被依赖模块
     * @param array $Params 参数信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 数据更新时间
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Processes",$param) and $param["Processes"] !== null) {
            $this->Processes = $param["Processes"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = $param["Modules"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new AssetCoreModuleParam();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
