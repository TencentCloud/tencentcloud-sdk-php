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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子企业套餐使用情况
 *
 * @method string getOrganizationName() 获取子企业名称
 * @method void setOrganizationName(string $OrganizationName) 设置子企业名称
 * @method array getUsage() 获取 
 * @method void setUsage(array $Usage) 设置 
 */
class SubOrgBillSummary extends AbstractModel
{
    /**
     * @var string 子企业名称
     */
    public $OrganizationName;

    /**
     * @var array  
     */
    public $Usage;

    /**
     * @param string $OrganizationName 子企业名称
     * @param array $Usage  
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
        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = [];
            foreach ($param["Usage"] as $key => $value){
                $obj = new SubOrgBillUsage();
                $obj->deserialize($value);
                array_push($this->Usage, $obj);
            }
        }
    }
}
