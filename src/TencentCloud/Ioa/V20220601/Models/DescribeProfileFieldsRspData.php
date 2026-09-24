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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述字段数据
 *
 * @method array getItem() 获取<p>详情item</p>
 * @method void setItem(array $Item) 设置<p>详情item</p>
 * @method ProfileTips getProfileTips() 获取<p>profile开关配置</p>
 * @method void setProfileTips(ProfileTips $ProfileTips) 设置<p>profile开关配置</p>
 */
class DescribeProfileFieldsRspData extends AbstractModel
{
    /**
     * @var array <p>详情item</p>
     */
    public $Item;

    /**
     * @var ProfileTips <p>profile开关配置</p>
     */
    public $ProfileTips;

    /**
     * @param array $Item <p>详情item</p>
     * @param ProfileTips $ProfileTips <p>profile开关配置</p>
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = [];
            foreach ($param["Item"] as $key => $value){
                $obj = new ProfileFieldItem();
                $obj->deserialize($value);
                array_push($this->Item, $obj);
            }
        }

        if (array_key_exists("ProfileTips",$param) and $param["ProfileTips"] !== null) {
            $this->ProfileTips = new ProfileTips();
            $this->ProfileTips->deserialize($param["ProfileTips"]);
        }
    }
}
