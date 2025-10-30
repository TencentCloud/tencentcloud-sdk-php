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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getUserName() 获取创建的账号名称。由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres，且不能由pg_或tencentdb_开头
 * @method void setUserName(string $UserName) 设置创建的账号名称。由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres，且不能由pg_或tencentdb_开头
 * @method string getType() 获取账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
 * @method void setType(string $Type) 设置账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
 * @method string getPassword() 获取账号对应的密码。密码规则如下：
<li>长度8 ~ 32位，推荐使用12位以上的密码</li>
<li>不能以" / "开头</li>
<li>必须包含以下四项:</li>

小写字母 a ~ z           
大写字母 A ～ Z
数字 0 ～ 9
特殊字符 ()`~!@#$%^&*-+=_|{}[]:<>,.?/

 * @method void setPassword(string $Password) 设置账号对应的密码。密码规则如下：
<li>长度8 ~ 32位，推荐使用12位以上的密码</li>
<li>不能以" / "开头</li>
<li>必须包含以下四项:</li>

小写字母 a ~ z           
大写字母 A ～ Z
数字 0 ～ 9
特殊字符 ()`~!@#$%^&*-+=_|{}[]:<>,.?/

 * @method string getRemark() 获取账号备注。只允许英文字母、数字、下划线、中划线，以及全体汉字，限60个字符
 * @method void setRemark(string $Remark) 设置账号备注。只允许英文字母、数字、下划线、中划线，以及全体汉字，限60个字符
 * @method boolean getOpenCam() 获取账号是否开启CAM验证
 * @method void setOpenCam(boolean $OpenCam) 设置账号是否开启CAM验证
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 创建的账号名称。由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres，且不能由pg_或tencentdb_开头
     */
    public $UserName;

    /**
     * @var string 账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
     */
    public $Type;

    /**
     * @var string 账号对应的密码。密码规则如下：
<li>长度8 ~ 32位，推荐使用12位以上的密码</li>
<li>不能以" / "开头</li>
<li>必须包含以下四项:</li>

小写字母 a ~ z           
大写字母 A ～ Z
数字 0 ～ 9
特殊字符 ()`~!@#$%^&*-+=_|{}[]:<>,.?/

     */
    public $Password;

    /**
     * @var string 账号备注。只允许英文字母、数字、下划线、中划线，以及全体汉字，限60个字符
     */
    public $Remark;

    /**
     * @var boolean 账号是否开启CAM验证
     */
    public $OpenCam;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $UserName 创建的账号名称。由字母（a-z, A-Z）、数字（0-9）、下划线（_）组成，以字母或（_）开头，最多63个字符。不能使用系统保留关键字，不能为postgres，且不能由pg_或tencentdb_开头
     * @param string $Type 账号类型。当前支持normal、tencentDBSuper两个输入。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
     * @param string $Password 账号对应的密码。密码规则如下：
<li>长度8 ~ 32位，推荐使用12位以上的密码</li>
<li>不能以" / "开头</li>
<li>必须包含以下四项:</li>

小写字母 a ~ z           
大写字母 A ～ Z
数字 0 ～ 9
特殊字符 ()`~!@#$%^&*-+=_|{}[]:<>,.?/

     * @param string $Remark 账号备注。只允许英文字母、数字、下划线、中划线，以及全体汉字，限60个字符
     * @param boolean $OpenCam 账号是否开启CAM验证
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OpenCam",$param) and $param["OpenCam"] !== null) {
            $this->OpenCam = $param["OpenCam"];
        }
    }
}
