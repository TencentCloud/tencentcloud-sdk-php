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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TSF机器实例分页对象
 *
 * @method integer getTotalCount() 获取机器实例总数目
 * @method void setTotalCount(integer $TotalCount) 设置机器实例总数目
 * @method array getContent() 获取机器实例列表
 * @method void setContent(array $Content) 设置机器实例列表
 */
class TsfPageInstance extends AbstractModel
{
    /**
     * @var integer 机器实例总数目
     */
    public $TotalCount;

    /**
     * @var array 机器实例列表
     */
    public $Content;

    /**
     * @param integer $TotalCount 机器实例总数目
     * @param array $Content 机器实例列表
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }
    }
}
