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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取直播域名
 * @method void setName(string $Name) 设置直播域名
 * @method integer getType() 获取域名类型。0-推流，1-播放
 * @method void setType(integer $Type) 设置域名类型。0-推流，1-播放
 * @method integer getStatus() 获取域名状态。0-停用，1-启用
 * @method void setStatus(integer $Status) 设置域名状态。0-停用，1-启用
 * @method string getCreateTime() 获取添加时间
 * @method void setCreateTime(string $CreateTime) 设置添加时间
 * @method integer getBCName() 获取是否有CName到固定规则域名。0-否，1-是
 * @method void setBCName(integer $BCName) 设置是否有CName到固定规则域名。0-否，1-是
 * @method string getTargetDomain() 获取cname对应的域名
 * @method void setTargetDomain(string $TargetDomain) 设置cname对应的域名
 * @method integer getPlayType() 获取播放区域，只在Type=1时该参数有意义。
1-国内，2-全球，3-海外。
 * @method void setPlayType(integer $PlayType) 设置播放区域，只在Type=1时该参数有意义。
1-国内，2-全球，3-海外。
 * @method integer getIsDelayLive() 获取0：普通直播，
1：慢直播。
 * @method void setIsDelayLive(integer $IsDelayLive) 设置0：普通直播，
1：慢直播。
 * @method string getCurrentCName() 获取当前客户使用的cname信息
 * @method void setCurrentCName(string $CurrentCName) 设置当前客户使用的cname信息
 */

/**
 *直播域名信息
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string 直播域名
     */
    public $Name;

    /**
     * @var integer 域名类型。0-推流，1-播放
     */
    public $Type;

    /**
     * @var integer 域名状态。0-停用，1-启用
     */
    public $Status;

    /**
     * @var string 添加时间
     */
    public $CreateTime;

    /**
     * @var integer 是否有CName到固定规则域名。0-否，1-是
     */
    public $BCName;

    /**
     * @var string cname对应的域名
     */
    public $TargetDomain;

    /**
     * @var integer 播放区域，只在Type=1时该参数有意义。
1-国内，2-全球，3-海外。
     */
    public $PlayType;

    /**
     * @var integer 0：普通直播，
1：慢直播。
     */
    public $IsDelayLive;

    /**
     * @var string 当前客户使用的cname信息
     */
    public $CurrentCName;
    /**
     * @param string $Name 直播域名
     * @param integer $Type 域名类型。0-推流，1-播放
     * @param integer $Status 域名状态。0-停用，1-启用
     * @param string $CreateTime 添加时间
     * @param integer $BCName 是否有CName到固定规则域名。0-否，1-是
     * @param string $TargetDomain cname对应的域名
     * @param integer $PlayType 播放区域，只在Type=1时该参数有意义。
1-国内，2-全球，3-海外。
     * @param integer $IsDelayLive 0：普通直播，
1：慢直播。
     * @param string $CurrentCName 当前客户使用的cname信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BCName",$param) and $param["BCName"] !== null) {
            $this->BCName = $param["BCName"];
        }

        if (array_key_exists("TargetDomain",$param) and $param["TargetDomain"] !== null) {
            $this->TargetDomain = $param["TargetDomain"];
        }

        if (array_key_exists("PlayType",$param) and $param["PlayType"] !== null) {
            $this->PlayType = $param["PlayType"];
        }

        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }

        if (array_key_exists("CurrentCName",$param) and $param["CurrentCName"] !== null) {
            $this->CurrentCName = $param["CurrentCName"];
        }
    }
}
