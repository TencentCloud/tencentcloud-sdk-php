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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内存马白名单规则
 *
 * @method integer getId() 获取规则ID
 * @method void setId(integer $Id) 设置规则ID
 * @method array getUuidHostips() 获取客户端ID
 * @method void setUuidHostips(array $UuidHostips) 设置客户端ID
 * @method integer getLogicalSymbol() 获取逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
 * @method void setLogicalSymbol(integer $LogicalSymbol) 设置逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
 * @method string getClassNameRegexp() 获取类名正则表达式，为空则不匹配
 * @method void setClassNameRegexp(string $ClassNameRegexp) 设置类名正则表达式，为空则不匹配
 * @method string getSuperClassNameRegexp() 获取父类名正则表达式，为空则不匹配
 * @method void setSuperClassNameRegexp(string $SuperClassNameRegexp) 设置父类名正则表达式，为空则不匹配
 * @method string getInterfacesRegexp() 获取继承的接口正则表达式，为空则不匹配
 * @method void setInterfacesRegexp(string $InterfacesRegexp) 设置继承的接口正则表达式，为空则不匹配
 * @method string getAnnotationsRegexp() 获取注释正则表达式，为空则不匹配
 * @method void setAnnotationsRegexp(string $AnnotationsRegexp) 设置注释正则表达式，为空则不匹配
 * @method string getLoaderClassNameRegexp() 获取所属的类加载器正则表达式，为空则不匹配
 * @method void setLoaderClassNameRegexp(string $LoaderClassNameRegexp) 设置所属的类加载器正则表达式，为空则不匹配
 * @method string getOperator() 获取操作人
 * @method void setOperator(string $Operator) 设置操作人
 * @method integer getIsGlobal() 获取是否全局规则(是否对appid下所有主机有效， 0:单台uuid 1:全局，默认否)
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(是否对appid下所有主机有效， 0:单台uuid 1:全局，默认否)
 * @method integer getStatus() 获取状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
 * @method void setStatus(integer $Status) 设置状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method integer getHandleHistory() 获取处理历史事件， 0:不处理 1:处理
 * @method void setHandleHistory(integer $HandleHistory) 设置处理历史事件， 0:不处理 1:处理
 * @method string getGroupID() 获取批次id
 * @method void setGroupID(string $GroupID) 设置批次id
 * @method string getMachinesNums() 获取应用资产，描述服务器数量，全局时候为：全部服务器
 * @method void setMachinesNums(string $MachinesNums) 设置应用资产，描述服务器数量，全局时候为：全部服务器
 * @method string getGroupName() 获取策略名称
 * @method void setGroupName(string $GroupName) 设置策略名称
 * @method string getCodeSourceRegexp() 获取源代码正则表达式，为空则不匹配
 * @method void setCodeSourceRegexp(string $CodeSourceRegexp) 设置源代码正则表达式，为空则不匹配
 * @method string getCallStackRegexp() 获取调用栈正则表达式，为空则不匹配
 * @method void setCallStackRegexp(string $CallStackRegexp) 设置调用栈正则表达式，为空则不匹配
 * @method integer getFileExist() 获取文件是否存在， 0:用户没选择规则时候的默认值，1：文件存在，2：文件不存在
 * @method void setFileExist(integer $FileExist) 设置文件是否存在， 0:用户没选择规则时候的默认值，1：文件存在，2：文件不存在
 */
class MemShellRule extends AbstractModel
{
    /**
     * @var integer 规则ID
     */
    public $Id;

    /**
     * @var array 客户端ID
     */
    public $UuidHostips;

    /**
     * @var integer 逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
     */
    public $LogicalSymbol;

    /**
     * @var string 类名正则表达式，为空则不匹配
     */
    public $ClassNameRegexp;

    /**
     * @var string 父类名正则表达式，为空则不匹配
     */
    public $SuperClassNameRegexp;

    /**
     * @var string 继承的接口正则表达式，为空则不匹配
     */
    public $InterfacesRegexp;

    /**
     * @var string 注释正则表达式，为空则不匹配
     */
    public $AnnotationsRegexp;

    /**
     * @var string 所属的类加载器正则表达式，为空则不匹配
     */
    public $LoaderClassNameRegexp;

    /**
     * @var string 操作人
     */
    public $Operator;

    /**
     * @var integer 是否全局规则(是否对appid下所有主机有效， 0:单台uuid 1:全局，默认否)
     */
    public $IsGlobal;

