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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群资源使用量
 *
 * @method string getName() 获取资源类型
 * @method void setName(string $Name) 设置资源类型
 * @method integer getUsage() 获取资源使用量
 * @method void setUsage(integer $Usage) 设置资源使用量
 * @method array getDetails() 获取资源使用详情
 * @method void setDetails(array $Details) 设置资源使用详情
 */
class ResourceUsage extends AbstractModel
{
    /**
     * @var string 资源类型
     */
    public $Name;

    /**
     * @var integer 资源使用量
     */
    public $Usage;

    /**
     * @var array 资源使用详情
     */
    public $Details;

    /**
     * @param string $Name 资源类型
     * @param integer $Usage 资源使用量
     * @param array $Details 资源使用详情
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ResourceUsageDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
