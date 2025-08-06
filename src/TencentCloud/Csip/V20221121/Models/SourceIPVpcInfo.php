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
 * 调用源IP 外部账号信息
 *
 * @method string getName() 获取账号名称
 * @method void setName(string $Name) 设置账号名称
 * @method integer getAppID() 获取vpc所属appid
 * @method void setAppID(integer $AppID) 设置vpc所属appid
 * @method string getVpcID() 获取vpc id
 * @method void setVpcID(string $VpcID) 设置vpc id
 * @method string getVpcName() 获取vpc 名称
 * @method void setVpcName(string $VpcName) 设置vpc 名称
 */
class SourceIPVpcInfo extends AbstractModel
{
    /**
     * @var string 账号名称
     */
    public $Name;

    /**
     * @var integer vpc所属appid
     */
    public $AppID;

    /**
     * @var string vpc id
     */
    public $VpcID;

    /**
     * @var string vpc 名称
     */
    public $VpcName;

    /**
     * @param string $Name 账号名称
     * @param integer $AppID vpc所属appid
     * @param string $VpcID vpc id
     * @param string $VpcName vpc 名称
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("VpcID",$param) and $param["VpcID"] !== null) {
            $this->VpcID = $param["VpcID"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }
    }
}
