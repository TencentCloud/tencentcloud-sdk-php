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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户旗舰版信息
 *
 * @method integer getAppID() 获取<p>用户AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>用户AppID</p>
 * @method boolean getIsUltimateVersion() 获取<p>是否旗舰版</p>
 * @method void setIsUltimateVersion(boolean $IsUltimateVersion) 设置<p>是否旗舰版</p>
 */
class UltimateAppItem extends AbstractModel
{
    /**
     * @var integer <p>用户AppID</p>
     */
    public $AppID;

    /**
     * @var boolean <p>是否旗舰版</p>
     */
    public $IsUltimateVersion;

    /**
     * @param integer $AppID <p>用户AppID</p>
     * @param boolean $IsUltimateVersion <p>是否旗舰版</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("IsUltimateVersion",$param) and $param["IsUltimateVersion"] !== null) {
            $this->IsUltimateVersion = $param["IsUltimateVersion"];
        }
    }
}
