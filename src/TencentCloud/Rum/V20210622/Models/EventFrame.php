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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 堆栈帧
 *
 * @method string getAbsPath() 获取<p>绝对路径</p>
 * @method void setAbsPath(string $AbsPath) 设置<p>绝对路径</p>
 * @method integer getColNo() 获取<p>列号</p>
 * @method void setColNo(integer $ColNo) 设置<p>列号</p>
 * @method string getFilename() 获取<p>文件名</p>
 * @method void setFilename(string $Filename) 设置<p>文件名</p>
 * @method string getFunction() 获取<p>函数名</p>
 * @method void setFunction(string $Function) 设置<p>函数名</p>
 * @method integer getLineNo() 获取<p>行号</p>
 * @method void setLineNo(integer $LineNo) 设置<p>行号</p>
 * @method integer getInApp() 获取<p>是否应用内 0/1</p>
 * @method void setInApp(integer $InApp) 设置<p>是否应用内 0/1</p>
 * @method string getModule() 获取<p>模块</p>
 * @method void setModule(string $Module) 设置<p>模块</p>
 * @method string getPackage() 获取<p>包名</p>
 * @method void setPackage(string $Package) 设置<p>包名</p>
 * @method integer getStackLevel() 获取<p>栈层级</p>
 * @method void setStackLevel(integer $StackLevel) 设置<p>栈层级</p>
 */
class EventFrame extends AbstractModel
{
    /**
     * @var string <p>绝对路径</p>
     */
    public $AbsPath;

    /**
     * @var integer <p>列号</p>
     */
    public $ColNo;

    /**
     * @var string <p>文件名</p>
     */
    public $Filename;

    /**
     * @var string <p>函数名</p>
     */
    public $Function;

    /**
     * @var integer <p>行号</p>
     */
    public $LineNo;

    /**
     * @var integer <p>是否应用内 0/1</p>
     */
    public $InApp;

    /**
     * @var string <p>模块</p>
     */
    public $Module;

    /**
     * @var string <p>包名</p>
     */
    public $Package;

    /**
     * @var integer <p>栈层级</p>
     */
    public $StackLevel;

    /**
     * @param string $AbsPath <p>绝对路径</p>
     * @param integer $ColNo <p>列号</p>
     * @param string $Filename <p>文件名</p>
     * @param string $Function <p>函数名</p>
     * @param integer $LineNo <p>行号</p>
     * @param integer $InApp <p>是否应用内 0/1</p>
     * @param string $Module <p>模块</p>
     * @param string $Package <p>包名</p>
     * @param integer $StackLevel <p>栈层级</p>
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
        if (array_key_exists("AbsPath",$param) and $param["AbsPath"] !== null) {
            $this->AbsPath = $param["AbsPath"];
        }

        if (array_key_exists("ColNo",$param) and $param["ColNo"] !== null) {
            $this->ColNo = $param["ColNo"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("LineNo",$param) and $param["LineNo"] !== null) {
            $this->LineNo = $param["LineNo"];
        }

        if (array_key_exists("InApp",$param) and $param["InApp"] !== null) {
            $this->InApp = $param["InApp"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("StackLevel",$param) and $param["StackLevel"] !== null) {
            $this->StackLevel = $param["StackLevel"];
        }
    }
}
