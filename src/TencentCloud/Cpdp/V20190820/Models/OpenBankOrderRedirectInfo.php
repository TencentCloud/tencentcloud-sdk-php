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
 * 云企付-下单跳转参数，用于小程序前端跳转
 *
 * @method string getQRCodeUrl() 获取生成二维码，引导用户扫码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQRCodeUrl(string $QRCodeUrl) 设置生成二维码，引导用户扫码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQRCodeKey() 获取二维码凭证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQRCodeKey(string $QRCodeKey) 设置二维码凭证
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取跳转 URL,用于客户端跳转，订单未支付时返回该参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置跳转 URL,用于客户端跳转，订单未支付时返回该参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取跳转凭证过期时间,yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置跳转凭证过期时间,yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMpAppId() 获取小程序 appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMpAppId(string $MpAppId) 设置小程序 appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMpPath() 获取小程序路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMpPath(string $MpPath) 设置小程序路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMpUserName() 获取小程序原始 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMpUserName(string $MpUserName) 设置小程序原始 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method OpenBankFormInfo getFormInfo() 获取网银支付提交页面信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormInfo(OpenBankFormInfo $FormInfo) 设置网银支付提交页面信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpenBankOrderRedirectInfo extends AbstractModel
{
    /**
     * @var string 生成二维码，引导用户扫码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QRCodeUrl;

    /**
     * @var string 二维码凭证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QRCodeKey;

    /**
     * @var string 跳转 URL,用于客户端跳转，订单未支付时返回该参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 跳转凭证过期时间,yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 小程序 appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MpAppId;

    /**
     * @var string 小程序路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MpPath;

    /**
     * @var string 小程序原始 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MpUserName;

    /**
     * @var OpenBankFormInfo 网银支付提交页面信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormInfo;

    /**
     * @param string $QRCodeUrl 生成二维码，引导用户扫码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QRCodeKey 二维码凭证
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 跳转 URL,用于客户端跳转，订单未支付时返回该参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 跳转凭证过期时间,yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MpAppId 小程序 appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MpPath 小程序路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MpUserName 小程序原始 id
注意：此字段可能返回 null，表示取不到有效值。
     * @param OpenBankFormInfo $FormInfo 网银支付提交页面信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("QRCodeUrl",$param) and $param["QRCodeUrl"] !== null) {
            $this->QRCodeUrl = $param["QRCodeUrl"];
        }

        if (array_key_exists("QRCodeKey",$param) and $param["QRCodeKey"] !== null) {
            $this->QRCodeKey = $param["QRCodeKey"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("MpAppId",$param) and $param["MpAppId"] !== null) {
            $this->MpAppId = $param["MpAppId"];
        }

        if (array_key_exists("MpPath",$param) and $param["MpPath"] !== null) {
            $this->MpPath = $param["MpPath"];
        }

        if (array_key_exists("MpUserName",$param) and $param["MpUserName"] !== null) {
            $this->MpUserName = $param["MpUserName"];
        }

        if (array_key_exists("FormInfo",$param) and $param["FormInfo"] !== null) {
            $this->FormInfo = new OpenBankFormInfo();
            $this->FormInfo->deserialize($param["FormInfo"]);
        }
    }
}
