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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCosCredential请求参数结构体
 *
 * @method string getCosType() 获取Cos 密钥类型，取值： Mobile 云手游、PC 云端游、AndroidApp 云手机应用管理、AndroidAppFile 云手机文件管理、AndroidAppBackup 云手机备份还原
 * @method void setCosType(string $CosType) 设置Cos 密钥类型，取值： Mobile 云手游、PC 云端游、AndroidApp 云手机应用管理、AndroidAppFile 云手机文件管理、AndroidAppBackup 云手机备份还原
 * @method AndroidAppCosInfo getAndroidAppCosInfo() 获取云手机应用管理 Cos 数据
 * @method void setAndroidAppCosInfo(AndroidAppCosInfo $AndroidAppCosInfo) 设置云手机应用管理 Cos 数据
 * @method FileCosInfo getAndroidAppFileCosInfo() 获取云手机文件管理 Cos 数据
 * @method void setAndroidAppFileCosInfo(FileCosInfo $AndroidAppFileCosInfo) 设置云手机文件管理 Cos 数据
 */
class CreateCosCredentialRequest extends AbstractModel
{
    /**
     * @var string Cos 密钥类型，取值： Mobile 云手游、PC 云端游、AndroidApp 云手机应用管理、AndroidAppFile 云手机文件管理、AndroidAppBackup 云手机备份还原
     */
    public $CosType;

    /**
     * @var AndroidAppCosInfo 云手机应用管理 Cos 数据
     */
    public $AndroidAppCosInfo;

    /**
     * @var FileCosInfo 云手机文件管理 Cos 数据
     */
    public $AndroidAppFileCosInfo;

    /**
     * @param string $CosType Cos 密钥类型，取值： Mobile 云手游、PC 云端游、AndroidApp 云手机应用管理、AndroidAppFile 云手机文件管理、AndroidAppBackup 云手机备份还原
     * @param AndroidAppCosInfo $AndroidAppCosInfo 云手机应用管理 Cos 数据
     * @param FileCosInfo $AndroidAppFileCosInfo 云手机文件管理 Cos 数据
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
        if (array_key_exists("CosType",$param) and $param["CosType"] !== null) {
            $this->CosType = $param["CosType"];
        }

        if (array_key_exists("AndroidAppCosInfo",$param) and $param["AndroidAppCosInfo"] !== null) {
            $this->AndroidAppCosInfo = new AndroidAppCosInfo();
            $this->AndroidAppCosInfo->deserialize($param["AndroidAppCosInfo"]);
        }

        if (array_key_exists("AndroidAppFileCosInfo",$param) and $param["AndroidAppFileCosInfo"] !== null) {
            $this->AndroidAppFileCosInfo = new FileCosInfo();
            $this->AndroidAppFileCosInfo->deserialize($param["AndroidAppFileCosInfo"]);
        }
    }
}