    /**
     * @var integer 状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var integer 处理历史事件， 0:不处理 1:处理
     */
    public $HandleHistory;

    /**
     * @var string 批次id
     */
    public $GroupID;

    /**
     * @var string 应用资产，描述服务器数量，全局时候为：全部服务器
     */
    public $MachinesNums;

    /**
     * @var string 策略名称
     */
    public $GroupName;

    /**
     * @var string 源代码正则表达式，为空则不匹配
     */
    public $CodeSourceRegexp;

    /**
     * @var string 调用栈正则表达式，为空则不匹配
     */
    public $CallStackRegexp;

    /**
     * @var integer 文件是否存在， 0:用户没选择规则时候的默认值，1：文件存在，2：文件不存在
     */
    public $FileExist;

    /**
     * @param integer $Id 规则ID
     * @param array $UuidHostips 客户端ID
     * @param integer $LogicalSymbol 逻辑运算符，0: 下面5个有效的正则逻辑与 1: 逻辑或
     * @param string $ClassNameRegexp 类名正则表达式，为空则不匹配
     * @param string $SuperClassNameRegexp 父类名正则表达式，为空则不匹配
     * @param string $InterfacesRegexp 继承的接口正则表达式，为空则不匹配
     * @param string $AnnotationsRegexp 注释正则表达式，为空则不匹配
     * @param string $LoaderClassNameRegexp 所属的类加载器正则表达式，为空则不匹配
     * @param string $Operator 操作人
     * @param integer $IsGlobal 是否全局规则(是否对appid下所有主机有效， 0:单台uuid 1:全局，默认否)
     * @param integer $Status 状态 (0: 有效 1: 删除，2：无效（启用开关关闭）)
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param integer $HandleHistory 处理历史事件， 0:不处理 1:处理
     * @param string $GroupID 批次id
     * @param string $MachinesNums 应用资产，描述服务器数量，全局时候为：全部服务器
     * @param string $GroupName 策略名称
     * @param string $CodeSourceRegexp 源代码正则表达式，为空则不匹配
     * @param string $CallStackRegexp 调用栈正则表达式，为空则不匹配
     * @param integer $FileExist 文件是否存在， 0:用户没选择规则时候的默认值，1：文件存在，2：文件不存在
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

        if (array_key_exists("UuidHostips",$param) and $param["UuidHostips"] !== null) {
            $this->UuidHostips = [];
            foreach ($param["UuidHostips"] as $key => $value){
                $obj = new UuidHostip();
                $obj->deserialize($value);
                array_push($this->UuidHostips, $obj);
            }
        }

        if (array_key_exists("LogicalSymbol",$param) and $param["LogicalSymbol"] !== null) {
            $this->LogicalSymbol = $param["LogicalSymbol"];
        }

        if (array_key_exists("ClassNameRegexp",$param) and $param["ClassNameRegexp"] !== null) {
            $this->ClassNameRegexp = $param["ClassNameRegexp"];
        }

        if (array_key_exists("SuperClassNameRegexp",$param) and $param["SuperClassNameRegexp"] !== null) {
            $this->SuperClassNameRegexp = $param["SuperClassNameRegexp"];
        }

        if (array_key_exists("InterfacesRegexp",$param) and $param["InterfacesRegexp"] !== null) {
            $this->InterfacesRegexp = $param["InterfacesRegexp"];
        }

        if (array_key_exists("AnnotationsRegexp",$param) and $param["AnnotationsRegexp"] !== null) {
            $this->AnnotationsRegexp = $param["AnnotationsRegexp"];
        }

        if (array_key_exists("LoaderClassNameRegexp",$param) and $param["LoaderClassNameRegexp"] !== null) {
            $this->LoaderClassNameRegexp = $param["LoaderClassNameRegexp"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("HandleHistory",$param) and $param["HandleHistory"] !== null) {
            $this->HandleHistory = $param["HandleHistory"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("MachinesNums",$param) and $param["MachinesNums"] !== null) {
            $this->MachinesNums = $param["MachinesNums"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CodeSourceRegexp",$param) and $param["CodeSourceRegexp"] !== null) {
            $this->CodeSourceRegexp = $param["CodeSourceRegexp"];
        }

        if (array_key_exists("CallStackRegexp",$param) and $param["CallStackRegexp"] !== null) {
            $this->CallStackRegexp = $param["CallStackRegexp"];
        }

        if (array_key_exists("FileExist",$param) and $param["FileExist"] !== null) {
            $this->FileExist = $param["FileExist"];
        }
    }
}
