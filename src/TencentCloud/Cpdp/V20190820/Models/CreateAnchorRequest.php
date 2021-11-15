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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAnchor请求参数结构体
 *
 * @method string getAnchorUid() 获取主播业务ID，唯一
 * @method void setAnchorUid(string $AnchorUid) 设置主播业务ID，唯一
 * @method string getAnchorName() 获取主播姓名
 * @method void setAnchorName(string $AnchorName) 设置主播姓名
 * @method string getAnchorPhone() 获取主播电话
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method void setAnchorPhone(string $AnchorPhone) 设置主播电话
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method string getAnchorEmail() 获取主播邮箱
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method void setAnchorEmail(string $AnchorEmail) 设置主播邮箱
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method string getAnchorAddress() 获取主播地址
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method void setAnchorAddress(string $AnchorAddress) 设置主播地址
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method string getAnchorIdNo() 获取主播身份证号
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method void setAnchorIdNo(string $AnchorIdNo) 设置主播身份证号
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
 * @method string getAnchorType() 获取主播类型
__KMusic__:全民K歌
__QMusic__:QQ音乐
__WeChat__:微信视频号
 * @method void setAnchorType(string $AnchorType) 设置主播类型
__KMusic__:全民K歌
__QMusic__:QQ音乐
__WeChat__:微信视频号
 * @method array getAnchorExtendInfo() 获取主播扩展信息
 * @method void setAnchorExtendInfo(array $AnchorExtendInfo) 设置主播扩展信息
 */
class CreateAnchorRequest extends AbstractModel
{
    /**
     * @var string 主播业务ID，唯一
     */
    public $AnchorUid;

    /**
     * @var string 主播姓名
     */
    public $AnchorName;

    /**
     * @var string 主播电话
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     */
    public $AnchorPhone;

    /**
     * @var string 主播邮箱
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     */
    public $AnchorEmail;

    /**
     * @var string 主播地址
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     */
    public $AnchorAddress;

    /**
     * @var string 主播身份证号
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     */
    public $AnchorIdNo;

    /**
     * @var string 主播类型
__KMusic__:全民K歌
__QMusic__:QQ音乐
__WeChat__:微信视频号
     */
    public $AnchorType;

    /**
     * @var array 主播扩展信息
     */
    public $AnchorExtendInfo;

    /**
     * @param string $AnchorUid 主播业务ID，唯一
     * @param string $AnchorName 主播姓名
     * @param string $AnchorPhone 主播电话
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     * @param string $AnchorEmail 主播邮箱
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     * @param string $AnchorAddress 主播地址
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     * @param string $AnchorIdNo 主播身份证号
_敏感信息_ 使用 __AES128-CBC-PKCS#7__ 加密
     * @param string $AnchorType 主播类型
__KMusic__:全民K歌
__QMusic__:QQ音乐
__WeChat__:微信视频号
     * @param array $AnchorExtendInfo 主播扩展信息
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
        if (array_key_exists("AnchorUid",$param) and $param["AnchorUid"] !== null) {
            $this->AnchorUid = $param["AnchorUid"];
        }

        if (array_key_exists("AnchorName",$param) and $param["AnchorName"] !== null) {
            $this->AnchorName = $param["AnchorName"];
        }

        if (array_key_exists("AnchorPhone",$param) and $param["AnchorPhone"] !== null) {
            $this->AnchorPhone = $param["AnchorPhone"];
        }

        if (array_key_exists("AnchorEmail",$param) and $param["AnchorEmail"] !== null) {
            $this->AnchorEmail = $param["AnchorEmail"];
        }

        if (array_key_exists("AnchorAddress",$param) and $param["AnchorAddress"] !== null) {
            $this->AnchorAddress = $param["AnchorAddress"];
        }

        if (array_key_exists("AnchorIdNo",$param) and $param["AnchorIdNo"] !== null) {
            $this->AnchorIdNo = $param["AnchorIdNo"];
        }

        if (array_key_exists("AnchorType",$param) and $param["AnchorType"] !== null) {
            $this->AnchorType = $param["AnchorType"];
        }

        if (array_key_exists("AnchorExtendInfo",$param) and $param["AnchorExtendInfo"] !== null) {
            $this->AnchorExtendInfo = [];
            foreach ($param["AnchorExtendInfo"] as $key => $value){
                $obj = new AnchorExtendInfo();
                $obj->deserialize($value);
                array_push($this->AnchorExtendInfo, $obj);
            }
        }
    }
}
