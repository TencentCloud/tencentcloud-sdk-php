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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播域名信息
 *
 * @method string getName() 获取<p>直播域名。</p>
 * @method void setName(string $Name) 设置<p>直播域名。</p>
 * @method integer getType() 获取<p>域名类型:<br>0: 推流。<br>1: 播放。</p>
 * @method void setType(integer $Type) 设置<p>域名类型:<br>0: 推流。<br>1: 播放。</p>
 * @method integer getStatus() 获取<p>域名状态:<br>0: 停用。<br>1: 启用。</p>
 * @method void setStatus(integer $Status) 设置<p>域名状态:<br>0: 停用。<br>1: 启用。</p>
 * @method string getCreateTime() 获取<p>添加时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>添加时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method integer getBCName() 获取<p>是否有 CName 到固定规则域名:<br>0: 否。<br>1: 是。</p>
 * @method void setBCName(integer $BCName) 设置<p>是否有 CName 到固定规则域名:<br>0: 否。<br>1: 是。</p>
 * @method string getTargetDomain() 获取<p>cname 对应的域名。</p>
 * @method void setTargetDomain(string $TargetDomain) 设置<p>cname 对应的域名。</p>
 * @method integer getPlayType() 获取<p>播放区域，只在 Type=1 时该参数有意义。<br>1: 国内。<br>2: 全球。<br>3: 海外。</p>
 * @method void setPlayType(integer $PlayType) 设置<p>播放区域，只在 Type=1 时该参数有意义。<br>1: 国内。<br>2: 全球。<br>3: 海外。</p>
 * @method integer getIsDelayLive() 获取<p>是否慢直播:<br>0: 普通直播。<br>1: 慢直播。</p>
 * @method void setIsDelayLive(integer $IsDelayLive) 设置<p>是否慢直播:<br>0: 普通直播。<br>1: 慢直播。</p>
 * @method string getCurrentCName() 获取<p>当前客户使用的 cname 信息。</p>
 * @method void setCurrentCName(string $CurrentCName) 设置<p>当前客户使用的 cname 信息。</p>
 * @method integer getRentTag() 获取<p>失效参数，可忽略。</p>
 * @method void setRentTag(integer $RentTag) 设置<p>失效参数，可忽略。</p>
 * @method string getRentExpireTime() 获取<p>失效参数，可忽略。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method void setRentExpireTime(string $RentExpireTime) 设置<p>失效参数，可忽略。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method integer getIsMiniProgramLive() 获取<p>0: 标准直播。<br>1: 小程序直播。</p>
 * @method void setIsMiniProgramLive(integer $IsMiniProgramLive) 设置<p>0: 标准直播。<br>1: 小程序直播。</p>
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string <p>直播域名。</p>
     */
    public $Name;

    /**
     * @var integer <p>域名类型:<br>0: 推流。<br>1: 播放。</p>
     */
    public $Type;

    /**
     * @var integer <p>域名状态:<br>0: 停用。<br>1: 启用。</p>
     */
    public $Status;

    /**
     * @var string <p>添加时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>是否有 CName 到固定规则域名:<br>0: 否。<br>1: 是。</p>
     */
    public $BCName;

    /**
     * @var string <p>cname 对应的域名。</p>
     */
    public $TargetDomain;

    /**
     * @var integer <p>播放区域，只在 Type=1 时该参数有意义。<br>1: 国内。<br>2: 全球。<br>3: 海外。</p>
     */
    public $PlayType;

    /**
     * @var integer <p>是否慢直播:<br>0: 普通直播。<br>1: 慢直播。</p>
     */
    public $IsDelayLive;

    /**
     * @var string <p>当前客户使用的 cname 信息。</p>
     */
    public $CurrentCName;

    /**
     * @var integer <p>失效参数，可忽略。</p>
     */
    public $RentTag;

    /**
     * @var string <p>失效参数，可忽略。<br>注：此字段为北京时间（UTC+8时区）。</p>
     */
    public $RentExpireTime;

    /**
     * @var integer <p>0: 标准直播。<br>1: 小程序直播。</p>
     */
    public $IsMiniProgramLive;

    /**
     * @param string $Name <p>直播域名。</p>
     * @param integer $Type <p>域名类型:<br>0: 推流。<br>1: 播放。</p>
     * @param integer $Status <p>域名状态:<br>0: 停用。<br>1: 启用。</p>
     * @param string $CreateTime <p>添加时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
     * @param integer $BCName <p>是否有 CName 到固定规则域名:<br>0: 否。<br>1: 是。</p>
     * @param string $TargetDomain <p>cname 对应的域名。</p>
     * @param integer $PlayType <p>播放区域，只在 Type=1 时该参数有意义。<br>1: 国内。<br>2: 全球。<br>3: 海外。</p>
     * @param integer $IsDelayLive <p>是否慢直播:<br>0: 普通直播。<br>1: 慢直播。</p>
     * @param string $CurrentCName <p>当前客户使用的 cname 信息。</p>
     * @param integer $RentTag <p>失效参数，可忽略。</p>
     * @param string $RentExpireTime <p>失效参数，可忽略。<br>注：此字段为北京时间（UTC+8时区）。</p>
     * @param integer $IsMiniProgramLive <p>0: 标准直播。<br>1: 小程序直播。</p>
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

        if (array_key_exists("RentTag",$param) and $param["RentTag"] !== null) {
            $this->RentTag = $param["RentTag"];
        }

        if (array_key_exists("RentExpireTime",$param) and $param["RentExpireTime"] !== null) {
            $this->RentExpireTime = $param["RentExpireTime"];
        }

        if (array_key_exists("IsMiniProgramLive",$param) and $param["IsMiniProgramLive"] !== null) {
            $this->IsMiniProgramLive = $param["IsMiniProgramLive"];
        }
    }
}
