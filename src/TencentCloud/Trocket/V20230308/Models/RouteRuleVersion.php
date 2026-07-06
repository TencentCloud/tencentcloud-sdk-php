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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路由规则版本
 *
 * @method integer getVersion() 获取<p>版本号</p>
 * @method void setVersion(integer $Version) 设置<p>版本号</p>
 * @method integer getCutTimestamp() 获取<p>切流时间戳</p><p>单位：毫秒（ms）</p>
 * @method void setCutTimestamp(integer $CutTimestamp) 设置<p>切流时间戳</p><p>单位：毫秒（ms）</p>
 * @method integer getUpdatedAt() 获取<p>更新时间戳</p><p>单位：毫秒（ms）</p>
 * @method void setUpdatedAt(integer $UpdatedAt) 设置<p>更新时间戳</p><p>单位：毫秒（ms）</p>
 * @method array getRules() 获取<p>路由规则列表</p>
 * @method void setRules(array $Rules) 设置<p>路由规则列表</p>
 */
class RouteRuleVersion extends AbstractModel
{
    /**
     * @var integer <p>版本号</p>
     */
    public $Version;

    /**
     * @var integer <p>切流时间戳</p><p>单位：毫秒（ms）</p>
     */
    public $CutTimestamp;

    /**
     * @var integer <p>更新时间戳</p><p>单位：毫秒（ms）</p>
     */
    public $UpdatedAt;

    /**
     * @var array <p>路由规则列表</p>
     */
    public $Rules;

    /**
     * @param integer $Version <p>版本号</p>
     * @param integer $CutTimestamp <p>切流时间戳</p><p>单位：毫秒（ms）</p>
     * @param integer $UpdatedAt <p>更新时间戳</p><p>单位：毫秒（ms）</p>
     * @param array $Rules <p>路由规则列表</p>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CutTimestamp",$param) and $param["CutTimestamp"] !== null) {
            $this->CutTimestamp = $param["CutTimestamp"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RouteRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
