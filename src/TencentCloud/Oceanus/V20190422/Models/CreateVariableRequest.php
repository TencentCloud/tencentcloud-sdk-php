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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVariable请求参数结构体
 *
 * @method string getName() 获取变量名
 * @method void setName(string $Name) 设置变量名
 * @method string getValue() 获取变量值
 * @method void setValue(string $Value) 设置变量值
 * @method integer getType() 获取变量类型  1：显式   2：隐藏
 * @method void setType(integer $Type) 设置变量类型  1：显式   2：隐藏
 * @method string getRemark() 获取描述信息
 * @method void setRemark(string $Remark) 设置描述信息
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class CreateVariableRequest extends AbstractModel
{
    /**
     * @var string 变量名
     */
    public $Name;

    /**
     * @var string 变量值
     */
    public $Value;

    /**
     * @var integer 变量类型  1：显式   2：隐藏
     */
    public $Type;

    /**
     * @var string 描述信息
     */
    public $Remark;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param string $Name 变量名
     * @param string $Value 变量值
     * @param integer $Type 变量类型  1：显式   2：隐藏
     * @param string $Remark 描述信息
     * @param string $WorkSpaceId 工作空间 SerialId
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
