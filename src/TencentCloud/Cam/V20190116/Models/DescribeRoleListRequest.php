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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRoleList请求参数结构体
 *
 * @method integer getPage() 获取<p>页码，从1开始</p>
 * @method void setPage(integer $Page) 设置<p>页码，从1开始</p>
 * @method integer getRp() 获取<p>每页行数，不能大于200</p>
 * @method void setRp(integer $Rp) 设置<p>每页行数，不能大于200</p>
 * @method array getTags() 获取<p>标签筛选</p>
 * @method void setTags(array $Tags) 设置<p>标签筛选</p>
 */
class DescribeRoleListRequest extends AbstractModel
{
    /**
     * @var integer <p>页码，从1开始</p>
     */
    public $Page;

    /**
     * @var integer <p>每页行数，不能大于200</p>
     */
    public $Rp;

    /**
     * @var array <p>标签筛选</p>
     */
    public $Tags;

    /**
     * @param integer $Page <p>页码，从1开始</p>
     * @param integer $Rp <p>每页行数，不能大于200</p>
     * @param array $Tags <p>标签筛选</p>
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Rp",$param) and $param["Rp"] !== null) {
            $this->Rp = $param["Rp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RoleTags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
