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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProductSecret请求参数结构体
 *
 * @method string getSecretName() 获取凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
 * @method void setSecretName(string $SecretName) 设置凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
 * @method string getUserNamePrefix() 获取用户账号名前缀，由用户自行指定，长度限定在8个字符以内，
可选字符集包括：
数字字符：[0, 9]，
小写字符：[a, z]，
大写字符：[A, Z]，
特殊字符(全英文符号)：下划线(_)，
前缀必须以大写或小写字母开头。
 * @method void setUserNamePrefix(string $UserNamePrefix) 设置用户账号名前缀，由用户自行指定，长度限定在8个字符以内，
可选字符集包括：
数字字符：[0, 9]，
小写字符：[a, z]，
大写字符：[A, Z]，
特殊字符(全英文符号)：下划线(_)，
前缀必须以大写或小写字母开头。
 * @method string getProductName() 获取凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。
 * @method void setProductName(string $ProductName) 设置凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。
 * @method string getInstanceID() 获取云产品实例ID。
 * @method void setInstanceID(string $InstanceID) 设置云产品实例ID。
 * @method array getDomains() 获取账号的域名，IP形式，支持填入%。
 * @method void setDomains(array $Domains) 设置账号的域名，IP形式，支持填入%。
 * @method array getPrivilegesList() 获取将凭据与云产品实例绑定时，需要授予的权限列表。
 * @method void setPrivilegesList(array $PrivilegesList) 设置将凭据与云产品实例绑定时，需要授予的权限列表。
 * @method string getDescription() 获取描述信息，用于详细描述用途等，最大支持2048字节。
 * @method void setDescription(string $Description) 设置描述信息，用于详细描述用途等，最大支持2048字节。
 * @method string getKmsKeyId() 获取指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
 * @method void setKmsKeyId(string $KmsKeyId) 设置指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
 * @method array getTags() 获取标签列表。
 * @method void setTags(array $Tags) 设置标签列表。
 * @method string getRotationBeginTime() 获取用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。
当EnableRotation为True时，此参数必填。
 * @method void setRotationBeginTime(string $RotationBeginTime) 设置用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。
当EnableRotation为True时，此参数必填。
 * @method boolean getEnableRotation() 获取是否开启轮转
True -- 开启
False -- 不开启
如果不指定，默认为False。
 * @method void setEnableRotation(boolean $EnableRotation) 设置是否开启轮转
True -- 开启
False -- 不开启
如果不指定，默认为False。
 * @method integer getRotationFrequency() 获取轮转周期，以天为单位，默认为1天。
 * @method void setRotationFrequency(integer $RotationFrequency) 设置轮转周期，以天为单位，默认为1天。
 */
class CreateProductSecretRequest extends AbstractModel
{
    /**
     * @var string 凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
     */
    public $SecretName;

    /**
     * @var string 用户账号名前缀，由用户自行指定，长度限定在8个字符以内，
可选字符集包括：
数字字符：[0, 9]，
小写字符：[a, z]，
大写字符：[A, Z]，
特殊字符(全英文符号)：下划线(_)，
前缀必须以大写或小写字母开头。
     */
    public $UserNamePrefix;

    /**
     * @var string 凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。
     */
    public $ProductName;

    /**
     * @var string 云产品实例ID。
     */
    public $InstanceID;

    /**
     * @var array 账号的域名，IP形式，支持填入%。
     */
    public $Domains;

    /**
     * @var array 将凭据与云产品实例绑定时，需要授予的权限列表。
     */
    public $PrivilegesList;

    /**
     * @var string 描述信息，用于详细描述用途等，最大支持2048字节。
     */
    public $Description;

    /**
     * @var string 指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
     */
    public $KmsKeyId;

    /**
     * @var array 标签列表。
     */
    public $Tags;

    /**
     * @var string 用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。
当EnableRotation为True时，此参数必填。
     */
    public $RotationBeginTime;

    /**
     * @var boolean 是否开启轮转
True -- 开启
False -- 不开启
如果不指定，默认为False。
     */
    public $EnableRotation;

    /**
     * @var integer 轮转周期，以天为单位，默认为1天。
     */
    public $RotationFrequency;

    /**
     * @param string $SecretName 凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。
     * @param string $UserNamePrefix 用户账号名前缀，由用户自行指定，长度限定在8个字符以内，
可选字符集包括：
数字字符：[0, 9]，
小写字符：[a, z]，
大写字符：[A, Z]，
特殊字符(全英文符号)：下划线(_)，
前缀必须以大写或小写字母开头。
     * @param string $ProductName 凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。
     * @param string $InstanceID 云产品实例ID。
     * @param array $Domains 账号的域名，IP形式，支持填入%。
     * @param array $PrivilegesList 将凭据与云产品实例绑定时，需要授予的权限列表。
     * @param string $Description 描述信息，用于详细描述用途等，最大支持2048字节。
     * @param string $KmsKeyId 指定对凭据进行加密的KMS CMK。
如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。
您也可以指定在同region 下自行创建的KMS CMK进行加密。
     * @param array $Tags 标签列表。
     * @param string $RotationBeginTime 用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。
当EnableRotation为True时，此参数必填。
     * @param boolean $EnableRotation 是否开启轮转
True -- 开启
False -- 不开启
如果不指定，默认为False。
     * @param integer $RotationFrequency 轮转周期，以天为单位，默认为1天。
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("UserNamePrefix",$param) and $param["UserNamePrefix"] !== null) {
            $this->UserNamePrefix = $param["UserNamePrefix"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("PrivilegesList",$param) and $param["PrivilegesList"] !== null) {
            $this->PrivilegesList = [];
            foreach ($param["PrivilegesList"] as $key => $value){
                $obj = new ProductPrivilegeUnit();
                $obj->deserialize($value);
                array_push($this->PrivilegesList, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RotationBeginTime",$param) and $param["RotationBeginTime"] !== null) {
            $this->RotationBeginTime = $param["RotationBeginTime"];
        }

        if (array_key_exists("EnableRotation",$param) and $param["EnableRotation"] !== null) {
            $this->EnableRotation = $param["EnableRotation"];
        }

        if (array_key_exists("RotationFrequency",$param) and $param["RotationFrequency"] !== null) {
            $this->RotationFrequency = $param["RotationFrequency"];
        }
    }
}
