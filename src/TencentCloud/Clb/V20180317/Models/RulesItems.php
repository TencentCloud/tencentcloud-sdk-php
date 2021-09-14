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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 七层规则对象
 *
 * @method string getLocationId() 获取规则id
 * @method void setLocationId(string $LocationId) 设置规则id
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getUrl() 获取uri
 * @method void setUrl(string $Url) 设置uri
 * @method array getTargets() 获取绑定的后端对象
 * @method void setTargets(array $Targets) 设置绑定的后端对象
 */
class RulesItems extends AbstractModel
{
    /**
     * @var string 规则id
     */
    public $LocationId;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string uri
     */
    public $Url;

    /**
     * @var array 绑定的后端对象
     */
    public $Targets;

    /**
     * @param string $LocationId 规则id
     * @param string $Domain 域名
     * @param string $Url uri
     * @param array $Targets 绑定的后端对象
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
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new LbRsTargets();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
