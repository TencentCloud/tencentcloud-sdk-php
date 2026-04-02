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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProductSecret请求参数结构体
 *
 * @method string getSecretName() 获取<p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
 * @method string getUserNamePrefix() 获取<p>用户账号名前缀，由用户自行指定，长度限定在8个字符以内，<br>可选字符集包括：<br>数字字符：[0, 9]，<br>小写字符：[a, z]，<br>大写字符：[A, Z]，<br>特殊字符(全英文符号)：下划线(_)，<br>前缀必须以大写或小写字母开头。</p>
 * @method void setUserNamePrefix(string $UserNamePrefix) 设置<p>用户账号名前缀，由用户自行指定，长度限定在8个字符以内，<br>可选字符集包括：<br>数字字符：[0, 9]，<br>小写字符：[a, z]，<br>大写字符：[A, Z]，<br>特殊字符(全英文符号)：下划线(_)，<br>前缀必须以大写或小写字母开头。</p>
 * @method string getProductName() 获取<p>凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。</p>
 * @method void setProductName(string $ProductName) 设置<p>凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。</p>
 * @method string getInstanceID() 获取<p>云产品实例ID。</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>云产品实例ID。</p>
 * @method array getDomains() 获取<p>账号的域名，IP形式，支持填入%。</p>
 * @method void setDomains(array $Domains) 设置<p>账号的域名，IP形式，支持填入%。</p>
 * @method array getPrivilegesList() 获取<p>将凭据与云产品实例绑定时，需要授予的权限列表。</p>
 * @method void setPrivilegesList(array $PrivilegesList) 设置<p>将凭据与云产品实例绑定时，需要授予的权限列表。</p>
 * @method string getDescription() 获取<p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
 * @method void setDescription(string $Description) 设置<p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
 * @method string getKmsKeyId() 获取<p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
 * @method void setKmsKeyId(string $KmsKeyId) 设置<p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
 * @method array getTags() 获取<p>标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表。</p>
 * @method string getRotationBeginTime() 获取<p>用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。<br>当EnableRotation为True时，此参数必填。</p>
 * @method void setRotationBeginTime(string $RotationBeginTime) 设置<p>用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。<br>当EnableRotation为True时，此参数必填。</p>
 * @method boolean getEnableRotation() 获取<p>是否开启轮转<br>True -- 开启<br>False -- 不开启<br>如果不指定，默认为False。</p>
 * @method void setEnableRotation(boolean $EnableRotation) 设置<p>是否开启轮转<br>True -- 开启<br>False -- 不开启<br>如果不指定，默认为False。</p>
 * @method integer getRotationFrequency() 获取<p>轮转周期，以天为单位，默认为1天。</p>
 * @method void setRotationFrequency(integer $RotationFrequency) 设置<p>轮转周期，以天为单位，默认为1天。</p>
 * @method string getKmsHsmClusterId() 获取<p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
 * @method void setKmsHsmClusterId(string $KmsHsmClusterId) 设置<p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
 * @method string getAccountRemark() 获取<p>账户备注</p>
 * @method void setAccountRemark(string $AccountRemark) 设置<p>账户备注</p>
 * @method string getAccountType() 获取<p>数据库账号类型，目前仅在创建sqlserver凭据场景会使用到，仅支持L3</p><p>枚举值：</p><ul><li>L3： 普通权限账号</li></ul>
 * @method void setAccountType(string $AccountType) 设置<p>数据库账号类型，目前仅在创建sqlserver凭据场景会使用到，仅支持L3</p><p>枚举值：</p><ul><li>L3： 普通权限账号</li></ul>
 */
class CreateProductSecretRequest extends AbstractModel
{
    /**
     * @var string <p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
     */
    public $SecretName;

    /**
     * @var string <p>用户账号名前缀，由用户自行指定，长度限定在8个字符以内，<br>可选字符集包括：<br>数字字符：[0, 9]，<br>小写字符：[a, z]，<br>大写字符：[A, Z]，<br>特殊字符(全英文符号)：下划线(_)，<br>前缀必须以大写或小写字母开头。</p>
     */
    public $UserNamePrefix;

