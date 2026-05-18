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
 * @method string getName() 获取<p>变量名</p>
 * @method void setName(string $Name) 设置<p>变量名</p>
 * @method string getValue() 获取<p>变量值</p>
 * @method void setValue(string $Value) 设置<p>变量值</p>
 * @method integer getType() 获取<p>变量类型  1：显式   2：隐藏</p>
 * @method void setType(integer $Type) 设置<p>变量类型  1：显式   2：隐藏</p>
 * @method string getRemark() 获取<p>描述信息</p>
 * @method void setRemark(string $Remark) 设置<p>描述信息</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 * @method integer getValueType() 获取<p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
 * @method void setValueType(integer $ValueType) 设置<p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
 * @method string getSecretRegion() 获取<p>凭据所在地域</p>
 * @method void setSecretRegion(string $SecretRegion) 设置<p>凭据所在地域</p>
 * @method string getSecretName() 获取<p>凭据名称</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称</p>
 * @method string getSecretVersionId() 获取<p>凭据版本</p>
 * @method void setSecretVersionId(string $SecretVersionId) 设置<p>凭据版本</p>
 * @method string getSecretValueMd5() 获取<p>凭据值md5</p>
 * @method void setSecretValueMd5(string $SecretValueMd5) 设置<p>凭据值md5</p>
 */
class CreateVariableRequest extends AbstractModel
{
    /**
     * @var string <p>变量名</p>
     */
    public $Name;

    /**
     * @var string <p>变量值</p>
     */
    public $Value;

    /**
     * @var integer <p>变量类型  1：显式   2：隐藏</p>
     */
    public $Type;

    /**
     * @var string <p>描述信息</p>
     */
    public $Remark;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @var integer <p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
     */
    public $ValueType;

    /**
     * @var string <p>凭据所在地域</p>
     */
    public $SecretRegion;

    /**
     * @var string <p>凭据名称</p>
     */
    public $SecretName;

    /**
     * @var string <p>凭据版本</p>
     */
    public $SecretVersionId;

    /**
     * @var string <p>凭据值md5</p>
     */
    public $SecretValueMd5;

    /**
     * @param string $Name <p>变量名</p>
     * @param string $Value <p>变量值</p>
     * @param integer $Type <p>变量类型  1：显式   2：隐藏</p>
     * @param string $Remark <p>描述信息</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
     * @param integer $ValueType <p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
     * @param string $SecretRegion <p>凭据所在地域</p>
     * @param string $SecretName <p>凭据名称</p>
     * @param string $SecretVersionId <p>凭据版本</p>
     * @param string $SecretValueMd5 <p>凭据值md5</p>
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

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("SecretRegion",$param) and $param["SecretRegion"] !== null) {
            $this->SecretRegion = $param["SecretRegion"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("SecretVersionId",$param) and $param["SecretVersionId"] !== null) {
            $this->SecretVersionId = $param["SecretVersionId"];
        }

        if (array_key_exists("SecretValueMd5",$param) and $param["SecretValueMd5"] !== null) {
            $this->SecretValueMd5 = $param["SecretValueMd5"];
        }
    }
}
