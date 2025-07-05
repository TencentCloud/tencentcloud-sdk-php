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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 开通了第三方访问的用户信息
 *
 * @method integer getId() 获取id信息
 * @method void setId(integer $Id) 设置id信息
 * @method string getUin() 获取用户主UIN
 * @method void setUin(string $Uin) 设置用户主UIN
 * @method string getAppId() 获取用户AppId
 * @method void setAppId(string $AppId) 设置用户AppId
 * @method string getCreateTime() 获取开通时间
 * @method void setCreateTime(string $CreateTime) 设置开通时间
 */
class OpendThirdAccessUserInfo extends AbstractModel
{
    /**
     * @var integer id信息
     */
    public $Id;

    /**
     * @var string 用户主UIN
     */
    public $Uin;

    /**
     * @var string 用户AppId
     */
    public $AppId;

    /**
     * @var string 开通时间
     */
    public $CreateTime;

    /**
     * @param integer $Id id信息
     * @param string $Uin 用户主UIN
     * @param string $AppId 用户AppId
     * @param string $CreateTime 开通时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
