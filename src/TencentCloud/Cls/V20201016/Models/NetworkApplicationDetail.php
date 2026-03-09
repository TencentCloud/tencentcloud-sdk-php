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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络应用任务详情
 *
 * @method string getNetworkAppId() 获取网络应用Id
 * @method void setNetworkAppId(string $NetworkAppId) 设置网络应用Id
 * @method string getName() 获取网络应用名称
 * @method void setName(string $Name) 设置网络应用名称
 * @method string getRegion() 获取地域code
 * @method void setRegion(string $Region) 设置地域code
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method string getLogsetId() 获取日志集id
 * @method void setLogsetId(string $LogsetId) 设置日志集id
 * @method string getToken() 获取应用token
 * @method void setToken(string $Token) 设置应用token
 * @method integer getUin() 获取主账号id
 * @method void setUin(integer $Uin) 设置主账号id
 * @method integer getSubUin() 获取子账号id
 * @method void setSubUin(integer $SubUin) 设置子账号id
 * @method integer getCreateTime() 获取创建时间，秒级时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，秒级时间戳
 * @method integer getUpdateTime() 获取更新时间，秒级时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，秒级时间戳
 */
class NetworkApplicationDetail extends AbstractModel
{
    /**
     * @var string 网络应用Id
     */
    public $NetworkAppId;

    /**
     * @var string 网络应用名称
     */
    public $Name;

    /**
     * @var string 地域code
     */
    public $Region;

    /**
     * @var string 日志主题id
     */
    public $TopicId;

    /**
     * @var string 日志集id
     */
    public $LogsetId;

    /**
     * @var string 应用token
     */
    public $Token;

    /**
     * @var integer 主账号id
     */
    public $Uin;

    /**
     * @var integer 子账号id
     */
    public $SubUin;

    /**
     * @var integer 创建时间，秒级时间戳
     */
    public $CreateTime;

    /**
     * @var integer 更新时间，秒级时间戳
     */
    public $UpdateTime;

    /**
     * @param string $NetworkAppId 网络应用Id
     * @param string $Name 网络应用名称
     * @param string $Region 地域code
     * @param string $TopicId 日志主题id
     * @param string $LogsetId 日志集id
     * @param string $Token 应用token
     * @param integer $Uin 主账号id
     * @param integer $SubUin 子账号id
     * @param integer $CreateTime 创建时间，秒级时间戳
     * @param integer $UpdateTime 更新时间，秒级时间戳
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
        if (array_key_exists("NetworkAppId",$param) and $param["NetworkAppId"] !== null) {
            $this->NetworkAppId = $param["NetworkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
