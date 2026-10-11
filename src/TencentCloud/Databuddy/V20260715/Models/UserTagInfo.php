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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户/用户组标签维度信息（用户管理域独立结构，与通用 TagInfo 解耦，仅供用户/用户组标签接口使用）
 *
 * @method string getTagId() 获取<p>标签维度ID</p>
 * @method void setTagId(string $TagId) 设置<p>标签维度ID</p>
 * @method string getTagName() 获取<p>标签名称，查询时填充，写入时不传</p>
 * @method void setTagName(string $TagName) 设置<p>标签名称，查询时填充，写入时不传</p>
 * @method array getValues() 获取<p>该维度下绑定的所有标签值</p>
 * @method void setValues(array $Values) 设置<p>该维度下绑定的所有标签值</p>
 */
class UserTagInfo extends AbstractModel
{
    /**
     * @var string <p>标签维度ID</p>
     */
    public $TagId;

    /**
     * @var string <p>标签名称，查询时填充，写入时不传</p>
     */
    public $TagName;

    /**
     * @var array <p>该维度下绑定的所有标签值</p>
     */
    public $Values;

    /**
     * @param string $TagId <p>标签维度ID</p>
     * @param string $TagName <p>标签名称，查询时填充，写入时不传</p>
     * @param array $Values <p>该维度下绑定的所有标签值</p>
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new TagValueInfo();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }
    }
}
