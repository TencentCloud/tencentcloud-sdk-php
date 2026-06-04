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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用分享访问控制配置
 *
 * @method integer getAccessType() 获取访问控制类型。枚举值: 1:公开访问(所有用户都可访问), 2:内部访问(仅企业用户可访问), 3:账号白名单(指定UIN/手机/邮箱/IP可访问)
 * @method void setAccessType(integer $AccessType) 设置访问控制类型。枚举值: 1:公开访问(所有用户都可访问), 2:内部访问(仅企业用户可访问), 3:账号白名单(指定UIN/手机/邮箱/IP可访问)
 * @method boolean getEnabled() 获取体验链接开关
 * @method void setEnabled(boolean $Enabled) 设置体验链接开关
 * @method array getWhitelist() 获取白名单(仅 access_type=ACCOUNT_WHITELIST 时生效)
 * @method void setWhitelist(array $Whitelist) 设置白名单(仅 access_type=ACCOUNT_WHITELIST 时生效)
 */
class AppShareAccessControl extends AbstractModel
{
    /**
     * @var integer 访问控制类型。枚举值: 1:公开访问(所有用户都可访问), 2:内部访问(仅企业用户可访问), 3:账号白名单(指定UIN/手机/邮箱/IP可访问)
     */
    public $AccessType;

    /**
     * @var boolean 体验链接开关
     */
    public $Enabled;

    /**
     * @var array 白名单(仅 access_type=ACCOUNT_WHITELIST 时生效)
     */
    public $Whitelist;

    /**
     * @param integer $AccessType 访问控制类型。枚举值: 1:公开访问(所有用户都可访问), 2:内部访问(仅企业用户可访问), 3:账号白名单(指定UIN/手机/邮箱/IP可访问)
     * @param boolean $Enabled 体验链接开关
     * @param array $Whitelist 白名单(仅 access_type=ACCOUNT_WHITELIST 时生效)
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = [];
            foreach ($param["Whitelist"] as $key => $value){
                $obj = new AppShareWhitelistItem();
                $obj->deserialize($value);
                array_push($this->Whitelist, $obj);
            }
        }
    }
}
