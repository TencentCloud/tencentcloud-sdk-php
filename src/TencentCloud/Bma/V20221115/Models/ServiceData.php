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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务响应数据
 *
 * @method integer getProtectURLCount() 获取网站保护关联资产数
 * @method void setProtectURLCount(integer $ProtectURLCount) 设置网站保护关联资产数
 * @method string getProtectURLExpireTime() 获取网站保护服务到期时间
 * @method void setProtectURLExpireTime(string $ProtectURLExpireTime) 设置网站保护服务到期时间
 * @method integer getProtectAPPCount() 获取应用保护关联资产数
 * @method void setProtectAPPCount(integer $ProtectAPPCount) 设置应用保护关联资产数
 * @method string getProtectAPPExpireTime() 获取应用保护服务到期时间
 * @method void setProtectAPPExpireTime(string $ProtectAPPExpireTime) 设置应用保护服务到期时间
 * @method integer getProtectOfficialAccountCount() 获取公众号保护关联资产数
 * @method void setProtectOfficialAccountCount(integer $ProtectOfficialAccountCount) 设置公众号保护关联资产数
 * @method string getProtectOfficialAccountExpireTime() 获取公众号保护服务到期时间
 * @method void setProtectOfficialAccountExpireTime(string $ProtectOfficialAccountExpireTime) 设置公众号保护服务到期时间
 * @method integer getProtectMiniProgramCount() 获取小程序保护关联资产数
 * @method void setProtectMiniProgramCount(integer $ProtectMiniProgramCount) 设置小程序保护关联资产数
 * @method string getProtectMiniProgramExpireTime() 获取小程序保护服务到期时间
 * @method void setProtectMiniProgramExpireTime(string $ProtectMiniProgramExpireTime) 设置小程序保护服务到期时间
 * @method integer getOfflineCount() 获取关停下架使用次数
 * @method void setOfflineCount(integer $OfflineCount) 设置关停下架使用次数
 */
class ServiceData extends AbstractModel
{
    /**
     * @var integer 网站保护关联资产数
     */
    public $ProtectURLCount;

    /**
     * @var string 网站保护服务到期时间
     */
    public $ProtectURLExpireTime;

    /**
     * @var integer 应用保护关联资产数
     */
    public $ProtectAPPCount;

    /**
     * @var string 应用保护服务到期时间
     */
    public $ProtectAPPExpireTime;

    /**
     * @var integer 公众号保护关联资产数
     */
    public $ProtectOfficialAccountCount;

    /**
     * @var string 公众号保护服务到期时间
     */
    public $ProtectOfficialAccountExpireTime;

    /**
     * @var integer 小程序保护关联资产数
     */
    public $ProtectMiniProgramCount;

    /**
     * @var string 小程序保护服务到期时间
     */
    public $ProtectMiniProgramExpireTime;

    /**
     * @var integer 关停下架使用次数
     */
    public $OfflineCount;

    /**
     * @param integer $ProtectURLCount 网站保护关联资产数
     * @param string $ProtectURLExpireTime 网站保护服务到期时间
     * @param integer $ProtectAPPCount 应用保护关联资产数
     * @param string $ProtectAPPExpireTime 应用保护服务到期时间
     * @param integer $ProtectOfficialAccountCount 公众号保护关联资产数
     * @param string $ProtectOfficialAccountExpireTime 公众号保护服务到期时间
     * @param integer $ProtectMiniProgramCount 小程序保护关联资产数
     * @param string $ProtectMiniProgramExpireTime 小程序保护服务到期时间
     * @param integer $OfflineCount 关停下架使用次数
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
        if (array_key_exists("ProtectURLCount",$param) and $param["ProtectURLCount"] !== null) {
            $this->ProtectURLCount = $param["ProtectURLCount"];
        }

        if (array_key_exists("ProtectURLExpireTime",$param) and $param["ProtectURLExpireTime"] !== null) {
            $this->ProtectURLExpireTime = $param["ProtectURLExpireTime"];
        }

        if (array_key_exists("ProtectAPPCount",$param) and $param["ProtectAPPCount"] !== null) {
            $this->ProtectAPPCount = $param["ProtectAPPCount"];
        }

        if (array_key_exists("ProtectAPPExpireTime",$param) and $param["ProtectAPPExpireTime"] !== null) {
            $this->ProtectAPPExpireTime = $param["ProtectAPPExpireTime"];
        }

        if (array_key_exists("ProtectOfficialAccountCount",$param) and $param["ProtectOfficialAccountCount"] !== null) {
            $this->ProtectOfficialAccountCount = $param["ProtectOfficialAccountCount"];
        }

        if (array_key_exists("ProtectOfficialAccountExpireTime",$param) and $param["ProtectOfficialAccountExpireTime"] !== null) {
            $this->ProtectOfficialAccountExpireTime = $param["ProtectOfficialAccountExpireTime"];
        }

        if (array_key_exists("ProtectMiniProgramCount",$param) and $param["ProtectMiniProgramCount"] !== null) {
            $this->ProtectMiniProgramCount = $param["ProtectMiniProgramCount"];
        }

        if (array_key_exists("ProtectMiniProgramExpireTime",$param) and $param["ProtectMiniProgramExpireTime"] !== null) {
            $this->ProtectMiniProgramExpireTime = $param["ProtectMiniProgramExpireTime"];
        }

        if (array_key_exists("OfflineCount",$param) and $param["OfflineCount"] !== null) {
            $this->OfflineCount = $param["OfflineCount"];
        }
    }
}
