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
 * instance_id和对应的appid账号信息
 *
 * @method integer getAppId() 获取<p>APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>APPID</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 */
class InstanceIDWithAppIdItem extends AbstractModel
{
    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @param integer $AppId <p>APPID</p>
     * @param string $InstanceID <p>实例ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
