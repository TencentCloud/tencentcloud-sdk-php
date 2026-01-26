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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetResourcePrivilegeDetailRsp
 *
 * @method array getDetails() 获取权限详情列表
 * @method void setDetails(array $Details) 设置权限详情列表
 * @method integer getTotalCount() 获取总计
 * @method void setTotalCount(integer $TotalCount) 设置总计
 */
class GetResourcePrivilegeDetailRsp extends AbstractModel
{
    /**
     * @var array 权限详情列表
     */
    public $Details;

    /**
     * @var integer 总计
     */
    public $TotalCount;

    /**
     * @param array $Details 权限详情列表
     * @param integer $TotalCount 总计
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
        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ResourcePrivilegeDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