    /**
     * @var string <p>凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。</p>
     */
    public $ProductName;

    /**
     * @var string <p>云产品实例ID。</p>
     */
    public $InstanceID;

    /**
     * @var array <p>账号的域名，IP形式，支持填入%。</p>
     */
    public $Domains;

    /**
     * @var array <p>将凭据与云产品实例绑定时，需要授予的权限列表。</p>
     */
    public $PrivilegesList;

    /**
     * @var string <p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
     */
    public $Description;

    /**
     * @var string <p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
     */
    public $KmsKeyId;

    /**
     * @var array <p>标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。<br>当EnableRotation为True时，此参数必填。</p>
     */
    public $RotationBeginTime;

    /**
     * @var boolean <p>是否开启轮转<br>True -- 开启<br>False -- 不开启<br>如果不指定，默认为False。</p>
     */
    public $EnableRotation;

    /**
     * @var integer <p>轮转周期，以天为单位，默认为1天。</p>
     */
    public $RotationFrequency;

    /**
     * @var string <p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
     */
    public $KmsHsmClusterId;

    /**
     * @var string <p>账户备注</p>
     */
    public $AccountRemark;

    /**
     * @var string <p>数据库账号类型，目前仅在创建sqlserver凭据场景会使用到，仅支持L3</p><p>枚举值：</p><ul><li>L3： 普通权限账号</li></ul>
     */
    public $AccountType;

    /**
     * @param string $SecretName <p>凭据名称，同一region内不可重复，最长128字节，使用字母、数字或者 - _ 的组合，第一个字符必须为字母或者数字。</p>
     * @param string $UserNamePrefix <p>用户账号名前缀，由用户自行指定，长度限定在8个字符以内，<br>可选字符集包括：<br>数字字符：[0, 9]，<br>小写字符：[a, z]，<br>大写字符：[A, Z]，<br>特殊字符(全英文符号)：下划线(_)，<br>前缀必须以大写或小写字母开头。</p>
     * @param string $ProductName <p>凭据所绑定的云产品名称，如Mysql，可以通过DescribeSupportedProducts接口获取所支持的云产品名称。</p>
     * @param string $InstanceID <p>云产品实例ID。</p>
     * @param array $Domains <p>账号的域名，IP形式，支持填入%。</p>
     * @param array $PrivilegesList <p>将凭据与云产品实例绑定时，需要授予的权限列表。</p>
     * @param string $Description <p>描述信息，用于详细描述用途等，最大支持2048字节。</p>
     * @param string $KmsKeyId <p>指定对凭据进行加密的KMS CMK。<br>如果为空则表示使用Secrets Manager为您默认创建的CMK进行加密。<br>您也可以指定在同region 下自行创建的KMS CMK进行加密。</p>
     * @param array $Tags <p>标签列表。</p>
     * @param string $RotationBeginTime <p>用户自定义的开始轮转时间，格式：2006-01-02 15:04:05。<br>当EnableRotation为True时，此参数必填。</p>
     * @param boolean $EnableRotation <p>是否开启轮转<br>True -- 开启<br>False -- 不开启<br>如果不指定，默认为False。</p>
     * @param integer $RotationFrequency <p>轮转周期，以天为单位，默认为1天。</p>
     * @param string $KmsHsmClusterId <p>KMS的独享集群的ID。当KmsKeyId为空,并且用户的KMS存在有效的HsmClusterId时有效。</p>
     * @param string $AccountRemark <p>账户备注</p>
     * @param string $AccountType <p>数据库账号类型，目前仅在创建sqlserver凭据场景会使用到，仅支持L3</p><p>枚举值：</p><ul><li>L3： 普通权限账号</li></ul>
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

        if (array_key_exists("KmsHsmClusterId",$param) and $param["KmsHsmClusterId"] !== null) {
            $this->KmsHsmClusterId = $param["KmsHsmClusterId"];
        }

        if (array_key_exists("AccountRemark",$param) and $param["AccountRemark"] !== null) {
            $this->AccountRemark = $param["AccountRemark"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }
    }
}
