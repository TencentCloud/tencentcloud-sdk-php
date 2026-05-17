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
 * cos调用源ip vpc信息
 *
 * @method string getUin() 获取vpc所属uin
 * @method void setUin(string $Uin) 设置vpc所属uin
 * @method integer getAppId() 获取vpc所属appid
 * @method void setAppId(integer $AppId) 设置vpc所属appid
 * @method string getNickName() 获取昵称
 * @method void setNickName(string $NickName) 设置昵称
 * @method string getVpcId() 获取vpcid信息
 * @method void setVpcId(string $VpcId) 设置vpcid信息
 * @method string getVpcName() 获取vpc名称
 * @method void setVpcName(string $VpcName) 设置vpc名称
 */
class CosInvokeIpVpcInfo extends AbstractModel
{
    /**
     * @var string vpc所属uin
     */
    public $Uin;

    /**
     * @var integer vpc所属appid
     */
    public $AppId;

    /**
     * @var string 昵称
     */
    public $NickName;

    /**
     * @var string vpcid信息
     */
    public $VpcId;

    /**
     * @var string vpc名称
     */
    public $VpcName;

    /**
     * @param string $Uin vpc所属uin
     * @param integer $AppId vpc所属appid
     * @param string $NickName 昵称
     * @param string $VpcId vpcid信息
     * @param string $VpcName vpc名称
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }
    }
}
