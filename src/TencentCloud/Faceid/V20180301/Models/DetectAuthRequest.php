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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRuleId() 获取规则Id。a-zA-Z0-9组合。最长长度32位。
 * @method void setRuleId(string $RuleId) 设置规则Id。a-zA-Z0-9组合。最长长度32位。
 * @method string getTerminalType() 获取终端类型。可选值有：weixinh5, weixinh5native, h5, tinyappsdk, iossdk, androidsdk。只有值为"weixinh5"时会返回跳转URL。
 * @method void setTerminalType(string $TerminalType) 设置终端类型。可选值有：weixinh5, weixinh5native, h5, tinyappsdk, iossdk, androidsdk。只有值为"weixinh5"时会返回跳转URL。
 * @method string getIdCard() 获取身份证号或者是客户系统内部的唯一用户id。（传uid的时候只能使用ImageBase64传的照片进行一比一）a-zA-Z0-9组合。最长长度32位。
 * @method void setIdCard(string $IdCard) 设置身份证号或者是客户系统内部的唯一用户id。（传uid的时候只能使用ImageBase64传的照片进行一比一）a-zA-Z0-9组合。最长长度32位。
 * @method string getName() 获取姓名。最长长度32位。
 * @method void setName(string $Name) 设置姓名。最长长度32位。
 * @method string getRedirectUrl() 获取回调地址。最长长度1024位。
 * @method void setRedirectUrl(string $RedirectUrl) 设置回调地址。最长长度1024位。
 * @method string getExtra() 获取额外参数，会在getDetectInfo时带回去。最长长度1024位。
 * @method void setExtra(string $Extra) 设置额外参数，会在getDetectInfo时带回去。最长长度1024位。
 * @method string getImageBase64() 获取用于一比一时的照片base64。此时必须传入IdCard。
 * @method void setImageBase64(string $ImageBase64) 设置用于一比一时的照片base64。此时必须传入IdCard。
 */

/**
 *DetectAuth请求参数结构体
 */
class DetectAuthRequest extends AbstractModel
{
    /**
     * @var string 规则Id。a-zA-Z0-9组合。最长长度32位。
     */
    public $RuleId;

    /**
     * @var string 终端类型。可选值有：weixinh5, weixinh5native, h5, tinyappsdk, iossdk, androidsdk。只有值为"weixinh5"时会返回跳转URL。
     */
    public $TerminalType;

    /**
     * @var string 身份证号或者是客户系统内部的唯一用户id。（传uid的时候只能使用ImageBase64传的照片进行一比一）a-zA-Z0-9组合。最长长度32位。
     */
    public $IdCard;

    /**
     * @var string 姓名。最长长度32位。
     */
    public $Name;

    /**
     * @var string 回调地址。最长长度1024位。
     */
    public $RedirectUrl;

    /**
     * @var string 额外参数，会在getDetectInfo时带回去。最长长度1024位。
     */
    public $Extra;

    /**
     * @var string 用于一比一时的照片base64。此时必须传入IdCard。
     */
    public $ImageBase64;
    /**
     * @param string $RuleId 规则Id。a-zA-Z0-9组合。最长长度32位。
     * @param string $TerminalType 终端类型。可选值有：weixinh5, weixinh5native, h5, tinyappsdk, iossdk, androidsdk。只有值为"weixinh5"时会返回跳转URL。
     * @param string $IdCard 身份证号或者是客户系统内部的唯一用户id。（传uid的时候只能使用ImageBase64传的照片进行一比一）a-zA-Z0-9组合。最长长度32位。
     * @param string $Name 姓名。最长长度32位。
     * @param string $RedirectUrl 回调地址。最长长度1024位。
     * @param string $Extra 额外参数，会在getDetectInfo时带回去。最长长度1024位。
     * @param string $ImageBase64 用于一比一时的照片base64。此时必须传入IdCard。
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TerminalType",$param) and $param["TerminalType"] !== null) {
            $this->TerminalType = $param["TerminalType"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }
    }
}
