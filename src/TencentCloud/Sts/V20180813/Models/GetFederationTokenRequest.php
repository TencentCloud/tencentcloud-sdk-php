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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取联合身份用户昵称
 * @method void setName(string $Name) 设置联合身份用户昵称
 * @method string getPolicy() 获取策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
 * @method void setPolicy(string $Policy) 设置策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
 * @method integer getDurationSeconds() 获取指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒
 * @method void setDurationSeconds(integer $DurationSeconds) 设置指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒
 * @method integer getOpenUin() 获取兼容uin名单
 * @method void setOpenUin(integer $OpenUin) 设置兼容uin名单
 * @method integer getOpenOwnerUin() 获取兼容OwnerUin名单
 * @method void setOpenOwnerUin(integer $OpenOwnerUin) 设置兼容OwnerUin名单
 * @method string getUa() 获取ua
 * @method void setUa(string $Ua) 设置ua
 * @method integer getMfa() 获取mfa
 * @method void setMfa(integer $Mfa) 设置mfa
 * @method string getInterfaceName() 获取interfaceName
 * @method void setInterfaceName(string $InterfaceName) 设置interfaceName
 * @method string getExtraInfo() 获取extraInfo
 * @method void setExtraInfo(string $ExtraInfo) 设置extraInfo
 * @method integer getThUin() 获取thUin
 * @method void setThUin(integer $ThUin) 设置thUin
 * @method integer getThOwnerUin() 获取thOwnerUin
 * @method void setThOwnerUin(integer $ThOwnerUin) 设置thOwnerUin
 * @method string getCodeMode() 获取codeMode
 * @method void setCodeMode(string $CodeMode) 设置codeMode
 */

/**
 *GetFederationToken请求参数结构体
 */
class GetFederationTokenRequest extends AbstractModel
{
    /**
     * @var string 联合身份用户昵称
     */
    public $Name;

    /**
     * @var string 策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
     */
    public $Policy;

    /**
     * @var integer 指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒
     */
    public $DurationSeconds;

    /**
     * @var integer 兼容uin名单
     */
    public $OpenUin;

    /**
     * @var integer 兼容OwnerUin名单
     */
    public $OpenOwnerUin;

    /**
     * @var string ua
     */
    public $Ua;

    /**
     * @var integer mfa
     */
    public $Mfa;

    /**
     * @var string interfaceName
     */
    public $InterfaceName;

    /**
     * @var string extraInfo
     */
    public $ExtraInfo;

    /**
     * @var integer thUin
     */
    public $ThUin;

    /**
     * @var integer thOwnerUin
     */
    public $ThOwnerUin;

    /**
     * @var string codeMode
     */
    public $CodeMode;
    /**
     * @param string $Name 联合身份用户昵称
     * @param string $Policy 策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
     * @param integer $DurationSeconds 指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒
     * @param integer $OpenUin 兼容uin名单
     * @param integer $OpenOwnerUin 兼容OwnerUin名单
     * @param string $Ua ua
     * @param integer $Mfa mfa
     * @param string $InterfaceName interfaceName
     * @param string $ExtraInfo extraInfo
     * @param integer $ThUin thUin
     * @param integer $ThOwnerUin thOwnerUin
     * @param string $CodeMode codeMode
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("OpenUin",$param) and $param["OpenUin"] !== null) {
            $this->OpenUin = $param["OpenUin"];
        }

        if (array_key_exists("OpenOwnerUin",$param) and $param["OpenOwnerUin"] !== null) {
            $this->OpenOwnerUin = $param["OpenOwnerUin"];
        }

        if (array_key_exists("Ua",$param) and $param["Ua"] !== null) {
            $this->Ua = $param["Ua"];
        }

        if (array_key_exists("Mfa",$param) and $param["Mfa"] !== null) {
            $this->Mfa = $param["Mfa"];
        }

        if (array_key_exists("InterfaceName",$param) and $param["InterfaceName"] !== null) {
            $this->InterfaceName = $param["InterfaceName"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("ThUin",$param) and $param["ThUin"] !== null) {
            $this->ThUin = $param["ThUin"];
        }

        if (array_key_exists("ThOwnerUin",$param) and $param["ThOwnerUin"] !== null) {
            $this->ThOwnerUin = $param["ThOwnerUin"];
        }

        if (array_key_exists("CodeMode",$param) and $param["CodeMode"] !== null) {
            $this->CodeMode = $param["CodeMode"];
        }
    }
}
