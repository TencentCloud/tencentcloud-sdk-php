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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已绑定的插件信息。
 *
 * @method integer getTotalCount() 获取已绑定的插件总数。
 * @method void setTotalCount(integer $TotalCount) 设置已绑定的插件总数。
 * @method array getPluginSummary() 获取已绑定的插件信息。
 * @method void setPluginSummary(array $PluginSummary) 设置已绑定的插件信息。
 */
class AttachedPluginSummary extends AbstractModel
{
    /**
     * @var integer 已绑定的插件总数。
     */
    public $TotalCount;

    /**
     * @var array 已绑定的插件信息。
     */
    public $PluginSummary;

    /**
     * @param integer $TotalCount 已绑定的插件总数。
     * @param array $PluginSummary 已绑定的插件信息。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PluginSummary",$param) and $param["PluginSummary"] !== null) {
            $this->PluginSummary = [];
            foreach ($param["PluginSummary"] as $key => $value){
                $obj = new AttachedPluginInfo();
                $obj->deserialize($value);
                array_push($this->PluginSummary, $obj);
            }
        }
    }
}
