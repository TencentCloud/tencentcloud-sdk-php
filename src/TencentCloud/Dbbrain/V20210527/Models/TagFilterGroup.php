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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签过滤组。组内 TagPairs 之间为 OR 关系；不同 TagFilterGroup 之间为 AND 关系。
 *
 * @method array getTagPairs() 获取<p>过滤条件-标签组</p>
 * @method void setTagPairs(array $TagPairs) 设置<p>过滤条件-标签组</p>
 */
class TagFilterGroup extends AbstractModel
{
    /**
     * @var array <p>过滤条件-标签组</p>
     */
    public $TagPairs;

    /**
     * @param array $TagPairs <p>过滤条件-标签组</p>
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
        if (array_key_exists("TagPairs",$param) and $param["TagPairs"] !== null) {
            $this->TagPairs = [];
            foreach ($param["TagPairs"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagPairs, $obj);
            }
        }
    }
}
