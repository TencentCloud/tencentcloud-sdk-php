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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大区环境网络配置
 *
 * @method boolean getDisableExternalAccess() 获取true：不能访问公网
 * @method void setDisableExternalAccess(boolean $DisableExternalAccess) 设置true：不能访问公网
 * @method boolean getDisableDownloadDataAcl() 获取true：不能创建数据下载权限
 * @method void setDisableDownloadDataAcl(boolean $DisableDownloadDataAcl) 设置true：不能创建数据下载权限
 */
class EnvInternetAccessSetting extends AbstractModel
{
    /**
     * @var boolean true：不能访问公网
     */
    public $DisableExternalAccess;

    /**
     * @var boolean true：不能创建数据下载权限
     */
    public $DisableDownloadDataAcl;

    /**
     * @param boolean $DisableExternalAccess true：不能访问公网
     * @param boolean $DisableDownloadDataAcl true：不能创建数据下载权限
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
        if (array_key_exists("DisableExternalAccess",$param) and $param["DisableExternalAccess"] !== null) {
            $this->DisableExternalAccess = $param["DisableExternalAccess"];
        }

        if (array_key_exists("DisableDownloadDataAcl",$param) and $param["DisableDownloadDataAcl"] !== null) {
            $this->DisableDownloadDataAcl = $param["DisableDownloadDataAcl"];
        }
    }
}
