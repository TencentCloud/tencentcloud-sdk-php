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
 * 插件相关的API列表信息。
 *
 * @method integer getTotalCount() 获取插件相关的API总数。
 * @method void setTotalCount(integer $TotalCount) 设置插件相关的API总数。
 * @method array getApiSet() 获取插件相关的API信息。
 * @method void setApiSet(array $ApiSet) 设置插件相关的API信息。
 */
class ApiInfoSummary extends AbstractModel
{
    /**
     * @var integer 插件相关的API总数。
     */
    public $TotalCount;

    /**
     * @var array 插件相关的API信息。
     */
    public $ApiSet;

    /**
     * @param integer $TotalCount 插件相关的API总数。
     * @param array $ApiSet 插件相关的API信息。
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

        if (array_key_exists("ApiSet",$param) and $param["ApiSet"] !== null) {
            $this->ApiSet = [];
            foreach ($param["ApiSet"] as $key => $value){
                $obj = new AvailableApiInfo();
                $obj->deserialize($value);
                array_push($this->ApiSet, $obj);
            }
        }
    }
}
