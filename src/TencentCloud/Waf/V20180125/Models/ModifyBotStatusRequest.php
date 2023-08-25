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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBotStatus请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getCategory() 获取类别
 * @method void setCategory(string $Category) 设置类别
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getInstanceID() 获取实例id
 * @method void setInstanceID(string $InstanceID) 设置实例id
 * @method boolean getIsVersionFour() 获取是否是bot4.0版本
 * @method void setIsVersionFour(boolean $IsVersionFour) 设置是否是bot4.0版本
 * @method string getBotVersion() 获取传入Bot版本号，场景化版本为"4.1.0"
 * @method void setBotVersion(string $BotVersion) 设置传入Bot版本号，场景化版本为"4.1.0"
 */
class ModifyBotStatusRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 类别
     */
    public $Category;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 实例id
     */
    public $InstanceID;

    /**
     * @var boolean 是否是bot4.0版本
     */
    public $IsVersionFour;

    /**
     * @var string 传入Bot版本号，场景化版本为"4.1.0"
     */
    public $BotVersion;

    /**
     * @param string $Domain 域名
     * @param string $Category 类别
     * @param string $Status 状态
     * @param string $InstanceID 实例id
     * @param boolean $IsVersionFour 是否是bot4.0版本
     * @param string $BotVersion 传入Bot版本号，场景化版本为"4.1.0"
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("IsVersionFour",$param) and $param["IsVersionFour"] !== null) {
            $this->IsVersionFour = $param["IsVersionFour"];
        }

        if (array_key_exists("BotVersion",$param) and $param["BotVersion"] !== null) {
            $this->BotVersion = $param["BotVersion"];
        }
    }
}
