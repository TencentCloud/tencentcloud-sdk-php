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
 * CLB七层转发规则
 *
 * @method string getListenerID() 获取<p>监听器ID</p>
 * @method void setListenerID(string $ListenerID) 设置<p>监听器ID</p>
 * @method string getLocationID() 获取<p>规则ID</p>
 * @method void setLocationID(string $LocationID) 设置<p>规则ID</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getUrl() 获取<p>URL</p>
 * @method void setUrl(string $Url) 设置<p>URL</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 */
class ClbListenerRuleItem extends AbstractModel
{
    /**
     * @var string <p>监听器ID</p>
     */
    public $ListenerID;

    /**
     * @var string <p>规则ID</p>
     */
    public $LocationID;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>URL</p>
     */
    public $Url;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @param string $ListenerID <p>监听器ID</p>
     * @param string $LocationID <p>规则ID</p>
     * @param string $Domain <p>域名</p>
     * @param string $Url <p>URL</p>
     * @param string $CreateTime <p>创建时间</p>
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
        if (array_key_exists("ListenerID",$param) and $param["ListenerID"] !== null) {
            $this->ListenerID = $param["ListenerID"];
        }

        if (array_key_exists("LocationID",$param) and $param["LocationID"] !== null) {
            $this->LocationID = $param["LocationID"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
