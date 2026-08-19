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
 * 用户配置同步状态
 *
 * @method integer getAppID() 获取<p>用户AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>用户AppID</p>
 * @method boolean getAllowSync() 获取<p>是否允许管理员同步</p>
 * @method void setAllowSync(boolean $AllowSync) 设置<p>是否允许管理员同步</p>
 * @method boolean getInConf() 获取<p>是否在配置中</p>
 * @method void setInConf(boolean $InConf) 设置<p>是否在配置中</p>
 * @method boolean getManagedByOther() 获取<p>是否被其他管理员同步</p>
 * @method void setManagedByOther(boolean $ManagedByOther) 设置<p>是否被其他管理员同步</p>
 */
class UserConfSyncStatus extends AbstractModel
{
    /**
     * @var integer <p>用户AppID</p>
     */
    public $AppID;

    /**
     * @var boolean <p>是否允许管理员同步</p>
     */
    public $AllowSync;

    /**
     * @var boolean <p>是否在配置中</p>
     */
    public $InConf;

    /**
     * @var boolean <p>是否被其他管理员同步</p>
     */
    public $ManagedByOther;

    /**
     * @param integer $AppID <p>用户AppID</p>
     * @param boolean $AllowSync <p>是否允许管理员同步</p>
     * @param boolean $InConf <p>是否在配置中</p>
     * @param boolean $ManagedByOther <p>是否被其他管理员同步</p>
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

        if (array_key_exists("AllowSync",$param) and $param["AllowSync"] !== null) {
            $this->AllowSync = $param["AllowSync"];
        }

        if (array_key_exists("InConf",$param) and $param["InConf"] !== null) {
            $this->InConf = $param["InConf"];
        }

        if (array_key_exists("ManagedByOther",$param) and $param["ManagedByOther"] !== null) {
            $this->ManagedByOther = $param["ManagedByOther"];
        }
    }
}
