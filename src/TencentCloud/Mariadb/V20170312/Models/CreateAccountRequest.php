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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
 * @method string getUserName() 获取账号名，账号名需要1-32个字符，由字母、数字或特殊字符组成；以字母开头；特殊字符为_-
 * @method void setUserName(string $UserName) 设置账号名，账号名需要1-32个字符，由字母、数字或特殊字符组成；以字母开头；特殊字符为_-
 * @method string getHost() 获取可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
 * @method void setHost(string $Host) 设置可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
 * @method string getPassword() 获取账号密码，密码需要 8\~32 个字符，不能以 '/' 开头，并且至少包含字母、数字和特殊字符 ()~!@#$%^&*-+=_|{}[]:<>,.?/ 中的两项
 * @method void setPassword(string $Password) 设置账号密码，密码需要 8\~32 个字符，不能以 '/' 开头，并且至少包含字母、数字和特殊字符 ()~!@#$%^&*-+=_|{}[]:<>,.?/ 中的两项
 * @method integer getReadOnly() 获取是否创建为只读账号，0：否； 1：只读账号，该账号的sql请求优先选择备机执行，备机延迟时选择主机执行；2：只读账号，优先选择备机执行，备机延迟时操作报错；3：只读账号，优先选择备机执行，忽略备机延迟只读备机；
 * @method void setReadOnly(integer $ReadOnly) 设置是否创建为只读账号，0：否； 1：只读账号，该账号的sql请求优先选择备机执行，备机延迟时选择主机执行；2：只读账号，优先选择备机执行，备机延迟时操作报错；3：只读账号，优先选择备机执行，忽略备机延迟只读备机；
 * @method string getDescription() 获取账号备注，可以包含中文、英文字符、常见符号和数字，最多256个字符
 * @method void setDescription(string $Description) 设置账号备注，可以包含中文、英文字符、常见符号和数字，最多256个字符
 * @method integer getDelayThresh() 获取根据传入时间判断备机不可用
 * @method void setDelayThresh(integer $DelayThresh) 设置根据传入时间判断备机不可用
 * @method integer getSlaveConst() 获取针对只读账号，设置策略是否固定备机，0：不固定备机，即备机不满足条件与客户端不断开连接，Proxy选择其他可用备机，1：备机不满足条件断开连接，确保一个连接固定备机。
 * @method void setSlaveConst(integer $SlaveConst) 设置针对只读账号，设置策略是否固定备机，0：不固定备机，即备机不满足条件与客户端不断开连接，Proxy选择其他可用备机，1：备机不满足条件断开连接，确保一个连接固定备机。
 * @method integer getMaxUserConnections() 获取用户最大连接数限制参数。不传或者传0表示为不限制，对应max_user_connections参数，目前10.1内核版本不支持设置。
 * @method void setMaxUserConnections(integer $MaxUserConnections) 设置用户最大连接数限制参数。不传或者传0表示为不限制，对应max_user_connections参数，目前10.1内核版本不支持设置。
 * @method string getEncryptedPassword() 获取使用GetPublicKey返回的RSA2048公钥加密后的密码
 * @method void setEncryptedPassword(string $EncryptedPassword) 设置使用GetPublicKey返回的RSA2048公钥加密后的密码
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
     */
    public $InstanceId;

    /**
     * @var string 账号名，账号名需要1-32个字符，由字母、数字或特殊字符组成；以字母开头；特殊字符为_-
     */
    public $UserName;

    /**
     * @var string 可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
     */
    public $Host;

    /**
     * @var string 账号密码，密码需要 8\~32 个字符，不能以 '/' 开头，并且至少包含字母、数字和特殊字符 ()~!@#$%^&*-+=_|{}[]:<>,.?/ 中的两项
     */
    public $Password;

    /**
     * @var integer 是否创建为只读账号，0：否； 1：只读账号，该账号的sql请求优先选择备机执行，备机延迟时选择主机执行；2：只读账号，优先选择备机执行，备机延迟时操作报错；3：只读账号，优先选择备机执行，忽略备机延迟只读备机；
     */
    public $ReadOnly;

    /**
     * @var string 账号备注，可以包含中文、英文字符、常见符号和数字，最多256个字符
     */
    public $Description;

    /**
     * @var integer 根据传入时间判断备机不可用
     */
    public $DelayThresh;

    /**
     * @var integer 针对只读账号，设置策略是否固定备机，0：不固定备机，即备机不满足条件与客户端不断开连接，Proxy选择其他可用备机，1：备机不满足条件断开连接，确保一个连接固定备机。
     */
    public $SlaveConst;

    /**
     * @var integer 用户最大连接数限制参数。不传或者传0表示为不限制，对应max_user_connections参数，目前10.1内核版本不支持设置。
     */
    public $MaxUserConnections;

    /**
     * @var string 使用GetPublicKey返回的RSA2048公钥加密后的密码
     */
    public $EncryptedPassword;

    /**
     * @param string $InstanceId 实例 ID，形如：tdsql-ow728lmc，可以通过 DescribeDBInstances 查询实例详情获得。
     * @param string $UserName 账号名，账号名需要1-32个字符，由字母、数字或特殊字符组成；以字母开头；特殊字符为_-
     * @param string $Host 可以登录的主机，与mysql 账号的 host 格式一致，可以支持通配符，例如 %，10.%，10.20.%。
     * @param string $Password 账号密码，密码需要 8\~32 个字符，不能以 '/' 开头，并且至少包含字母、数字和特殊字符 ()~!@#$%^&*-+=_|{}[]:<>,.?/ 中的两项
     * @param integer $ReadOnly 是否创建为只读账号，0：否； 1：只读账号，该账号的sql请求优先选择备机执行，备机延迟时选择主机执行；2：只读账号，优先选择备机执行，备机延迟时操作报错；3：只读账号，优先选择备机执行，忽略备机延迟只读备机；
     * @param string $Description 账号备注，可以包含中文、英文字符、常见符号和数字，最多256个字符
     * @param integer $DelayThresh 根据传入时间判断备机不可用
     * @param integer $SlaveConst 针对只读账号，设置策略是否固定备机，0：不固定备机，即备机不满足条件与客户端不断开连接，Proxy选择其他可用备机，1：备机不满足条件断开连接，确保一个连接固定备机。
     * @param integer $MaxUserConnections 用户最大连接数限制参数。不传或者传0表示为不限制，对应max_user_connections参数，目前10.1内核版本不支持设置。
     * @param string $EncryptedPassword 使用GetPublicKey返回的RSA2048公钥加密后的密码
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DelayThresh",$param) and $param["DelayThresh"] !== null) {
            $this->DelayThresh = $param["DelayThresh"];
        }

        if (array_key_exists("SlaveConst",$param) and $param["SlaveConst"] !== null) {
            $this->SlaveConst = $param["SlaveConst"];
        }

        if (array_key_exists("MaxUserConnections",$param) and $param["MaxUserConnections"] !== null) {
            $this->MaxUserConnections = $param["MaxUserConnections"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }
    }
}
